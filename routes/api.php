<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\api\StaffController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\RentalController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\ProfileController;

// Public API (dili na need mag login)
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [ClientController::class, 'store'])->name('clients.store');
Route::controller(CarController::class)->group(function () {
    Route::get('/cars', 'index');
    Route::get('/cars/{id}', 'show');
});


// Private API for Staff (need mag login)
Route::middleware('auth:sanctum')->group(function() {

    Route::get('/logout', [AuthController::class, 'logout']);

    // Client dapat ang maka login
    Route::controller(RentalController::class)->group(function () {
        Route::get('/rentals/{id}', 'show')->name('rentals.show');
        Route::post('/rentals', 'store')->name('rentals.store');
    });

    Route::controller(PaymentController::class)->group(function () {
        Route::post('/payments', 'store')->name('payments.store');
    });

    // Staff dapat ang maka login
    Route::controller(CarController::class)->group(function () {
        Route::post('/cars', 'store')->name('cars.store');
        Route::delete('/cars/{id}', 'destroy')->name('cars.destroy');
        Route::put('/cars/{id}', 'update')->name('cars.update');
        Route::put('/cars/image/{id}', 'image')->name('cars.image');
    });

    Route::controller(RentalController::class)->group(function () {
        Route::get('/rentals', 'index')->name('rentals.index');
        Route::put('/rentals/{id}', 'update')->name('rentals.update');
        Route::delete('/rentals/{id}', 'destroy')->name('rentals.destroy');
    });

    Route::controller(PaymentController::class)->group(function () {
        Route::get('/payments', 'index')->name('payments.index');
    });

    // Admin dapat ang maka login
    Route::controller(StaffController::class)->group(function () {
        Route::get('/staff', 'index')->name('staff.index');
        Route::get('/staff/{id}', 'show')->name('staff.show');
        Route::post('/staff', 'store')->name('staff.store');
        Route::put('/staff/{id}', 'update')->name('staff.update');
        Route::delete('/staff/{id}', 'destroy')->name('staff.destroy');
    });

    // Admin dapat ang maka login
    Route::controller(ClientController::class)->group(function () {
        Route::get('/clients', 'index')->name('clients.index');
        Route::get('/clients/{id}', 'show')->name('clients.show');
        Route::put('/clients/{id}', 'update')->name('clients.update');
        Route::delete('/clients/{id}', 'destroy')->name('clients.destroy');
    });


    // User-specific update image
    Route::put('/profile/image', [ProfileController::class, 'image']);
    Route::get('/profile/show', [ProfileController::class, 'show']);
});


