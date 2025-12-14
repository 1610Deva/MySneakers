<!-- Top Banner -->
<div class="bg-blue-950 text-white py-2.5">
    <div class="container mx-auto px-6">
        <p class="text-sm font-medium text-center">
            💯 Guaranteed Authentic Sneakers in MySneakers
            <a href="#" class="underline ml-2 hover:text-gray-200">Shop Now</a>
        </p>
    </div>
</div>

<!-- Main Navbar -->
<nav class="bg-white shadow-md top-0 sticky z-50">
    <!-- Logo & Search Section -->
    <div class=" border-b border-gray-200">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between gap-8">
                <!-- Logo -->
                <div class="flex items-center gap-2 shrink-0">
                    <img src="{{ asset('images/logo-sm.jpg') }}" alt="MySneakers Logo" class="w-auto h-12" />
                </div>

                <!-- Search Bar -->
                <div class="flex-1 max-w-2xl hidden md:block">
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
                    <!-- Logout Button -->
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="flex items-center gap-2 px-5 py-2.5 bg-blue-950 text-white rounded-lg hover:bg-blue-900 transition font-medium">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a4 4 0 01-4 4H6a4 4 0 01-4-4V7a4 4 0 014-4h3a4 4 0 014 4v1" />
                            </svg>
                            <span>Logout</span>
                        </button>
                    </form>

                    <!-- Wishlist Drawer Button -->
                    <button class="relative text-gray-700 hover:text-blue-950 transition" command="show-modal" commandfor="drawer" aria-label="Open wishlist">
                        <svg class="size-7 sm:size-6 md:size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                        <span x-show="totalItems > 0" x-text="totalItems" class="absolute -top-2 -right-2 bg-red-600 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Menu -->
    <div class="bg-white relative">
        <div class="container mx-auto px-6">
            <!-- Mobile: Horizontal scroll, Desktop: Centered -->
            <div class="overflow-x-auto overflow-y-hidden scrollbar-hide py-3 md:overflow-visible">
                <div class="flex items-center justify-start md:justify-center gap-4 md:gap-8 whitespace-nowrap min-w-max md:min-w-0">

                    <!-- Men's -->
                    <div class="relative group shrink-0">
                        <a href="/menskatalog" class="text-gray-900 font-semibold hover:text-blue-950 transition text-sm md:text-base">Men's</a>
                    </div>

                    <!-- Women's -->
                    <div class="relative group shrink-0">
                        <a href="/womenskatalog" class="text-gray-900 font-semibold hover:text-blue-950 transition text-sm md:text-base">Women's</a>
                    </div>

                    <!-- Kid's -->
                    <div class="relative group shrink-0">
                        <a href="/kidskatalog" class="text-gray-900 font-semibold hover:text-blue-950 transition text-sm md:text-base">Kid's</a>
                    </div>

                    <a href="#" class="text-red-600 font-semibold hover:text-red-700 transition shrink-0 text-sm md:text-base">Sale</a>
                    <span class="text-gray-300 shrink-0">|</span>

                    <!-- Brands Mega Menu -->
                    <div class="relative group shrink-0">
                        <a href="#" class="text-gray-700 hover:text-blue-950 transition text-sm md:text-base">Brands</a>
                        <div class="absolute left-1/2 -translate-x-1/2 top-full w-screen max-w-7xl invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-200 ease-in-out pt-2 z-50">
                            <div class="bg-white shadow-xl border border-gray-200 py-8 px-6 rounded-lg">
                                <h3 class="text-xl font-bold mb-6 text-center text-gray-900">Shop by Brand</h3>
                                <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                                    <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                        <img src="{{ asset('images/logo/nike.webp') }}" alt="Nike" class="h-12 w-auto object-contain">
                                        <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Nike</span>
                                    </a>
                                    <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                        <img src="{{ asset('images/logo/adidas.jpg') }}" alt="Adidas" class="h-12 w-auto object-contain">
                                        <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Adidas</span>
                                    </a>
                                    <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                        <img src="{{ asset('images/logo/puma.webp') }}" alt="Puma" class="h-12 w-auto object-contain">
                                        <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Puma</span>
                                    </a>
                                    <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                        <img src="{{ asset('images/logo/newbalance.webp') }}" alt="New Balance" class="h-12 w-auto object-contain">
                                        <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">New Balance</span>
                                    </a>
                                    <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                        <img src="{{ asset('images/logo/jordan.webp') }}" alt="Jordan" class="h-12 w-auto object-contain">
                                        <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Jordan</span>
                                    </a>
                                    <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                        <img src="{{ asset('images/logo/asics.webp') }}" alt="Asics" class="h-12 w-auto object-contain">
                                        <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Asics</span>
                                    </a>
                                    <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                        <img src="{{ asset('images/logo/reebok.jpg') }}" alt="Reebok" class="h-12 w-auto object-contain">
                                        <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Reebok</span>
                                    </a>
                                    <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                        <img src="{{ asset('images/logo/converse.webp') }}" alt="Converse" class="h-12 w-auto object-contain">
                                        <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Converse</span>
                                    </a>
                                    <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                        <img src="{{ asset('images/logo/vans.webp') }}" alt="Vans" class="h-12 w-auto object-contain">
                                        <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Vans</span>
                                    </a>
                                    <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                        <img src="{{ asset('images/logo/underarmour.webp') }}" alt="Under Armour" class="h-12 w-auto object-contain">
                                        <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Under Armour</span>
                                    </a>
                                    <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex col items-center justify-center gap-2 group/item">
                                        <img src="{{ asset('images/logo/compass.png') }}" alt="Compass" class="h-12 w-auto object-contain">
                                        <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Compass</span>
                                    </a>
                                    <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                        <img src="{{ asset('images/logo/hoka.webp') }}" alt="Hoka" class="h-12 w-auto object-contain">
                                        <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Hoka</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    <a href="#" class="text-gray-700 hover:text-blue-950 transition shrink-0 text-sm md:text-base">Releases</a>
                    <a href="#" class="text-gray-700 hover:text-blue-950 transition shrink-0 text-sm md:text-base">New Arrivals</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- End of Navbar -->
