<x-dashboard-layout.main>
    <main class="flex-1 p-6 overflow-y-auto">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex items-center space-x-4 mb-2">
                <a href="{{ route('products.index') }}" class="text-blue-600 hover:text-blue-900 text-sm">← Back to Products</a>
            </div>
            <h1 class="text-3xl font-bold text-gray-900">Add New Product</h1>
            <p class="text-gray-600 mt-2">Create a new product with detailed specifications</p>
        </div>

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Main Content - Left -->
                <div class="lg:col-span-2 space-y-6">

                    <!-- General Information -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h2 class="text-lg font-semibold text-gray-900 mb-6">General Information</h2>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Product Name *</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror" required>
                                @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Brand *</label>
                                    <input type="text" name="brand" value="{{ old('brand') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('brand') border-red-500 @enderror" required>
                                    @error('brand') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Model *</label>
                                    <input type="text" name="model" value="{{ old('model') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('model') border-red-500 @enderror" required>
                                    @error('model') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Year *</label>
                                    <input type="text" name="year" value="{{ old('year') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('year') border-red-500 @enderror" required>
                                    @error('year') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Category *</label>
                                    <select name="category_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('category_id') border-red-500 @enderror" required>
                                        <option value="">Select Category</option>
                                    </select>
                                    @error('category_id') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Description *</label>
                                <textarea name="description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('description') border-red-500 @enderror" required>{{ old('description') }}</textarea>
                                @error('description') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Pricing -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h2 class="text-lg font-semibold text-gray-900 mb-6">Pricing</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Selling Price *</label>
                                <input type="number" name="selling_price" value="{{ old('selling_price') }}" step="0.01" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('selling_price') border-red-500 @enderror" required>
                                @error('selling_price') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Original Price (Optional)</label>
                                <input type="number" name="old_selling_price" value="{{ old('old_selling_price') }}" step="0.01" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('old_selling_price') border-red-500 @enderror">
                                @error('old_selling_price') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Display Specifications -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h2 class="text-lg font-semibold text-gray-900 mb-6">Display Specifications</h2>
                        <div class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Screen Size *</label>
                                    <input type="text" name="display_size" value="{{ old('display_size') }}" placeholder="e.g., 13.3&quot;" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('display_size') border-red-500 @enderror" required>
                                    @error('display_size') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Display Type *</label>
                                    <select name="display_type" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('display_type') border-red-500 @enderror" required>
                                        <option value="">Select Type</option>
                                        <option value="IPS">IPS</option>
                                        <option value="OLED">OLED</option>
                                        <option value="LED">LED</option>
                                        <option value="TN">TN</option>
                                    </select>
                                    @error('display_type') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Display Resolution *</label>
                                <input type="text" name="display_resolution" value="{{ old('display_resolution') }}" placeholder="e.g., 1920x1080" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('display_resolution') border-red-500 @enderror" required>
                                @error('display_resolution') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label class="flex items-center">
                                    <input type="checkbox" name="touch_capable" {{ old('touch_capable') ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600">
                                    <span class="ml-2 text-sm text-gray-700">Touchscreen Capable</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Hardware Specifications -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h2 class="text-lg font-semibold text-gray-900 mb-6">Hardware Specifications</h2>
                        <div class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Processor *</label>
                                    <input type="text" name="processor" value="{{ old('processor') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('processor') border-red-500 @enderror" required>
                                    @error('processor') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Generation *</label>
                                    <input type="text" name="generation" value="{{ old('generation') }}" placeholder="e.g., 12th Gen" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('generation') border-red-500 @enderror" required>
                                    @error('generation') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">RAM (GB) *</label>
                                    <select name="ram" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('ram') border-red-500 @enderror" required>
                                        <option value="">Select RAM</option>
                                        <option value="4">4 GB</option>
                                        <option value="8">8 GB</option>
                                        <option value="16">16 GB</option>
                                        <option value="32">32 GB</option>
                                        <option value="64">64 GB</option>
                                    </select>
                                    @error('ram') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Storage (GB) *</label>
                                    <select name="storage" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('storage') border-red-500 @enderror" required>
                                        <option value="">Select Storage</option>
                                        <option value="128">128 GB</option>
                                        <option value="256">256 GB</option>
                                        <option value="512">512 GB</option>
                                        <option value="1024">1 TB</option>
                                        <option value="2048">2 TB</option>
                                    </select>
                                    @error('storage') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Battery Specifications -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h2 class="text-lg font-semibold text-gray-900 mb-6">Battery Specifications</h2>
                        <div class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Battery Capacity *</label>
                                    <input type="text" name="battery_capacity" value="{{ old('battery_capacity') }}" placeholder="e.g., 52Wh" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('battery_capacity') border-red-500 @enderror" required>
                                    @error('battery_capacity') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Battery Timing *</label>
                                    <input type="text" name="battery_timing" value="{{ old('battery_timing') }}" placeholder="e.g., 10 hours" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('battery_timing') border-red-500 @enderror" required>
                                    @error('battery_timing') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Charger Power *</label>
                                    <select name="charger_power" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('charger_power') border-red-500 @enderror" required>
                                        <option value="">Select Charger</option>
                                        <option value="45W">45W</option>
                                        <option value="65W">65W</option>
                                        <option value="90W">90W</option>
                                        <option value="120W">120W</option>
                                    </select>
                                    @error('charger_power') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Charging Type *</label>
                                    <select name="charging_type" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('charging_type') border-red-500 @enderror" required>
                                        <option value="">Select Type</option>
                                        <option value="USB-C">USB-C</option>
                                        <option value="Barrel Jack">Barrel Jack</option>
                                        <option value="MagSafe">MagSafe</option>
                                    </select>
                                    @error('charging_type') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Physical Specifications -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h2 class="text-lg font-semibold text-gray-900 mb-6">Physical Specifications</h2>
                        <div class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Color *</label>
                                    <input type="text" name="color" value="{{ old('color') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('color') border-red-500 @enderror" required>
                                    @error('color') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Build Material *</label>
                                    <select name="build_material" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('build_material') border-red-500 @enderror" required>
                                        <option value="">Select Material</option>
                                        <option value="Aluminum">Aluminum</option>
                                        <option value="Plastic">Plastic</option>
                                        <option value="Carbon Fiber">Carbon Fiber</option>
                                        <option value="Magnesium Alloy">Magnesium Alloy</option>
                                    </select>
                                    @error('build_material') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Weight (kg) *</label>
                                <input type="number" name="weight" value="{{ old('weight') }}" step="0.1" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('weight') border-red-500 @enderror" required>
                                @error('weight') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Sidebar - Right -->
                <div class="space-y-6">
                    <!-- Status -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Status</h3>
                        <label class="flex items-center">
                            <input type="checkbox" name="is_active" value="1" {{ old('is_active') ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600">
                            <span class="ml-2 text-sm text-gray-700">Active</span>
                        </label>
                        <p class="text-xs text-gray-500 mt-2">Activate this product to make it available</p>
                    </div>

                    <!-- Product Images -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Product Images</h3>
                        <div class="space-y-3">
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center cursor-pointer hover:border-gray-400 transition-colors">
                                <svg class="w-10 h-10 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                                <p class="text-sm text-gray-600">Drag and drop images here</p>
                                <p class="text-xs text-gray-500 mt-1">or click to browse</p>
                                <input type="file" name="images[]" multiple accept="image/*" class="hidden">
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="space-y-3">
                            <button type="submit" class="w-full px-4 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium">
                                Create Product
                            </button>
                            <a href="{{ route('products.index') }}" class="block w-full px-4 py-3 text-center bg-gray-200 text-gray-900 rounded-lg hover:bg-gray-300 transition-colors font-medium">
                                Cancel
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
</x-dashboard-layout.main>
