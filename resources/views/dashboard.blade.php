<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="flex h-screen">
        <aside class="w-64 bg-blue-950 text-white">
            <div class="p-6">
                <h2 class="text-2xl font-bold">MySneakers</h2>
                <p class="text-sm text-gray-300">Admin Panel</p>
            </div>
            <nav class="mt-6">
                <a href="#" class="block py-3 px-6 bg-blue-900 border-l-4 border-white">Dashboard</a>
                <a href="#" class="block py-3 px-6 hover:bg-blue-900 transition">Products</a>
                <a href="#" class="block py-3 px-6 hover:bg-blue-900 transition">Orders</a>
                <a href="#" class="block py-3 px-6 hover:bg-blue-900 transition">Customers</a>
                <a href="#" class="block py-3 px-6 hover:bg-blue-900 transition">Categories</a>
                <a href="#" class="block py-3 px-6 hover:bg-blue-900 transition">Settings</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <!-- Header -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between p-6">
                    <h1 class="text-3xl font-bold text-blue-950">Dashboard</h1>
                    <div class="flex items-center gap-4">
                        <button class="px-4 py-2 bg-blue-950 text-white rounded-lg hover:bg-blue-900">Logout</button>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <main class="p-6">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Total Products</p>
                                <h3 class="text-3xl font-bold text-blue-950">245</h3>
                            </div>
                            <div class="bg-blue-100 p-3 rounded-full">
                                <svg class="w-8 h-8 text-blue-950" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Total Orders</p>
                                <h3 class="text-3xl font-bold text-green-600">1,234</h3>
                            </div>
                            <div class="bg-green-100 p-3 rounded-full">
                                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Total Customers</p>
                                <h3 class="text-3xl font-bold text-purple-600">856</h3>
                            </div>
                            <div class="bg-purple-100 p-3 rounded-full">
                                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Total Revenue</p>
                                <h3 class="text-3xl font-bold text-yellow-600">$52,340</h3>
                            </div>
                            <div class="bg-yellow-100 p-3 rounded-full">
                                <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Orders Table -->
                <div class="bg-white rounded-lg shadow">
                    <div class="p-6 border-b">
                        <h2 class="text-xl font-bold text-blue-950">Recent Orders</h2>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Order ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Customer</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Product</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Amount</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4">#ORD-001</td>
                                    <td class="px-6 py-4">John Doe</td>
                                    <td class="px-6 py-4">Nike Air Max</td>
                                    <td class="px-6 py-4">$150</td>
                                    <td class="px-6 py-4"><span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">Completed</span></td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4">#ORD-002</td>
                                    <td class="px-6 py-4">Jane Smith</td>
                                    <td class="px-6 py-4">Adidas Ultraboost</td>
                                    <td class="px-6 py-4">$180</td>
                                    <td class="px-6 py-4"><span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm">Pending</span></td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4">#ORD-003</td>
                                    <td class="px-6 py-4">Mike Johnson</td>
                                    <td class="px-6 py-4">Puma RS-X</td>
                                    <td class="px-6 py-4">$120</td>
                                    <td class="px-6 py-4"><span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Processing</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>