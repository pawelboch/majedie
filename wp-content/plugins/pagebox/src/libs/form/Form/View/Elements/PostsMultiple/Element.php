<?php
/**
 * Element view file for post input
 * 
 * @author      Paweł Dziedzic
 * @package     WPGeeks
 * @subpackage  Forms
 */
?>

        
    <?php if (is_array($this->posts)) : ?>

			<?php
				// set default value
				if (!isset($this->values)) :
					$this->values = '';
				endif;
			?>
			<select data-setting="posts" class="make-chosen" name="<?php echo $this->getConfig( 'name' ); ?>[]" multiple>
                                <option value=""></option>
				<?php foreach ($this->posts as $post): ?>
                                <option value="<?php echo $post->post_name; ?>" <?php is_array($this->values) ? selected( in_array($post->post_name, $this->values) ) : selected( $post->post_name, $this->values ); ?>>
					<?php echo $post->post_title; ?>
				</option>

				<?php endforeach;?>
			</select>
			<p class="description">
				<?php _e( 'Select document name to display', 'pagebox' ); ?>
			</p>

    <?php endif; ?>