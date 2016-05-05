
@extends('layouts.master')

	 <title>Accounts Page</title>

    @section('top-script')

    <style>

		.container {
			margin-top: 20px;
			margin-bottom: 50px;
		}

    	.panel-default .panel-heading {
			background-color: #6C8096;
			border-color: #506378;
			color: #F1F1F1;
    	}

    	h3 {
			margin-top: 6px;
    	}

    	.account-box {
    		background-color: #F1F1F1;
    		color: #777777;
    		padding: 15px;

    		margin-bottom: 20px;
    	}

    	.account-info {
    		padding-top: 15px;
    		padding-bottom: 30px;
    	}

    	.btn-default {
			background-color: #F67366;
			color:white;
    	}

    	.btn-default:hover {
			background-color: #F67366;
			color:white;
			-webkit-transition: all 500ms ease;
			-moz-transition: all 500ms ease;
			-ms-transition: all 500ms ease;
			-o-transition: all 500ms ease;
			transition: all 500ms ease;
    	}

    	.account-txt {
    		padding-bottom: 30px;
    	}

    	.panel-body {
    		border: 1.5px solid;
    		border-color: #506378;
    	}

    	.state {
    		right:1em;
    	}

    	
		.chosen-container-single .chosen-single {
				    position: relative;
				    right: 1em;
		}


    	@media screen and (min-width: 480px) {

   
		}	

    </style>
    	  <link rel='stylesheet' href='/js/chosen.css'>
   
    @stop

  	@section('content')

<div class="container">

	<div class="panel panel-default">
  		<div class="panel-heading"><h3>Account</h3></div>
  			<div class="panel-body">

				<div class="col-md-12 account-txt">
					
					<div class = "form-group">

						<h4 class="account-info"> 
						Made a mistake putting in your information?
						No Worries! We've got you covered.
						<br>
						<br>
			      		Step 1. On your right, you will see your original information. To 
			 			make a change, just type in the fields you wish to correct.
						<br>
						<br>
			 			Step 2. Review Your changes. Are they correct?
						<br>
						<br>
			 			Step 3. Just click on the update button. You have
			 			now officially edited your information.
			 			</h4>

						<div class="account-box"><h4>Select an avatar</h4></div>
			                        
						<div id="account-pic">


						{{ Form::model(Auth::user(), array('action' => array('UserController@avatarUpload', Auth::id()),'files' =>true, 'method' => 'PUT')) }}

						@if (Auth::user()->image)

		                        <img class='image' src="{{{ Auth::user()->image}}}" heigth='160' width='160'>

		                @else

		                		<img class='image' src="{{ 'http://placehold.it/160x160' }}" heigth='160' width='160'>

		                @endif


							{{ Form::label('image') }}
							
			                {{ Form::file('image') }}
			            </div>
			            <br>
			            <br>

		                @if ($errors->has('image'))
		                	<p>{{$errors->first('image')}}</p>
		                @endif
		                {{ Form::close() }}
					</div>
					
				<div class="account-box"><h4>Basic Info</h4></div>
				<div class="col-md-2"></div>
					<div class="col-md-8">


						{{ Form::model(Auth::user(), array('action' => array('UserController@editUserAccount', Auth::id()),'files' =>true, 'method' => 'PUT')) }}

						
						{{ Form::open(array('action' => array('UserController@editUserAccount', Auth::user()->id), 'method' => 'put', 'class' => 'form-horizontal')) }} 

						 		 
							{{ Form::label('first name', 'First name') }}
						{{ Form::text('first_name', null,['class'=> 'form-control']) }}
						@if ($errors->has('first_name'))
						<p>{{$errors->first('first_name')}}</p>
						@endif

						{{ Form::label('last_name', 'Last Name') }}
						{{ Form::text('last_name', null,['class'=> 'form-control']) }}
						@if ($errors->has('last_name'))
						<p>{{{$errors->first('last_name')}}}</p>
						@endif

						{{ Form::label('email', 'Email') }}
						{{ Form::text('email', null,['class'=> 'form-control']) }}
						@if ($errors->has('email'))
						<p>{{{$errors->first('email')}}}</p>
						@endif
					
						{{ Form::label('city', 'City') }}
						{{ Form::text('city', null,['class'=> 'form-control']) }}
						@if ($errors->has('city'))
						<p>{{{$errors->first('city')}}}</p>
						@endif

						<div class="form-group ">
			              <label for="state" class="control-label">State</label>
			              <br>
			              <div class="col-sm-6">
			                  <select class="form-control state" name="state" id="state"></select>
			              </div>
			            </div>
			            <br>
			            {{Form::submit('update',array('class' => 'btn btn-primary'))}}
			         
						{{Form::close()}}
						
						<br>
						<br>
					</div>
			</div> 
		</div>

	</div>  <!-- end panel -->
</div>
	
 	@stop

 	@section('bottom-script')
 	<script src="/js/countries.js"></script>
	<script src="/js/chosen.jquery.min.js"></script>
	<script language="javascript">

populateStates("state");
$(".state").chosen(); 

	</script
	 	
    @stop
