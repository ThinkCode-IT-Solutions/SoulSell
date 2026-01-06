<a href="{{ route('product.show', $product->slug) }}">
    <article class="group cursor-pointer hover-lift">
        <div class="relative aspect-[4/3] bg-light mb-4 overflow-hidden">
            <div class="w-full h-full flex items-center justify-center">
                <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
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
