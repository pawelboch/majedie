<?php
/**
 * Form helper
 * Single element class - query
 * 
 * @author      Kuba Mikita
 * @package     WPGeeks
 * @subpackage  Forms
 */

class WPGeeks_Form_Element_Query extends WPGeeks_Form_Element
{
    public function __construct($name, array $elementConfig)
    {
        parent::__construct($name, $elementConfig);

        // set attributes
        $this->setAttributes($elementConfig);
        
        // set default tag
        $this->element->setTag('select');

        if ( $this->getConfig('multiple') ) {
            $name = $this->name . '[]';
        } else {
            $name = $this->name;
        }

        // add default name
        $this->element->setAttribute('name', $name);

        // set class for chosen
        $this->element->setAttribute('class', 'make-chosen');

        return $this;
    }

    public function renderElement()
    {
        // render <select> tag
        $output = $this->element->getRenderedTag();

        // render options
        
        if ( ! $this->getConfig('query') ) {
            $posts = false;
        } else {
            $posts = get_posts( $this->getConfig('query') );
        }

        if ( empty( $posts ) ) {
        	$output .= 'Nothing found';
        	$output .= $this->element->getRenderedClosingTag();
        	return $output;
        }

        if ( is_array( $posts ) ) {

            if ( $this->getConfig('empty') == true ) {
                
                $option = new WPGeeks_HTML('option');
                $option->setAttribute('value', '');
                
                $output .= $option->getRenderedTag();
                $output .= $option->getRenderedClosingTag();

            }

            foreach ($posts as $post) {
                // create <option> tag
                $option = new WPGeeks_HTML('option');
                $option->setAttribute('value', $post->ID);

                // set value
                if ($this->getValue() != null && $this->getValue() == $post->ID) {
                    $option->setAttribute('selected', 'selected');
                } else if ( $this->getValue() != null && is_array( $this->getValue() ) && in_array( $post->ID, $this->getValue() ) ) {
                    $option->setAttribute('selected', 'selected');
                }

                $output .= $option->getRenderedTag();
                $output .= $post->post_title;
                $output .= $option->getRenderedClosingTag();
            }
        }

        $output .= $this->element->getRenderedClosingTag();

        return $output;
    }
}