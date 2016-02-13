<?php
/**
 * Full width example template
 *
 * Contains one general full width section
 *
 * @package pagebox/examples/templates
 */

namespace Pagebox\Examples\Templates;

use \WPG_Pagebox;
use Pagebox\Templates\Template as Template_Abstract;

class Full_Width extends Template_Abstract {

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
			'full_width' => array( // template slug
				'label' => __( 'Full width section', 'pagebox' ), // label
				'size'  => 100, // size in %
				'limit' => 0 // limit of modules which can be added to this section. 0 for no limit. @todo
			)
		);

		/**
		 * Entire config array
		 * @uses var sections
		 * @var config
		 */
		$this->config = array( 
			'name'        => __( 'Full Width', 'pagebox' ), // human readable name of template
			'description' => __( 'One section that goes all the way of the page', 'pagebox' ), // human readable description of template
			'sections'    => $sections
		);

	}

}