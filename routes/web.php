<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [ProductsController::class , 'index']);
Route::get('/products', [ProductsController::class ,'showProducts']);
Route::get('/create', [ProductsController::class , 'create']);
Route::get('/show/{id}', [ProductsController::class , 'show']);
Route::post('store', [ProductsController::class , 'store' ])->name('store');
Route::put('/update/{id}', [ProductsController::class , 'update' ])->name('update');
Route::get('/destroy/{id}', [ProductsController::class , 'destroy']);
Route::get('/editProductForm/{id}', [ProductsController::class , 'edit']);