<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');
    return view('home', [
        'comics' => $comics
    ]);
});

Route::get('/contacts', function () {
    return view ('contacts');
});

Route::get('/about', function () {
    return view('about');
});