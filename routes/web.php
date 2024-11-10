<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('home', [AuthController::class, 'home'])->name('home');

Route::controller(AuthController::class)->group(function (){
    Route::get('register', 'register')->name('register');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.auth');
    Route::post('register', 'registerSave')->name('register.auth');
    Route::get('cart', 'cart')->name('cart');
    Route::get('orders', 'orders')->name('orders');
});