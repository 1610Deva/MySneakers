<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('home', function () {
    return view('home');
});

Route::get('productdetail', function () {
    return view('productDetail');
});



