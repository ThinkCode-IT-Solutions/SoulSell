<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserShoppingController;
use App\Http\Middleware\ActiveCheck;
use App\Http\Middleware\AdminCheck;

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified',AdminCheck::class])->name('dashboard');

Route::get("/order/success", [SiteController::class, "orderSuccess"])->name("order.success");
Route::get("/user/dashboard", [UserShoppingController::class, "dashboard"])->middleware(['auth', 'verified',ActiveCheck::class])->name('user.dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/site.php';
