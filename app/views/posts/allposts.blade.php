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

	</style>

	@stop

	@section('content')

	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading"><h1>All Posts!</h1></div>
			<div class="panel-body">	
				<div class="col-md-12 account-txt">

					@foreach($posts as $post)

				    	<p class="main"><a  href="{{{ action('PostsController@show', $post->id) }}}">Post Title: {{{ $post->title }}}</a></p>

				    	<p class="main index author">Author: {{{ $post->user->last_name }}}</p>

				    	<p class="main index author">Location: {{{ $post->user->city .','. $post->user->state }}}</p>
				    	<br>
				    	<hr>

				    @endforeach

				    <div class="text-center">{{ $posts->links() }}</div>
				    <p class="main"><a href="{{{ action('PostsController@create') }}}" >Create a new POST</a></p>
					  
				</div>
			</div>
		</div>
	</div>
    @stop

    @section('bottom-script')

	@stop

