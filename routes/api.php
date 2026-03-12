<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\UserApiController;
// 1. RUTAS PÚBLICAS (Sin middleware auth:api)
Route::post('auth/login', [AuthController::class, 'login']);
Route::post('register', [UserApiController::class, 'registro']);

// 2. RUTAS PROTEGIDAS (Solo accesibles con un Token válido)
Route::middleware('auth:api')->group(function () {
    Route::post('auth/logout', [AuthController::class, 'logout']);
    Route::post('auth/refresh', [AuthController::class, 'refresh']);
    Route::post('auth/me', [AuthController::class, 'me']);
    Route::post('report', [UserApiController::class, 'createReport']);
    Route::get('report', [UserApiController::class, 'listarReports']);
    Route::get('mapa', [UserApiController::class, 'ubicacionMapa']);
});
