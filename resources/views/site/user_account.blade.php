<x-layouts.site-layout>
    <!-- User Account Page -->
    <section class="pt-32 pb-24 bg-light min-h-screen">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h1 class="text-3xl lg:text-4xl font-bold tracking-tight mb-12">My Account</h1>

            <div class="grid lg:grid-cols-4 gap-8">

                <!-- Sidebar Navigation -->
                <aside class="lg:col-span-1">
                    <nav class="bg-white border border-gray-200 divide-y divide-gray-200">
                        <a href="#" class="block px-6 py-4 text-sm font-medium bg-light">Dashboard</a>
                        <a href="#" class="block px-6 py-4 text-sm text-muted hover:text-primary transition-colors">Orders</a>
                        <a href="#" class="block px-6 py-4 text-sm text-muted hover:text-primary transition-colors">Wishlist</a>
                        <a href="#" class="block px-6 py-4 text-sm text-muted hover:text-primary transition-colors">Addresses</a>
                        <a href="#" class="block px-6 py-4 text-sm text-muted hover:text-primary transition-colors">Account Details</a>
                        <a href="#" class="block px-6 py-4 text-sm text-muted hover:text-primary transition-colors">Logout</a>
                    </nav>
                </aside>

                <!-- Main Content -->
                <div class="lg:col-span-3">

                    <!-- Welcome Section -->
                    <div class="bg-white border border-gray-200 p-8 mb-8">
                        <h2 class="text-2xl font-bold mb-2">Welcome back, {{ $user->name ?? 'John' }}!</h2>
                        <p class="text-muted">Manage your orders and account details.</p>
                    </div>

                    <!-- Quick Stats -->
                    <div class="grid md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-white border border-gray-200 p-6">
                            <p class="text-sm text-muted mb-2">Total Orders</p>
                            <p class="text-3xl font-bold">{{ $totalOrders ?? '12' }}</p>
                        </div>
                        <div class="bg-white border border-gray-200 p-6">
                            <p class="text-sm text-muted mb-2">Wishlist Items</p>
                            <p class="text-3xl font-bold">{{ $wishlistCount ?? '5' }}</p>
                        </div>
                        <div class="bg-white border border-gray-200 p-6">
                            <p class="text-sm text-muted mb-2">Saved Addresses</p>
                            <p class="text-3xl font-bold">{{ $addressCount ?? '2' }}</p>
                        </div>
                    </div>

                    <!-- Recent Orders -->
                    <div class="bg-white border border-gray-200 p-8">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-lg font-semibold">Recent Orders</h2>
                            <a href="#" class="text-sm text-accent hover:underline">View All</a>
                        </div>

                        <div class="space-y-6">
                            @forelse($recentOrders ?? [] as $order)
                            <div class="border border-gray-200 p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <p class="text-sm text-muted mb-1">Order #{{ $order->order_number ?? '12345678' }}</p>
                                        <p class="text-xs text-muted">Placed on {{ $order->created_at ?? 'Jan 1, 2026' }}</p>
                                    </div>
                                    <span class="inline-block px-3 py-1 bg-green-100 text-green-800 text-xs font-medium">{{ $order->status ?? 'Delivered' }}</span>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-16 h-16 bg-light flex-shrink-0"></div>
                                    <div class="flex-1">
                                        <p class="font-medium mb-1">Dell XPS 15 9520</p>
                                        <p class="text-sm text-muted">+ 1 more item</p>
                                    </div>
                                    <p class="font-semibold">${{ $order->total ?? '2,857.80' }}</p>
                                </div>
                            </div>
                            @empty
                            @for($i = 0; $i < 3; $i++)
                            <div class="border border-gray-200 p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <p class="text-sm text-muted mb-1">Order #1234567{{ $i }}</p>
                                        <p class="text-xs text-muted">Placed on Jan {{ $i + 1 }}, 2026</p>
                                    </div>
                                    <span class="inline-block px-3 py-1 bg-green-100 text-green-800 text-xs font-medium">Delivered</span>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-16 h-16 bg-light flex-shrink-0"></div>
                                    <div class="flex-1">
                                        <p class="font-medium mb-1">Dell XPS 15 9520</p>
                                        <p class="text-sm text-muted">+ 1 more item</p>
                                    </div>
                                    <p class="font-semibold">$2,857.80</p>
                                </div>
                            </div>
                            @endfor
                            @endforelse
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
</x-layouts.site-layout>
