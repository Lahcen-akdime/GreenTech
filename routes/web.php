<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

// crud :
Route::get('/home', [ProductsController::class , 'index']);
Route::get('/products', [ProductsController::class ,'showProducts'])->name('products');
Route::get('/show/{id}', [ProductsController::class , 'show']);
Route::post('store', [ProductsController::class , 'store' ])->name('store');
Route::get('/create', [ProductsController::class , 'create']);
Route::put('/update/{id}', [ProductsController::class , 'update' ])->name('update');
Route::get('/destroy/{id}', [ProductsController::class , 'destroy']);
Route::get('/editProductForm/{id}', [ProductsController::class , 'edit']);

// Filter :
Route::get('/filter/{id}', [ProductsController::class , 'filter']);

// Register :
Route::get('/', [LoginController::class , 'index']);
Route::post('/registerUser', [LoginController::class , 'store'])->name('registerUser');
Route::get('/index', [LoginController::class , 'show']);

Route::post('/login', [LoginController::class , 'login'])->name('login');
//Login :