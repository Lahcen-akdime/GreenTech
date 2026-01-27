<?php

use Illuminate\Support\Facades\Route;

Route::get('/{nom}', function ($nom) {
    return view('welcome',['nom'=>$nom]);
});
