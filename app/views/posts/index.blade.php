@extends('layouts.master')

	

	@section('top-script')

	@stop

	@section('content')
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="/img/Acadia.jpg" alt="...">
	      <div class="carousel-caption">
	        ...
	      </div>
	    </div>
	    <div class="item">
	      <img src="/img/Acadia.jpg" alt="...">
	      <div class="carousel-caption">
	        ...
	      </div>
	    </div>
	    ...
	  </div>
 </div>	  
</div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


	<div class='container mission-statement'>
	   <div class="row">
            <div class="col-sm-8">
                <h2>What We Do</h2>
                <p>Bringing developers together</p>
                <p>to understand their current and potential environments.</p>
                <p>
                    
                </p>
            </div>
	</div>
		
		
	     <div class="row">
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img class='programmers' src="/img/don.jpg" alt="marine hero">
		      <div class="caption">
		        <h3>Donald Moore</h3>
		        <p>A real American Hero</p>
		        <div id='footer-icons1' class="icon-txt">
				<a href=""><i  class="fa fa-twitter fa-2x twitter-icon" target="_blank"></i></a>
				<a href=""><i class="fa fa-facebook-official fa-2x facebook-icon"></i></a>
				<a href=""><i class="fa fa-linkedin-square fa-2x linked-icon"></i></a>
				<a href=""><i class="fa fa fa-envelope-o fa-2x mail-icon"></i></a>
				</div>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img class='programmers' src="/img/ricardo.png" alt="...">
		      <div class="caption">
		        <h3>Richard De Los Santos</h3>
		        <p>Looking for the perfect burger</p>
		        <div id='footer-icons1' class="icon-txt">
				<a href=""><i  class="fa fa-twitter fa-2x twitter-icon" target="_blank"></i></a>
				<a href=""><i class="fa fa-facebook-official fa-2x facebook-icon"></i></a>
				<a href=""><i class="fa fa-linkedin-square fa-2x linked-icon"></i></a>
				<a href=""><i class="fa fa fa-envelope-o fa-2x mail-icon"></i></a>
				</div>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img class='programmers' src="/img/trey.jpg" alt="...">
		      <div class="caption">
		        <h3>Trey Sowers</h3>
		        <p>A man with the plan</p>
		        <div id='footer-icons1' class="icon-txt">
				<a href=""><i  class="fa fa-twitter fa-2x twitter-icon" target="_blank"></i></a>
				<a href=""><i class="fa fa-facebook-official fa-2x facebook-icon"></i></a>
				<a href=""><i class="fa fa-linkedin-square fa-2x linked-icon"></i></a>
				<a href=""><i class="fa fa fa-envelope-o fa-2x mail-icon"></i></a>
				</div>
		      </div>
		    </div>
		  </div>
		</div>
	  </div>
    @stop

    @section('bottom-script')

	@stop

