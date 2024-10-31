<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// authentications
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

// Post route for registering and logging in
Route::post('/register-data', [RegisterController::class, 'store'])->name('register.data');
Route::post('/login', [RegisterController::class, 'authenticate'])->name('login.page');

// pages 
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/single-food', function () {
    return view('single-food');
})->name('single.food');

Route::get('/checkout-page', function () {
    return view('checkout-page');
})->name('checkout');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

Route::get('/shopping-cart', function () {
    return view('shopping-cart');
})->name('shopping.cart');

Route::get('/food-page', function () {
    return view('food-page');
})->name('food.page');
