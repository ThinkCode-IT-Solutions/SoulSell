@extends('layouts.app')

@section('content')
<section class="section" style="padding-top:38px;">
    <div class="container-xl" style="display:grid; gap:18px;">


        <div class="product-grid">
            @foreach ($products as $product)
            <div class="grid-card" style="display:grid; gap:12px;">
                <div style="height:140px; border-radius:14px; ">
                    <img src="https://picsum.photos/200/200?random={{ $product->id }}" alt="{{ $product->name }}" style="width:100%; height:100%; object-fit:cover; border-radius:14px;" />
                </div>
                <div style="display:flex; justify-content:space-between; align-items:start; gap:10px;">
                    <div>
                        <div style="font-weight:800;">{{ $product->name }}</div>
                    <p style="color:#cbd5e1;">{{ $product->display_size }}" {{ $product->display_type }} • {{ $product->ram }}GB • {{ $product->storage }}GB</p>
                    </div>
                    <div style="text-align:right;">
                        <div style="font-weight:800;">${{ $product->selling_price }}</div>
                        <div style="color:#cbd5e1; font-size:0.9rem;">In stock</div>
                    </div>
                </div>
                <div style="display:flex; gap:8px; flex-wrap:wrap;">
                    <span class="tag">{{ $product->generation }}</span>
                    <span class="tag">Wi-Fi 6E</span>
                    <span class="tag">{{ $product->charging_type }} {{ $product->charger_power }}</span>
                </div>
                <div style="display:flex; justify-content:space-between; align-items:center;">
                    <div style="display:flex; gap:8px; align-items:center; color:#cbd5e1;">
                        <span style="width:8px; height:8px; border-radius:50%; background:var(--primary);"></span>
                        <span>Ships tomorrow</span>
                    </div>
                    <a class="btn btn-ghost" href="{{ route("product.show",$product->slug) }}">View details</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
