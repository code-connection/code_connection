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

                    @foreach($post->comments as $value)


                        <p id="post-comment" type="text" class="form-control form1"  aria-describedby="basic-addon1">{{{ $value->comment }}}
                            - {{{ $post->user->first_name . " " . $post->user->last_name. "\n".$post->user->city. ",". $post->user->state }}}</p><br>

                    @endforeach

                    <p>
                    	<a href="{{{ action('PostsController@index') }}}">Return to Home</a>
                    </p>

                    <br>
                    <br>

                    <p>
                        <a href="{{{ action('CommentsController@showCreate',$post->id)}}}" >Click to comment on this post</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
   
    @stop

    @section('bottom-script')

    @stop
