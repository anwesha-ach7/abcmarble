<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/tiles', function () {
    return view('tiles');
});

Route::get('/tile-products', function () {
    return view('tile-products');
});

Route::get('/tile-dash-products', function () {
    return view('tile-products');
});

Route::get('/bathware', function () {
    return view('bathware');
});

Route::get('/building-solutions', function () {
    return view('building-solutions');
});
