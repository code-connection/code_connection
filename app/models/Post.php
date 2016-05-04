<?php

class Post extends BaseModel
{
    protected $table = 'posts';


    public static $rules = array(
	    'title'      => 'required|max:100',
	    'body'       => 'required|max:10000'
	);


	public static function orderPosts(){

		$posts = Post::with('user')->orderBy('created_at', 'DESC')->paginate(2);

		return $posts;

		
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
                return View::make('posts.allposts')->with('posts', $posts);
    }

    public function getAllLikes($search){

        return self::where('title', 'LIKE', "%search%")->orWhere('body', 'LIKE', "%search%")->orderby('created_at', 'ASC')->get();
    }


	public function comments(){

		return $this->hasMany('Comment');
	}


	public function user(){

		return $this->belongsTo('User');
	}


	public function setBodyAttribute($body){


		return $this->attributes['body'] = strip_tags($body);

	}

	public function setTitleAttribute($title){

		return $this->attributes['title'] = strip_tags($title);
		
	}

	

	public function isAuthor(User $user){

		return $this->user_id == $user->id;
	}
	
	
}

?>