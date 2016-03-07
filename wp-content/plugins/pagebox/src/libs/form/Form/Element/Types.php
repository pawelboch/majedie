<?php
/**
 * Form helper
 * Single element class - post selector
 * 
 * @author      WPDZIEDZIC
 * @package     WPGeeks
 * @subpackage  Forms
 */

class WPGeeks_Form_Element_Types extends WPGeeks_Form_Element
{
    public function __construct($name, array $elementConfig)
    {
        parent::__construct($name, $elementConfig);

        $this->types = get_terms('type', array( 'hide_empty' => false, 'parent' => 0 ) );

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