@extends('layouts.master')
   

    @section('top-script')
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

        </style>    

    @stop

    @section('content')
   
    <div class="container">
        <div class="panel panel-default">
        	<div class="panel-heading"><h1>Post Details</h1></div>
            <div class="panel-body">
                <div class="col-md-12 account-txt">
                    <h3>{{{ $post->title }}}</h3><br>

                    <p class="show-page-paragraph">Content: {{{$post->body}}} </p>

                    <p class="show-page-paragraph">Written by: {{{ $post->user->first_name . " " . $post->user->last_name }}}</p>

                    <p class="show-page-paragraph">Location: {{{$post->user->city .','. $post->user->state}}}</p>

                    <p class="show-page-paragraph">Created on: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}} </p>

                    <div class="container">
                        <p>
                            <div class="btn btn-default"><a href="{{{ action('CommentsController@showCreate',$post->id)}}}"><i class="fa fa-comments" aria-hidden="true"></i> Click to comment on this post</a></div>
                        </p>
                        <br>
                            <div class="col-md-8 comment-break"><h3>Comments</h3></div>
                    </div>

                    @foreach($post->comments as $value)
                    


                    <div class='container'>
                        
                        <p class="col-md-8 comment-dash">{{{ $value->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}<br>{{{ $value->comment }}}
                            <br>Commented by: {{{ $value->user->first_name . " " . $value->user->last_name . "\n" .$value->user->city . ",". $value->user->state }}}<br>  </p></p><br>
                 
                    </div>
                    @endforeach

                    <p>
                    	<a href="{{{ action('PostsController@index') }}}">Return to Home</a>
                    </p>

                    <br>
                    <br>

                    
                </div>
            </div>
        </div>
    </div>
   
    @stop

    @section('bottom-script')

    @stop
