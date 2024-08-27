<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\AuthController;


Route::middleware(['apikey'])->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::middleware(['apikey', 'auth.token'])->group(function () {
    Route::apiResource('cars', CarController::class);
    Route::apiResource('users', UserController::class);
    Route::apiResource('counts', CountController::class);
    Route::apiResource('maintenances', MaintenanceController::class);
});