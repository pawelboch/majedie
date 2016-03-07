<?php
/* 
 * WordPress Duplicate Post plugin integration
*/

function pagebox_duplicate_post_integration() {

	function duplicate_pagebox_meta_info($new_id, $post)
	{

		$post_meta_keys = get_post_custom_keys($post->ID);
		if (empty($post_meta_keys)) return;

		if (in_array('pagebox_modules', $post_meta_keys)) {
			$meta_values = get_post_custom_values('pagebox_modules', $post->ID);

			foreach ($meta_values as $meta_value) {

				$meta_value = maybe_unserialize($meta_value);
				foreach ($meta_value as $k => $meta) {
					foreach ($meta as $j => $item) {
						$x = str_replace('\\', '\\\\', $item);
						$meta_value[$k][$j] = $x;
					}

				}

				update_post_meta($new_id, 'pagebox_modules', $meta_value);
			}
		}
		delete_post_meta( $new_id, '_sharing' );
		delete_post_meta( $new_id, '_onBlogs' );
	}

	add_action('dp_duplicate_post', 'duplicate_pagebox_meta_info', 11, 2);
	add_action('dp_duplicate_page', 'duplicate_pagebox_meta_info', 11, 2);

}


add_action( 'admin_init', 'pagebox_duplicate_post_integration' );
