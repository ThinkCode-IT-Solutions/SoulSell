<x-layouts.site-layout>
    <!-- Collection Header -->
    <section class="pt-32 pb-16 bg-secondary text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="max-w-3xl">
                <p class="text-sm font-medium text-gray-400 tracking-wide uppercase mb-4">Collection</p>
                <h1 class="text-4xl lg:text-5xl font-bold tracking-tight mb-6">{{ $collection->name ?? 'Professional Series' }}</h1>
                <p class="text-lg text-gray-300">{{ $collection->description ?? 'Curated laptops for professionals who demand excellence in performance and design.' }}</p>
            </div>
        </div>
    </section>

    <!-- Collection Products -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Sort & Filter -->
            <div class="flex justify-between items-center mb-12">
                <p class="text-sm text-muted">{{ $products->count() ?? 18 }} products in this collection</p>
                <select class="border border-gray-200 px-4 py-2 text-sm focus:outline-none focus:border-accent">
                    <option>Sort by: Featured</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest</option>
                </select>
            </div>

            <!-- Products Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
                @forelse($products ?? [] as $product)
                <article class="group cursor-pointer hover-lift">
                    <div class="relative aspect-[4/3] bg-light mb-6 overflow-hidden">
                        <div class="w-full h-full flex items-center justify-center">
                            <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div>
                            <p class="text-xs text-muted mb-1">{{ $product->brand ?? 'Dell' }}</p>
                            <h3 class="text-lg font-semibold text-primary group-hover:text-accent transition-colors">{{ $product->name ?? 'XPS 15 9520' }}</h3>
                        </div>
                        <div class="flex items-center space-x-4 text-xs text-muted">
                            <span>{{ $product->ram ?? '16' }}GB RAM</span>
                            <span>•</span>
                            <span>{{ $product->storage ?? '512' }}GB SSD</span>
                        </div>
                        <div class="text-xl font-semibold text-primary">${{ $product->selling_price ?? '1,299' }}</div>
                    </div>
                </article>
                @empty
                @for($i = 0; $i < 6; $i++)
                <article class="group cursor-pointer hover-lift">
                    <div class="relative aspect-[4/3] bg-light mb-6 overflow-hidden">
                        <div class="w-full h-full flex items-center justify-center">
                            <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div>
                            <p class="text-xs text-muted mb-1">Dell</p>
                            <h3 class="text-lg font-semibold text-primary">XPS 15 9520</h3>
                        </div>
                        <div class="flex items-center space-x-4 text-xs text-muted">
                            <span>16GB RAM</span>
                            <span>•</span>
                            <span>512GB SSD</span>
                        </div>
                        <div class="text-xl font-semibold text-primary">$1,299</div>
                    </div>
                </article>
                @endfor
                @endforelse
            </div>

        </div>
    </section>
</x-layouts.site-layout>
