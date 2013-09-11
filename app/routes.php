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

Route::get('/', function()
{
	return View::make('home');
});

Route::get('login', array('as' => 'login', function(){

	return View::make('login');

}));

//Apply auth filter to all routes in admin
Route::group(array('before' => 'auth'), function(){

	Route::get('admin', array('as' => 'admin', function(){
		return View::make('admin.index') ;
	}));
	Route::get('admin/settings', array('as' => 'settings', function(){
		return View::make('admin.settings') ;
	}));

});