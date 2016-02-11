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
				<h1><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-fs8.png" alt="Majedie"></a></h1>
				<nav>
					<ul class="wpg-top-menu wpg-dropdown-menu">
						<li><label for="wpg-dropdown-consultant">Consultant</label>
							<input type="checkbox" id="wpg-dropdown-consultant">
							<ul class="sub-menu">
								<li><a href="#">Example 1</a></li>
								<li><a href="#">Example 2</a></li>
								<li><a href="#">Example 3</a></li>
							</ul>
						</li>
						<li><label for="wpg-dropdown-lang">United Kingdom</label>
							<input type="checkbox" id="wpg-dropdown-lang">
							<ul class="sub-menu">
								<li><a href="#">French</a></li>
								<li><a href="#">Germany</a></li>
								<li><a href="#">Poland</a></li>
							</ul>
						</li>
					</ul>



				</nav>
				<nav>
					<ul class="wpg-other-menu">
						<li><a href="#">Majlq Login</a></li>
						<li><input type="submit" value="Submit"><input type="search" placeholder="Search"></li>
					</ul>
					<?php wp_nav_menu( array( 'container' => fasle, 'menu' => 'main', 'menu_class' => 'wpg-main-menu' ) ); ?>
				</nav>
			</div>
		</header>