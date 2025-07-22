<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', [ProductController::class, 'index'])->name('Product.index');
Route::get('/product/{productId}', [ProductController::class, 'show'])->name('Product.show');
Route::get('/register', [UserController::class, 'registerForm'])->name('register.form');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'loginForm'])->name('login.form');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

//creation
Route::get('products/create', [ProductController::class, 'create'])->name('Product.create');
Route::post('products/store', [ProductController::class, 'store'])->name('Product.store');
//updates
Route::get('/product/{productId}/edit', [ProductController::class, 'edit'])->name('Product.edit');
Route::put('products/{productId}/update', [ProductController::class, 'update'])->name('Product.update');
//delete
Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('Product.destroy');







