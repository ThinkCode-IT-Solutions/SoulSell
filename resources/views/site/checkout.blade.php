<x-layouts.site-layout>
    <!-- Checkout Page -->
    <section class="pt-32 pb-24 bg-light min-h-screen">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h1 class="text-3xl lg:text-4xl font-bold tracking-tight mb-12">Checkout</h1>

            <div class="grid lg:grid-cols-3 gap-12">

                <!-- Checkout Form -->
                <div class="lg:col-span-2">
                    <form class="space-y-8">

                        <!-- Contact Information -->
                        <div class="bg-white border border-gray-200 p-8">
                            <h2 class="text-lg font-semibold mb-6">Contact Information</h2>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium mb-2">Email</label>
                                    <input type="email" class="w-full border border-gray-200 px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors" placeholder="your@email.com">
                                </div>
                            </div>
                        </div>

                        <!-- Shipping Address -->
                        <div class="bg-white border border-gray-200 p-8">
                            <h2 class="text-lg font-semibold mb-6">Shipping Address</h2>
                            <div class="space-y-4">
                                <div class="grid md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium mb-2">First Name</label>
                                        <input type="text" class="w-full border border-gray-200 px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium mb-2">Last Name</label>
                                        <input type="text" class="w-full border border-gray-200 px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2">Address</label>
                                    <input type="text" class="w-full border border-gray-200 px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors">
                                </div>
                                <div class="grid md:grid-cols-3 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium mb-2">City</label>
                                        <input type="text" class="w-full border border-gray-200 px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium mb-2">State</label>
                                        <input type="text" class="w-full border border-gray-200 px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium mb-2">ZIP Code</label>
                                        <input type="text" class="w-full border border-gray-200 px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2">Phone</label>
                                    <input type="tel" class="w-full border border-gray-200 px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors">
                                </div>
                            </div>
                        </div>

                        <!-- Payment Method -->
                        <div class="bg-white border border-gray-200 p-8">
                            <h2 class="text-lg font-semibold mb-6">Payment Method</h2>
                            <div class="space-y-4">
                                <label class="flex items-center space-x-3 cursor-pointer border border-gray-200 p-4 hover:border-accent transition-colors">
                                    <input type="radio" name="payment" checked class="w-4 h-4">
                                    <span class="text-sm font-medium">Credit Card</span>
                                </label>
                                <label class="flex items-center space-x-3 cursor-pointer border border-gray-200 p-4 hover:border-accent transition-colors">
                                    <input type="radio" name="payment" class="w-4 h-4">
                                    <span class="text-sm font-medium">PayPal</span>
                                </label>
                            </div>

                            <div class="mt-6 space-y-4">
                                <div>
                                    <label class="block text-sm font-medium mb-2">Card Number</label>
                                    <input type="text" class="w-full border border-gray-200 px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors" placeholder="1234 5678 9012 3456">
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium mb-2">Expiry Date</label>
                                        <input type="text" class="w-full border border-gray-200 px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors" placeholder="MM/YY">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium mb-2">CVV</label>
                                        <input type="text" class="w-full border border-gray-200 px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors" placeholder="123">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

                <!-- Order Summary -->
                <div class="lg:col-span-1">
                    <div class="bg-white border border-gray-200 p-8 sticky top-32">
                        <h2 class="text-lg font-semibold mb-6">Order Summary</h2>

                        <!-- Order Items -->
                        <div class="space-y-4 mb-6 pb-6 border-b border-gray-200">
                            @for($i = 0; $i < 2; $i++)
                            <div class="flex gap-4">
                                <div class="w-16 h-16 bg-light flex-shrink-0"></div>
                                <div class="flex-1">
                                    <p class="text-sm font-medium mb-1">Dell XPS 15</p>
                                    <p class="text-xs text-muted">Qty: 1</p>
                                </div>
                                <p class="text-sm font-semibold">$1,299</p>
                            </div>
                            @endfor
                        </div>

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
                        </div>
                        <a href="{{ route("thankyou") }}">
                        <button type="submit" class="w-full bg-primary text-white py-4 text-sm font-medium hover:bg-secondary transition-colors">
                            Place Order
                        </button>

                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layouts.site-layout>
