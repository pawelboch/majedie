<?php
/**
 * Global Pagebox functions
 *
 * @author Kuba Mikita
 * @since 1.0.0
 *
 * @package pagebox
 */

/**
 * Outputs Pagebox templates and modules
 * @param  mixed $post WP_Post object or post ID
 * @return void
 */
function pagebox( $post = false ) {

	$pagebox = WPG_Pagebox::instance();

	if( isset($_GET['preview_id']) ) {
		$autosave = wp_get_post_autosave( $_GET['preview_id'] );
		$post_id = intval( $autosave->ID );
		if( get_metadata( 'post', $post_id, 'pagebox_modules', true ) ){
			$pagebox->frontend->display( $post_id );
		} else {
			$pagebox->frontend->display( $post );
		}
	} else {
		$pagebox->frontend->display( $post );
	}


}

function generate_var_name( $blogID ){
	switch ( $blogID ) {
		case 1:
			return "";
		case 38:
			return "_ie";
		case 80:
			return "_ukw";
		case 81:
			return "_uki";
		case 82:
			return "_sg";
		case 83:
			return "_at";
		case 84:
			return "_us";
		case 85:
			return "_fr";
		case 86:
			return "_de";
		case 87:
			return "_be";
		case 88:
			return "_dk";
		case 89:
			return "_fi";
		case 90:
			return "_lu";
		case 91:
			return "_nl";
		case 92:
			return "_no";
		case 93:
			return "_se";
		case 94:
			return "_ch";
		case 95:
			return "_it";
		case 96:
			return "_es";
		case 97:
			return "_au";
		case 98:
			return "_row";
                case 101:
			return "_is";
	}
}