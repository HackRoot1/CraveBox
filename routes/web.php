<?php

use App\Http\Controllers\FoodsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// authentications
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/register-data', [RegisterController::class, 'store'])->name('register.data');
Route::post('/login', [RegisterController::class, 'authenticate'])->name('login.page');


Route::get('/', [FoodsController::class, 'foodsCategory'])->name('home');


Route::get('/food-page/{filterValue?}', [FoodsController::class, 'foodDish'])->name('food.page');
Route::get('/single-food/{id}', [FoodsController::class, 'singleFoodData'])->name('single.food');


Route::get('/checkout', [FoodsController::class, 'checkoutFood'])->name('checkout');


Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');


Route::get('/wishlist', [FoodsController::class, 'wishlist'])->name('wishlist');
Route::get('/wishlist/{id}', [FoodsController::class, 'addToWishlist'])->name('add.wishlist');
Route::get('/wishlist/delete/{id}', [FoodsController::class, 'deleteToWishlist'])->name('delete.wishlist');


Route::get('/shopping-cart', [FoodsController::class, 'ShopingCart'])->name('shopping.cart');
Route::get('/add-shopping-cart/{id}', [FoodsController::class, 'addShopingCart'])->name('add.shopping.cart');
Route::get('/add-shopping-cart/delete/{id}', [FoodsController::class, 'deleteShopingCart'])->name('delete.shopping.cart');



Route::fallback(function () {
    return view('errors.404');
});
