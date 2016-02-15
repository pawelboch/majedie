<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace RWC\Pagebox\Modules\Content_List;

use \Pagebox\Modules\Module as Abstract_Module;
use \WPGeeks_HTML;

class Module extends Abstract_Module {

	/**
	 * Module constructor
	 * @access public
	 */
	public function __construct() {

		add_filter( 'aberdeen/modules/content_list/custom_css', array( $this, 'custom_css' ), 10, 2 );

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
			'slug'        => 'content_list',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'Content with list', 'pagebox_blocks' ),
			// Short description about what box outputs. It will be displayed
			// below the title in new box modal window.
			'description' => __(  'Bullet list on the right', 'pagebox_blocks' ),
			// Elements with higher priority will be displayed earlier in
			// new box modal window
			'priority'    => 9,
			// Custom path for image file. Default image (module.jpg) should be
			// located in the main folder of current box
			'image'       => '',
			'limit'       => array(
				'width'    => array( 0, 100 )
			),
			// minimum and maximum percent width that module fits in
			// WPGeeks_Forms
			'fields'      => array(
				array(
					'type'        => 'text',
					'class'       => 'primary',
					'group'		  => __( 'General', 'pagebox' ),
					'name'        => 'title',
					'label'		  => 'Title'
				),
				array(
					'type'        => 'editor',
					'group'		  => __( 'General', 'pagebox' ),
					'name'        => 'description',
					'label'		  => 'Description'
				),
				array(
					'type' => 'text',
					'group' => __( 'General', 'pagebox' ),
					'name' => 'list_title',
					'label' => __( 'Bullets&apos; subheading', 'aberdeen' ),
				),
				array(
					'type'            => 'repeater',
					'group'           => __( 'General', 'pagebox' ),
					'name'            => 'list',
					'description'     => __( 'List', 'pagebox' ),
					'labels'          => array(
						'singular'      => __('List item', 'pagebox'),
						'plural'        => __('List items', 'pagebox')
					),
					'buttons'         => array(
						'add'           => __('Add item', 'pagebox'),
						'remove'        => __('Remove items', 'pagebox')
					),
					'fields'          => array(
						array(
							'type'        => 'text',
							'group'		    => __( 'General', 'pagebox' ),
							'name'        => 'title',
							'label'       => __( 'Item title', 'pagebox' )					
						),
						array(
							'type' => 'Link',
							'group' => __( 'General', 'pagebox' ),
							'name' => 'link',
							'label' => __( 'Link', 'aberdeen' ),
						),
						array(
							'type' => 'text',
							'group' => __( 'General', 'pagebox' ),
							'name' => 'link_label',
							'label' => __( 'Button label', 'aberdeen' ),
						),
					)
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'title_color',
					'label'       => __( 'Title color', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'font_color',
					'label'       => __( 'Font color', 'pagebox' ),
				),
				array(
					'type'        => 'colorpicker',
					'group'		    => __( 'Design', 'pagebox' ),
					'name'        => 'bg_color',
					'label'       => __( 'Background color', 'pagebox' ),
				),
                array(
                    'type'        => 'colorpicker',
                    'group'		    => __( 'Design', 'pagebox' ),
                    'name'        => 'subtitle_color',
                    'label'       => __( 'Subtitle color', 'pagebox' ),
                ),
                array(
                    'type' => 'text',
                    'name' => 'title_font_size',
                    'group' => __( 'Design', 'pagebox' ),
                    'label' => __( 'Title font size', 'aberdeen' ),
                    'description' => __('For example 15px', 'aberdeen')
                ),
                array(
                    'type' => 'text',
                    'name' => 'subtitle_font_size',
                    'group' => __( 'Design', 'pagebox' ),
                    'label' => __( 'Subtitle font size', 'aberdeen' ),
                    'description' => __('For example 15px', 'aberdeen')
                )
			)
		);
	}

	/**
	 * Logic
	 * @return mixed
	 */
	public function logic( &$settings ) {
		foreach ( $settings->list as $item ) {
			$appendix = isset( $item->link->appendix ) && ! empty( $item->link->appendix ) ? $item->link->appendix : '';

			if ( ! empty( $item->link->slug ) ) {
				$args = array(
					'name'           => $item->link->slug,
					'posts_per_page' => 1,
					'post_type'      => 'any',
				);

				$page = get_posts( $args );

				if ( ! empty( $page ) ) {
					$item->href = get_the_permalink( $page[0]->ID ) . $appendix;
				}
			} elseif ( ! empty( $item->link->link ) ) {
				$item->href = $item->link->link . $appendix;
			}

			if ( empty( $item->link_label ) && ! empty( $item->link->slug ) ) {
				$item->link_label = get_the_title( $page[0]->ID );
			}
		}

		return $settings;
	}

	/**
	 * Custom CSS
	 * @return string
	 */
	public function custom_css( $css, $data ) {
		$class = '.pagebox-module-' . esc_attr( $data->id );
		$s = $data->settings;

		if ( ! empty( $s->font_color ) ) {
			$css .= $class . ' ul li:after{background-color:' . esc_html( $s->font_color ) . ';}';
			$css .= $class . ' p,' . $class . ' h3{color:' . esc_html( $s->font_color ) . ';}';
		}
        if ( ! empty( $s->subtitle_color ) ) {
            $css .= $class . ' .subtitle-container span{color:' . esc_html( $s->subtitle_color ) . ';}';
        }
        if ( ! empty( $s->subtitle_font_size ) ) {
            $css .= $class . ' .subtitle-container span{font-size:' . esc_html( $s->subtitle_font_size ) . ';}';
        }

		return $css;
	}
}
