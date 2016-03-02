<div class="module-wpg module-full-width-archive-navigation"
	<?php
	if($this->get('background_color') || $this->get('text_color') != '') {
		echo 'style="';
		if($this->get('background_color')) {
		echo 'background-color: ' . $this->get('background_color') . ';';
		}
		if($this->get('text_color')) {
			echo 'color: ' . $this->get('text_color') . ';';
		}
		echo '"';
	}
	;?>
	>
	<div class="container">
		<select class="wpg-plugin-select" onchange="document.location.href=this.options[this.selectedIndex].value;">
			<option value=""><?php echo esc_attr( __( 'Select Year' ) ); ?></option>
			<?php wp_get_archives( array( 'type' => 'yearly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
		</select>
		<!--
		<select class="wpg-plugin-select">
			<?php wp_get_archives( array( 'before' => 'Archive', 'type' => 'yearly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
		</select>
		-->
	</div>
</div>