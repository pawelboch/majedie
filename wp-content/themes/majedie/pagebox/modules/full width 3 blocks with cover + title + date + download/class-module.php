<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace Majedie\Pagebox\Modules\fullWidth3blocksWithCoverTitleDateDownload;

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
			'slug'        => 'full width 3 blocks_with_cover-title-date-download',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'Archive User Experience', 'pagebox_blocks' ),
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

				// First block

				array(
					'type'        => 'image',
					'group'       => __( '1 block', 'pagebox' ),
					'name'        => 'image_1',
					'label'       => __( 'Image', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( '1 block', 'pagebox' ),
					'name'        => 'title_1',
					'label'       => __( 'Title', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( '1 block', 'pagebox' ),
					'name'        => 'date_1',
					'label'       => __( 'Date', 'pagebox' ),
					'description' => __( 'Example: 12 / 11/ 2005', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( '1 block', 'pagebox' ),
					'name'        => 'button_text_1',
					'label'       => __( 'Button text', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( '1 block', 'pagebox' ),
					'name'        => 'button_url_1',
					'label'       => __( 'Button URL', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				// Second block
				
				array(
					'type'        => 'image',
					'group'       => __( '2 block', 'pagebox' ),
					'name'        => 'image_2',
					'label'       => __( 'Image', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( '2 block', 'pagebox' ),
					'name'        => 'title_2',
					'label'       => __( 'Title', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( '2 block', 'pagebox' ),
					'name'        => 'date_2',
					'label'       => __( 'Date', 'pagebox' ),
					'description' => __( 'Example: 12 / 11/ 2005', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( '2 block', 'pagebox' ),
					'name'        => 'button_text_2',
					'label'       => __( 'Button text', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( '2 block', 'pagebox' ),
					'name'        => 'button_url_2',
					'label'       => __( 'Button URL', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				// Third block
				
				array(
					'type'        => 'image',
					'group'       => __( '3 block', 'pagebox' ),
					'name'        => 'image_3',
					'label'       => __( 'Image', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( '3 block', 'pagebox' ),
					'name'        => 'title_3',
					'label'       => __( 'Title', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( '3 block', 'pagebox' ),
					'name'        => 'date_3',
					'label'       => __( 'Date', 'pagebox' ),
					'description' => __( 'Example: 12 / 11/ 2005', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( '3 block', 'pagebox' ),
					'name'        => 'button_text_3',
					'label'       => __( 'Button text', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( '3 block', 'pagebox' ),
					'name'        => 'button_url_3',
					'label'       => __( 'Button URL', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				// Design

				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'background_outside_color',
					'label'       => __( 'Background outside color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'background_blocks_color',
					'label'       => __( 'Background blocks color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'title_color',
					'label'       => __( 'Title color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'title_size',
					'label'       => __( 'Title size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'date_color',
					'label'       => __( 'Date color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'date_size',
					'label'       => __( 'Date size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'button_color',
					'label'       => __( 'Button color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'button_size',
					'label'       => __( 'Button size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
			)
		);
	}
}