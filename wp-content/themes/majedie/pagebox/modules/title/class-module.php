<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace Majedie\Pagebox\Modules\title;

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
			'slug'        => 'title',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'Title', 'pagebox_blocks' ),
			// Short description about what box outputs. It will be displayed
			// below the title in new box modal window.
			'description' => __(  'Title', 'pagebox_blocks' ),
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
                        '10px' => __( '10px', 'pagebox' ),
                        '11px' => __( '11px', 'pagebox' ),
                        '12px' => __( '12px', 'pagebox' ),
                        '13px' => __( '13px', 'pagebox' ),
                        '14px' => __( '14px', 'pagebox' ),
                        '15px' => __( '15px', 'pagebox' ),
                        '16px' => __( '16px', 'pagebox' ),
                        '17px' => __( '17px', 'pagebox' ),
                        '18px' => __( '18px', 'pagebox' ),
                        '19px' => __( '19px', 'pagebox' ),
                        '20px' => __( '20px', 'pagebox' ),
                        '21px' => __( '21px', 'pagebox' ),
                        '22px' => __( '22px', 'pagebox' ),
                        '23px' => __( '23px', 'pagebox' ),
                        '24px' => __( '24px', 'pagebox' ),
                        '25px' => __( '25px', 'pagebox' ),
						'26px' => __( '26px', 'pagebox' ),
						'27px' => __( '27px', 'pagebox' ),
                        '28px' => __( '28px', 'pagebox' ),
                        '29px' => __( '29px', 'pagebox' ),
                        '30px' => __( '30px', 'pagebox' ),
                        '31px' => __( '31px', 'pagebox' ),
                        '32px' => __( '32px', 'pagebox' ),
					),
					'value' => '32px',
				),
			)
		);
	}
}