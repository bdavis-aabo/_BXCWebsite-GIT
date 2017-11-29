<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/assets/images/favicon.png" type="image/x-icon" />
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!-- Thayer Media Pixel -->
		<script type="text/javascript" src="//nexus.ensighten.com/choozle/236/Bootstrap.js"></script>
		
		
		<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','https://connect.facebook.net/en_US/fbevents.js');
		
		fbq('init', '864945923644019'); // Insert your pixel ID here.
		fbq('track', 'PageView');
		fbq('track', 'Lead');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=864945923644019&ev=PageView&noscript=1"
		/></noscript>
		<!-- DO NOT MODIFY -->
		<!-- End Facebook Pixel Code -->
		<?php wp_head() ?>
		
	</head>
	
	<body <?php body_class() ?>>
		
		<div class="container wrapper">
			<div class="row">
				<header class="header">
					<div class="masthead angle">
						<h1 class="logo"><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('title') ?>"><?php bloginfo('title') ?></a></h1>
					</div>
				</header>
				
				<section class="page-hero">
					<div class="hero-image">
						<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive')); ?>
						<div class="hero-caption">
							<h2 class="hero-title"><?php echo get_field('hero_title') ?></h2>
							<p><?php echo get_field('hero_subtext') ?></p>
						</div>
					</div>
				</section>
				

				<nav class="navbar navbar-right">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
					</div>
					
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<?php wp_nav_menu(array('menu'=>'main-menu', 'depth'=>3, 'container'=>false, 'menu_class'=>'')); ?>
					</div>
				</nav>
				
				
			</div>