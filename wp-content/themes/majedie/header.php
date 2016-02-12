<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
		<meta name="robots" content="noindex, nofollow">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="wpg-main-header">
			<div class="container">
				<h1><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-fs8.png" alt="Majedie"></a></h1>
				<nav>
					<ul class="wpg-top-menu">
						<li class="wpg-dropdown-menu"><label for="wpg-dropdown-consultant">Consultant <i class="fa fa-angle-down"></i></label>
							<input type="checkbox" id="wpg-dropdown-consultant">
							<ul class="sub-menu">
								<li><a href="#">Example 1</a></li>
								<li><a href="#">Example 2</a></li>
								<li><a href="#">Example 3</a></li>
							</ul>
						</li>
						<li class="wpg-dropdown-menu"><label for="wpg-dropdown-lang">United Kingdom <i class="fa fa-angle-down"></i></label>
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
						<li><input type="submit" value="Submit" class="wpg-ico-search"><input type="search" placeholder="Search"></li>
					</ul>
					<?php wp_nav_menu( array( 'container' => fasle, 'menu' => 'main', 'menu_class' => 'wpg-main-menu' ) ); ?>
				</nav>
			</div>
		</header>