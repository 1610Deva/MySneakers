<?php

use App\Models\User;
// use Symfony\Component\HttpFoundation\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;



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

Route::get('/token', function (Request $request) {
    return $request->session()->token();

    $token = csrf_token();
});

Route::get('register', function () {
    return view('register');
});

Route::post('register', function (Request $request) {
    // Handle registration logic here
    $cresidentials = $request->validate([
        'name' => ['required'],
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    $user = User::create([
        'name' => $cresidentials['name'],
        'email' => $cresidentials['email'],
        'password' => Hash::make($cresidentials['password']),
        'remember_token' => Str::random(10),
    ]);
    $user->save();
    return redirect('dashboard');
});


