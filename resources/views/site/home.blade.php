<x-layouts.site-layout>



    <!-- ============================================
         HERO - Impactful & Clear Value Proposition
         Single powerful CTA with strong messaging
         ============================================ -->
    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 bg-light">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- Hero Content - Left Side -->
                <div class="space-y-8 fade-in">
                    <div class="space-y-4">
                        <p class="text-sm font-medium text-muted tracking-wide uppercase">Premium Computing</p>
                        <h1 class="text-5xl lg:text-6xl xl:text-7xl font-bold tracking-tight leading-tight">
                            Tools that
                            <span class="block text-accent">inspire creation</span>
                        </h1>
                        <p class="text-lg text-muted leading-relaxed max-w-md">
                            Carefully curated laptops and accessories for professionals who demand excellence.
                        </p>
                    </div>

                    <!-- Single Clear CTA -->
                    <div class="flex items-center space-x-4">
                        <a href="#products"
                            class="inline-flex items-center px-8 py-4 bg-primary text-white text-sm font-medium hover:bg-secondary transition-colors">
                            Explore Products
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                        <a href="#categories"
                            class="text-sm font-medium text-primary hover:text-accent transition-colors">
                            Browse Categories
                        </a>
                    </div>

                    <!-- Trust Indicators - Subtle -->
                    <div class="flex items-center space-x-8 pt-4 text-sm text-muted">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Free Shipping</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>2-Year Warranty</span>
                        </div>
                    </div>
                </div>

                <!-- Hero Image - Right Side -->
                <div class="relative lg:h-[600px] fade-in">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-100 to-gray-200"></div>
                    <div class="relative h-full flex items-center justify-center p-12">
                        <!-- Placeholder for hero product image -->
                        <div class="w-full h-full flex items-center justify-center">
                            <svg class="w-64 h-64 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================
         FEATURED PRODUCTS - Hero Products
         Large format showcase of premium products
         ============================================ -->
    <section id="products" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Section Header - Minimal -->
            <div class="mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold tracking-tight mb-4">Featured Products</h2>
                <p class="text-muted max-w-2xl">Handpicked laptops that combine power, elegance, and reliability.</p>
            </div>

            <!-- Products Grid - Clean & Spacious -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">

                @forelse($products  as $item)
                   <x-common.product-card :product="$item"  />
            @empty
                    <!-- Placeholder Products - Premium Look -->
                    no data to show
                @endforelse

            </div>

            <!-- View All CTA - Centered -->
            <div class="text-center mt-16">
                <a href="{{ route('shop') }}"
                    class="inline-flex items-center text-sm font-medium text-primary hover:text-accent transition-colors">
                    View All Products
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

        </div>
    </section>

    <!-- ============================================
         CATEGORIES - Sophisticated Grid
         Clean category navigation
         ============================================ -->
    <section id="categories" class="py-24 bg-light">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Section Header -->
            <div class="mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold tracking-tight mb-4">Shop by Category</h2>
                <p class="text-muted max-w-2xl">Find the perfect device for your specific needs.</p>
            </div>

            <!-- Categories Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                @forelse($categories ?? [] as $category)
                    <!-- Category Card - Minimal & Elegant -->
                    <a href="#" class="group block">
                        <div class="bg-white border border-gray-200 p-8 hover:border-accent transition-colors">
                            <!-- Icon/Image Area -->
                            <div class="aspect-square mb-6 bg-gray-50 flex items-center justify-center">
                                @if ($category->illustration)
                                    <img src="{{ $category->illustration }}" alt="{{ $category->name }}"
                                        class="w-full h-full object-cover">
                                @else
                                    <svg class="w-16 h-16 text-gray-400 group-hover:text-accent transition-colors"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                @endif
                            </div>
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-accent transition-colors">
                                {{ $category->name }}</h3>
                            <p class="text-sm text-muted line-clamp-2">{{ $category->description }}</p>
                        </div>
                    </a>
                @empty
                    <!-- Placeholder Categories -->
                    @foreach (['Gaming', 'Business', 'Creative', 'Student'] as $cat)
                        <a href="#" class="group block">
                            <div class="bg-white border border-gray-200 p-8 hover:border-accent transition-colors">
                                <div class="aspect-square mb-6 bg-gray-50 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-gray-400 group-hover:text-accent transition-colors"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">{{ $cat }} Laptops</h3>
                                <p class="text-sm text-muted">Premium devices for professionals</p>
                            </div>
                        </a>
                    @endforeach
                @endforelse

            </div>

        </div>
    </section>

    <!-- ============================================
         COLLECTIONS - Horizontal Scroll
         Curated product collections
         ============================================ -->
    <section id="collections" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Section Header -->
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold tracking-tight mb-4">Curated Collections</h2>
                    <p class="text-muted">Expertly selected for different use cases.</p>
                </div>
                <div class="hidden lg:flex space-x-2">
                    <button onclick="scrollCollections('left')"
                        class="p-3 border border-gray-200 hover:border-primary transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button onclick="scrollCollections('right')"
                        class="p-3 border border-gray-200 hover:border-primary transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Collections Scroll Container -->
            <div id="collectionsContainer" class="flex overflow-x-auto scrollbar-hide space-x-6 pb-4">

                @forelse($collections ?? [] as $collection)
                    <!-- Collection Card - Minimal Design -->
                    <article class="flex-none w-80 bg-secondary text-white p-10 hover-lift cursor-pointer">
                        <div class="space-y-6">
                            <div>
                                <h3 class="text-2xl font-semibold mb-2">{{ $collection->name ?? 'Collection Name' }}
                                </h3>
                                <p class="text-gray-400 text-sm">
                                    {{ $collection->description ?? 'Curated selection of premium devices' }}</p>
                            </div>
                            <div class="pt-4">
                                <span class="inline-flex items-center text-sm font-medium">
                                    Explore Collection
                                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </article>
                @empty
                    <!-- Placeholder Collections -->
                    @foreach (['Professional Series', 'Gaming Elite', 'Creator Studio', 'Student Essentials'] as $collName)
                        <article class="flex-none w-80 bg-secondary text-white p-10 hover-lift cursor-pointer">
                            <div class="space-y-6">
                                <div>
                                    <h3 class="text-2xl font-semibold mb-2">{{ $collName }}</h3>
                                    <p class="text-gray-400 text-sm">Curated selection of premium devices</p>
                                </div>
                                <div class="pt-4">
                                    <span class="inline-flex items-center text-sm font-medium">
                                        Explore Collection
                                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                @endforelse

            </div>

        </div>
    </section>

    <!-- ============================================
         BRAND VALUES - Trust Building
         Subtle trust indicators
         ============================================ -->
    <section class="py-20 bg-light border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-12 lg:gap-16">

                <!-- Value 1 -->
                <div class="text-center md:text-left">
                    <div class="text-sm font-medium text-primary mb-2">Quality Guaranteed</div>
                    <p class="text-sm text-muted">Every product is thoroughly tested and comes with comprehensive
                        warranty coverage.</p>
                </div>

                <!-- Value 2 -->
                <div class="text-center md:text-left">
                    <div class="text-sm font-medium text-primary mb-2">Expert Support</div>
                    <p class="text-sm text-muted">Our team of specialists is available to help you find the perfect
                        device.</p>
                </div>

                <!-- Value 3 -->
                <div class="text-center md:text-left">
                    <div class="text-sm font-medium text-primary mb-2">Fast Delivery</div>
                    <p class="text-sm text-muted">Free express shipping on all orders with secure packaging and
                        tracking.</p>
                </div>

            </div>
        </div>
    </section>

</x-layouts.site-layout>
