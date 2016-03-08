<?php
/**
 * Element view file for post input
 * 
 * @author      WPDZIEDZIC
 * @package     WPGeeks
 * @subpackage  Forms
 */
?>

        
        <?php if (is_array($this->types)) : ?>
	<tr class="subelement-categories" data-type="posts">
		<th class="label" scope="row">
			<label><?php _e( 'Types', 'pagebox' ); ?></label> 
		</th>
		<td class="input">
			<?php
				// set default value
				if (!isset($this->values)) :
					$this->values = '';
				endif;
			?>
			<select data-setting="type" class="make-chosen" name="<?php echo $this->getConfig( 'name' ); ?>">
				<option value=""></option>

				<?php foreach ($this->types as $type): ?>
                                <option value="<?php echo $type->slug; ?>" <?php selected(  $type->slug, $this->values ); ?>>
						<?php echo $type->name; ?>
				</option>

				<?php endforeach;?>
			</select>
			<p class="description">
				<?php _e( 'Select type name to specify post query', 'pagebox' ); ?>
			</p>
		</td>
	</tr>
	<?php endif; ?>
       
