@extends('layouts.master')


@section('top-script')

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
    <link rel='stylesheet' href='/js/chosen.css'>

@stop


@section('content')
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
                <input class="form-control" name="first_name" type="text" id="first_name">
                
              </div>
            </div>
                @if ($errors->has('first_name'))
                <p>{{$errors->first('first_name')}}</p>
                @endif

            <div class="form-group ">
              <label for="last_name" class="control-label col-sm-3">Last Name</label>
              <div class="col-sm-6">
                <input class="form-control" name="last_name" type="text" id="last_name">
                
              </div> 
            </div>
                @if ($errors->has('last_name'))
                <p>{{$errors->first('last_name')}}</p>
                @endif

            <div class="form-group ">
              <label for="email" class="control-label col-sm-3">Email</label>
              <div class="col-sm-6">
                <input class="form-control" name="email" type="text" id="email">           
              </div>
            </div>
                @if ($errors->has('email'))
                <p>{{$errors->first('email')}}</p>
                @endif

            <div class="form-group ">
              <label for="city" class="control-label col-sm-3">City</label>
              <div class="col-sm-6">
                <input class="form-control" name="city" type="text" id="city">             
              </div>
            </div>
                 @if ($errors->has('city'))
                <p>{{$errors->first('city')}}</p>
                @endif

            <div class="form-group ">
              <label for="state" class="control-label col-sm-3">State</label>
              <div class="col-sm-6">
                  <select class="form-control state" name="state" id="state"></select>
              </div>
            </div>
                 @if ($errors->has('state'))
                <p>{{$errors->first('state')}}</p>
                @endif
            
            <div class="form-group ">
              <label for="password" class="col-sm-3 control-label">Password</label>
              <div class="col-sm-6">
                <input class="form-control" name="password" type="password" value="" id="password">            
              </div>
            </div>
                 @if ($errors->has('password'))
                <p>{{$errors->first('password')}}</p>
                @endif
            
            <div class="form-group ">
              <label for="password_confirmation" class="col-sm-3 control-label">Confirm Password</label>
              <div class="col-sm-6">
                <input class="form-control password_confirm" name="password_confirmation" type="password" value="" id="confirmPassword">
              </div>
            </div>

              <button  id="profile-create" type="submit" class="btn btn-default">sign up</button>
             


     {{Form::close()}}
</div>
  </div>
    </div>
  </div>

</div>

@stop

@section('bottom-script')
<script src="/js/countries.js"></script>
<script src="/js/chosen.jquery.min.js"></script>
<script language="javascript">

populateStates("state");
$(".state").chosen(); 

</script>

@stop
	