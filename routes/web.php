<?php

use App\Http\Controllers\FoodsController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;



// authentications

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/register-data', [RegisterController::class, 'Store'])->name('register.data');
Route::post('/login', [RegisterController::class, 'authenticate'])->name('login.page');

Route::get('/',[FoodsController::class,'foodsCategory'])->name('home'); 




// pages 
// ya route ne tar ithe controller cha function call karav lagel pahile tar mg tyat database cha code 
// ha controller cha function call karav lagel home route call kela tar example ahe yeil na karta ha manej try controller madla function call zala pahijel as jevha ha route run hoil tevha example ahe na
// Route::get('/', function () {
//     return view('home');
// })->name('home');

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
