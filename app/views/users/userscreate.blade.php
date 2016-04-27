@extends('layouts.master')


@section('top-script')

    <title>Create New User</title>

@stop


@section('content')
	<div class="sign-up-form container">	
		<div class="col-md-4 sign-up-txt"><h1 id="sign-up-direction">Sign Up</h1></div>
		<div class="col-md-8">	
    		 {{ Form::open(['action' => 'UserController@validateAndSaveNewUser', 'method'=>'POST', 'class'=>'form-horizontal']) }}
    			<h3 class="sign-placeholders">First Name</h3>
    		    <textarea type="text" class="form-control form1" name="first_name"  aria-describedby="basic-addon1"></textarea>
    		    <h3 class="sign-placeholders">Last Name</h3>
    		    <textarea type="text" class="form-control form1"  name="last_name"  aria-describedby="basic-addon1"></textarea>
    		    <h3 class="sign-placeholders">Email</h3>
    		    <textarea type="text" class="form-control form1"  name="email"  aria-describedby="basic-addon1"></textarea>
    		    <h3 class="sign-placeholders">Password</h3>
    		    <textarea type="password" class="form-control form1"  name="password"  aria-describedby="basic-addon1"></textarea>
    		     <h3 class="sign-placeholders">Confirm Password</h3>
    		    <textarea type="password" class="form-control form1" name="confirmPassword" aria-describedby="basic-addon1"></textarea>
    		    <button  id="profile-create" type="submit" class="btn btn-default">sign up</button>
    		{{Form::close()}}
		</div>
	</div>
@stop

@section('bottom-script')

@stop
	