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

Route::prefix('getfacebooktoken')->group(function() {
    Route::get('/', 'GetFacebookTokenController@index')->name('getfacebooktoken.index');

    Route::get('/redirect', 'GetFacebookTokenController@getToken')->name('getfacebooktoken.redirect');

    Route::get('/token', 'GetFacebookTokenController@show')->name('getfacebooktoken.show');
});
