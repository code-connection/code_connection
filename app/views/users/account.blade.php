
@extends('layouts.master')

	 <title>Accounts Page</title>

    @section('top-script')
   
    @stop

  	@section('content')

	<div class="account-form container">

		<div class="col-md-4 account-txt">
			
			<div class = "form-group">
	                        
				<div id="account-pic">


				{{ Form::model(Auth::user(), array('action' => array('UserController@avatarUpload', Auth::id()),'files' =>true, 'method' => 'PUT')) }}

				@if (Auth::user()->image)

                        <img class='image' src="{{{ Auth::user()->image}}}" heigth='160' width='160'>

                @else

                		<img class='image' src="{{ '/img/mole1.jpg' }}" heigth='160' width='160'>

                @endif


					{{ Form::label('image', 'Select an Avatar.') }}
					
	                {{ Form::file('image') }}
	            </div>
	            <br>
	            <br>

                @if ($errors->has('image'))
                	<p>{{$errors->first('image')}}</p>
                @endif
			</div>
			
			<h1 id="account-direction">Account</h1>
			
			<h4 class="account-info">Made a mistake putting in your information?
				No Worries! We've got you covered.</h4>
		    <div class='line'></div>
	      	<h4 class="account-info"> Step 1. On your right, you will see your original information. To 
	 			make a change, just type in the fields you wish to correct.
	 		</h4>

	 	    <div class='line'></div>	

	 		<h4 class="account-info"> Step 2. Review Your changes. Are they correct?</h4>
			<div class='line'></div>
	 		<h4 class="account-info"> Step 3. Just click on the submit button. You have
	 			now officially edited your information.</h4>
	 		</div>
	 	    <div class='line'></div>

	 	<br>  
	 	<br>
	 	<br> 
	 	<br> 

		<div class="col-md-8">

		{{ Form::open(array('action' => array('UserController@editUserAccount', $user->id), 'method' => 'POST', 'class' => 'form-horizontal')) }} 
		 		 
			{{ Form::label('first name', 'First name') }}
		{{ Form::text('first_name', null,['class'=> 'form-control']) }}
		@if ($errors->has('first_name'))
		<p>{{$errors->first('first_name')}}</p>
		@endif

		{{ Form::label('last_name', 'Last Name') }}
		{{ Form::text('last_name', null,['class'=> 'form-control', 'placeholder'=>"put what you like"]) }}
		@if ($errors->has('last_name'))
		<p>{{{$errors->first('last_name')}}}</p>
		@endif

		{{ Form::label('email', 'Email') }}
		{{ Form::text('email', null,['class'=> 'form-control', 'placeholder'=>"put what you like"]) }}
		@if ($errors->has('email'))
		<p>{{{$errors->first('email')}}}</p>
		@endif
	
		{{ Form::label('city', 'City') }}
		{{ Form::text('city', null,['class'=> 'form-control', 'placeholder'=>"put what you like"]) }}
		@if ($errors->has('city'))
		<p>{{{$errors->first('city')}}}</p>
		@endif

		{{ Form::label('state', 'State') }}
		{{ Form::text('state', null,['class'=> 'form-control', 'placeholder'=>"put what you like"]) }}
		@if ($errors->has('state'))
		<p>{{{$errors->first('state')}}}</p>
		@endif
		
		<br>
		<a href="{{{action('UserController@showChangePassword')}}}">Change Password</a>
		<br>
		<br>
		<div class = "form-group">
			{{ Form::label('image', 'Image') }}
			{{ Form::file('image') }}
		</div>
		@if ($errors->has('image'))
		<p>{{$errors->first('image')}}</p>
		@endif
		<button type="submit" class="btn btn-default" name="save" value="save">update</button>
		{{Form::close()}}

		

		</div>  <!-- end col-md-8 -->

	</div>  <!-- end container -->
	
 	@stop

 	@section('bottom-script')
	 	
    @stop
