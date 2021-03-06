<div class="module-wpg module-two-blocks-with-logo-title-button-background-image">
	<div class="container container-corrected">
		<div class="row" data-wpg-equal-height-wrap="height">
			<div class="col-xs-12">
				<div class="wpg-red-block span-table"
					<?php
					if($this->get('first_background_image') || $this->get('first_background_color') != '') {
						echo 'style="';
						if($this->get('first_background_image')) {
							echo 'background-image: url( ' . wp_get_attachment_url($this->get("first_background_image"));
							echo ');';
						}
						if($this->get('first_background_color')) {
							echo 'background-color: ' . $this->get('first_background_color') . ';';
						}
						echo '" ';
					}
					;?>
					data-wpg-equal-height-item data-wpg-equal-height-item-smartphone-remove-height>
					<div class="span-table-row">
						<div class="span-table-cell vertical-align-top">
							<h2>
							<?php if (wp_get_attachment_url($this->get('first_image_title')) != ''):?>
							<img src="<?php echo wp_get_attachment_url($this->get('first_image_title')) ;?>" alt="<?php echo $this->get('first_title') ;?>">
							<?php endif ?>
							<?php if($this->get('first_title') != '') { ;?>
							<span
								<?php if($this->get('first_title_size') || $this->get('first_title_color') != '') {
									echo 'style=" ';
									if($this->get('first_title_size') != '') {
										echo 'font-size: ' . $this->get('first_title_size') . 'px;';
									}
									if($this->get('first_title_color') != '') {
										echo 'color: ' . $this->get('first_title_color') . ';';
									}
									echo '"';
								} ;?>
							><?php echo $this->get('first_title') ;?></span>
							<?php } ;?></h2>
						</div>
					</div>
					<div class="span-table-row">
						<div class="span-table-cell vertical-align-bottom">
							<?php if($this->get('first_under_title') != '') { ;?>
							<p
								<?php if($this->get('first_under_title_size') || $this->get('first_under_title_color') != '') {
									echo 'style=" ';
									if($this->get('first_under_title_size') != '') {
										echo 'font-size: ' . $this->get('first_under_title_size') . 'px;';
									}
									if($this->get('first_under_title_color') != '') {
										echo 'color: ' . $this->get('first_under_title_color') . ';';
									}
									echo '"';
								} ;?>
							><?php echo $this->get('first_under_title') ;?></p>
							<?php } ;?>
							<?php if($this->get('first_button') != '') { ;?>
							<a class="btn-1" href="<?php echo $this->get('first_button_url'); ?>"
								<?php if($this->get('first_button_size') || $this->get('first_button_color') != '') {
									echo 'style=" ';
									if($this->get('first_button_size') != '') {
										echo 'font-size: ' . $this->get('first_button_size') . 'px;';
									}
									if($this->get('first_button_color') != '') {
										echo 'color: ' . $this->get('first_button_color') . ';';
									}
									echo '"';
								} ;?>
							><?php echo $this->get('first_button') ;?></a>
							<?php } ;?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>