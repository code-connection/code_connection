@extends('layouts.master')

    @section('top-script')

        <title>Posts Form</title>

    @stop
    
    @section('content')
        <div id="wrapper" class="col-md-10">

            <h1>Create a Post</h1>

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
                    <textarea  type="text" class="form-control form1"  id="body" name="body" aria-describedby="basic-addon1">{{{ Input::old('body') }}}</textarea><br>
                    <input type="submit" name="save" value="Submit">
        	{{ Form::close() }}


        </div> <!-- end wrapper   --> 
    @stop

    @section('bottom-script')

    @stop