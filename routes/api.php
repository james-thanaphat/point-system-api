<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\LoginMiddleware;
use App\Http\Controllers\ProductController;


Route::middleware([LoginMiddleware::class])->post('login', [AuthController::class, 'login']);

Route::middleware(['auth'])->group(function () { // route private
    Route::get('/products', [ProductController::class, 'lists']);
});
