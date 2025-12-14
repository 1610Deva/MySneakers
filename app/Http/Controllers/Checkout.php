<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Notification;

class Checkout extends Controller
{
    public function __construct()
    {
        // Set Midtrans configuration
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');
    }

    // Menampilkan halaman payment
    public function index()
    {
        return view('payment');
    }

    // Proses checkout dan simpan order
    public function store(Request $request)
    {
        // ✅ Cek login
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login untuk checkout.');
        }

        // ✅ Case 1: Dari halaman produk (single product checkout)
        if ($request->has('product_id') && ! $request->has('cart_items')) {
            $validated = $request->validate([
                'product_id' => 'required|string',
                'product_name' => 'required|string',
                'product_brand' => 'required|string',
                'product_price' => 'required|numeric',
                'quantity' => 'required|integer|min:1',
                'size' => 'nullable|string',
            ]);

            try {
                // Buat order dengan status Pending
                $orderId = DB::table('orders')->insertGetId([
                    'user_id' => Auth::id(),
                    'product_id' => $validated['product_id'],
                    'status' => 'Pending',
                    'total' => $validated['product_price'] * $validated['quantity'],
                    'customer_name' => Auth::user()->name,
                    'customer_email' => Auth:: user()->email,
                    'customer_phone' => '',
                    'shipping_courier' => '',
                    'shipping_service' => '',
                    'shipping_cost' => 0,
                    'payment_status' => 'pending',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                // Kurangi stok produk
                DB::table('products')
                    ->where('product_id', $validated['product_id'])
                    ->decrement('jumlah_stok', $validated['quantity']);

                session()->put('checkout_product', [
                    'product_id' => $validated['product_id'],
                    'product_name' => $validated['product_name'],
                    'product_brand' => $validated['product_brand'],
                    'product_price' => $validated['product_price'],
                    'quantity' => $validated['quantity'],
                    'size' => $validated['size'] ??  'Not Selected',
                    'image' => asset('images/products/nike-pandalow.webp'),
                ]);

                session()->put('current_order_id', $orderId);

                return redirect()->route('checkout')
                    ->with('success', 'Order dibuat!  Silakan lengkapi data pembayaran.');
            } catch (\Exception $e) {
                Log::error('Checkout Error: ' . $e->getMessage());
                return back()->with('error', 'Terjadi kesalahan:  ' . $e->getMessage());
            }
        }

        // ✅ Case 2: Dari halaman payment (dengan cart_items dan data lengkap)
        elseif ($request->has('cart_items')) {
            $validated = $request->validate([
                'customerName' => 'required|string|min:3',
                'customerEmail' => 'required|email',
                'customerPhone' => 'required|string|min:10|max:13',
                'shipping_courier' => 'required|string',
                'shipping_service' => 'required|string',
                'shipping_cost' => 'required|numeric',
                'total' => 'required|numeric',
                'cart_items' => 'required|json',
            ]);

            try {
                $cartItems = json_decode($validated['cart_items'], true);
                $orderId = session('current_order_id');

                if ($orderId) {
                    // Update order yang sudah ada
                    DB::table('orders')
                        ->where('order_id', $orderId)
                        ->update([
                            'customer_name' => $validated['customerName'],
                            'customer_email' => $validated['customerEmail'],
                            'customer_phone' => '+62' . $validated['customerPhone'],
                            'shipping_courier' => $validated['shipping_courier'],
                            'shipping_service' => $validated['shipping_service'],
                            'shipping_cost' => $validated['shipping_cost'],
                            'total' => $validated['total'],
                            'updated_at' => now(),
                        ]);
                } else {
                    // Buat order baru
                    $orderId = DB::table('orders')->insertGetId([
                        'user_id' => Auth:: id(),
                        'product_id' => implode(',', array_column($cartItems, 'id')),
                        'status' => 'Pending',
                        'total' => $validated['total'],
                        'customer_name' => $validated['customerName'],
                        'customer_email' => $validated['customerEmail'],
                        'customer_phone' => '+62' . $validated['customerPhone'],
                        'shipping_courier' => $validated['shipping_courier'],
                        'shipping_service' => $validated['shipping_service'],
                        'shipping_cost' => $validated['shipping_cost'],
                        'payment_status' => 'pending',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }

                // ✅ GENERATE MIDTRANS SNAP TOKEN
                $snapToken = $this->createSnapToken($orderId, $validated);

                // Update snap_token ke database
                DB::table('orders')
                    ->where('order_id', $orderId)
                    ->update(['snap_token' => $snapToken]);

                // Redirect ke halaman Snap Payment
                return redirect()->route('payment.snap', $orderId);

            } catch (\Exception $e) {
                Log::error('Payment Error: ' . $e->getMessage());
                return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
            }
        }

        return back()->with('error', 'Data checkout tidak valid.');
    }

    /**
     * Generate Midtrans Snap Token
     */
    private function createSnapToken($orderId, $orderData)
    {
        $params = [
            'transaction_details' => [
                'order_id' => 'ORDER-' . $orderId .  '-' . time(),
                'gross_amount' => (int) $orderData['total'],
            ],
            'customer_details' => [
                'first_name' => $orderData['customerName'],
                'email' => $orderData['customerEmail'],
                'phone' => '+62' . $orderData['customerPhone'],
            ],
            'item_details' => [
                [
                    'id' => 'PRODUCT-' . $orderId,
                    'price' => (int) ($orderData['total'] - $orderData['shipping_cost']),
                    'quantity' => 1,
                    'name' => 'Product Purchase',
                ],
                [
                    'id' => 'SHIPPING',
                    'price' => (int) $orderData['shipping_cost'],
                    'quantity' => 1,
                    'name' => 'Shipping Cost - ' . $orderData['shipping_service'],
                ],
            ],
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
            return $snapToken;
        } catch (\Exception $e) {
            Log::error('Midtrans Snap Error: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Tampilkan halaman Snap Payment
     */
    public function showSnapPayment($orderId)
    {
        $order = DB::table('orders')->where('order_id', $orderId)->first();

        if (!$order) {
            return redirect()->route('home')->with('error', 'Order tidak ditemukan.');
        }

        if (! $order->snap_token) {
            return redirect()->route('home')->with('error', 'Snap token tidak tersedia.');
        }

        return view('payment-snap', compact('order'));
    }

    /**
     * ✅ Alias method untuk backward compatibility
     */
    public function showPayment($orderId)
    {
        return $this->showSnapPayment($orderId);
    }

    /**
     * Handle Midtrans Notification (Webhook)
     */
    public function handleNotification(Request $request)
    {
        try {
            // Konfigurasi Midtrans
            Config::$serverKey = config('midtrans.server_key');
            Config::$isProduction = config('midtrans.is_production');

            // Buat instance notifikasi
            $notification = new Notification();

            // Ambil data notifikasi
            $transactionStatus = $notification->transaction_status;
            $paymentType = $notification->payment_type;
            $orderId = $notification->order_id;
            $fraudStatus = $notification->fraud_status ?? 'accept';

            Log::info("Midtrans Notification Received", [
                'order_id' => $orderId,
                'transaction_status' => $transactionStatus,
                'payment_type' => $paymentType,
                'fraud_status' => $fraudStatus
            ]);

            // ✅ Cari order berdasarkan order_id
            $order = DB::table('orders')->where('order_id', $orderId)->first();

            if (!$order) {
                Log::error("Order not found: {$orderId}");
                return response()->json(['status' => 'error', 'message' => 'Order not found'], 404);
            }

            // ✅ Update status berdasarkan transaction_status
            if ($transactionStatus == 'capture') {
                if ($fraudStatus == 'accept') {
                    $this->updateOrderStatus($orderId, 'Paid', $notification);
                }
            } elseif ($transactionStatus == 'settlement') {
                // ✅ PALING PENTING - Status ini yang muncul setelah pembayaran berhasil
                $this->updateOrderStatus($orderId, 'Paid', $notification);
            } elseif ($transactionStatus == 'pending') {
                $this->updateOrderStatus($orderId, 'Pending', $notification);
            } elseif ($transactionStatus == 'deny' || $transactionStatus == 'expire' || $transactionStatus == 'cancel') {
                $this->updateOrderStatus($orderId, 'Failed', $notification);
            }

            return response()->json(['status' => 'success']);

        } catch (\Exception $e) {
            Log::error("Midtrans Notification Error: " . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Update Order Status
     */
    private function updateOrderStatus($orderId, $status, $notification)
    {
        $updateData = [
            'status' => $status,
            'payment_status' => $status == 'Paid' ? 'success' : ($status == 'Failed' ? 'failed' : 'pending'),
            'payment_type' => $notification->payment_type,
            'transaction_status' => $notification->transaction_status,
            'updated_at' => now()
        ];

        // ✅ Jika status Paid, tambahkan timestamp
        if ($status == 'Paid') {
            $updateData['paid_at'] = now();
        }

        DB::table('orders')
            ->where('order_id', $orderId)
            ->update($updateData);

        Log::info("Order #{$orderId} updated to {$status}", $updateData);
    }

    /**
     * Payment Success Page
     */
    public function paymentSuccess($orderId)
    {
        $order = DB::table('orders')->where('order_id', $orderId)->first();
        
        if (!$order) {
            return redirect()->route('home')->with('error', 'Order tidak ditemukan.');
        }
        
        // ✅ Auto-update status menjadi Paid saat halaman success dibuka
        DB::table('orders')
            ->where('order_id', $orderId)
            ->update([
                'status' => 'Paid',
                'payment_status' => 'success',
                'paid_at' => now(),
                'updated_at' => now()
            ]);
        
        Log::info("Order #{$orderId} marked as Paid from payment success page");
        
        // Refresh order data setelah update
        $order = DB::table('orders')->where('order_id', $orderId)->first();
        
        return view('payment-success', compact('order'));
    }

    /**
     * Payment Pending Page
     */
    public function paymentPending($orderId)
    {
        $order = DB::table('orders')->where('order_id', $orderId)->first();
        
        if (! $order) {
            return redirect()->route('home')->with('error', 'Order tidak ditemukan.');
        }
        
        return view('payment-pending', compact('order'));
    }

    /**
     * Payment Error Page
     */
    public function paymentError($orderId)
    {
        $order = DB::table('orders')->where('order_id', $orderId)->first();
        
        if (!$order) {
            return redirect()->route('home')->with('error', 'Order tidak ditemukan.');
        }
        
        return view('payment-error', compact('order'));
    }

    /**
     * Confirm Payment & Redirect to Home
     */
    public function confirmAndRedirectHome($orderId)
    {
        // ✅ Update status menjadi Paid
        DB::table('orders')
            ->where('order_id', $orderId)
            ->update([
                'status' => 'Paid',
                'payment_status' => 'success',
                'paid_at' => now(),
                'updated_at' => now()
            ]);
        
        Log::info("Order #{$orderId} confirmed as Paid, redirecting to home");
        
        return redirect()->route('home')->with('success', 'Terima kasih! Pesanan Anda berhasil dibayar.');
    }
}