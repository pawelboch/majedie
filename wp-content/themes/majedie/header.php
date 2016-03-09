<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
		<meta name="robots" content="noindex, nofollow">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class("wpg-bg-grain"); ?>>
		<div class="span-table" id="wpg-main-container-page">
			<div class="span-table-row wpg-main-container-page-header">

				<div class="span-table-cell vertical-align-top">

					<header class="wpg-main-header">
						<div class="container">
							<h1><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-fs8.png" alt="Majedie"></a></h1>
							<button class="wpg-hamburger"><span>Menu</span><i class="fa fa-bars"></i></button>
							<div class="wpg-nav-group">
								<nav>
									<ul class="wpg-top-menu">
										<li class="wpg-dropdown-menu"><label for="wpg-dropdown-consultant">Consultant <i class="fa fa-angle-down"></i></label>
											<ul class="sub-menu"></ul>
										</li>
										<li class="wpg-dropdown-menu"><label for="wpg-dropdown-lang">United Kingdom <i class="fa fa-angle-down"></i></label></li>
									</ul>
								</nav>
								<nav>
									<ul class="wpg-other-menu">
										<li><a href="https://majinteractive.majedie.com/" target="_blank">MajlQ Login</a></li>
										<li><form role="search"  method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>"><input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" class="wpg-ico-search"><input type="search" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s"></form></li>
									</ul>
									<?php wp_nav_menu( array( 'container' => false, 'menu' => 'main', 'menu_class' => 'wpg-main-menu' ) ); ?>
								</nav>
							</div>

						</div>
					</header>

				</div><!-- .span-table-cell .vertical-align-top -->
			</div><!-- .span-table-row -->

			<div class="span-table-row wpg-main-container-page-content">
				<div class="span-table-cell vertical-align-top">