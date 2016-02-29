<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace Majedie\Pagebox\Modules\fullWidth2BlocksWithTitleParagraph;

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
			'slug'        => 'full_width_2_blocks_with_title-paragraph',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'Editors Notes', 'pagebox_blocks' ),
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
					'type'        => 'text',
					'group'       => __( 'Block 1', 'pagebox' ),
					'name'        => 'title1',
					'label'       => __( 'Title', 'pagebox' ),
					'description' => __( 'Main module title', 'pagebox' ),
				),
				array(
					'type'        => 'editor',
					'group'       => __( 'Block 1', 'pagebox' ),
					'name'        => 'editor1',
					'label'       => __( 'Paragraph', 'pagebox' ),
					'description' => __( 'Main module title', 'pagebox' ),
				),

				array(
					'type'        => 'text',
					'group'       => __( 'Block 2', 'pagebox' ),
					'name'        => 'title2',
					'label'       => __( 'Title', 'pagebox' ),
					'description' => __( 'Main module title', 'pagebox' ),
				),

				array(
					'type'        => 'editor',
					'group'       => __( 'Block 2', 'pagebox' ),
					'name'        => 'editor2',
					'label'       => __( 'Paragraph', 'pagebox' ),
					'description' => __( 'Main module title', 'pagebox' ),
				),

			
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'title1_background_color',
					'label'       => __( 'Block 1 background color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

	array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'title1_font_color',
					'label'       => __( 'Title 1 font color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'title1_size',
					'label'       => __( 'Title 1 size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),



				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'title2_background_color',
					'label'       => __( 'Block 2 background color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

	array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'title2_font_color',
					'label'       => __( 'Title 2 font color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'title2_size',
					'label'       => __( 'Title 2 size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
			)
		);
	}
}