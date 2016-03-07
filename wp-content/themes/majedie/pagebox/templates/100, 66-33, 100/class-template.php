<?php
/**
 * 100, 66-33, 33-33-33, 100 template class file
 *
 * 
 *
 * @author Pagebox Generator
 *
 * @package pagebox/templates
 */

namespace Pagebox\Templates;

use \WPG_Pagebox;
use Pagebox\Templates\Template as Template_Abstract;

class Template4 extends Template_Abstract {

	/**
	 * Template constructor
	 * @access public
	 */
	public function __construct( WPG_Pagebox $pagebox ) {

		parent::__construct( $pagebox );

	}

	/**
	 * Template config
	 * @return void
	 */
	public function set_config() {

		/**
		 * Contains array of sections available within template
		 * @var sections
		 */
		$sections = array(
			'top' => array( // template slug
				'label' => 'top', // label
				'size'  => 100, // size in %
				'limit' => -1 // limit of modules which can be added to this section. 0 for no limit.
			),
			'left-first' => array( // template slug
				'label' => 'left-first', // label
				'size'  => 66, // size in %
				'limit' => -1 // limit of modules which can be added to this section. 0 for no limit.
			),
			'right-first' => array( // template slug
				'label' => 'right-first', // label
				'size'  => 33, // size in %
				'limit' => -1 // limit of modules which can be added to this section. 0 for no limit.
			),
			'bottom' => array( // template slug
				'label' => 'bottom', // label
				'size'  => 100, // size in %
				'limit' => -1 // limit of modules which can be added to this section. 0 for no limit.
			)
		);

		/**
		 * Entire config array
		 * @uses var sections
		 * @var config
		 */
		$this->config = array( 
			'name'        => '100, 66-33, 100', // human readable name of template
			'description' => '100, 66-33, 100', // human readable description of template
			'sections'    => $sections
		);

	}
	
}