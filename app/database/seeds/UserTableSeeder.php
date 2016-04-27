<?php

class UserTableSeeder extends Seeder{


	public function run(){

		$user = new User();
		$user->first_name = $_ENV['USER_FIRST'];
		$user->last_name = $_ENV['USER_LAST'];
		$user->email = $_ENV['USER_EMAIL'];
		$user->password = $_ENV['USER_PASS'];
		$user->city = 'San Antonio';
		$user->state = 'TX';
		$user->save();

		$user2 = new User();
		$user2->first_name = 'Richard';
		$user2->last_name = 'De Los Santos';
		$user2->email = 'RichardDeLosSantos1292@gmail.com';
		$user2->password = 'DelosSantos0712';
		$user2->city = 'San Antonio';
		$user2->state = 'TX';
		$user2->save();



	}

}