<?php
/**
 * Class registers metabox and handles all metabox actions
 * such as displaying menu with available block or rendering
 * block edit form.
 * 
 * @since 1.0.0
 *
 * @package pagebox
 */

namespace Pagebox;

use \WPG_pagebox;
use Pagebox\View;

class Metabox {

	/**
	 * Parent class instance
	 *
	 * @access private
	 * @var    WPG_Pagebox
	 */
	private $pagebox;

	/**
	 * Pagebox settings
	 *
	 * @access private
	 */
	private $settings;

	/**
	 * Default post types
	 *
	 * @access public
	 */
	public $default_post_types = array( 'page' );

	/**
	 * Class constructor
	 * 
	 * @access  public
	 * @author  Kuba Mikita
	 */
	public function __construct(WPG_Pagebox $pagebox) {

		$this->pagebox = $pagebox;

		// register metabox
		add_action( 'add_meta_boxes', array( $this, 'register_metabox' ), 10, 1 );

		// enqueue scripts
		add_action( 'admin_print_scripts-post-new.php', array( $this, 'enqueue_scripts' ) );
		add_action( 'admin_print_scripts-post.php', array( $this, 'enqueue_scripts' ) );

		// enqueue styles
		add_action( 'admin_print_styles-post-new.php', array( $this, 'enqueue_styles' ) );
		add_action( 'admin_print_styles-post.php', array( $this, 'enqueue_styles' ) );

		// set ajax actions
		add_action( 'wp_ajax_pagebox_listing', array( $this, 'ajax_listing' ) );
		add_action( 'wp_ajax_pagebox_edit', array( $this, 'ajax_edit' ) );
		add_action( 'wp_ajax_pagebox_template', array( $this, 'ajax_template' ) );
		add_action( 'wp_ajax_count_posts', array( $this, 'ajax_count_posts' ) );

		// perform save action
		add_action( 'save_post', array( $this, 'save' ),10 ,2 );
		add_action( 'wp_restore_post_revision', array( $this,'my_plugin_restore_revision'), 10, 2 );
		add_action( 'edit_form_after_title', array( $this, 'edit_form_after_title' ) );
		add_filter('_wp_post_revision_fields', array($this, 'wp_post_revision_fields') );
		add_filter('wp_save_post_revision_check_for_changes', array($this, 'force_save_revision'), 10, 3);
		//add_action('edit_form_after_title', array($this, 'edit_form_after_title'));

	}

	public function my_plugin_restore_revision( $post_id, $revision_id ) {


		$modules  = get_metadata( 'post', $revision_id, 'pagebox_modules', true );
		$template  = get_metadata( 'post', $revision_id, 'pagebox_template', true );

		if ( $modules ) {

				$meta_value = maybe_unserialize( $modules );

				foreach ($meta_value as $k => $meta) {

					foreach ($meta as $j => $item) {
						$x = str_replace('\\', '\\\\', $item);
						$meta_value[$k][$j] = $x;
					}

				}
				update_post_meta( $post_id, 'pagebox_modules', $meta_value );

		}

		if( $template ){
			update_post_meta( $post_id, 'pagebox_template', $template );
		}


	}


	public function add_input_debug_preview() {
		echo '<input type="hidden" name="pagebox_modules" value="pagebox_modules">';
		echo '<input type="hidden" name="pagebox_template" value="pagebox_template">';
	}


	/**
	 * Save post metadata when a post is saved.
	 *
	 * @param  int   $post_id The post ID.
	 * @param  post  $post The post object.
	 * @param  bool  $update Whether this is an existing post being updated or not.
	 **/
	public function save( $post_id, $post = false ) {

		//print_r($_REQUEST['pagebox-nonce']); die();

		if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
			return $post_id;
		}

		//print_r( $_REQUEST ); die();

		// only save once! WordPress save's a revision as well.
		//if( wp_is_post_revision($post_id) )
		//{
			//return $post_id;
		//}

		$parent_id = wp_is_post_revision( $post_id );

