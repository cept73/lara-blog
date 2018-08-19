<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
Auth.Loginutes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PostController@index');
Route::get('post/{slug}', 'PostController@showPost');
Route::get('logout', 'Auth\LoginController@logout');

Auth::routes();

Route::group(['prefix' => 'backend'], function () {
    Voyager::routes();
});
