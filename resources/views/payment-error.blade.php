<! DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Failed - MySneakers</title>
    <link rel="shortcut icon" href="{{ asset('images/logo-sm1.jpg') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans: ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-50" style="font-family: 'DM Sans', sans-serif;">
    
    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-md w-full text-center">
            <!-- Error Icon -->
            <div class="mb-6">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto">
                    <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>

            <!-- Title -->
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Pembayaran Gagal</h1>
            <p class="text-gray-600 mb-6">Terjadi kesalahan saat memproses pembayaran Anda</p>

            <!-- Order Info -->
            <div class="bg-slate-50 rounded-lg p-6 mb-6 text-left">
                <div class="flex justify-between mb-3">
                    <span class="text-gray-600">Order ID</span>
                    <span class="font-bold text-gray-900">#{{ $order->order_id }}</span>
                </div>
                <div class="flex justify-between mb-3">
                    <span class="text-gray-600">Total Pembayaran</span>
                    <span class="font-bold text-gray-900">{{ formatRupiah($order->total) }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-600">Status</span>
                    <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm font-semibold">Failed</span>
                </div>
            </div>

            <!-- Error Message -->
            <div class="bg-red-50 border-l-4 border-red-600 p-4 mb-6 text-left">
                <p class="text-sm text-gray-700">
                    <strong>Kemungkinan Penyebab: </strong><br>
                    • Pembayaran dibatalkan<br>
                    • Dana tidak mencukupi<br>
                    • Kartu ditolak<br>
                    • Kesalahan teknis
                </p>
            </div>

            <!-- Actions -->
            <a href="{{ route('payment.snap', $order->order_id) }}" 
               class="block w-full bg-blue-950 text-white font-bold py-4 rounded-lg hover:bg-blue-900 transition-all mb-3">
                Coba Lagi
            </a>

            <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-950 text-sm font-medium">
                ← Kembali ke Home
            </a>
        </div>
    </div>

</body>
</html>