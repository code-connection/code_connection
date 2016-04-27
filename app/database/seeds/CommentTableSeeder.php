<?php

class CommentTableSeeder extends Seeder {

	public function run()
	{
		$comment = new Comment();
		$comment->comment = 'Still waiting to hear from you techies out there.';
		$comment->post_id = Post::first()->id;
		$comment->user_id = User::first()->id;
		$comment->save();


		$comment2 = new Comment();
		$comment2->comment = 'Is it cool to leave my e-mail here?';
		$comment2->post_id = Post::all()->random()->id;
		$comment2->user_id = User::first()->id;
		$comment2->save();


		$comment3 = new Comment();
		$comment3->comment = 'Any meetups coming up this weekend in SA?';
		$comment3->post_id = Post::all()->random()->id;
		$comment3->user_id = User::first()->id;
		$comment3->save();
	}

}