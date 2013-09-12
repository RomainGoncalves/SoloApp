<?php

class AuthController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'AuthController@login');
	|
	*/

	public function login()
	{
		//Get values
		$username = Input::get('username');
		$password = Input::get('password');
		//Check if user exists
		if(Auth::attempt(array('username' => $username, 'password' => $password))){

			//User automatically logged in
			//Redirect to User page
			return Redirect::route('users.show', Auth::user()->id) ;
		}
		
	}

}