<?php
/* 
 * WordPress Workflow Pro plugin integration
*/

	function wpi_duplicate_pagebox_meta_info($new_id, $post) {
		$post_meta_keys = get_post_custom_keys($post->ID);
		//$content = print_r( array($new_id, $post), true);
		//file_put_contents('log.txt', print_r($content, true), FILE_APPEND);
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

	add_action('owf_duplicate_post', 'wpi_duplicate_pagebox_meta_info', 20, 2);
	add_action('owf_duplicate_page', 'wpi_duplicate_pagebox_meta_info', 20, 2);


	function wpi_update_pagebox_meta_info( $original_post_id, $revised_post ) {
		$modules = get_post_meta( $revised_post->ID, 'pagebox_modules', true );
		//$array = array( $original_post_id, $revised_post, $modules, $_POST['onBlogs'], $_POST );
		//$content = print_r($array, true);
		//file_put_contents('logs.txt', $content, FILE_APPEND);

		if ( $modules ) {
			delete_post_meta($original_post_id, 'pagebox_modules');
			$meta_value = maybe_unserialize( $modules );

			foreach ($meta_value as $k => $meta) {

				foreach ($meta as $j => $item) {
					$x = str_replace('\\', '\\\\', $item);
					$meta_value[$k][$j] = $x;
				}

			}
			update_post_meta( $original_post_id, 'pagebox_modules', $meta_value );
			$shared = get_post_meta( $original_post_id, '_sharing', true );
			if( $shared ) {
				$_POST['wmpost'] = 'save_blogs';
				$curr_blog_id = get_current_blog_id();
				$onBlogs = get_post_meta( $original_post_id, '_onBlogs', true );
				if( $onBlogs AND count($onBlogs) > 1 ) {
					$blogs = array();
					foreach( $onBlogs as $blogid => $postidBlog ){
						if( intval( $curr_blog_id ) !== $blogid ) {
							$blogs[] = $blogid;
						}
					}
				}
				$_POST['onBlogs'] = $blogs;
				global $post;
				$tmp_post = $post;
				$post = get_post( $original_post_id );
				$post->post_status = 'publish';
				do_action ( 'save_post', $original_post_id, $tmp_post, true );
				$post = $tmp_post;
			}


		}
	}

	add_action( 'owf_update_published_post', 'wpi_update_pagebox_meta_info', 20, 2 );
	add_action( 'owf_update_published_page', 'wpi_update_pagebox_meta_info', 20, 2 );


