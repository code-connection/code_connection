
@extends('layouts.master')


   <title>Accounts Page</title>

    @section('top-script')

    <style>

    .container {
          margin-top: 25px;
        margin-bottom: 15px;
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

    .fa-lock {
      color:#777777;
    }
    

   
     

    </style>
      
   
    @stop

    @section('content')

<div class="container">

  <div class="panel panel-default">
      <div class="panel-heading"><h3>Account</h3></div>
        <div class="panel-body">

        <div class="col-md-12 account-txt">
          
          <div class = "form-group">

            <h4 class="account-info"> 
            To edit your account:
            <br>
            <br>
            Step 1. Type in the fields that you wish to change.
            <br>
            <br>
            Step 2. Ensure that your updated passwords match.
            <br>
            <br>
            Step 3. Complete your changes by clicking on the update button below. 
            </h4>
          
          </div>
          
        <div class="account-box"><h4><i class="fa fa-lock" aria-hidden="true"></i> Update Password</h4></div>
        <div class="col-md-2"></div>
          <div class="col-md-8">

            {{ Form::open(array('action' => array('UserController@doChangePassword', Auth::user()->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
                 
               {{ Form::label('password', 'Password') }}
                {{ Form::password('password', ['class'=> 'form-control', 'placeholder'=>"Enter password"]) }}
                @if ($errors->has('password'))
                <p>{{{$errors->first('password')}}}</p>
                @endif
            

                 
            {{ Form::label('password', 'Confirm Password') }}
              {{ Form::password('password_confirmation', ['class'=> 'form-control', 'placeholder'=>"Confirm password"]) }}
              @if ($errors->has('password'))
              <p>{{{$errors->first('password')}}}</p>
              @endif
              

            
            
           
            <br>
            <br>
            <button type="submit" class="btn btn-default" name="save" value="save">update</button>
            {{Form::close()}}

          </div>
      </div> 
    </div>

  </div>  <!-- end panel -->
</div>
  
  @stop

  @section('bottom-script')
 
    
