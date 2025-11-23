<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::middleware('guest')->group(function()
{
    Route::get('register', [AuthController::class, 'register'])->name('register');
    
    Route::post('register', [AuthController::class, 'createUser']);
});