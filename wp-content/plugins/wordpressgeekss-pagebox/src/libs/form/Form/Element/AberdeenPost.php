<?php
/**
 * Form helper
 * Single element class - aberdeen_post
 * 
 * @author      Max Matloka (max@matloka.me)
 * @package     WPGeeks
 * @subpackage  Forms
 */

class WPGeeks_Form_Element_AberdeenPost extends WPGeeks_Form_Element
{
    public function __construct($name, array $elementConfig)
    {
        parent::__construct($name, $elementConfig);

        $this->wp_posts        = get_posts('posts_per_page=-1&orderby=title&order=ASC');
        $this->feed_posts      = aberdeen_get_feed_posts();
        $this->feed_tags       = aberdeen_get_feed_tags();

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
