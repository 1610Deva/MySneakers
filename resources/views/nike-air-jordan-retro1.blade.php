<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Air Force - MySneakers</title>
    <link rel="shortcut icon" href="{{ asset('images/logo-sm1.jpg') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
</head>

<body class="bg-slate-50" style="font-family: 'DM Sans', sans-serif;">
    
    <!-- Top Banner -->
    <div class="bg-blue-950 text-white py-2.5">
        <div class="container mx-auto px-6">
            <p class="text-sm font-medium text-center">
                ✨ Free Shipping on Orders Over Rp 500.000
                <a href="#" class="underline ml-2 hover:text-gray-200">Shop Now</a>
            </p>
        </div>
    </div>

    <!-- Main Navbar -->
    @include('layouts.navbar')
        <!-- Logo & Search Section -->
        <div class=" border-b border-gray-200">
            <div class="container mx-auto px-6 py-4">
                <div class="flex items-center justify-between gap-8">
                    <!-- Logo -->
                    <div class="flex items-center gap-2 shrink-0">
                        <a href="{{ url('/') }}"><img src="{{ asset('images/logo-sm.jpg') }}" alt="MySneakers Logo" class="w-auto h-12" /></a>
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
                        <button class="hidden lg:flex items-center gap-2 px-5 py-2.5 bg-blue-950 text-white rounded-lg hover:bg-blue-900 transition font-medium">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>Sign In</span>
                        </button>

                        <!-- Cart Button -->
                        <button class="relative text-gray-700 hover:text-blue-950 transition" command="show-modal" commandfor="drawer">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            <span class="absolute -top-2 -right-2 bg-red-600 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">3</span>
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
                        </div>

                        <!-- Women's Mega Menu -->
                        <div class="relative group">
                            <a href="#" class="text-gray-900 font-semibold hover:text-blue-950 transition">Women's</a>
                        </div>

                        <div class="relative group">
                            <a href="#" class="text-gray-900 font-semibold hover:text-blue-950 transition">Kid's</a>
                        </div>

                        <a href="#" class="text-red-600 font-semibold hover:text-red-700 transition">Sale</a>
                        <span class="text-gray-300">|</span>

                        <!-- Brands Mega Menu - FIXED -->
                        <div class="relative group">
                            <a href="#" class="text-gray-700 hover:text-blue-950 transition">Brands</a>
                            <!-- Fixed dropdown positioning -->
                            <div class="absolute left-1/2 -translate-x-1/2 top-full w-screen max-w-7xl invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-200 ease-in-out pt-2 z-50">
                                <div class="bg-white shadow-xl border border-gray-200 py-8 px-6 rounded-lg">
                                    <h3 class="text-xl font-bold mb-6 text-center text-gray-900">Shop by Brand</h3>
                                    <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                                        <!-- @foreach(['Nike','Adidas','Puma','New Balance','Jordan','Asics','Reebok','Converse','Vans','Under Armour','Skechers','Fila'] as $brand)
                                        <a href="#" class="border border-gray-200 rounded-lg p-4 hover:shadow-md hover:border-blue-950 transition flex items-center justify-center group/item">
                                            <span class="text-sm font-medium text-gray-700 group-hover/item:text-blue-950">{{ $brand }}</span>
                                        </a>
                                        @endforeach -->
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

                        <a href="#" class="text-gray-700 hover:text-blue-950 transition">Releases</a>
                        <a href="#" class="text-gray-700 hover:text-blue-950 transition">New Arrivals</a>
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
                <el-dialog-panel class="ml-auto block size-full max-w-md transform transition duration-500 ease-in-out data-closed:translate-x-full sm:duration-700">
                    <div class="flex h-full flex-col overflow-y-auto bg-white shadow-xl">
                        <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                            <div class="flex items-start justify-between">
                                <h2 id="drawer-title" class="text-lg font-medium text-gray-900">Shopping cart</h2>
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
                                    <ul role="list" class="-my-6 divide-y divide-gray-200">
                                        <li class="flex py-6">
                                            <div class="size-24 shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="size-full object-cover" />
                                            </div>

                                            <div class="ml-4 flex flex-1 flex-col">
                                                <div>
                                                    <div class="flex justify-between text-base font-medium text-gray-900">
                                                        <h3>
                                                            <a href="#">Throwback Hip Bag</a>
                                                        </h3>
                                                        <p class="ml-4">$90.00</p>
                                                    </div>
                                                    <p class="mt-1 text-sm text-gray-500">Salmon</p>
                                                </div>
                                                <div class="flex flex-1 items-end justify-between text-sm">
                                                    <p class="text-gray-500">Qty 1</p>

                                                    <div class="flex">
                                                        <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex py-6">
                                            <div class="size-24 shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/shopping-cart-page-04-product-02.jpg" alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch." class="size-full object-cover" />
                                            </div>

                                            <div class="ml-4 flex flex-1 flex-col">
                                                <div>
                                                    <div class="flex justify-between text-base font-medium text-gray-900">
                                                        <h3>
                                                            <a href="#">Medium Stuff Satchel</a>
                                                        </h3>
                                                        <p class="ml-4">$32.00</p>
                                                    </div>
                                                    <p class="mt-1 text-sm text-gray-500">Blue</p>
                                                </div>
                                                <div class="flex flex-1 items-end justify-between text-sm">
                                                    <p class="text-gray-500">Qty 1</p>

                                                    <div class="flex">
                                                        <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex py-6">
                                            <div class="size-24 shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/shopping-cart-page-04-product-03.jpg" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="size-full object-cover" />
                                            </div>

                                            <div class="ml-4 flex flex-1 flex-col">
                                                <div>
                                                    <div class="flex justify-between text-base font-medium text-gray-900">
                                                        <h3>
                                                            <a href="#">Zip Tote Basket</a>
                                                        </h3>
                                                        <p class="ml-4">$140.00</p>
                                                    </div>
                                                    <p class="mt-1 text-sm text-gray-500">White and black</p>
                                                </div>
                                                <div class="flex flex-1 items-end justify-between text-sm">
                                                    <p class="text-gray-500">Qty 1</p>

                                                    <div class="flex">
                                                        <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                            <div class="flex justify-between text-base font-medium text-gray-900">
                                <p>Subtotal</p>
                                <p>$262.00</p>
                            </div>
                            <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                            <div class="mt-6">
                                <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-xs hover:bg-indigo-700">Checkout</a>
                            </div>
                            <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                                <p>
                                    or
                                    <button type="button" command="close" commandfor="drawer" class="font-medium text-indigo-600 hover:text-indigo-500">
                                        Continue Shopping
                                        <span aria-hidden="true"> &rarr;</span>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </el-dialog-panel>
            </div>
        </dialog>
    </el-dialog>

    <!-- Product Detail Section -->
    <div class="container mx-auto px-6 py-12">
        <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                <a href="#" class="hover:text-blue-950">Nike</a>
                <span>/</span>
                <a href="#" class="hover:text-blue-950">Men's</a>
                <span>/</span>
                <span class="text-gray-900 font-medium">Nike</span>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
            
            <!-- Left: Product Images -->
            <div>
                <!-- Main Image -->
                <div class="bg-white rounded-2xl p-8 mb-6 border border-gray-200">
                    <img src="{{ asset('images/products/detail-product/jordan-aj-mid-front.webp') }}" alt="Nike Dunk Low" class="w-auto aspect-square object-contain" id="mainImage">
                </div>

                <!-- Thumbnail Gallery -->
                <div class="grid grid-cols-4 gap-4">
                    <button class="thumbnail-btn bg-white rounded-lg p-4 border-2 border-blue-950 hover:border-blue-900 transition" 
                            data-image="{{ asset('images/products/detail-product/jordan-aj-mid-front.webp') }}">
                        <img src="{{ asset('images/products/detail-product/jordan-aj-mid-front.webp') }}" alt="View 1" class="w-full aspect-square object-contain">
                    </button>
                    <button class="thumbnail-btn bg-white rounded-lg p-4 border-2 border-gray-200 hover:border-blue-950 transition" 
                            data-image="{{ asset('images/products/detail-product/jordan-aj-mid-side.webp') }}">
                        <img src="{{ asset('images/products/detail-product/jordan-aj-mid-side.webp') }}" alt="View 2" class="w-full aspect-square object-contain">
                    </button>
                    <button class="thumbnail-btn bg-white rounded-lg p-4 border-2 border-gray-200 hover:border-blue-950 transition" 
                            data-image="{{ asset('images/products/detail-product/jordan-aj-mid-top.webp') }}">
                        <img src="{{ asset('images/products/detail-product/jordan-aj-mid-top.webp') }}" alt="View 3" class="w-full aspect-square object-contain">
                    </button>
                    <button class="thumbnail-btn bg-white rounded-lg p-4 border-2 border-gray-200 hover:border-blue-950 transition" 
                            data-image="{{ asset('images/products/detail-product/jordan-aj-mid-back.webp') }}">
                        <img src="{{ asset('images/products/detail-product/jordan-aj-mid-back.webp') }}" alt="View 4" class="w-full aspect-square object-contain">
                    </button>
                </div>
            </div>

            <!-- Right: Product Info -->
            <div>
                <!-- Rating & Badge -->
                <div class="flex items-center gap-3 mb-4">
                    <div class="flex items-center gap-1">
                        <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <span class="text-lg font-bold text-gray-900">4.7</span>
                        <span class="text-gray-500">(227)</span>
                    </div>
                    <span class="bg-red-600 text-white px-3 py-1 rounded-full text-xs font-bold">HEMAT Rp.400.000</span>
                </div>

                <!-- Product Name -->
                <h1 class="text-4xl font-extrabold text-gray-900 mb-2">Nike Air Jordan 1 Retro Mid Mens Basketball Shoes</h1>
                <p class="text-gray-600 mb-1">Basketball Shoes>
                <a href="#" class="text-blue-950 font-semibold text-sm hover:underline mb-6 inline-block">Explore Nike</a>

                <!-- Price -->
                <div class="mb-6">
                    <div class="flex items-baseline gap-3">
                        <span class="text-4xl font-bold text-gray-900">Rp. 800.000</span>
                        <span class="text-2xl text-gray-400 line-through">Rp. 1.200.000</span>
                    </div>
                    <p class="text-green-600 font-semibold mt-1">33,33% off</p>
                </div>

                <!-- Size Selector -->
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-bold text-gray-900">Select a size</h3>
                        <a href="#" class="text-sm text-blue-950 font-semibold hover:underline">Size chart</a>
                    </div>
                    <div class="grid grid-cols-4 gap-3">
                        <button class="size-btn border-2 border-gray-200 rounded-lg py-3 px-4 font-semibold text-gray-700 hover:border-blue-950 transition" data-size="36">36</button>
                        <button class="size-btn border-2 border-gray-200 rounded-lg py-3 px-4 font-semibold text-gray-700 hover:border-blue-950 transition" data-size="37">37</button>
                        <button class="size-btn border-2 border-gray-200 rounded-lg py-3 px-4 font-semibold text-gray-700 hover:border-blue-950 transition" data-size="38">38</button>
                        <button class="size-btn border-2 border-gray-200 rounded-lg py-3 px-4 font-semibold text-gray-700 hover:border-blue-950 transition" data-size="39">39</button>
                        <button class="size-btn border-2 border-gray-200 rounded-lg py-3 px-4 font-semibold text-gray-700 hover:border-blue-950 transition" data-size="40">40</button>
                        <button class="size-btn border-2 border-gray-200 rounded-lg py-3 px-4 font-semibold text-gray-700 hover:border-blue-950 transition" data-size="41">41</button>
                        <button class="size-btn border-2 border-gray-200 rounded-lg py-3 px-4 font-semibold text-gray-700 hover:border-blue-950 transition" data-size="42">42</button>
                        <button class="size-btn border-2 border-gray-200 rounded-lg py-3 px-4 font-semibold text-gray-700 hover:border-blue-950 transition" data-size="43">43</button>
                    </div>
                </div>

                <!-- Add to Cart -->
                <button class="w-full bg-blue-950 text-white py-4 rounded-lg font-bold text-lg hover:bg-blue-900 transition-all transform hover:scale-105 shadow-lg mb-4">
                    <svg class="w-6 h-6 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 2.7A1 1 0 007.5 17h9a1 1 0 00.85-1.53L17 13M7 13V6a1 1 0 011-1h8a1 1 0 011 1v7" />
                    </svg>
                    ADD TO CART +
                </button>

                <form action="{{ route('checkout.process') }}" method="POST" class="mt-4">
                    @csrf
                    <!-- Data produk dari DB -->
                    <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                    <input type="hidden" name="product_name" value="{{ $product->nama_produk }}">
                    <input type="hidden" name="product_brand" value="{{ $product->merk_produk }}">
                    <input type="hidden" name="product_price" value="{{ (int)$product->harga }}">
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="size" id="selectedSizeInput" value="">
                    <input type="hidden" name="product_image" value="{{ asset('images/products/detail-product/nike-air-force1-front.png') }}">

                    <button type="submit" class="w-full border-2 border-gray-300 text-gray-900 py-4 rounded-lg font-bold text-lg hover:border-blue-950 hover:bg-slate-50 transition-all flex items-center justify-center gap-2">
                        Checkout Now !
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Tabs Section: Details, Reviews, Q&A -->
    <div class="bg-white border-y border-gray-200">
        <div class="container mx-auto px-6">
            <div class="flex gap-8 border-b border-gray-200">
                <button class="py-4 px-2 font-bold text-blue-950 border-b-2 border-blue-950" onclick="showTab('details')">
                    Product Details
                </button>
                <button class="py-4 px-2 font-semibold text-gray-600 hover:text-gray-900" onclick="showTab('reviews')">
                    Reviews (227)
                </button>
                <button class="py-4 px-2 font-semibold text-gray-600 hover:text-gray-900" onclick="showTab('qa')">
                    Q&A
                </button>
            </div>
        </div>
    </div>

    <!-- Tab Content -->
    <div class="container mx-auto px-6 py-12">
        
        <!-- Details Tab -->
        <div id="detailsTab">
            <div class="max-w-4xl">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Product Information</h2>
                
                <div class="grid md:grid-cols-2 gap-8 mb-8">
                    <div>
                        <h3 class="font-bold text-gray-900 mb-3">Description</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Nike Air Jordan Retro 1 menghadirkan sentuhan klasik dari model asli dengan bahan kulit premium dan detail jahitan yang presisi. Dilengkapi logo sayap ikonik pada pergelangan dan bantalan Air di tumit untuk kenyamanan sepanjang hari. Warna retro dan detail otentik membuatnya sempurna untuk gaya kasual yang berkelas.
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="font-bold text-gray-900 mb-3">Features</h3>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-green-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Leather and synthetic leather upper
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-green-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Foam midsole for lightweight cushioning
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-green-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Rubber outsole with pivot circle
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-green-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Padded collar for comfort
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-slate-50 rounded-lg p-6 border border-gray-200">
                    <h3 class="font-bold text-gray-900 mb-3">Specifications</h3>
                    <div class="grid grid-cols-2 gap-4 text-sm">
                        <div class="flex justify-between border-b border-gray-200 py-2">
                            <span class="text-gray-600">Style</span>
                            <span class="font-semibold text-gray-900">DD1503-101</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-200 py-2">
                            <span class="text-gray-600">Color</span>
                            <span class="font-semibold text-gray-900">White/Black</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-200 py-2">
                            <span class="text-gray-600">Country/Region</span>
                            <span class="font-semibold text-gray-900">Vietnam</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-200 py-2">
                            <span class="text-gray-600">Material</span>
                            <span class="font-semibold text-gray-900">Leather/Synthetic</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reviews Tab -->
        <div id="reviewsTab" class="hidden">
            <div class="max-w-4xl">
                <div class="flex items-start justify-between mb-8">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">Customer Reviews</h2>
                        <div class="flex items-center gap-3">
                            <div class="flex items-center gap-1">
                                <svg class="w-6 h-6 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                <span class="text-2xl font-bold text-gray-900">4.7</span>
                            </div>
                            <span class="text-gray-600">Based on 227 reviews</span>
                        </div>
                    </div>
                </div>

                <!-- Rating Distribution -->
                <div class="bg-slate-50 rounded-lg p-6 mb-8 border border-gray-200">
                    <div class="space-y-3">
                        <div class="flex items-center gap-4">
                            <span class="text-sm font-semibold w-8">5⭐</span>
                            <div class="flex-1 bg-gray-200 rounded-full h-3">
                                <div class="bg-yellow-500 h-3 rounded-full" style="width: 75%"></div>
                            </div>
                            <span class="text-sm text-gray-600 w-12">170</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="text-sm font-semibold w-8">4⭐</span>
                            <div class="flex-1 bg-gray-200 rounded-full h-3">
                                <div class="bg-yellow-500 h-3 rounded-full" style="width: 15%"></div>
                            </div>
                            <span class="text-sm text-gray-600 w-12">34</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="text-sm font-semibold w-8">3⭐</span>
                            <div class="flex-1 bg-gray-200 rounded-full h-3">
                                <div class="bg-yellow-500 h-3 rounded-full" style="width: 6%"></div>
                            </div>
                            <span class="text-sm text-gray-600 w-12">14</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="text-sm font-semibold w-8">2⭐</span>
                            <div class="flex-1 bg-gray-200 rounded-full h-3">
                                <div class="bg-yellow-500 h-3 rounded-full" style="width: 3%"></div>
                            </div>
                            <span class="text-sm text-gray-600 w-12">6</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="text-sm font-semibold w-8">1⭐</span>
                            <div class="flex-1 bg-gray-200 rounded-full h-3">
                                <div class="bg-yellow-500 h-3 rounded-full" style="width: 1%"></div>
                            </div>
                            <span class="text-sm text-gray-600 w-12">3</span>
                        </div>
                    </div>
                </div>

                <!-- Review List -->
                <div class="space-y-6">
                    <!-- Review 1 -->
                    <div class="border-b border-gray-200 pb-6">
                        <div class="flex items-start justify-between mb-3">
                            <div>
                                <div class="flex items-center gap-1 mb-2">
                                    <svg class="w-4 h-4 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                </div>
                                <h4 class="font-bold text-gray-900">Perfect fit and style!</h4>
                            </div>
                            <span class="text-sm text-gray-500">2 weeks ago</span>
                        </div>
                        <p class="text-gray-700 mb-3">These sneakers are amazing! Perfect fit, great quality, and they look even better in person. Highly recommend for anyone looking for classic style.</p>
                        <div class="flex items-center gap-4">
                            <span class="text-sm font-semibold text-gray-900">Michael R.</span>
                            <span class="text-sm text-gray-500">Verified Purchase</span>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="border-b border-gray-200 pb-6">
                        <div class="flex items-start justify-between mb-3">
                            <div>
                                <div class="flex items-center gap-1 mb-2">
                                    <svg class="w-4 h-4 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                </div>
                                <h4 class="font-bold text-gray-900">Great quality but runs small</h4>
                            </div>
                            <span class="text-sm text-gray-500">1 month ago</span>
                        </div>
                        <p class="text-gray-700 mb-3">Love the quality and design, but they run a bit small. I'd recommend ordering half a size up. Otherwise, perfect!</p>
                        <div class="flex items-center gap-4">
                            <span class="text-sm font-semibold text-gray-900">Sarah K.</span>
                            <span class="text-sm text-gray-500">Verified Purchase</span>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="pb-6">
                        <div class="flex items-start justify-between mb-3">
                            <div>
                                <div class="flex items-center gap-1 mb-2">
                                    <svg class="w-4 h-4 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                </div>
                                <h4 class="font-bold text-gray-900">Classic and comfortable!</h4>
                            </div>
                            <span class="text-sm text-gray-500">3 weeks ago</span>
                        </div>
                        <p class="text-gray-700 mb-3">Can't go wrong with these classic Dunks. Super comfortable for everyday wear and they match everything in my wardrobe.</p>
                        <div class="flex items-center gap-4">
                            <span class="text-sm font-semibold text-gray-900">James P.</span>
                            <span class="text-sm text-gray-500">Verified Purchase</span>
                        </div>
                    </div>
                </div>

                <button class="w-full mt-6 py-3 border-2 border-gray-300 text-gray-900 font-semibold rounded-lg hover:border-blue-950 hover:bg-slate-50 transition">
                    Load More Reviews
                </button>
            </div>
        </div>

        <!-- Q&A Tab -->
        <div id="qaTab" class="hidden">
            <div class="max-w-4xl">
                <div class="flex items-start justify-between mb-8">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">Questions & Answers</h2>
                        <p class="text-gray-600">Have a question? Get answers from our customers and team.</p>
                    </div>
                </div>

                <!-- Q&A List -->
                <div class="space-y-6">
                    <!-- Q&A 1 -->
                    <div class="bg-slate-50 rounded-lg p-6 border border-gray-200">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-10 h-10 bg-blue-950 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0">
                                Q
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-gray-900 mb-2">Do these run true to size?</h4>
                                <p class="text-sm text-gray-500">Asked by Alex M. • 1 week ago</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 ml-14">
                            <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0">
                                A
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-700 mb-2">Based on customer feedback, these tend to run slightly small. We recommend ordering half a size up for a more comfortable fit.</p>
                                <p class="text-sm text-gray-500">Answered by MySneakers Team • 1 week ago</p>
                            </div>
                        </div>
                    </div>

                    <!-- Q&A 2 -->
                    <div class="bg-slate-50 rounded-lg p-6 border border-gray-200">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-10 h-10 bg-blue-950 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0">
                                Q
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-gray-900 mb-2">Are these suitable for basketball?</h4>
                                <p class="text-sm text-gray-500">Asked by Jordan T. • 2 weeks ago</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 ml-14">
                            <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0">
                                A
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-700 mb-2">While the Nike Dunk Low has basketball heritage, this model is designed more for casual wear and lifestyle. For serious basketball performance, we recommend checking out our performance basketball collection.</p>
                                <p class="text-sm text-gray-500">Answered by MySneakers Team • 2 weeks ago</p>
                            </div>
                        </div>
                    </div>

                    <!-- Q&A 3 -->
                    <div class="bg-slate-50 rounded-lg p-6 border border-gray-200">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-10 h-10 bg-blue-950 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0">
                                Q
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-gray-900 mb-2">How do I clean these?</h4>
                                <p class="text-sm text-gray-500">Asked by Emma L. • 3 weeks ago</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 ml-14">
                            <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0">
                                A
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-700 mb-2">For leather and synthetic materials, use a soft brush to remove dirt, then wipe with a damp cloth. For stubborn stains, use a specialized sneaker cleaner. Avoid machine washing.</p>
                                <p class="text-sm text-gray-500">Answered by MySneakers Team • 3 weeks ago</p>
                            </div>
                        </div>
                    </div>
                </div>
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

    <script>
        // Image Gallery dengan Event Listener
        document.addEventListener('DOMContentLoaded', function() {
            const thumbnails = document.querySelectorAll('.thumbnail-btn');
            const mainImage = document.getElementById('mainImage');
            
            thumbnails.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Update main image
                    const newSrc = this.getAttribute('data-image');
                    mainImage.src = newSrc;
                    
                    // Remove active border dari semua thumbnail
                    thumbnails.forEach(thumb => {
                        thumb.classList.remove('border-blue-950');
                        thumb.classList.add('border-gray-200');
                    });
                    
                    // Add active border ke thumbnail yang diklik
                    this.classList.remove('border-gray-200');
                    this.classList.add('border-blue-950');
                });
            });

            // Size Selector dengan Active State
            const sizeButtons = document.querySelectorAll('.size-btn');
            
            sizeButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active state dari semua size buttons
                    sizeButtons.forEach(sizeBtn => {
                        sizeBtn.classList.remove('bg-blue-950', 'text-white', 'border-blue-950');
                        sizeBtn.classList.add('border-gray-200', 'text-gray-700');
                    });
                    
                    // Add active state ke button yang diklik
                    this.classList.remove('border-gray-200', 'text-gray-700');
                    this.classList.add('bg-blue-950', 'text-white', 'border-blue-950');
                    
                    // Optional: simpan size yang dipilih
                    const selectedSize = this.getAttribute('data-size');
                    console.log('Selected size:', selectedSize);
                });
            });
        });

        // Tab Functionality
        function showTab(tabName) {
            // Hide all tabs
            document.getElementById('detailsTab').classList.add('hidden');
            document.getElementById('reviewsTab').classList.add('hidden');
            document.getElementById('qaTab').classList.add('hidden');

            // Remove active state from all buttons
            const buttons = document.querySelectorAll('[onclick^="showTab"]');
            buttons.forEach(btn => {
                btn.classList.remove('text-blue-950', 'border-b-2', 'border-blue-950');
                btn.classList.add('text-gray-600');
            });

            // Show selected tab
            if (tabName === 'details') {
                document.getElementById('detailsTab').classList.remove('hidden');
                buttons[0].classList.add('text-blue-950', 'border-b-2', 'border-blue-950');
                buttons[0].classList.remove('text-gray-600');
            } else if (tabName === 'reviews') {
                document.getElementById('reviewsTab').classList.remove('hidden');
                buttons[1].classList.add('text-blue-950', 'border-b-2', 'border-blue-950');
                buttons[1].classList.remove('text-gray-600');
            } else if (tabName === 'qa') {
                document.getElementById('qaTab').classList.remove('hidden');
                buttons[2].classList.add('text-blue-950', 'border-b-2', 'border-blue-950');
                buttons[2].classList.remove('text-gray-600');
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

</body>

</html>