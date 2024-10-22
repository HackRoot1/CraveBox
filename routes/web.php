<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
})->name('register');
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/register-data', [RegisterController::class, 'Store'])->name('register.data');
Route::post('/login', [RegisterController::class,'authenticate'])->name('login.page');

Route::get('/home', function(){
    return view('home');
})->name('home');  

Route::get('/',function(){
return view('welcome');
});
Route::get('/single-food',function(){
    return view('single-food');
    });