<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace Majedie\Pagebox\Modules\fullWidthTextSlider;

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
			'slug'        => 'full_width_text_slider',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'Carousel', 'pagebox_blocks' ),
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
					'name'        => 'above_title',
					'label'       => __( 'Above title', 'pagebox' ),
					'description' => __( 'Text placed above of the title', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( 'General', 'pagebox' ),
					'name'        => 'title',
					'label'       => __( 'Title', 'pagebox' ),
					'description' => __( 'Main module title', 'pagebox' ),
				),
				array(
					'type'        => 'repeater',
					'group'		  => __( 'General', 'pagebox' ),
					'name'        => 'carousel',
					'description' => __( 'Carousel', 'pagebox' ),
					'labels'       => array(
						'singular' => __('Carousel element', 'pagebox'),
						'plural' => __('Carousel elements', 'pagebox')
					),
					'buttons' => array(
						'add' => __('Add carousel element', 'pagebox'),
						'remove' => __('Remove carousel element', 'pagebox')
					),
					'fields' => array(
						array(
							'type'        => 'textarea',
							'group'		  => __( 'General', 'pagebox' ),
							'name'        => 'carousel_text',
							'label'       => __( 'Carousel text', 'pagebox' ),
							'description' => __( '', 'pagebox' )
						),
					)
				),

				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'above_title_size',
					'label'       => __( 'Above title size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'above_title_color',
					'label'       => __( 'Above title color', 'pagebox' ),
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
					'name'        => 'title_color',
					'label'       => __( 'Title color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'carousel_text_size',
					'label'       => __( 'Carousel text size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'carousel_text_color',
					'label'       => __( 'Carousel text color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
			)
		);
	}
}