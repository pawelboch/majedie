<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace Majedie\Pagebox\Modules\fullWidthHorizontal2BlocksWithPostBlockWithTwitterPost;

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
			'slug'        => 'full_width_horizontal_2_blocks_with_post-block_with_twitter_post',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'Related Content and Social Module', 'pagebox_blocks' ),
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
                                        'group'		  => __('Post1', 'pagebox'),
                                        'label'       => __( 'Post 1', 'pagebox' ),
                                        'description' => __( 'Choose post 1 to display', 'pagebox' ),
                                ),

                    array(
                                         'type'        => 'post',
                                        'name'        => 'post2',
                                        'group'		  => __('Post2', 'pagebox'),
                                        'label'       => __( 'Post 2', 'pagebox' ),
                                        'description' => __( 'Choose post 1 to display', 'pagebox' ),
                                ),

				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'button_font_color',
					'label'       => __( 'Button font color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
			)
		);
	}
}