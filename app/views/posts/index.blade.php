@extends('layouts.master')

	

	@section('top-script')

	@stop

	@section('content')

		<div class="jumbotron" id="account-pic">

			<img id="blogheader" >

			<div id="header-greeting">

				<h1 id="welcome" class="main">Welcome to Code Connection!</h1>

				<p id="bio">Richie Trey Don</p>

			</div>

		</div>

			
		

		@foreach($posts as $post)


	    	<p class="main"><a  href="{{{ action('PostsController@show', $post->id) }}}">Post Title: {{{$post->title}}}</a></p><br>

	    	<p class="main index author">author: {{{$post->user->last_name}}}</p>

	    @endforeach

	    <div class="text-center">{{ $posts->links()}}</div>
	    
	    <p class="main"><a href="{{{ action('PostsController@create') }}}" >Create a new POST</a></p>

    @stop

    @section('bottom-script')

	@stop

