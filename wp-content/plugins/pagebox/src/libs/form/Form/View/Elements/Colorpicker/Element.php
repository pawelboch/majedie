<?php
/**
 * Element view file for colorpicker
 * 
 * @author      Pavel
 * @package     WPGeeks
 * @subpackage  Forms
 */
?>
    <input data-setting="color" class="my-color-field subelement" name="<?php echo $this->getConfig( 'name' ); ?>" <?php if (isset($this->values)): ?>value="<?php echo $this->values; ?>"<?php endif; ?>/>
