<!-- Tambahkan section ini setelah Order Information -->

@if($midtransData)
<!-- Midtrans Transaction Details -->
<div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg shadow-sm border-2 border-blue-200 p-6">
    <div class="flex items-center gap-2 mb-4">
        <svg class="w-6 h-6 text-blue-950" fill="currentColor" viewBox="0 0 20 20">
            <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"></path>
        </svg>
        <h2 class="text-lg font-bold text-gray-900">Midtrans Transaction Data</h2>
        <span class="ml-auto px-3 py-1 bg-blue-950 text-white text-xs font-bold rounded-full">LIVE DATA</span>
    </div>
    
    <div class="grid md:grid-cols-3 gap-4">
        <div class="bg-white rounded-lg p-4">
            <p class="text-xs text-gray-600 mb-1">Transaction ID</p>
            <p class="font-bold text-gray-900 text-sm">{{ $midtransData['transaction_id'] }}</p>
        </div>
        
        <div class="bg-white rounded-lg p-4">
            <p class="text-xs text-gray-600 mb-1">Transaction Status</p>
            <span class="px-3 py-1 
                @if($midtransData['transaction_status'] == 'settlement' || $midtransData['transaction_status'] == 'capture')
                    bg-green-100 text-green-700
                @elseif($midtransData['transaction_status'] == 'pending')
                    bg-yellow-100 text-yellow-700
                @else
                    bg-red-100 text-red-700
                @endif
                rounded-full text-xs font-bold">
                {{ strtoupper($midtransData['transaction_status']) }}
            </span>
        </div>
        
        <div class="bg-white rounded-lg p-4">
            <p class="text-xs text-gray-600 mb-1">Payment Type</p>
            <p class="font-bold text-gray-900 text-sm">{{ strtoupper($midtransData['payment_type']) }}</p>
        </div>

        <div class="bg-white rounded-lg p-4">
            <p class="text-xs text-gray-600 mb-1">Gross Amount</p>
            <p class="font-bold text-blue-950 text-sm">{{ formatRupiah($midtransData['gross_amount']) }}</p>
        </div>

        @if(isset($midtransData['settlement_time']))
        <div class="bg-white rounded-lg p-4">
            <p class="text-xs text-gray-600 mb-1">Settlement Time</p>
            <p class="font-semibold text-gray-900 text-sm">{{ \Carbon\Carbon::parse($midtransData['settlement_time'])->format('d M Y, H:i') }}</p>
        </div>
        @endif

        @if(isset($midtransData['expiry_time']))
        <div class="bg-white rounded-lg p-4">
            <p class="text-xs text-gray-600 mb-1">Expiry Time</p>
            <p class="font-semibold text-gray-900 text-sm">{{ \Carbon\Carbon::parse($midtransData['expiry_time'])->format('d M Y, H:i') }}</p>
        </div>
        @endif

        @if(isset($midtransData['fraud_status']))
        <div class="bg-white rounded-lg p-4">
            <p class="text-xs text-gray-600 mb-1">Fraud Status</p>
            <span class="px-3 py-1 {{ $midtransData['fraud_status'] == 'accept' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }} rounded-full text-xs font-bold">
                {{ strtoupper($midtransData['fraud_status']) }}
            </span>
        </div>
        @endif

        <!-- Bank Transfer Details -->
        @if(isset($midtransData['va_numbers']) && !empty($midtransData['va_numbers']))
        <div class="md:col-span-3 bg-white rounded-lg p-4">
            <p class="text-xs text-gray-600 mb-2">Virtual Account Number</p>
            @foreach($midtransData['va_numbers'] as $va)
            <div class="flex items-center justify-between bg-slate-50 p-3 rounded-lg">
                <div>
                    <p class="font-bold text-gray-900">{{ strtoupper($va->bank) }}</p>
                    <p class="text-sm text-gray-600">{{ $va->va_number }}</p>
                </div>
                <button onclick="navigator.clipboard.writeText('{{ $va->va_number }}')" 
                        class="px-3 py-1 bg-blue-950 text-white text-xs font-bold rounded hover:bg-blue-900">
                    Copy
                </button>
            </div>
            @endforeach
        </div>
        @endif

        <!-- Mandiri Bill Payment -->
        @if(isset($midtransData['biller_code']) && isset($midtransData['bill_key']))
        <div class="md:col-span-3 bg-white rounded-lg p-4">
            <p class="text-xs text-gray-600 mb-2">Mandiri Bill Payment</p>
            <div class="grid grid-cols-2 gap-3">
                <div class="bg-slate-50 p-3 rounded-lg">
                    <p class="text-xs text-gray-600 mb-1">Biller Code</p>
                    <p class="font-bold text-gray-900">{{ $midtransData['biller_code'] }}</p>
                </div>
                <div class="bg-slate-50 p-3 rounded-lg">
                    <p class="text-xs text-gray-600 mb-1">Bill Key</p>
                    <p class="font-bold text-gray-900">{{ $midtransData['bill_key'] }}</p>
                </div>
            </div>
        </div>
        @endif

        <!-- PDF Invoice -->
        @if(isset($midtransData['pdf_url']))
        <div class="md: col-span-3">
            <a href="{{ route('transaction. invoice', $transaction->order_id) }}" 
               target="_blank"
               class="block w-full bg-blue-950 text-white font-bold py-3 rounded-lg hover:bg-blue-900 transition text-center">
                <svg class="w-5 h-5 inline-block mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7. 414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path>
                </svg>
                Download Invoice PDF
            </a>
        </div>
        @endif
    </div>
</div>
@else
<!-- Jika belum ada data dari Midtrans -->
<div class="bg-yellow-50 border-l-4 border-yellow-400 p-4">
    <div class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M8. 257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-. 213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
        </svg>
        <p class="text-sm text-gray-700">
            <strong>Info:</strong> Data detail dari Midtrans belum tersedia.  Payment mungkin belum diproses. 
        </p>
    </div>
</div>
@endif