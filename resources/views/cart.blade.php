@extends('layouts.app')

@section('content')
<section class="section" style="padding-top:36px;">
    <div class="container-xl" style="display:grid; gap:18px; grid-template-columns:2fr 1fr; align-items:start;">
        <div class="glass-panel" style="padding:22px; display:grid; gap:14px;">
            <div class="hero-title" style="font-size:1.6rem;">Your cart</div>
            <div class="divider"></div>
            @foreach ([
                ['name' => 'ApexBook X2', 'price' => '$1,499', 'note' => 'Teal • 32GB • 1TB'],
                ['name' => 'Wavebook Air 13', 'price' => '$999', 'note' => 'Silver • 16GB • 512GB']
            ] as $item)
            <div class="grid-card" style="display:flex; gap:14px; align-items:center;">
                <div style="width:76px; height:76px; border-radius:16px; background:linear-gradient(135deg, rgba(14,165,233,0.24), rgba(245,158,11,0.18));"></div>
                <div style="flex:1;">
                    <div style="font-weight:800;">{{ $item['name'] }}</div>
                    <p style="color:#cbd5e1;">{{ $item['note'] }}</p>
                    <div style="display:flex; gap:10px; color:#cbd5e1;">
                        <span class="tag">Qty 1</span>
                        <span class="tag">Ships in 24h</span>
                    </div>
                </div>
                <div style="text-align:right;">
                    <div style="font-weight:800;">{{ $item['price'] }}</div>
                    <a style="color:var(--muted);" href="#">Save for later</a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="glass-panel" style="padding:22px; display:grid; gap:12px; position:sticky; top:80px;">
            <div class="section-title" style="font-size:1.2rem;">Order summary</div>
            <div class="divider"></div>
            <div style="display:flex; justify-content:space-between; color:#e2e8f0;">
                <span>Subtotal</span>
                <span>$2,498</span>
            </div>
            <div style="display:flex; justify-content:space-between; color:#e2e8f0;">
                <span>Shipping</span>
                <span>Free</span>
            </div>
            <div style="display:flex; justify-content:space-between; color:#e2e8f0;">
                <span>Protection</span>
                <span>$59</span>
            </div>
            <div class="divider"></div>
            <div style="display:flex; justify-content:space-between; font-weight:800;">
                <span>Total</span>
                <span>$2,557</span>
            </div>
            <a class="btn btn-primary" href="/checkout">Proceed to checkout</a>
            <a class="btn btn-ghost" href="/shop">Continue shopping</a>
        </div>
    </div>
</section>
@endsection
