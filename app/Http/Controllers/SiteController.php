<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function homePage (){
        $products = Product::limit(6)->get();
        return view('site.home', compact('products'));
    }

    public function shopPage (){
        $products = Product::all();
        return view('site.shop', compact('products'));
    }

    public function productPage(Product $product){
        return view('site.product', compact('product'));
    }

    public function cartPage (){
        return view("site.cart");
    }

    public function checkoutPage (){
        return view("site.checkout");
    }

    public function thankYouPage (){
        return view("site.thankyou");
    }

    public function userAccountPage (){
        return view("site.user-account");
    }


}
