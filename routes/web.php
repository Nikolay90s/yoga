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

Route::group([], function() {
	Route::get('/', 'IndexController@execute')->name('index');
	Route::get('/classes', 'ClassesController@execute')->name('classes');
        Route::get('/about', 'AboutController@execute')->name('about');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
	
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');