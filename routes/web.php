<?php

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

Route::view('/', 'home')->name('home');

Route::prefix('oauth')->middleware('guest')->group(function () {
    Route::get('login', 'OauthController@login')->name('oauth.login');
    Route::get('consume', 'OauthController@consume')->name('oauth.consume');
});
