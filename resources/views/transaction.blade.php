<! DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Log - MySneakers</title>
    <link rel="shortcut icon" href="{{ asset('images/logo-sm1.jpg') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans: ital,opsz,wght@0,9..40,100.. 1000;1,9..40,100..1000&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-50" style="font-family: 'DM Sans', sans-serif;">
    
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <a href="{{ url('/home') }}">
                        <img src="{{ asset('images/logo-sm.jpg') }}" alt="MySneakers" class="h-10 w-auto">
                    </a>
                    <div class="h-8 w-px bg-gray-300"></div>
                    <h1 class="text-2xl font-bold text-gray-900">Transaction Log</h1>
                </div>
                <a href="{{ route('home') }}" class="text-blue-950 hover:text-blue-900 font-semibold">
                    ← Back to Home
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto px-6 py-8">

        <!-- Transaction List -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
            @if($transactions->isEmpty())
                <!-- Empty State -->
                <div class="text-center py-16">
                    <svg class="w-20 h-20 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Belum Ada Transaksi</h3>
                    <p class="text-gray-600 mb-4">Anda belum melakukan transaksi apapun.</p>
                    <a href="{{ route('home') }}" class="inline-block px-6 py-3 bg-blue-950 text-white font-bold rounded-lg hover:bg-blue-900 transition">
                        Mulai Belanja
                    </a>
                </div>
            @else
                <!-- Transaction Table -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-slate-50 border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Order ID</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Tanggal</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Nama Produk</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Total</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Status Payment</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Status Order</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($transactions as $transaction)
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="font-bold text-blue-950">#{{ $transaction->order_id }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    {{ \Carbon\Carbon::parse($transaction->created_at)->format('d M Y, H:i') }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    @if($transaction->product_names)
                                        @php
                                            $names = explode(', ', $transaction->product_names);
                                        @endphp
                                        <span class="font-semibold">{{ $names[0] }}</span>
                                        @if(count($names) > 1)
                                            <span class="text-gray-500 text-xs"> +{{ count($names) - 1 }} lainnya</span>
                                        @endif
                                    @else
                                        <span class="text-gray-400">Produk tidak ditemukan</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap font-bold text-gray-900">
                                    {{ formatRupiah($transaction->total) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($transaction->payment_status == 'success')
                                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-semibold">Success</span>
                                    @elseif($transaction->payment_status == 'pending')
                                        <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-sm font-semibold">Pending</span>
                                    @else
                                        <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm font-semibold">Failed</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 {{ $transaction->status == 'Paid' ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-700' }} rounded-full text-sm font-semibold">
                                        {{ $transaction->status }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        <!-- Summary Stats -->
        @if(! $transactions->isEmpty())
        <div class="grid md:grid-cols-3 gap-6 mt-6">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Success</p>
                        <p class="text-2xl font-bold text-gray-900">{{ $transactions->where('payment_status', 'success')->count() }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2. 828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Pending</p>
                        <p class="text-2xl font-bold text-gray-900">{{ $transactions->where('payment_status', 'pending')->count() }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-950" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8.433 7.418c.155-. 103.346-. 196.567-.267v1.698a2.305 2.305 0 01-.567-. 267C8.07 8.34 8 8.114 8 8c0-.114. 07-.34.433-.582zM11 12. 849v-1.698c. 22. 071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v. 092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 . 99.602 1.765 1.324 2.246. 48.32 1.054.545 1.676.662v1.941c-. 391-. 127-.68-.317-. 843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-. 092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c. 391.127.68.317.843.504a1 1 0 101.511-1.31c-. 563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Total Belanja</p>
                        <p class="text-2xl font-bold text-gray-900">{{ formatRupiah($transactions->where('payment_status', 'success')->sum('total')) }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>

</body>
</html>