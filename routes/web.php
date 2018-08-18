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

Route::get('/', function () {
    $posts = App\Post::all();
    return view('home', compact('posts'));
});

Route::get('post/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
	return view('post', compact('post'));
});

Route::get('user/{name?}', function($name = null)
{
    return $name;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'backend'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
