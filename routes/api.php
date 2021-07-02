<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductApiController;
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

Route::get('/products',[ProductApiController::class,'index'] );
Route::get('/products/{id}',[ProductApiController::class,'show'] );
Route::get('/products/{name}',[ProductApiController::class,'showname'] );
Route::get('/products/{price}',[ProductApiController::class,'showprice'] );
Route::post('/products',[ProductApiController::class,'store'] );
Route::put('/products/{id}',[ProductApiController::class,'update'] );
Route::delete('/products/{id}',[ProductApiController::class,'destroy'] );


Route::prefix('v1')->group(function(){
    Route::prefix('auth')->group(function(){
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
    });
    });
  