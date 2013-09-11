<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $fillable = array('username', 'email', 'password');

	//Validation rules for registering user
	public static $rules = array(
		'username' 	=> 	'required|unique:users,username|alpha_num',
		'email'		=>	'required|unique:users,email|email',
		'password'	=>	'required|confirmed'
		);

	//Validation rules for updating user
	public static $rules_update = array(
		'username' 	=> 	'required|alpha_num',
		'email'		=>	'required|email',
		'password'	=>	'confirmed'
		);

	public static $messages = array(

		'username.required' 	=> 	'You need to enter a username.',
		'email.required' 		=> 	'You need to enter an e-mail.',
		'password.required' 	=> 	'You need to enter a password.',
		'username.unique' 		=> 	'This username is already used.',
		'email.unique' 			=> 	'This e-mail is already used.',
		'alpha_num'				=>	'Your username can only contain letters and numbers.',
		'confirmed'				=>	'The password you entered do not match.',
		'email'					=>	'The e-mail address entered is not in a correct format.'

		);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}