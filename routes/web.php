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

// /food-page ha path jithe match hoil tithe jail 
// Post route for registering and logging in
Route::post('/register-data', [RegisterController::class, 'store'])->name('register.data');
Route::post('/login', [RegisterController::class, 'authenticate'])->name('login.page');

Route::get('/',[FoodsController::class,'foodsCategory'])->name('home'); 
// Route::get('/', [FoodsController::class,'foodDish'])->name('food-page');

Route::get('/single-food', function () {
    return view('single-food');
})->name('single.food');

Route::get('/checkout-page', function () {
    return view('checkout-page');
})->name('checkout');

// pahile hyach file made check karaych ithe ahe ka konta function call ok ya sabghthi profile controller bnvav lagel manje separate rahil ok space nko bolo mi sorry
Route::get('/profile', [ProfileController::class,'profile'])->name('profile');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

Route::get('/shopping-cart', function () {
    return view('shopping-cart');
})->name('shopping.cart');

// step 1 smjli hya route la match zala mg yaat 2nd parameter cha function run hoil 
// ithe direct view ahe 
// ithe controller tak manje ithun controller chya function kade redirect hoil cursor aapla  brobar ka haa
Route::get('/food-page', [FoodsController::class,'foodDish'])->name('food.page'); 


Route::fallback(function(){
    return view('errors.404');
});