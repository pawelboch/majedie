<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace Majedie\Pagebox\Modules\fullWidthTwoBlocksWithLogoTitleButtonBackgroundImage;

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
			'slug'        => 'full_width_two_blocks_with_logo-title-button-background_image',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'MajiQ and About Us', 'pagebox_blocks' ),
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
					'group'       => __( 'First block', 'pagebox' ),
					'name'        => 'first_title',
					'label'       => __( 'Title', 'pagebox' ),
					'description' => __( 'Main module title', 'pagebox' ),
				),
				array(
					'type'        => 'image',
					'group'       => __( 'First block', 'pagebox' ),
					'name'        => 'first_image_title',
					'label'       => __( 'Image title', 'pagebox' ),
					'description' => __( 'Optionally', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( 'First block', 'pagebox' ),
					'name'        => 'first_under_title',
					'label'       => __( 'Under Title', 'pagebox' ),
					'description' => __( 'Main module under title', 'pagebox' ),
				),
					array(
					'type'        => 'text',
					'group'       => __( 'First block', 'pagebox' ),
					'name'        => 'first_button',
					'label'       => __( 'Button text', 'pagebox' ),
					'description' => __( 'Add button text', 'pagebox' ),
				),
						array(
					'type'        => 'text',
					'group'       => __( 'First block', 'pagebox' ),
					'name'        => 'first_button_url',
					'label'       => __( 'Button url', 'pagebox' ),
					'description' => __( 'Add button url', 'pagebox' ),
				),
						array(
					'type'        => 'image',
					'group'       => __( 'First block', 'pagebox' ),
					'name'        => 'first_background_image',
					'label'       => __( 'Background image', 'pagebox' ),
					'description' => __( 'Add background image', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'First block design', 'pagebox' ),
					'name'        => 'first_background_color',
					'label'       => __( 'Background color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'First block design', 'pagebox' ),
					'name'        => 'first_title_size',
					'label'       => __( 'Title size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'First block design', 'pagebox' ),
					'name'        => 'first_title_color',
					'label'       => __( 'Title color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'First block design', 'pagebox' ),
					'name'        => 'first_under_title_size',
					'label'       => __( 'Under Title size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'First block design', 'pagebox' ),
					'name'        => 'first_under_title_color',
					'label'       => __( 'Under Title color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'First block design', 'pagebox' ),
					'name'        => 'first_button_size',
					'label'       => __( 'Button font size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'First block design', 'pagebox' ),
					'name'        => 'first_button_color',
					'label'       => __( 'Button font color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),






					array(
					'type'        => 'text',
					'group'       => __( 'Second block', 'pagebox' ),
					'name'        => 'second_title',
					'label'       => __( 'Title', 'pagebox' ),
					'description' => __( 'Main module title', 'pagebox' ),
				),

					array(
					'type'        => 'text',
					'group'       => __( 'Second block', 'pagebox' ),
					'name'        => 'second_button',
					'label'       => __( 'Button text', 'pagebox' ),
					'description' => __( 'Add button text', 'pagebox' ),
				),
						array(
					'type'        => 'text',
					'group'       => __( 'Second block', 'pagebox' ),
					'name'        => 'second_button_url',
					'label'       => __( 'Button url', 'pagebox' ),
					'description' => __( 'Add button url', 'pagebox' ),
				),
						array(
					'type'        => 'image',
					'group'       => __( 'Second block', 'pagebox' ),
					'name'        => 'second_background_image',
					'label'       => __( 'Background image', 'pagebox' ),
					'description' => __( 'Add background image', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Second block design', 'pagebox' ),
					'name'        => 'second_background_color',
					'label'       => __( 'Background color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Second block design', 'pagebox' ),
					'name'        => 'second_title_size',
					'label'       => __( 'Title size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Second block design', 'pagebox' ),
					'name'        => 'second_title_color',
					'label'       => __( 'Title color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Second block design', 'pagebox' ),
					'name'        => 'second_button_size',
					'label'       => __( 'Button font size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Second block design', 'pagebox' ),
					'name'        => 'second_button_color',
					'label'       => __( 'Button font color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Other design', 'pagebox' ),
					'name'        => 'background_outside_color',
					'label'       => __( 'Background outside color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
			)
		);
	}
}