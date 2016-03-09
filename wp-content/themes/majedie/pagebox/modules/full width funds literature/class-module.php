<?php
/**
 * Module class is an extension for Pagebox\Module
 * abstract class. It registeres new box into
 * Pagebox plugin
 *
 * Call to action module with slider
 */

namespace Majedie\Pagebox\Modules\fullWidthFundsLiterature;

use \Pagebox\Modules\Module as Abstract_Module;

class Module extends Abstract_Module
{

    /**
     * Module constructor
     * @access public
     */
    public function __construct()
    {

        parent::__construct();

    }

    /**
     * Template config
     * @return void
     */
    public function set_config()
    {

        $this->config = array(
            // Name of the box for plugin use. Only alphanumeric charactes
            // and underscores are allowed
            'slug'        => 'full_width_funds_literature',
            // Human readable title of box. It will be displayed in all
            // backend functionalities
            'title'       => __('Literature', 'pagebox_blocks'),
            // Short description about what box outputs. It will be displayed
            // below the title in new box modal window.
            'description' => __('', 'pagebox_blocks'),
            // Elements with higher priority will be displayed earlier in
            // new box modal window
            'priority'    => 1,
            // Custom path for image file. Default image (module.jpg) should be
            // located in the main folder of current box
            'image'       => '',
            'limit'       => array(
                'width' => array(0, 100),
            ),
            // minimum and maximum percent width that module fits in
            // WPGeeks_Forms
            'fields'      => array(
                array(
                    'type'        => 'text',
                    'group'       => __('General', 'pagebox'),
                    'name'        => 'title',
                    'label'       => __('Title', 'pagebox'),
                    'description' => __('Main module title', 'pagebox'),
                ),

                array(
                    'type'        => 'colorpicker',
                    'group'       => __('Design', 'pagebox'),
                    'name'        => 'button_font_color',
                    'label'       => __('Button font color', 'pagebox'),
                    'description' => __('', 'pagebox'),
                ),
            ),
        );
    }

    /**
     * Logic of module
     *
     * @param  object &$settings module raw settings
     * @return void
     */
    public function logic(&$settings)
    {
        //available terms: document-type, document-fund, document-share-class, document-acc-inc, document-currency, document-fund-domicle

        //termsNames[]: slug, display name
        $termsNames = array(
            array('document-type', 'Doc Type'),
            array('document-fund', 'Fund'),
            array('document-share-class', 'Share class'),
            array('document-acc-inc', 'Acc/Inc'),
            array('document-currency', 'Currency'),
            array('document-fund-domicle', 'Fund Domicle'),
        );

        $terms  = array();
        $groups = array();
        $items = array();


        foreach ($termsNames as $termName) {
            $currentTerm = get_terms($termName[0], array(
                'orderby'    => 'count',
                'hide_empty' => true,
            ));

            $terms[] = array(
                'slug'    => $termName[0],
                'name'    => $termName[1],
                'content' => $currentTerm,
                'selected' => (isset($_GET[$termName[0]]) && strlen($_GET[$termName[0]]) > 0 ) ? $_GET[$termName[0]] : false
            );

            //groupBy
            if ($termName[0] == 'document-fund-domicle') {
                $groups = array(
                    'slug'    => $termName[0],
                    'name'    => $termName[1],
                    'content' => $currentTerm,
                );
            }

        };

        //handle params and create taxQuery arrays  
        $customTaxQuery = array();
        if (isset($_GET['wpg-submit-literature']) && $_GET['wpg-submit-literature'] == 'Apply') {
            foreach ($termsNames as $termName) {
                if (isset($_GET[$termName[0]]) && strlen($_GET[$termName[0]]) > 0) {
                    $customTaxQuery[] = array(
                        'taxonomy' => $termName[0],
                        'field'    => 'slug',
                        'terms'    => array($_GET[$termName[0]]),
                        'operator' => 'IN'
                    );
                }
            }
        }

        if (count($groups) > 0) {
            foreach ($groups['content'] as $group) {

                $basicTaxQuery = array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'document-fund-domicle',
                        'field'    => 'slug',
                        'terms'    => $group->slug,
                    )
                );

                if (count($customTaxQuery) > 0) {
                    $basicTaxQuery = array_merge($basicTaxQuery, $customTaxQuery);
                }

                $params = array(
                    'post_type' => DDB_POST_TYPE_NAME,
                    'tax_query' => array(
                        0 => $basicTaxQuery,
                    ),
                );

                $query = new \WP_Query($params);
                $posts = $query->get_posts();
                $viewValues = array();
                $uploadDir = wp_upload_dir();

                foreach ($posts as $post) {
                    $viewValues[] = array(
                        0 => wp_list_pluck(wp_get_object_terms($post->ID, $termsNames[0][0]), 'name'),
                        1 => wp_list_pluck(wp_get_object_terms($post->ID, $termsNames[1][0]), 'name'),
                        2 => wp_list_pluck(wp_get_object_terms($post->ID, $termsNames[2][0]), 'name'),
                        3 => wp_list_pluck(wp_get_object_terms($post->ID, $termsNames[4][0]), 'name'),
                        4 => wp_list_pluck(wp_get_object_terms($post->ID, $termsNames[3][0]), 'name'),
                        5 => $uploadDir['baseurl'] . '/' . get_post_meta($post->ID, 'filePath', true),
                        6 => $post->post_name,
                    );
                }

                $items[] = array(
                    'name'     => $group->name,
                    'files' => $viewValues,
                );
            }
        }

        // //return values
        $settings->terms = $terms;
        $settings->items = $items;

        return $settings;

    }
}
