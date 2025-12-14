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

Route::get('menskatalog', function () {
    return view('menskatalog');
});

Route::get('womenskatalog', function () {
    return view('womenskatalog');
});

Route::get('kidskatalog', function () {
    return view('kidskatalog');
});

Route::post('/checkout/process', [Checkout::class, 'store'])->name('checkout.process');

// ✅ Midtrans Webhook (MUST be excluded from CSRF verification)
Route::post('/payment/notification', [Checkout::class, 'handleNotification'])->name('payment.notification');

// ✅ Protected Routes (harus login)
Route::middleware('auth')->group(function () {
    Route::get('/home', [ProductsController::class, 'home'])->name('home');
    Route::get('/checkout', [Checkout::class, 'index'])->name('checkout');
    
    // ✅ Midtrans Payment Routes
    Route::get('/payment/snap/{order_id}', [Checkout:: class, 'showSnapPayment'])->name('payment.snap');
    Route::get('/payment/success/{order_id}', [Checkout::class, 'paymentSuccess'])->name('payment.success');
    Route::get('/payment/pending/{order_id}', [Checkout::class, 'paymentPending'])->name('payment.pending');
    Route::get('/payment/error/{order_id}', [Checkout:: class, 'paymentError'])->name('payment.error');    Route::get('/payment/confirm/{order_id}', [Checkout::class, 'confirmAndRedirectHome'])->name('payment.confirm');
    Route::get('/transaction', [App\Http\Controllers\TransactionLogController::class, 'index'])->name('transaction.log');
    Route::get('/transactions/filter', [App\Http\Controllers\TransactionLogController::class, 'filterByStatus'])->name('transaction.filter');
    Route::get('/transactions/sync', [App\Http\Controllers\TransactionLogController::class, 'syncAll'])->name('transaction.sync');
    Route::get('/transactions/{order_id}', [App\Http\Controllers\TransactionLogController:: class, 'show'])->name('transaction.detail');
    Route::get('/transactions/{order_id}/invoice', [App\Http\Controllers\TransactionLogController::class, 'downloadInvoice'])->name('transaction.invoice');    
        
    Route::post('/logout', [SessionController::class, 'logout'])->name('logout');
});

// ✅ Public Routes (Dynamic Product Routes)
Route::get('/{slug}', [ProductsController::class, 'show'])->name('product.show');

// ✅ Protected Routes (harus login)
Route::middleware('auth')->group(function () {
    Route::get('/home', [ProductsController::class, 'home'])->name('home'); // was: return view('home')
    Route::get('/checkout', [Checkout::class, 'index'])->name('checkout');  // was: return view('payment')
    Route::post('/logout', [SessionController::class, 'logout'])->name('logout');
});

// ✅ Public Routes
Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/product/{product_id}', [ProductsController::class, 'show'])->name('products.show');

Route::get('/payment/success/{order_id}', [Checkout::class, 'paymentSuccess'])->name('payment.success');

// ✅ CSRF Token Route (optional)
Route::get('/token', function (Request $request) {
    return $request->session()->token();
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