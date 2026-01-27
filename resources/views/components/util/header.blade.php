
    <!-- ============================================
         HEADER - Minimal & Professional
         Clean navigation with focus on brand
         ============================================ -->
    <header class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-sm border-b border-gray-100 z-50">
        <nav class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">

                <!-- Logo - Simple & Elegant -->
                <a href="/" class="text-2xl font-semibold tracking-tight">
                    SoulSell
                </a>

                <!-- Primary Navigation - Minimal Links -->
                <div class="hidden md:flex items-center space-x-12">
                    <a href="{{ route("shop") }}" class="text-sm font-medium text-muted hover:text-primary transition-colors">Products</a>
                    <a href="#categories" class="text-sm font-medium text-muted hover:text-primary transition-colors">Categories</a>
                    <a href="#collections" class="text-sm font-medium text-muted hover:text-primary transition-colors">Collections</a>
                </div>

                <!-- Actions - Clean Icons -->
                <div class="flex items-center space-x-6">
                    <button class="text-muted hover:text-primary transition-colors" aria-label="Search">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                    <a href="{{ route("cart") }}" class="text-muted hover:text-primary transition-colors relative" aria-label="Cart">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                    </a>
                    <a href="/login" class="hidden md:block text-sm font-medium text-primary hover:text-accent transition-colors">
                        Sign In
                    </a>
                </div>
            </div>
        </nav>
    </header>
