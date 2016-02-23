<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace Majedie\Pagebox\Modules\fullWidthLeftTitleRightText;

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
			'slug'        => 'full_width_left_title-right_text',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'full width left title + right text', 'pagebox_blocks' ),
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
					'group'       => __( 'General', 'pagebox' ),
					'name'        => 'text_left',
					'label'       => __( 'Text left', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				array(
					'type'        => 'text',
					'group'       => __( 'General', 'pagebox' ),
					'name'        => 'text_right',
					'label'       => __( 'Text right', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'background_color',
					'label'       => __( 'Background color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'text_left_color',
					'label'       => __( 'Text left color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'text_left_size',
					'label'       => __( 'Text left size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'text_right_color',
					'label'       => __( 'Text right color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'text_right_size',
					'label'       => __( 'Text right size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
			)
		);
	}
}