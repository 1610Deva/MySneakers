<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySneakers - Best Solution For Seeking Sneakers</title>
    <link rel="shortcut icon" href="{{ asset('images/logo-sm1.jpg') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
                        <a href="{{ url('/home') }}"><img src="{{ asset('images/logo-sm.jpg') }}" alt="MySneakers Logo" class="w-auto h-12" /></a>
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

  <div class="py-6 px-6">
    <p>Home</p>
    <h1 class="font-bold text-4xl mt-4 mb-8">Men's Shoes</h1>

       <!-- PRODUCT GRID -->
<div class="grid grid-cols-4 col-span-7 gap-6 mx-5 mb-10">


    <!-- CARD 1 -->
    <div class="w-full bg-gray-100 border border-transparent hover:border-black rounded-xl shadow-sm overflow-hidden hover:shadow-xl transition relative">
    <span class="absolute top-2 left-2 bg-black text-white text-xs px-2 py-1 rounded">NEW</span>

    <a href="/nike-air-force1">
    <div class="relative">
        <img src="{{ asset('images/products/nike-airforce1-men.webp') }}" class="w-full h-48 object-cover">
        <button class="absolute bottom-2 right-2 text-gray-500 hover:text-black">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 3h6m0 0v6m0-6l-8 8m-4-2H3m0 0V3m0 6l8-8" />
            </svg>
        </button>
    </div>

    <div class="p-4 space-y-1">
        <h3 class="font-semibold text-lg">Nike Air Force 1 Men's Shoes</h3>
        <p class="text-sm text-gray-600">Men's</p>
        <p class="text-sm text-gray-600">White </p>
        <p class="font-semibold mt-2 text-red-600">Rp. 1.600.000</p>
        <p class="text-sm mt-2 text-gray-900"><s>Rp. 1.800.000</s></p>
    
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

