<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('/sesi',[SessionController::class, 'index']);
Route::post('sesi/login',[SessionController::class, 'login']);