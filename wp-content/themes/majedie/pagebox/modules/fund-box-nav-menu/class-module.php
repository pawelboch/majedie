<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace Majedie\Pagebox\Modules\fundBoxNavMenu;

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
			'slug'        => 'fund_box_nav_menu',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'Fund box horizontal menu', 'pagebox_blocks' ),
			// Short description about what box outputs. It will be displayed
			// below the title in new box modal window.
			'description' => __(  'Add horizontal menu', 'pagebox_blocks' ),
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
					'type'        => 'repeater',
					'group'		  => __( 'General', 'pagebox' ),
					'name'        => 'menu-items',
					'description' => __( 'Add menu link', 'pagebox' ),
					'labels'       => array(
						'singular' => __('Link', 'pagebox'),
						'plural' => __('Links', 'pagebox')
					),
					'buttons' => array(
						'add' => __('Add menu link', 'pagebox'),
						'remove' => __('Remove menu link', 'pagebox')
					),
					'fields' => array(
						array(
							'type'        => 'text',
							'group'		    => __( 'General', 'pagebox' ),
							'name'        => 'link_text',
							'label'       => __( 'Link title', 'pagebox' ),
							'description' => __( 'Link title', 'pagebox' ),
						),
						array(
							'type'        => 'text',
							'group'		    => __( 'General', 'pagebox' ),
							'name'        => 'link_url',
							'label'       => __( 'Link URL', 'pagebox' ),
							'description' => __( 'Link URL', 'pagebox' ),
						),
					),

				),
			)
		);
	}
}