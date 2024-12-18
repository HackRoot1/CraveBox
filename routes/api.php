<?php

use App\Http\Controllers\API\FoodsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('popular-dishes', [FoodsController::class, 'filterPopularDishes']);
Route::post('popular-menu', [FoodsController::class, 'filterPopularMenu']);
Route::post('all-menu', [FoodsController::class, 'getAllFilteredData']);
Route::post('buy-item', [FoodsController::class, 'buyItem']);
Route::post('checkout', [FoodsController::class, 'checkout']);
Route::post('/payment', [FoodsController::class, 'processPayment'])->name('payment.process');
Route::post('/payment/verify', [FoodsController::class, 'verifyPayment'])->name('payment.verify');
