<?php

class UsersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

		return View::make('users.index')->with('users', $users) ;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return 'yeah';
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//Get data
		$userDetails = Input::all() ;

		//if($userDetails['token']){

			//return $userDetails['token'] ;

			//Validates
			$validator = Validator::make($userDetails, User::$rules, User::$messages) ;

			if ($validator->fails()) {

				return $validator->errors() ;

				//return App::abort(500, $validator->messages->all()) ;

			}
			else{

				$new_user = User::create(array(
					'username' => $userDetails['username'],
					'email' => $userDetails['email'],
					'password' => Hash::make($userDetails['password'])
				)) ;

				//Login user
				Auth::loginUsingId($new_user->id);

				return Redirect::route('users/'.$new_user->id) ;
			}
		//}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
