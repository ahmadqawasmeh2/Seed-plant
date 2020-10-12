<!DOCTYPE html>
<html lang="en">

	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Bothor Factory" />

		<link rel="icon" href="{{asset('assets/images/logo.png')}}">

		<title>Bothor Factory</title>

		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/font-icons/entypo/css/entypo.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/neon.css')}}">
		<!--  Remove comment change lanuage arabic
		<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
		<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/neon-core.css">
		<link rel="stylesheet" href="assets/css/neon-theme.css">
		<link rel="stylesheet" href="assets/css/neon-forms.css">
		<link rel="stylesheet" href="assets/css/neon-rtl.css">
		<link rel="stylesheet" href="assets/css/custom.css"> 
	     End Comment-->

		<script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>
	</head>

	<body>

		<div class="wrap">

			<!-- Logo and Navigation -->
			<div class="site-header-container container">

				<div class="row">

					<div class="col-md-12">

						<header class="site-header">

							<section class="site-logo">

								<a href="/">
									<img src="{{asset('assets/images/logo.png')}}" width="120" />
								</a>

							</section>

							<nav class="site-nav">

								<ul class="main-menu hidden-xs" id="main-menu">
									<li class="active">
										<a href="/">
											<span>Home</span>
										</a>
									</li>

									<li>
										<a href="{{route('user.showproduct')}}">
											<span>Product</span>
										</a>
									</li>
									<li>
										<a href="{{route('user.contact')}}">
											<span>Contact</span>
										</a>
									</li>

									<li>
										<a href="{{route('user.about')}}">
											<span>About Us</span>
										</a>
									</li>


									<li>
										<a href="">
											<span>lanuage</span>
										</a>

										<ul>
											<li>
												<a href="">
													<span>Arabic</span>
												</a>
											</li>

											<li>
												<a href="">
													<span>English</span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
								<div class="visible-xs">

									<a href="#" class="menu-trigger">
										<i class="entypo-menu"></i>
									</a>

								</div>
							</nav>

						</header>

					</div>

				</div>

			</div>
			<!-- Main Slider -->
			<section class="slider-container" style="background-image: url(assets/images/sld.jpg);">

				<div class="container">

					<div class="row">

						<div class="col-md-12">

							<div class="slides">


								<!-- <div class="slide">

									<div class="slide-content">
										<h2>
											<small>Neon - Bootstrap 3</small>
											Dashboard &amp; Front-end
										</h2>

										<p>
											Neon &ndash; is flat admin template for multi-purpose usage built<br /> with
											the latest version of Bootstrap &ndash; 3.
										</p>
									</div>

									<div class="slide-image">

										<a href="#">
											<img src="assets/images/slide-img-1.png" class="img-responsive" />
										</a>
									</div>

								</div> -->

								<!-- <div class="slide" data-bg="assets/images/slide-img-1-bg.png">

									<div class="slide-image">

										<a href="#">
											<img src="assets/images/slide-img-1.png" class="img-responsive" />
										</a>
									</div>

									<div class="slide-content text-right">
										<h2>
											<small>Neon - Bootstrap 3</small>
											Powerful Admin Template
										</h2>

										<p>
											Designed for Bootstrap Framework, the theme works <br />
											perfectly on any device, you can use it on<br />
											your smartphone, tablet or your laptop.
										</p>

									</div>

								</div> -->

								<div class="slide">

									<!-- <div class="slide-content">
										<h2>
											<small>Neon - Bootstrap 3</small>
											Responsive &amp; Retina
										</h2>

										<p>
											Device type is not a problem if you use Neon theme for your application
											UI.<br />
											It's packed with latest Bootstrap framework and it's compatible for Large
											Screens, Tablets and Smartphones.
										</p>
									</div> -->

									<div class="slide-image">

										<!-- <a href="#">
											<img src="assets/images/slide-img-1.png" class="img-responsive" />
										</a> -->
									</div>

								</div>

								<!-- <div class="slides-nextprev-nav">
									<a href="#" class="prev">
										<i class="entypo-left-open-mini"></i>
									</a>
									<a href="#" class="next">
										<i class="entypo-right-open-mini"></i>
									</a>
								</div> -->
							</div>

						</div>

					</div>

				</div>

			</section>

			<main>
			@yield('content')
			</main>

		<script src="{{asset('assets/js/gsap/TweenMax.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.js')}}"></script>
		<script src="{{asset('assets/js/joinable.js')}}"></script>
		<script src="{{asset('assets/js/resizeable.js')}}"></script>
		<script src="{{asset('assets/js/neon-slider.js')}}"></script>
		<!-- JavaScripts initializations and stuff -->
		<script src="{{asset('assets/js/neon-custom.js')}}"></script>
		<script src="{{asset('assets/js/nivo-lightbox/nivo-lightbox.min.js')}}"></script>
		

		</body>
</html>