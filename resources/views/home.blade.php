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
                        <button class="px-4 py-2 text-sm font-semibold text-gray-700 hover:text-blue-950 transition">
                            Join / Log In
                        </button>
                        
                        <button class="flex items-center gap-2 px-4 py-2 bg-blue-950 text-white rounded-lg hover:bg-blue-900 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span class="hidden lg:block text-sm">Profile</span>
                        </button>
                        
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

                        <!-- Men's Mega Menu -->
                        <div class="relative group">
                            <a href="#" class="text-gray-900 font-semibold hover:text-blue-950 transition">Men's</a>
                            <div class="absolute left-0 top-full w-screen max-w-screen -ml-6 md:ml-0 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition duration-150 ease-out">
                                <div class="mx-auto bg-white shadow-lg border-t-2 border-gray-100 py-8 px-6 mt-3 rounded-b-lg w-full z-40">
                                    <div class="container mx-auto">
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

                        <!-- Women's Mega Menu -->
                        <div class="relative group">
                            <a href="#" class="text-gray-900 font-semibold hover:text-blue-950 transition">Women's</a>
                            <div class="absolute left-0 top-full w-screen max-w-screen -ml-6 md:ml-0 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition duration-150 ease-out">
                                <div class="mx-auto bg-white shadow-lg border-t-2 border-gray-100 py-8 px-6 mt-3 rounded-b-lg w-full z-40">
                                    <div class="container mx-auto">
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

                        <!-- Brands Mega Menu -->
                        <div class="relative group">
                            <a href="#" class="text-gray-700 hover:text-blue-950 transition">Brands</a>
                            <div class="absolute left-0 top-full w-screen max-w-screen -ml-6 md:ml-0 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition duration-150 ease-out">
                                <div class="mx-auto bg-white shadow-lg border-t-2 border-gray-100 py-8 px-6 mt-3 rounded-b-lg w-full z-40">
                                    <div class="container mx-auto px-2">
                                        <h3 class="text-xl font-bold mb-6 text-center">Shop by Brand</h3>
                                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                                            @foreach(['Nike','Adidas','Puma','New Balance','Jordan','Asics','New Balance','Jordan','Asics','New Balance','Jordan','Asics'] as $brand)
                                            <a href="#" class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition flex items-center justify-center">
                                                <img src="https://via.placeholder.com/100x50?text={{ urlencode($brand) }}" alt="{{ $brand }}" class="max-w-full h-auto">
                                            </a>
                                            @endforeach
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
                @foreach([
                    ['Nike','bg-blue-100'],
                    ['Adidas','bg-green-100'],
                    ['Puma','bg-purple-100'],
                    ['New Balance','bg-red-100']
                ] as [$cat,$color])
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition cursor-pointer text-center">
                    <div class="{{ $color }} w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-3xl">👟</span>
                    </div>
                    <h3 class="font-bold text-lg">{{ $cat }}</h3>
                </div>
                @endforeach
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
    <footer class="bg-blue-950 text-white py-12">
        <div class="mx-auto w-full max-w-7xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('images/logo-sm.png') }}" class="h-7 me-3" alt="MySneakers Logo" />
                    <span class="text-heading self-center text-2xl font-semibold whitespace-nowrap">MySneakers</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-heading uppercase">Resources</h2>
                    <ul class="text-body font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Docs</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Tailwind CSS</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-heading uppercase">Follow us</h2>
                    <ul class="text-body font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline ">Github</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Discord</a>
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
            <span class="text-sm text-body sm:text-center">© 2025 MySneakers. All Rights Reserved.</span>
            <div class="flex mt-4 sm:justify-center sm:mt-0 gap-5">
                <!-- Social icons contoh -->
                <a href="#" class="text-body hover:text-heading">
                    <span class="sr-only">Facebook</span>
                    FB
                </a>
                <a href="#" class="text-body hover:text-heading">
                    <span class="sr-only">Twitter</span>
                    TW
                </a>
                <a href="#" class="text-body hover:text-heading">
                    <span class="sr-only">GitHub</span>
                    GH
                </a>
            </div>
        </div>
        </div>
    </footer>

    <!-- OPTIONAL: Tutup dropdown jika user mulai scroll -->
    
    <script>
      let lastScrollY = window.scrollY;
      window.addEventListener('scroll', () => {
        if(Math.abs(window.scrollY - lastScrollY) > 5){
          document.querySelectorAll('.group').forEach(g => {  // Paksa hilang dengan menyingkirkan hover via kelas tambahan jika perlu
            g.classList.remove('hover');
          });
        }
        lastScrollY = window.scrollY;
      });
    </script>
   
</body>
</html>