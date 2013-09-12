<?php

class DashboardController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'Dashboard@login');
	|
	*/

	public function index()
	{
		
		//Gets all infos for dashboard

		//Number of users
		$count_users = count(User::all()) ;

		return View::make('admin.index')->with('users', $count_users) ;
		
	}

}