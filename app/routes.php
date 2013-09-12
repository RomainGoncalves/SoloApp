<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', function()
{
	return View::make('home');
}) );

Route::get('login', array('as' => 'postLogin', function(){

	return View::make('login');

}));

Route::post('login', array('as' => 'login', 'uses' => 'AuthController@login') ) ;

Route::get('logout', array('as' => 'logout', 'uses' => 'AuthController@logout'));

Route::get('register', array('as' => 'register', function(){

	return View::make('register');

}));

//Apply auth filter to all routes in admin
Route::group(array('before' => 'auth'), function(){

	Route::get('admin', array('as' => 'admin', 'uses' => 'DashboardController@index'));
	Route::get('admin/settings', array('as' => 'settings', function(){
		return View::make('admin.settings') ;
	}));

});

Route::resource('users', 'UsersController');