<?php
use App\Http\Controllers\Client\FavoriteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Middleware\checkLoginMiddleware;
use App\Http\Middleware\userMiddleware;
use Illuminate\Support\Facades\Route;

// Admin Space :
Route::controller(ProductsController::class)->middleware(userMiddleware::class)->group(function () {
Route::get('/products','showProducts')->name('products');
Route::get('/show/{id}', 'show');
Route::post('store', 'store' )->name('store');
Route::get('/create', 'create');
Route::put('/update/{id}', 'update' )->name('update');
Route::get('/destroy/{id}', 'destroy');
Route::get('/filter/{id}','filter');
Route::get('/edit/{id}', 'edit');
Route::get('/adminHome',[ProductsController::class, 'index'] );
});

// Public Space :
Route::controller(LoginController::class)->group(function () {
Route::get('/logout','logout');
Route::get('/','index');
Route::post('/registerUser','store')->name('registerUser');
Route::get('/index','show')->name('index');

Route::post('/home','login')->name('login');
Route::get('/home','showProducts')->name('home');
});

// Client Space :
Route::controller(FavoriteController::class)->middleware(checkLoginMiddleware::class)->group(function () {
Route::get('/show', 'show');
Route::get('/like/{id}','toggle');
});