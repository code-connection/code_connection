@extends('layouts.master')

	

	@section('top-script')

	<style>

		.container {
			margin-top: 15px;
			margin-bottom: 15px;
		}
	</style>


	@stop

	@section('content')

	<div class="container">

		<div id="wrapper" class="col-md-10">

			<div class="jumbotron" id="account-pic">


				<h1>All Posts!</h1>

			</div>
			

			@foreach($posts as $post)


		    	<p class="main"><a  href="{{{ action('PostsController@show', $post->id) }}}">Post Title: {{{ $post->title }}}</a></p><br>

		    	<p class="main index author">Author: {{{ $post->user->last_name }}}</p>

		    	<p class="main index author">Location: {{{ $post->user->city .','. $post->user->state }}}</p>

		    @endforeach

		    <div class="text-center">{{ $posts->links() }}</div>
		    
		    <p class="main"><a href="{{{ action('PostsController@create') }}}" >Create a new POST</a></p>
		</div>
	</div>
    @stop

    @section('bottom-script')

	@stop

