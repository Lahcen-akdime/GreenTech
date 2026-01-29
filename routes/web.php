<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [ProductsController::class , 'index']);
Route::get('/editProductForm/{id}', [ProductsController::class , 'edit','id']);
