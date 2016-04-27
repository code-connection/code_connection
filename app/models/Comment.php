<?php

class Comment extends BaseModel
{
    protected $table = 'comments';


    public static $rules = array(

	    'comment'  => 'required|max:10000',
	    
	);


	public static function orderComments(){

		$comments = Comment::with('user')->orderBy('created_at', 'DESC')->paginate(2);

		return $comments;

		
	}


	public function setCommentAttribute($comment){


		$this->attributes['comment'] = strip_tags($comment);

	}



	public function getCommentAttribute($comment){


		return strtolower($comment);

	}


	public function user(){

		return $this->belongsTo('User');


	}

	public function post(){

		return $this->belongsTo('Post');
	}
}

?>