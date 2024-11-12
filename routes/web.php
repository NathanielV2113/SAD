<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'verified', 'rolemanager:admin'])->name('admin');
Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified', 'rolemanager:user'])->name('dashboard');



Route::get('home', [AuthController::class, 'home'])->name('home');

Route::controller(AuthController::class)->group(function (){
    Route::get('register', 'register')->name('register');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.auth');
    Route::post('register', 'registerSave')->name('register.auth');
    Route::post('logout', 'destroy')->name('logout');
    Route::get('cart', 'cart')->name('cart');
    Route::get('orders', 'orders')->name('orders');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', function () {
        return view('cart');
    })->name('cart');
    Route::get('/orders', function () {
        return view('orders');
    })->name('orders');
}); 