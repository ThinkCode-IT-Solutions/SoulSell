<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function homePage()
    {
        $products = Product::limit(6)->get();
        return view('site.home', compact('products'));
    }

    public function shopPage()
    {
        $products = Product::all();

        // dd($products->first()->images);
        return view('site.shop', compact('products'));
    }

    public function productPage(Product $product)
    {
        return view('site.product', compact('product'));
    }

    public function cartPage()
    {
        return view("site.cart");
    }

    public function checkoutPage(Product $product)
    {
        return view("site.checkout", compact('product'));
    }

    public function thankYouPage()
    {
        return view("site.thankyou");
    }

    public function userAccountPage()
    {
        return view("site.user-account");
    }
    public function noLongerActivePage()
    {
        return view("site.no-active");
    }

    public function orderSuccess()
    {
        Mail::to("shahzadfarooqdev@gmail.com")->send(new \App\Mail\NewOrderRecievedMail());


        return "email sent";
    }


    public function createOrder(Request $request, Product $product)
    {
        // validate the request
        $request->validate([
            'email' => ['required', 'string'],
            'shipping_name' => 'required|string|max:255',
            'shipping_address' => 'required|string|max:255',
            'shipping_city' => 'required|string|max:255',
            'shipping_state' => 'required|string|max:255',
            'shipping_zip' => 'required|string|max:20',
            'shipping_phone' => 'required|string|max:20',
            'payment_method' => 'required|string|in:cash-on-delivery,credit-card,paypal',
        ]);


        // store the request in the databae
        $order = Order::create([
            'order_id' => "ORD-".time()."-".rand(1000,9999),
            'user_id' => Auth::user()->id,
            'product_id' => $product->id,
            'total_price' => $product->selling_price + ($product->selling_price * 0.1),
            'shipping_name' => $request->shipping_name,
            'shipping_address' => $request->shipping_address,
            'shipping_city' => $request->shipping_city,
            'shipping_state' => $request->shipping_state,
            'shipping_zip' => $request->shipping_zip,
            'shipping_phone' => $request->shipping_phone,
            'payment_method' => $request->payment_method,
            'payment_status' => 'pending',
            'order_status' => 'pending',
        ]);

        // TODO: send email to admin about new order
        // TODO: send email to user about order confirmation
        return view("site.thankyou",[
            'order' => $order
        ]);
    }
}
