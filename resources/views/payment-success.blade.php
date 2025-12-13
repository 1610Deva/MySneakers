<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success - MySneakers</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-50">
    <div class="container mx-auto px-6 py-20">
        <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-lg p-12 text-center">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            
            <h1 class="text-3xl font-bold text-gray-900 mb-3">Pembayaran Berhasil!</h1>
            <p class="text-gray-600 mb-8">Order ID: <span class="font-bold text-blue-950">#{{ $order->order_id }}</span></p>
            
            <div class="bg-slate-50 rounded-lg p-6 mb-8 text-left">
                <h3 class="font-bold text-gray-900 mb-4">Detail Pesanan</h3>
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Nama</span>
                        <span class="font-semibold">{{ $order->customer_name }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Email</span>
                        <span class="font-semibold">{{ $order->customer_email }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Status</span>
                        <span class="font-bold {{ $order->status == 'Dibayar' ? 'text-green-600' : 'text-yellow-600' }}">
                            {{ $order->status }}
                        </span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Total Pembayaran</span>
                        <span class="font-bold text-blue-950">{{ 'Rp ' . number_format($order->total, 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>

            @if($order->status == 'Pending')
            <!-- Tombol Bayar (hanya muncul jika status Pending) -->
            <form action="{{ route('payment.complete', $order->order_id) }}" method="POST" class="mb-4">
                @csrf
                <button type="submit" class="w-full px-8 py-4 bg-green-600 text-white font-bold rounded-lg hover:bg-green-700 transition">
                    Bayar Sekarang
                </button>
            </form>
            @endif
            
            <a href="{{ url('/home') }}" class="inline-block px-8 py-4 bg-blue-950 text-white font-bold rounded-lg hover:bg-blue-900 transition">
                Kembali ke Home
            </a>
        </div>
    </div>
    
    <script>
        // Clear cart after successful payment
        localStorage.removeItem('cartItems');
    </script>
</body>
</html>