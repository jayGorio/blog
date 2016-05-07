<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function(){
	Route::get('/dashboard', function(){
		return view('dashboard.index');
	});
	Route::resource('student', 'StudentController');
	Route::resource('reservation', 'ReservationController', ['except' => 'create']);

	Route::get('reservation/{id}/create', 
		['as' => 'reservation.create', 'uses' => 'ReservationController@create'
	]);
});

