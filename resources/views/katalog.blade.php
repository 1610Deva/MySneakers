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
    <nav class="bg-white shadow-md top-0 sticky z-50">
        <!-- Logo & Search Section -->
        <div class="border-b-blue-900 border-b">
            <div class="container mx-auto px-6 py-4">
                <div class="flex items-center justify-between gap-8">
                    <!-- Logo -->
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('images/logo-sm.png') }}" alt="MySneakers Logo" class="w-10 h-10" />
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

    <!-- MAIN GRID: sidebar + products -->
    <div class="grid grid-cols-12 gap-6 mx-10">

      <!-- SIDEBAR FILTER (kiri) -->
      <aside class="col-span-12 md:col-span-3 space-y-6">
        <h2 class="text-xl font-semibold">Refine Results</h2>

        <!-- Filter groups (accordion placeholder) -->
        <div class="space-y-0">
          <div class="border rounded-none hover:bg-gray-200">
            <button class="w-full flex justify-between items-center p-4">
              <span class="font-medium">Men Size</span>
            <img src="{{ asset('images/arrow_dd.webp') }}" class="w-4 h-4" alt="arrow">
            </button>
          </div>

          <div class="border rounded-none hover:bg-gray-200">
            <button class="w-full flex justify-between items-center p-4">
              <span class="font-medium">Brand</span>
            <img src="{{ asset('images/arrow_dd.webp') }}" class="w-4 h-4" alt="arrow">
            </button>
          </div>

          <div class="border rounded-none hover:bg-gray-200">
            <button class="w-full flex justify-between items-center p-4">
              <span class="font-medium">Price</span>
            <img src="{{ asset('images/arrow_dd.webp') }}" class="w-4 h-4" alt="arrow">
            </button>
          </div>

          <div class="border rounded-none hover:bg-gray-200">
            <button class="w-full flex justify-between items-center p-4">
              <span class="font-medium">Color</span>
            <img src="{{ asset('images/arrow_dd.webp') }}" class="w-4 h-4" alt="arrow">
            </button>
          </div>

          <div class="border rounded-none hover:bg-gray-200">
            <button class="w-full flex justify-between items-center p-4">
              <span class="font-medium">Category</span>
            <img src="{{ asset('images/arrow_dd.webp') }}" class="w-4 h-4" alt="arrow">
            </button>
          </div>

          <div class="border rounded-none hover:bg-gray-200">
            <button class="w-full flex justify-between items-center p-4">
              <span class="font-medium">Sport</span>
            <img src="{{ asset('images/arrow_dd.webp') }}" class="w-4 h-4" alt="arrow">
            </button>
          </div>

          <div class="border rounded-none hover:bg-gray-200">
            <button class="w-full flex justify-between items-center p-4">
              <span class="font-medium">Customer Rating</span>
            <img src="{{ asset('images/arrow_dd.webp') }}" class="w-4 h-4" alt="arrow">
            </button>
          </div>
        </div>
      </aside>

      <!-- PRODUK + SORTING (kanan) -->
      <section class="col-span-12 md:col-span-9 space-y-6">

        <!-- Sorting bar -->
        <div class="flex justify-end">
          <select
            class="border border-black rounded-none mx-5 px-3 py-2 hover:bg-white  focus:outline-none focus:ring-2 focus:ring-blue-950 ">
            <option>Featured</option>
            <option>Price: Low to High</option>
            <option>Price: High to Low</option>
            <option>Newest Arrivals</option>
          </select>
        </div>

       <!-- PRODUCT GRID -->
<div class="grid grid-cols-4 col-span-7 gap-6 mx-5 mb-10">


    <!-- CARD 1 -->
    <div class="w-full bg-gray-100 border border-transparent hover:border-black rounded-xl shadow-sm overflow-hidden hover:shadow-xl transition relative">
    <span class="absolute top-2 left-2 bg-black text-white text-xs px-2 py-1 rounded">NEW</span>

    <div class="relative">
        <img src="{{ asset('images/nikeLebron23.webp') }}" class="w-full h-48 object-cover">
        <button class="absolute bottom-2 right-2 text-gray-500 hover:text-black">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 3h6m0 0v6m0-6l-8 8m-4-2H3m0 0V3m0 6l8-8" />
            </svg>
        </button>
    </div>

    <div class="p-4 space-y-1">
        <h3 class="font-semibold text-lg">Nike Lebron XXIII</h3>
        <p class="text-sm text-gray-600">Men's</p>
        <p class="text-sm text-gray-600">White / Light Smoke Grey / Stadium Green</p>
        <p class="font-semibold mt-2 text-gray-900">$210.00</p>
    </div>
