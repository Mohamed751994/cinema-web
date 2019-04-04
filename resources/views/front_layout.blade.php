<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cinema</title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="{{asset('frontend/img/favicon.ico')}}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<h2 style="color: #d82a4e">Cinema</h2>
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<a href="" class="site-btn header-btn">Comming Soon</a>
					<nav class="main-menu">
						<ul>
							<li><a href="{{ url('/') }}">Home</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="#">Movies</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="page-info-section set-bg" data-setbg="{{asset('frontend/img/1.jpg')}}">
		<div class="container">
			<div class="page-text text-center">
				
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	@yield('content')



	<!-- footer section -->
	<footer>
		
		<div class="footer-bottom footer-section spad pb-0">
			<div class="text-center"><h3>Footer</h3></div>
		</div>
	</footer> 
	<!-- footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/mixitup.min.js')}}"></script>
	<script src="{{asset('frontend/js/circle-progress.min.js')}}"></script>
	<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('frontend/js/main.js')}}"></script>
</html>