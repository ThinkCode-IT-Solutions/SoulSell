@extends('layouts.app')

@section('content')
<section class="section" style="padding-top:42px;">
    <div class="container-xl floating">
        <div class="glass-panel" style="padding:32px; display:grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap:22px; align-items:center;">
            <div style="display:flex; flex-direction:column; gap:14px;">
                <div class="pill" style="width:max-content;">Trusted refurbished & brand-new tech</div>
                <h1 class="hero-title">Bright, confident shopping for laptops that match your pace.</h1>
                <p class="hero-lead">Explore carefully curated machines with transparent specs, friendly prices, and expressive looks. Same bold energy across every page.</p>
                <div style="display:flex; gap:12px; flex-wrap:wrap;">
                    <a class="btn btn-primary" href="/shop">Start shopping</a>
                    <a class="btn btn-ghost" href="/track">Track an order</a>
                </div>
                <div style="display:flex; gap:12px; align-items:center; flex-wrap:wrap; color:#cbd5e1;">
                    <div class="tag">24h fast dispatch</div>
                    <div class="tag" style="background:rgba(245,158,11,0.16); color:#fed7aa; border-color:rgba(245,158,11,0.32);">1-year coverage</div>
                    <div class="tag" style="background:rgba(34,211,238,0.16); color:#ccfbf1; border-color:rgba(34,211,238,0.32);">Free returns</div>
                </div>
            </div>
            <div class="glass-panel" style="padding:20px; display:grid; gap:14px; background:linear-gradient(160deg, rgba(14,165,233,0.12), rgba(34,211,238,0.08));">
                <div class="grid-card" style="display:flex; flex-direction:column; gap:10px;">
                    <div class="pill" style="width:max-content;">Top pick</div>
                    <div style="font-weight:800; font-size:1.2rem;">ApexBook X2</div>
                    <p style="color:#cbd5e1;">14" OLED • 32GB RAM • 1TB SSD • 18h battery</p>
                    <div style="display:flex; align-items:center; gap:10px;">
                        <span style="font-weight:800; font-size:1.3rem; color:#e2e8f0;">$1,499</span>
                        <span style="color:var(--muted); text-decoration:line-through;">$1,799</span>
                    </div>
                    <div class="divider"></div>
                    <div style="display:grid; grid-template-columns:repeat(2,minmax(0,1fr)); gap:8px; font-size:0.95rem; color:#cbd5e1;">
                        <span>• Thunderbolt 4</span>
                        <span>• Wi-Fi 6E</span>
                        <span>• 1.1kg ultra-light</span>
                        <span>• Rapid charge</span>
                    </div>
                </div>
                <div class="grid-card" style="display:flex; gap:10px; align-items:center;">
                    <div style="width:56px; height:56px; border-radius:14px; background:rgba(34,211,238,0.18);"></div>
                    <div>
                        <div style="font-weight:700;">Energetic palettes</div>
                        <p style="color:#cbd5e1;">Teal, amber, and electric gradients keep the mood lively.</p>
                    </div>
                </div>
                <div class="grid-card" style="display:flex; gap:10px; align-items:center;">
                    <div style="width:56px; height:56px; border-radius:14px; background:rgba(245,158,11,0.18);"></div>
                    <div>
                        <div style="font-weight:700;">Transparent specs</div>
                        <p style="color:#cbd5e1;">Every card highlights the essentials—price, battery, storage, weight.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container-xl" style="display:grid; gap:20px;">
        <div style="display:flex; justify-content:space-between; align-items:flex-end; gap:14px; flex-wrap:wrap;">
            <div>
                <div class="pill">Shop by category</div>
                <div class="section-title" style="margin-top:8px;">Find the lane that matches your workflow.</div>
                <p class="section-sub">Slim ultrabooks, creator-grade machines, and battery champions—all styled with consistent gradients and glass cards.</p>
            </div>
            <a class="btn btn-ghost" href="/shop">View all</a>
        </div>
        <div class="product-grid">
            <div class="grid-card" style="display:flex; flex-direction:column; gap:10px;">
                <div class="pill">Ultrabooks</div>
                <div style="font-weight:800; font-size:1.1rem;">Featherweight focus</div>
                <p style="color:#cbd5e1;">Under 1.2kg, all-day battery, bold teal edges.</p>
                <div class="divider"></div>
                <div style="display:flex; gap:8px; flex-wrap:wrap;">
                    <span class="tag">OLED</span>
                    <span class="tag">Thunderbolt</span>
                    <span class="tag">Silent fans</span>
                </div>
            </div>
            <div class="grid-card" style="display:flex; flex-direction:column; gap:10px;">
                <div class="pill">Creator rigs</div>
                <div style="font-weight:800; font-size:1.1rem;">Performance with flair</div>
                <p style="color:#cbd5e1;">High-wattage GPUs, calibrated displays, amber accents.</p>
                <div class="divider"></div>
                <div style="display:flex; gap:8px; flex-wrap:wrap;">
                    <span class="tag">RTX</span>
                    <span class="tag">Calibrated</span>
                    <span class="tag">Vapor chamber</span>
                </div>
            </div>
            <div class="grid-card" style="display:flex; flex-direction:column; gap:10px;">
                <div class="pill">Battery champs</div>
                <div style="font-weight:800; font-size:1.1rem;">Stay unplugged</div>
                <p style="color:#cbd5e1;">70Wh+ cells, efficient chips, quick top-ups.</p>
                <div class="divider"></div>
                <div style="display:flex; gap:8px; flex-wrap:wrap;">
                    <span class="tag">18h</span>
                    <span class="tag">65W USB-C</span>
                    <span class="tag">3yr support</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container-xl" style="display:grid; gap:18px;">
        <div style="display:flex; justify-content:space-between; align-items:flex-end; gap:14px; flex-wrap:wrap;">
            <div>
                <div class="pill">Featured picks</div>
                <div class="section-title" style="margin-top:8px;">Curated to feel premium but friendly.</div>
            </div>
            <a class="btn btn-ghost" href="/shop">Shop collection</a>
        </div>
        <div class="product-grid">
            <div class="grid-card" style="display:grid; gap:12px;">
                <div style="height:140px; border-radius:14px; background:linear-gradient(130deg, rgba(14,165,233,0.3), rgba(34,211,238,0.12));"></div>
                <div style="display:flex; justify-content:space-between; align-items:center;">
                    <div>
                        <div style="font-weight:800;">Wavebook Air 13</div>
                        <p style="color:#cbd5e1;">13" QHD • 16GB • 512GB • 1.05kg</p>
                    </div>
                    <span style="font-weight:800; color:#e2e8f0;">$999</span>
                </div>
                <div class="divider"></div>
                <div style="display:flex; gap:8px; flex-wrap:wrap;">
                    <span class="tag">Wi-Fi 6E</span>
                    <span class="tag">Fingerprint</span>
                    <span class="tag">90Hz</span>
                </div>
            </div>
            <div class="grid-card" style="display:grid; gap:12px;">
                <div style="height:140px; border-radius:14px; background:linear-gradient(130deg, rgba(245,158,11,0.26), rgba(14,165,233,0.18));"></div>
                <div style="display:flex; justify-content:space-between; align-items:center;">
                    <div>
                        <div style="font-weight:800;">Lumen Pro 15</div>
                        <p style="color:#cbd5e1;">15" OLED • 32GB • 1TB • RTX</p>
                    </div>
                    <span style="font-weight:800; color:#e2e8f0;">$1,799</span>
                </div>
                <div class="divider"></div>
                <div style="display:flex; gap:8px; flex-wrap:wrap;">
                    <span class="tag">Calibrated</span>
                    <span class="tag">100% DCI-P3</span>
                    <span class="tag">Rapid charge</span>
                </div>
            </div>
            <div class="grid-card" style="display:grid; gap:12px;">
                <div style="height:140px; border-radius:14px; background:linear-gradient(130deg, rgba(34,211,238,0.2), rgba(245,158,11,0.16));"></div>
                <div style="display:flex; justify-content:space-between; align-items:center;">
                    <div>
                        <div style="font-weight:800;">Range 14 Max</div>
                        <p style="color:#cbd5e1;">14" IPS • 24GB • 1TB • 22h battery</p>
                    </div>
                    <span style="font-weight:800; color:#e2e8f0;">$1,299</span>
                </div>
                <div class="divider"></div>
                <div style="display:flex; gap:8px; flex-wrap:wrap;">
                    <span class="tag">70Wh</span>
                    <span class="tag">EVO</span>
                    <span class="tag">Silent cooling</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" style="padding-bottom:70px;">
    <div class="container-xl glass-panel" style="display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:22px; align-items:center; padding:28px;">
        <div style="display:flex; flex-direction:column; gap:10px;">
            <div class="pill">Stay in sync</div>
            <div class="section-title">Join the drop list</div>
            <p class="section-sub">New colors, refreshed builds, and exclusive bundles drop weekly. Get first pick and launch-day pricing.</p>
        </div>
        <div style="display:grid; gap:10px;">
            <input class="form-control" type="email" placeholder="you@example.com" />
            <div style="display:flex; gap:10px; flex-wrap:wrap;">
                <button class="btn btn-primary" type="button">Notify me</button>
                <button class="btn btn-ghost" type="button">Preview next drop</button>
            </div>
        </div>
    </div>
</section>
@endsection
