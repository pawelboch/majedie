<div class="module-wpg module-full-width-title-paragraph-background-image"
	<?php
	if($this->get('ou_background_color')) {
		echo 'style="';
		echo 'background-color: ' . $this->get('ou_background_color') . ';';
		echo '"';
	}
	;?>
	>
	<div class="container">
		<div class="wpg-container-inset"
			<?php
			if($this->get('background_image') || $this->get('in_background_color') != '') {
				echo 'style="';
				if($this->get('background_image')) {
					echo 'background-image: url( ' . wp_get_attachment_url($this->get("background_image")) . ');';
				}
				if($this->get('in_background_color')) {
					echo 'background-color: ' . $this->get('in_background_color') . ';';
				}
				echo '"';
			}
			;?>
			>
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<?php if($this->get('title') != '') { ;?>
					<h2
					<?php if($this->get('title_size') || $this->get('title_color') != '') {
						echo 'style=" ';
						if($this->get('title_size') != '') {
							echo 'font-size: ' . $this->get('title_size') . 'px;';
						}
						if($this->get('title_color') != '') {
							echo 'color: ' . $this->get('title_color') . ';';
						}
						echo '"';
					} ;?>
					><?php echo $this->get('title') ;?></h2>
					<?php } ;?>
					<?php if($this->get('editor') != '') {
						
					echo $this->get('editor') ;
						
					} ?>
				</div>
			</div>
		</div>
	</div>
</div>