<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="msapplication-navbutton-color" content="#104b7f">
	<meta name="apple-mobile-web-app-status-bar-style" content="#104b7f">

	<meta property="og:site_name" content="Akamax">
	<meta property="og:title" content="Akamax računovodstvo" />
	<meta property="og:description" content="Akamax računovodstvo, knjigovodstvo, Novi Pazar, Južna Srbija" />
	<meta property="og:image" itemprop="image" content="<?php echo bloginfo('template_directory'); ?>/img/logo.png">

	<title><?php wp_title(); ?></title>

	<link rel="icon" href="<?php echo bloginfo('template_directory'); ?>/img/logo.png" type="image/x-icon">


	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/fontawesome/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/maicons.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/vendor/animate/animate.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/theme.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/main-slider.css" />


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Preloader -->
	<div id="preloader">
		<div class="loader">
		</div>
	</div>

	<!-- Back to top button -->
	<div class="back-to-top"></div>

	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
			<div class="container">
				<!-- <a href="#" class="navbar-brand">Seo<span class="text-primary">Gram.</span></a> -->

				<a href="/" class="navbar-brand"><img src="<?php echo bloginfo('template_directory'); ?>/img/logo.png"></a>

				<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="navbar-collapse collapse" id="navbarContent">
					<ul class="navbar-nav ml-auto">

						<div class="right-menu">
							<?php
							wp_nav_menu(array(
								'container_class' => 'menu-header',
								'theme_location' => 'main-menu'
							)); ?>
						</div>
					</ul>
				</div>

			</div>
		</nav>



	</header>