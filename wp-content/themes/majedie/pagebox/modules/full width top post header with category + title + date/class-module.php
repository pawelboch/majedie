<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace Majedie\Pagebox\Modules\fullWidthTopPostHeaderWithCategoryTitleDate;

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
			'slug'        => 'full_width_top_post_header_with_category-title-date',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'Article Page: Title block', 'pagebox_blocks' ),
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
                                        'name'        => 'title',
                                        'group'		  => __('General', 'pagebox'),
                                        'label'       => __( 'Title', 'pagebox' ),
                                        'description' => __( 'Add title', 'pagebox' ),
                                ),


				   array(
                                         'type'        => 'image',
                                        'name'        => 'background_image',
                                        'group'		  => __('General', 'pagebox'),
                                        'label'       => __( 'Background Image', 'pagebox' ),
                                        'description' => __( 'Add background image', 'pagebox' ),
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
					'name'        => 'category_size',
					'label'       => __( 'Category size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'category_color',
					'label'       => __( 'Category color', 'pagebox' ),
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
					'name'        => 'date_color',
					'label'       => __( 'Date color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
						                           array(
					'type' => 'select',
					'group' => __( 'Design', 'pagebox' ),
					'name' => 'shadow',
					'label' => __( 'Text shadow?', 'aberdeen' ),
					'options' => array(
						'No' => __( 'No', '' ),
						'Yes' => __( 'Yes', 'abrdeen' ),
						
					),
					'value' => '1',
				),
			)
		);
	}
}