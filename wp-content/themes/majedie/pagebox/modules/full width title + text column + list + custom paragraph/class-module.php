<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace Majedie\Pagebox\Modules\fullWidthTitleTextColumnListCustomParagraph;

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
			'slug'        => 'full_width_title-text_column-list-custom_paragraph',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'Charities', 'pagebox_blocks' ),
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
					'type'        => 'editor',
					'group'       => __( 'General', 'pagebox' ),
					'name'        => 'editor1',
					'label'       => __( 'Editor - left side', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				array(
					'type'        => 'editor',
					'group'       => __( 'General', 'pagebox' ),
					'name'        => 'editor2',
					'label'       => __( 'Editor - right side', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'image',
					'group'       => __( 'General', 'pagebox' ),
					'name'        => 'image',
					'label'       => __( 'Image - right bottom block', 'pagebox' ),
					'description' => __( 'Add image for block under right editor', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( 'General', 'pagebox' ),
					'name'        => 'url',
					'label'       => __( 'Image url', 'pagebox' ),
					'description' => __( 'Add url to the image (optionally)', 'pagebox' ),
				),
				array(
					'type'        => 'editor',
					'group'       => __( 'General', 'pagebox' ),
					'name'        => 'editor3',
					'label'       => __( 'Editor - right bottom block', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'title_font_color',
					'label'       => __( 'Title font color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'title_size',
					'label'       => __( 'Title size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
			)
		);
	}
}