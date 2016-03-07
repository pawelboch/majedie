<?php
/**
 * Form helper
 * Single element class - colorpicker
 * 
 * @author      Pavel
 * @package     WPGeeks
 * @subpackage  Forms
 */

class WPGeeks_Form_Element_Colorpicker extends WPGeeks_Form_Element_Text
{
     public function __construct($name, array $elementConfig)
    {
        parent::__construct($name, $elementConfig);

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