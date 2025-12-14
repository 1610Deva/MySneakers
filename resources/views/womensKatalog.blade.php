<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySneakers - Best Solution For Seeking Sneakers</title>
    <link rel="shortcut icon" href="{{ asset('images/logo-sm1.jpg') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head><body class="bg-gray-50">
    <!-- Navbar -->
    <!-- Top Banner -->
    <div class="bg-blue-800 text-white py-2">
        <div class="container mx-auto px-6">
            <p class="text-sm font-medium text-center">🔥 Early Access Black Friday Sale 🔥 <a href="#" class="underline ml-2">Shop & Save</a></p>
        </div>
    </div>

    <!-- Main Navbar -->
    <nav class="bg-white shadow-md top-0 sticky z-50">
        <!-- Logo & Search Section -->
        <div class="border-b-blue-900 border-b">
            <div class="container mx-auto px-6 py-4">
                <div class="flex items-center justify-between gap-8">
                    <!-- Logo -->
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('images/logo-sm1.jpg') }}" alt="MySneakers Logo" class="w-10 h-10" />
                        <div class="text-2xl font-bold text-blue-950">MySneakers</div>
                    </div>

                    <!-- Search Bar -->
                    <div class="flex-1 max-w-2xl">
                        <div class="relative">
                            <input
                                type="text"
                                placeholder="Search Product..."
                                class="w-full px-4 py-3 pr-12 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-950">
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

  <div class="py-6 px-6">
    <p>Home</p>
    <h1 class="font-bold text-4xl mt-4 mb-8">Men's Shoes</h1>

       <!-- PRODUCT GRID -->
<div class="grid grid-cols-4 col-span-7 gap-6 mx-5 mb-10">


    <!-- CARD 1 -->
    <div class="w-full bg-gray-100 border border-transparent hover:border-black rounded-xl shadow-sm overflow-hidden hover:shadow-xl transition relative">

    <a href="/samba-og-woman">
    <div class="relative">
        <img src="{{ asset('images/products/detail-product/samba-og-woman-side.webp') }}" class="w-full h-48 object-cover">
        <button class="absolute bottom-2 right-2 text-gray-500 hover:text-black">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 3h6m0 0v6m0-6l-8 8m-4-2H3m0 0V3m0 6l8-8" />
            </svg>
        </button>
    </div>

    <div class="p-4 space-y-1">
        <h3 class="font-semibold text-lg">Samba OG Woman</h3>
        <p class="text-sm text-gray-600">Women's</p>
        <p class="text-sm text-gray-600">White/Pink </p>
        <p class="font-semibold mt-2 text-red-600">Rp. 2.000.000</p>
        
    </div>
    </a>
</div>


    <!-- CARD 2 -->
    <div class="w-full bg-gray-100 border border-transparent hover:border-black rounded-xl shadow-sm overflow-hidden hover:shadow-xl transition relative ">

        <a href="/adidas-samba-og">
        <div class="relative">
            <img src="{{ asset('images/products/adidas-sambawhite.webp') }}" class="w-full h-48 object-cover">
            <button class="absolute bottom-2 right-2 text-gray-500 hover:text-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 3h6m0 0v6m0-6l-8 8m-4-2H3m0 0V3m0 6l8-8" />
                </svg>
            </button>
        </div>

        <div class="p-4 space-y-1">
            <h3 class="font-semibold text-lg">Adidas Samba OG Shoes</h3>
            <p class="text-sm text-gray-600">Men's</p>
            <p class="text-sm text-gray-600">Cloud White</p>
            <p class="font-semibold mt-2 text-red-600">Rp. 1.200.000</p>
            <p class="text-sm mt-2 text-gray-900"><s>Rp. 1.800.000</s></p>

        </div>
        </a>
    </div>

    <!-- CARD 3 -->
    <div class="w-full bg-gray-100 border border-transparent hover:border-black rounded-xl shadow-sm overflow-hidden hover:shadow-xl transition relative">

        <a href="/adidas-samba-og">
        <div class="relative">
            <img src="{{ asset('images/products/adidas-sambablack.webp') }}" class="w-full h-48 object-cover">
            <button class="absolute bottom-2 right-2 text-gray-500 hover:text-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 3h6m0 0v6m0-6l-8 8m-4-2H3m0 0V3m0 6l8-8" />
                </svg>
            </button>
        </div>

        <div class="p-4 space-y-1">
            <h3 class="font-semibold text-lg">Adidas Samba OG Shoes</h3>
            <p class="text-sm text-gray-600">Men's</p>
            <p class="text-sm text-gray-600">Cloud Black</p>
            <p class="font-semibold mt-2 text-red-600">Rp. 1.200.000</p>
            <p class="text-sm mt-2 text-gray-900"><s>Rp. 1.800.000</s></p>

        </div>
        </a>
    </div>

    <!-- CARD 4 -->
    <div class="w-full bg-gray-100 border border-transparent hover:border-black rounded-xl shadow-sm overflow-hidden hover:shadow-xl transition relative">
        <div class="relative">
            <a href="/nike-air-jordan1-mid">
            <img src="{{ asset('images/products/detail-product/jordan-aj-mid-side.webp') }}" class="w-full h-48 object-cover">
            <button class="absolute bottom-2 right-2 text-gray-500 hover:text-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 3h6m0 0v6m0-6l-8 8m-4-2H3m0 0V3m0 6l8-8" />
                </svg>
            </button>
        </div>

        <div class="p-4 space-y-1">
            <h3 class="font-semibold text-lg">Nike Air Jordan 1 Retro Mid Men's Basketball Shoes</h3>
            <p class="text-sm text-gray-600">Men's</p>
            <p class="text-sm text-gray-600">Black</p>
            <p class="font-semibold mt-2 text-red-600">Rp. 800.000</p>
            <p class="text-sm mt-2 text-gray-900"><s>Rp. 1.200.000</s></p>

        </div>
        </a>
    </div>
            <div class="w-full bg-gray-100 border border-transparent hover:border-black rounded-xl shadow-sm overflow-hidden hover:shadow-xl transition relative">

        <span class="absolute top-2 left-2 bg-black text-white text-xs px-2 py-1 rounded">NEW</span>
        <a href="/nike-dunklow">
        <div class="relative">
            <img src="{{ asset('images/products/nike-pandalow.webp') }}" class="w-full h-48 object-cover">
            <button class="absolute bottom-2 right-2 text-gray-500 hover:text-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 3h6m0 0v6m0-6l-8 8m-4-2H3m0 0V3m0 6l8-8" />
                </svg>
            </button>
        </div>

        <div class="p-4 space-y-1">
            <h3 class="font-semibold text-lg">Nike Dunk Low Retro Men's Basketball Shoes</h3>
            <p class="text-sm text-gray-600">Men's</p>
            <p class="text-sm text-gray-600">White</p>
            <p class="font-semibold mt-2 text-red-600">Rp. 774.500.</p>
            <p class="text-sm mt-2 text-gray-900"><s>Rp. 1.550.000</s></p>                       
        </div>
    </a>

        </div>
    </div>
