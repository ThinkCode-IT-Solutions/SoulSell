<?php

use App\Http\Controllers\SiteController;
use App\Http\Middleware\LoginCheck;
use App\Http\Middleware\ProductIsActiveCheck;
use Illuminate\Support\Facades\Route;

// ==============================================================
// Site Routes
// ==============================================================

Route::get("/", [SiteController::class,"homePage"])->name("home")   ;

Route::get("/shop", [SiteController::class,"shopPage"])->name("shop");
Route::get("/shop/{product:slug}", [SiteController::class, "productPage"])->middleware(ProductIsActiveCheck::class)->name("product.show");
Route::get("/no-longer-active", [SiteController::class,"noLongerActivePage"])->name("no-longer-active");
Route::get("/cart", [SiteController::class,"cartPage"])->name("cart");
Route::get("/checkout", [SiteController::class,"checkoutPage"])->middleware(LoginCheck::class)->name("checkout");
Route::get("/thankyou", [SiteController::class,"thankYouPage"])->name("thankyou");
Route::get("/user-account", [SiteController::class,"userAccountPage"])->name("user.account");
