<!DOCTYPE html>
<html>
<head>
	<title>Online Book Store</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/template.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="wrapper" class="animate">
		<nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
			<span class="navbar-toggler-icon leftmenutrigger"></span>
			<a class="navbar-brand" href="{{url('/')}}">LOGO</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav animate side-nav">
					<li class="nav-item">
						<a class="nav-link" href="#">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Category</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Author</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-md-auto d-md-flex">
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="fa fa-envelope-o"></i> hsularbyadanar@gmail.com</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="fa fa-phone" aria-hidden="true"></i> 09978630726</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>

	<div class="top">
		<div class="container">
			<div class="row">
				
			</div>
		</div>
	</div>


	

	

  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/app.js')}}"></script>
  <script type="text/javascript">
  	$( document ).ready(function() {
	    $('.leftmenutrigger').on('click', function(e) {
	    	$('.side-nav').toggleClass("open");
	    		e.preventDefault();
	    });
	});
  </script>

</body>
</html>