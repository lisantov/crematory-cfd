<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post("register", [AuthController::class,"register"]);
Route::post("login", [AuthController::class,"login"]);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [UserController::class,'showProfile']);
    Route::patch('/profile/update', [UserController::class,'updateProfile']);
    Route::delete('/profile', [UserController::class,'destroyProfile']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
