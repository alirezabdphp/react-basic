<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\UserController;
use App\Http\Controllers\Api\ProductController;

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

Route::post('store-user', [UserController::class, 'store']);
Route::post('login-user', [UserController::class, 'login']);


Route::middleware('auth:sanctum')->group(function (){
    Route::get('check-login', [UserController::class, 'checkLogin']);
    Route::post('logout-user', [UserController::class, 'logOut']);
});

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


//Route::post('product/store', [ProductController::class, 'store']);
//Route::get('products', [ProductController::class, 'index']);
//Route::post('products/delete/{product_uuid}', [ProductController::class, 'destroy']);
