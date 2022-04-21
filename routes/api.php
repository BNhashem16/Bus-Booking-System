<?php

use App\Http\Controllers\Api\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Authentication
Route::post('login', LoginController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::middleware('auth:api')->group(function () {
        Route::post('test', function () {
            dd(Auth::user());
        });
    });
