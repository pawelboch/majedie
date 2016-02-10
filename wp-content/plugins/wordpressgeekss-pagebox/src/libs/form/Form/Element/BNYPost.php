<?php
/**
 * Form helper
 * Single element class - post selector
 * 
 * @author      Max Matloka (max@matloka.me)
 * @package     WPGeeks
 * @subpackage  Forms
 */

class WPGeeks_Form_Element_BNYPost extends WPGeeks_Form_Element
{
    public function __construct($name, array $elementConfig)
    {
        parent::__construct($name, $elementConfig);


        $this->posts = get_posts('posts_per_page=-1&orderby=title&order=ASC');
        $this->pages = get_posts('posts_per_page=-1&post_type=page&orderby=title&order=ASC');
        $this->managers = get_posts('posts_per_page=-1&post_type=asset-manager&orderby=title&order=ASC');
        $this->funds = get_posts('posts_per_page=-1&post_type=fund&orderby=title&order=ASC');

        $this->categories = get_categories();
        $this->tags = get_tags();



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