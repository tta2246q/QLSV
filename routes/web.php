<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.admin.index');
});



// user

Route::get('/home', function () {
    return view('pages.user.home');
});
Route::get('/about', function () {
    return view('pages.user.about');
});
Route::get('/product', function () {
    return view('pages.user.product');
});
Route::get('/contact', function () {
    return view('pages.user.contact');
});
Route::get('/login', function () {
    return view('pages.user.login');
});
Route::get('/register', function () {
    return view('pages.user.register');
});


// admin
Route::get('/dashboard', function () {
    return view('pages.admin.dashboard.index');
});
