<?php
/**
 * Form helper
 * Single element class - Image
 *
 * @author      Dariusz Pajor
 * @package     WPGeeks
 * @subpackage  Forms
 */

class WPGeeks_Form_Element_File extends WPGeeks_Form_Element
{
    public function __construct($name, array $elementConfig)
    {
        parent::__construct($name, $elementConfig);

        // set default tag
        $this->element->setTag('input');

        // add default name
        $this->element->setAttribute('name', $this->name);

        // set input type
        $this->element->setAttribute('type', 'hidden');



        // set attributes
        $this->setAttributes($elementConfig);

        return $this;
    }
}