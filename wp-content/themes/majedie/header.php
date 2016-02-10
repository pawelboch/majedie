<!DOCTYPE html>
	<!--[if lt IE 7]>
	<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> 
	<![endif]-->
	<!--[if IE 7]>
	<html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> 
	<![endif]-->
	<!--[if IE 8]>
	<html class="no-js lt-ie9" <?php language_attributes(); ?>> 
	<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta content="index, follow" name="robots">
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!--[if lt IE 9]>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/vendor/respond/dest/respond.min.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="banner-header" role="banner">
			<div class="top-header">
				<div class="container">
					<div class="logo">
						<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" /></a>
					</div>
					<button class="nav-toggle visible-xs" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
			</div>
			<div class="bottom-header">
				<div class="container">
					<nav role="navigation" class="nav-main">
						<?php
							wp_nav_menu( array(
							  'theme_location' => 'primary',
							  'container' => false,
							  'menu_class' => 'nav',
							  'menu_id' => 'nav',
							  )
							);
						?>
					</nav>
				</div>
			</div>
		</header>
		<div class="content">