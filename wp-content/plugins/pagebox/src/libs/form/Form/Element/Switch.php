<?php
/**
 * Form helper
 * Single element class - switch input
 * 
 * @author      Max Matloka (max@matloka.me)
 * @package     WPGeeks
 * @subpackage  Forms
 */

class WPGeeks_Form_Element_Switch extends WPGeeks_Form_Element
{
    private $value;

    public function __construct($name, array $elementConfig)
    {
        parent::__construct($name, $elementConfig);
        
        // set default tag
        $this->element->setTag('input');

        // add default input type
        $this->element->setAttribute('type', 'checkbox');

        // set attributes
        $this->setAttributes($elementConfig);

        // add default name
        $this->element->setAttribute('name', $this->name);

        // set switch value
        $this->element->setAttribute('value', $this->getConfig('option'));

        return $this;
    }

    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function renderElement()
    {
        if ($this->getValue() == $this->getConfig('option')) {
            $this->element->setAttribute('checked', true);
        } else {
            $this->element->setAttribute('checked', false);
        }

        return parent::renderElement();
    }
}