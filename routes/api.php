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

Route::namespace('api')->group(function () {
    Route::prefix('curators')->group(function () {
        Route::get('{curator_id}', 'CuratorController@show');
        Route::get('/', 'CuratorController@index');
    });
    Route::prefix('clips')->group(function () {
        Route::get('{clip_id}', 'ClipController@show');
        Route::get('/', 'ClipController@index');
    });
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
