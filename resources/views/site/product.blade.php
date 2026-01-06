<x-layouts.site-layout>
    <!-- Product Detail -->
    <section class="pt-32 pb-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16">

                <!-- Product Images -->
                <div>
                    <!-- Main Image -->
                    <div class="aspect-[4/3] bg-light mb-4">
                        <div class="w-full h-full flex items-center justify-center">
                            <svg class="w-48 h-48 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <!-- Thumbnail Images -->
                    <div class="grid grid-cols-4 gap-4">
                        @for($i = 0; $i < 4; $i++)
                        <div class="aspect-square bg-light border-2 {{ $i === 0 ? 'border-primary' : 'border-transparent' }} cursor-pointer hover:border-primary transition-colors">
                        </div>
                        @endfor
                    </div>
                </div>

                <!-- Product Info -->
                <div class="space-y-8">
                    <!-- Breadcrumb -->
                    <div class="text-sm text-muted">
                        <a href="/" class="hover:text-primary">Home</a>
                        <span class="mx-2">/</span>
                        <a href="/shop" class="hover:text-primary">Shop</a>
                        <span class="mx-2">/</span>
                        <span class="text-primary">{{ $product->name ?? 'Product' }}</span>
                    </div>

                    <!-- Product Title -->
                    <div>
                        <p class="text-sm text-muted mb-2">{{ $product->brand  }}</p>
                        <h1 class="text-3xl lg:text-4xl font-bold tracking-tight mb-4">{{ $product->name  }}</h1>
                        <div class="flex items-baseline space-x-4">
                            <span class="text-3xl font-bold text-primary">${{ $product->selling_price  }}</span>
                            @if(isset($product->old_selling_price))
                            <span class="text-lg text-muted line-through">${{ $product->old_selling_price }}</span>
                            @endif
                        </div>
                    </div>

                    <!-- Key Specs -->
                    <div class="grid grid-cols-2 gap-4 py-6 border-y border-gray-200">
                        <div>
                            <p class="text-xs text-muted mb-1">Processor</p>
                            <p class="text-sm font-medium">{{ $product->processor }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Memory</p>
                            <p class="text-sm font-medium">{{ $product->ram }}GB RAM</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Storage</p>
                            <p class="text-sm font-medium">{{ $product->storage }}GB SSD</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Display</p>
                            <p class="text-sm font-medium">{{ $product->display_size }}" {{ $product->display_resolution  }}</p>
                        </div>
                    </div>

                    <!-- Description -->
                    <div>
                        <p class="text-muted leading-relaxed">

                            {{ $product->description }}
                        </p>
                    </div>

                    <!-- Add to Cart -->
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center border border-gray-200">
                                <button class="px-4 py-3 hover:bg-light transition-colors">-</button>
                                <input type="number" value="1" class="w-16 text-center border-x border-gray-200 py-3 focus:outline-none">
                                <button class="px-4 py-3 hover:bg-light transition-colors">+</button>
                            </div>
                        </div>
                        <button class="w-full bg-primary text-white py-4 text-sm font-medium hover:bg-secondary transition-colors">
                            Add to Cart
                        </button>
                        <button class="w-full border border-gray-200 py-4 text-sm font-medium hover:border-primary transition-colors">
                            Add to Wishlist
                        </button>
                    </div>

                    <!-- Product Meta -->
                    <div class="pt-8 border-t border-gray-200 space-y-2 text-sm">
                        <div class="flex items-center space-x-2 text-muted">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Free shipping on orders over $500</span>
                        </div>
                        <div class="flex items-center space-x-2 text-muted">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>2-year warranty included</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Product Specifications -->
    <section class="py-24 bg-light">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-2xl font-bold mb-8">Full Specifications</h2>
            <div class="bg-white border border-gray-200 divide-y divide-gray-200">
                @foreach([
                    ['Processor', $product->processor],
                    ['Memory', $product->ram . 'GB DDR4'],
                    ['Storage', $product->storage . 'GB SSD'],
                    ['Display', $product->display_size . '" ' . $product->display_resolution],
                    ['Graphics', 'Integrated Intel Iris Xe'],
                    ['Battery', $product->battery_timing . ' hours'],
                    ['Weight', $product->weight . 'kg'],
                    ['Color', $product->color]
                ] as $spec)
                <div class="grid md:grid-cols-3 px-8 py-4">
                    <div class="text-sm font-medium">{{ $spec[0] }}</div>
                    <div class="md:col-span-2 text-sm text-muted">{{ $spec[1] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.site-layout>
