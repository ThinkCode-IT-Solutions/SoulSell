<x-layouts.site-layout>
    <!-- Category Header -->
    <section class="pt-32 pb-16 bg-light">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="max-w-3xl">
                <p class="text-sm font-medium text-muted tracking-wide uppercase mb-4">Category</p>
                <h1 class="text-4xl lg:text-5xl font-bold tracking-tight mb-6">{{ $category->name ?? 'Gaming Laptops' }}</h1>
                <p class="text-lg text-muted">{{ $category->description ?? 'High-performance laptops designed for gaming enthusiasts and professionals.' }}</p>
            </div>
        </div>
    </section>

    <!-- Category Products -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Sort & Filter -->
            <div class="flex justify-between items-center mb-12">
                <p class="text-sm text-muted">{{ $products->count() ?? 24 }} products found</p>
                <select class="border border-gray-200 px-4 py-2 text-sm focus:outline-none focus:border-accent">
                    <option>Sort by: Featured</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest</option>
                </select>
            </div>

            <!-- Products Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @forelse($products ?? [] as $product)
                <article class="group cursor-pointer hover-lift">
                    <div class="relative aspect-[4/3] bg-light mb-4 overflow-hidden">
                        <div class="w-full h-full flex items-center justify-center">
                            <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <p class="text-xs text-muted">{{ $product->brand ?? 'Dell' }}</p>
                        <h3 class="text-base font-semibold text-primary group-hover:text-accent transition-colors">{{ $product->name ?? 'XPS 15 9520' }}</h3>
                        <div class="text-lg font-semibold text-primary">${{ $product->selling_price ?? '1,299' }}</div>
                    </div>
                </article>
                @empty
                @for($i = 0; $i < 12; $i++)
                <article class="group cursor-pointer hover-lift">
                    <div class="relative aspect-[4/3] bg-light mb-4 overflow-hidden">
                        <div class="w-full h-full flex items-center justify-center">
                            <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <p class="text-xs text-muted">Dell</p>
                        <h3 class="text-base font-semibold text-primary">XPS 15 9520</h3>
                        <div class="text-lg font-semibold text-primary">$1,299</div>
                    </div>
                </article>
                @endfor
                @endforelse
            </div>

        </div>
    </section>
</x-layouts.site-layout>
