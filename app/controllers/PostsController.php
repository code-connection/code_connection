<?php

class PostsController extends \BaseController {


	public function showUserPosts($id){

		$user = User::find($id);

		return View::make('posts.userposts',['user' => $user]);
	}


	public function __construct(){
		//index - method name
		$this->beforeFilter('auth', array('except' => array('index','show')));
		$this->beforeFilter('edit', array('only' => array('edit')));

	}
	


	public function index(){

		$posts = Post::with('User')->paginate(2);


                $search = Input::get('search');
                // creating conditional for search bar at the bottom
                if (is_null($search))
                {

                    $posts = Post::with('User')->orderBy('created_at', 'desc')->paginate(2);

                } else {
                    $posts = Post::with('User')->where('title', 'LIKE', "%$search%")->orWhere('body', 'LIKE', "%$search%")->
                        orderBy('created_at', 'asc')->paginate(2);
                }
                return View::make('posts.index')->with('posts', $posts);
    }

    public function getAllLikes($search){

        return self::where('title', 'LIKE', "%search%")->orWhere('body', 'LIKE', "%search%")->orderby('created_at', 'ASC')->get();
    }

	
	public function create()
	{
		return View::make('posts.create');
	}


	
	public function store()
	{

		$post = new Post();

		return $this->validateAndSave($post);
		
	}


	public function postNotFound(){

		return App::abort(404);
	}

	
	public function update($id)
	{

		$post = Post::find($id);

		if(is_null($post)){

			return $this->postNotFound();
		}

		return $this->validateAndSave($post);

	}
	
	public function show($id){

		$post = Post::find($id);

		if(is_null($post)){

			return $this->postNotFound();
		}

		return View::make('posts.show',['post' => $post]);
	}


	public function edit($id)

	{

		$post = Post::find($id);

		if(is_null($post)){

			return $this->postNotFound();
		}

		return View::make('posts.edit',['post' => $post]);
		
	}
	

	private function validateAndSave($post){

		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {

	       Session::flash('errorMessage',"Unable to save post.");	

	       return Redirect::back()->withInput()->withErrors($validator);

	    } else {
	      
			$post->title = Input::get('title');

			$post->body = Input::get('body');

			$post->user_id = Auth::user()->id;

			$post->save();
			
			
			Session::flash('successMessage',"Post was saved successfully.");

			Log::info('Log message', array('title' => $post->title, 'body' => $post->body));
			
			return Redirect::action('PostsController@show',$post->id);
	    }

	}
	

	public function destroy($id){
		
		$post = Post::find($id);

		if(is_null($post)){

			Session::flash('errorMessage',"Post was not found.");

		}


		foreach($post->comments as $comment){

			$comment->delete();
		}
			

        $post->delete();

		Session::flash('successMessage',"Post was deleted successfully.");

		Log::info("The following post was deleted: " . $post->id);

		return Redirect::action('PostsController@index');
	}


}
