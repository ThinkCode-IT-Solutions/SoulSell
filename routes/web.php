<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserShoppingController;
use App\Http\Middleware\ActiveCheck;
use App\Http\Middleware\AdminCheck;

Route::get('/admin/dashboard',[OrderController::class, 'dashboard'])->middleware(['auth', 'verified',AdminCheck::class])->name('dashboard');

Route::get('/orders', [OrderController::class, 'index'])->middleware(['auth', 'verified',AdminCheck::class])->name('orders.index');
Route::get('/orders/{order}/detail', [OrderController::class, 'show'])->middleware(['auth', 'verified',AdminCheck::class])->name('orders.show');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/products/{product}/show', [ProductController::class, 'show'])->name('products.show');



Route::get("/order/success", [SiteController::class, "orderSuccess"])->name("order.success");
Route::get("/user/dashboard", [UserShoppingController::class, "dashboard"])->middleware(['auth', 'verified',ActiveCheck::class])->name('user.dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/site.php';
