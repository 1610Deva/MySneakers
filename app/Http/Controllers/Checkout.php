<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Checkout extends Controller
{
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
        if ($request->has('product_id') && !$request->has('cart_items')) {
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
                    'customer_email' => Auth::user()->email,
                    'customer_phone' => '', // Akan diisi di halaman payment
                    'shipping_courier' => '', // Akan diisi di halaman payment
                    'shipping_service' => '', // Akan diisi di halaman payment
                    'shipping_cost' => 0, // Akan diisi di halaman payment
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                // Kurangi stok produk
                DB::table('products')
                    ->where('product_id', $validated['product_id'])
                    ->decrement('jumlah_stok', $validated['quantity']);

                // Simpan order_id ke session
                session()->put('current_order_id', $orderId);

                // Redirect ke halaman payment
                return redirect()->route('checkout')
                    ->with('success', 'Order dibuat! Silakan lengkapi data pembayaran.');
            } catch (\Exception $e) {
                Log::error('Checkout Error: ' . $e->getMessage());
                return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
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

                // Update order yang sudah dibuat (dari session) atau buat baru
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
                    // Buat order baru (jika dari cart)
                    $orderId = DB::table('orders')->insertGetId([
                        'user_id' => Auth::id(),
                        'product_id' => implode(',', array_column($cartItems, 'id')),
                        'status' => 'Pending',
                        'total' => $validated['total'],
                        'customer_name' => $validated['customerName'],
                        'customer_email' => $validated['customerEmail'],
                        'customer_phone' => '+62' . $validated['customerPhone'],
                        'shipping_courier' => $validated['shipping_courier'],
                        'shipping_service' => $validated['shipping_service'],
                        'shipping_cost' => $validated['shipping_cost'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);

                    // Kurangi stok untuk semua produk
                    foreach ($cartItems as $item) {
                        DB::table('products')
                            ->where('product_id', $item['id'])
                            ->decrement('jumlah_stok', $item['quantity'] ?? 1);
                    }
                }

                // Hapus session order_id
                session()->forget('current_order_id');

                // Redirect ke payment success
                return redirect()->route('payment.success', ['order_id' => $orderId])
                    ->with('success', 'Order berhasil! Silakan lanjutkan pembayaran.');
            } catch (\Exception $e) {
                Log::error('Checkout Error: ' . $e->getMessage());
                return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
            }
        }

        return back()->with('error', 'Data checkout tidak lengkap.');
    }

    // Tandai order sebagai Dibayar
    public function markPaid($order_id)
    {
        $updated = DB::table('orders')
            ->where('order_id', $order_id)
            ->update([
                'status' => 'Dibayar',
                'updated_at' => now(),
            ]);

        if (!$updated) {
            return back()->with('error', 'Gagal memperbarui status pembayaran.');
        }

        return redirect()->route('payment.success', ['order_id' => $order_id])
            ->with('success', 'Pembayaran berhasil! Status: Dibayar');
    }

    // Halaman sukses setelah checkout
    public function showPayment($order_id)
    {
        $order = DB::table('orders')->where('order_id', $order_id)->first();

        if (!$order) {
            abort(404, 'Order tidak ditemukan');
        }

        return view('payment-success', compact('order'));
    }
}
