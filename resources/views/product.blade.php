@extends('layouts.app')

@section('content')
    <section class="section" style="padding-top:34px;">
        <div class="container-xl" style="display:grid; gap:18px;">
            <div class="glass-panel"
                style="padding:22px; display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:18px;">
                <div style="display:grid; gap:12px;">
                    <div class="pill">Product detail</div>
                    <div class="hero-title" style="font-size:2rem;">{{ $product->name }}</div>
                    <p class="section-sub">{{ $product->display_size }}" {{ $product->display_type }} |
                        {{ $product->ram }}GB RAM | {{ $product->storage }}GB NVMe | {{ $product->weight }}kg | Wi‑Fi 6E |
                        Thunderbolt 4 | {{ $product->battery_timing }} battery</p>
                    <div style="display:flex; gap:10px; align-items:center; flex-wrap:wrap;">
                        <span class="tag">In stock</span>
                        <span class="tag"
                            style="background:rgba(245,158,11,0.16); color:#fed7aa; border-color:rgba(245,158,11,0.3);">Dispatches
                            in 24h</span>
                        <span class="tag">1-year coverage</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:14px;">
                        <div style="font-weight:800; font-size:1.6rem;">${{ $product->selling_price }}</div>
                        <span
                            style="color:var(--muted); text-decoration:line-through;">${{ $product->old_selling_price }}</span>
                    </div>
                    <div style="display:flex; gap:12px; flex-wrap:wrap;">
                        <a class="btn btn-primary" href="/cart">Add to cart</a>
                        <a class="btn btn-ghost" href="/checkout">Buy now</a>
                    </div>
                </div>
                <div class="grid-card"
                    style="padding:0; overflow:hidden; background:linear-gradient(145deg, rgba(14,165,233,0.24), rgba(34,211,238,0.12));">
                    <div
                        style="height:280px; background:linear-gradient(135deg, rgba(14,165,233,0.36), rgba(245,158,11,0.24));">
                    </div>
                </div>
            </div>

            <div class="glass-panel" style="padding:22px; display:grid; gap:16px;">
                <div class="section-title" style="font-size:1.4rem;">Specs spotlight</div>
                <div class="product-grid" style="grid-template-columns:repeat(auto-fit,minmax(200px,1fr));">
                    <div class="grid-card" style="display:grid; gap:8px;">
                        <div style="font-weight:700;">Processor</div>
                        <div style="color:#cbd5e1;">{{ $product->processor }}</div>
                    </div>
                    <div class="grid-card" style="display:grid; gap:8px;">
                        <div style="font-weight:700;">Build material</div>
                        <div style="color:#cbd5e1;">{{ $product->build_material }}</div>
                    </div>
                    <div class="grid-card" style="display:grid; gap:8px;">
                        <div style="font-weight:700;">Weight</div>
                        <div style="color:#cbd5e1;">{{ $product->weight }} kg</div>
                    </div>
                    <div class="grid-card" style="display:grid; gap:8px;">
                        <div style="font-weight:700;">Battery capacity</div>
                        <div style="color:#cbd5e1;">{{ $product->battery_capacity }}</div>
                    </div>
                </div>
            </div>

            <div class="glass-panel" style="padding:22px; display:grid; gap:12px;">
                <div class="section-title" style="font-size:1.2rem;">In the box</div>
                <div class="divider"></div>
                <ul style="display:grid; gap:8px; list-style-type:disc; padding-left:20px; color:#cbd5e1;">
                    <li>{{ $product->name }} laptop</li>
                    <li>{{ $product->charging_type }} {{ $product->charger_power }} charger</li>
                    <li>USB-C to USB-C cable</li>
                    <li>Quick start guide</li>
                    <li>Warranty information</li>
                </ul>
            </div>
        </div>
    </section>
@endsection
