<?php

class UserTableSeeder extends Seeder{


	public function run(){


		$user = new User();
		$user->first_name = 'Don';
		$user->last_name = 'Moore';
		$user->email = 'dmoore@codeup.com';
		$user->password = 'yanula20';
		$user->city = 'San Antonio';
		$user->state = 'TX';
		$user->image = '/img/don.jpeg';
		$user->save();


  

		$user2 = new User();
		$user2->first_name = $_ENV['USER_FIRST'];
		$user2->last_name = $_ENV['USER_LAST'];
		$user2->email = $_ENV['USER_EMAIL'];
		$user2->password = $_ENV['USER_PASS'];
		$user2->city = 'San Antonio';
		$user2->state = 'TX';
		$user2->image = '/img/ricardo1.jpeg';
		$user2->save();



		$user3 = new User();
		$user3->first_name = 'Trey';
		$user3->last_name = 'Sowers';
		$user3->email = 'treygvs1@hotmail.com';
		$user3->password = 'Connection531$';
		$user3->city = 'San Antonio';
		$user3->state = 'TX';
		$user3->image = '/img/trey.jpeg';
		$user3->save();




	}

}