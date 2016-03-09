<?php
/**
 * 
 * @author Dawid Róż <dawid.roz@nurtureagency.com>
 */

class DocumentsDB {

    private $name;
    private $version;

    public function __construct() {
        $this->name = 'Documents-DB';
        $this->version = '0.1';
    }

    public static function init() {


        /*
         * CREATE A CUSTOM POST TYPE
         */
        $labels = array(
            'name' => 'Documents DB',
            'singular_name' => 'document',
            'menu_name' => 'Documents DB',
            'name_admin_bar' => 'Post Type',
            'archives' => 'Item Archives',
            'parent_item_colon' => 'Parent Item:',
            'all_items' => 'All Items',
            'add_new_item' => 'Add New Item',
            'add_new' => 'Add New',
            'new_item' => 'New Item',
            'edit_item' => 'Edit Item',
            'update_item' => 'Update Item',
            'view_item' => 'View Item',
            'search_items' => 'Search Item',
            'not_found' => 'Not found',
            'not_found_in_trash' => 'Not found in Trash',
            'featured_image' => 'Featured Image',
            'set_featured_image' => 'Set featured image',
            'remove_featured_image' => 'Remove featured image',
            'use_featured_image' => 'Use as featured image',
            'insert_into_item' => 'Insert into item',
            'uploaded_to_this_item' => 'Uploaded to this item',
            'items_list' => 'Items list',
            'items_list_navigation' => 'Items list navigation',
            'filter_items_list' => 'Filter items list',
        );
        $args = array(
            'label' => 'document',
            'labels' => $labels,
            'supports' => array('title', 'author'),
            'hierarchical' => false,
            'public' => false,
            'show_ui' => true,
            'show_in_menu' => false,
            'menu_position' => 5,
            'show_in_admin_bar' => false,
            'show_in_nav_menus' => false,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'page',
            'rewrite' => true
        );
        register_post_type(DDB_POST_TYPE_NAME, $args);


        /*
         * CREATE TAXONOMIES
         */

        $taxonomies = array(
            array(
                'slug' => 'document-type',
                'single_name' => 'Document type',
                'plural_name' => 'Document types',
                'post_type' => DDB_POST_TYPE_NAME,
            ),
            array(
                'slug' => 'document-fund',
                'single_name' => 'Fund',
                'plural_name' => 'Funds',
                'post_type' => DDB_POST_TYPE_NAME,
            ),
            array(
                'slug' => 'document-share-class',
                'single_name' => 'Share class',
                'plural_name' => 'Share classes',
                'post_type' => DDB_POST_TYPE_NAME,
            ),
            array(
                'slug' => 'document-acc-inc',
                'single_name' => 'Acc/Inc',
                'plural_name' => 'Acc/Inc',
                'post_type' => DDB_POST_TYPE_NAME,
            ),
            array(
                'slug' => 'document-currency',
                'single_name' => 'Currency',
                'plural_name' => 'Currencies',
                'post_type' => DDB_POST_TYPE_NAME,
            ),
            array(
                'slug' => 'document-fund-domicle',
                'single_name' => 'Fund Domicile',
                'plural_name' => 'Fund Domiciles',
                'post_type' => DDB_POST_TYPE_NAME,
            ),
        );

        foreach ($taxonomies as $taxonomy) {
            $labels = array(
                'name' => $taxonomy['plural_name'],
                'singular_name' => $taxonomy['single_name'],
                'search_items' => 'Search ' . $taxonomy['plural_name'],
                'all_items' => 'All ' . $taxonomy['plural_name'],
                'parent_item' => 'Parent ' . $taxonomy['single_name'],
                'parent_item_colon' => 'Parent ' . $taxonomy['single_name'] . ':',
                'edit_item' => 'Edit ' . $taxonomy['single_name'],
                'update_item' => 'Update ' . $taxonomy['single_name'],
                'add_new_item' => 'Add New ' . $taxonomy['single_name'],
                'new_item_name' => 'New ' . $taxonomy['single_name'] . ' Name',
                'menu_name' => $taxonomy['plural_name']
            );

            $rewrite = isset($taxonomy['rewrite']) ? $taxonomy['rewrite'] : array('slug' => $taxonomy['slug']);
            $hierarchical = isset($taxonomy['hierarchical']) ? $taxonomy['hierarchical'] : true;

            register_taxonomy($taxonomy['slug'], $taxonomy['post_type'], array(
                'hierarchical' => $hierarchical,
                'labels' => $labels,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => $rewrite,
            ));
        }
    }

