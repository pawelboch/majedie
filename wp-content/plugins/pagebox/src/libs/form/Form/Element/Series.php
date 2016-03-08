<?php
/**
 * Form helper
 * Single element class - post selector
 * 
 * @author      Pavel
 * @package     WPGeeks
 * @subpackage  Forms
 */

class WPGeeks_Form_Element_Series extends WPGeeks_Form_Element
{
    public function __construct($name, array $elementConfig)
    {
        parent::__construct($name, $elementConfig);
        
        $taxonomies = array( 
            'series',
        );

        $args = array(
            'orderby'           => 'name', 
            'order'             => 'ASC',
            'hide_empty'        => true, 
        ); 
        
        $this->series = get_terms($taxonomies, $args);

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