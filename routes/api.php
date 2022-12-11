<?php

use App\Http\Controllers\CallusController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\EditName;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\MainOrdersController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UsageController;
use App\Http\Controllers\UsagePolicyController;
use App\Http\Controllers\UserOrdersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SubCategoryController;
use App\Models\UsagePolicy;
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
//    Route::apiResource('user/login',LoginUserController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('categories/{categoryID}/sub-categories', SubCategoryController::class);
Route::apiResource('sub-categories/{subCategoryID}/services', ServicesController::class);
Route::apiResource('services/{servicesID}/orders', OrdersController::class);
Route::apiResource('user/{userID}/orders', UserOrdersController::class);
Route::apiResource('orders', MainOrdersController::class);
Route::apiResource('policy', UsagePolicyController::class);
Route::apiResource('aboutUs', UsageController::class);
Route::apiResource('team', TeamController::class);
Route::apiResource('callUs', CallusController::class);
Route::apiResource('suggestion', SuggestionController::class);
Route::apiResource('complaint', ComplaintController::class);
Route::apiResource('setting', SettingsController::class)
    ->middleware('auth:sanctum');
Route::put('user/{id}/edit', [RegisterUserController::class,'update']);











