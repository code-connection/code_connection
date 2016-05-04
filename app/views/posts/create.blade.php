@extends('layouts.master')

    @section('top-script')

        <title>Posts Form</title>

    <style>

        .container {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .panel-default .panel-heading {
            background-color: #6C8096;
            border-color: #506378;
            color: #F1F1F1;
        }

        .panel-body {
            border: 1.5px solid;
            border-color: #506378;
        }

        .account-txt {
            padding-bottom: 30px;
        }

        textarea {
            resize: none;
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

    </style>    

    @stop
    
    @section('content')
    <div class="container">  
        <div class="panel panel-default">
            <div class="panel-heading"><h1>Create a Post</h1></div>
            <div class="panel-body">
                <div class="col-md-12 account-txt">
                    {{ Form::open(['action' => 'PostsController@store', 'method'=>'POST', 'class'=>'form-horizontal']) }}
                        @if($errors->has('title'))

                            <P>{{ $errors->first('title', '<span style="color:red" class="help-block">:message</span>') }}</p>
                        	
                        @endif

                        <label for="title">Title:</label>
                        <textarea  type="text" class="form-control form1"  name="title" aria-describedby="basic-addon1">{{{ Input::old('title') }}}</textarea>

                        @if($errors->has('body'))
                            <P>{{  $errors->first('body', '<span style="color:red" class="help-block">:message</span>') }}</p>
                          
                        @endif

                            <label for="body"> Content:</label>
                            <textarea  type="text" class="form-control form1"  id="body" name="body" aria-describedby="basic-addon1">{{{ Input::old('content') }}}</textarea><br>
                            <button type="submit" class="btn btn-default" name="save" value="save">Submit</button>
                	{{ Form::close() }}

                </div>
            </div>
        </div>
    </div>

         
    @stop

    @section('bottom-script')

    @stop