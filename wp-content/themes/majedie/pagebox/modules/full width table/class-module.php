<?php
/**
* Module class is an extension for Pagebox\Module
* abstract class. It registeres new box into
* Pagebox plugin
*
* Call to action module with slider
*/
namespace Majedie\Pagebox\Modules\fullWidthTable;
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
			'slug'        => 'full_width_table',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'Awards Section - table', 'pagebox_blocks' ),
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

				/* General */

				array(
					'type'        => 'text',
					'group'		  => __( 'General', 'pagebox' ),
					'name'        => 'above_table_text',
					'label'       => __( 'Above table text', 'pagebox' ),
					'description' => __( '', 'pagebox' )
				),
				array(
					'type'        => 'text',
					'group'		  => __( 'General', 'pagebox' ),
					'name'        => 'left_col_text',
					'label'       => __( 'Left column text', 'pagebox' ),
					'description' => __( '', 'pagebox' )
				),
				array(
					'type'        => 'text',
					'group'		  => __( 'General', 'pagebox' ),
					'name'        => 'right_col_text',
					'label'       => __( 'Right column text', 'pagebox' ),
					'description' => __( '', 'pagebox' )
				),
				array(
					'type'        => 'repeater',
					'group'		  => __( 'General', 'pagebox' ),
					'name'        => 'table',
					'description' => __( 'Add table row', 'pagebox' ),
					'labels'       => array(
						'singular' => __('Row', 'pagebox'),
						'plural' => __('Rows', 'pagebox')
					),
					'buttons' => array(
						'add' => __('Add row', 'pagebox'),
						'remove' => __('Remove row', 'pagebox')
					),
					'fields' => array(
						array(
							'type'        => 'text',
							'group'		  => __( 'General', 'pagebox' ),
							'name'        => 'left_col',
							'label'       => __( 'Year', 'pagebox' ),
							'description' => __( '', 'pagebox' )
						),
						array(
							'type'        => 'text',
							'group'       => __( 'General', 'pagebox' ),
							'name'        => 'right_col',
							'label'       => __( 'Name of award', 'pagebox' ),
							'description' => __( '', 'pagebox' ),
						),
					)
				),

				/* Design module */

				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design module', 'pagebox' ),
					'name'        => 'background_outer_color',
					'label'       => __( 'Background outer color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design module', 'pagebox' ),
					'name'        => 'background_inner_color',
					'label'       => __( 'Background inner color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				/* Design table */
				/*** Design table - above table ***/

				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design table', 'pagebox' ),
					'name'        => 'above_table_background_color',
					'label'       => __( 'Above table background color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design table', 'pagebox' ),
					'name'        => 'above_table_font_size',
					'label'       => __( 'Above table font size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design table', 'pagebox' ),
					'name'        => 'above_table_font_color',
					'label'       => __( 'Above table font color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				/*** Design table - header table ***/

				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design table', 'pagebox' ),
					'name'        => 'table_header_background_color',
					'label'       => __( 'Table header color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design table', 'pagebox' ),
					'name'        => 'table_header_font_size',
					'label'       => __( 'Table header font size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design table', 'pagebox' ),
					'name'        => 'table_header_font_color',
					'label'       => __( 'Table header font color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),

				/*** Design table - content table ***/

				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design table', 'pagebox' ),
					'name'        => 'table_even_color',
					'label'       => __( 'Table even color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design table', 'pagebox' ),
					'name'        => 'table_odd_color',
					'label'       => __( 'Table odd color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design table', 'pagebox' ),
					'name'        => 'table_content_font_size',
					'label'       => __( 'Table content font size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design table', 'pagebox' ),
					'name'        => 'table_content_font_color',
					'label'       => __( 'Table content font color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
			)
		);
	}
}