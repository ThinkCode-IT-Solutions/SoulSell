@extends('layouts.app')

@section('content')
<section class="section" style="padding-top:48px;">
    <div class="container-xl" style="display:grid; gap:18px; max-width:780px;">
        <div class="glass-panel" style="padding:26px; display:grid; gap:14px; text-align:center;">
            <div class="pill" style="margin:0 auto;">Order confirmed</div>
            <div class="hero-title" style="font-size:1.9rem;">Thank you for choosing SoulSell.</div>
            <p class="section-sub" style="margin:0 auto;">We are preparing your shipment with the same energetic polish you saw while browsing. Expect dispatch within 24 hours.</p>
            <div class="divider"></div>
            <div style="display:flex; gap:10px; justify-content:center; flex-wrap:wrap;">
                <a class="btn btn-primary" href="/track">Track order</a>
                <a class="btn btn-ghost" href="/shop">Keep shopping</a>
            </div>
            <div style="display:grid; gap:6px; text-align:left; margin:0 auto; max-width:460px; color:#cbd5e1;">
                <div>Order ID: #SS-48219</div>
                <div>Estimated delivery: 2-3 business days</div>
                <div>Contact: support@soulsell.com</div>
            </div>
        </div>
    </div>
</section>
@endsection
