<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('user/index');
})->name('landing-page');

Route::get('/register-account', function () {
    return view('user/auth/register');
})->name('register-account');
Route::get('/login-account', function () {
    return view('user/auth/login');
})->name('login-account');
Route::get('/dashboard', function () {
    return view('user/dashboard');
})->name('dashboard');

Route::get('/product', function () {
    return view('user/pages/product');
})->name('product');
Route::get('/shop', function () {
    return view('user/pages/shop');
})->name('shop');
Route::get('/checkout', function () {
    return view('user/pages/checkout');
})->name('checkout');
Route::get('/wishlist', function () {
    return view('user/pages/wishlist');
})->name('wishlist');

Route::get('/profile', function () {
    return view('user/pages/profile');
})->name('/profile');
Route::get('account', function () {
    return view('user/pages/account');
})->name('account');

Route::get('/dashboard', function () {
    return view('admin/pages/dashboard');
})->name('/dashboard');

