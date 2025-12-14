<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySneakers - Best Solution For Seeking Sneakers</title>
    <link rel="shortcut icon" href="{{ asset('images/logo-sm1.jpg') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

    <!-- Plugin -->

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body class="bg-gray-50" style="font-family: 'DM Sans', sans-serif;" x-data="shoppingCart()">
    <style>
        * {
            scroll-behavior: smooth;
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .scrollbar-hide {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        /* Smooth momentum scrolling for iOS */
        .scrollbar-hide {
            -webkit-overflow-scrolling: touch;
        }

        /* Swiper Card Enhancements for New Arrivals Section */
        .swiper-slide {
            height: auto;
        }

        .swiper-slide>div {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        /* Product Card Responsive Improvements */
        @media (max-width: 640px) {

            /* Mobile: Smaller cart button positioning */
            .product-card-btn {
                top: 0.5rem !important;
                right: 0.5rem !important;
                width: 2.25rem !important;
                height: 2.25rem !important;
            }

            .product-card-btn svg {
                width: 1.25rem !important;
                height: 1.25rem !important;
            }

            /* Mobile: Compact product info */
            .product-card-content {
                padding: 0.75rem !important;
            }

            .product-title {
                font-size: 0.875rem !important;
                line-height: 1.25rem !important;
                min-height: 2.5rem !important;
            }

            .product-price {
                font-size: 1rem !important;
            }

            .product-badge {
                padding: 0.125rem 0.375rem !important;
                font-size: 0.75rem !important;
            }
        }

        @media (min-width: 641px) and (max-width: 1024px) {

            /* Tablet: Medium cart button */
            .product-card-btn {
                width: 2.5rem !important;
                height: 2.5rem !important;
            }

            .product-card-btn svg {
                width: 1.375rem !important;
                height: 1.375rem !important;
            }
        }
    </style>

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
                    <a href="{{ route('transaction.log') }}" 
                    class="inline-flex items-center gap-2 px-5 py-2.5 bg-blue-950 text-white rounded-lg hover:bg-blue-900 transition font-medium shadow-sm">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h. 01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h. 01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                        </svg>
                        Transaction History
                    </a>
                        <!-- Profile Button -->
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

                        <!-- Cart Button -->
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

                        <!-- Men's Mega Menu -->
                        <div class="relative group shrink-0">
                            <a href="/menskatalog" class="text-gray-900 font-semibold hover:text-blue-950 transition text-sm md:text-base">Men's</a>
                        </div>

                        <!-- Women's Mega Menu -->
                        <div class="relative group shrink-0">
                            <a href="/womenskatalog" class="text-gray-900 font-semibold hover:text-blue-950 transition text-sm md:text-base">Women's</a>
                        </div>

                        <div class="relative group shrink-0">
                            <a href="kidskatalog" class="text-gray-900 font-semibold hover:text-blue-950 transition text-sm md:text-base">Kid's</a>
                        </div>

                        <a href="#" class="text-red-600 font-semibold hover:text-red-700 transition shrink-0 text-sm md:text-base">Sale</a>
                        <span class="text-gray-300 shrink-0">|</span>

                        <!-- Brands Mega Menu - FIXED -->
                        <div class="relative group shrink-0">
                            <a href="#" class="text-gray-700 hover:text-blue-950 transition text-sm md:text-base">Brands</a>
                            <!-- Fixed dropdown positioning -->
                            <div class="absolute left-1/2 -translate-x-1/2 top-full w-screen max-w-7xl invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-200 ease-in-out pt-2 z-50">
                                <div class="bg-white shadow-xl border border-gray-200 py-8 px-6 rounded-lg">
                                    <h3 class="text-xl font-bold mb-6 text-center text-gray-900">Shop by Brand</h3>
                                    <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                                        <!-- Nike -->
                                        <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                            <img src="{{ asset('images/logo/nike.webp') }}" alt="Nike" class="h-12 w-auto object-contain">
                                            <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Nike</span>
                                        </a>

                                        <!-- Adidas -->
                                        <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                            <img src="{{ asset('images/logo/adidas.jpg') }}" alt="Adidas" class="h-12 w-auto object-contain">
                                            <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Adidas</span>
                                        </a>

                                        <!-- Puma -->
                                        <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                            <img src="{{ asset('images/logo/puma.webp') }}" alt="Puma" class="h-12 w-auto object-contain">
                                            <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Puma</span>
                                        </a>

                                        <!-- New Balance -->
                                        <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                            <img src="{{ asset('images/logo/newbalance.webp') }}" alt="New Balance" class="h-12 w-auto object-contain">
                                            <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">New Balance</span>
                                        </a>

                                        <!-- Jordan -->
                                        <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                            <img src="{{ asset('images/logo/jordan.webp') }}" alt="Jordan" class="h-12 w-auto object-contain">
                                            <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Jordan</span>
                                        </a>

                                        <!-- Asics -->
                                        <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                            <img src="{{ asset('images/logo/asics.webp') }}" alt="Asics" class="h-12 w-auto object-contain">
                                            <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Asics</span>
                                        </a>

                                        <!-- Reebok -->
                                        <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                            <img src="{{ asset('images/logo/reebok.jpg') }}" alt="Reebok" class="h-12 w-auto object-contain">
                                            <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Reebok</span>
                                        </a>

                                        <!-- Converse -->
                                        <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                            <img src="{{ asset('images/logo/converse.webp') }}" alt="Converse" class="h-12 w-auto object-contain">
                                            <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Converse</span>
                                        </a>

                                        <!-- Vans -->
                                        <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                            <img src="{{ asset('images/logo/vans.webp') }}" alt="Vans" class="h-12 w-auto object-contain">
                                            <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Vans</span>
                                        </a>

                                        <!-- Under Armour -->
                                        <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                            <img src="{{ asset('images/logo/underarmour.webp') }}" alt="Under Armour" class="h-12 w-auto object-contain">
                                            <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Under Armour</span>
                                        </a>

                                        <!-- Skechers -->
                                        <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                            <img src="{{ asset('images/logo/compass.png') }}" alt="Compass" class="h-12 w-auto object-contain">
                                            <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Compass</span>
                                        </a>

                                        <!-- Fila -->
                                        <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex flex-col items-center justify-center gap-2 group/item">
                                            <img src="{{ asset('images/logo/hoka.webp') }}" alt="Hoka" class="h-12 w-auto object-contain">
                                            <span class="text-xs font-medium text-gray-700 group-hover/item:text-blue-950">Hoka</span>
                                        </a>
                                    </div>
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

    <!-- Shopping Cart Drawer -->
    <el-dialog>
        <dialog id="drawer" aria-labelledby="drawer-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-hidden bg-transparent not-open:hidden backdrop:bg-transparent">
            <el-dialog-backdrop class="absolute inset-0 bg-gray-500/75 transition-opacity duration-200 ease-in-out data-closed:opacity-0"></el-dialog-backdrop>

            <div tabindex="0" class="absolute inset-0 pl-10 focus:outline-none sm:pl-16">
                <el-dialog-panel class="ml-auto block size-full max-w-md transform transition duration-50 ease-in-out data-closed:translate-x-full sm:duration-300">
                    <div class="flex h-full flex-col overflow-y-auto bg-white shadow-xl">
                        <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                            <div class="flex items-start justify-between">
                                <h2 id="drawer-title" class="text-lg font-medium text-gray-900">Your Shoes Wishlist</h2>
                                <div class="ml-3 flex h-7 items-center">
                                    <button type="button" command="close" commandfor="drawer" class="relative -m-2 p-2 text-gray-400 hover:text-gray-500">
                                        <span class="absolute -inset-0.5"></span>
                                        <span class="sr-only">Close panel</span>
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="flow-root">
                                    <!-- Empty Cart Message -->
                                    <div x-show="items.length === 0" class="text-center py-12">
                                        <svg class="mx-auto h-24 w-24 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                        <h3 class="mt-4 text-lg font-medium text-gray-900">Your Wishlist is empty</h3>
                                        <p class="mt-1 text-sm text-gray-500">Start adding some sneakers!</p>
                                    </div>

                                    <!-- Cart Items -->
                                    <ul role="list" class="-my-6 divide-y divide-gray-200" x-show="items.length > 0">
                                        <template x-for="item in items" :key="item.id">
                                            <li class="flex py-6">
                                                <div class="size-24 shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                    <img :src="item.image" :alt="item.name" class="size-full object-cover" />
                                                </div>

                                                <div class="ml-4 flex flex-1 flex-col">
                                                    <div>
                                                        <div class="flex justify-between text-base font-medium text-gray-900">
                                                            <h3>
                                                                <a href="#" x-text="item.name"></a>
                                                            </h3>
                                                            <p class="ml-4" x-text="formatRupiah(item.price)"></p>
                                                        </div>
                                                        <p class="mt-1 text-sm text-gray-500" x-text="item.brand"></p>
                                                    </div>
                                                    <div class="flex flex-1 items-end justify-between text-sm">
                                                        <p class="text-gray-500">Qty <span x-text="item.quantity"></span></p>

                                                        <div class="flex">
                                                            <button type="button" @click="removeFromCart(item.id)" class="font-medium text-blue-950 hover:text-blue-800">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </template>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                            <div class="flex justify-between text-base font-medium text-gray-900">
                                <p>Subtotal</p>
                                <p x-text="formatRupiah(totalPrice)"></p>
                            </div>
                            <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                            <div class="mt-6">
                                <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-blue-950 px-6 py-3 text-base font-medium text-white shadow-xs hover:bg-blue-900" :class="{ 'opacity-50 cursor-not-allowed': items.length === 0 }" @click.prevent="items.length > 0 && alert('Checkout feature coming soon!')">Checkout</a>
                            </div>
                            <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                                <p>
                                    or
                                    <button type="button" command="close" commandfor="drawer" class="font-medium text-blue-950 hover:text-blue-800">
                                        Continue Shopping
                                        <span aria-hidden="true"> &rarr;</span>
                                    </button>
                                </p>
                            </div>
                        </div> -->
                    </div>
                </el-dialog-panel>
            </div>
        </dialog>
    </el-dialog>

    <!-- Hero Section with Background Video -->
    <section class="relative h-[500px] md:h-[700px] flex items-center justify-center overflow-hidden">

        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="{{ asset('video/videobanner.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="absolute inset-0 bg-black/30 z-0"></div>

        <div class="absolute container mx-auto px-4 sm:px-6 h-full flex items-center z-10">
            <div class="max-w-2xl w-full">
                <div class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-white text-xs sm:text-sm font-semibold mb-4 sm:mb-6">
                    🔥 New Season Collection 2025
                </div>

                <h1 class="text-4xl sm:text-5xl md:text-7xl font-extrabold text-white mb-4 sm:mb-6 leading-tight tracking-tight drop-shadow-md">
                    Step Into<br />
                    Your Style
                </h1>

                <p class="text-base sm:text-xl md:text-2xl text-gray-100 mb-8 sm:mb-10 leading-relaxed max-w-xl drop-shadow-sm">
                    Discover premium sneakers from the world's top brands. Authentic products, unbeatable prices.
                </p>

                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="#products" class="inline-block w-full sm:w-auto px-8 py-3.5 sm:px-10 sm:py-4 bg-blue-950 text-white text-base sm:text-lg font-bold rounded-lg hover:bg-blue-900 transition-all transform hover:scale-105 shadow-xl text-center">
                        Shop Now
                    </a>
                    <a href="#brands" class="inline-block w-full sm:w-auto px-8 py-3.5 sm:px-10 sm:py-4 bg-white/10 backdrop-blur-sm border-2 border-white text-white text-base sm:text-lg font-bold rounded-lg hover:bg-white hover:text-blue-950 transition-all text-center">
                        Explore Brands
                    </a>
                </div>

            </div>
        </div>
    </section>


    <!-- Infinite Brand Logo Slider -->
    <section class="py-6 bg-white overflow-hidden">
        <style>
            @keyframes scroll {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(-50%);
                }
            }

            .animate-scroll {
                animation: scroll 30s linear infinite;
            }

            .animate-scroll:hover {
                animation-play-state: paused;
            }
        </style>

        <div class="relative">
            <!-- Gradient Overlays -->
            <div class="absolute left-0 top-0 bottom-0 w-32 bg-linear-to-r from-white to-transparent z-10"></div>
            <div class="absolute right-0 top-0 bottom-0 w-32 bg-linear-to-l from-white to-transparent z-10"></div>

            <!-- Scrolling Container -->
            <div class="flex animate-scroll">
                <!-- First Set of Logos -->
                <div class="flex items-center gap-16 px-8">
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/nike.webp') }}" alt="Nike" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/adidas.jpg') }}" alt="Adidas" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/puma.webp') }}" alt="Puma" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/newbalance.webp') }}" alt="New Balance" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/jordan.webp') }}" alt="Jordan" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/asics.webp') }}" alt="Asics" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/reebok.jpg') }}" alt="Reebok" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/converse.webp') }}" alt="Converse" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/vans.webp') }}" alt="Vans" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/underarmour.webp') }}" alt="Under Armour" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/compass.png') }}" alt="Compass" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/hoka.webp') }}" alt="Hoka" class="max-w-full max-h-full object-contain">
                    </div>
                </div>

                <!-- Duplicate Set for Seamless Loop -->
                <div class="flex items-center gap-16 px-8">
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/nike.webp') }}" alt="Nike" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/adidas.jpg') }}" alt="Adidas" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/puma.webp') }}" alt="Puma" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/newbalance.webp') }}" alt="New Balance" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/jordan.webp') }}" alt="Jordan" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/asics.webp') }}" alt="Asics" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/reebok.jpg') }}" alt="Reebok" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/converse.webp') }}" alt="Converse" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/vans.webp') }}" alt="Vans" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/underarmour.webp') }}" alt="Under Armour" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/compass.png') }}" alt="Compass" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="shrink-0 w-32 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-10">
                        <img src="{{ asset('images/logo/hoka.webp') }}" alt="Hoka" class="max-w-full max-h-full object-contain">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-8 sm:mb-12">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-950 mb-2">Shop by Category</h2>
                <p class="text-gray-600 text-sm sm:text-base md:text-lg">Find the perfect fit for everyone</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4 md:gap-6">
                <div class="relative group cursor-pointer overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 aspect-[3/4]">
                    <a href="/menskatalog">
                    <img src="{{ asset('images/MENS.webp') }}" alt="Men's Sneakers" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-3 left-3 sm:bottom-6 sm:left-6">
                        <h3 class="text-lg sm:text-xl md:text-2xl font-bold text-white">Men's</h3>
                    </div>
                    </a>
                </div>
                <div class="relative group cursor-pointer overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 aspect-[3/4]">
                    <img src="{{ asset('images/WOMENS.webp') }}" alt="Women's Sneakers" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-3 left-3 sm:bottom-6 sm:left-6">
                        <h3 class="text-lg sm:text-xl md:text-2xl font-bold text-white">Women's</h3>
                    </div>
                </div>
                <div class="relative group cursor-pointer overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 aspect-[3/4]">
                    <img src="{{ asset('images/KIDS_3.webp') }}" alt="Kids' Sneakers" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-3 left-3 sm:bottom-6 sm:left-6">
                        <h3 class="text-lg sm:text-xl md:text-2xl font-bold text-white">Kid's</h3>
                    </div>
                </div>
                <div class="relative group cursor-pointer overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 aspect-[3/4]">
                    <img src="{{ asset('images/local.jpg') }}" alt="Local Brands" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-3 left-3 sm:bottom-6 sm:left-6">
                        <h3 class="text-lg sm:text-xl md:text-2xl font-bold text-white">Local</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-950 mb-3">Why Choose Us</h2>
                <p class="text-gray-600 text-lg">Our advantages based on customers review and industry standards</p>
            </div>
            <div class="grid md:grid-cols-3 gap-10">

                <div class="text-center">
                    <div class="bg-blue-100 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-blue-950" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-2xl mb-3 text-blue-950">100% Authentic</h3>
                    <p class="text-gray-600 leading-relaxed">All products are guaranteed authentic from authorized retailers and distributors</p>
                </div>

                <div class="text-center">
                    <div class="bg-green-100 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-2xl mb-3 text-blue-950">Fast Delivery</h3>
                    <p class="text-gray-600 leading-relaxed">Express shipping nationwide with guaranteed delivery within 2-3 business days</p>
                </div>

                <div class="text-center">
                    <div class="bg-purple-100 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-2xl mb-3 text-blue-950">Secure Payment</h3>
                    <p class="text-gray-600 leading-relaxed">Multiple secure payment options with buyer protection for peace of mind</p>
                </div>

            </div>
        </div>
    </section>

    <!-- All Time Best Seller Products Section -->
    <section class="py-12 sm:py-16 md:py-20 bg-white" id="products">
        <div class="container mx-auto px-4 sm:px-6">
            <!-- Section Header -->
            <div class="mb-6 sm:mb-8 md:mb-10">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900">All-Time Bests</h2>
                <p class="text-sm sm:text-base text-gray-600 mt-2">Discover our most popular sneakers</p>
            </div>

            <!-- Fluid Grid Container - Mobile First -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-5 md:gap-6">

                <!-- Product Card 1 - Nike Air Force 1 -->
                <article class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group flex flex-col">
                    <!-- Product Image Container -->
                    <div class="relative bg-gray-50 overflow-hidden aspect-square">
                    <button @click="addToCart({ id: 1, name: 'Air Force 1 Men\'s Shoes - White', brand: 'NIKE', price: 1600000, image: '{{ asset('images/products/nike-airforce1-men.webp') }}' })"
                            class="absolute top-3 right-3 sm:top-4 sm:right-4 w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 flex items-center justify-center bg-blue-950 text-white rounded-full shadow-lg hover:bg-blue-900 active:scale-95 transition-all z-10"
                            aria-label="Add to cart">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                    </button>
                    <a href="{{ route('products.show', 'MS1') }}">
                        <!-- Product Image -->
                        <img src="{{ asset('images/products/nike-airforce1-men.webp') }}"
                            alt="Nike Air Force 1 Men's Shoes - White"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                            loading="lazy">
                        </a>
                    </div>
                    <!-- Product Info Container -->
                    <div class="p-3 sm:p-4 md:p-5 flex flex-col grow">
                        <!-- Brand -->
                        <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1.5 tracking-wide uppercase">NIKE</p>
                        <!-- Product Title -->
                        <h3 class="text-sm sm:text-base md:text-lg font-semibold text-gray-900 mb-2 sm:mb-3 line-clamp-2 leading-snug min-h-[2.5rem] sm:min-h-[3rem] md:min-h-[3.5rem]">
                            Air Force 1 Men's Shoes - White
                        </h3>
                        <!-- Price Container -->
                        <div class="mt-auto">
                            <div class="flex items-baseline gap-2 mb-1.5 sm:mb-2">
                                <span class="text-lg sm:text-xl md:text-2xl font-bold text-red-600">Rp. 1.600.000</span>
                            </div>
                            <div class="flex items-center gap-2 flex-wrap">
                                <span class="text-xs sm:text-sm text-gray-400 line-through">Rp. 1.800.000</span>
                                <span class="text-xs sm:text-sm font-semibold text-red-600 bg-red-50 px-2 py-0.5 sm:py-1 rounded-md">33% OFF</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Product Card 2 - Adidas Samba White -->
                <article class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group flex flex-col">
                    <div class="relative bg-gray-50 overflow-hidden aspect-square">
                        <button @click="addToCart({ id: 2, name: 'Samba OG Shoes - Cloud White', brand: 'ADIDAS', price: 1200000, image: '{{ asset('images/products/adidas-sambawhite.webp') }}' })"
                            class="absolute top-3 right-3 sm:top-4 sm:right-4 w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 flex items-center justify-center bg-blue-950 text-white rounded-full shadow-lg hover:bg-blue-900 active:scale-95 transition-all z-10"
                            aria-label="Add to cart">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                        <a href="{{ route('products.show', 'MS2') }}"> 
                        <img src="{{ asset('images/products/adidas-sambawhite.webp') }}"
                            alt="Adidas Samba OG Shoes - Cloud White"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                            loading="lazy">
                        </a>
                    </div>
                    <div class="p-3 sm:p-4 md:p-5 flex flex-col grow">
                        <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1.5 tracking-wide uppercase">ADIDAS</p>
                        <h3 class="text-sm sm:text-base md:text-lg font-semibold text-gray-900 mb-2 sm:mb-3 line-clamp-2 leading-snug min-h-[2.5rem] sm:min-h-[3rem] md:min-h-[3.5rem]">
                            Samba OG Shoes - Cloud White
                        </h3>
                        <div class="mt-auto">
                            <div class="flex items-baseline gap-2 mb-1.5 sm:mb-2">
                                <span class="text-lg sm:text-xl md:text-2xl font-bold text-red-600">Rp. 1.200.000</span>
                            </div>
                            <div class="flex items-center gap-2 flex-wrap">
                                <span class="text-xs sm:text-sm text-gray-400 line-through">Rp. 1.800.000</span>
                                <span class="text-xs sm:text-sm font-semibold text-red-600 bg-red-50 px-2 py-0.5 sm:py-1 rounded-md">33% OFF</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Product Card 3 - Adidas Samba Black -->
                <article class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group flex flex-col">
                    <div class="relative bg-gray-50 overflow-hidden aspect-square">
                    <button @click="addToCart({ id: 3, name: 'Samba OG Shoes - Black', brand: 'ADIDAS', price: 1200000, image: '{{ asset('images/products/adidas-sambablack.webp') }}' })"
                        class="absolute top-3 right-3 sm:top-4 sm:right-4 w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 flex items-center justify-center bg-blue-950 text-white rounded-full shadow-lg hover:bg-blue-900 active:scale-95 transition-all z-10"
                        aria-label="Add to cart">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>
                    <a href="{{ route('products.show', 'MS3') }}">  
                        <img src="{{ asset('images/products/adidas-sambablack.webp') }}"
                            alt="Adidas Samba OG Shoes - Black"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                            loading="lazy">
                    </a>
                    </div>
                    <div class="p-3 sm:p-4 md:p-5 flex flex-col grow">
                        <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1.5 tracking-wide uppercase">ADIDAS</p>
                        <h3 class="text-sm sm:text-base md:text-lg font-semibold text-gray-900 mb-2 sm:mb-3 line-clamp-2 leading-snug min-h-[2.5rem] sm:min-h-[3rem] md:min-h-[3.5rem]">
                            Samba OG Shoes - Black
                        </h3>
                        <div class="mt-auto">
                            <div class="flex items-baseline gap-2 mb-1.5 sm:mb-2">
                                <span class="text-lg sm:text-xl md:text-2xl font-bold text-red-600">Rp. 1.200.000</span>
                            </div>
                            <div class="flex items-center gap-2 flex-wrap">
                                <span class="text-xs sm:text-sm text-gray-400 line-through">Rp. 1.800.000</span>
                                <span class="text-xs sm:text-sm font-semibold text-red-600 bg-red-50 px-2 py-0.5 sm:py-1 rounded-md">33% OFF</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Product Card 4 - Nike Air Jordan 1 -->
                <article class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group flex flex-col">
                    <div class="relative bg-gray-50 overflow-hidden aspect-square">
                    <button @click="addToCart({ id: 4, name: 'Air Jordan 1 Retro Mid - Black', brand: 'NIKE', price: 800000, image: '{{ asset('images/products/nike-airjordan1.webp') }}' })"
                        class="absolute top-3 right-3 sm:top-4 sm:right-4 w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 flex items-center justify-center bg-blue-950 text-white rounded-full shadow-lg hover:bg-blue-900 active:scale-95 transition-all z-10"
                        aria-label="Add to cart">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>
                    <a href="{{ route('products.show', 'MS4') }}"> 
                        <img src="{{ asset('images/products/detail-product/jordan-aj-mid-side.webp') }}"
                            alt="Nike Air Jordan 1 Retro Mid"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                            loading="lazy">
                    </a>
                    </div>
                    <div class="p-3 sm:p-4 md:p-5 flex flex-col grow">
                        <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1.5 tracking-wide uppercase">NIKE</p>
                        <h3 class="text-sm sm:text-base md:text-lg font-semibold text-gray-900 mb-2 sm:mb-3 line-clamp-2 leading-snug min-h-[2.5rem] sm:min-h-[3rem] md:min-h-[3.5rem]">
                            Air Jordan 1 Retro Mid Men's Basketball Shoes OG - Black
                        </h3>
                        <div class="mt-auto">
                            <div class="flex items-baseline gap-2 mb-1.5 sm:mb-2">
                                <span class="text-lg sm:text-xl md:text-2xl font-bold text-red-600">Rp. 800.000</span>
                            </div>
                            <div class="flex items-center gap-2 flex-wrap">
                                <span class="text-xs sm:text-sm text-gray-400 line-through">Rp. 1.200.000</span>
                                <span class="text-xs sm:text-sm font-semibold text-red-600 bg-red-50 px-2 py-0.5 sm:py-1 rounded-md">33% OFF</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Product Card 5 - Nike Dunk Low -->
                <article class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group flex flex-col">
                    <div class="relative bg-gray-50 overflow-hidden aspect-square">
                        <button @click="addToCart({ id: 4, name: 'Air Jordan 1 Retro Mid - Black', brand: 'NIKE', price: 800000, image: '{{ asset('images/products/nike-airjordan1.webp') }}' })"
                                class="absolute top-3 right-3 sm:top-4 sm:right-4 w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 flex items-center justify-center bg-blue-950 text-white rounded-full shadow-lg hover:bg-blue-900 active:scale-95 transition-all z-10"
                                aria-label="Add to cart">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                        </button> 
                        <a href="{{ route('products.show', 'MS5') }}">
                            <img src="{{ asset('images/products/nike-pandalow.webp') }}"
                                    alt="Nike Dunk Low"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    loading="lazy">
                        </a>
                    </div>
                    <div class="p-3 sm:p-4 md:p-5 flex flex-col grow">
                        <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1.5 tracking-wide uppercase">NIKE</p>
                        <a href="{{ route('products.show', 'MS5') }}">
                            <h3 class="text-sm sm:text-base md:text-lg font-semibold text-gray-900 mb-2 sm:mb-3 line-clamp-2 leading-snug min-h-[2.5rem] sm:min-h-[3rem] md:min-h-[3.5rem]">
                                Dunk Low Retro White Black Panda
                            </h3>
                        </a>
                        <!-- Price Container -->
                        <div class="mt-auto">
                            <div class="flex items-baseline gap-2 mb-1.5 sm:mb-2">
                                <span class="text-lg sm:text-xl md:text-2xl font-bold text-red-600">Rp. 774.500</span>
                            </div>
                            <div class="flex items-center gap-2 flex-wrap">
                                <span class="text-xs sm:text-sm text-gray-400 line-through">Rp. 1.550.000</span>
                                <span class="text-xs sm:text-sm font-semibold text-red-600 bg-red-50 px-2 py-0.5 sm:py-1 rounded-md">50% OFF</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Product Card 6 - Converse Chuck Taylor -->
                <article class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group flex flex-col">
                    <div class="relative bg-gray-50 overflow-hidden aspect-square">
                        <button @click="addToCart({ id: 6, name: 'Chuck Taylor All Star High Top - Black', brand: 'CONVERSE', price: 899000, image: '{{ asset('images/products/converse-chucktaylor.webp') }}' })"
                            class="absolute top-3 right-3 sm:top-4 sm:right-4 w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 flex items-center justify-center bg-blue-950 text-white rounded-full shadow-lg hover:bg-blue-900 active:scale-95 transition-all z-10"
                            aria-label="Add to cart">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                        <a href="{{ route('products.show', 'MS6') }}">
                        <img src="{{ asset('images/products/converse-chucktaylor.webp') }}"
                            alt="Converse Chuck Taylor All Star"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                            loading="lazy">
                        </a>
                    </div>
                    <div class="p-3 sm:p-4 md:p-5 flex flex-col grow">
                        <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1.5 tracking-wide uppercase">CONVERSE</p>
                        <h3 class="text-sm sm:text-base md:text-lg font-semibold text-gray-900 mb-2 sm:mb-3 line-clamp-2 leading-snug min-h-[2.5rem] sm:min-h-[3rem] md:min-h-[3.5rem]">
                            Chuck Taylor All Star High Top - Black
                        </h3>
                        <div class="mt-auto">
                            <div class="flex items-baseline gap-2 mb-1.5 sm:mb-2">
                                <span class="text-lg sm:text-xl md:text-2xl font-bold text-gray-900">Rp. 899.000</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Product Card 7 - Vans Old Skool -->
                <article class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group flex flex-col">
                    <div class="relative bg-gray-50 overflow-hidden aspect-square">
                        <button @click="addToCart({ id: 7, name: 'Old Skool Classic - Black/White', brand: 'VANS', price: 980000, image: '{{ asset('images/products/vans-oldskool.webp') }}' })"
                            class="absolute top-3 right-3 sm:top-4 sm:right-4 w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 flex items-center justify-center bg-blue-950 text-white rounded-full shadow-lg hover:bg-blue-900 active:scale-95 transition-all z-10"
                            aria-label="Add to cart">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                        <a href="{{ route('products.show', 'MS7') }}">
                        <img src="{{ asset('images/products/vans-oldskool.webp') }}"
                            alt="Vans Old Skool Classic"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                            loading="lazy">
                        </a>
                    </div>
                    <div class="p-3 sm:p-4 md:p-5 flex flex-col grow">
                        <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1.5 tracking-wide uppercase">VANS</p>
                        <h3 class="text-sm sm:text-base md:text-lg font-semibold text-gray-900 mb-2 sm:mb-3 line-clamp-2 leading-snug min-h-[2.5rem] sm:min-h-[3rem] md:min-h-[3.5rem]">
                            Old Skool Classic - Black/White
                        </h3>
                        <div class="mt-auto">
                            <div class="flex items-baseline gap-2 mb-1.5 sm:mb-2">
                                <span class="text-lg sm:text-xl md:text-2xl font-bold text-red-600">Rp. 980.000</span>
                            </div>
                            <div class="flex items-center gap-2 flex-wrap">
                                <span class="text-xs sm:text-sm text-gray-400 line-through">Rp. 1.100.000</span>
                                <span class="text-xs sm:text-sm font-semibold text-red-600 bg-red-50 px-2 py-0.5 sm:py-1 rounded-md">32% OFF</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Product Card 8 - New Balance 1906 -->
                <article class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group flex flex-col">
                    <div class="relative bg-gray-50 overflow-hidden aspect-square">
                        <button @click="addToCart({ id: 8, name: '1906 Unisex Lifestyle Shoes - White Silver', brand: 'NEW BALANCE', price: 2599000, image: '{{ asset('images/products/newbalance-1906.webp') }}' })"
                            class="absolute top-3 right-3 sm:top-4 sm:right-4 w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 flex items-center justify-center bg-blue-950 text-white rounded-full shadow-lg hover:bg-blue-900 active:scale-95 transition-all z-10"
                            aria-label="Add to cart">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                        <a href="{{ route('products.show', 'MS8') }}">
                        <img src="{{ asset('images/products/newbalance-1906.webp') }}"
                            alt="New Balance 1906"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                            loading="lazy">
                        </a>
                    </div>
                    <div class="p-3 sm:p-4 md:p-5 flex flex-col grow">
                        <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1.5 tracking-wide uppercase">NEW BALANCE</p>
                        <h3 class="text-sm sm:text-base md:text-lg font-semibold text-gray-900 mb-2 sm:mb-3 line-clamp-2 leading-snug min-h-[2.5rem] sm:min-h-[3rem] md:min-h-[3.5rem]">
                            1906 Unisex Lifestyle Shoes - White Silver
                            </h3>
                        <div class="mt-auto">
                            <div class="flex items-baseline gap-2 mb-1.5 sm:mb-2">
                                <span class="text-lg sm:text-xl md:text-2xl font-bold text-gray-900">Rp. 2.599.000</span>
                            </div>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- NEW: Brand Collaboration Section -->
    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-950 mb-3">Hottest Collaborations Available!!</h2>
                <p class="text-gray-600 text-lg">Exclusive collaborations and limited edition drops</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Large Featured Card -->
                <div class="lg:col-span-2 relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <a href="#"><img src="{{ asset('images/banners/banner-compasstds.jpg') }}" alt=""></a>
                </div>

                <!-- Small Cards Column -->
                <div class="flex flex-col gap-6">
                    <!-- Card 1 -->
                    <div class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <a href="#"><img src="{{ asset('images/banners/adizero-banner.jpg') }}" alt=""></a>
                    </div>

                    <!-- Card 2 -->
                    <div class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <a href="#"><img src="{{ asset('images/banners/airjordan1-banner.jpg') }}" alt=""></a>
                    </div>
                </div>
            </div>

            <!-- Additional Info Cards -->
            <div class="grid md:grid-cols-3 gap-6 mt-12">
                <div class="bg-white rounded-xl p-8 text-center shadow-md hover:shadow-lg transition-all">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-950" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-xl text-blue-950 mb-2">Best Price Guarantee</h4>
                    <p class="text-gray-600">We match any competitor's price on authentic sneakers</p>
                </div>

                <div class="bg-white rounded-xl p-8 text-center shadow-md hover:shadow-lg transition-all">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-xl text-blue-950 mb-2">Quality Assured</h4>
                    <p class="text-gray-600">Every pair thoroughly inspected before shipping</p>
                </div>

                <div class="bg-white rounded-xl p-8 text-center shadow-md hover:shadow-lg transition-all">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-xl text-blue-950 mb-2">Exclusive Access</h4>
                    <p class="text-gray-600">First dibs on limited edition releases and collabs</p>
                </div>
            </div>
        </div>
    </section>

    <!-- New Arrival Products Section -->
    <section class="py-12 sm:py-16 md:py-20 bg-white" id="new-arrivals">
        <div class="container mx-auto px-4 sm:px-6">
            <!-- Section Header -->
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6 sm:mb-8 md:mb-10 gap-4">
                <div>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900">MySneakers New Arrivals</h2>
                    <p class="text-sm sm:text-base text-gray-600 mt-2">Fresh kicks just dropped</p>
                </div>
                <div class="flex gap-2">
                    <button class="swiper-button-prev-custom w-10 h-10 sm:w-11 sm:h-11 flex items-center justify-center border border-gray-300 rounded-full hover:bg-gray-100 active:scale-95 transition">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button class="swiper-button-next-custom w-10 h-10 sm:w-11 sm:h-11 flex items-center justify-center border border-gray-300 rounded-full hover:bg-gray-100 active:scale-95 transition">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Swiper Container -->
            <div class="swiper productsSwiper">
                <div class="swiper-wrapper">

                    <!-- Product Card 1 - Nike Air Force 1 -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group h-full flex flex-col">
                            <!-- Product Image Container -->
                            <div class="relative bg-gray-50 overflow-hidden aspect-square">
                                <!-- Add to Cart Button - Touch Optimized -->
                                <button @click="addToCart({ id: 1, name: 'Air Force 1 Men\'s Shoes - White', brand: 'NIKE', price: 1600000, image: '{{ asset('images/products/nike-airforce1-men.webp') }}' })"
                                    class="absolute top-3 right-3 sm:top-4 sm:right-4 w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 flex items-center justify-center bg-blue-950 text-white rounded-full shadow-lg hover:bg-blue-900 active:scale-95 transition-all z-10"
                                    aria-label="Add to cart">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                                <!-- Product Image -->
                                <img src="{{ asset('images/products/nike-airforce1-men.webp') }}"
                                    alt="Nike Air Force 1 Men's Shoes - White"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    loading="lazy">
                            </div>
                            <!-- Product Info Container -->
                            <div class="p-3 sm:p-4 md:p-5 flex flex-col grow">
                                <!-- Brand -->
                                <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1.5 tracking-wide uppercase">NIKE</p>
                                <!-- Product Title -->
                                <h3 class="text-sm sm:text-base md:text-lg font-semibold text-gray-900 mb-2 sm:mb-3 line-clamp-2 leading-snug min-h-[2.5rem] sm:min-h-[3rem] md:min-h-[3.5rem]">
                                    Air Force 1 Men's Shoes - White
                                </h3>
                                <!-- Price Container -->
                                <div class="mt-auto">
                                    <div class="flex items-baseline gap-2 mb-1.5 sm:mb-2">
                                        <span class="text-lg sm:text-xl md:text-2xl font-bold text-red-600">Rp. 1.600.000</span>
                                    </div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="text-xs sm:text-sm text-gray-400 line-through">Rp. 1.800.000</span>
                                        <span class="text-xs sm:text-sm font-semibold text-red-600 bg-red-50 px-2 py-0.5 sm:py-1 rounded-md">33% OFF</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 2 - Adidas Samba White -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group h-full flex flex-col">
                            <div class="relative bg-gray-50 overflow-hidden aspect-square">
                                <img src="{{ asset('images/products/adidas-sambawhite.webp') }}"
                                    alt="Adidas Samba OG Shoes - Cloud White"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    loading="lazy">
                                <button @click="addToCart({ id: 2, name: 'Adidas Samba OG Shoes - Cloud White', brand: 'ADIDAS', price: 1200000, image: '{{ asset('images/products/adidas-sambawhite.webp') }}' })"
                                    class="absolute top-3 right-3 sm:top-4 sm:right-4 w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 flex items-center justify-center bg-blue-950 text-white rounded-full shadow-lg hover:bg-blue-900 active:scale-95 transition-all z-10"
                                    aria-label="Add to cart">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="p-3 sm:p-4 md:p-5 flex flex-col grow">
                                <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1.5 tracking-wide uppercase">ADIDAS</p>
                                <h3 class="text-sm sm:text-base md:text-lg font-semibold text-gray-900 mb-2 sm:mb-3 line-clamp-2 leading-snug min-h-[2.5rem] sm:min-h-[3rem] md:min-h-[3.5rem]">
                                    Samba OG Shoes - Cloud White
                                </h3>
                                <div class="mt-auto">
                                    <div class="flex items-baseline gap-2 mb-1.5 sm:mb-2">
                                        <span class="text-lg sm:text-xl md:text-2xl font-bold text-red-600">Rp. 1.200.000</span>
                                    </div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="text-xs sm:text-sm text-gray-400 line-through">Rp. 1.800.000</span>
                                        <span class="text-xs sm:text-sm font-semibold text-red-600 bg-red-50 px-2 py-0.5 sm:py-1 rounded-md">33% OFF</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 3 - Adidas Samba Black -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group h-full flex flex-col">
                            <div class="relative bg-gray-50 overflow-hidden aspect-square">
                                <button @click="addToCart({ id: 3, name: 'Adidas Samba OG Shoes - Black', brand: 'ADIDAS', price: 1200000, image: '{{ asset('images/products/adidas-sambablack.webp') }}' })"
                                    class="absolute top-3 right-3 sm:top-4 sm:right-4 w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 flex items-center justify-center bg-blue-950 text-white rounded-full shadow-lg hover:bg-blue-900 active:scale-95 transition-all z-10"
                                    aria-label="Add to cart">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                                <img src="{{ asset('images/products/adidas-sambablack.webp') }}" alt="Adidas Samba OG Shoes - Black" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4 md:p-5 grow flex flex-col">
                                <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1.5 tracking-wide uppercase">ADIDAS</p>
                                <h3 class="font-semibold text-sm sm:text-base md:text-lg mb-2 sm:mb-3 text-gray-900 line-clamp-2 min-h-[2.5rem] sm:min-h-[3rem] md:min-h-[3.5rem]">
                                    Samba OG Shoes - Black
                                </h3>
                                <div class="mt-auto">
                                    <div class="flex items-baseline gap-2 mb-1 sm:mb-2">
                                        <span class="text-lg sm:text-xl md:text-2xl font-bold text-red-600">Rp. 1.200.000</span>
                                    </div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="text-xs sm:text-sm text-gray-400 line-through">Rp. 1.800.000</span>
                                        <span class="text-xs sm:text-sm font-semibold text-red-600 bg-red-50 px-2 py-0.5 sm:py-1 rounded-md">33% OFF</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 4 - Nike Air Jordan 1 -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group h-full flex flex-col">
                            <div class="relative bg-gray-50 overflow-hidden aspect-square">
                                <button @click="addToCart({ id: 4, name: 'Air Jordan 1 Retro Mid - Black', brand: 'NIKE', price: 800000, image: '{{ asset('images/products/nike-airjordan1.webp') }}' })" class="absolute top-3 sm:top-4 right-3 sm:right-4 w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 flex items-center justify-center bg-blue-950 text-white rounded-full shadow-md hover:bg-blue-900 transition z-10"
                                    aria-label="Add to cart">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                                <img src="{{ asset('images/products/nike-airjordan1.webp') }}" alt="Nike Air Jordan 1 Retro Mid" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4 md:p-5 grow flex flex-col">
                                <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1.5 tracking-wide uppercase">NIKE</p>
                                <h3 class="font-semibold text-sm sm:text-base md:text-lg mb-2 sm:mb-3 text-gray-900 line-clamp-2 min-h-[2.5rem] sm:min-h-[3rem] md:min-h-[3.5rem]">
                                    Air Jordan 1 Retro Mid Men's Basketball Shoes OG - Black
                                </h3>
                                <div class="mt-auto">
                                    <div class="flex items-baseline gap-2 mb-1 sm:mb-2">
                                        <span class="text-lg sm:text-xl md:text-2xl font-bold text-red-600">Rp. 800.000</span>
                                    </div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="text-xs sm:text-sm text-gray-400 line-through">Rp. 1.200.000</span>
                                        <span class="text-xs sm:text-sm font-semibold text-red-600 bg-red-50 px-2 py-0.5 sm:py-1 rounded-md">33% OFF</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 5 - Nike Dunk Low -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group h-full flex flex-col">
                            <div class="relative bg-gray-50 overflow-hidden aspect-square">
                                <button @click="addToCart({ id: 5, name: 'Dunk Low Retro White Black Panda', brand: 'NIKE', price: 774500, image: '{{ asset('images/products/nike-pandalow.webp') }}' })"
                                    class="absolute top-3 right-3 sm:top-4 sm:right-4 w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 flex items-center justify-center bg-blue-950 text-white rounded-full shadow-lg hover:bg-blue-900 active:scale-95 transition-all z-10"
                                    aria-label="Add to cart">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                                <a href="{{ url('nike-dunklow') }}"><img src="{{ asset('images/products/nike-pandalow.webp') }}" alt="Nike Dunk Low White" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"></a>
                            </div>
                            <div class="p-3 sm:p-4 md:p-5 grow flex flex-col">
                                <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1 sm:mb-2">NIKE</p>
                                <a href="{{ url('nike-dunklow') }}">
                                    <h3 class="font-semibold text-sm sm:text-base md:text-lg mb-2 sm:mb-3 text-gray-900 line-clamp-2 min-h-[2.5rem] sm:min-h-[3rem]">
                                        Dunk Low Retro White Black Panda
                                    </h3>
                                </a>
                                <div class="mt-auto">
                                    <div class="flex items-baseline gap-2 mb-1 sm:mb-2">
                                        <span class="text-lg sm:text-xl md:text-2xl font-bold text-red-600">Rp. 774.500</span>
                                    </div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="text-xs sm:text-sm text-gray-400 line-through">Rp. 1.550.000</span>
                                        <span class="text-xs sm:text-sm font-semibold text-red-600 bg-red-50 px-2 py-0.5 sm:py-1 rounded-md">50% OFF</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Converse Chuck Taylor -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group h-full flex flex-col">
                            <div class="relative bg-gray-50 overflow-hidden aspect-square">
                                <button @click="addToCart({ id: 6, name: 'Chuck Taylor All Star High Top - Black', brand: 'CONVERSE', price: 899000, image: '{{ asset('images/products/converse-chucktaylor.webp') }}' })"
                                    class="absolute top-3 right-3 sm:top-4 sm:right-4 w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 flex items-center justify-center bg-blue-950 text-white rounded-full shadow-lg hover:bg-blue-900 active:scale-95 transition-all z-10"
                                    aria-label="Add to cart">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>

                                <img src="{{ asset('images/products/converse-chucktaylor.webp') }}" alt="Converse Chuck Taylor" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="p-3 sm:p-4 md:p-5 grow flex flex-col">
                                <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1 sm:mb-2">CONVERSE</p>
                                <h3 class="font-semibold text-sm sm:text-base md:text-lg mb-2 sm:mb-3 text-gray-900 line-clamp-2 min-h-[2.5rem] sm:min-h-[3rem]">Chuck Taylor All Star High Top - Black</h3>
                                <div class="mt-auto">
                                    <div class="flex items-baseline gap-2 mb-1 sm:mb-2">
                                        <span class="text-lg sm:text-xl md:text-2xl font-bold text-gray-900">Rp. 899.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vans Old Skool Classic -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group h-full flex flex-col">
                            <div class="relative bg-gray-50 overflow-hidden aspect-square">
                                <button @click="addToCart({ id: 7, name: 'Old Skool Classic - Black/White', brand: 'VANS', price: 980000, image: '{{ asset('images/products/vans-oldskool.webp') }}' })"
                                    class="absolute top-3 right-3 sm:top-4 sm:right-4 w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 flex items-center justify-center bg-blue-950 text-white rounded-full shadow-lg hover:bg-blue-900 active:scale-95 transition-all z-10"
                                    aria-label="Add to cart">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                                <img src="{{ asset('images/products/vans-oldskool.webp') }}" alt="Vans Old Skool Classic" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="p-3 sm:p-4 md:p-5 grow flex flex-col">
                                <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1 sm:mb-2">VANS</p>
                                <h3 class="font-semibold text-sm sm:text-base md:text-lg mb-2 sm:mb-3 text-gray-900 line-clamp-2 min-h-[2.5rem] sm:min-h-[3rem]">Old Skool Classic - Black/White</h3>
                                <div class="mt-auto">
                                    <div class="flex items-baseline gap-2 mb-1 sm:mb-2">
                                        <span class="text-lg sm:text-xl md:text-2xl font-bold text-red-600">Rp. 980.000</span>
                                    </div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="text-xs sm:text-sm text-gray-400 line-through">Rp. 1.100.000</span>
                                        <span class="text-xs sm:text-sm font-semibold text-red-600 bg-red-50 px-2 py-0.5 sm:py-1 rounded-md">32% OFF</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 8 - New Balance 1906 -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group h-full flex flex-col">
                            <div class="relative bg-gray-50 overflow-hidden aspect-square">
                                <button @click="addToCart({ id: 8, name: '1906 Unisex Lifestyle Shoes - White Silver', brand: 'NEW BALANCE', price: 2599000, image: '{{ asset('images/products/newbalance-1906.webp') }}' })"
                                    class="absolute top-3 right-3 sm:top-4 sm:right-4 w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 flex items-center justify-center bg-blue-950 text-white rounded-full shadow-lg hover:bg-blue-900 active:scale-95 transition-all z-10"
                                    aria-label="Add to cart">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                                <img src="{{ asset('images/products/newbalance-1906.webp') }}"
                                    alt="New Balance 1906"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4 md:p-5 flex flex-col grow">
                                <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1.5 tracking-wide uppercase">NEW BALANCE</p>
                                <h3 class="text-sm sm:text-base md:text-lg font-semibold text-gray-900 mb-2 sm:mb-3 line-clamp-2 leading-snug min-h-[2.5rem] sm:min-h-[3rem] md:min-h-[3.5rem]">
                                    1906 Unisex Lifestyle Shoes - White Silver
                                    </h3>
                                <div class="mt-auto">
                                    <div class="flex items-baseline gap-2 mb-1.5 sm:mb-2">
                                        <span class="text-lg sm:text-xl md:text-2xl font-bold text-gray-900">Rp. 2.599.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 9 - Compass Velocity Black (UPDATED) -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group h-full flex flex-col">
                            <div class="relative bg-gray-50 overflow-hidden aspect-square">
                                <button @click="addToCart({ id: 9, name: 'Compass Velocity Black', brand: 'COMPASS', price: 950000, image: '{{ asset('images/products/compass-velocity-black.webp') }}' })"
                                    class="absolute top-3 right-3 sm:top-4 sm:right-4 w-10 h-10 sm:w-11 sm:h-11 md:w-12 md:h-12 flex items-center justify-center bg-blue-950 text-white rounded-full shadow-lg hover:bg-blue-900 active:scale-95 transition-all z-10"
                                    aria-label="Add to cart">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                                <img src="{{ asset('images/products/compass-velocity-black.webp') }}"
                                    alt="Compass Velocity Black"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4 md:p-5 flex flex-col grow">
                                <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1.5 tracking-wide uppercase">COMPASS</p>
                                <h3 class="text-sm sm:text-base md:text-lg font-semibold text-gray-900 mb-2 sm:mb-3 line-clamp-2 leading-snug min-h-[2.5rem] sm:min-h-[3rem] md:min-h-[3.5rem]">
                                    Compass Velocity Black
                                </h3>
                                <div class="mt-auto">
                                    <div class="flex items-baseline gap-2 mb-1.5 sm:mb-2">
                                        <span class="text-lg sm:text-xl md:text-2xl font-bold text-red-600">Rp. 950.000</span>
                                    </div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="text-xs sm:text-sm text-gray-400 line-through">Rp. 1.299.000</span>
                                        <span class="text-xs sm:text-sm font-semibold text-red-600 bg-red-50 px-2 py-0.5 sm:py-1 rounded-md">27% OFF</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 10 - Asics Gel Kayano (UPDATED) -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group h-full flex flex-col">
                            <div class="relative bg-gray-50 overflow-hidden aspect-square">
                            <button @click="addToCart({ id: 10, name: 'GEL-KAYANO 14 Sneakers Shoes - White', brand: 'ASICS', price: 2399000, image: '{{ asset('images/products/asiscs-gelkayano.webp') }}' })"
                                <img src="{{ asset('images/products/asiscs-gelkayano.webp') }}"
                                    alt="Asics Gel Kayano 14"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4 md:p-5 flex flex-col grow">
                                <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1.5 tracking-wide uppercase">ASICS</p>
                                <h3 class="text-sm sm:text-base md:text-lg font-semibold text-gray-900 mb-2 sm:mb-3 line-clamp-2 leading-snug min-h-[2.5rem] sm:min-h-[3rem] md:min-h-[3.5rem]">
                                    GEL-KAYANO 14 Sneakers Shoes - White
                                </h3>
                                <div class="mt-auto">
                                    <div class="flex items-baseline gap-2 mb-1.5 sm:mb-2">
                                        <span class="text-lg sm:text-xl md:text-2xl font-bold text-gray-900">Rp. 2.399.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 11 - Compass Retrogade Low (UPDATED) -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-xl hover:border-blue-200 transition-all duration-300 group h-full flex flex-col">
                            <div class="relative bg-gray-50 overflow-hidden aspect-square">
                        <button @click="addToCart({ id: 11, name: 'Compass Retrogade Low', brand: 'COMPASS', price: 500000, image: '{{ asset('images/products/compass-retrogadelow-bw.webp') }}' })"></button>   
                                <img src="{{ asset('images/products/compass-retrogadelow-bw.webp') }}"
                                    alt="Compass Retrogade Low"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4 md:p-5 flex flex-col grow">
                                <p class="text-xs sm:text-sm font-semibold text-gray-500 mb-1.5 tracking-wide uppercase">COMPASS</p>
                                <h3 class="text-sm sm:text-base md:text-lg font-semibold text-gray-900 mb-2 sm:mb-3 line-clamp-2 leading-snug min-h-[2.5rem] sm:min-h-[3rem] md:min-h-[3.5rem]">
                                    Compass Retrogade Low
                                </h3>
                                <div class="mt-auto">
                                    <div class="flex items-baseline gap-2 mb-1.5 sm:mb-2">
                                        <span class="text-lg sm:text-xl md:text-2xl font-bold text-red-600">Rp. 500.000</span>
                                    </div>
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="text-xs sm:text-sm text-gray-400 line-through">Rp. 538.000</span>
                                        <span class="text-xs sm:text-sm font-semibold text-red-600 bg-red-50 px-2 py-0.5 sm:py-1 rounded-md">7% OFF</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Our Top Brands Section -->
    <section class="py-16" id="brands">
        <div class="container mx-auto px-6">
            <div class="mb-8 sm:mb-12">
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Shop Our Top Brands</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4 md:gap-6">
                <!-- Nike -->
                <a href="#" class="group relative overflow-hidden  shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="aspect-square bg-linear-to-br from-green-800 to-green-900 relative">
                        <img src="{{asset('images/nike.webp') }}"
                            alt="Nike"
                            class="w-full h-full transition-transform duration-300">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-white p-4">
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-lg text-gray-900">Nike</span>
                            <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Jordan -->
                <a href="#" class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="aspect-square bg-gradient-to-br from-red-600 to-red-800 relative">
                        <img src="{{asset('images/jordan.webp') }}"
                            alt="Jordan"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-white p-2.5 sm:p-4">
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-sm sm:text-base md:text-lg text-gray-900">Jordan</span>
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- New Balance -->
                <a href="#" class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="aspect-square bg-gradient-to-br from-teal-700 to-teal-900 relative">
                        <img src="{{asset('images/newbalance.webp') }}"
                            alt="New Balance"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-white p-2.5 sm:p-4">
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-sm sm:text-base md:text-lg text-gray-900">New Balance</span>
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- LCKR -->
                <a href="#" class="group relative overflow-hidden  shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="aspect-square bg-linear-to-br from-red-700 to-red-900 relative">
                        <img src="{{asset('images/compass.jpg') }}"
                            alt="LCKR"
                            class="w-full h-full transition-transform duration-300">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-white p-4">
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-lg text-gray-900">Compass</span>
                            <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Adidas -->
                <a href="#" class="group relative overflow-hidden  shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="aspect-square bg-linear-to-br from-red-600 to-red-800 relative">
                        <img src="{{asset('images/adidas-home.webp') }}"
                            alt="Adidas"
                            class="w-full h-full transition-transform duration-300">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-white p-4">
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-lg text-gray-900">Adidas</span>
                            <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Timberland -->
                <a href="#" class="group relative overflow-hidden  shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="aspect-square bg-linear-to-br from-teal-800 to-teal-950 relative">
                        <img src="{{asset('images/converse-home.jpg') }}"
                            alt="Timberland"
                            class="w-full h-full transition-transform duration-300">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-white p-4">
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-lg text-gray-900">Converse</span>
                            <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- UGG -->
                <a href="#" class="group relative overflow-hidden  shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="aspect-square bg-linear-to-br from-red-700 to-red-900 relative">
                        <img src="{{asset('images/hoka-home.jpg') }}"
                            alt="HOKA"
                            class="w-full h-full transition-transform duration-300">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-white p-4">
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-lg text-gray-900">HOKA</span>
                            <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Cozi -->
                <a href="#" class="group relative overflow-hidden  shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="aspect-square bg-linear-to-br from-teal-800 to-teal-950 relative">
                        <img src="{{asset('images/asics-home.jpg') }}"
                            alt="Asics"
                            class="w-full h-full transition-transform duration-300">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-white p-4">
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-lg text-gray-900">Asics</span>
                            <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- NEW: Customer Reviews Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-950 mb-3">What Our Customers Say</h2>
                <p class="text-gray-600 text-lg">Real reviews from real sneakerheads</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Review 1 -->
                <div class="bg-slate-50 rounded-2xl p-8 relative">
                    <div class="flex items-center gap-1 mb-4">
                        <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed">"Best sneaker store in Indonesia! Fast shipping, authentic products, and amazing customer service. I've ordered 5 pairs already!"</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-950 rounded-full flex items-center justify-center text-white font-bold">
                            JD
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">John Doe</h4>
                            <p class="text-sm text-gray-500">Jakarta</p>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="bg-slate-50 rounded-2xl p-8 relative">
                    <div class="flex items-center gap-1 mb-4">
                        <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed">"Great selection of brands and styles. Prices are competitive and they often have sales. Highly recommended for sneaker lovers!"</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-950 rounded-full flex items-center justify-center text-white font-bold">
                            SA
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Sarah Ahmad</h4>
                            <p class="text-sm text-gray-500">Surabaya</p>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="bg-slate-50 rounded-2xl p-8 relative">
                    <div class="flex items-center gap-1 mb-4">
                        <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed">"Finally found a reliable sneaker store online. All products are genuine and packaging is perfect. Will definitely order again!"</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-950 rounded-full flex items-center justify-center text-white font-bold">
                            BP
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Budi Pratama</h4>
                            <p class="text-sm text-gray-500">Bandung</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.261 2.913-.558.788-.306 1.459-.717 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.261-2.148-.558-2.913-.306-.789-.717-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
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

    <!--Fungsionalitas Keranjang -->
    <script src="{{ asset('js/cart.js') }}"></script>

    <style>
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fade-in 0.3s ease-out;
        }
    </style>
    <script src="{{ asset('resources/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

</body>

</html>