<x-dashboard-layout.main>
    <main class="flex-1 p-6 overflow-y-auto">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex justify-between items-start mb-6">
                <div>
                    <div class="flex items-center space-x-4 mb-2">
                        <a href="{{ route('orders.index') }}" class="text-blue-600 hover:text-blue-900 text-sm">← Orders</a>
                    </div>
                    <h1 class="text-3xl font-bold text-gray-900">Order #{{ $order->id }}</h1>
                    <p class="text-gray-600 mt-2">Placed on {{ $order->created_at->format('F d, Y \a\t g:i A') }}</p>
                </div>
                <div class="flex space-x-3">
                    <button class="inline-flex items-center px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4">
                        </svg>
                        Download
                    </button>
                    <button class="inline-flex items-center px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 00.934.684l2.202.176a1 1 0 00.934-.684h3.28a2 2 0 012 2v2a1 1 0 01-1 1H4a1 1 0 01-1-1V5zM3 15a2 2 0 012-2h3.28a1 1 0 00.934.684l2.202.176a1 1 0 00.934-.684h3.28a2 2 0 012 2v2a1 1 0 01-1 1H4a1 1 0 01-1-1v-2z"></path>
                        </svg>
                        Print
                    </button>
                    <button class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Edit
                    </button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Main Content - Left -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Status Card -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-lg font-semibold text-gray-900">Order Status</h2>
                        <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option selected>Pending</option>
                            <option>Processing</option>
                            <option>Shipped</option>
                            <option >Delivered</option>
                            <option>Cancelled</option>
                        </select>
                    </div>

                    <!-- Status Timeline -->
                    <div class="space-y-6">
                        <!-- Step 1 -->
                        <div class="flex">
                            <div class="flex flex-col items-center mr-4">
                                <div class="flex items-center justify-center h-8 w-8 rounded-full bg-green-100 border-2 border-green-500">
                                    <svg class="h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="w-1 h-12 bg-green-200 mt-2"></div>
                            </div>
                            <div class="pt-1">
                                <h4 class="font-semibold text-gray-900">Order Placed</h4>
                                <p class="text-sm text-gray-600">{{ $order->created_at->format('F d, Y \a\t g:i A') }}</p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        {{-- <div class="flex">
                            <div class="flex flex-col items-center mr-4">
                                <div class="flex items-center justify-center h-8 w-8 rounded-full bg-green-100 border-2 border-green-500">
                                    <svg class="h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="w-1 h-12 bg-green-200 mt-2"></div>
                            </div>
                            <div class="pt-1">
                                <h4 class="font-semibold text-gray-900">Payment Confirmed</h4>
                                <p class="text-sm text-gray-600">January 15, 2026 at 10:45 AM</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex">
                            <div class="flex flex-col items-center mr-4">
                                <div class="flex items-center justify-center h-8 w-8 rounded-full bg-green-100 border-2 border-green-500">
                                    <svg class="h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="w-1 h-12 bg-green-200 mt-2"></div>
                            </div>
                            <div class="pt-1">
                                <h4 class="font-semibold text-gray-900">Dispatched</h4>
                                <p class="text-sm text-gray-600">January 17, 2026 at 2:15 PM</p>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="flex">
                            <div class="flex flex-col items-center mr-4">
                                <div class="flex items-center justify-center h-8 w-8 rounded-full bg-green-100 border-2 border-green-500">
                                    <svg class="h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="pt-1">
                                <h4 class="font-semibold text-gray-900">Delivered</h4>
                                <p class="text-sm text-gray-600">January 19, 2026 at 5:30 PM</p>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <!-- Order Items -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-lg font-semibold text-gray-900">Order Items</h2>
                    </div>

                    <div class="divide-y divide-gray-200">
                        <!-- Item 1 -->
                        <div class="px-6 py-4 flex items-center space-x-6 hover:bg-gray-50 transition-colors">
                            <div class="w-24 h-24 bg-gray-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-sm font-semibold text-gray-900">{{ $order->product->name }}</h3>
                                <p class="text-xs text-gray-500 mt-1">{{ $order->product->description }}</p>
                                <p class="text-xs text-gray-500 mt-2">SKU: {{ $order->product->sku }}</p>
                            </div>
                            <div class="text-right">
                                <p class="text-sm font-semibold text-gray-900">Qty: <span class="font-normal">1</span></p>
                                <p class="text-sm font-semibold text-gray-900 mt-2">${{ number_format($order->product->selling_price, 2) }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Order Summary -->
                    <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                        <div class="space-y-3">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Subtotal</span>
                                <span class="text-gray-900 font-medium">${{ number_format($order->product->selling_price, 2) }}</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Shipping</span>
                                <span class="text-gray-900 font-medium">Free</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Tax</span>
                                <span class="text-gray-900 font-medium">${{ number_format($order->product->selling_price * 0.08, 2) }}</span>
                            </div>
                            <div class="border-t border-gray-200 pt-3 flex justify-between">
                                <span class="text-gray-900 font-semibold">Total</span>
                                <span class="text-gray-900 font-semibold text-lg">${{ number_format($order->product->selling_price * 1.08, 2) }}</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Sidebar - Right -->
            <div class="space-y-6">

                <!-- Customer Information -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Customer Information</h3>
                    <div class="space-y-4">
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Name</p>
                            <p class="text-sm font-medium text-gray-900">{{ $order->shipping_name }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Email</p>
                            <p class="text-sm font-medium text-gray-900">
                                <a href="mailto:{{ $order->shipping_email }}" class="text-blue-600 hover:text-blue-900">{{ $order->shipping_email }}</a>
                            </p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Phone</p>
                            <p class="text-sm font-medium text-gray-900">
                                <a href="tel:+1234567890" class="text-blue-600 hover:text-blue-900">{{ $order->shipping_phone }}</a>
                            </p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Customer Since</p>
                            <p class="text-sm font-medium text-gray-900">August 12, 2024</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Total Orders</p>
                            <p class="text-sm font-medium text-gray-900">5</p>
                        </div>
                    </div>
                    <button class="w-full mt-4 px-4 py-2 text-sm text-blue-600 hover:text-blue-900 font-medium border border-blue-300 rounded-lg hover:bg-blue-50 transition-colors">
                        View Customer Profile
                    </button>
                </div>

                <!-- Shipping Address -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Shipping Address</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>{{ $order->shipping_name }}</p>
                        <p>{{ $order->shipping_address }}</p>
                        <p>{{ $order->shipping_address2 }}</p>
                        <p>{{ $order->shipping_city }}, {{ $order->shipping_state }} {{ $order->shipping_zip }}</p>
                        <p>{{ $order->shipping_country }}</p>
                        <p>{{ $order->shipping_phone }}</p>
                    </div>
                    <button class="w-full mt-4 px-4 py-2 text-sm text-blue-600 hover:text-blue-900 font-medium border border-blue-300 rounded-lg hover:bg-blue-50 transition-colors">
                        Edit Address
                    </button>
                </div>

                <!-- Billing Address -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Billing Address</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>{{ $order->shipping_name }}</p>
                        <p>{{ $order->shipping_address }}</p>
                        <p>{{ $order->billing_address2 }}</p>
                        <p>{{ $order->shipping_city }}, {{ $order->shipping_state }} {{ $order->shipping_zip }}</p>
                        <p>{{ $order->shipping_country }}</p>
                    </div>
                    <button class="w-full mt-4 px-4 py-2 text-sm text-blue-600 hover:text-blue-900 font-medium border border-blue-300 rounded-lg hover:bg-blue-50 transition-colors">
                        Edit Address
                    </button>
                </div>

                <!-- Payment Information -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Payment Information</h3>
                    <div class="space-y-4">
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Method</p>
                            <p class="text-sm font-medium text-gray-900">Credit Card</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Card</p>
                            <p class="text-sm font-medium text-gray-900">Visa ending in 4242</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Status</p>
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Paid</span>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Paid On</p>
                            <p class="text-sm font-medium text-gray-900">January 15, 2026</p>
                        </div>
                    </div>
                </div>

                <!-- Tracking Information -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Tracking Information</h3>
                    <div class="space-y-4">
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Carrier</p>
                            <p class="text-sm font-medium text-gray-900">FedEx</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Tracking Number</p>
                            <p class="text-sm font-medium text-gray-900 font-mono">794631852741</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Estimated Delivery</p>
                            <p class="text-sm font-medium text-gray-900">January 19, 2026</p>
                        </div>
                    </div>
                    <a href="#" class="w-full mt-4 block text-center px-4 py-2 text-sm text-blue-600 hover:text-blue-900 font-medium border border-blue-300 rounded-lg hover:bg-blue-50 transition-colors">
                        Track Package
                    </a>
                </div>

            </div>
        </div>
    </main>
</x-dashboard-layout.main>
