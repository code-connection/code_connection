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