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

  <nav id="beige-nav" class="navbar navbar-expand-lg">

    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('stylesheet_directory');?>/images/bleedingNeddlesLogo.png" alt="" id="logo"/></a>

      <div id="navbarNav">
        <ul class="navbar-nav">

          <?php $menu_args = ['theme_location' => 'primary', 'menu_class' => "navbar-nav"]; ?>
          <?php wp_nav_menu($menu_args); ?>
        </ul>
      </div>
    </div>
  </nav>
