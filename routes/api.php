<?php

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/orders','App\Http\Controllers\ProductController@index')->name('get.index');
Route::get('/product','App\Http\Controllers\ProductController@listofproducts')->name('add.product');
Route::post('/myorder/{product_id}','App\Http\Controllers\MyorderController@indexorder')->name('add.order');
Route::get('/myorder','App\Http\Controllers\MyorderController@index')->name('index.myorder');

