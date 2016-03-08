<?php
/**
 * Element view file for post input
 * 
 * @author      Paweł Dziedzic
 * @package     WPGeeks
 * @subpackage  Forms
 */
?>

        
    <?php if (is_array($this->options)) : ?>

			<?php
				// set default value
				if (!isset($this->values)) :
					$this->values = '';
				endif;
			?>
			<select data-setting="posts" class="make-chosen" name="<?php echo $this->getConfig( 'name' ); ?>[]" multiple>
                                <option value=""></option>
				<?php foreach ($this->options as $id => $option): ?>
                                <option value="<?php echo $id; ?>" <?php is_array($this->values) ? selected( in_array($id, $this->values) ) : selected( $id, $this->values ); ?>>
					<?php echo $option; ?>
				</option>

				<?php endforeach;?>
			</select>

    <?php endif; ?>