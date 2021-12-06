<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <title><?php bloginfo('name');?></title>
	</head>

  <body <?php body_class(); ?>>
  <?php wp_head(); ?>

  	<nav id="beige-nav" class="navbar bg-dark">

				<a href="<?php echo home_url(); ?>"><img id="logo" src="<?php bloginfo('stylesheet_directory') ?>/images/bleedingNeddlesLogoBeige.png" alt="logo"></a>

				<div id="nav-items" class="container-fluid">

					<a id="about-link" class="nav-link" href="<?php echo get_page_link(get_page_by_path('about-us')); ?>">About Us</a>

					<a id="gallery-link" class="nav-link" href="<?php echo get_page_link(get_page_by_path('our-work')); ?>">Our Work</a>

					<a id="contact-link" class="nav-link" href="<?php echo get_page_link(get_page_by_path('contact-us')); ?>">Contact Us</a>

		    </div>

		</nav>

		<nav id="mob-beige-nav" class="navbar bg-dark">

				<div id="mob-nav-items" class="navbar">

					<li class="nav-item dropdown">

						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</a>

						<div class="dropdown-menu bg-dark mt-4 mx-2" aria-labelledby="navbarDropdown">
							<a class="nav-link" href="<?php echo get_page_link(get_page_by_path('about-us')); ?>">About Us</a><br>
							<a class="nav-link" href="<?php echo get_page_link(get_page_by_path('our-work')); ?>">Our Work</a><br>
							<a class="nav-link" href="<?php echo get_page_link(get_page_by_path('contact-us')); ?>">Contact Us</a>
						</div>
					</li>

					<a href="<?php echo home_url(); ?>"><img id="mob-logo" src="<?php bloginfo('stylesheet_directory') ?>/images/bleedingNeddlesLogoBeige.png" alt="logo"></a>

				</div>

  	</nav>
