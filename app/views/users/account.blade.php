
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
		 		 
			<h3 class="sign-placeholders">First Name</h3>
		    <textarea type="text" class="form-control form1"  name="first_name" aria-describedby="basic-addon1">{{$user->first_name}}</textarea>

		    <h3 class="sign-placeholders">Last Name</h3>
		    <textarea type="text" class="form-control form1"  name="last_name" aria-describedby="basic-addon1">{{$user->last_name}}</textarea>

		    <h3 class="sign-placeholders">Email</h3>
		    <textarea type="text" class="form-control form1"  name="email" aria-describedby="basic-addon1">{{$user->email}}</textarea>
		    <h3 class="sign-placeholders">City</h3>
            <textarea type="text" class="form-control form1"  name="city"  aria-describedby="basic-addon1">{{$user->city}}</textarea>
            <h3 class="sign-placeholders">State</h3>
            <textarea type="text" class="form-control form1"  name="state"  aria-describedby="basic-addon1">{{$user->state}}</textarea>

		    <br>
		    <button  id="edit-btn" type="submit" class="btn btn-default">Submit</button>
		{{Form::close()}}

		</div>  <!-- end col-md-8 -->

	</div>  <!-- end container -->
	
 	@stop

 	@section('bottom-script')
	 	
    @stop
