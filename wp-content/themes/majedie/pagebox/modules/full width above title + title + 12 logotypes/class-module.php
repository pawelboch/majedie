<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace Majedie\Pagebox\Modules\fullWidthAboveTitleTitle12Logotypes;

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
			'slug'        => 'full_width_above_title-title-12_logotypes',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'Awards Section', 'pagebox_blocks' ),
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
					'name'        => 'paragraph',
					'label'       => __( 'Paragraph', 'pagebox' ),
					'description' => __( 'Main module title', 'pagebox' ),
				),
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
					'name'        => 'paragraph_size',
					'label'       => __( 'Paragraph size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'General', 'pagebox' ),
					'name'        => 'paragraph_color',
					'label'       => __( 'Paragraph color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
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
					'type'        => 'repeater',
					'group'		  => __( 'Row 1', 'pagebox' ),
					'name'        => 'logos',
					'description' => __( 'Add logo image', 'pagebox' ),
					'labels'       => array(
						'singular' => __('Logo', 'pagebox'),
						'plural' => __('Logos', 'pagebox')
					),
					'buttons' => array(
						'add' => __('Add logo', 'pagebox'),
						'remove' => __('Remove logo', 'pagebox')
					),
					'fields' => array(
						array(
							'type'        => 'image',
							'group'		  => __( 'Row 2', 'pagebox' ),
							'name'        => 'logo',
							'label'       => __( 'Add Logo image', 'pagebox' ),
							'description' => __( '', 'pagebox' )
						),
						array(
					'type'        => 'text',
					'group'       => __( 'Row 2', 'pagebox' ),
					'name'        => 'url',
					'label'       => __( 'Url', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				
					)
				),







						array(
					'type'        => 'repeater',
					'group'		  => __( 'Row 2', 'pagebox' ),
					'name'        => 'llogos',
					'description' => __( 'Add logo image', 'pagebox' ),
					'labels'       => array(
						'singular' => __('Llogo', 'pagebox'),
						'plural' => __('Llogos', 'pagebox')
					),
					'buttons' => array(
						'add' => __('Add logo', 'pagebox'),
						'remove' => __('Remove logo', 'pagebox')
					),
					'fields' => array(
						array(
							'type'        => 'image',
							'group'		  => __( 'Row 2', 'pagebox' ),
							'name'        => 'llogo',
							'label'       => __( 'Add Logo image', 'pagebox' ),
							'description' => __( '', 'pagebox' )
						),
						array(
					'type'        => 'text',
					'group'       => __( 'Row 2', 'pagebox' ),
					'name'        => 'uurl',
					'label'       => __( 'Url', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				
					)
				),






									array(
					'type'        => 'repeater',
					'group'		  => __( 'Row 3', 'pagebox' ),
					'name'        => 'lllogos',
					'description' => __( 'Add logo image', 'pagebox' ),
					'labels'       => array(
						'singular' => __('Lllogo', 'pagebox'),
						'plural' => __('Lllogos', 'pagebox')
					),
					'buttons' => array(
						'add' => __('Add logo', 'pagebox'),
						'remove' => __('Remove logo', 'pagebox')
					),
					'fields' => array(
						array(
							'type'        => 'image',
							'group'		  => __( 'Row 3', 'pagebox' ),
							'name'        => 'lllogo',
							'label'       => __( 'Add Logo image', 'pagebox' ),
							'description' => __( '', 'pagebox' )
						),
						array(
					'type'        => 'text',
					'group'       => __( 'Row 3', 'pagebox' ),
					'name'        => 'uuurl',
					'label'       => __( 'Url', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				
					)
				),






									array(
					'type'        => 'repeater',
					'group'		  => __( 'Row 4', 'pagebox' ),
					'name'        => 'llllogos',
					'description' => __( 'Add logo image', 'pagebox' ),
					'labels'       => array(
						'singular' => __('Llllogo', 'pagebox'),
						'plural' => __('Llllogos', 'pagebox')
					),
					'buttons' => array(
						'add' => __('Add logo', 'pagebox'),
						'remove' => __('Remove logo', 'pagebox')
					),
					'fields' => array(
						array(
							'type'        => 'image',
							'group'		  => __( 'Row 4', 'pagebox' ),
							'name'        => 'llllogo',
							'label'       => __( 'Add Logo image', 'pagebox' ),
							'description' => __( '', 'pagebox' )
						),
						array(
					'type'        => 'text',
					'group'       => __( 'Row 4', 'pagebox' ),
					'name'        => 'uuuurl',
					'label'       => __( 'Url', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				
					)
				),

				
			)
		);
	}
}