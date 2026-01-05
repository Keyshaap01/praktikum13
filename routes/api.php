<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Di sini tempat mendaftarkan semua route API aplikasi.
| Route yang didefinisikan akan otomatis menggunakan prefix /api
| dan middleware "api".
|--------------------------------------------------------------------------
*/

// Route default (opsional, bawaan Laravel)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route REST API Product
Route::apiResource('products', ProductController::class);
