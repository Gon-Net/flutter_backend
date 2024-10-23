<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('products',[ProductController::class, 'index']);
Route::post('products',[ProductController::class, 'store']);
Route::put('products/{propduct}',[ProductController::class, 'update']);
Route::delete('products/{propduct}',[ProductController::class, 'destroy']);

