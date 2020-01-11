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

use Illuminate\Support\Facades\Route;

Route::view('clips', 'clips.index');
Route::view('clip/1', 'clips.show');

Auth::routes();

Route::namespace('Site')->group(function () {
    Route::post('/login', 'HomeController@login')->name('login');

    Route::get('/', 'HomeController@home')->name('home');
});
