<?php

Route::get('/', 'PublicController@index');
Route::get('/tours', 'PublicController@tours')->name('tours');
Route::get('/guides', 'PublicController@guides')->name('guides');

Route::get('/search', 'PublicController@search');

Route::get('/user-detail/{username}', 'PublicController@userdetails');
Route::get('/tour/{user_id}/{slug}', 'PublicController@tourdetails');

Route::post('/booking-request', 'PublicController@bookingRequest');


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
