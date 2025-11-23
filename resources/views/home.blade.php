<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySneakers - Best Solution For Seeking Sneakers</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
   <!-- Top Banner -->
    <div class="bg-blue-800 text-white py-2">
        <div class="container mx-auto px-6">
            <p class="text-sm font-medium text-center">🔥 Early Access Black Friday Sale 🔥 <a href="#" class="underline ml-2">Shop & Save</a></p>
        </div>
    </div>

    <!-- Main Navbar -->
    <nav class="bg-white shadow-md top-0 sticky">
        <!-- Logo & Search Section -->
        <div class="border-b-blue-900 border-b">
            <div class="container mx-auto px-6 py-4">
                <div class="flex items-center justify-between gap-8">
                    <!-- Logo -->
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('images/logo-sm.png') }}" alt="MySneakers Logo" class="w-10 h-10"/>
                        <div class="text-2xl font-bold text-blue-950">MySneakers</div>
                    </div>
                    
                    <!-- Search Bar -->
                    <div class="flex-1 max-w-2xl">
                        <div class="relative">
                            <input 
                                type="text" 
                                placeholder="Search Product..." 
                                class="w-full px-4 py-3 pr-12 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-950"
                            >
                            <button class="absolute right-3 top-1/2 -translate-y-1/2">
                                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Right Icons -->
                    <div class="flex items-center gap-4">
                        <!-- Login/Sign Up Button -->
                        <button class="px-4 py-2 text-sm font-semibold text-gray-700 hover:text-blue-950 transition">
                            Join / Log In
                        </button>
                        
                        <!-- Profile Button -->
                        <button class="flex items-center gap-2 px-4 py-2 bg-blue-950 text-white rounded-lg hover:bg-blue-900 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span class="hidden lg:block text-sm">Profile</span>
                        </button>
                        
                        <!-- Cart Button -->
                        <button class="relative text-gray-700 hover:text-blue-950">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Menu -->
        <div class="bg-white relative">
            <div class="container mx-auto px-6">
                <div class="flex items-center justify-center py-3">
                    <div class="flex items-center gap-8">
                        <div class="relative group">
                            <a href="#" class="text-gray-900 font-semibold hover:text-blue-950 transition">Men's</a>
                            <!-- Dropdown Menu -->
                            <div class="absolute left-0 top-full hidden group-hover:block ">
                                <div class="fixed left-0 right-0 bg-white shadow-lg border-t-2 border-gray-100 py-8 mt-4">
                                    <div class="container mx-auto px-6">
                                        <div class="grid grid-cols-4 gap-8">
                                            <div>
                                                <h4 class="font-bold text-sm mb-4 text-gray-900">SHOES</h4>
                                                <ul class="space-y-2">
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">All Shoes</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Running</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Basketball</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Lifestyle</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-sm mb-4 text-gray-900">CLOTHING</h4>
                                                <ul class="space-y-2">
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">All Clothing</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">T-Shirts</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Hoodies</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Jackets</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-sm mb-4 text-gray-900">ACCESSORIES</h4>
                                                <ul class="space-y-2">
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">All Accessories</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Bags</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Socks</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Hats</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-sm mb-4 text-gray-900">FEATURED</h4>
                                                <ul class="space-y-2">
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">New Releases</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Best Sellers</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Sale</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative group">
                            <a href="#" class="text-gray-900 font-semibold hover:text-blue-950 transition">Women's</a>
                            <!-- Dropdown Menu -->
                            <div class="absolute left-0 top-full hidden group-hover:block ">
                                <div class="fixed left-0 right-0 bg-white shadow-lg border-t-2 border-gray-100 py-8 mt-4">
                                    <div class="container mx-auto px-6">
                                        <div class="grid grid-cols-4 gap-8">
                                            <div>
                                                <h4 class="font-bold text-sm mb-4 text-gray-900">SHOES</h4>
                                                <ul class="space-y-2">
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">All Shoes</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Running</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Training</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Lifestyle</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-sm mb-4 text-gray-900">CLOTHING</h4>
                                                <ul class="space-y-2">
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">All Clothing</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Sports Bras</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Leggings</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Tops</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-sm mb-4 text-gray-900">ACCESSORIES</h4>
                                                <ul class="space-y-2">
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">All Accessories</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Bags</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Socks</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-sm mb-4 text-gray-900">FEATURED</h4>
                                                <ul class="space-y-2">
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">New Releases</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Best Sellers</a></li>
                                                    <li><a href="#" class="text-gray-600 hover:text-blue-950 text-sm">Sale</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative group">
                            <a href="#" class="text-gray-900 font-semibold hover:text-blue-950 transition">Kids'</a>
                        </div>

                        <a href="#" class="text-red-600 font-semibold hover:text-red-700 transition">Sale</a>
                        <span class="text-gray-300">|</span>

                        <div class="relative group">
                            <a href="#" class="text-gray-700 hover:text-blue-950 transition">Brands</a>
                            <!-- Brands Dropdown with Logo Grid -->
                            <div class="absolute left-0 top-full hidden group-hover:block">
                                <div class="fixed left-0 right-0 bg-white shadow-lg border-t-2 border-gray-100 py-8 mt-4">
                                    <div class="container mx-auto px-6">
                                        <h3 class="text-xl font-bold mb-6 text-center">Shop by Brand</h3>
                                        <div class="grid grid-cols-6 gap-6">
                                            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition flex items-center justify-center">
                                                <img src="https://via.placeholder.com/100x50?text=Nike" alt="Nike" class="max-w-full h-auto">
                                            </a>
                                            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition flex items-center justify-center">
                                                <img src="https://via.placeholder.com/100x50?text=Adidas" alt="Adidas" class="max-w-full h-auto">
                                            </a>
                                            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition flex items-center justify-center">
                                                <img src="https://via.placeholder.com/100x50?text=Puma" alt="Puma" class="max-w-full h-auto">
                                            </a>
                                            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition flex items-center justify-center">
                                                <img src="https://via.placeholder.com/100x50?text=NB" alt="New Balance" class="max-w-full h-auto">
                                            </a>
                                            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition flex items-center justify-center">
                                                <img src="https://via.placeholder.com/100x50?text=Jordan" alt="Jordan" class="max-w-full h-auto">
                                            </a>
                                            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition flex items-center justify-center">
                                                <img src="https://via.placeholder.com/100x50?text=Asics" alt="Asics" class="max-w-full h-auto">
                                            </a>
                                            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition flex items-center justify-center">
                                                <img src="https://via.placeholder.com/100x50?text=NB" alt="New Balance" class="max-w-full h-auto">
                                            </a>
                                            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition flex items-center justify-center">
                                                <img src="https://via.placeholder.com/100x50?text=Jordan" alt="Jordan" class="max-w-full h-auto">
                                            </a>
                                            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition flex items-center justify-center">
                                                <img src="https://via.placeholder.com/100x50?text=Asics" alt="Asics" class="max-w-full h-auto">
                                            </a>
                                            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition flex items-center justify-center">
                                                <img src="https://via.placeholder.com/100x50?text=NB" alt="New Balance" class="max-w-full h-auto">
                                            </a>
                                            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition flex items-center justify-center">
                                                <img src="https://via.placeholder.com/100x50?text=Jordan" alt="Jordan" class="max-w-full h-auto">
                                            </a>
                                            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition flex items-center justify-center">
                                                <img src="https://via.placeholder.com/100x50?text=Asics" alt="Asics" class="max-w-full h-auto">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="text-gray-700 hover:text-blue-950 transition">Releases</a>
                        <a href="#" class="text-gray-700 hover:text-blue-950 transition">New Arrivals</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Hero Section -->
    <section class="bg-linear-to-r from-blue-950 to-blue-800 text-white py-20">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-5xl font-bold mb-6">Find Your Perfect Sneakers</h1>
                    <p class="text-xl mb-8 text-gray-200">Discover the latest and greatest sneakers from top brands. Your style, your choice.</p>
                    <div class="flex gap-4">
                        <button class="px-8 py-3 bg-white text-blue-950 rounded-lg font-semibold hover:bg-gray-100 transition">Shop Now</button>
                        <button class="px-8 py-3 border-2 border-white text-white rounded-lg font-semibold hover:bg-white hover:text-blue-950 transition">Learn More</button>
                    </div>
                </div>
                <div class="hidden md:block">
                    <img src="https://images.unsplash.com/photo-1460353581641-37baddab0fa2?w=600" alt="Hero Sneakers" class="rounded-lg shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-950 mb-4">Shop by Category</h2>
                <p class="text-gray-600">Browse our collection by your favorite brands</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition cursor-pointer text-center">
                    <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-3xl">👟</span>
                    </div>
                    <h3 class="font-bold text-lg">Nike</h3>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition cursor-pointer text-center">
                    <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-3xl">👟</span>
                    </div>
                    <h3 class="font-bold text-lg">Adidas</h3>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition cursor-pointer text-center">
                    <div class="bg-purple-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-3xl">👟</span>
                    </div>
                    <h3 class="font-bold text-lg">Puma</h3>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition cursor-pointer text-center">
                    <div class="bg-red-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-3xl">👟</span>
                    </div>
                    <h3 class="font-bold text-lg">New Balance</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-950 mb-4">Featured Products</h2>
                <p class="text-gray-600">Check out our best selling sneakers</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Product Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400" alt="Product" class="w-full h-64 object-cover">
                        <span class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm">New</span>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2">Nike Air Max 270</h3>
                        <p class="text-gray-600 text-sm mb-4">Men's Shoes</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-950">$150</span>
                            <button class="bg-blue-950 text-white px-4 py-2 rounded-lg hover:bg-blue-900 transition">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1605348532760-6753d2c43329?w=400" alt="Product" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2">Adidas Ultraboost</h3>
                        <p class="text-gray-600 text-sm mb-4">Running Shoes</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-950">$180</span>
                            <button class="bg-blue-950 text-white px-4 py-2 rounded-lg hover:bg-blue-900 transition">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1551107696-a4b0c5a0d9a2?w=400" alt="Product" class="w-full h-64 object-cover">
                        <span class="absolute top-4 right-4 bg-yellow-500 text-white px-3 py-1 rounded-full text-sm">Sale</span>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2">Puma RS-X</h3>
                        <p class="text-gray-600 text-sm mb-4">Lifestyle Shoes</p>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-blue-950">$120</span>
                                <span class="text-sm text-gray-400 line-through ml-2">$160</span>
                            </div>
                            <button class="bg-blue-950 text-white px-4 py-2 rounded-lg hover:bg-blue-900 transition">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?w=400" alt="Product" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2">New Balance 574</h3>
                        <p class="text-gray-600 text-sm mb-4">Classic Sneakers</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-blue-950">$130</span>
                            <button class="bg-blue-950 text-white px-4 py-2 rounded-lg hover:bg-blue-900 transition">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <button class="px-8 py-3 bg-blue-950 text-white rounded-lg font-semibold hover:bg-blue-900 transition">View All Products</button>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-950" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Authentic Products</h3>
                    <p class="text-gray-600">100% original sneakers from authorized retailers</p>
                </div>

                <div class="text-center">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Fast Delivery</h3>
                    <p class="text-gray-600">Express shipping to your doorstep within 2-3 days</p>
                </div>

                <div class="text-center">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Secure Payment</h3>
                    <p class="text-gray-600">Safe and secure payment methods for your peace of mind</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- <footer class="bg-blue-950 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">MySneakers</h3>
                    <p class="text-gray-300">Your trusted destination for authentic sneakers from top brands worldwide.</p>
                </div>

                <div>
                    <h4 class="font-bold text-lg mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition">About Us</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Contact</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">FAQ</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Shipping Info</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg mb-4">Categories</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Nike</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Adidas</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Puma</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">New Balance</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg mb-4">Newsletter</h4>
                    <p class="text-gray-300 mb-4">Subscribe to get special offers and updates</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email" class="px-4 py-2 rounded-l-lg w-full text-gray-900">
                        <button class="bg-white text-blue-950 px-4 py-2 rounded-r-lg font-semibold hover:bg-gray-100 transition">Subscribe</button>
                    </div>
                </div>
            </div>

            <div class="border-t border-blue-800 mt-8 pt-8 text-center text-gray-300">
                <p>&copy; 2025 MySneakers. All rights reserved.</p>
            </div>
        </div>
    </footer> -->

    
    <!-- Footer Updated -->
    <footer class="bg-blue-950 text-white py-12">
        <div class="mx-auto w-full max-w-7xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-7 me-3" alt="FlowBite Logo" />
                    <span class="text-heading self-center text-2xl font-semibold whitespace-nowrap">Flowbite</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-heading uppercase">Resources</h2>
                    <ul class="text-body font-medium">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-heading uppercase">Follow us</h2>
                    <ul class="text-body font-medium">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-heading uppercase">Legal</h2>
                    <ul class="text-body font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-default sm:mx-auto lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-body sm:text-center">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="#" class="text-body hover:text-heading">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/></svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="#" class="text-body hover:text-heading ms-5">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M18.942 5.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.586 11.586 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3 17.392 17.392 0 0 0-2.868 11.662 15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.638 10.638 0 0 1-1.706-.83c.143-.106.283-.217.418-.331a11.664 11.664 0 0 0 10.118 0c.137.114.277.225.418.331-.544.328-1.116.606-1.71.832a12.58 12.58 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM8.678 14.813a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.929 1.929 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/></svg>
                    <span class="sr-only">Discord community</span>
                </a>
                <a href="#" class="text-body hover:text-heading ms-5">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z"/></svg>
                <span class="sr-only">Twitter page</span>
                </a>
                <a href="#" class="text-body hover:text-heading ms-5">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z" clip-rule="evenodd"/></svg>
                    <span class="sr-only">GitHub account</span>
                </a>
                <a href="#" class="text-body hover:text-heading ms-5">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2a10 10 0 1 0 10 10A10.009 10.009 0 0 0 12 2Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.093 20.093 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM10 3.707a8.82 8.82 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.755 45.755 0 0 0 10 3.707Zm-6.358 6.555a8.57 8.57 0 0 1 4.73-5.981 53.99 53.99 0 0 1 3.168 4.941 32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.641 31.641 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM12 20.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 15.113 13a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/></svg>
                    <span class="sr-only">Dribbble account</span>
                </a>
            </div>
        </div>
        </div>
    </footer>

</body>
</html>