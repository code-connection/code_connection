@extends('layouts.master')


@section('top-script')
    <style>
    body {
        background-color: #f2f2f2;
    }

    </style>
    <title>Create New User</title>

    <style>
        .btn {
            background-color:#23475f;
            color:#F1F1F1;
            left: 40%;
            position:relative;
        }
        
        .btn:hover {
            background-color:#6C8096;
            color:#F1F1F1;
            -webkit-transition: all 500ms ease;
            -moz-transition: all 500ms ease;
            -ms-transition: all 500ms ease;
            -o-transition: all 500ms ease;
            transition: all 500ms ease;
        }
    </style>

@stop


@section('content')
<<<<<<< HEAD
	<div class="sign-up-form container">	
		<div class="col-md-4 sign-up-txt"><h1 id="sign-up-direction">Sign Up</h1></div>
		<div class="col-md-8">	
    		 {{ Form::open(['action' => 'UserController@validateAndSaveNewUser', 'method'=>'POST', 'class'=>'form-horizontal']) }}
    			<h3 class="sign-placeholders">First Name:</h3>
    		    <textarea type="text" class="form-control form1" name="first_name"  aria-describedby="basic-addon1" placeholder="Enter Your First Name"></textarea>
    		    <h3 class="sign-placeholders">Last Name:</h3>
    		    <textarea type="text" class="form-control form1"  name="last_name"  aria-describedby="basic-addon1" placeholder="Enter Your Last Name"></textarea>
    		    <h3 class="sign-placeholders">Email:</h3>
    		    <textarea type="text" class="form-control form1"  name="email"  aria-describedby="basic-addon1" placeholder="Enter Your Email Address"></textarea>
    		    <h3 class="sign-placeholders">Password:</h3>
    		    {{ Form::password('password',['class'=> 'form-control', 'placeholder'=>"Enter Your Password"]) }}
    		     <h3 class="sign-placeholders">Confirm Password:</h3>
    		    {{ Form::password('password',['class'=> 'form-control', 'placeholder'=>"Confirm Your Password"]) }}
    		    <button  id="profile-create" type="submit" class="btn btn-default">sign up</button>
    		{{Form::close()}}
		</div>
	</div>
=======
<br>

<div class="container">

  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-primary">
        <div class="panel-heading hello">
          <h3 class="panel-title">Create an Account</h3>
        </div>
        <div class="panel-body">

      {{ Form::open(['action' => 'UserController@validateAndSaveNewUser', 'method'=>'POST', 'class'=>'form-horizontal']) }}

            <h4 class='basic-info'>Basic Info</h4>

            <div class="form-group ">
              <label for="first_name" class="control-label col-sm-3">First Name</label>
              <div class="col-sm-6">
                <input class="form-control" required="required" name="first_name" type="text" id="first_name">
                
              </div>
            </div>

            <div class="form-group ">
              <label for="last_name" class="control-label col-sm-3">Last Name</label>
              <div class="col-sm-6">
                <input class="form-control" required="required" name="last_name" type="text" id="last_name">
                
              </div>
            
            </div>
            <div class="form-group ">
              <label for="email" class="control-label col-sm-3">Email</label>
              <div class="col-sm-6">
                <input class="form-control" required="required" name="email" type="text" id="email">
                
              </div>
            </div>

            <div class="form-group ">
              <label for="city" class="control-label col-sm-3">City</label>
              <div class="col-sm-6">
                <input class="form-control" required="required" name="city" type="text" id="city">
                
              </div>
            </div>

            <div class="form-group ">
              <label for="state" class="control-label col-sm-3">State</label>
              <div class="col-sm-6">
                <input class="form-control" required="required" name="state" type="text" id="state">
                
              </div>
            </div>
            
            <div class="form-group ">
              <label for="password" class="col-sm-3 control-label">Password</label>
              <div class="col-sm-6">
                <input class="form-control" required="required" name="password" type="password" value="" id="password">
                
              </div>
            </div>
            
            <div class="form-group ">
              <label for="password_confirmation" class="col-sm-3 control-label">Confirm Password</label>
              <div class="col-sm-6">
                <input class="form-control" required="required" name="confirm_password" type="password" value="" id="confirm_password">
              </div>
            </div>
              <button  id="profile-create" type="submit" class="btn btn-default">sign up</button>
     {{Form::close()}}
</div>
  </div>
    </div>
  </div>

</div>

>>>>>>> 4c2f6a27201f25d2bc139a888444d8d060a55d3c
@stop

@section('bottom-script')

@stop
	