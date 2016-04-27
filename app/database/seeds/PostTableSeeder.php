<?php

class PostTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		$post = new Post();
		$post->title = 'Junior developer just moved to SA. Where are the techies out there?';
		$post->body = 'I know a good spot for a meetup. Good beer and wings too!';
		$post->user_id = User::first()->id;
		$post->save();

		
		$post2 = new Post();
		$post2->title = 'Anybody have the inside scoop on the corporate culture here in SA?';
		$post2->body = 'I would really like to here from someone who knows the tech environment in downtown SA.';
		$post2->user_id = User::first()->id;
		$post2->save();


		$post3 = new Post();
		$post3->title = 'Need Lisp programmer ASAP.';
		$post3->body = 'Does anyone know where I can find a Lisp coder. Any experience level would be great.';
		$post3->user_id = User::first()->id;
		$post3->save();
	}

}
