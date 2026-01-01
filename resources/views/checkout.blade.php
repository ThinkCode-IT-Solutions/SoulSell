@extends('layouts.app')

@section('content')
<section class="section" style="padding-top:34px;">
    <div class="container-xl" style="display:grid; gap:18px; grid-template-columns:2fr 1fr; align-items:start;">
        <div class="glass-panel" style="padding:22px; display:grid; gap:18px;">
            <div class="hero-title" style="font-size:1.6rem;">Checkout</div>
            <div class="divider"></div>
            <div class="grid-card" style="display:grid; gap:12px;">
                <div class="section-title" style="font-size:1.1rem;">Shipping</div>
                <div class="form-grid">
                    <div>
                        <label class="label">Full name</label>
                        <input class="form-control" type="text" placeholder="Alex Doe" />
                    </div>
                    <div>
                        <label class="label">Email</label>
                        <input class="form-control" type="email" placeholder="you@example.com" />
                    </div>
                    <div>
                        <label class="label">Phone</label>
                        <input class="form-control" type="tel" placeholder="+1 202 555 0199" />
                    </div>
                    <div>
                        <label class="label">City</label>
                        <input class="form-control" type="text" placeholder="Seattle" />
                    </div>
                    <div>
                        <label class="label">Address</label>
                        <input class="form-control" type="text" placeholder="123 Aurora Ave N" />
                    </div>
                    <div>
                        <label class="label">Postal code</label>
                        <input class="form-control" type="text" placeholder="98109" />
                    </div>
                </div>
            </div>

            <div class="grid-card" style="display:grid; gap:12px;">
                <div class="section-title" style="font-size:1.1rem;">Payment</div>
                <div style="display:grid; gap:10px;">
                    <label style="display:flex; gap:10px; align-items:center;">
                        <input type="radio" name="payment" checked />
                        <span>Card (Visa / MasterCard / AmEx)</span>
                    </label>
                    <label style="display:flex; gap:10px; align-items:center;">
                        <input type="radio" name="payment" />
                        <span>PayPal</span>
                    </label>
                    <label style="display:flex; gap:10px; align-items:center;">
                        <input type="radio" name="payment" />
                        <span>Cash on delivery</span>
                    </label>
                </div>
                <div class="form-grid">
                    <div>
                        <label class="label">Card number</label>
                        <input class="form-control" type="text" placeholder="4242 4242 4242 4242" />
                    </div>
                    <div>
                        <label class="label">Expiry</label>
                        <input class="form-control" type="text" placeholder="08 / 28" />
                    </div>
                    <div>
                        <label class="label">CVC</label>
                        <input class="form-control" type="text" placeholder="123" />
                    </div>
                </div>
            </div>

            <div style="display:flex; gap:12px;">
                <a class="btn btn-primary" href="/thank-you">Place order</a>
                <a class="btn btn-ghost" href="/cart">Back to cart</a>
            </div>
        </div>

        <div class="glass-panel" style="padding:22px; display:grid; gap:12px; position:sticky; top:80px;">
            <div class="section-title" style="font-size:1.1rem;">Order review</div>
            <div class="divider"></div>
            <div style="display:grid; gap:8px;">
                <div style="display:flex; justify-content:space-between; color:#e2e8f0;">
                    <span>ApexBook X2</span>
                    <span>$1,499</span>
                </div>
                <div style="display:flex; justify-content:space-between; color:#e2e8f0;">
                    <span>Wavebook Air 13</span>
                    <span>$999</span>
                </div>
            </div>
            <div class="divider"></div>
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
        </div>
    </div>
</section>
@endsection
