<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Midtrans\Config;
use Midtrans\Transaction;

class TransactionLogController extends Controller
{
    public function __construct()
    {
        // Set Midtrans configuration
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
    }

    /**
     * Tampilkan semua transaksi user yang sedang login
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Ambil semua transaksi user yang login dengan JOIN ke products untuk mendapatkan nama produk
        $transactions = DB::table('orders')
            ->select(
                'orders.*',
                DB::raw('GROUP_CONCAT(products.nama_produk SEPARATOR ", ") as product_names'),
                DB::raw('COUNT(DISTINCT products.product_id) as product_count')
            )
            ->leftJoin('products', function($join) {
                $join->on(DB::raw('FIND_IN_SET(products.product_id, orders.product_id)'), '>', DB::raw('0'));
            })
            ->where('orders.user_id', Auth::id())
            ->groupBy('orders.order_id')
            ->orderBy('orders.created_at', 'desc')
            ->get();

        return view('transaction', compact('transactions'));
    }

    /**
     * Tampilkan detail transaksi dari DB lokal + Midtrans API
     */
    public function show($orderId)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Ambil transaksi dari database lokal
        $transaction = DB::table('orders')
            ->where('order_id', $orderId)
            ->where('user_id', Auth::id())
            ->first();

        if (!$transaction) {
            return redirect()->route('transaction.log')->with('error', 'Transaksi tidak ditemukan.');
        }

        // Ambil detail produk
        $productIds = explode(',', $transaction->product_id);
        $products = DB::table('products')
            ->whereIn('product_id', $productIds)
            ->get();

        // ✅ FETCH DATA DARI MIDTRANS API (jika ada transaction_id)
        $midtransData = null;
        if ($transaction->transaction_id) {
            try {
                $midtransData = $this->getMidtransTransactionDetail($transaction->transaction_id);
                
                // ✅ OPTIONAL:  Sync status jika berbeda
                if ($midtransData && $midtransData['status'] !== $transaction->payment_status) {
                    $this->syncTransactionStatus($orderId, $midtransData);
                    // Reload transaction data setelah sync
                    $transaction = DB::table('orders')->where('order_id', $orderId)->first();
                }
            } catch (\Exception $e) {
                Log:: warning("Failed to fetch Midtrans data for order {$orderId}: " . $e->getMessage());
                // Tetap lanjut dengan data lokal jika Midtrans API gagal
            }
        }

        return view('transaction-detail', compact('transaction', 'products', 'midtransData'));
    }

    /**
     * Get transaction detail dari Midtrans API
     */
    private function getMidtransTransactionDetail($transactionId)
    {
        try {
            $status = Transaction::status($transactionId);
            
            return [
                'order_id' => $status->order_id ??  null,
                'transaction_id' => $status->transaction_id ?? null,
                'transaction_status' => $status->transaction_status ?? null,
                'status' => $this->mapMidtransStatus($status->transaction_status ??  null),
                'payment_type' => $status->payment_type ?? null,
                'transaction_time' => $status->transaction_time ?? null,
                'settlement_time' => $status->settlement_time ?? null,
                'gross_amount' => $status->gross_amount ?? null,
                'currency' => $status->currency ??  'IDR',
                'fraud_status' => $status->fraud_status ?? null,
                'bank' => $status->bank ?? null,
                'va_numbers' => $status->va_numbers ?? null,
                'biller_code' => $status->biller_code ?? null,
                'bill_key' => $status->bill_key ?? null,
                'pdf_url' => $status->pdf_url ?? null,
                'expiry_time' => $status->expiry_time ?? null,
                'raw_data' => $status, // Simpan raw data untuk debugging
            ];
        } catch (\Exception $e) {
            Log::error('Midtrans API Error: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Map Midtrans transaction status ke status lokal
     */
    private function mapMidtransStatus($transactionStatus)
    {
        $statusMap = [
            'capture' => 'success',
            'settlement' => 'success',
            'pending' => 'pending',
            'deny' => 'failed',
            'expire' => 'failed',
            'cancel' => 'failed',
            'refund' => 'refunded',
            'partial_refund' => 'partial_refunded',
        ];

        return $statusMap[$transactionStatus] ?? 'unknown';
    }

    /**
     * Sync transaction status dari Midtrans ke database lokal
     */
    private function syncTransactionStatus($orderId, $midtransData)
    {
        DB::table('orders')
            ->where('order_id', $orderId)
            ->update([
                'payment_status' => $midtransData['status'],
                'status' => $midtransData['status'] === 'success' ? 'Paid' : 'Pending',
                'transaction_time' => $midtransData['transaction_time'] ?? now(),
                'updated_at' => now(),
            ]);

        Log::info("Order #{$orderId} synced with Midtrans status:  {$midtransData['status']}");
    }

    /**
     * Force sync semua transaksi dengan Midtrans
     */
    public function syncAll()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $transactions = DB::table('orders')
            ->where('user_id', Auth::id())
            ->whereNotNull('transaction_id')
            ->get();

        $syncCount = 0;
        $errorCount = 0;

        foreach ($transactions as $transaction) {
            try {
                $midtransData = $this->getMidtransTransactionDetail($transaction->transaction_id);
                
                if ($midtransData['status'] !== $transaction->payment_status) {
                    $this->syncTransactionStatus($transaction->order_id, $midtransData);
                    $syncCount++;
                }
            } catch (\Exception $e) {
                $errorCount++;
                Log::error("Sync failed for order {$transaction->order_id}: " . $e->getMessage());
            }
        }

        return redirect()->route('transaction.log')
            ->with('success', "Sync completed:  {$syncCount} updated, {$errorCount} errors.");
    }

    /**
     * Filter transaksi berdasarkan status
     */
    public function filterByStatus(Request $request)
    {
        $status = $request->get('status', 'all');

        $query = DB::table('orders')->where('user_id', Auth:: id());

        if ($status !== 'all') {
            $query->where('payment_status', $status);
        }

        $transactions = $query->orderBy('created_at', 'desc')->get();

        return view('transaction-log', compact('transactions', 'status'));
    }

    /**
     * Download invoice PDF (jika tersedia dari Midtrans)
     */
    public function downloadInvoice($orderId)
    {
        $transaction = DB::table('orders')
            ->where('order_id', $orderId)
            ->where('user_id', Auth:: id())
            ->first();

        if (!$transaction || ! $transaction->transaction_id) {
            return redirect()->back()->with('error', 'Transaction not found.');
        }

        try {
            $midtransData = $this->getMidtransTransactionDetail($transaction->transaction_id);
            
            if (isset($midtransData['pdf_url'])) {
                return redirect($midtransData['pdf_url']);
            } else {
                return redirect()->back()->with('error', 'Invoice PDF not available.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to get invoice:  ' . $e->getMessage());
        }
    }
}