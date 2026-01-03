<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/generate', function () {
    return view('generate');
});

Route::get('/feedback', function () {
    return view('feedback');
});
