<?php

function theme_enqueue_style() {
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), false, false );
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
	wp_enqueue_script( 'prefixfree', get_template_directory_uri() . '/assets/javascripts/vendor/prefixfree/prefixfree.min.js', array(), false, false );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/javascripts/vendor/modernizr/modernizr.js', array(), false, false );
	wp_enqueue_script( 'pixelperfect-js', get_template_directory_uri() . '/assets/javascripts/pixelperfect/src/pixel-perfect.js' , array(), false, true); 

	wp_enqueue_script( 'cycle2', get_template_directory_uri() . '/assets/javascripts/cycle2/jquery.cycle2.min.js', array(), false, true );
	wp_enqueue_script( 'cycle2-carousel', get_template_directory_uri() . '/assets/javascripts/cycle2/jquery.cycle2.carousel.js', array(), false, true );
	wp_enqueue_script( 'cycle2-swipe', get_template_directory_uri() . '/assets/javascripts/cycle2/jquery.cycle2.swipe.min.js', array(), false, true );

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