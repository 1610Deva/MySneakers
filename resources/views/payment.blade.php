
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - MySneakers</title>
    <link rel="shortcut icon" href="{{ asset('images/logo-sm1.jpg') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
</head>

<body class="bg-slate-50" style="font-family: 'DM Sans', sans-serif;">
    
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center gap-4">
                <a href="{{ url('/home') }}">
                    <img src="{{ asset('images/logo-sm.jpg') }}" alt="MySneakers" class="h-10 w-auto">
                </a>
                <div class="h-8 w-px bg-gray-300"></div>
                <h1 class="text-2xl font-bold text-gray-900">Checkout</h1>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto px-6 py-8">
        <div class="grid lg:grid-cols-3 gap-6">
            
            <!-- Left Column: Shipping & Product Details -->
            <div class="lg:col-span-2 space-y-6">
                
                <!-- Shipping Address -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-bold text-gray-900">Alamat Pengiriman</h2>
                        <button class="text-blue-950 font-semibold hover:underline text-sm">Ganti</button>
                    </div>
                    
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-600 shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <div>
                            <p class="font-bold text-gray-900">Rumah • Om Yog</p>
                            <p class="text-sm text-gray-600 mt-1">Jalan Om Yog, Medan Kota, Sumatera Utara</p>
                        </div>
                    </div>
                </div>

                <!-- Product List -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="w-5 h-5 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                        </svg>
                        <h2 class="text-lg font-bold text-gray-900">Produk yang Dibeli</h2>
                    </div>

                    @php
                        $product = session('checkout_product', [
                            'product_id' => '',
                            'product_name' => 'No Product Selected',
                            'product_brand' => '',
                            'product_price' => 0,
                            'quantity' => 1,
                            'size' => 'Not Selected',
                            'image' => asset('images/default-product.png'),
                        ]);
                    @endphp

                    @if($product && $product['product_price'] > 0)
                    <!-- Product Item -->
                    <div class="border-t border-gray-100 pt-4">
                        <div class="flex gap-4">
                            <!-- Product Image -->
                            
                            <!-- Product Details -->
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 mb-1">{{ $product['product_name'] }}</h3>
                                <p class="text-sm text-gray-600 mb-2">{{ $product['product_brand'] }}</p>
                                
                                <div class="flex items-center gap-4 text-sm text-gray-600">
                                    <span>Qty: <span class="font-semibold">{{ $product['quantity'] }}</span></span>
                                </div>
                            </div>
                            
                            <!-- Price -->
                            <div class="text-right">
                                <p class="font-bold text-gray-900 text-lg">{{ formatRupiah($product['product_price'] * $product['quantity']) }}</p>
                                @if($product['quantity'] > 1)
                                <p class="text-sm text-gray-600">@ {{ formatRupiah($product['product_price']) }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @else
                    <!-- No Product -->
                    <div class="border-t border-gray-100 pt-4 text-center py-8">
                        <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                        <p class="text-gray-600 mb-2">Tidak ada produk yang dipilih.</p>
                        <a href="{{ url('/home') }}" class="text-blue-950 font-semibold hover:underline mt-2 inline-block">Kembali ke Home</a>
                    </div>
                    @endif
                </div>

                <!-- ✅ SHIPPING OPTIONS SECTION -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h2 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                            <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"/>
                        </svg>
                        Pilih Kurir Pengiriman
                    </h2>

                    <div class="space-y-3">
                        <!-- JNE Regular -->
                        <label class="flex items-center justify-between p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-blue-950 hover:bg-blue-50 transition">
                            <div class="flex items-center gap-4">
                                <input type="radio" name="shipping" value="JNE" data-name="JNE Regular" data-price="42000" data-estimate="3 - 5 Days" onchange="updateShipping(this)" class="w-5 h-5 text-blue-950">
                                <div>
                                    <p class="font-bold text-gray-900">JNE Regular</p>
                                    <p class="text-sm text-gray-600">Estimated: 3 - 5 Days</p>
                                </div>
                            </div>
                            <p class="font-bold text-blue-950">Rp 42.000</p>
                        </label>

                        <!-- TIKI ONS -->
                        <label class="flex items-center justify-between p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-blue-950 hover:bg-blue-50 transition">
                            <div class="flex items-center gap-4">
                                <input type="radio" name="shipping" value="TIKI" data-name="TIKI ONS" data-price="35000" data-estimate="4 - 6 Days" onchange="updateShipping(this)" class="w-5 h-5 text-blue-950">
                                <div>
                                    <p class="font-bold text-gray-900">TIKI ONS</p>
                                    <p class="text-sm text-gray-600">Estimated: 4 - 6 Days</p>
                                </div>
                            </div>
                            <p class="font-bold text-blue-950">Rp 35.000</p>
                        </label>

                        <!-- J&T Express -->
                        <label class="flex items-center justify-between p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-blue-950 hover:bg-blue-50 transition">
                            <div class="flex items-center gap-4">
                                <input type="radio" name="shipping" value="JNT" data-name="J&T Express" data-price="28000" data-estimate="2 - 4 Days" onchange="updateShipping(this)" class="w-5 h-5 text-blue-950">
                                <div>
                                    <p class="font-bold text-gray-900">J&T Express</p>
                                    <p class="text-sm text-gray-600">Estimated: 2 - 4 Days</p>
                                </div>
                            </div>
                            <p class="font-bold text-blue-950">Rp 28.000</p>
                        </label>

                        <!-- SiCepat BEST -->
                        <label class="flex items-center justify-between p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-blue-950 hover:bg-blue-50 transition">
                            <div class="flex items-center gap-4">
                                <input type="radio" name="shipping" value="SICEPAT" data-name="SiCepat BEST" data-price="30000" data-estimate="2 - 3 Days" onchange="updateShipping(this)" class="w-5 h-5 text-blue-950">
                                <div>
                                    <p class="font-bold text-gray-900">SiCepat BEST</p>
                                    <p class="text-sm text-gray-600">Estimated: 2 - 3 Days</p>
                                </div>
                            </div>
                            <p class="font-bold text-blue-950">Rp 30.000</p>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Right Column: Payment Summary -->
            <div class="lg:col-span-1 space-y-6 bg-white p-6 rounded-lg shadow h-fit sticky top-24">
                
                <!-- Customer Information Form -->
                <form id="customerForm" method="POST" action="{{ route('checkout.process') }}">
                    @csrf
                    
                    <!-- Hidden Inputs -->
                    <input type="hidden" name="shipping_courier" id="hiddenShippingCourier">
                    <input type="hidden" name="shipping_service" id="hiddenShippingService">
                    <input type="hidden" name="shipping_cost" id="hiddenShippingCost">
                    <input type="hidden" name="total" id="hiddenTotal">
                    <input type="hidden" name="cart_items" id="hiddenCartItems" value='[{"id":"{{ $product['product_id'] }}","name":"{{ $product['product_name'] }}","quantity":{{ $product['quantity'] }},"price":{{ $product['product_price'] }}}]'>
                    
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Detail Pembeli</h3>

                    <!-- Nama Lengkap -->
                    <div class="mb-4">
                        <label for="customerName" class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                        <input 
                            type="text" 
                            id="customerName" 
                            name="customerName" 
                            value="{{ Auth::user()->name }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-950 transition"
                            placeholder="Masukkan nama lengkap"
                            required>
                        <p id="nameError" class="hidden text-red-500 text-xs mt-1"></p>
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="customerEmail" class="block text-sm font-semibold text-gray-700 mb-2">Email <span class="text-red-500">*</span></label>
                        <input 
                            type="email" 
                            id="customerEmail" 
                            name="customerEmail" 
                            value="{{ Auth::user()->email }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-950 transition"
                            placeholder="contoh@email.com"
                            required>
                        <p id="emailError" class="hidden text-red-500 text-xs mt-1"></p>
                    </div>

                    <!-- Nomor Telepon -->
                    <div class="mb-6">
                        <label for="customerPhone" class="block text-sm font-semibold text-gray-700 mb-2">Nomor Telepon <span class="text-red-500">*</span></label>
                        <div class="flex gap-2">
                            <span class="px-4 py-3 bg-gray-100 border border-gray-300 rounded-lg text-gray-700 font-medium">+62</span>
                            <input 
                                type="tel" 
                                id="customerPhone" 
                                name="customerPhone" 
                                class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-950 transition"
                                placeholder="8123456789"
                                maxlength="13"
                                required>
                        </div>
                        <p id="phoneError" class="hidden text-red-500 text-xs mt-1"></p>
                    </div>

                    <!-- Price Summary -->
                    <div class="pt-6 border-t border-gray-200">
                        <h3 class="font-bold text-gray-900 mb-4">Ringkasan Pembayaran</h3>
                        
                        <div class="space-y-3 text-sm">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Total Harga ({{ $product['quantity'] ?? 1 }} Barang)</span>
                                <span class="font-semibold text-gray-900" id="productPrice">{{ formatRupiah($product['product_price'] * ($product['quantity'] ?? 1)) }}</span>
                            </div>
                            
                            <!-- Shipping Cost -->
                            <div id="shippingItem" class="hidden flex items-center justify-between">
                                <span class="text-gray-600" id="shippingLabel">Ongkos Kirim</span>
                                <span class="font-semibold text-gray-900" id="shippingPrice">Rp 0</span>
                            </div>

                            <div class="flex items-center justify-between pt-3 border-t border-gray-200">
                                <span class="font-bold text-gray-900">Total Tagihan</span>
                                <span class="font-bold text-blue-950 text-lg" id="totalPrice">{{ formatRupiah($product['product_price'] * ($product['quantity'] ?? 1)) }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit"
                        class="w-full mt-6 px-6 py-4 bg-blue-950 text-white font-bold rounded-lg hover:bg-blue-900 transition-all transform hover:scale-105 shadow-lg">
                        <svg class="w-5 h-5 inline-block mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Bayar Sekarang
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Price Variables
        const prices = {
            product: {{ $product && isset($product['product_price']) ? (int)($product['product_price'] * $product['quantity']) : 0 }},
            shipping: 0
        };

        // Format Rupiah
        function formatRupiah(number) {
            return 'Rp ' + number.toLocaleString('id-ID');
        }

        // Update Shipping
        function updateShipping(radio) {
            if (radio.checked) {
                const shippingName = radio.getAttribute('data-name');
                const shippingPrice = parseInt(radio.getAttribute('data-price'));
                
                prices.shipping = shippingPrice;
                
                // Show shipping in summary
                document.getElementById('shippingLabel').textContent = `Ongkos Kirim (${shippingName})`;
                document.getElementById('shippingPrice').textContent = formatRupiah(shippingPrice);
                document.getElementById('shippingItem').classList.remove('hidden');
                
                // Update total
                updateTotal();
                
                // Highlight selected shipping
                document.querySelectorAll('label:has(input[name="shipping"])').forEach(label => {
                    label.classList.remove('border-blue-950', 'bg-blue-50');
                    label.classList.add('border-gray-200');
                });
                radio.closest('label').classList.remove('border-gray-200');
                radio.closest('label').classList.add('border-blue-950', 'bg-blue-50');
            }
        }

        // Update Total
        function updateTotal() {
            const total = prices.product + prices.shipping;
            document.getElementById('totalPrice').textContent = formatRupiah(total);
        }

        // Form Submit Handler
        document.getElementById('customerForm').addEventListener('submit', function(e) {
            const selectedShipping = document.querySelector('input[name="shipping"]:checked');
            
            if (!selectedShipping) {
                e.preventDefault();
                alert('Mohon pilih kurir pengiriman terlebih dahulu!');
                return false;
            }
            
            // Populate hidden inputs
            document.getElementById('hiddenShippingCourier').value = selectedShipping.value;
            document.getElementById('hiddenShippingService').value = selectedShipping.getAttribute('data-name');
            document.getElementById('hiddenShippingCost').value = selectedShipping.getAttribute('data-price');
            document.getElementById('hiddenTotal').value = prices.product + prices.shipping;
        });
    </script>

</body>
</html>