<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\RentalController;

// Public API
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [ClientController::class, 'store'])->name('clients.store');
Route::controller(CarController::class)->group(function () {
    Route::get('/cars', 'index');
    Route::get('/cars/{id}', 'show');
});


// Private API
Route::middleware('auth:sanctum')->group(function() {

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::apiResource('/rentals', RentalController::class);

    Route::controller(CarController::class)->group(function () {
        Route::post('/cars', 'store')->name('cars.store');
        Route::delete('/cars/{id}', 'destroy')->name('cars.destroy');
        Route::put('/cars/{id}', 'update')->name('cars.update');
        Route::put('/cars/image/{id}', 'image')->name('cars.image');
    });

    Route::controller(ClientController::class)->group(function () {
        Route::get('/clients', 'index')->name('clients.index');
        Route::get('/clients/{id}', 'show')->name('clients.show');
        Route::put('/clients/{id}', 'update')->name('clients.update');
        Route::delete('/clients/{id}', 'destroy')->name('clients.destroy');
    });

    // User-specific update image
    Route::put('/profile/image', [ProfileController::class, 'image']);
});


