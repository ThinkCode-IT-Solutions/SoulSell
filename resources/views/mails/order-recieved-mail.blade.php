<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Order Received</title>
    <style>
        /* General resets for email clients */
        body { margin:0; padding:0; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; background:#f4f6f8; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; }
        table { border-collapse:collapse; }
        img { border:0; line-height:100%; outline:none; text-decoration:none; max-width:100%; height:auto; display:block; }

        /* Container */
        .email-wrap { width:100%; background:#f4f6f8; padding:30px 16px; }
        .email-content { max-width:680px; margin:0 auto; background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 18px rgba(0,0,0,0.08); }

        /* Header */
        .header { padding:22px 28px; display:flex; align-items:center; justify-content:space-between; background:linear-gradient(90deg,#0f62fe 0%, #3a8dff 100%); color:#fff; }
        .brand { display:flex; align-items:center; gap:12px; }
        .brand img { width:48px; height:48px; border-radius:6px; background:rgba(255,255,255,0.08); padding:6px; }
        .brand h1 { font-size:18px; margin:0; font-weight:700; letter-spacing:0.2px; }

        /* Body */
        .body { padding:28px; color:#1f2937; }
        .title { font-size:20px; font-weight:700; margin:0 0 6px; }
        .subtitle { color:#6b7280; margin:0 0 18px; font-size:14px; }

        /* Order summary */
        .card { border:1px solid #eef2f7; border-radius:8px; padding:16px; background:#fff; }
        .order-meta { display:flex; gap:12px; flex-wrap:wrap; margin-bottom:14px; }
        .meta-item { min-width:150px; }
        .meta-title { font-size:12px; color:#6b7280; margin-bottom:6px; }
        .meta-value { font-weight:600; color:#111827; }

        table.items { width:100%; margin-top:10px; }
        table.items th { text-align:left; padding:10px 8px; font-size:13px; color:#6b7280; border-bottom:1px solid #eef2f7; }
        table.items td { padding:12px 8px; font-size:14px; vertical-align:top; border-bottom:1px solid #f3f6f9; }
        .item-name { font-weight:600; color:#0f1724; }
        .item-meta { color:#6b7280; font-size:13px; margin-top:4px; }

        .totals { width:100%; margin-top:12px; }
        .totals td { padding:6px 8px; font-size:14px; }
        .totals .label { color:#6b7280; }
        .totals .value { text-align:right; font-weight:700; color:#111827; }

        .button { display:inline-block; padding:12px 18px; background:#0f62fe; color:#fff; text-decoration:none; border-radius:8px; font-weight:700; margin-top:16px; }

        /* Addresses */
        .addresses { display:flex; gap:16px; margin-top:18px; flex-wrap:wrap; }
        .addr { flex:1 1 280px; border:1px solid #eef2f7; border-radius:6px; padding:12px; background:#fbfdff; }
        .addr h4 { margin:0 0 8px; font-size:13px; color:#111827; }

        /* Footer */
        .footer { padding:18px 28px; background:#f8fafc; color:#6b7280; font-size:13px; text-align:center; }

        @media (max-width:520px){
            .header { flex-direction:column; align-items:flex-start; gap:12px; padding:16px; }
            .brand h1 { font-size:16px; }
            .body { padding:18px; }
        }
    </style>
</head>
<body>
    <div class="email-wrap">
        <div class="email-content" role="article" aria-roledescription="email">
            <div class="header">
                <div class="brand">
                    @if(!empty($logoUrl))
                        <img src="{{ $logoUrl }}" alt="Logo">
                    @endif
                    <h1>Order Received</h1>
                </div>
                <div style="text-align:right;">
                    <div style="font-size:12px; color:rgba(255,255,255,0.9)">Order #{{ $orderNumber ?? ($order->id ?? '') }}</div>
                    <div style="font-size:12px; color:rgba(255,255,255,0.85); margin-top:4px;">{{ $order_date ?? ($order->created_at ?? '') }}</div>
                </div>
            </div>

            <div class="body">
                <p class="title">Thanks for your order, {{ $customerName ?? ($order->customer_name ?? 'Customer') }}!</p>
                <p class="subtitle">We’ve received your order and it’s now being processed. You’ll receive updates when your items ship.</p>

                <div class="card">
                    <div class="order-meta">
                        <div class="meta-item">
                            <div class="meta-title">Order</div>
                            <div class="meta-value">#{{ $orderNumber ?? ($order->id ?? '') }}</div>
                        </div>
                        <div class="meta-item">
                            <div class="meta-title">Placed</div>
                            <div class="meta-value">{{ $order_date ?? ($order->created_at ?? '') }}</div>
                        </div>
                        <div class="meta-item">
                            <div class="meta-title">Payment</div>
                            <div class="meta-value">{{ $payment_method ?? ($order->payment_method ?? '—') }}</div>
                        </div>
                        <div class="meta-item">
                            <div class="meta-title">Status</div>
                            <div class="meta-value">{{ $order->status ?? 'Processing' }}</div>
                        </div>
                    </div>

                    <table class="items" role="table" aria-label="Order items">
                        <thead>
                            <tr>
                                <th style="width:60%;">Item</th>
                                <th style="width:15%;">Qty</th>
                                <th style="width:25%; text-align:right;">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items ?? ($order->items ?? []) as $item)
                                <tr>
                                    <td>
                                        <div class="item-name">{{ $item['name'] ?? ($item->name ?? 'Item') }}</div>
                                        @if(!empty($item['meta']) || !empty($item->meta))
                                            <div class="item-meta">{{ $item['meta'] ?? ($item->meta ?? '') }}</div>
                                        @endif
                                    </td>
                                    <td>{{ $item['qty'] ?? ($item->quantity ?? $item->qty ?? 1) }}</td>
                                    <td style="text-align:right;">
                                        @php
                                            $price = $item['price'] ?? ($item->price ?? 0);
                                        @endphp
                                        {{ isset($price) ? number_format((float)$price, 2) : '0.00' }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <table class="totals" role="presentation">
                        <tr>
                            <td class="label">Subtotal</td>
                            <td class="value">{{ number_format($subtotal ?? ($order->subtotal ?? 0), 2) }}</td>
                        </tr>
                        <tr>
                            <td class="label">Shipping</td>
                            <td class="value">{{ number_format($shipping ?? ($order->shipping_amount ?? 0), 2) }}</td>
                        </tr>
                        <tr>
                            <td class="label">Tax</td>
                            <td class="value">{{ number_format($tax ?? ($order->tax_amount ?? 0), 2) }}</td>
                        </tr>
                        <tr>
                            <td class="label" style="padding-top:10px; border-top:1px solid #eef2f7;">Total</td>
                            <td class="value" style="padding-top:10px; border-top:1px solid #eef2f7;">{{ number_format($total ?? ($order->total ?? 0), 2) }}</td>
                        </tr>
                    </table>

                    @if(!empty($orderUrl))
                        <a href="{{ $orderUrl }}" class="button" target="_blank" rel="noopener">View your order</a>
                    @endif

                    <div class="addresses">
                        <div class="addr">
                            <h4>Shipping Address</h4>
                            <div style="color:#374151; font-size:14px;">{!! nl2br(e($shipping_address ?? ($order->shipping_address ?? '—'))) !!}</div>
                        </div>
                        <div class="addr">
                            <h4>Billing Address</h4>
                            <div style="color:#374151; font-size:14px;">{!! nl2br(e($billing_address ?? ($order->billing_address ?? '—'))) !!}</div>
                        </div>
                    </div>
                </div>

                <p style="margin-top:16px; color:#6b7280; font-size:13px;">
                    If you have any questions, reply to this email or contact our support at
                    <a href="mailto:{{ $supportEmail ?? 'support@example.com' }}" style="color:#0f62fe; text-decoration:none;">{{ $supportEmail ?? 'support@example.com' }}</a>.
                </p>
            </div>

            <div class="footer">
                <div style="margin-bottom:6px;">Need help? {{ $supportPhone ?? '' }}</div>
                <div style="color:#9ca3af;">© {{ date('Y') }} {{ $companyName ?? ($order->company_name ?? 'Your Company') }}. All rights reserved.</div>
            </div>
        </div>
    </div>
</body>
</html>