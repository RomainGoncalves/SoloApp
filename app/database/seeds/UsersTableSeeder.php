<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = array(
			array('username' => 'Romain', 'email' => 'goncalves.romain@gmail.com', 'password' => Hash::make('password'), 'level' => 1 )
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($users);
	}

}