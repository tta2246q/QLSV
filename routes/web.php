<?php

use Illuminate\Support\Facades\Route;
use Phiki\Phast\Root;
use App\Http\Controllers\UserController;

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

Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/useradmin', [App\Http\Controllers\AdminController::class, 'useradmin'])->name('useradmin');
Route::get('/productadmin', [App\Http\Controllers\AdminController::class, 'productadmin'])->name('productadmin');
Route::get('/categoriesadmin', [App\Http\Controllers\AdminController::class, 'categories'])->name('categoriesadmin');

// user management
Route::resource('users', App\Http\Controllers\UserController::class);

// Admin User Management
Route::get('/Admin/user', [UserController::class, 'index'])->name('admin.user.index');
Route::get('/Admin/user/create', [UserController::class, 'create'])->name('admin.user.create');
Route::post('/Admin/user', [UserController::class, 'store'])->name('admin.user.store');
Route::get('/Admin/user/{user}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
Route::get('/Admin/user/{user}', [UserController::class, 'show'])->name('admin.user.show');
Route::put('/Admin/user/{user}', [UserController::class, 'update'])->name('admin.user.update');
Route::delete('/Admin/user/{user}', [UserController::class, 'destroy'])->name('admin.user.destroy');

// Product Management
Route::get('/Admin/product', [App\Http\Controllers\ProductController::class, 'index'])->name('admin.product.index');
Route::get('/Admin/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('admin.product.create');
Route::post('/Admin/product', [App\Http\Controllers\ProductController::class, 'store'])->name('admin.product.store');
Route::get('/Admin/product/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('admin.product.edit');
Route::get('/Admin/product/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('admin.product.show');
Route::put('/Admin/product/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('admin.product.update');
Route::delete('/Admin/product/{product}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('admin.product.destroy');

// Category Management
Route::get('/Admin/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('/Admin/categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('/Admin/categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('admin.categories.store');
Route::get('/Admin/categories/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::put('/Admin/categories/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('admin.categories.update');
Route::delete('/Admin/categories/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('admin.categories.destroy');

// Brand Management
Route::get('/Admin/brands', [App\Http\Controllers\BrandController::class, 'index'])->name('admin.brands.index');
Route::get('/Admin/brands/create', [App\Http\Controllers\BrandController::class, 'create'])->name('admin.brands.create');
Route::post('/Admin/brands', [App\Http\Controllers\BrandController::class, 'store'])->name('admin.brands.store');
Route::get('/Admin/brands/{brand}/edit', [App\Http\Controllers\BrandController::class, 'edit'])->name('admin.brands.edit');
Route::put('/Admin/brands/{brand}', [App\Http\Controllers\BrandController::class, 'update'])->name('admin.brands.update');
Route::delete('/Admin/brands/{brand}', [App\Http\Controllers\BrandController::class, 'destroy'])->name('admin.brands.destroy');
