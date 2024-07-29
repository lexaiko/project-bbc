<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



// routes/api.php
Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::get('/categories/{categoryId}/barangs', [BarangController::class, 'barangsByCategory']);
Route::get('/load-more-barangs', [BarangController::class, 'loadMore']);
