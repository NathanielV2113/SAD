<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function (){
    Route::get('register', 'register')->name('register');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.auth');
    Route::post('register', 'registerSave')->name('register.auth');
});