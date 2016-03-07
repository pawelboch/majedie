<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace Majedie\Pagebox\Modules\fund_managers;

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
			'slug'        => 'fund_managers',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'Fund managers', 'pagebox_blocks' ),
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
					'type'        => 'repeater',
					'group'		  => __( 'General', 'pagebox' ),
					'name'        => 'managers',
					'description' => __( 'Add team member', 'pagebox' ),
					'labels'       => array(
						'singular' => __('Team', 'pagebox'),
						'plural' => __('Teams', 'pagebox')
					),
					'buttons' => array(
						'add' => __('Add team member', 'pagebox'),
						'remove' => __('Remove team member', 'pagebox')
					),
					'fields' => array(
						array(
							'type'        => 'cpt',
							'post_type'   => 'team_member',
							'group'		    => __( 'General', 'pagebox' ),
							'name'        => 'manager_id',
							'label'       => __( 'Manager', 'pagebox' ),
							'description' => __( 'Select manager', 'pagebox' ),
						),
					),

				),
//							array(
//					'type'        => 'repeater',
//					'group'		  => __( 'General', 'pagebox' ),
//					'name'        => 'teams',
//					'description' => __( 'Add team member', 'pagebox' ),
//					'labels'       => array(
//						'singular' => __('Team', 'pagebox'),
//						'plural' => __('Teams', 'pagebox')
//					),
//					'buttons' => array(
//						'add' => __('Add team member', 'pagebox'),
//						'remove' => __('Remove team member', 'pagebox')
//					),
//					'fields' => array(
//						array(
//							'type'        => 'image',
//							'group'		  => __( 'General', 'pagebox' ),
//							'name'        => 'image',
//							'label'       => __( 'Add Logo image', 'pagebox' ),
//							'description' => __( '', 'pagebox' )
//						),
//						array(
//					'type'        => 'text',
//					'group'       => __( 'General', 'pagebox' ),
//					'name'        => 'title',
//					'label'       => __( 'Title', 'pagebox' ),
//					'description' => __( '', 'pagebox' ),
//				),
//
//						array(
//					'type'        => 'text',
//					'group'       => __( 'General', 'pagebox' ),
//					'name'        => 'bottom_title',
//					'label'       => __( 'Bottom Title', 'pagebox' ),
//					'description' => __( '', 'pagebox' ),
//				),
//
//						array(
//					'type'        => 'editor',
//					'group'       => __( 'General', 'pagebox' ),
//					'name'        => 'editor',
//					'label'       => __( 'Text', 'pagebox' ),
//					'description' => __( '', 'pagebox' ),
//				),
//
//
//
//					)
//				),
				
			)
		);
	}
}