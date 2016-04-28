<?php

class UserController extends BaseController {


	public function showGitMapTwitter(){

		return View::make('users.gitmaptwitter');

	}

	public function avatarUpload(){

		if (Input::hasFile('image'))
		{
			//object, not string or number like 'get'
			$image = Input::file('image');
			//temp folder to file system on server where app is running
            $image->move(public_path('/img'),$image->getClientOriginalName());
            $user->image = "/img/{$image->getClientOriginalName()}";
            $user->save();
            return Redirect::action('PostsController@index');
    	}
	}


	private function userNotFound(){

		return App::abort(404);
	}

	public function __construct(){

		$this->beforeFilter('auth',array('except' => array('index','showUserCreate','doLogin','showLogin','edit','logout','create','store','update')));
		$this->beforeFilter('admin',array('except' => array('doLogin','showLogin','edit','logout','create','store','update')));
		$this->beforeFilter('edit_user',array('except' => array('doLogin','showLogin','edit','logout','create','store','update')));
	}

	public function doLogin(){

	   	$validator = Validator::make(Input::all(), User::$rules);

	   	if ($validator->fails()){

			return Redirect::back()->withInput()->withErrors($validator);

	   	}


	  	 if(Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))){
	  	 	//to index
	   		return Redirect::intended('/posts');

	  	}


	  	else{

	   		Session::flash('errorMessage', 'Your email or password was not correct');

	   		return Redirect::back()->withInput();
	  	}

	}

	public function logOut(){

	    Auth::logout();

	    return Redirect::action('posts.index');
	}
	
	public function showUserCreate(){

	     return View::make('users.userscreate');
	}


	public function validateAndSaveNewUser (){
		
	    $validator = Validator::make(Input::all(), User::$newUserRules);

	    if ($validator->fails()) {

	       Session::flash('errorMessage','All fields must be filled in.');	

	       return Redirect::back()->withInput()->withErrors($validator);

	    } else {
	      
	      	$user = new User();

			$user->first_name = Input::get('first_name');

			$user->last_name = Input::get('last_name');

			$user->email = Input::get('email');

			$user->city = Input::get('city');

			$user->state = Input::get('state');

			//hashing where?
			$password1 = Input::get('password');

			$password2 = Input::get('confirmPassword');
			

			if($password1 == $password2){

				$user->password = $password1;

				$user->save();

				Session::flash('successMessage','Account creation successful. Thank you.');

				return Redirect::action('UserController@showUserAccount', $user->id);


			} else{


				Session::flash('errorMessage','Account creation was unsuccessful.');

				return Redirect::action('UserController@showUserCreate');

			}
			
			
	    }

	}


	public function showUserAccount(){

		$user = Auth::user();

	     return View::make('users.account')->with('user', $user);
	}


	public function validateEditAndSaveUserAccount($user){

		
	    $validator = Validator::make(Input::all(), User::$editUserRules);

	   
	    if ($validator->fails()) {

	       Session::flash('errorMessage','All fields must be filled in.');	

	       return Redirect::back()->withInput()->withErrors($validator);

	    } else {
	      
	      	$user->first_name = Input::get('first_name');

	      	$user->last_name = Input::get('last_name');

	      	$user->email = Input::get('email');

	      	$user->city = Input::get('city');

			$user->state = Input::get('state');

	      	$user->save();

	      	return Redirect::action('PostsController@index');
			
	    }

	}
	  

	public function editUserAccount($id){

		$user = User::find($id);

		if(is_null($user)){

			return $this->userNotFound();
		}

		return $this->validateEditAndSaveUserAccount($user);
	}	 

	private function validateAndSavePassword ($user){

		// create the validator
	    $validator = Validator::make(Input::all(), User::$changePasswordRules);

	    // attempt validation
	    if ($validator->fails()) {

	       Session::flash('errorMessage','Password change has failed.');	

	       return Redirect::back()->withInput()->withErrors($validator);

	    } else {
	      
			$password1 = Input::get('password');

			$password2 = Input::get('confirmPassword');
			

			if($password1 == $password2){


				$user->password = $password1;

				$user->save();

				Session::flash('successMessage','Password was changed successfully.');

				return Redirect::action('UserController@showUserAccount', $user->id);


			} else{


				Session::flash('errorMessage','Passwords do not match. Try again, please.');

				return Redirect::action('UserController@showChangePassword');

			}
			
			
	    }

	}



	public function showChangePassword($id){

		$user = User::find($id);

		return View::make('users.changePassword')->with('user', $user);
		// return View::make('users.changePassword')->with([ "user" => $user]);
	   
	}

	public function doChangePassword($id){

		$user = User::find($id);

		if(is_null($user)){

			return $this->userNotFound();
		}

		return $this->validateAndSavePassword($user);
	}

	public function showIndex()
	{
		return View::make('users.index');
	}	   

}
