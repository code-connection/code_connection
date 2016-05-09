

@if(!Auth::check())
	<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	  	<div class="modal-dialog modal-sm">
	    	<div class="modal-content">
    			{{ Form::open(['action' => 'UserController@doLogin', 'method'=>'POST', 'class'=>'form-horizontal']) }}
				<div class="sign-in">
					<h2 class="sign-txt"><b>Log in below: </b></h2>
						
						{{ Form::email('email',null,['class'=> 'form-control',
						'placeholder'=>"Enter email"]) }}
						<br>
						{{ Form::password('password',['class'=> 'form-control', 'placeholder'=>"Enter password"]) }}
						<br>
						{{ Form::submit('Log In Here', ['id' => "sign-in-btn" ,'type'=> "submit" ,'name' =>'log-in' ,'value' => 'true', 'class' => "btn btn-default"]) }}
						{{ Form::close() }}
				</div>
				<p id='no-member'>Not a member?</p>
				<p class='sign-up-link'><a id='sign-up' href="{{{action('UserController@showUserCreate')}}}">Click to Sign Up!</a></p>
	    	</div>
	  	</div>
	</div>
@endif
<nav class="navbar navbar-default">
	<div class="container-fluid">
	    <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">

				@if(!Auth::check())
					<li><a class="nav-text" href="#" data-toggle="modal" data-target=".bs-example-modal-sm">Log In/Sign Up</a></li>
				@else

					<li><img src="/img/brand_icon.png" style="width: 35px; margin-top: 5px; margin-right: 5px;"></li>

					<li><a class="welcome-user">Welcome,{{Auth::user()->first_name}}!</a></li>

					<li class="dropdown dropdown-account">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage Account <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a class="nav-text" href="{{{ action('UserController@showUserAccount', Auth::id())}}}" >Your Account</a></li>

							<li><a class="nav-text" href="{{{ action('UserController@showChangePassword', Auth::id())}}}" >Change Password</a></li>

							<li><a class="nav-text" href="{{{ action('PostsController@showUserPosts', Auth::id()) }}}">Manage Posts</a></li>
		    
		    				<li><a class="nav-text" href="{{{action('CommentsController@showUserComments', Auth::id()) }}}">Manage Comments</a></li>
						</ul>
			        </li>
					
					<li><a class="nav-text" href="{{{ action('PostsController@index')}}}" >Home</a></li>

					<li><a class="nav-text" href="{{{ action('PostsController@create')}}}" >Create Post</a></li>

					<li><a class="nav-text" href="{{{ action('UserController@showGitMapTwitter')}}}" >Map</a></li>

					<li><a class="nav-text" href="{{{ action('PostsController@showAllPosts')}}}" >All Posts</a></li>

					<li><a class="nav-text" href="{{{ action('UserController@logOut') }}}" >Logout</a></li>


			</ul>
		 			  
			 		{{Form::open(['action' => 'PostsController@showAllPosts', 'method'=>'GET', 'class'=>'form-horizontal'])}}

			 			<div class='input-group'>
	                    <input type='text'class='form-control search-bar' placeholder="search by keyword" name="search" value="{{Input::get('search')}}">

	                    <div class="input-group-btn">

	                    	<button class="btn btn-navbar" type="submit"><i class="fa fa-search search-icon"></i></button>

	                    </div>

						</div>	

				 	{{Form::close()}}

				@endif
			     
	    </div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->

</nav>