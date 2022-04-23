<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\ReservationController;
use App\Http\Controllers\Api\TripController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Authentication
Route::post('login', LoginController::class);

    Route::middleware('auth:api')->group(function () {

        // -------------------- reservations --------------------------------
        Route::post('reservations/store', [ReservationController::class, 'store']);

        // -------------------- trips --------------------------------
        Route::get('trips', [TripController::class, 'index']);

        // Route::post('test', function () {
        //     dd(Auth::user());
        // });
    });
