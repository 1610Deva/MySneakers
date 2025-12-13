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

Route::get('menskatalog', function () {
    return view('menskatalog');
});

Route::get('womenskatalog', function () {
    return view('womenskatalog');
});

Route::get('kidskatalog', function () {
    return view('kidskatalog');
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

Route::get('nike-air-force1', function () {
    return view('nike-air-force1');
});

route::get('adidas-samba-og', function () {
    return view('adidas-samba-og');
});

Route::get('nike-air-jordan-retro1', function () {
    return view('nike-air-jordan-retro1');
});

Route::get('adidas-samba-og-white', function () {
    return view('adidas-samba-og-white');
});

Route::get('samba-og-woman', function () {
    return view('samba-og-woman');
});

Route::get('chuck-taylor-allstar', function () {
    return view('chuck-taylor-allstar');
});

Route::get('vans-oldschool-classic', function () {
    return view('vans-oldschool-classic');
});

route::get('newbalance-1906', function () {
    return view('NB-1906-unisex');
});