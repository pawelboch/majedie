<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace Majedie\Pagebox\Modules\fullWidthVertical2BlocksWithPostBlockWithTwitterPost;

use \Pagebox\Modules\Module as Abstract_Module;
use \WPGeeks_HTML;

class Module extends Abstract_Module {

	/**
	 * Module constructor
	 * @access public
	 */
	public function __construct() {

		parent::__construct();

	}

	/**
	 * Template config
	 * @return void
	 */
	public function set_config() {

		$this->config = array(
			// Name of the box for plugin use. Only alphanumeric charactes 
			// and underscores are allowed
			'slug'        => 'full_width_vertical_2_blocks_with_post-block_with_twitter_post',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'New Content', 'pagebox_blocks' ),
			// Short description about what box outputs. It will be displayed
			// below the title in new box modal window.
			'description' => __(  '', 'pagebox_blocks' ),
			// Elements with higher priority will be displayed earlier in
			// new box modal window
			'priority'    => 1,
			// Custom path for image file. Default image (module.jpg) should be
			// located in the main folder of current box
			'image'       => '',
			'limit'       => array(
				'width' => array( 0, 100 )
			),
			// minimum and maximum percent width that module fits in
			// WPGeeks_Forms
			'fields'      => array(
			  array(
          'type'        => 'post',
          'name'        => 'post1',
          'group'		    => __('Post1', 'pagebox'),
          'label'       => __( 'Post 1', 'pagebox' ),
          'description' => __( 'Choose post 1 to display', 'pagebox' ),
        ),

        array(
        	'type'        => 'post',
        	'name'        => 'post2',
        	'group'		    => __('Post2', 'pagebox'),
        	'label'       => __( 'Post 2', 'pagebox' ),
        	'description' => __( 'Choose post 1 to display', 'pagebox' ),
        ),

				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'post1_background_color',
					'label'       => __( 'Post 1 background color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'post1_category_size',
					'label'       => __( 'Post 1Category size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'post1_category_color',
					'label'       => __( 'Post 1 category color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'post1_title_size',
					'label'       => __( 'Post 1 title size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'post1_title_color',
					'label'       => __( 'Post 1 title color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'post1_date_size',
					'label'       => __( 'Post 1 date size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'post1_date_color',
					'label'       => __( 'Post 1 date color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'post1_paragraph_size',
					'label'       => __( 'Post 1 paragraph size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'post1_paragraph_color',
					'label'       => __( 'Post 1 paragraph color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),








						array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'post2_background_color',
					'label'       => __( 'Post 2 background color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'post2_category_size',
					'label'       => __( 'Post 2 Title size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'post2_category_color',
					'label'       => __( 'Post 2 category color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'post2_title_size',
					'label'       => __( 'Post 2 title size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'post2_title_color',
					'label'       => __( 'Post 2 title color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'post2_date_size',
					'label'       => __( 'Post 2 date size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'post2_date_color',
					'label'       => __( 'Post 2 date color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'post2_paragraph_size',
					'label'       => __( 'Post 2 paragraph size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'post2_paragraph_color',
					'label'       => __( 'Post 2 paragraph color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),








						array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'block3_background_color',
					'label'       => __( 'Block 3 background color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'block3_above_text_size',
					'label'       => __( 'Block 3 above title - text size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'block3_above_text_color',
					'label'       => __( 'third block above text color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'block_text_size',
					'label'       => __( 'Third block text size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'block_text_color',
					'label'       => __( 'Third block text color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'block3_link_size',
					'label'       => __( 'Third block link size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'block3_link_color',
					'label'       => __( 'third block link color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
			)
		);
	}
}