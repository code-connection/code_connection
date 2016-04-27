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
            <div class="col-sm-4 programmers">
                <img class="img-circle img-responsive img-center" src="/img/don.jpg" alt="">
                <h2>Donald Moore</h2>
                <p>Medal of Honor</p>
            </div>
            <div class="col-sm-4 programmers">
                <img class="img-circle img-responsive img-center" src="/img/Acadia.jpg" alt="">
                <h2>Richard De Los Santos</h2>
                <p></p>
            </div>
            <div class="col-sm-4 programmers">
                <img class="img-circle img-responsive img-center" src="/img/trey.jpg" alt="">
                <h2>Trey Sowers</h2>
                <p>Trey sowers may be last in the list. But he's first in our hearts.</p>
		

    @stop

    @section('bottom-script')

	@stop

