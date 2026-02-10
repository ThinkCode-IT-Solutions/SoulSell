<x-dashboard-layout.main>
    <main class="flex-1 p-6 overflow-y-auto">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex justify-between items-start mb-6">
                <div>
                    <div class="flex items-center space-x-4 mb-2">
                        <a href="{{ route('products.index') }}" class="text-blue-600 hover:text-blue-900 text-sm">← Products</a>
                    </div>
                    <h1 class="text-3xl font-bold text-gray-900">{{ $product->name }}</h1>
                    <p class="text-gray-600 mt-2">{{ $product->brand }} - {{ $product->model }}</p>
                </div>
                <div class="flex space-x-3">
                    <a href="{{ route('products.edit', $product) }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Edit
                    </a>
                    
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Main Content - Left -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Product Images -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="aspect-square bg-gray-100 flex items-center justify-center">
                        @if($product->images && $product->images->first())
                            <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                        @else
                            <svg class="w-32 h-32 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        @endif
                    </div>

                    @if($product->images && $product->images->count() > 1)
                        <div class="px-6 py-4 border-t border-gray-200">
                            <div class="grid grid-cols-5 gap-2">
                                @foreach($product->images as $image)
                                    <img src="{{ asset('storage/' . $image->image_path) }}" alt="Product" class="w-full h-16 object-cover rounded cursor-pointer hover:opacity-75">
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <!-- General Information -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-6">General Information</h2>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Brand</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->brand }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Model</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->model }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Year</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->year }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Category</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->category_id ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <p class="text-xs text-gray-500 uppercase tracking-wide mb-2">Description</p>
                        <p class="text-sm text-gray-600">{{ $product->description }}</p>
                    </div>
                </div>

                <!-- Pricing Information -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-6">Pricing Information</h2>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Current Price</span>
                            <span class="text-2xl font-bold text-gray-900">${{ number_format($product->selling_price, 2) }}</span>
                        </div>
                        @if($product->old_selling_price)
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">Original Price</span>
                                <span class="text-lg text-gray-500 line-through">${{ number_format($product->old_selling_price, 2) }}</span>
                            </div>
                            <div class="flex justify-between items-center bg-green-50 p-3 rounded-lg">
                                <span class="text-sm font-medium text-green-700">Discount</span>
                                <span class="text-lg font-bold text-green-700">{{ round((($product->old_selling_price - $product->selling_price) / $product->old_selling_price) * 100) }}%</span>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Display Specifications -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-6">Display Specifications</h2>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Screen Size</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->display_size }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Display Type</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->display_type }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Resolution</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->display_resolution }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Touchscreen</p>
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full {{ $product->touch_capable ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                {{ $product->touch_capable ? 'Yes' : 'No' }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Hardware Specifications -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-6">Hardware Specifications</h2>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Processor</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->processor }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Generation</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->generation }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">RAM</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->ram }} GB</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Storage</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->storage }} GB</p>
                        </div>
                    </div>
                </div>

                <!-- Battery Specifications -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-6">Battery Specifications</h2>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Capacity</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->battery_capacity }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Timing</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->battery_timing }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Charger Power</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->charger_power }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Charging Type</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->charging_type }}</p>
                        </div>
                    </div>
                </div>

                <!-- Physical Specifications -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-6">Physical Specifications</h2>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Color</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->color }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Build Material</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->build_material }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Weight</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->weight }} kg</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Sidebar - Right -->
            <div class="space-y-6">

                <!-- Status Card -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Status</h3>
                    <span class="px-4 py-2 inline-flex text-sm leading-5 font-semibold rounded-full {{ $product->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                        {{ $product->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </div>

                <!-- Product Stats -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Product Stats</h3>
                    <div class="space-y-4">
                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Total Orders</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $product->orders()->count() }}</p>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Created</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->created_at->format('F d, Y') }}</p>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <p class="text-xs text-gray-500 uppercase tracking-wide">Last Updated</p>
                            <p class="text-sm font-medium text-gray-900">{{ $product->updated_at->format('F d, Y \a\t g:i A') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h3>
                    <div class="space-y-3">
                        <a href="{{ route('products.edit', $product) }}" class="w-full px-4 py-2 text-center bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors block font-medium text-sm">
                            Edit Product
                        </a>
                        <button class="w-full px-4 py-2 bg-gray-100 text-gray-900 rounded-lg hover:bg-gray-200 transition-colors font-medium text-sm">
                            View Orders
                        </button>

                    </div>
                </div>

            </div>
        </div>
    </main>
</x-dashboard-layout.main>
