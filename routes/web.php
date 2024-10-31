<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\IgpostController;

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

Route::get('/bidangs', function () {
    return view('bidangs');
});

// Route::get('/informasi', function () {
//     return view('informasi');
// });

// Route::get('/bidang')

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/informasi', [IgpostController::class, 'index'])->name('home');

// Route to display all templates (our products)
Route::get('/bidangs', [BidangController::class, 'index']);

// Route to display a specific template's details
Route::get('/bidangs/{bidang}', [BidangController::class, 'show']);
