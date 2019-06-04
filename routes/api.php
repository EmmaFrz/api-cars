<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cars','CarController@all');
Route::get('/cars/{id}','CarController@searchOne');
Route::post('/cars/create','CarController@create');
Route::put('/cars/update/{id}','CarController@update');
Route::delete('/cars/delete/{id}','CarController@delete');
