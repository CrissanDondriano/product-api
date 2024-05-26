<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;


//Route::post('/login', [AuthController::class, 'login']);
//Route::post('/register', [AuthController::class, 'register']);

Route::get('/products', [ProductController::class, 'index']);
Route::post('/newProducts', [ProductController::class, 'store']);
Route::get('/getProducts/{id}', [ProductController::class, 'show']);
Route::put('/update/Products/{id}', [ProductController::class, 'update']);
Route::delete('/deleteProducts/{id}', [ProductController::class, 'destroy']);
Route::get('/searchProducts/{title}', [ProductController::class, 'search']);