<?php
/**
 * Element view file for page input
 * 
 * @author      Pavel
 * @package     WPGeeks
 * @subpackage  Forms
 */
?>
<table>
	<tr class="subelement-post" data-type="page">
                        <?php
				// set default value
				if (!isset($this->values)) {
					$this->values = '';
				}
				if( empty( $this->types ) ) {
					$this->types = array('page' => 'Pages');
				}
			?>
			<select data-setting="page" class="make-chosen subelement" name="<?php echo $this->getConfig( 'name' ); ?>[slug]" >
				<option value=""></option>
				<?php foreach ($this->types as $type => $name):
					$args = array(
						'post_type' => $type,
						'posts_per_page'   => -1,
						'orderby'          => 'name',
						'order'            => 'ASC',
					);
					$posts = get_posts( $args );
				?>
					<optgroup label="<?php echo $name ?>">
						<?php foreach ($posts as $post): ?>
							<option value="<?php echo $post->post_name; ?>" <?php if( !empty( $this->values['slug'] ) ) { selected($post->post_name, $this->values['slug'] ); } ?>>
								<?php echo $post->post_title; ?>
							</option>
						<?php endforeach;?>
					</optgroup>
				<?php endforeach;?>
			</select>
			<p class="description">
				<?php _e( 'Select specify page to link or enter link manually below.', 'pagebox' ); ?>
			</p>
	</tr>
	<tr class="subelement-post" data-type="page">
		<input data-setting="button-name" name="<?php echo $this->getConfig( 'name' ); ?>[appendix]" <?php if (isset($this->values['appendix'])): ?> value="<?php echo $this->values['appendix']; ?>"<?php endif; ?> class="subelement" />
		<p class="description">
			<?php _e( 'Custom query added to the end of the link', 'pagebox' ); ?>
		</p>
	</tr>
	<tr class="subelement-post" data-type="page">
		<input data-setting="button-name" name="<?php echo $this->getConfig( 'name' ); ?>[link]" <?php if (isset($this->values['link'])): ?> value="<?php echo $this->values['link']; ?>"<?php endif; ?> class="subelement" />
		<p class="description">
			<?php _e( 'Enter link manually.', 'pagebox' ); ?>
		</p>
	</tr>
	<tr class="subelement-post" data-type="page">
		Open in the:
		<select data-setting="page" class="subelement" name="<?php echo $this->getConfig( 'name' ); ?>[target]" >
			<option value="_self" <?php if( !empty( $this->values['target'] ) ) { selected("_self", $this->values['target'] ); } ?>>same window</option>
			<option value="_blank" <?php if( !empty( $this->values['target'] ) ) { selected("_blank", $this->values['target'] ); } ?>>new window</option>
		</select>
		<p class="description">
			<?php _e( 'Select target option.', 'pagebox' ); ?>
		</p>
	</tr>
</table>