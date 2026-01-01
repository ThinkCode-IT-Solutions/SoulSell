@extends('layouts.app')

@section('content')
<section class="section" style="padding-top:44px;">
    <div class="container-xl" style="display:grid; gap:18px; max-width:820px;">
        <div class="glass-panel" style="padding:22px; display:grid; gap:14px;">
            <div style="display:flex; align-items:center; justify-content:space-between; gap:12px; flex-wrap:wrap;">
                <div>
                    <div class="pill">Track your order</div>
                    <div class="hero-title" style="font-size:1.8rem;">#SS-48219 — ApexBook X2</div>
                    <p class="section-sub">Real-time, lightweight status with the same clean, energetic visuals.</p>
                </div>
                <div class="grid-card" style="display:grid; gap:6px; min-width:200px;">
                    <span style="color:#cbd5e1;">Delivery ETA</span>
                    <div style="font-weight:800;">Arriving Jan 6-7</div>
                    <span class="tag">Priority shipping</span>
                </div>
            </div>
            <div class="divider"></div>
            <div class="timeline">
                <div class="timeline-step">
                    <div style="font-weight:700;">Out for delivery</div>
                    <div style="color:#cbd5e1;">Courier is heading your way • Jan 5, 9:30 AM</div>
                </div>
                <div class="timeline-step">
                    <div style="font-weight:700;">Arrived at local hub</div>
                    <div style="color:#cbd5e1;">Scanned and sorted • Jan 4, 10:12 PM</div>
                </div>
                <div class="timeline-step">
                    <div style="font-weight:700;">Dispatched</div>
                    <div style="color:#cbd5e1;">Left fulfillment center • Jan 4, 2:00 PM</div>
                </div>
                <div class="timeline-step">
                    <div style="font-weight:700;">Confirmed</div>
                    <div style="color:#cbd5e1;">Order created • Jan 4, 11:45 AM</div>
                </div>
            </div>
            <div class="divider"></div>
            <div style="display:flex; gap:10px; flex-wrap:wrap;">
                <a class="btn btn-primary" href="/shop">Browse more</a>
                <a class="btn btn-ghost" href="/thank-you">View receipt</a>
            </div>
        </div>
    </div>
</section>
@endsection
