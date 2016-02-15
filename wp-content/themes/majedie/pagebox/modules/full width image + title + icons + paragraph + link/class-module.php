<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace Majedie\Pagebox\Modules\fullWidthImageTitleIconsParagraphLink;

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
			'slug'        => 'full_width_image-title-icons-paragraph-link',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'Banner', 'pagebox_blocks' ),
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
					'type'        => 'repeater',
					'group'		  => __( 'General', 'pagebox' ),
					'name'        => 'social_links',
					'description' => __( 'Social links', 'pagebox' ),
					'labels'       => array(
						'singular' => __('Social link', 'pagebox'),
						'plural' => __('Social links', 'pagebox')
					),
					'buttons' => array(
						'add' => __('Add social link', 'pagebox'),
						'remove' => __('Remove social link', 'pagebox')
					),
					'fields' => array(
						array(
							'type'        => 'text',
							'group'		  => __( 'General', 'pagebox' ),
							'name'        => 'icon',
							'label'       => __( 'Icon', 'pagebox' ),
							'description' => __( 'Example icon: fa-facebook' . "\n" . 'http://fortawesome.github.io/Font-Awesome/cheatsheet/', 'pagebox' )
						),
						array(
							'type'        => 'text',
							'group'		  => __( 'General', 'pagebox' ),
							'name'        => 'link',
							'label'       => __( 'Link URL', 'pagebox' ),
							'description' => __( 'Type URL address to your social media account', 'pagebox' )
						),
					)
				),
				array(
					'type'        => 'textarea',
					'group'       => __( 'General', 'pagebox' ),
					'name'        => 'paragraph',
					'label'       => __( 'Paragraph', 'pagebox' ),
					'description' => __( 'Paragraph displaying bottom of the title', 'pagebox' ),
				),
				array(
					'type'        => 'text',
					'group'       => __( 'General', 'pagebox' ),
					'name'        => 'button_text',
					'label'       => __( 'Button text', 'pagebox' ),
					'description' => __( 'Text of button', 'pagebox' ),
				),
				array(
					'type'        => 'cpt',
					'group'       => __( 'General', 'pagebox' ),
					'name'        => 'button_link',
					'post_type'   => array('post', 'page'),
					'label'       => __( 'Button link', 'pagebox' ),
					'description' => __( 'Link where button leads to', 'pagebox' ),
				),
				array(
					'type'        => 'image',
					'group'       => __( 'General', 'pagebox' ),
					'name'        => 'image',
					'label'       => __( 'Photo', 'pagebox' ),
					'description' => __( 'Main module image', 'pagebox' ),
				),



				array(
					'type'        => 'select',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'photo_side',
					'label'       => __( 'Photo side', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
					'options'     => array(
						'left' => 'left',
						'right' => 'right'
					)
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'background_color',
					'label'       => __( 'Background color', 'pagebox' ),
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
					'name'        => 'social_buttons_size',
					'label'       => __( 'Social buttons size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'social_buttons_color',
					'label'       => __( 'Social buttons color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'paragraph_size',
					'label'       => __( 'Paragraph size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'paragraph_color',
					'label'       => __( 'Paragraph color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'number',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'button_font_size',
					'label'       => __( 'Button font size', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'button_font_color',
					'label'       => __( 'Button font color', 'pagebox' ),
					'description' => __( '', 'pagebox' ),
				),
			)
		);
	}
}