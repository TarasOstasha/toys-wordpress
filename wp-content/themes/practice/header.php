<!doctype html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Poppins:600,700&amp;subset=cyrillic" rel="stylesheet"> -->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> -->
	

	<style>
		.preloader{
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			z-index: 9999;
			background-color: #fefefe;
		}
	</style>

	<!-- <link rel="stylesheet" href="css/baguetteBox.min.css"> -->
	<!-- <link rel="stylesheet" href="css/style.css"> -->

	<title>Hello, world!</title>
	<?php wp_head() ?>
</head>
<body>

	<!--<div class="preloader d-flex justify-content-center align-items-center">
		<div class="spinner-border text-danger" style="width: 10rem; height: 10rem;" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	-->

	<button class="scrollToTop"><i class="fas fa-angle-up"></i></button>
	
	<header class="main-header">
		<nav class="navbar navbar-expand-lg">
			<a class="navbar-brand" href="#">
				<img src="<?php bloginfo('template_url') ?>/assets/img/logo.png" alt=""> BlueRex
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Features</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Product</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Reviews</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Faq</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
				</ul>
			</div>
		</nav>

		<div class="main-header-text">
			<h3>We are best and creative agency</h3>
			<h4>We turn creative ideas into your business</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit doloribus non nam, velit nemo enim!</p>
			<div class="main-header-buttons">
				<button type="button" class="btn btn-pink rounded-pill">Our story</button>
				<button type="button" class="btn btn-violet rounded-pill">Read more</button>
			</div>
		</div>
		<!-- /.main-header-text -->
	</header>