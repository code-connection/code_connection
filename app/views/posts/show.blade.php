@extends('layouts.master')
   

    @section('top-script')

        

    @stop

    @section('content')
    <div id="show-content">
    	<h1><i>Post Details</i></h1>

        <h1>Title: {{{ $post->title }}}</h1><br>

        <p class="show-page-paragraph">Content: {{{$post->body}}} </p>

        <p class="show-page-paragraph">Written by: {{{ $post->user->first_name . " " . $post->user->last_name }}}</p>

        <p class="show-page-paragraph">Location: {{{$post->user->city .','. $post->user->state}}}</p>

        <p class="show-page-paragraph">Created on: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}} </p>

        @foreach($post->comments as $value)


            <textarea id="post-comment" type="text" class="form-control form1"  aria-describedby="basic-addon1">{{{ $value->comment }}}</textarea><br>

        @endforeach

        <p>
        	<a href="{{{ action('PostsController@index') }}}">Return to Index</a>
        </p>

        <br>
        <br>

        <p>
            <a href="{{{ action('CommentsController@showCreate',$post->id)}}}" >Click to comment on this post</a>
        </p>

    </div>
    @stop

    @section('bottom-script')

    @stop
