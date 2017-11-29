<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title><?php bloginfo('title') ?></title>
		
		<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/assets/images/favicon.png" type="image/x-icon" />
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php wp_head() ?>
		
	</head>
	
	<body>
		
		<div class="container wrapper">
			<div class="row">
				<header class="header">
					<div class="masthead angle">
						<h1 class="logo"><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('title') ?>"><?php bloginfo('title') ?></a></h1>
					</div>
				</header>
				
				<section class="page-hero">
					<div class="hero-image">
						<img src="<?php bloginfo('template_directory') ?>/assets/images/goplay-hero.jpg" alt="<?php bloginfo('title') ?>" class="img-responsive aligncenter" />
					</div>
				</section>
				
				<a href="#contact" class="slide-btn"><i class="fa fa-envelope-o"></i> Stay Informed</a>
			</div>
		
		
		