</div>

 <!-- Footer -->
    <footer class="bg-blue-950 text-white py-16">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-10 mb-12">

                <!-- Brand Column -->
                <div class="md:col-span-1">
                    <a href="/" class="flex items-center gap-2 mb-4">
                        <img src="{{ asset('images/logo-transparent.png') }}" class="w-auto h-17" alt="MySneakers Logo" />
                    </a>
                    <p class="text-gray-300 mb-6">Your ultimate destination for premium sneakers from the world's best brands.</p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-white/20 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-white/20 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-white/20 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Shop Column -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Shop</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li><a href="#" class="hover:text-white transition">Men's Sneakers</a></li>
                        <li><a href="#" class="hover:text-white transition">Women's Sneakers</a></li>
                        <li><a href="#" class="hover:text-white transition">Kids' Sneakers</a></li>
                        <li><a href="#" class="hover:text-white transition">New Arrivals</a></li>
                        <li><a href="#" class="hover:text-white transition">Sale</a></li>
                    </ul>
                </div>

                <!-- Support Column -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Support</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li><a href="#" class="hover:text-white transition">Contact Us</a></li>
                        <li><a href="#" class="hover:text-white transition">Shipping Info</a></li>
                        <li><a href="#" class="hover:text-white transition">Returns</a></li>
                        <li><a href="#" class="hover:text-white transition">Size Guide</a></li>
                        <li><a href="#" class="hover:text-white transition">FAQ</a></li>
                    </ul>
                </div>

                <!-- Company Column -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Company</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li><a href="#" class="hover:text-white transition">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white transition">Terms of Service</a></li>
                    </ul>
                </div>

            </div>

            <!-- Footer Bottom -->
            <div class="border-t border-white/20 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <p class="text-gray-300 text-sm">
                        © 2025 MySneakers. All rights reserved.
                    </p>
                    <div class="flex gap-6">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Visa.svg" alt="Visa" class="h-8 opacity-70 hover:opacity-100 transition">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="Mastercard" class="h-8 opacity-70 hover:opacity-100 transition">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal" class="h-8 opacity-70 hover:opacity-100 transition">
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.productsSwiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next-custom',
                prevEl: '.swiper-button-prev-custom',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                1280: {
                    slidesPerView: 5,
                    spaceBetween: 24,
                }
            }
        });

        let lastScrollY = window.scrollY;
        window.addEventListener('scroll', () => {
            if (Math.abs(window.scrollY - lastScrollY) > 5) {
                document.querySelectorAll('.group').forEach(g => { // Paksa hilang dengan menyingkirkan hover via kelas tambahan jika perlu
                    g.classList.remove('hover');
                });
            }
            lastScrollY = window.scrollY;
        });
    </script>
    <script src="{{ asset('resources/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

</body>

</html>

