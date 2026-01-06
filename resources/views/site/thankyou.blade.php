<x-layouts.site-layout>
    <!-- Thank You Page -->
    <section class="pt-32 pb-24 bg-light min-h-screen">
        <div class="max-w-3xl mx-auto px-6 lg:px-8">

            <!-- Success Message -->
            <div class="bg-white border border-gray-200 p-12 text-center mb-8">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold mb-4">Order Confirmed</h1>
                <p class="text-muted mb-8">Thank you for your purchase! Your order has been successfully placed.</p>

                <div class="bg-light border border-gray-200 p-6 inline-block mb-8">
                    <p class="text-sm text-muted mb-1">Order Number</p>
                    <p class="text-2xl font-bold">{{ $order->order_number ?? '#12345678' }}</p>
                </div>

                <p class="text-sm text-muted mb-8">
                    We've sent a confirmation email to <span class="font-medium text-primary">{{ $order->email ?? 'customer@email.com' }}</span>
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/orders/{{ $order->id ?? '1' }}" class="inline-flex items-center justify-center px-6 py-3 bg-primary text-white text-sm font-medium hover:bg-secondary transition-colors">
                        View Order Details
                    </a>
                    <a href="/shop" class="inline-flex items-center justify-center px-6 py-3 border border-gray-200 text-sm font-medium hover:border-primary transition-colors">
                        Continue Shopping
                    </a>
                </div>
            </div>

            <!-- Order Details -->
            <div class="bg-white border border-gray-200 p-8">
                <h2 class="text-lg font-semibold mb-6">Order Details</h2>

                <div class="space-y-6">
                    <!-- Items -->
                    <div class="space-y-4">
                        @for($i = 0; $i < 2; $i++)
                        <div class="flex gap-4 pb-4 border-b border-gray-200 last:border-0 last:pb-0">
                            <div class="w-20 h-20 bg-light flex-shrink-0"></div>
                            <div class="flex-1">
                                <h3 class="font-medium mb-1">Dell XPS 15 9520</h3>
                                <p class="text-sm text-muted mb-2">16GB RAM • 512GB SSD</p>
                                <p class="text-sm text-muted">Qty: 1</p>
                            </div>
                            <p class="font-semibold">$1,299.00</p>
                        </div>
                        @endfor
                    </div>

                    <!-- Summary -->
                    <div class="pt-6 border-t border-gray-200 space-y-3">
                        <div class="flex justify-between text-sm">
                            <span class="text-muted">Subtotal</span>
                            <span>$2,598.00</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-muted">Shipping</span>
                            <span>Free</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-muted">Tax</span>
                            <span>$259.80</span>
                        </div>
                        <div class="flex justify-between font-semibold text-lg pt-3 border-t border-gray-200">
                            <span>Total</span>
                            <span>$2,857.80</span>
                        </div>
                    </div>

                    <!-- Shipping Info -->
                    <div class="pt-6 border-t border-gray-200">
                        <h3 class="text-sm font-semibold mb-3">Shipping Address</h3>
                        <div class="text-sm text-muted space-y-1">
                            <p>{{ $order->shipping_name ?? 'John Doe' }}</p>
                            <p>{{ $order->shipping_address ?? '123 Main Street' }}</p>
                            <p>{{ $order->shipping_city ?? 'New York' }}, {{ $order->shipping_state ?? 'NY' }} {{ $order->shipping_zip ?? '10001' }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-layouts.site-layout>
