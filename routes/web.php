<?php

use Illuminate\Support\Facades\Route;
use Phiki\Phast\Root;

Route::get('/', function () {
    return view('pages.admin.index');
});



// user

Route::get('/home', [App\Http\Controllers\HomeController::class, 'homepage'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'aboutpage'])->name('about');
Route::get('/product', [App\Http\Controllers\HomeController::class, 'productpage'])->name('product');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contactpage'])->name('contact');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'registerpage'])->name('register');
Route::get('/login', [App\Http\Controllers\HomeController::class, 'loginpage'])->name('login');

// admin
