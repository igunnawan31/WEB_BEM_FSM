<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BidangController;

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

Route::get('/bidang', function () {
    return view('bidang');
});

Route::get('/informasi', function () {
    return view('informasi');
});

// Route::get('/bidang')

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/divisi', [BidangController::class, 'namabidang']);
