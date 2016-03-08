<?php
/**
 * Element view file for post input
 * 
 * @author      Paweł Dziedzic
 * @package     WPGeeks
 * @subpackage  Forms
 */
?>

        
    <?php if (is_array($this->docs)) : ?>

			<?php
				// set default value
				if (!isset($this->values)) :
					$this->values = '';
				endif;
			?>
			<select data-setting="docs" class="make-chosen" name="<?php echo $this->getConfig( 'name' ); ?>[]" multiple>
                                <option value=""></option>
				<?php foreach ($this->docs as $doc): ?>
                                <option value="<?php echo $doc->post_name; ?>" <?php is_array($this->values) ? selected( in_array($doc->post_name, $this->values) ) : selected( $doc->post_name, $this->values ); ?>>
					<?php echo $doc->post_title; ?>
				</option>

				<?php endforeach;?>
			</select>
			<p class="description">
				<?php _e( 'Select document name to display', 'pagebox' ); ?>
			</p>

    <?php endif; ?>