
<!DOCTYPE html>
<html lang="en">
<head>
	<title>code_connect</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'> 

  	<link rel="stylesheet" href="//cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">

  	<link rel="stylesheet" href="/css/code_connection.css">

	<script src="//cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

  	


    
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