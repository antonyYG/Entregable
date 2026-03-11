<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// 1. RUTAS PÚBLICAS (Sin middleware auth:api)
Route::post('auth/login', [AuthController::class, 'login']);

// 2. RUTAS PROTEGIDAS (Solo accesibles con un Token válido)
Route::middleware('auth:api')->group(function () {
    Route::post('auth/logout', [AuthController::class, 'logout']);
    Route::post('auth/refresh', [AuthController::class, 'refresh']);
    Route::post('auth/me', [AuthController::class, 'me']);
});
