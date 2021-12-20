<!doctype html>
<html lang="en">
  <head>
  	<title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('sidebar')}}/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="{{asset('sidebar')}}/css/style.css" type="text/css">
  </head>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="">
				<div class="custom-menu">
					<button type="button" id="" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="#" class="logo">UCIC</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="/home"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li>
	              <a href="/friends"><span class="fa fa-user mr-3"></span> Friends </a>
	          </li>
	          <li>
              <a href="/groups"><span class="fa fa-briefcase mr-3"></span> Groups </a>
	          </li>
	        </ul>

	        <div class="mb-5">
						<h3 class="h6 mb-3">Priti Oktaviani</h3>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
                    <h3 class="h6 mb-3">2019114011</h3>
	            </div>
	          </form>
					</div>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>
        @yield('content')

        <!-- Page Content  -->


    <script src="{{asset('sidebar')}}/js/jquery.min.js"></script>
    <script src="{{asset('sidebar')}}/js/popper.js"></script>
    <script src="{{asset('sidebar')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('sidebar')}}/js/main.js"></script>
  </body>
</html>
