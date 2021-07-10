<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/search','ProductController@search');
Route::resource('products', ProductController::class);