<?php

use App\Http\Controllers\CitiesController;
use App\Http\Controllers\LoginCustomerController;
use App\Http\Controllers\RegisterCustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('cities', CitiesController::class);
//    ->middleware('auth:sanctum');
Route::apiResource('customer/register',RegisterCustomerController::class);
    Route::apiResource('customer/login',LoginCustomerController::class);

