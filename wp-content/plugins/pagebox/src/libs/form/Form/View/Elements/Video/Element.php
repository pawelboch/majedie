<?php
/**
 * Element view file for post input
 * 
 * @author      Paweł Dziedzic
 * @package     WPGeeks
 * @subpackage  Forms
 */
?>

        
    <?php if (is_array($this->videos)) : ?>

			<?php
				// set default value
				if (!isset($this->values )) :
					$this->values = '';
				endif;
			?>
			<select data-setting="videos" class="make-chosen" name="<?php echo $this->getConfig( 'name' ); ?>[]" multiple>
                            <option value=""></option>
				<?php foreach ($this->videos as $video): ?>
                                <option value="<?php echo $video->post_name; ?>" <?php is_array($this->values) ? selected( in_array($video->post_name, $this->values) ) : selected( $video->post_name, $this->values ); ?>>
					<?php echo $video->post_title; ?>
				</option>

				<?php endforeach;?>
			</select>
			<p class="description">
				<?php _e( 'Select video name to display', 'pagebox' ); ?>
			</p>

    <?php endif; ?>