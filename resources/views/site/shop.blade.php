<x-layouts.site-layout>
    <!-- Shop Header -->
    <section class="pt-32 pb-16 bg-light">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="max-w-3xl">
                <p class="text-sm font-medium text-muted tracking-wide uppercase mb-4">Browse All</p>
                <h1 class="text-4xl lg:text-5xl font-bold tracking-tight mb-6">Our Collection</h1>
                <p class="text-lg text-muted">Explore our complete range of premium laptops and accessories.</p>
            </div>
        </div>
    </section>

    <!-- Filters & Products -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-4 gap-12">

                <!-- Filters Sidebar -->
                <aside class="lg:col-span-1">
                    <div class="space-y-8">
                        <!-- Category Filter -->
                        <div>
                            <h3 class="text-sm font-semibold mb-4">Categories</h3>
                            <div class="space-y-3">
                                @foreach(['All', 'Gaming', 'Business', 'Creative', 'Student'] as $cat)
                                <label class="flex items-center space-x-3 cursor-pointer">
                                    <input type="checkbox" class="w-4 h-4 border-gray-300">
                                    <span class="text-sm text-muted hover:text-primary">{{ $cat }}</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- Price Filter -->
                        <div class="pt-8 border-t border-gray-200">
                            <h3 class="text-sm font-semibold mb-4">Price Range</h3>
                            <div class="space-y-3">
                                @foreach(['Under $500', '$500 - $1000', '$1000 - $1500', 'Over $1500'] as $range)
                                <label class="flex items-center space-x-3 cursor-pointer">
                                    <input type="checkbox" class="w-4 h-4 border-gray-300">
                                    <span class="text-sm text-muted hover:text-primary">{{ $range }}</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- Brand Filter -->
                        <div class="pt-8 border-t border-gray-200">
                            <h3 class="text-sm font-semibold mb-4">Brand</h3>
                            <div class="space-y-3">
                                @foreach(['Dell', 'HP', 'Lenovo', 'Apple', 'ASUS'] as $brand)
                                <label class="flex items-center space-x-3 cursor-pointer">
                                    <input type="checkbox" class="w-4 h-4 border-gray-300">
                                    <span class="text-sm text-muted hover:text-primary">{{ $brand }}</span>
                                </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </aside>

                <!-- Products Grid -->
                <div class="lg:col-span-3">
                    <!-- Sort & Filter Bar -->
                    <div class="flex justify-between items-center mb-8">
                        <p class="text-sm text-muted">Showing {{ $products->count() ?? 24 }} products</p>
                        <select class="border border-gray-200 px-4 py-2 text-sm focus:outline-none focus:border-accent">
                            <option>Sort by: Featured</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Newest</option>
                        </select>
                    </div>

                    <!-- Products Grid -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($products as $product)
                        {{-- component --}}
                       <a href="{{ route('product.show', $product->slug) }}">
    <article class="group cursor-pointer hover-lift">
        <div class="relative aspect-[4/3] bg-light mb-4 overflow-hidden">
            <div class="w-full h-full flex items-center justify-center">
                @if ($product->images->count() < 1)
                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                @else
                    <img src="{{ $product->images->first()->image_url }}" alt=""
                        class="absolute inset-0 w-full h-full object-cover object-center rounded-lg" loading="lazy"
                        decoding="async" />
                @endif
            </div>
        </div>
        <div class="space-y-2">
            <p class="text-xs text-muted">{{ $product->brand ?? 'Dell' }}</p>
            <h3 class="text-base font-semibold text-primary group-hover:text-accent transition-colors">
                {{ $product->name ?? 'XPS 15 9520' }}</h3>
            <div class="text-lg font-semibold text-primary">${{ $product->selling_price ?? '1,299' }}</div>
        </div>
    </article>
</a>

                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="mt-16 flex justify-center">
                        <div class="flex items-center space-x-2">
                            <button class="px-4 py-2 border border-gray-200 text-sm hover:border-primary transition-colors">Previous</button>
                            <button class="px-4 py-2 bg-primary text-white text-sm">1</button>
                            <button class="px-4 py-2 border border-gray-200 text-sm hover:border-primary transition-colors">2</button>
                            <button class="px-4 py-2 border border-gray-200 text-sm hover:border-primary transition-colors">3</button>
                            <button class="px-4 py-2 border border-gray-200 text-sm hover:border-primary transition-colors">Next</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layouts.site-layout>
