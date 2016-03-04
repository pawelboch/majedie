<?php

require_once 'functions-csv-uploader.php';

add_image_size( 'team', 301, 355 );


// Register the three useful image sizes for use in Add Media modal

function theme_enqueue_style() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/stylesheets/bootstrap/bootstrap-grid.css', array(), false, false ); 
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/stylesheets/normalize.css', array(), false, false ); 
	wp_enqueue_style( 'pixelperfect-css', get_template_directory_uri() . '/assets/javascripts/pixelperfect/src/pixel-perfect.css', array(), false, false ); 
	
	wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/stylesheets/header.css', array(), false, false ); 
	wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/stylesheets/footer.css', array(), false, false ); 
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/stylesheets/main.css', array(), false, false ); 
	wp_enqueue_style( 'modules-wojtek', get_template_directory_uri() . '/assets/stylesheets/modules-wojtek.css', array(), false, false ); 
	wp_enqueue_style( 'modules-olek', get_template_directory_uri() . '/assets/stylesheets/modules-olek.css', array(), false, false ); 
	
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), false, false ); 
}

function theme_enqueue_script() {
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/javascripts/jquery/dist/jquery.min.js', array(), false, true );
	wp_enqueue_script( 'prefixfree', get_template_directory_uri() . '/assets/javascripts/vendor/prefixfree/prefixfree.min.js', array(), false, true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/javascripts/vendor/modernizr/modernizr.js', array(), false, false );
	wp_enqueue_script( 'pixelperfect-js', get_template_directory_uri() . '/assets/javascripts/pixelperfect/src/pixel-perfect.js' , array(), false, true); 

	wp_enqueue_script( 'cycle2', get_template_directory_uri() . '/assets/javascripts/cycle2/jquery.cycle2.min.js', false, false, true );
	wp_enqueue_script( 'cycle2-carousel', get_template_directory_uri() . '/assets/javascripts/cycle2/jquery.cycle2.carousel.js', false, false, true );
	wp_enqueue_script( 'cycle2-swipe', get_template_directory_uri() . '/assets/javascripts/cycle2/jquery.cycle2.swipe.min.js', false, false, true );

	//wp_enqueue_script( 'util', get_template_directory_uri() . '/assets/javascripts/bootstrap/util.js', false, false, true );
	//wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/assets/javascripts/bootstrap/dropdown.js', false, false, true );

	wp_enqueue_script( 'modules-w', get_template_directory_uri() . '/assets/javascripts/modules-w.js', array(), false, true );
	wp_enqueue_script( 'modules-o', get_template_directory_uri() . '/assets/javascripts/modules-o.js', array(), false, true );

	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/javascripts/script.js', array(), false, true );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'theme_enqueue_script' );

add_theme_support( 'post-thumbnails' ); 

add_action( 'after_setup_theme', 'wppn_setup' );
function wppn_setup() {  
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'theme' ),
	) );
}


function majadie_get_the_excerpt( $post_id = 0 ) {
	$post_id = $post_id ? $post_id : get_the_ID();

	$post = get_post( $post_id );

	if ( 'post' !== $post->post_type ) {
		return $post->post_excerpt;
	}

	$sections = get_post_meta( $post->ID, 'pagebox_modules', true );

	if ( empty( $sections ) ) {
		return $post->post_excerpt;
	}

	foreach ( $sections as $id => $modules ) {
		foreach ( $modules as $module ) {
			$module_decode = json_decode( stripslashes( $module ) );

			if ( ! $module_decode ) {
				$module_decode = json_decode($module);
			}

			if ( 'full_width_content' === $module_decode->slug ) {
				$content = empty( $module_decode->settings->excerpt )
					? strip_tags( $module_decode->settings->content )
					: strip_tags( $module_decode->settings->excerpt );

				break 2;
			}
		}
	}

	if ( isset( $content ) ){
		return $content;
	} else {
		return $post->post_excerpt;
	}

	return '';
}

function post_categories($id) {
	$categories = get_the_category($id);

	foreach ($categories as $category) {
		echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
		break;
	}
}

function list_categories() {
	$categories = get_categories();

	echo '<ul>';
	foreach ($categories as $category) {
		echo '<li>';
		echo '<a href="#' . $category->slug . '">' . $category->name . '</a>';
		echo '</li>';
	}
	echo '</ul>';
}

function login_to_view_site() {
	if(!is_user_logged_in()) {
		$current_url = urlencode("//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
    wp_redirect( home_url()."/wp-login.php?redirect_to=".$current_url);
    die();
	}
}
add_action('wp', 'login_to_view_site');

add_filter( 'image_size_names_choose', 'my_custom_sizes' );

function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'your-custom-size' => __('Your Custom Size Name'),
    ) );
}


add_theme_support( 'post-thumbnails' );

add_image_size( 'left-to-right', 100, 100 );
add_filter( 'image_size_names_choose', 'wpshout_custom_sizes' );
function wpshout_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'left-to-right' => __( 'From left to right' ),
    ) );
}