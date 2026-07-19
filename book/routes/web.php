<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('games.home');
});

Route::get('/about', function() {
    return view('games.about');
});

Route::get('/contact', function() {
    return view('games.contact');
});