</div>


    <!-- CARD 2 -->
    <div class="w-full bg-gray-100 border border-transparent hover:border-black rounded-xl shadow-sm overflow-hidden hover:shadow-xl transition relative">
        <span class="absolute top-2 left-2 bg-black text-white text-xs px-2 py-1 rounded">NEW</span>

        <div class="relative">
            <img src="{{ asset('images/1.webp') }}" class="w-full h-48 object-cover">
            <button class="absolute bottom-2 right-2 text-gray-500 hover:text-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 3h6m0 0v6m0-6l-8 8m-4-2H3m0 0V3m0 6l8-8" />
                </svg>
            </button>
        </div>

        <div class="p-4 space-y-1">
            <h3 class="font-semibold text-lg">Nike Air Zoom G.T. Cut 1</h3>
            <p class="text-sm text-gray-600">Men's</p>
            <p class="text-sm text-gray-600">Black / Bright Crimson / Bright Ceramic</p>
            <p class="font-semibold mt-2 text-gray-900">$190.00</p>
        </div>
    </div>

    <!-- CARD 3 -->
    <div class="w-full bg-gray-100 border border-transparent hover:border-black rounded-xl shadow-sm overflow-hidden hover:shadow-xl transition relative">
        <span class="absolute top-2 left-2 bg-red-600 text-white text-xs px-2 py-1 rounded">Save $20</span>

        <div class="relative">
            <img src="{{ asset('images/2.webp') }}" class="w-full h-48 object-cover">
            <button class="absolute bottom-2 right-2 text-gray-500 hover:text-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 3h6m0 0v6m0-6l-8 8m-4-2H3m0 0V3m0 6l8-8" />
                </svg>
            </button>
        </div>

        <div class="p-4 space-y-1">
            <h3 class="font-semibold text-lg">Nike Dunk Low</h3>
            <p class="text-sm text-gray-600">Men's</p>
            <p class="text-sm text-gray-600">White / Black</p>
            <p class="font-semibold mt-2 text-red-600">$89.99 <s class="text-gray-900 text-sm">$110</s></p>
        </div>
    </div>

    <!-- CARD 4 -->
    <div class="w-full bg-gray-100 border border-transparent hover:border-black rounded-xl shadow-sm overflow-hidden hover:shadow-xl transition relative">
        <span class="absolute top-2 left-2 bg-black text-white text-xs px-2 py-1 rounded">NEW</span>

        <div class="relative">
            <img src="{{ asset('images/3.webp') }}" class="w-full h-48 object-cover">
            <button class="absolute bottom-2 right-2 text-gray-500 hover:text-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 3h6m0 0v6m0-6l-8 8m-4-2H3m0 0V3m0 6l8-8" />
                </svg>
            </button>
        </div>

        <div class="p-4 space-y-1">
            <h3 class="font-semibold text-lg">Nike P-6000</h3>
            <p class="text-sm text-gray-600">Men's</p>
            <p class="text-sm text-gray-600">White / Metalic Platinum / University Blue</p>
            <p class="font-semibold mt-2 text-gray-900">$59.00</p>
        </div>
    </div>

    <div class="w-full bg-gray-100 border border-transparent hover:border-black rounded-xl shadow-sm overflow-hidden hover:shadow-xl transition relative">
        <span class="absolute top-2 left-2 bg-black text-white text-xs px-2 py-1 rounded">NEW</span>

        <div class="relative">
            <img src="{{ asset('images/3.webp') }}" class="w-full h-48 object-cover">
            <button class="absolute bottom-2 right-2 text-gray-500 hover:text-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 3h6m0 0v6m0-6l-8 8m-4-2H3m0 0V3m0 6l8-8" />
                </svg>
            </button>
        </div>

        <div class="p-4 space-y-1">
            <h3 class="font-semibold text-lg">Nike P-6000</h3>
            <p class="text-sm text-gray-600">Men's</p>
            <p class="text-sm text-gray-600">White / Metalic Platinum / University Blue</p>
            <p class="font-semibold mt-2 text-gray-900">$59.00</p>
        </div>
    </div>

        </div>
    </div>
</div>

