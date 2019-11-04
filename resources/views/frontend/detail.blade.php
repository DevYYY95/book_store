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
				<div class="col-md-5">
					<img class="pic-1 img-responsive" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-1.jpg">
				</div>
				<div class="col-md-7">
					<h3>Men's Blazer</h3>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<button>Download</button>
					<button>Back</button>
				</div>
			</div>
		</div>
	</div>


	<div class="discount">
		<div class="container">
	    	<h3 class="history-h3">People also view</h3>
		    <div class="row">
		        <div class="col-md-3 col-sm-6">
		            <div class="product-grid7">
		                <div class="product-image7">
		                    <a href="#">
		                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-1.jpg">
		                    </a>
		                    <ul class="social">
		                         <li><a href="" class="fa fa-download"></a></li>
		                    </ul>
		                    <span class="product-new-label">New</span>
		                </div>
		                <div class="product-content">
		                    <h3 class="title"><a href="{{url('/detail')}}">Men's Blazer</a></h3>
		                    <ul class="rating">
		                        <li class="fa fa-star"></li>
		                        <li class="fa fa-star"></li>
		                        <li class="fa fa-star"></li>
		                        <li class="fa fa-star"></li>
		                        <li class="fa fa-star"></li>
		                    </ul>
		                    <div class="price">$15.00
		                        <span>$20.00</span>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="col-md-3 col-sm-6">
		            <div class="product-grid7">
		                <div class="product-image7">
		                    <a href="#">
		                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-3.jpg">
		                    </a>
		                    <ul class="social">
		                         <li><a href="" class="fa fa-download"></a></li>
		                    </ul>
		                </div>
		                <div class="product-content">
		                    <h3 class="title"><a href="#">Women's White Shirt</a></h3>
		                    <ul class="rating">
		                        <li class="fa fa-star"></li>
		                        <li class="fa fa-star"></li>
		                        <li class="fa fa-star"></li>
		                        <li class="fa fa-star"></li>
		                        <li class="fa fa-star"></li>
		                    </ul>
		                    <div class="price">$15.00</div>
		                </div>
		            </div>
		        </div>
		        <div class="col-md-3 col-sm-6">
		            <div class="product-grid7">
		                <div class="product-image7">
		                    <a href="#">
		                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-5.jpg">
		                    </a>
		                    <ul class="social">
		                         <li><a href="" class="fa fa-download"></a></li>
		                    </ul>
		                    <span class="product-new-label">New</span>
		                </div>
		                <div class="product-content">
		                    <h3 class="title"><a href="#">Men's Blazer</a></h3>
		                    <ul class="rating">
		                        <li class="fa fa-star"></li>
		                        <li class="fa fa-star"></li>
		                        <li class="fa fa-star"></li>
		                        <li class="fa fa-star"></li>
		                        <li class="fa fa-star"></li>
		                    </ul>
		                    <div class="price">$15.00
		                        <span>$20.00</span>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="col-md-3 col-sm-6">
		            <div class="product-grid7">
		                <div class="product-image7">
		                    <a href="#">
		                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-7.jpg">
		                    </a>
		                    <ul class="social">
		                         <li><a href="" class="fa fa-download"></a></li>
		                    </ul>
		                    <span class="product-new-label">New</span>
		                </div>
		                <div class="product-content">
		                    <h3 class="title"><a href="#">Men's Blazer</a></h3>
		                    <ul class="rating">
		                        <li class="fa fa-star"></li>
		                        <li class="fa fa-star"></li>
		                        <li class="fa fa-star"></li>
		                        <li class="fa fa-star"></li>
		                        <li class="fa fa-star"></li>
		                    </ul> 
		                    <div class="price">$15.00
		                        <span>$20.00</span>
		                    </div>
		                </div>
		            </div>
		        </div>
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