<?php
/**
 * Form helper
 * Single element class - post selector
 * 
 * @author      Max Matloka (max@matloka.me)
 * @package     WPGeeks
 * @subpackage  Forms
 */

class WPGeeks_Form_Element_KSYSPost extends WPGeeks_Form_Element
{
    public function __construct($name, array $elementConfig)
    {
        parent::__construct($name, $elementConfig);
        
        global $wpdb;

        $this->posts = $wpdb->get_results( "SELECT * FROM `{$wpdb->get_blog_prefix( 2 )}posts` WHERE `post_status` = 'publish' AND `post_type` = 'post'", OBJECT );
        
        $this->tags = $wpdb->get_results( "SELECT * FROM {$wpdb->get_blog_prefix( 2 )}term_taxonomy INNER JOIN {$wpdb->get_blog_prefix( 2 )}terms ON {$wpdb->get_blog_prefix( 2 )}terms.term_id = {$wpdb->get_blog_prefix( 2 )}term_taxonomy.term_id WHERE {$wpdb->get_blog_prefix( 2 )}term_taxonomy.taxonomy = 'post_tag'", OBJECT );

        $this->categories = $wpdb->get_results( "SELECT * FROM {$wpdb->get_blog_prefix( 2 )}term_taxonomy INNER JOIN {$wpdb->get_blog_prefix( 2 )}terms ON {$wpdb->get_blog_prefix( 2 )}terms.term_id = {$wpdb->get_blog_prefix( 2 )}term_taxonomy.term_id WHERE {$wpdb->get_blog_prefix( 2 )}term_taxonomy.taxonomy = 'category'", OBJECT );

    }

    public function setValue($values)
    {
        $this->values = $values;
    }

    public function getValue()
    {
        return $this->values;
    }

    public function renderElement()
    {
        return parent::renderElement();
    }
}