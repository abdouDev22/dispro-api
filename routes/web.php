<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\MaintenanceController;

// Route pour la page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Routes API pour les ressources
Route::prefix('api')->group(function () {
    Route::apiResource('cars', CarController::class);
    Route::apiResource('users', UserController::class);
    Route::apiResource('counts', CountController::class);
    Route::apiResource('maintenances', MaintenanceController::class);
});
