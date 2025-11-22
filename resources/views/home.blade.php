<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySneakers - Best Solution For Seeking Sneakers</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold text-blue-950">MySneakers</div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-gray-700 hover:text-blue-950 transition">Home</a>
                    <a href="#" class="text-gray-700 hover:text-blue-950 transition">Products</a>
                    <a href="#" class="text-gray-700 hover:text-blue-950 transition">Categories</a>
                    <a href="#" class="text-gray-700 hover:text-blue-950 transition">About</a>
                    <a href="#" class="text-gray-700 hover:text-blue-950 transition">Contact</a>
                </div>

                <div class="flex items-center gap-4">
                    <button class="relative">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                    </button>
                    <button class="px-4 py-2 bg-blue-950 text-white rounded-lg hover:bg-blue-900 transition">Login</button>
                </div>
            </div>
        </div>
    </nav>

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
    <footer class="bg-blue-950 text-white py-12">
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
    </footer>
</body>
</html>