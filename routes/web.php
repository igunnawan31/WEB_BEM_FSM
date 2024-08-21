<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

Route::get('/bidang', function () {
    return view('bidang');
});

Route::get('/informasi', function () {
    return view('informasi');
});
