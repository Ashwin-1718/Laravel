<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{username}' ,function ($username) {
    return "Hello, {$username}!";
});

Route::resource('products', ProductController::class);
