
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog Dev Site</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'> 

  	<link rel="stylesheet" href="//cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">

  	<link rel="stylesheet" href="/css/code_connection.css">

	<script src="//cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

  	<style>


  	/*body*/
     body{

     	position: relative;

  	 	background-color: #ff9900;
  	}


  	a{
  		font-size: 35px;
  		color: blue;
  		font-style: italic;
  	}
  	a:hover{
  		
  		color: black;
  		
  	}

  	/*main page*/
  	.main{
  		width: 40%;
  		margin: 0 auto;
  	}

  	.paginate{

  		width: 50%;

  		text-align: center;

  		margin: 0 auto;

  	}


  	/*modal*/
  	.navbar.navbar-default{

  		background-color: #000000;
  		width: 100%;
  		
  	}

 	.navbar-default .navbar-nav>li>a {

    	color: #ff9900;
    	font-size: 18px;

	}

	
	.navbar-default .navbar-nav>li>a:hover {

    	color: yellow;
    	font-size: 18px;

	}

  	.modal.fade.bs-example-modal-sm, .modal-content {

  		background-color: #000000;
    	color: #ff9900;
    	text-align: center;

  	}

  	.btn-default {
	    color: #000000;
	    background-color: #ff9900;
	    
	}
  	.modal-content a{

  		color: #ff9900;
    	font-size: 18px;

  	}

  	.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
    	background-color: #000000;
    	color: #ff9900;
	}

	.dropdown-toggle:focus{

		background-color: #ff9900;
    	color: #000000;

	}

	.navbar-nav>li.dropdown.open>ul.dropdown-menu li a{
		background-color: #000000;
    	color: #ff9900;
    	font-size: 18px;


	}

	.navbar-nav>li.dropdown.open>ul.dropdown-menu li a:hover{
		background-color: #ff9900;
    	color: #000000;
    	font-size: 18px;


	}

	button.navbar-toggle.collapsed{

		background-color: #ff9900 ;
    	color: #000000;

	}

	.navbar-default .navbar-toggle .icon-bar {
    	background-color: #000000;
    	color: #ff9900;
	}

	

	button.navbar-toggle { /*hamburger button-start*/
	background-color: black;
}

	.navbar-default .navbar-toggle:focus, 
	.navbar-default .navbar-toggle:hover {
		background-color: #ff9900;
	}

	button.navbar-toggle.collapsed:hover { /*hamburger button*/
		background-color: #000000;
			
	}

	button.navbar-toggle.collapsed:focus { /*hamburger button*/
		background-color: orange;
			
	}


  	/*search bar*/
  	.input-group{

  		width: 35%;
  		
  	}

  	.nav.navbar-nav {

  		margin-right: 50px;
  	}

  	.fa{

  		background-color: #ff9900 ;
    	color: #000000;
  	}

  	.input-group-btn>.btn {
    background-color: #ff9900 ;
	}

	#blogheader{
		width: 100%;
		height: auto;
		position: relative;
	}

	#account-pic{
		position: relative;
		width: 100%;
		margin-top: 0px;
	}

	

	div.jumbotron {
		background: url("/img/blogheader.jpg") no-repeat center center;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		height: 400px;
	}


	.text-center p{
		font-size: 25px;
		color: black;
		
	}

	#show-content{

		color: black;
		width: 75%;
		text-align: center;
		margin: 0 auto;

	}

	#save-comment-button{

		background-color: #ff9900 ;
	    color: #000000;

	}


	#save-comment-button:hover{

		background-color:  #000000 ;
	    color: #ff9900;

	}

	.btn-default:hover {

		background-color:  #000000 ;
	    color: #ff9900;
	}

	.show-page-paragraph{

		font-size: 30px;
		margin: 0 auto;
	}

	#post-comment{
		margin: 0 auto;
		width: 1200px;


	}


	.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
    z-index: 3;
    color: #ff9900;
    cursor: default;
   	background-color: #000000;
    border-color: #000000;
	}

	ul.pagination li a{

		color: #ff9900;
		background-color: #000000;

	}

	ul.pagination>.disabled>a:hover{

		color: #000000;
		background-color: #ff9900;

	}

	p.main {
		font-size: 25px;

	}

	#header-greeting{
		display: flex;
		flex-direction: column;
		align-item: center;
		color: #000000;
	}

	#bio{

		width: 60%;
		color: black;
		font-size: 21px;
		margin: 0 auto;
	}

  	</style>
    
    @yield('top-script')
</head>
<body>

	@include('layouts.navbar')


	@if (Session::has('successMessage'))

    <div class="alert alert-success">{{{ Session::get('successMessage') }}}

    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		<span aria-hidden="true">&times;</span>
		</button>

    </div>

	@endif

	@if (Session::has('errorMessage'))

	    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>

	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		<span aria-hidden="true">&times;</span>
		</button>

	@endif


	@yield('content')
	
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
	<script>
		var simplemde = new SimpleMDE({ element: document.getElementById("body") });
	</script>

	<script>
		var simplemde = new SimpleMDE({ element: document.getElementById("comment") });
	</script>

	<script>

		setTimeout(function(){
			$(".alert").slideUp(1000);
		},1000)

	</script>

	@yield('bottom-script')
</body>
</html>