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

class Template6 extends Template_Abstract {

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
				'label' => __( 'Top', 'pagebox' ), // label
				'size'  => 100, // size in %
				'limit' => 0 // limit of modules which can be added to this section. 0 for no limit. @todo
			),
			'left' => array( // template slug
				'label' => __( 'Left side', 'pagebox' ), // label
				'size'  => 33, // size in %
				'limit' => 0 // limit of modules which can be added to this section. 0 for no limit. @todo
			),
			'right' => array( // template slug
				'label' => __( 'Right side', 'pagebox' ), // label
				'size'  => 66, // size in %
				'limit' => 0 // limit of modules which can be added to this section. 0 for no limit. @todo
			),
			'bottom' => array( // template slug
				'label' => __( 'Bottom', 'pagebox' ), // label
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
			'name'        => __( '100, 33-66, 100', 'pagebox' ), // human readable name of template
			'description' => __( '', 'pagebox' ), // human readable description of template
			'sections'    => $sections
		);

	}

}