    public static function menuHead() {
        $uploader_options = array(
            'runtimes' => 'html5,silverlight,flash,html4',
            'browse_button' => 'documentsdb-browse-button',
            'container' => 'documentsdb-upload-ui',
            'drop_element' => 'drag-drop-area',
            'file_data_name' => 'async-upload',
            'multiple_queues' => true,
            'max_file_size' => wp_max_upload_size() . 'b',
            'url' => admin_url('admin-ajax.php'),
            'flash_swf_url' => includes_url('js/plupload/plupload.flash.swf'),
            'silverlight_xap_url' => includes_url('js/plupload/plupload.silverlight.xap'),
            'filters' => array(
                array(
                    'title' => __('Allowed Files'),
                    'extensions' => '*'
                )
            ),
            'multipart' => true,
            'urlstream_upload' => true,
            'multi_selection' => true,
            'multipart_params' => array(
                '_ajax_nonce' => '',
                'action' => 'documentsdb-upload-action'
            )
        );

        echo '<script type="text/javascript">var global_uploader_options=' . json_encode($uploader_options) . '</script>';
        wp_enqueue_script('documents-db', DDB__PLUGIN_URL . 'js/documents-db.js', array('jquery', 'plupload-all'));
    }

    public static function menuInit() {
        add_menu_page('DocumentsDB', 'Upload docs', DDB_CAPABILITY, __FILE__, 'documents_db_main');
        add_submenu_page(__FILE__, 'Documents list', 'Documents', DDB_CAPABILITY, 'edit.php?post_type=documents_db');

        //taxonomies edit
        add_submenu_page(__FILE__, 'Documents list', 'Documents types', DDB_CAPABILITY, 'edit-tags.php?taxonomy=document-type&amp;post_type=documents_db');
        add_submenu_page(__FILE__, 'Documents list', 'Funds', DDB_CAPABILITY, 'edit-tags.php?taxonomy=document-fund&amp;post_type=documents_db');
        add_submenu_page(__FILE__, 'Documents list', 'Share classes', DDB_CAPABILITY, 'edit-tags.php?taxonomy=document-share-class&amp;post_type=documents_db');
        add_submenu_page(__FILE__, 'Documents list', 'Acc/Inc', DDB_CAPABILITY, 'edit-tags.php?taxonomy=document-acc-inc&amp;post_type=documents_db');
        add_submenu_page(__FILE__, 'Documents list', 'Currencies', DDB_CAPABILITY, 'edit-tags.php?taxonomy=document-currency&amp;post_type=documents_db');
        add_submenu_page(__FILE__, 'Documents list', 'Fund Domicles', DDB_CAPABILITY, 'edit-tags.php?taxonomy=document-fund-domicle&amp;post_type=documents_db');

        function documents_db_main() {
            wp_enqueue_media();
            require_once DDB__PLUGIN_DIR . 'views/main.php';
        }

    }

    public static function change_upload_dir($dir) {
        return array(
            'path' => $dir['basedir'] . '/' . UPLOAD_DIR_NAME,
            'url' => $dir['baseurl'] . '/' . UPLOAD_DIR_NAME,
            'subdir' => '/' . UPLOAD_DIR_NAME,
                ) + $dir;
    }

    public static function checkForFileExistByTitle($title) {
        global $wpdb;
        return $wpdb->get_row("SELECT ID FROM wp_posts WHERE post_title = '" . $title . "' && post_status = 'publish' && post_type = '" . DDB_POST_TYPE_NAME . "'", 'ARRAY_N');
    }

