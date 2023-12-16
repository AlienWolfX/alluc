<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\RentalController;

// Public API
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [ClientController::class, 'store']);
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
        Route::put('/cars/image/{id}', 'image');
        Route::patch('/cars/status/{id}', 'booked');
    });

    Route::controller(ClientController::class)->group(function () {
        Route::get('/clients', 'index');
        Route::get('/clients/{id}', 'show');
        Route::put('/clients/{id}', 'update');
        Route::delete('/clients/{id}', 'destroy');
    });
});

