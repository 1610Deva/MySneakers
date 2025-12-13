<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('home');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('sesi/login', [SessionController::class, 'login']);

Route::get('home', function () {
    return view('home');
});

Route::get('checkout', function () {
    return view('payment');
});

Route::get('productdetail', function () {
    return view('productDetail');
});

Route::get('katalog', function () {
    return view('katalog');
});

Route::get('login', function () {
    return view('login');
});
Route::get('/token', function (Request $request) {
    // return session token (or use csrf_token() if preferred)
    return $request->session()->token();
});

Route::get('register', function () {
    return view('register');
});

Route::post('register', function (Request $request) {
    $cresidentials = $request->validate([
        'name' => ['required'],
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    $user = User::create([
        'name' => $cresidentials['name'],
        'email' => $cresidentials['email'],
        'password' => Hash::make($cresidentials['password']),
    ]);

    $user->save();

    return redirect('dashboard');
});

Route::get('nike-dunklow', function () {
    return view('nike-dunklow');
});
