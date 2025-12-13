<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Checkout;
use App\Http\Controllers\ProductsController;

// ✅ Route Login dengan nama 'login'
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [SessionController::class, 'login'])->name('login.post');

// ✅ Route Register
Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function (Request $request) {
    $credentials = $request->validate([
        'name' => ['required'],
        'email' => ['required', 'email', 'unique:users'],
        'password' => ['required', 'min:8'],
    ]);

    $user = User::create([
        'name' => $credentials['name'],
        'email' => $credentials['email'],
        'password' => Hash::make($credentials['password']),
    ]);

    return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
});

Route::post('/checkout/process', [Checkout::class, 'store'])->name('checkout.process');


// ✅ Protected Routes (harus login)
Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::post('/payment/complete/{order_id}', [Checkout::class, 'markPaid'])->name('payment.complete');

    Route::get('/checkout', function () {
        return view('payment');
    })->name('checkout');

    Route::post('/logout', [SessionController::class, 'logout'])->name('logout');
});

// ✅ Public Routes
Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/product/{product_id}', [ProductsController::class, 'show'])->name('products.show');
Route::get('/payment/success/{order_id}', [Checkout::class, 'showPayment'])->name('payment.success');

// ✅ CSRF Token Route (optional)
Route::get('/token', function (Request $request) {
    return $request->session()->token();
});