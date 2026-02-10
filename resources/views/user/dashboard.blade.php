<x-layouts.site-layout>
    <!-- User Dashboard -->
    <section class="pt-32 pb-24 bg-light min-h-screen">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="mb-12">
                <h1 class="text-3xl lg:text-4xl font-bold tracking-tight mb-2">My Account</h1>
                <p class="text-muted">Manage your orders, profile, and account settings</p>
            </div>

            <div class="grid lg:grid-cols-4 gap-8">

                <!-- Sidebar Navigation -->
                <aside class="lg:col-span-1">
                    <nav class="bg-white border border-gray-200 divide-y divide-gray-200 sticky top-24">
                        <a href="#overview" class="block px-6 py-4 text-sm font-medium bg-light border-l-4 border-accent">
                            Overview
                        </a>
                        <a href="#orders" class="block px-6 py-4 text-sm text-muted hover:text-primary hover:bg-gray-50 transition-colors">
                            My Orders
                        </a>
                        <a href="#profile" class="block px-6 py-4 text-sm text-muted hover:text-primary hover:bg-gray-50 transition-colors">
                            Profile Information
                        </a>
                        <a href="#addresses" class="block px-6 py-4 text-sm text-muted hover:text-primary hover:bg-gray-50 transition-colors">
                            Saved Addresses
                        </a>
                        <a href="#wishlist" class="block px-6 py-4 text-sm text-muted hover:text-primary hover:bg-gray-50 transition-colors">
                            Wishlist
                        </a>
                        <a href="#security" class="block px-6 py-4 text-sm text-muted hover:text-primary hover:bg-gray-50 transition-colors">
                            Security
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-6 py-4 text-sm text-red-600 hover:bg-red-50 transition-colors">
                                Logout
                            </button>
                        </form>
                    </nav>
                </aside>

                <!-- Main Content -->
                <div class="lg:col-span-3 space-y-8">
                    @if(Session::has("message"))
                    <div id="overview" class="bg-red-600 from-accent to-accent/80 text-white p-4 border border-gray-200">
                        <p class="text-white/90">
                            {{ Session::get("message") }}
                        </p>
                    </div>
                    @endif


                    <!-- Welcome Section -->
                    <div id="overview" class="bg-gradient-to-r from-accent to-accent/80 text-white p-8 border border-gray-200">
                        <h2 class="text-2xl font-bold mb-2">Welcome back, {{ auth()->user()->name ?? 'John Doe' }}!</h2>
                        <p class="text-white/90">Here's what's happening with your account today.</p>
                    </div>

                    <!-- Quick Stats -->
                    <div class="grid md:grid-cols-4 gap-6">
                        <div class="bg-white border border-gray-200 p-6 hover:shadow-lg transition-shadow">
                            <div class="flex items-center justify-between mb-2">
                                <p class="text-sm text-muted">Total Orders</p>
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                </svg>
                            </div>
                            <p class="text-3xl font-bold">{{ $totalOrders ?? '0' }}</p>
                        </div>
                        <div class="bg-white border border-gray-200 p-6 hover:shadow-lg transition-shadow">
                            <div class="flex items-center justify-between mb-2">
                                <p class="text-sm text-muted">Pending</p>
                                <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <p class="text-3xl font-bold">{{ $pendingOrders ?? '0' }}</p>
                        </div>
                        <div class="bg-white border border-gray-200 p-6 hover:shadow-lg transition-shadow">
                            <div class="flex items-center justify-between mb-2">
                                <p class="text-sm text-muted">Wishlist</p>
                                <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                            <p class="text-3xl font-bold">{{ $wishlistCount ?? '0' }}</p>
                        </div>
                        <div class="bg-white border border-gray-200 p-6 hover:shadow-lg transition-shadow">
                            <div class="flex items-center justify-between mb-2">
                                <p class="text-sm text-muted">Addresses</p>
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <p class="text-3xl font-bold">{{ $addressCount ?? '0' }}</p>
                        </div>
                    </div>

                    <!-- Recent Orders Section -->
                    <div id="orders" class="bg-white border border-gray-200 p-8">
                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <h2 class="text-xl font-bold mb-1">Recent Orders</h2>
                                <p class="text-sm text-muted">Track and manage your recent purchases</p>
                            </div>
                            <a href="#" class="text-sm text-accent hover:underline font-medium">View All Orders →</a>
                        </div>

                        <div class="space-y-4">
                            @forelse($orders as $order)
                            <div class="border border-gray-200 hover:border-accent transition-colors">
                                <div class="p-6">
                                    <div class="flex justify-between items-start mb-4">
                                        <div>
                                            <p class="font-semibold mb-1">Order #{{ $order->order_id  }}</p>
                                            <p class="text-sm text-muted">Placed on {{ $order->created_at->format("F d, Y")  }}</p>
                                        </div>
                                        <div class="text-right">
                                            <span class="inline-block px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold uppercase tracking-wide">
                                                {{ $order->order_status  }}
                                            </span>
                                            <p class="text-lg font-bold mt-2">${{ $order->total_price  }}</p>
                                        </div>
                                    </div>

                                    <div class="border-t border-gray-200 pt-4 mt-4">
                                        <div class="flex items-center gap-4">
                                            <div class="w-20 h-20 bg-light border border-gray-200 flex items-center justify-center flex-shrink-0">
                                                <img src="{{ $order->product->images->first()->image_url }}" alt="" class="w-100 h-100">
                                            </div>
                                            <div class="flex-1">
                                                <p class="font-medium mb-1">{{ $order->product->name }}</p>
                                                <p class="text-sm text-muted">1 item</p>
                                            </div>
                                            <div class="flex gap-2">

                                                <button class="px-4 py-2 bg-primary text-white text-sm font-medium hover:bg-primary/90 transition-colors">
                                                    View Details
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <!-- Sample Orders for UI -->
                            @for($i = 1; $i <= 3; $i++)
                            <div class="border border-gray-200 hover:border-accent transition-colors">
                                <div class="p-6">
                                    <div class="flex justify-between items-start mb-4">
                                        <div>
                                            <p class="font-semibold mb-1">Order #ORD-2026-{{ str_pad($i, 5, '0', STR_PAD_LEFT) }}</p>
                                            <p class="text-sm text-muted">Placed on January {{ 15 + $i }}, 2026</p>
                                        </div>
                                        <div class="text-right">
                                            <span class="inline-block px-3 py-1 {{ $i === 1 ? 'bg-green-100 text-green-800' : ($i === 2 ? 'bg-blue-100 text-blue-800' : 'bg-yellow-100 text-yellow-800') }} text-xs font-semibold uppercase tracking-wide">
                                                {{ $i === 1 ? 'Delivered' : ($i === 2 ? 'Shipped' : 'Processing') }}
                                            </span>
                                            <p class="text-lg font-bold mt-2">${{ number_format(rand(500, 3000), 2) }}</p>
                                        </div>
                                    </div>

                                    <div class="border-t border-gray-200 pt-4 mt-4">
                                        <div class="flex items-center gap-4">
                                            <div class="w-20 h-20 bg-light border border-gray-200 flex items-center justify-center flex-shrink-0">
                                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                                                </svg>
                                            </div>
                                            <div class="flex-1">
                                                <p class="font-medium mb-1">{{ ['Dell XPS 15', 'HP Spectre x360', 'Lenovo ThinkPad X1'][$i-1] }}</p>
                                                <p class="text-sm text-muted">{{ rand(1, 3) }} item(s)</p>
                                            </div>
                                            <div class="flex gap-2">
                                                <button class="px-4 py-2 border border-gray-300 text-sm font-medium hover:bg-gray-50 transition-colors">
                                                    Track Order
                                                </button>
                                                <button class="px-4 py-2 bg-primary text-white text-sm font-medium hover:bg-primary/90 transition-colors">
                                                    View Details
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endfor
                            @endforelse
                        </div>

    
                    </div>

                    <!-- Profile Information Section -->
                    <div id="profile" class="bg-white border border-gray-200 p-8">
                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <h2 class="text-xl font-bold mb-1">Profile Information</h2>
                                <p class="text-sm text-muted">Update your account details and email</p>
                            </div>
                            <button class="px-4 py-2 bg-accent text-white text-sm font-medium hover:bg-accent/90 transition-colors">
                                Edit Profile
                            </button>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="text-sm font-medium text-muted block mb-2">Full Name</label>
                                <p class="font-medium">{{ auth()->user()->name ?? 'John Doe' }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-muted block mb-2">Email Address</label>
                                <p class="font-medium">{{ auth()->user()->email ?? 'john.doe@example.com' }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-muted block mb-2">Phone Number</label>
                                <p class="font-medium">{{ auth()->user()->phone ?? '+1 (555) 123-4567' }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-muted block mb-2">Member Since</label>
                                <p class="font-medium">{{ auth()->user()->created_at?->format('F Y') ?? 'January 2026' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Saved Addresses Section -->
                    <div id="addresses" class="bg-white border border-gray-200 p-8">
                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <h2 class="text-xl font-bold mb-1">Saved Addresses</h2>
                                <p class="text-sm text-muted">Manage your shipping and billing addresses</p>
                            </div>
                            <button class="px-4 py-2 bg-accent text-white text-sm font-medium hover:bg-accent/90 transition-colors">
                                + Add New Address
                            </button>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            @forelse($addresses ?? [] as $address)
                            <div class="border border-gray-200 p-6 hover:border-accent transition-colors">
                                <div class="flex justify-between items-start mb-4">
                                    <span class="inline-block px-3 py-1 bg-accent/10 text-accent text-xs font-semibold uppercase">
                                        {{ $address->type ?? 'Home' }}
                                    </span>
                                    @if($address->is_default ?? false)
                                    <span class="text-xs text-green-600 font-medium">Default</span>
                                    @endif
                                </div>
                                <p class="font-medium mb-2">{{ $address->name ?? 'John Doe' }}</p>
                                <p class="text-sm text-muted mb-1">{{ $address->street ?? '123 Main Street' }}</p>
                                <p class="text-sm text-muted mb-1">{{ $address->city ?? 'New York' }}, {{ $address->state ?? 'NY' }} {{ $address->zip ?? '10001' }}</p>
                                <p class="text-sm text-muted mb-4">{{ $address->phone ?? '+1 (555) 123-4567' }}</p>
                                <div class="flex gap-2 pt-4 border-t border-gray-200">
                                    <button class="text-sm text-accent hover:underline">Edit</button>
                                    <span class="text-gray-300">|</span>
                                    <button class="text-sm text-red-600 hover:underline">Delete</button>
                                </div>
                            </div>
                            @empty
                            <!-- Sample Addresses for UI -->
                            <div class="border border-gray-200 p-6 hover:border-accent transition-colors">
                                <div class="flex justify-between items-start mb-4">
                                    <span class="inline-block px-3 py-1 bg-accent/10 text-accent text-xs font-semibold uppercase">
                                        Home
                                    </span>
                                    <span class="text-xs text-green-600 font-medium">Default</span>
                                </div>
                                <p class="font-medium mb-2">John Doe</p>
                                <p class="text-sm text-muted mb-1">123 Main Street, Apt 4B</p>
                                <p class="text-sm text-muted mb-1">New York, NY 10001</p>
                                <p class="text-sm text-muted mb-4">+1 (555) 123-4567</p>
                                <div class="flex gap-2 pt-4 border-t border-gray-200">
                                    <button class="text-sm text-accent hover:underline">Edit</button>
                                    <span class="text-gray-300">|</span>
                                    <button class="text-sm text-red-600 hover:underline">Delete</button>
                                </div>
                            </div>

                            <div class="border border-gray-200 p-6 hover:border-accent transition-colors">
                                <div class="flex justify-between items-start mb-4">
                                    <span class="inline-block px-3 py-1 bg-blue-100 text-blue-600 text-xs font-semibold uppercase">
                                        Office
                                    </span>
                                </div>
                                <p class="font-medium mb-2">John Doe</p>
                                <p class="text-sm text-muted mb-1">456 Business Ave, Suite 200</p>
                                <p class="text-sm text-muted mb-1">Manhattan, NY 10022</p>
                                <p class="text-sm text-muted mb-4">+1 (555) 987-6543</p>
                                <div class="flex gap-2 pt-4 border-t border-gray-200">
                                    <button class="text-sm text-accent hover:underline">Edit</button>
                                    <span class="text-gray-300">|</span>
                                    <button class="text-sm text-red-600 hover:underline">Delete</button>
                                </div>
                            </div>
                            @endforelse
                        </div>
                    </div>

                    <!-- Wishlist Section -->
                    <div id="wishlist" class="bg-white border border-gray-200 p-8">
                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <h2 class="text-xl font-bold mb-1">My Wishlist</h2>
                                <p class="text-sm text-muted">Items you've saved for later</p>
                            </div>
                            <a href="#" class="text-sm text-accent hover:underline font-medium">View All →</a>
                        </div>

                        <div class="grid md:grid-cols-3 gap-6">
                            @forelse($wishlistItems ?? [] as $item)
                            <div class="border border-gray-200 hover:border-accent transition-colors group">
                                <div class="aspect-square bg-light flex items-center justify-center relative">
                                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                                    </svg>
                                    <button class="absolute top-3 right-3 w-8 h-8 bg-white border border-gray-200 flex items-center justify-center hover:bg-red-50 transition-colors">
                                        <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-4">
                                    <p class="font-medium mb-2 line-clamp-2">{{ $item->product_name ?? 'Product Name' }}</p>
                                    <p class="text-lg font-bold text-accent mb-3">${{ $item->price ?? '1,299.99' }}</p>
                                    <button class="w-full py-2 bg-primary text-white text-sm font-medium hover:bg-primary/90 transition-colors">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                            @empty
                            <!-- Sample Wishlist Items -->
                            @foreach(['Dell XPS 15', 'HP Spectre x360', 'MacBook Pro 16"'] as $index => $productName)
                            <div class="border border-gray-200 hover:border-accent transition-colors group">
                                <div class="aspect-square bg-light flex items-center justify-center relative">
                                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                                    </svg>
                                    <button class="absolute top-3 right-3 w-8 h-8 bg-white border border-gray-200 flex items-center justify-center hover:bg-red-50 transition-colors">
                                        <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-4">
                                    <p class="font-medium mb-2">{{ $productName }}</p>
                                    <p class="text-lg font-bold text-accent mb-3">${{ number_format(rand(1000, 2500), 2) }}</p>
                                    <button class="w-full py-2 bg-primary text-white text-sm font-medium hover:bg-primary/90 transition-colors">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                            @endforeach
                            @endforelse
                        </div>
                    </div>

                    <!-- Security Section -->
                    <div id="security" class="bg-white border border-gray-200 p-8">
                        <div class="mb-6">
                            <h2 class="text-xl font-bold mb-1">Security Settings</h2>
                            <p class="text-sm text-muted">Manage your password and security preferences</p>
                        </div>

                        <div class="space-y-6">
                            <!-- Change Password -->
                            <div class="pb-6 border-b border-gray-200">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="font-semibold mb-1">Password</h3>
                                        <p class="text-sm text-muted">Last changed 3 months ago</p>
                                    </div>
                                    <button class="px-4 py-2 border border-gray-300 text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Password
                                    </button>
                                </div>
                            </div>

                            <!-- Two-Factor Authentication -->
                            <div class="pb-6 border-b border-gray-200">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="font-semibold mb-1">Two-Factor Authentication</h3>
                                        <p class="text-sm text-muted">Add an extra layer of security to your account</p>
                                    </div>
                                    <button class="px-4 py-2 bg-accent text-white text-sm font-medium hover:bg-accent/90 transition-colors">
                                        Enable 2FA
                                    </button>
                                </div>
                            </div>

                            <!-- Active Sessions -->
                            <div>
                                <h3 class="font-semibold mb-4">Active Sessions</h3>
                                <div class="space-y-4">
                                    <div class="flex items-start gap-4 p-4 bg-light">
                                        <div class="w-10 h-10 bg-accent/10 flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex items-center gap-2 mb-1">
                                                <p class="font-medium">Chrome on Windows</p>
                                                <span class="px-2 py-0.5 bg-green-100 text-green-800 text-xs font-semibold">Current</span>
                                            </div>
                                            <p class="text-sm text-muted">New York, United States • Active now</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-4 p-4 bg-gray-50">
                                        <div class="w-10 h-10 bg-gray-200 flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <p class="font-medium mb-1">Safari on iPhone</p>
                                            <p class="text-sm text-muted">New York, United States • 2 days ago</p>
                                        </div>
                                        <button class="text-sm text-red-600 hover:underline">Revoke</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
</x-layouts.site-layout>
