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
										<li class="wpg-dropdown-menu investor-type"><span>Consultant</span>
											<button type="button">
												<i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown">
												<li><a href="">Custom 1</a></li>
												<li><a href="">Custom 1</a></li>
												<li><a href="">Custom 1</a></li>
											</ul>
										</li>
										<li class="wpg-dropdown-menu country-type"><span>United Kingdom</span>
											<button type="button">
												<i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown">
												<li><a href="">Custom 2</a></li>
												<li><a href="">Custom 2</a></li>
												<li><a href="">Custom 2</a></li>
											</ul>
										</li>
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

						<div class="module-wpg module-investor-modal">
							<div class="container">
								<div class="wpg-investor-modal">
									<i class="fa fa-times wpg-popup-investor-modal-close"></i>
									<h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-2-fs8.png" alt="x"></h2>
									<h3>Select Investor Type</h3>
									<div class="row wpg-investor-modal-lists">
										<div class="col-xs-12 col-sm-6">
											<ul>
												<li><a href="#">Retail Investor</a></li>
												<li><a href="#">Instituitional Investor</a></li>
											</ul>
										</div>
										<div class="col-xs-12 col-sm-6">
											<ul>
												<li><a href="#">Charity</a></li>
												<li class="sub-menu"><a href="#">Consultants</a></li>
												<li><a href="#">Pensions</a></li>
												<li><a href="#">Insurance</a></li>
											</ul>
										</div>
									</div>
									<div class="wpg-disclaimer">
										<div class="wpg-disclaimer-inset">
											<h4>Disclaimer</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
									<div class="wpg-inputs">
										<input type="checkbox" name="wpg-checkbox-investor-modal" id="wpg-checkbox-investor-modal"><label for="wpg-checkbox-investor-modal">Agree to <a href="#" target="_blank">Terms or Use</a></label> <input class="wpg-button-accept btn-2" type="button" value="ACCEPT &amp; PROCEED" disabled>
									</div>
								</div>
							</div>
						</div>

					</header>
				</div><!-- .span-table-cell .vertical-align-top -->
			</div><!-- .span-table-row -->
			<div class="span-table-row wpg-main-container-page-content">
				<div class="span-table-cell vertical-align-top">