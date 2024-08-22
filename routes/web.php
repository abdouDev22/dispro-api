<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
