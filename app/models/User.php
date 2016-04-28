<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	//login rules below
	public static $rules = array(
	    'email'      => 'required',
	    'password'   => 'required'
	);

	public static $changePasswordRules = array(

	    'password'      => 'required',
	    

	);

	public static $newUserRules = array(

		'first_name' => 'required',
		'last_name' => 'required',
		'email' => 'required',
	    'password'      => 'required|confirmed',
	    'city'      => 'required',
	    'state'   => 'required'
	);

	public static $editUserRules = array(

		'first_name' => 'required',
		'last_name' => 'required',
		'email' => 'required',
		'city'      => 'required',
	    'state'   => 'required'
	);


	const ADMIN  = 1;

	const STANDARD = 2;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');



	public function setPasswordAttribute($value)

	{
	    $this->attributes['password'] = Hash::make($value);
	}



	public function isStandard(){

		return $this->role_id == User::STANDARD;
	}

	/**
	 * 'Post' refers to the Post Model
	 *
	 *
	 */
	public function posts(){

		return $this->hasMany('Post');
	}


	/**
	 * 'Comment' refers to the Comment Model
	 *
	 *
	 */
	public function comments(){

		return $this->hasMany('Comment');
	}

}
