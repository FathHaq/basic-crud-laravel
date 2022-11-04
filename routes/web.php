<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class,'index']);
Route::get('/create', [ProductController::class,'create']);
Route::post('/create', [ProductController::class,'store']);
Route::get('/{id}/edit', [ProductController::class,'edit']);
Route::put('/{id}', [ProductController::class,'update']);
Route::delete('/{id}', [ProductController::class,'destroy']);
