
@extends('layouts.master')


    @section('top-script')

        <title>Posts Edit Form</title>

    @stop
    
    @section('content')
    
        <div id="wrapper" class="col-md-10">

            <h1>Edit a Post</h1>

            {{ Form::model([$post, ['action' => ['PostsController@update', $post->id ], 'method'=>'PUT', 'class' =>'form-horizontal']]) }}
               
                {{Form::label('title')}}
                {{Form::textarea('title',null,['placeholder'=> $post->title, 'rows' => '3' ])}}
             
                <br>
                {{Form::label('body')}}
                {{Form::textarea('body',null,['placeholder'=> $post->body ])}}
                <br>
                {{Form::submit('Submit!', array('name' => 'Save'))}}
                   
            {{ Form::close() }}


        </div> <!-- end wrapper   --> 
    @stop

    @section('bottom-script')

    @stop