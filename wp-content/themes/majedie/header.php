<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
		<meta name="robots" content="noindex, nofollow">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="wpg-main-header">
			<div class="container">
				<h1><a href="/"><img src="" alt="Majedie"></a></h1>
				<nav>
					<ul class="wpg-top-menu">
						<li>Consultant</li>
						<li>United Kingdom</li>
					</ul>
				</nav>
				<nav>
					<?php wp_nav_menu( array( 'container_class' => fasle, 'menu' => 'main' ) ); ?>
				</nav>
				<nav>
					<ul class="wpg-top-menu">
						<li><a href="#">Majlq Login</a></li>
						<li><input type="submit" value="Submit"><input type="search" placeholder="Search"></li>
					</ul>
				</nav>
			</div>
		</header>