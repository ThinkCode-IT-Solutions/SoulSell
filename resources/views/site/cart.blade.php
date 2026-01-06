<x-layouts.site-layout>
    <!-- Cart Page -->
    <section class="pt-32 pb-24 bg-light min-h-screen">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h1 class="text-3xl lg:text-4xl font-bold tracking-tight mb-12">Shopping Cart</h1>

            <div class="grid lg:grid-cols-3 gap-12">

                <!-- Cart Items -->
                <div class="lg:col-span-2 space-y-6">
                    @forelse($cartItems ?? [] as $item)
                    <!-- Cart Item -->
                    <div class="bg-white border border-gray-200 p-6">
                        <div class="flex gap-6">
                            <!-- Product Image -->
                            <div class="w-24 h-24 bg-light flex items-center justify-center flex-shrink-0">
                                <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>

                            <!-- Product Info -->
                            <div class="flex-1">
                                <div class="flex justify-between mb-2">
                                    <div>
                                        <p class="text-xs text-muted mb-1">{{ $item->product->brand ?? 'Dell' }}</p>
                                        <h3 class="font-semibold">{{ $item->product->name ?? 'XPS 15 9520' }}</h3>
                                    </div>
                                    <button class="text-muted hover:text-primary transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    </button>
                                </div>
                                <p class="text-sm text-muted mb-4">16GB RAM • 512GB SSD</p>
                                <div class="flex items-center justify-between">
                                    <!-- Quantity -->
                                    <div class="flex items-center border border-gray-200">
                                        <button class="px-3 py-1 hover:bg-light transition-colors text-sm">-</button>
                                        <span class="px-4 py-1 border-x border-gray-200 text-sm">{{ $item->quantity ?? 1 }}</span>
                                        <button class="px-3 py-1 hover:bg-light transition-colors text-sm">+</button>
                                    </div>
                                    <!-- Price -->
                                    <div class="text-lg font-semibold">${{ $item->product->selling_price ?? '1,299' }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <!-- Empty Cart -->
                    <div class="bg-white border border-gray-200 p-12 text-center">
                        <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Your cart is empty</h3>
                        <p class="text-muted mb-6">Add products to get started</p>
                        <a href="/shop" class="inline-flex items-center px-6 py-3 bg-primary text-white text-sm font-medium hover:bg-secondary transition-colors">
                            Browse Products
                        </a>
                    </div>
                    @endforelse
                </div>

                <!-- Order Summary -->
                <div class="lg:col-span-1">
                    <div class="bg-white border border-gray-200 p-8 sticky top-32">
                        <h2 class="text-lg font-semibold mb-6">Order Summary</h2>

                        <div class="space-y-4 mb-6">
                            <div class="flex justify-between text-sm">
                                <span class="text-muted">Subtotal</span>
                                <span class="font-medium">$2,598.00</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-muted">Shipping</span>
                                <span class="font-medium">Free</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-muted">Tax</span>
                                <span class="font-medium">$259.80</span>
                            </div>
                        </div>

                        <div class="pt-6 border-t border-gray-200 mb-6">
                            <div class="flex justify-between mb-1">
                                <span class="font-semibold">Total</span>
                                <span class="text-2xl font-bold">$2,857.80</span>
                            </div>
                            <p class="text-xs text-muted">Including taxes</p>
                        </div>
                        <a href="{{ route("checkout") }}">
                        <button class="w-full bg-primary text-white py-4 text-sm font-medium hover:bg-secondary transition-colors mb-3">
                            Proceed to Checkout
                        </button>
                        </a>
                        <a href="/shop" class="block text-center text-sm text-muted hover:text-primary transition-colors">
                            Continue Shopping
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layouts.site-layout>
