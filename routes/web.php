<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

// Route untuk halaman utama
Route::get('/', function () {
    return view('home');
});

// Route untuk barang
Route::get('/barangs', [BarangController::class, 'index']);
Route::get('/barangs/{id}', [BarangController::class, 'show'])->name('barangs.show');
