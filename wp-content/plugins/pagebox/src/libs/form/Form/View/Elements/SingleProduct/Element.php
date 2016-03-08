<?php
/**
 * Element view file for product input
 * 
 * @author      Pavel
 * @package     WPGeeks
 * @subpackage  Forms
 */
?>
<table>
	<tr class="subelement-post" data-type="product">
		<th class="label" scope="row">
			<label><?php _e( 'Product name', 'pagebox' ); ?></label> 
		</th>
		<td class="input">
                        <?php
				// set default value
				if (!isset($this->values)) :
					$this->values = '';
				endif;
			?>
			<select data-setting="product" class="make-chosen" name="<?php echo $this->getConfig( 'name' ); ?>" class="subelement">
				<?php foreach ($this->posts as $post): ?>

				<option value="<?php echo $post->ID; ?>" <?php selected($post->ID, $this->values); ?>>
					<?php echo $post->post_title; ?>
				</option>

				<?php endforeach;?>
			</select>
			<p class="description">
				<?php _e( 'Select specific product name to display', 'pagebox' ); ?>
			</p>
		</td>
	</tr>
</table>