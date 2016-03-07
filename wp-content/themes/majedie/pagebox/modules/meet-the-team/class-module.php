<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace Majedie\Pagebox\Modules\meetTheTeam;

use \Pagebox\Modules\Module as Abstract_Module;
use \WPGeeks_HTML;

class Module extends Abstract_Module {

	public function member_category() {
		$team_category=(get_terms('t_category'));
		$teams=array();
		foreach ( $team_category as $team ) {
			$teams[$team->slug]=$team->name;
		}
		return $teams;
	}

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
			'slug'        => 'meet_the_team',
			// Human readable title of box. It will be displayed in all
			// backend functionalities
			'title'       => __(  'Meet the Team', 'pagebox_blocks' ),
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
					'type'    => 'select',
					'group'	  => __('General', 'pagebox'),
					'name'	  => 'team_member',
					'label'  => __('Category of team member', 'pagebox'),
					'description' => __('', 'pagebox'),
					'options' =>
						$this->member_category()
				),
			)
		);
	}
}