<?php

/**
 * Plugin Name: Documents-db
 * Plugin URI: 
 * Description: Plugin for store documents etc. 
 * Version: 0.1
 * Author: 
 * Author URI: 
 * License: 
 * */


//block direct execution 
if (!function_exists('add_action')) {
    exit;
}

//configuration
define('DDB__PLUGIN_URL', plugin_dir_url(__FILE__));
define('DDB__PLUGIN_DIR', plugin_dir_path(__FILE__));
define('DDB_POST_TYPE_NAME', 'documents_db');
define('UPLOAD_DIR_NAME', '_documents');
define('DDB_CAPABILITY', 'manage_options');

require_once( DDB__PLUGIN_DIR . 'class.docs-db.php' );

add_action('admin_head', array('DocumentsDB', 'menuHead'), 0);
add_action('init', array('DocumentsDB', 'init'));
add_action('admin_menu', array('DocumentsDB', 'menuInit'));
add_action('wp_ajax_documentsdb-upload-action', array('DocumentsDB', 'handleFiles'));
add_action('before_delete_post', array('DocumentsDB', 'deleteAssociatedMedia'));
add_action('add_meta_boxes', array('DocumentsDB', 'addMetaboxes'));

