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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function(){
	Route::get('/', function () {
        return view('admin/index');
    });
});

Route::group(['prefix' => 'guide',  'middleware' => 'auth'], function(){
	Route::get('/', function () {
        return view('guide/index');
    });
});

Route::group(['prefix' => 'user',  'middleware' => 'auth'], function(){
	Route::get('/', function () {
        return view('user/index');
    });
});

Route::get('/detail', function () {
    return view('details');
});