		if ( $parent_id ) {

			//echo $parent_id; echo $post_id; die();

			$parent  = get_post( $parent_id );

			if ( isset( $_REQUEST[ 'pagebox_modules' ] ) && isset( $_REQUEST[ 'pagebox_template' ] ) ) {
				$modules = $_REQUEST[ 'pagebox_modules' ];
				$template = $_REQUEST[ 'pagebox_template' ];
				update_metadata( 'post', $post_id, 'pagebox_modules', $modules );
				update_metadata( 'post', $post_id, 'pagebox_template', $template );
			}


			return $post_id;
		}



		$this->settings = get_option( 'pagebox_settings' );

		// check if post type is enabled in settings
		if( $post ) {
			if ( ! in_array( $post->post_type, $this->settings['post_types'] ) ) {
				return false;
			}
		}

		// verify nonce
		if ( ! isset( $_REQUEST['pagebox-nonce'] ) ) {
			return $post_id;
		}

		/*if ( ! wp_verify_nonce( $_REQUEST['pagebox-nonce'], 'pagebox-actions-' . $post_id ) ) {
            return false;
        }@todo*/

		// save the template information
		$template = false;

		if ( isset( $_REQUEST[ 'pagebox_template' ] ) ) {
			$template = $_REQUEST[ 'pagebox_template' ];
		}

		update_post_meta( $post_id, 'pagebox_template', $template );

		// save the modules informations
		$modules = false;

