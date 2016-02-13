<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace Majedie\Pagebox\Modules\Content;

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
			'slug'        => 'content',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'Content', 'pagebox_blocks' ),
			// Short description about what box outputs. It will be displayed
			// below the title in new box modal window.
			'description' => __(  'Content', 'pagebox_blocks' ),
			// Elements with higher priority will be displayed earlier in
			// new box modal window
			'priority'    => 8,
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
					'type'        => 'text',
					'group'       => __( 'General', 'pagebox' ),
					'name'        => 'title',
					'label'       => __( 'Title', 'pagebox' ),
					'description' => __( 'Title', 'pagebox' ),
				),
				array(
					'type'        => 'editor',
					'group'       => __( 'General', 'pagebox' ),
					'name'        => 'paragraph',
					'label'       => __( 'Paragraph', 'pagebox' ),
					'description' => __( 'Paragraph', 'pagebox' ),
				),

				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'block_color',
					'label'       => __( 'Block background color', 'pagebox' ),
					'description' => __( 'Block background color', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'title_color',
					'label'       => __( 'Title color', 'pagebox' ),
					'description' => __( 'Title color', 'pagebox' ),
				),
				array(
					'type'        => 'select',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'title_size',
					'label'       => __( 'Title font size', 'pagebox' ),
					'description' => __( 'Title font size', 'pagebox' ),
					'options' => array(
						'25px' => __( '25px', 'pagebox' ),
						'32px' => __( '32px', 'pagebox' ),
					),
					'value' => '32px',
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'paragraph_color',
					'label'       => __( 'Paragraph color', 'pagebox' ),
					'description' => __( 'Paragraph color', 'pagebox' ),
				),
			)
		);
	}
}