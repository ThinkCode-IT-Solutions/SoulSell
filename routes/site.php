<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// ==============================================================
// Site Routes
// ==============================================================

Route::get("/", [SiteController::class,"homePage"])->name("home")   ;

Route::get("/shop", [SiteController::class,"shopPage"])->name("shop");
Route::get("/shop/{product:slug}", [SiteController::class, "productPage"])->name("product.show");
Route::get("/cart", [SiteController::class,"cartPage"])->name("cart");
Route::get("/checkout", [SiteController::class,"checkoutPage"])->name("checkout");
Route::get("/thankyou", [SiteController::class,"thankYouPage"])->name("thankyou");
Route::get("/user-account", [SiteController::class,"userAccountPage"])->name("user.account");
