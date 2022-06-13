<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-navbutton-color" content="#104b7f">
    <meta name="apple-mobile-web-app-status-bar-style" content="#104b7f">

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

	<style>

	/* .right-menu ul{
		display: flex;
		padding-left: 0;
	}

	.right-menu ul li{

		list-style: none;
		transition: all .2s ease;
		padding: 0.5rem 1rem;
		padding-right: 16px;
		padding-left: 16px;
		
	}

	.right-menu ul li a {
		color: rgba(100, 95, 136, 0.75);
		font-weight: 900;

	}

	.current-menu-item a {
		color: #6C55F9!important;
		text-decoration: none;
	}



	a:hover {
		text-decoration: none!important;
	} */


	</style>
</head>

<body <?php body_class(); ?>>

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
						wp_nav_menu(array('container_class' => 'menu-header',
							'theme_location' => 'main-menu')); ?>
						</div>



<!-- 
						<li class="nav-item active"> 
						 <li class="nav-item">
							<a class="nav-link" href="/pocetna">Pocetna</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/o-nama">O nama</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/ponuda">Usluge</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/blog-2/">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/kontakt">Kontakt</a>
						</li> --> 



						<!-- <li class="nav-item">
              <a class="btn btn-primary ml-lg-2" href="#">Free Analytics</a>
            </li> -->
					</ul>
				</div>

			</div>
		</nav>



	</header>