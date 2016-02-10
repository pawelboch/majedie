<?php
/**
 * Form helper
 * Single element class - page selector
 * 
 * @author      Pavel
 * @package     WPGeeks
 * @subpackage  Forms
 */

class WPGeeks_Form_Element_Link extends WPGeeks_Form_Element
{
    public function __construct($name, array $elementConfig)
    {
        parent::__construct($name, $elementConfig);

        $this->types = $this->getConfig('types');

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