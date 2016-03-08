<?php
/**
 * Element view file for repeater
 * 
 * @author      Pavel
 * @package     WPGeeks
 * @subpackage  Forms
 */
?>



			<p class="description">
				<?php _e( 'Enter name', 'pagebox' ); ?>
			</p>
                        <input data-setting="button-name" name="<?php echo $this->getConfig( 'name' ); ?>[button_name]" <?php if (isset($this->values['button_name'])): ?> value="<?php echo $this->values['button_name']; ?>"<?php endif; ?> class="subelement" />


			<p class="description">
				<?php _e( 'Enter link', 'pagebox' ); ?>
			</p>
                        <input data-setting="button-link" name="<?php echo $this->getConfig( 'name' ); ?>[button_link]" <?php if (isset($this->values['button_link'])): ?> value="<?php echo $this->values['button_link']; ?>"<?php endif; ?> class="subelement" />
