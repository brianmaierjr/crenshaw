<!doctype html>
<html lang="en">

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,600,700,700i" rel="stylesheet">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<?php if ( is_single() ) { ?>
			<div class="intro">
				<div class="wrap cf">
					<svg class="arrowDown" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 284.929 284.929"><path d="M135.9 167.877c1.9 1.902 4.092 2.85 6.566 2.85s4.66-.947 6.562-2.85L282.082 34.83c1.902-1.904 2.847-4.094 2.847-6.568s-.952-4.665-2.848-6.567L267.808 7.417c-1.902-1.903-4.093-2.853-6.57-2.853-2.47 0-4.66.95-6.563 2.853l-112.21 112.205L30.263 7.417c-1.903-1.903-4.093-2.853-6.567-2.853-2.475 0-4.665.95-6.567 2.853L2.856 21.695C.95 23.597 0 25.785 0 28.262c0 2.478.953 4.665 2.856 6.567L135.9 167.876z"/><path d="M267.808 117.053c-1.902-1.903-4.093-2.853-6.57-2.853-2.47 0-4.66.95-6.563 2.853l-112.21 112.204L30.263 117.05c-1.903-1.903-4.093-2.853-6.567-2.853-2.475 0-4.665.95-6.567 2.853L2.856 131.327C.95 133.23 0 135.42 0 137.893c0 2.474.953 4.665 2.856 6.57L135.9 277.51c1.9 1.902 4.092 2.853 6.566 2.853s4.66-.95 6.562-2.854l133.054-133.047c1.902-1.903 2.847-4.093 2.847-6.565 0-2.474-.952-4.66-2.848-6.567l-14.274-14.277z"/></svg>
					<img src="<?php the_field('intro_bg', 2);?>" alt="Big Image of John Crenshaw">
					<main class="intro-text cf">
						<h1><?php the_field( 'intro_heading', 2); ?></h1>
						<h2 class="sub-heading"><?php the_field( 'intro_sub_heading', 2); ?></h2>
						<p><?php the_field( 'intro_big_title', 2); ?></p>
						<a class="button formTrigger" href="/contact"><?php the_field( 'intro_btn_text', 2); ?></a>
					</main>
				</div>
			</div>
		<?php } ?>

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">

					<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
        			             'depth' => 0                                   // limit the depth of the nav
						)); ?>

					</nav>

				</div>

			</header>
