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
Route::apiResource('category',CategoryController::class);
Route::apiResource('category/{id}/sub',[CategoryController::class,'showbyid']);
Route::apiResource('sub',SubCategoryController::class);
Route::apiResource('services',ServicesController::class);


