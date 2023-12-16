<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RentalController;

// Public API
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::controller(CarController::class)->group(function () {
    Route::get('/cars', 'index');
    Route::get('/cars/{id}', 'show');
});


// Private API
Route::middleware('auth:sanctum')->group(function() {

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::apiResource('/rentals', RentalController::class);

    Route::controller(CarController::class)->group(function () {
        Route::post('/cars', 'store');
        Route::delete('/cars/{id}', 'destroy');
        Route::patch('/cars/status/{id}', 'booked');
    });
});

