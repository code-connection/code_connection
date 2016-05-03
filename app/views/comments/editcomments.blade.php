
@extends('layouts.master')


    @section('top-script')

        <title>Posts Edit Form</title>

    @stop
    
    @section('content')
    
       
        <div id="wrapper" class="col-md-10">

            <h1>Edit a comment</h1>
            
             <h1>Post: {{{$comment->post->title}}}</h1>
            <?php $comment->id ?>
            {{ Form::model($comment,array('action' => array('CommentsController@update', $comment->id),'method' =>'PUT'))}}
             
               
                {{Form::label('comment')}}
                {{Form::textarea('comment',null,[ 'rows' => '3' ])}}
             
                
                <br>
                {{Form::submit('Submit!', array('name' => 'Save'))}}
                   
            {{ Form::close() }}


        </div> <!-- end wrapper   --> 
    @stop

    @section('bottom-script')

    @stop