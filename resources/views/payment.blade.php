<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - MySneakers</title>
    <link rel="shortcut icon" href="{{ asset('images/logo-sm1.jpg') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

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
                <a href="{{ url('/') }}">
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <div>
                            <p class="font-bold text-gray-900 mb-1">Rumah • <span class="font-normal">Om Yog</span></p>
                            <p class="text-gray-600 text-sm">Jalan Om Yog, Medan Kota, Sumatera Utara</p>
                        </div>
                    </div>
                </div>

                <!-- Product List -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <div class="flex items-center gap-2 mb-4">
                        <input type="checkbox" id="selectStore" checked disabled class="w-4 h-4 text-blue-950 border-gray-300 rounded focus:ring-blue-950">
                        <label for="selectStore" class="font-bold text-gray-900">MySneakers Official Store</label>
                    </div>

                    <!-- Product Item -->
                    <div class="border-t border-gray-100 pt-4">
                        <div class="flex gap-4">
                            <div class="shrink-0">
                                <img src="{{ asset('images/products/compass-retrogadelow-bw.webp') }}" alt="Product" class="w-20 h-20 object-cover rounded-lg border border-gray-200">
                            </div>
                            
                            <div class="flex-1">
                                <h3 class="font-semibold text-gray-900 mb-1">Sepatu Compass Retrograde Low Black White</h3>
                                <p class="text-sm text-gray-500 mb-2">Size: 45</p>
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-4">
                                        <span class="text-lg font-bold text-gray-900">Rp 538.000</span>
                                    </div>
                                </div>

                                <!-- Product Protection -->
                                <div class="mt-4 p-3 bg-green-50 rounded-lg border border-green-200">
                                    <div class="flex items-start gap-2">
                                        <input type="checkbox" id="protectionCheck" checked class="mt-1 w-4 h-4 text-green-600 border-gray-300 rounded focus:ring-green-500" onchange="updateSummary()">
                                        <label for="protectionCheck" class="flex-1">
                                            <div class="flex items-center gap-2">
                                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                                </svg>
                                                <span class="font-semibold text-sm text-gray-900">Proteksi Rusak Total 6 bulan</span>
                                                <span class="text-sm text-gray-600">(Rp 16.500)</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Shipping Options -->
                        <div class="mt-6 pt-4 border-t border-gray-100">
                            <button class="w-full p-4 border-2 border-gray-300 rounded-lg text-left hover:border-blue-950 transition" id="shippingDropdown" onclick="toggleShipping()">
                                <div class="flex items-center justify-between">
                                    <div class="flex-1">
                                        <div class="font-bold text-gray-900 mb-1">Reguler</div>
                                        <div class="text-sm text-gray-600" id="selectedShipping">Pilih jasa pengiriman</div>
                                        <div class="text-xs text-gray-500 mt-1" id="selectedEstimate"></div>
                                    </div>
                                    <svg class="w-5 h-5 text-gray-400 transition-transform" id="shippingIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </button>

                            <!-- Shipping Options Dropdown -->
                            <div id="shippingOptions" class="mt-3 space-y-2">
                                <label class="flex items-center gap-3 p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                                    <input type="checkbox" name="shipping" value="jnt" class="w-4 h-4 text-blue-950" data-name="Economic" data-price="42000" data-estimate="3 - 5 Days" onchange="updateShipping(this)">
                                    <div class="flex-1">
                                        <div class="font-semibold text-gray-900">Economic</div>
                                        <div class="text-sm text-gray-600">Estimated Arrival 3 - 5 Days</div>
                                    </div>
                                    <div class="font-bold text-gray-900">Rp 42.000</div>
                                </label>
                                <label class="flex items-center gap-3 p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                                    <input type="checkbox" name="shipping" value="sicepat" class="w-4 h-4 text-blue-950" data-name="Reguler" data-price="38000" data-estimate="2 - 3 Days" onchange="updateShipping(this)">
                                    <div class="flex-1">
                                        <div class="font-semibold text-gray-900">Reguler</div>
                                        <div class="text-sm text-gray-600">Estimated Arrival 2 - 3 Days</div>
                                    </div>
                                    <div class="font-bold text-gray-900">Rp 38.000</div>
                                </label>
                                <label class="flex items-center gap-3 p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                                    <input type="checkbox" name="shipping" value="jne" class="w-4 h-4 text-blue-950" data-name="Express" data-price="45000" data-estimate="1 - 2 Days" onchange="updateShipping(this)">
                                    <div class="flex-1">
                                        <div class="font-semibold text-gray-900">Express</div>
                                        <div class="text-sm text-gray-600">Estimated Arrival 1 - 2 Days</div>
                                    </div>
                                    <div class="font-bold text-gray-900">Rp 45.000</div>
                                </label>
                            </div>

                            <!-- Shipping Insurance -->
                            <div class="mt-4 flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <label for="insuranceCheck" class="flex items-center gap-2 cursor-pointer flex-1">
                                    <input type="checkbox" id="insuranceCheck" class="w-4 h-4 text-blue-950 border-gray-300 rounded focus:ring-blue-950" onchange="updateSummary()">
                                    <span class="text-sm font-semibold text-gray-900">Pakai Asuransi Pengiriman</span>
                                    <span class="text-sm text-gray-600">(Rp 3.500)</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Payment Method & Summary -->
            <div class="lg:col-span-1 space-y-6">
                
                <!-- Customer Information Form -->
                <form id="customerForm" method="POST" action="{{ route('checkout.process') }}">
                    @csrf
                    
                    <!-- Hidden Inputs untuk Shipping & Cart Data -->
                    <input type="hidden" name="shipping_courier" id="hiddenShippingCourier">
                    <input type="hidden" name="shipping_service" id="hiddenShippingService">
                    <input type="hidden" name="shipping_cost" id="hiddenShippingCost">
                    <input type="hidden" name="total" id="hiddenTotal">
                    <input type="hidden" name="cart_items" id="hiddenCartItems">
                    
                    <!-- Nama Lengkap -->
                    <div>
                        <label for="customerName" class="block text-sm font-semibold text-gray-900 mb-2">
                            Nama Lengkap <span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="customerName" 
                            name="customerName"
                            placeholder="Masukkan nama lengkap"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-950 focus:border-transparent transition"
                            required
                            value="{{ old('customerName') }}"
                        >
                        @error('customerName')
                            <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="customerEmail" class="block text-sm font-semibold text-gray-900 mb-2">
                            Email <span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="customerEmail" 
                            name="customerEmail"
                            placeholder="contoh@email.com"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-950 focus:border-transparent transition"
                            required
                            value="{{ old('customerEmail') }}"
                        >
                        @error('customerEmail')
                            <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Nomor Telepon -->
                    <div>
                        <label for="customerPhone" class="block text-sm font-semibold text-gray-900 mb-2">
                            Nomor Telepon <span class="text-red-600">*</span>
                        </label>
                        <div class="flex gap-2">
                            <div class="flex items-center px-3 py-3 bg-gray-100 border border-gray-300 rounded-lg">
                                <span class="text-gray-700 font-semibold">+62</span>
                            </div>
                            <input 
                                type="tel" 
                                id="customerPhone" 
                                name="customerPhone"
                                placeholder="8123456789"
                                class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-950 focus:border-transparent transition"
                                required
                                value="{{ old('customerPhone') }}"
                            >
                        </div>
                        @error('customerPhone')
                            <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Checkout Button (Submit Form) -->
                    <button 
                        type="submit" 
                        class="w-full mt-6 py-4 bg-blue-950 text-white font-bold rounded-lg hover:bg-blue-900 transition-all shadow-lg flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Bayar Sekarang
                    </button>
                </form>

                <!-- Promo Code -->
                <div class="mt-6 p-4 bg-linear-to-r from-yellow-50 to-yellow-100 rounded-lg border border-yellow-300">
                    <button class="flex items-center justify-between w-full" onclick="togglePromo()">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                            </svg>
                            <span class="font-semibold text-gray-900 text-sm">Pakai promo biar makin hemat!</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>

                <!-- Price Summary -->
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <h3 class="font-bold text-gray-900 mb-4">Cek ringkasan transaksimu, yuk</h3>
                    
                    <div class="space-y-3 text-sm">
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600">Total Harga (1 Barang)</span>
                            <span class="font-semibold text-gray-900">Rp 538.000</span>
                        </div>
                        
                        <!-- Shipping Cost - Conditional -->
                        <div id="shippingItem" class="hidden flex items-center justify-between">
                            <span class="text-gray-600" id="shippingLabel">Ongkos Kirim</span>
                            <span class="font-semibold text-gray-900" id="shippingPrice">Rp 0</span>
                        </div>
                        
                        <!-- Proteksi Produk - Conditional -->
                        <div id="protectionItem" class="flex items-center justify-between">
                            <span class="text-gray-600">Proteksi Produk</span>
                            <span class="font-semibold text-gray-900">Rp 16.500</span>
                        </div>

                        <!-- Asuransi Pengiriman - Conditional -->
                        <div id="insuranceItem" class="hidden flex items-center justify-between">
                            <span class="text-gray-600">Asuransi Pengiriman</span>
                            <span class="font-semibold text-gray-900">Rp 3.500</span>
                        </div>

                        <div class="flex items-center justify-between pt-3 border-t border-gray-200">
                            <span class="font-bold text-gray-900">Total Tagihan</span>
                            <span class="font-bold text-blue-950 text-lg" id="totalPrice">Rp 538.000</span>
                        </div>
                    </div>

                    <!-- Checkout Button -->
                    <button type="button" onclick="validateAndCheckout()" class="w-full mt-6 py-4 bg-blue-950 text-white font-bold rounded-lg hover:bg-blue-900 transition-all shadow-lg flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Bayar Sekarang
                    </button>

                    <p class="text-xs text-center text-gray-500 mt-4">
                        Dengan melanjutkan pembayaran, kamu menyetujui 
                        <a href="#" class="text-blue-950 hover:underline">S&K Pembayaran Midtrans</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // ========== FORM VALIDATION ==========
        
        // Validate customer form
        function validateCustomerForm() {
            let isValid = true;
            
            // Get form values
            const name = document.getElementById('customerName').value.trim();
            const email = document.getElementById('customerEmail').value.trim();
            const phone = document.getElementById('customerPhone').value.trim();
            
            // Get error elements
            const nameError = document.getElementById('nameError');
            const emailError = document.getElementById('emailError');
            const phoneError = document.getElementById('phoneError');
            
            // Reset errors
            nameError.classList.add('hidden');
            emailError.classList.add('hidden');
            phoneError.classList.add('hidden');
            
            // Reset input borders
            document.getElementById('customerName').classList.remove('border-red-500');
            document.getElementById('customerEmail').classList.remove('border-red-500');
            document.getElementById('customerPhone').classList.remove('border-red-500');
            
            // Validate name (min 3 characters)
            if (name === '' || name.length < 3) {
                nameError.textContent = name === '' ? 'Nama lengkap harus diisi' : 'Nama minimal 3 karakter';
                nameError.classList.remove('hidden');
                document.getElementById('customerName').classList.add('border-red-500');
                isValid = false;
            }
            
            // Validate email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email === '' || !emailRegex.test(email)) {
                emailError.textContent = email === '' ? 'Email harus diisi' : 'Format email tidak valid';
                emailError.classList.remove('hidden');
                document.getElementById('customerEmail').classList.add('border-red-500');
                isValid = false;
            }
            
            // Validate phone (min 10 digits, max 13 digits, numbers only)
            const phoneRegex = /^[0-9]{10,13}$/;
            if (phone === '' || !phoneRegex.test(phone)) {
                phoneError.textContent = phone === '' ? 'Nomor telepon harus diisi' : 'Nomor telepon tidak valid (10-13 digit)';
                phoneError.classList.remove('hidden');
                document.getElementById('customerPhone').classList.add('border-red-500');
                isValid = false;
            }
            
            return isValid;
        }
        
        // Real-time validation on input
        document.getElementById('customerName').addEventListener('blur', function() {
            const name = this.value.trim();
            const nameError = document.getElementById('nameError');
            
            if (name === '' || name.length < 3) {
                nameError.textContent = name === '' ? 'Nama lengkap harus diisi' : 'Nama minimal 3 karakter';
                nameError.classList.remove('hidden');
                this.classList.add('border-red-500');
            } else {
                nameError.classList.add('hidden');
                this.classList.remove('border-red-500');
                this.classList.add('border-green-500');
            }
        });
        
        document.getElementById('customerEmail').addEventListener('blur', function() {
            const email = this.value.trim();
            const emailError = document.getElementById('emailError');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (email === '' || !emailRegex.test(email)) {
                emailError.textContent = email === '' ? 'Email harus diisi' : 'Format email tidak valid';
                emailError.classList.remove('hidden');
                this.classList.add('border-red-500');
            } else {
                emailError.classList.add('hidden');
                this.classList.remove('border-red-500');
                this.classList.add('border-green-500');
            }
        });
        
        document.getElementById('customerPhone').addEventListener('input', function() {
            // Only allow numbers
            this.value = this.value.replace(/[^0-9]/g, '');
        });
        
        document.getElementById('customerPhone').addEventListener('blur', function() {
            const phone = this.value.trim();
            const phoneError = document.getElementById('phoneError');
            const phoneRegex = /^[0-9]{10,13}$/;
            
            if (phone === '' || !phoneRegex.test(phone)) {
                phoneError.textContent = phone === '' ? 'Nomor telepon harus diisi' : 'Nomor telepon tidak valid (10-13 digit)';
                phoneError.classList.remove('hidden');
                this.classList.add('border-red-500');
            } else {
                phoneError.classList.add('hidden');
                this.classList.remove('border-red-500');
                this.classList.add('border-green-500');
            }
        });
        
        // Validate and proceed to checkout
        function validateAndCheckout() {
            // Validate customer form first
            if (!validateCustomerForm()) {
                // Scroll to first error
                const firstError = document.querySelector('.border-red-500');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstError.focus();
                }
                
                // Show alert
                alert('Mohon lengkapi semua data dengan benar sebelum melanjutkan pembayaran.');
                return false;
            }
            
            // Check if shipping is selected
            const selectedShipping = document.querySelector('input[name="shipping"]:checked');
            if (!selectedShipping) {
                alert('Mohon pilih jasa pengiriman terlebih dahulu.');
                return false;
            }
            
            // Get customer data
            const customerData = {
                name: document.getElementById('customerName').value.trim(),
                email: document.getElementById('customerEmail').value.trim(),
                phone: '+62' + document.getElementById('customerPhone').value.trim(),
                shipping: {
                    courier: selectedShipping.value,
                    service: selectedShipping.getAttribute('data-name'),
                    cost: parseInt(selectedShipping.getAttribute('data-price')),
                    estimate: selectedShipping.getAttribute('data-estimate')
                },
                total: calculateGrandTotal()
            };
            
            // Log customer data (untuk development)
            console.log('Customer Data for Midtrans:', customerData);
            
            // Show success message and simulate payment
            alert(`Data pembayaran berhasil!\n\nNama: ${customerData.name}\nEmail: ${customerData.email}\nTelepon: ${customerData.phone}\n\nTotal: ${formatRupiah(customerData.total)}\n\nAnda akan diarahkan ke halaman pembayaran Midtrans.`);
            
            // TODO: Integrate with Midtrans API
            // Example: window.location.href = '/payment/midtrans';
            
            return true;
        }
        
        // Calculate grand total including all options
        function calculateGrandTotal() {
            const protectionCheck = document.getElementById('protectionCheck');
            const insuranceCheck = document.getElementById('insuranceCheck');
            
            let total = prices.product + prices.shipping;
            
            if (protectionCheck.checked) {
                total += prices.protection;
            }
            
            if (insuranceCheck.checked) {
                total += prices.insurance;
            }
            
            return total;
        }
        
        // ========== ORIGINAL FUNCTIONS ==========
        
        // Toggle Shipping Options
        function toggleShipping() {
            const options = document.getElementById('shippingOptions');
            const icon = document.getElementById('shippingIcon');
            
            if (options.classList.contains('hidden')) {
                options.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                options.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // Toggle Note Field
        function toggleNote() {
            const noteField = document.getElementById('noteField');
            noteField.classList.toggle('hidden');
            if (!noteField.classList.contains('hidden')) {
                noteField.focus();
            }
        }

        // Update Note Character Count
        function updateNoteCount() {
            const noteField = document.getElementById('noteField');
            const noteCount = document.getElementById('noteCount');
            noteCount.textContent = `${noteField.value.length}/200`;
        }

        // Toggle Promo
        function togglePromo() {
            alert('Fitur promo akan segera hadir!');
        }

        // Update payment method UI
        document.querySelectorAll('input[name="payment"]').forEach(radio => {
            radio.addEventListener('change', function() {
                document.querySelectorAll('label:has(input[name="payment"])').forEach(label => {
                    label.classList.remove('border-blue-950', 'bg-blue-50');
                    label.classList.add('border-gray-200');
                });
                
                this.closest('label').classList.remove('border-gray-200');
                this.closest('label').classList.add('border-blue-950', 'bg-blue-50');
            });
        });

        // Price Variables
        const prices = {
            product: 538000,
            shipping: 0,
            protection: 16500,
            insurance: 3500
        };

        let selectedShippingName = '';

        // Format number to Rupiah
        function formatRupiah(number) {
            return 'Rp ' + number.toLocaleString('id-ID');
        }

        // Update Shipping when checkbox changed
        function updateShipping(checkbox) {
            // Uncheck other shipping options (only one can be selected)
            if (checkbox.checked) {
                document.querySelectorAll('input[name="shipping"]').forEach(cb => {
                    if (cb !== checkbox) cb.checked = false;
                });
            }

            const selectedShipping = document.querySelector('input[name="shipping"]:checked');
            const shippingItem = document.getElementById('shippingItem');
            
            if (selectedShipping) {
                // Get shipping details
                const shippingName = selectedShipping.getAttribute('data-name');
                const shippingPrice = parseInt(selectedShipping.getAttribute('data-price'));
                const shippingEstimate = selectedShipping.getAttribute('data-estimate');

                // Update prices object
                prices.shipping = shippingPrice;
                selectedShippingName = shippingName;

                // Update dropdown display
                document.getElementById('selectedShipping').textContent = `${shippingName} (${formatRupiah(shippingPrice)})`;
                document.getElementById('selectedEstimate').textContent = `Estimated Arrival ${shippingEstimate}`;

                // Show shipping in summary
                document.getElementById('shippingLabel').textContent = `Ongkos Kirim (${shippingName})`;
                document.getElementById('shippingPrice').textContent = formatRupiah(shippingPrice);
                shippingItem.classList.remove('hidden');
            } else {
                // No shipping selected
                prices.shipping = 0;
                selectedShippingName = '';

                // Update dropdown display
                document.getElementById('selectedShipping').textContent = 'Pilih jasa pengiriman';
                document.getElementById('selectedEstimate').textContent = '';

                // Hide shipping in summary
                shippingItem.classList.add('hidden');
            }

            // Recalculate total
            updateSummary();

            // Close dropdown
            toggleShipping();
        }

        // Update Summary based on checkboxes
        function updateSummary() {
            const protectionCheck = document.getElementById('protectionCheck');
            const insuranceCheck = document.getElementById('insuranceCheck');
            const protectionItem = document.getElementById('protectionItem');
            const insuranceItem = document.getElementById('insuranceItem');
            const totalPriceElement = document.getElementById('totalPrice');
            const shippingPriceElement = document.getElementById('shippingPrice');

            // Calculate total
            let total = prices.product + prices.shipping;

            // Toggle Protection Item
            if (protectionCheck.checked) {
                protectionItem.classList.remove('hidden');
                total += prices.protection;
            } else {
                protectionItem.classList.add('hidden');
            }

            // Toggle Insurance Item
            if (insuranceCheck.checked) {
                insuranceItem.classList.remove('hidden');
                total += prices.insurance;
            } else {
                insuranceItem.classList.add('hidden');
            }

            // Update total price
            totalPriceElement.textContent = formatRupiah(total);
        }

        // Toggle Shipping Options
        function toggleShipping() {
            const options = document.getElementById('shippingOptions');
            const icon = document.getElementById('shippingIcon');
            
            if (options.classList.contains('hidden')) {
                options.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                options.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // Toggle Note Field
        function toggleNote() {
            const noteField = document.getElementById('noteField');
            noteField.classList.toggle('hidden');
            if (!noteField.classList.contains('hidden')) {
                noteField.focus();
            }
        }

        // Update Note Character Count
        function updateNoteCount() {
            const noteField = document.getElementById('noteField');
            const noteCount = document.getElementById('noteCount');
            noteCount.textContent = `${noteField.value.length}/200`;
        }

        // Toggle Promo
        function togglePromo() {
            alert('Fitur promo akan segera hadir!');
        }

        // Update payment method UI+
        document.querySelectorAll('input[name="payment"]').forEach(radio => {
            radio.addEventListener('change', function() {
                document.querySelectorAll('label:has(input[name="payment"])').forEach(label => {
                    label.classList.remove('border-blue-950', 'bg-blue-50');
                    label.classList.add('border-gray-200');
                });
                
                this.closest('label').classList.remove('border-gray-200');
                this.closest('label').classList.add('border-blue-950', 'bg-blue-50');
            });
        });

        // Populate hidden inputs sebelum submit
        document.getElementById('customerForm').addEventListener('submit', function(e) {
            // Get selected shipping
            const selectedShipping = document.querySelector('input[name="shipping"]:checked');
            
            if (!selectedShipping) {
                e.preventDefault();
                alert('Mohon pilih jasa pengiriman terlebih dahulu.');
                return false;
            }
            
            // Populate shipping data
            document.getElementById('hiddenShippingCourier').value = selectedShipping.value;
            document.getElementById('hiddenShippingService').value = selectedShipping.getAttribute('data-name');
            document.getElementById('hiddenShippingCost').value = selectedShipping.getAttribute('data-price');
            
            // Populate total
            document.getElementById('hiddenTotal').value = calculateGrandTotal();
            
            // Populate cart items from localStorage
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            document.getElementById('hiddenCartItems').value = JSON.stringify(cartItems);
        });
        
        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateSummary();
        });
    </script>

</body>

</html>