<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SubCategoryController;
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
Route::apiResource('register',RegisterUserController::class);
Route::post('login', [LoginUserController::class, 'loginUser']);
Route::apiResource('cities', CitiesController::class);
//    ->middleware('auth:sanctum');
//    Route::apiResource('user/login',LoginUserController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('categories/{categoryID}/sub-categories', SubCategoryController::class);
Route::apiResource('sub-categories/{subCategoryID}/services', ServicesController::class);
Route::apiResource('orders', \App\Http\Controllers\OrderController::class);


