<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace Majedie\Pagebox\Modules\fullWidth3BlocksWithIconTitleText;

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
			'slug'        => 'full_width_3_blocks_with_icon-title-text',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'How to Invest – ways to invest', 'pagebox_blocks' ),
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
					'name'        => 'title',
					'label'       => __( 'Title', 'pagebox' ),
					'description' => __( 'Main module title', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'General', 'pagebox' ),
					'name'        => 'title_size',
					'label'       => __( 'Title size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'General', 'pagebox' ),
					'name'        => 'title_color',
					'label'       => __( 'Title color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'General', 'pagebox' ),
					'name'        => 'background',
					'label'       => __( 'Background color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),





				array(
					'type'        => 'image',
					'group'       => __( 'First row', 'pagebox' ),
					'name'        => 'image_row1',
					'label'       => __( 'Image', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( 'First row', 'pagebox' ),
					'name'        => 'title_row1',
					'label'       => __( 'Title first row', 'pagebox' ),
					'description' => __( 'Main module title', 'pagebox' ),
				),

				array(
					'type'        => 'number',
					'group'		    => __( 'First row', 'pagebox' ),
					'name'        => 'title_size_row1',
					'label'       => __( 'Title size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'First row', 'pagebox' ),
					'name'        => 'title_color_row1',
					'label'       => __( 'Title color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

						

				array(
					'type'        => 'editor',
					'group'       => __( 'First row', 'pagebox' ),
					'name'        => 'editor_row1',
					'label'       => __( 'Editor', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'First row', 'pagebox' ),
					'name'        => 'background_color_row1',
					'label'       => __( 'Background color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'First row', 'pagebox' ),
					'name'        => 'background_color_row1',
					'label'       => __( 'Background color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),






								array(
					'type'        => 'image',
					'group'       => __( 'Second row', 'pagebox' ),
					'name'        => 'image_row2',
					'label'       => __( 'Image', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( 'Second row', 'pagebox' ),
					'name'        => 'title_row2',
					'label'       => __( 'Title first row', 'pagebox' ),
					'description' => __( 'Main module title', 'pagebox' ),
				),

				array(
					'type'        => 'number',
					'group'		    => __( 'Second row', 'pagebox' ),
					'name'        => 'title_size_row2',
					'label'       => __( 'Title size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Second row', 'pagebox' ),
					'name'        => 'title_color_row2',
					'label'       => __( 'Title color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

						

				array(
					'type'        => 'editor',
					'group'       => __( 'Second row', 'pagebox' ),
					'name'        => 'editor_row2',
					'label'       => __( 'Editor', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Second row', 'pagebox' ),
					'name'        => 'background_color_row2',
					'label'       => __( 'Background color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Second row', 'pagebox' ),
					'name'        => 'background_color_row2',
					'label'       => __( 'Background color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),







					array(
					'type'        => 'image',
					'group'       => __( 'Third row', 'pagebox' ),
					'name'        => 'image_row3',
					'label'       => __( 'Image', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( 'Third row', 'pagebox' ),
					'name'        => 'title_row3',
					'label'       => __( 'Title first row', 'pagebox' ),
					'description' => __( 'Main module title', 'pagebox' ),
				),

				array(
					'type'        => 'number',
					'group'		    => __( 'Third row', 'pagebox' ),
					'name'        => 'title_size_row3',
					'label'       => __( 'Title size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Third row', 'pagebox' ),
					'name'        => 'title_color_row3',
					'label'       => __( 'Title color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

						

				array(
					'type'        => 'editor',
					'group'       => __( 'Third row', 'pagebox' ),
					'name'        => 'editor_row3',
					'label'       => __( 'Editor', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Third row', 'pagebox' ),
					'name'        => 'background_color_row3',
					'label'       => __( 'Background color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Third row', 'pagebox' ),
					'name'        => 'background_color_row3',
					'label'       => __( 'Background color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
			)
		);
	}
}