		if ( isset( $_REQUEST[ 'pagebox_modules' ] ) ) {
			$modules = $_REQUEST[ 'pagebox_modules' ];
		}
		//echo $modules; die();
		update_post_meta( $post_id, 'pagebox_modules', $modules );

	}



	function edit_form_after_title()
	{
		// globals
		global $post, $wp_meta_boxes;


		// render
		do_meta_boxes( get_current_screen(), 'pagebox_after_title', $post);


		// clean up
		unset( $wp_meta_boxes['post']['pagebox_after_title'] );

		?>
		<div style="display:none">
			<input type="hidden" name="pagebox_has_changed" id="pagebox-has-changed" value="0" />
		</div>
		<?php
	}

	function force_save_revision( $return, $last_revision, $post )
	{
		// preview hack
		if( isset($_POST['pagebox_has_changed']) && $_POST['pagebox_has_changed'] == '1' )
		{
			$return = false;
		}


		// return
		return $return;
	}

	function wp_post_revision_fields( $return ) {


		//globals
		global $post, $pagenow;


		// validate
		$allowed = false;


		// Normal revisions page
		if( $pagenow == 'revision.php' )
		{
			$allowed = true;
		}


		// WP 3.6 AJAX revision
		if( $pagenow == 'admin-ajax.php' && isset($_POST['action']) && $_POST['action'] == 'get-revision-diffs' )
		{
			$allowed = true;
		}


		// bail
		if( !$allowed )
		{
			return $return;
		}


		// vars
		$post_id = 0;


		// determin $post_id
		if( isset($_POST['post_id']) )
		{
			$post_id = $_POST['post_id'];
		}
		elseif( isset($post->ID) )
		{
			$post_id = $post->ID;
		}
		else
		{
			return $return;
		}

		//var_dump( $post_id );



		// get field objects



				$return[ 'pagebox_template' ] = 'Pagebox Template';
				$return[ 'pagebox_modules' ] = 'Pagebox Modules';


				// load value
				add_filter('_wp_post_revision_field_pagebox_template', array($this, 'wp_post_revision_field'), 10, 4);
				add_filter('_wp_post_revision_field_pagebox_modules', array($this, 'wp_post_revision_field'), 10, 5);


				// WP 3.5: left vs right
				// Add a value of the revision ID (as there is no way to determin this within the '_wp_post_revision_field_' filter!)
				if( isset($_GET['action'], $_GET['left'], $_GET['right']) && $_GET['action'] == 'diff' )
				{
					global $left_revision, $right_revision;
					$left_revision->pagebox_modules = 'revision_id=' . $_GET['left'];
					$right_revision->pagebox_modules = 'revision_id=' . $_GET['right'];
				}


		return $return;

	}


	/*
	*  wp_post_revision_field
	*
	*  This filter will load the value for the given field and return it for rendering
	*
	*  @type	filter
	*  @date	11/08/13
	*
	*  @param	$value (mixed) should be false as it has not yet been loaded
	*  @param	$field_name (string) The name of the field
	*  @param	$post (mixed) Holds the $post object to load from - in WP 3.5, this is not passed!
	*  @param	$direction (string) to / from - not used
	*  @return	$value (string)
	*/

	function wp_post_revision_field( $value, $field_name, $post = null, $direction = false)
	{
		// vars
		$post_id = 0;



		// determin $post_id
		if( isset($post->ID) )
		{
			// WP 3.6
			$post_id = $post->ID;
		}
		elseif( isset($_GET['revision']) )
		{
			// WP 3.5
			$post_id = (int) $_GET['revision'];
		}
		elseif( strpos($value, 'revision_id=') !== false )
		{
			// WP 3.5 (left vs right)
			$post_id = (int) str_replace('revision_id=', '', $value);
		}

		$value = '';

		$pagebox = WPG_Pagebox::instance();


		if( $field_name == 'pagebox_template' ) {
			$slug = get_metadata( 'post', $post_id, 'pagebox_template', true );
			if( !empty( $slug ) ){
				$template = $pagebox->templates->get_template($slug);
				$value .= $template->config['name'];
			}

		} else if( $field_name == 'pagebox_modules' ) {
			$boxes = get_metadata( 'post', $post_id, 'pagebox_modules', true );
			if( !empty( $boxes ) ) {
				foreach ($boxes as $modules) {
					$k = 0;
					foreach ($modules as $module_encode) {
						$module_decode = json_decode(stripslashes($module_encode));
						if (!$module_decode) {
							$module_decode = json_decode($module_encode);
						}
						if ($module_decode->slug == '') {
							continue;
						}

						$item = $pagebox->modules->get_module($module_decode->slug);
						$title = $item->get_config('title');

						$value .= ++$k.') '.$title."\n";
						$fields =   $item->get_config('fields');
						foreach( $fields as $field ) {
							$field_type = $field['type'];
							$field_name = $field['name'];
							if( $field_type == 'repeater' ) {
								$field_label = empty( $field['label'] ) ? false :  $field['label'];
								$value .= empty( $field_label ) ? '['.$field_name."]\n" : '['.$field_label."]\n";
								$values = &$module_decode->settings->{$field_name};
								$j = 0;
								foreach( $values as $val ) {
									$j++;
									foreach( $val as $key => $v ) {
										$v =  ( is_object($v) || is_array($v) ) ? serialize($v) : $v;
										$value .= $k.".".$j.") ".$key . " =>" . $v . "\n";
									}
								}
							} else {
								$field_label = empty( $field['label'] ) ? false :  $field['label'];
                                                                $val = &$module_decode->settings->{$field_name};
                                                                $val =  ( is_object($val) || is_array($val) ) ? serialize($val) : $val;
                                                                $value .= empty( $field_label ) ? '['.$field_name."]\n" : '['.$field_label."]\n";
                                                                $value .= ''.$val."\n";
							}
						}

					}
				}
			}
		}


		// return
		return $value;
	}

	/**
	 * Gets post types for which Pagebox metabox is enabled
	 *
	 * @access  public
	 * @author  Kuba Mikita
	 * 
	 * @return  array  post types
	 */
	public function get_enabled_post_types() {

		// if settings are not populated
		if ( empty( $this->settings ) ) {
			$this->settings = get_option( 'pagebox_settings' );
		}

		if ( empty( $this->settings[ 'post_types' ] ) ) {
			return $this->default_post_types;
		} else {
			return $this->settings[ 'post_types' ];
		}

	}

	/**
	 * Registers Metabox for Pagebox use
	 * 
	 * @access  public
	 * @author  Kuba Mikita
	 * 
	 * @return  void
	 */
	public function register_metabox() {

		foreach ( $this->get_enabled_post_types() as $post_type ) {

			add_meta_box(
				'pagebox',
				__( 'Pagebox', 'pagebox' ),
				array( $this, 'display_metabox' ),
				$post_type,
				'normal',
				'high'
			);

		}

	}
        
        public function d($t, $x) {
            echo '<!--START-'.$t.'-->';
            var_dump($x);
            echo '<!--END-'.$t.'-->';
        }

	/**
	 * Display Pagebox Metabox content
	 * 
	 * @access  public
	 * @author  Max Matloka (max@matloka.me)
	 * 
	 * @return  void
	 */
	public function display_metabox() {

		// register metabox view
		$metabox  = new View();

		// get registered templates
		$metabox->set( 'templates', $this->pagebox->templates );

		// get saved data
		global $post;
		$template = get_post_meta( $post->ID, 'pagebox_template', true );
             
		// if template is set to false no data were saved (new post/page)
		if ( $template != false ) {

			$template = $this->pagebox->templates->get_template( $template );

			ob_start();
            	$template->display_backend();
        	$template = ob_get_clean();

        	$metabox->set( 'template', $template );
			
		}

		$metabox->get_part( 'metabox/metabox', 'templates' );

	}

	/**
	 * AJAX action to list all available modules in modal
	 * 
	 * @access  public
	 * @author  Max Matloka (max@matloka.me)
	 * 
	 * @return  void
	 */
	public function ajax_listing() {

		$view = new View;

		// get modules list
		$view->set_variable( 'modules', $this->pagebox->modules->get_modules() );

		// get predefined modules
		$query = new \WP_Query( array(
			'post_type'      => 'pagebox_predefined',
			'posts_per_page' => -1
		) );

		$view->set_variable( 'predefined', $query );

		// load and display view file
		$view->get_part( 'metabox/modal/listing' );

		die();
		
	}

	/**
	 * AJAX action to edit/add module
	 * 
	 * @access  public
	 * @author  Max Matloka (max@matloka.me)
	 * 
	 * @return  void
	 */
	public function ajax_edit() {

		// get module data and create form to handle module edits
		$module = $this->pagebox->modules->get_module( $_REQUEST[ 'module' ] );
		$module->set_form();

		// load view file
		$view = new View;
		$view->set_variable( 'module', $module );

		// if there is data variable in request, current module is edited
		if ( isset( $_REQUEST[ 'data' ] ) ) {

			$data = json_decode( stripslashes( $_REQUEST[ 'data' ] ), true );

			if ( isset( $data[ 'settings' ] ) ) {
				$module->set_form_values( $data[ 'settings' ] );
			} else {
				$module->set_form_values( $data );
			}

		}

		// prepare <form> http attribute with required attributes
		$form = new \WPGeeks_HTML( 'form', array(
			'data-slug'   => $module->get_config( 'slug' ),
			'data-title'  => $module->get_config( 'title' ),
			'data-target' => $_REQUEST[ 'target' ]
		) );

		// if current module is edited add current module ID
		if ( isset( $_REQUEST[ 'id' ] ) ) {
			$form->setAttribute('data-id', $_REQUEST[ 'id' ] );
		}

		// set extra variables and load view file
		$view->set_variable( 'form', $form );
		$view->get_part( 'metabox/modal/edit' );

		die();
		
	}

	/**
	 * Render template skeleton
	 * 
	 * Renders backend skeleton of template in which
	 * we can add some modules using provided interface.
	 *
	 * @access  public
	 * @author  Max Matloka (max@matloka.me)
	 * 
	 * @return  void
	 */
	public function ajax_template() {

		// get template info
		$template = $this->pagebox->templates->get_template( $_REQUEST[ 'template' ] );

		if ( $template == false ) {
			die();
		} 

		$template->display_backend();

		die();

	}

	public function ajax_count_posts() {

		$args = array(
			'posts_per_page' => 1,
			'post_type'      => $_REQUEST[ 'type' ],
		);

		if ( $_REQUEST[ 'type' ] == 'page' ) {

			die();

		}

		// check post settings

		// check id
		if ( isset( $_REQUEST[ 'id' ] ) && !empty( $_REQUEST[ 'id' ] ) ) {

			$args[ 'p' ] = $_REQUEST[ 'id' ];

		} else {

			// check categories
			if ( isset( $_REQUEST[ 'category' ] ) && !empty( $_REQUEST[ 'category' ] ) ) {

				if ( is_array( $_REQUEST[ 'category' ] ) ) {
					$args[ 'category__in' ] = $_REQUEST[ 'category' ];
				} else {
					$args[ 'cat' ] = $_REQUEST[ 'category' ];
				}

			}

			// check tags
			if ( isset( $_REQUEST[ 'tag' ] ) && !empty( $_REQUEST[ 'tag' ] ) ) {

				if ( is_array( $_REQUEST[ 'tag' ] ) ) {
					$args[ 'tag__and' ] = $_REQUEST[ 'tag' ];
				} else {
					$args[ 'tag_id' ] = $_REQUEST[ 'tag' ];
				}

			}

			// set order settings
			if ( isset( $_REQUEST[ 'orderby' ] ) ) {
				$args[ 'orderby' ] = $_REQUEST[ 'orderby' ];
			}

			if ( isset( $_REQUEST[ 'order' ] ) ) {
				$args[ 'order' ]   = $_REQUEST[ 'order' ];
			}

			// set additional offset
			if ( isset( $_REQUEST[ 'offset' ] ) && !empty( $_REQUEST[ 'offset' ] ) ) {
				$args[ 'offset' ] = $_REQUEST[ 'offset' ];
			}

		}


		$query = new \WP_Query( $args );

		// get number of found posts
		echo $query->found_posts;
		die();

	}




	/**
	 * Enqueue styles for metabox
	 * 
	 * @access  public
	 * @author  Max Matloka (max@matloka.me)
	 * 
	 * @return  void
	 */
	public function enqueue_styles() {

		global $post_type;

		// check if metabox is enabled for current post type
		if ( !in_array( $post_type, $this->get_enabled_post_types() ) ) {
			return;
		}

		\wp_enqueue_style( 'wp-color-picker' );
		\wp_enqueue_style( 'pagebox/metabox', PAGEBOX_URL . 'src/public/css/metabox.css' );
		\wp_enqueue_style( 'pagebox/featherlight', PAGEBOX_URL . 'src/public/css/featherlight.min.css' );
		\wp_enqueue_style( 'pagebox/frosty', PAGEBOX_URL . 'src/public/css/frosty.min.css' );
		\wp_enqueue_style( 'pagebox/codemirror' );

	}

	/**
	 * Enqueue scripts for metabox
	 * 
	 * @access  public
	 * @author  Max Matloka (max@matloka.me)
	 * 
	 * @return  void
	 */
	public function enqueue_scripts() {

		global $post_type;

		// check if metabox is enabled for current post type
		if ( !in_array( $post_type, $this->get_enabled_post_types() ) ) {
			return;
		}

		// enqueue scripts
		\wp_enqueue_script( 'pagebox/metabox', PAGEBOX_URL . 'src/public/js/jquery.metabox.js', array( 
			'pagebox/serializejson',
			'pagebox/tabs',
			'pagebox/form',
			'pagebox/codemirror/css',
			'pagebox/codemirror/js',
			'pagebox/codemirror/html',
			'pagebox/featherlight', 
			'pagebox/mustache', 
			'pagebox/frosty', 
			'jquery-ui-sortable' 
		) );

		// send some data to js file
		$metabox_array = array(
			'path' => array( 
				'module' => PAGEBOX_URL . 'src/public/partials/metabox/module.mustache',
			),
			'i18n' => array(
				'sure' => __('Are you sure? Current progress will be lost.', 'pagebox')
			)
		);
		\wp_localize_script( 'pagebox/mustache', 'Pagebox', $metabox_array );
	}

}