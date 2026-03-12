<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;

Route::middleware(['auth','role:Admin'])->group(function () {

    Route::resource('user', UserController::class);
    Route::resource('report', ReportController::class);

});