    public static function checkForFileExistByMeta($key, $value) {
        global $wpdb;
        $rows = $wpdb->get_col($wpdb->prepare(
                        "SELECT DISTINCT $wpdb->posts.ID FROM $wpdb->posts, $wpdb->postmeta
  WHERE $wpdb->posts.ID = $wpdb->postmeta.post_id AND
  $wpdb->posts.post_type = '" . DDB_POST_TYPE_NAME . "' AND
  $wpdb->postmeta.meta_key = %s AND
  meta_value = %s", $key, $value
        ));

        return (count($rows) > 0) ? $rows[0] : false;
    }

    /*
     * handleFiles()
     * Main function for handle files uploaded via Ajax. 
     * Check for file exists - and if yes, replace this without modifications taxonomies and other data in DDB_POST_TYPE_NAME post. 
     * 
     */

    public static function handleFiles() {
        if (!function_exists('wp_handle_upload'))
            require_once( ABSPATH . 'wp-admin/includes/file.php' );

        $uploadDir = wp_upload_dir();
        $currentUploadDir = $uploadDir['basedir'] . '/' . UPLOAD_DIR_NAME;

        check_ajax_referer('documentsdb');

        $response = array();

        if (current_user_can('upload_files')) {
            if ('POST' == $_SERVER['REQUEST_METHOD']) {
                if ($_FILES) {
                    $files = $_FILES["async-upload"];
                    $fileName = $files['name'];

                    $postID = DocumentsDB::checkForFileExistByMeta('fileName', sanitize_file_name($fileName));
                    if ($postID == FALSE) {

                        $newFile = array(
                            'post_title' => wp_strip_all_tags($fileName),
                            'post_status' => 'publish',
                            'post_author' => 1,
                            'post_type' => DDB_POST_TYPE_NAME
                        );

                        $postID = wp_insert_post($newFile);


                        if (is_numeric($postID)) {
                            add_post_meta($postID, 'fileName', sanitize_file_name($fileName));
                            add_post_meta($postID, 'filePath', UPLOAD_DIR_NAME . '/' . sanitize_file_name($fileName));
                        }
                    }

                    if (file_exists($currentUploadDir . '/' . sanitize_file_name($fileName))) {
                        $params = array(
                            'numberposts' => 1,
                            'post_type' => 'attachment',
                            'meta_query' => array(
                                array(
                                    'key' => '_wp_attached_file',
                                    'value' => UPLOAD_DIR_NAME . '/' . sanitize_file_name($fileName)
                                )
                            )
                        );

                        $existing_file = get_posts($params);

                        if (isset($existing_file[0]->ID)) {
                            wp_delete_attachment($existing_file[0]->ID, true);
                        }
                    }
                }


                add_filter('upload_dir', array('DocumentsDB', 'change_upload_dir'));
                $id = media_handle_upload(
                        'async-upload', $postID, array(
                    'action' => 'documentsdb-upload-action'
                        )
                );
                remove_filter('upload_dir', array('DocumentsDB', 'change_upload_dir'));

                if (is_wp_error($id)) {
                    $response['status'] = 'error';
                    $response['error'] = $id->get_error_messages();
                } else {
                    $response['status'] = 'success';
                    $response['attachment'] = array();
                    $response['attachment']['id'] = $id;
                }
            }
        }
        echo json_encode($response);
        exit;
    }

    /**
     * Delete associated media when deleting a DDB_POST_TYPE_NAME post
     * 
     * 
     * @global type $post_type
     * @param type $id
     */
    public static function deleteAssociatedMedia($id) {
        global $post_type;
        if ($post_type != DDB_POST_TYPE_NAME)
            return;

        $media = get_children(array(
            'post_parent' => $id,
            'post_type' => 'attachment'
        ));

        if (empty($media)) {
            return;
        }

        foreach ($media as $file) {
            wp_delete_attachment($file->ID);
        }
    }

    public static function addMetaboxes() {
        function renderMetabox($post) {
            $uploadDir = wp_upload_dir();
            $url = $uploadDir['baseurl'] . '/' . get_post_meta($post->ID, 'filePath', true);
            echo '<input type="text" readonly value="' . $url . '" style="width: 100%;"/>';
        }

        add_meta_box('my-meta-box-id', 'File URL', 'renderMetabox', DDB_POST_TYPE_NAME, 'normal', 'high');
    }

}
