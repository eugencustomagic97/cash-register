<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function(){
    Route::post('/auth/check', \App\Http\Controllers\API\Auth\CheckAuthController::class);
    Route::post('/auth/logout', \App\Http\Controllers\API\Auth\LogoutController::class);
});

Route::post('/auth/register', \App\Http\Controllers\API\Auth\RegisterController::class);
Route::post('/auth/login', \App\Http\Controllers\API\Auth\LoginController::class);
