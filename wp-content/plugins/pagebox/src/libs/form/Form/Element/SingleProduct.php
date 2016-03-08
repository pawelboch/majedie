<?php
/**
 * Form helper
 * Single element class - product selector
 * 
 * @author      Pavel
 * @package     WPGeeks
 * @subpackage  Forms
 */

class WPGeeks_Form_Element_SingleProduct extends WPGeeks_Form_Element
{
    public function __construct($name, array $elementConfig)
    {
        parent::__construct($name, $elementConfig);

        $this->posts = get_posts(array(
            'posts_per_page' => -1,
            'post_type' => 'products'
        ));

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