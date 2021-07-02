<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductController;
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

Route::get('/products',[ProductController::class,'index'] );
Route::get('/',[ProductController::class,'home'] );
Route::get('/explore',[ProductController::class,'explore'] );
Route::get('/becomeseller',[ProductController::class,'becomeseller'] );
Route::get('/becomeuser',[ProductController::class,'becomeuser'] );
Route::get('/login',[ProductController::class,'login'] );
Route::get('/produk',[ProductController::class,'produk'] );
Route::get('/category',[ProductController::class,'category'] );


Route::get('/products/tambah',[ProductController::class,'tambah'] );
Route::post('/products',[ProductController::class,'store'] );
Route::get('/products/{id}/edit',[ProductController::class,'edit'] );
Route::put('/products/{id}',[ProductController::class,'update'] );
Route::delete('/products/{id}',[ProductController::class,'destroy'] );
