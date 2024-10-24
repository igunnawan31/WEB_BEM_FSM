<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\IgpostController;

Route::get('/tentangkami', function () {
    return view('tentangkami');
});


Route::get('/divisi', function () {
    return view('divisi');
});

// Route::get('/bidang')

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/bidang', [BidangController::class, 'index']);
Route::get('/informasi', [IgpostController::class, 'index']);
