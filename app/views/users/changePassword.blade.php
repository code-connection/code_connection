
@extends('layouts.master')

    @section('top-script')

        <title>Change Password</title>

    @stop

    @section('content')

	<div class="account-form container">	
		<div class="col-md-4 account-txt">
    		<h1 id="account-direction">Account</h1>
    		
    		<h4 class="account-info">Made a mistake entering your information?
    			No Worries! Follow the instructions below:</h4>
    	    <div class='line'>
          	</div>
          	<h4 class="account-info"> Step 1. On your right, you will see your current information. To 
     			make a change, just type in the fields you wish to correct. Yes, it's as easy as that!
     		</h4>
     	    <div class='line'>
            </div>	
     		<h4 class="account-info"> Step 2. Review Your changes. Are they correct?</h4>
    		<div class='line'>
            </div>
     		<h4 class="account-info"> Step 3. If so, Congrats! Just click on the submit button, You have
     			now officially edited your information.</h4>
 		</div> <!-- end col-md-4 -->

 	    <div class='line'></div>	

        <div class="col-md-8">

            {{ Form::open(array('action' => array('UserController@doChangePassword', $user->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }} 

                <h3 class="sign-placeholders">Password</h3>

                <textarea type="password" class="form-control form1" name="password" aria-describedby="basic-addon1"></textarea>


                <h3 class="sign-placeholders">Confirm Password</h3>
                <span> 

                <textarea type="password" class="form-control form1"  name="confirmPassword" aria-describedby="basic-addon1"></textarea>
                <button  id="edit-btn" name="edit-btn" type="submit" class="btn btn-default">Submit</button>
            {{Form::close()}}
   
		</div> <!-- end col-md-8 -->
    @stop

    @section('bottom-script')
 	
    @stop
