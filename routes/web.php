<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ServicesController;
use App\Models\Category;
use App\Models\Cities;
use App\Models\Orders;
use App\Models\Services;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('admin.admin');
//});
//Route::get('/', function () {
//    return view('admin.tables',[
//        'cities' => Cities::all()
//    ]);
    Route::get('Dashboard', function () {
        return view('admin.home',[
            'cities' => Cities::all(),
            'users'=>User::all(),
            'services'=>Services::all(),
            'orders'=>Orders::all(),
            'categories'=>Category::all()

        ]);
});

    //***************************************   City   ************************************************************

Route::get('Cities', function () {
    return view('admin.cities',[
        'cities' => Cities::all()
    ]);
});
Route::get('{cityID}/edit',[CitiesController::class ,'create']);
Route::put('{cityID}/update', [CitiesController::class,'update']);
//Route::get('edit/{cityName}', [CitiesController::class,'create']);


//***************************************   Services   ************************************************************


Route::get('Services', function () {
    return view('admin.services',[
        'services' => Services::all()
    ]);
});
Route::get('{servicesID}/edit1',[ServicesController::class ,'create']);
Route::put('{servicesID}/update1', [ServicesController::class,'update']);



//***************************************   Users   ************************************************************


Route::get('Users', function () {
    return view('admin.users',[
        'users' => User::all()
    ]);
});
Route::get('{usersID}/edit2',[LoginUserController::class ,'create']);
Route::put('{usersID}/update2', [LoginUserController::class,'update']);


//***************************************   Orders    ************************************************************


Route::get('Orders', function () {
    return view('admin.orders',[
        'orders' => Orders::all()
    ]);
});
Route::get('{ordersID}/edit3',[OrdersController::class ,'create']);
Route::put('{ordersID}/update3', [OrdersController::class,'update']);


//***************************************   Sign in    ************************************************************

Route::post('SignIn',[AdminController::class,'store']);
Route::get('SignIn',[AdminController::class,'create']);

//Route::get('admin/{cities:slug}',[Admin::class,'show']);

//Route::get('admin',[Controlroller::class,'create']);

