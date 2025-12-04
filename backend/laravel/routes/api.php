<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ResetPasswordController;
use App\Http\Controllers\Api\ForgotPasswordController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post("/register", [AuthController::class,"register"]);
Route::post("/login", [AuthController::class,"login"]);
Route::post('/password/forgot', ForgotPasswordController::class);
Route::post('/password/reset', [ResetPasswordController::class, 'reset']);


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [UserController::class,'showProfile']);
    Route::patch('/profile/update', [UserController::class,'updateProfile']);
    Route::delete('/profile', [UserController::class,'destroyProfile']);

    Route::post('/logout', [AuthController::class, 'logout']);
});
