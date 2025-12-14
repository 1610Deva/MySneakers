<! DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - MySneakers</title>
    <link rel="shortcut icon" href="{{ asset('images/logo-sm1.jpg') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Midtrans Snap. js -->
    <script type="text/javascript"
            src="{{ config('midtrans.is_production') ? 'https://app.midtrans.com/snap/snap.js' : 'https://app.sandbox.midtrans.com/snap/snap.js' }}"
            data-client-key="{{ config('midtrans.client_key') }}"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans: ital,opsz,wght@0,9.. 40,100.. 1000;1,9..40,100..1000&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-50" style="font-family: 'DM Sans', sans-serif;">
    
    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-md w-full text-center">
            <!-- Logo -->
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/logo-sm.jpg') }}" alt="MySneakers" class="h-16 w-auto">
            </div>

            <!-- Icon -->
            <div class="mb-6">
                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto">
                    <svg class="w-10 h-10 text-blue-950" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                    </svg>
                </div>
            </div>

            <!-- Title -->
            <h1 class="text-2xl font-bold text-gray-900 mb-2">Lanjutkan Pembayaran</h1>
            <p class="text-gray-600 mb-6">Order #{{ $order->order_id }}</p>

            <!-- Order Details -->
            <div class="bg-slate-50 rounded-lg p-4 mb-6 text-left">
                <div class="flex justify-between mb-2">
                    <span class="text-gray-600">Total Belanja</span>
                    <span class="font-semibold text-gray-900">{{ formatRupiah($order->total - $order->shipping_cost) }}</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="text-gray-600">Ongkir ({{ $order->shipping_service }})</span>
                    <span class="font-semibold text-gray-900">{{ formatRupiah($order->shipping_cost) }}</span>
                </div>
                <div class="flex justify-between pt-2 border-t border-gray-200">
                    <span class="font-bold text-gray-900">Total Tagihan</span>
                    <span class="font-bold text-blue-950 text-lg">{{ formatRupiah($order->total) }}</span>
                </div>
            </div>

            <!-- Payment Button -->
            <button id="pay-button" 
                    class="w-full bg-blue-950 text-white font-bold py-4 rounded-lg hover:bg-blue-900 transition-all transform hover:scale-105 shadow-lg mb-4">
                <svg class="w-5 h-5 inline-block mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                    <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path>
                </svg>
                Pilih Metode Pembayaran
            </button>

            <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-950 text-sm font-medium">
                ← Kembali ke Home
            </a>
        </div>
    </div>

    <script type="text/javascript">
        document.getElementById('pay-button').addEventListener('click', function () {
            snap.pay('{{ $order->snap_token }}', {
                onSuccess: function(result) {
                    console.log('Payment success:', result);
                    window.location.href = '{{ route("payment.success", $order->order_id) }}';
                },
                onPending: function(result) {
                    console.log('Payment pending:', result);
                    window. location.href = '{{ route("payment.pending", $order->order_id) }}';
                },
                onError: function(result) {
                    console.log('Payment error:', result);
                    window.location.href = '{{ route("payment.error", $order->order_id) }}';
                },
                onClose: function() {
                    console.log('Customer closed the popup');
                    alert('Anda menutup popup pembayaran. Silakan coba lagi.');
                }
            });
        });
    </script>
</body>
</html>