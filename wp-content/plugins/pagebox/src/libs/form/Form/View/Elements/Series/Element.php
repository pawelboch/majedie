<?php
/**
 * Element view file for post input
 * 
 * @author      Pavel
 * @package     WPGeeks
 * @subpackage  Forms
 */
?>
<table>
	<tr class="subelement-post" data-type="series">
		<th class="label" scope="row">
			<label><?php _e( 'Series name', 'pagebox' ); ?></label> 
		</th>
		<td class="input">
                        <?php
				// set default value
				if (!isset($this->values)) :
					$this->values = '';
				endif;
			?>
			<select data-setting="series" class="make-chosen" name="<?php echo $this->getConfig( 'name' ); ?>">
                                <option value=""></option>
				<?php foreach ($this->series as $series): ?>

				<option value="<?php echo $series->term_id; ?>" <?php selected( $series->term_id, $this->values ); ?>>
					<?php echo $series->name; ?>
				</option>

				<?php endforeach;?>
			</select>
			<p class="description">
				<?php _e( 'Select specific series name.', 'pagebox' ); ?>
			</p>
		</td>
	</tr>
</table>