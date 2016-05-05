<?php


class CommentsController extends \BaseController {


	public function showUserComments($id){

		$user = User::find($id);

		return View::make('comments.usercomments',['user' => $user]);
	}



	public function showCommentsByPostId(){
		

	 	$comments = Comment::all();

		$data = ['comments' => $comments];

		return View::make('users.account')->with($data);
	}


	public function showCommentsByUserId(){
		

	 	$comments = Comment::all();

		$data = ['comments' => $comments];

		return View::make('users.account')->with($data);
	}
	
	public function showCreate($id){



		return View::make('comments.create', ['id' => $id]);
	}


	public function commentNotFound(){

		return App::abort(404);
	}

	private function validateAndSave($comment, $post_id){

		// create the validator
	    $validator = Validator::make(Input::all(), Comment::$rules);

	    // attempt validation
	    if ($validator->fails()) {

	       Session::flash('errorMessage',"Unable to save Comment.");	

	       return Redirect::back()->withInput()->withErrors($validator);

	    } else {
	      
			$comment->comment = Input::get('comment');

			$comment->user_id = Auth::user()->id;

			$comment->post_id = $post_id;

			$comment->save();
			// return Redirect::action('PostsController@index');
			
			Session::flash('successMessage',"Comment was saved successfully.");

			Log::info('Log message', array('comment' => $comment->comment));
			
			return Redirect::action('PostsController@show', $post_id);
	    }

	}


	public function store($id){

		$post = Post::find($id);

		$post_id = $post->id;

		$comment = new Comment();

		return $this->validateAndSave($comment, $post_id);
		
	}


	public function update($id){


		$comment = Comment::find($id);

		$post_id = $comment->post_id;

		if(is_null($comment)){

			return $this->commentNotFound();
		}

		return $this->validateAndSave($comment, $post_id);

	}


	

	public function edit($id){

		$comment = Comment::find($id);

		if(is_null($comment)){

			return $this->commentNotFound();
		}

		return View::make('comments.editcomments',['comment' => $comment]);
		
	}

	
	public function destroy($id){
		
		
		$comment = Comment::find($id);

		if(is_null($comment)){

			Session::flash('errorMessage',"Comment was not found.");

		}
		

		$comment->delete();

		Session::flash('successMessage',"Comment was deleted successfully.");

		Log::info("The following comment was deleted: " . $comment->id);

		return Redirect::action('PostsController@index');
	}


}
