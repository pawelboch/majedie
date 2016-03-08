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

<table class="subelement">
	<tr class="subelement-post" data-type="item" class="subelement">
		<th class="label" scope="row">
			<label><?php _e( 'Name', 'pagebox' ); ?></label> 
		</th>
		<td class="input">
                        <?php
				// set default value
				if (!isset($this->values)) :
					$this->values = '';
				endif;
			?>
                        <select data-setting="item" class="make-chosen" name="<?php echo $this->getConfig( 'name' ); ?>"  >
                                <option value=""></option>
				<?php foreach ($this->posts as $post): ?>

				<option value="<?php echo $post->post_name; ?>" <?php selected($post->post_name, $this->values); ?>>
					<?php echo $post->post_title; ?>
				</option>

				<?php endforeach;?>
			</select>
			<p class="description">
				<?php _e( 'Select specific post/video/document name to display', 'pagebox' ); ?>
			</p>
		</td>
	</tr>
</table>

<?php endif; ?>