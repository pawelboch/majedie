<div class="module-wpg module-full-width-3-blocks-with-cover-title-date-download"
	<?php
	if($this->get('background_outside_color')) {
		echo 'style="';
		echo 'background-color: ' . $this->get('background_outside_color') . ';';
		echo '"';
	}
	;?>
	>
	<div class="container">
		<div class="row">
			<!-- 1 block -->
			<?php if($this->get('title_1') || $this->get('image_1') != '') { ;?>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="wpg-inset-box"
					<?php
					if($this->get('background_blocks_color')) {
						echo 'style="';
						echo 'background-color: ' . $this->get('background_blocks_color') . ';';
						echo '"';
					}
					;?>
					>
					<?php if($this->get('image_1') != '') { ;?>
					<img alt="<?php echo $this->get('title_1') ;?>" src="<?php echo wp_get_attachment_url($this->get('image_1')) ;?>">
					<?php } ;?>
					<?php if($this->get('title_1') != '') { ;?>
					<h3
					<?php
					if($this->get('title_size') || $this->get('title_color') != '') {
						echo 'style=" ';
						if($this->get('title_size') != '') {
							echo 'font-size: ' . $this->get('title_size') . 'px;';
						}
						if($this->get('title_color') != '') {
							echo 'color: ' . $this->get('title_color') . ';';
						}
						echo '"';
					}
					;?>
					>
					<?php echo $this->get('title_1') ;?>
					</h3>
					<?php } ;?>
					<?php if($this->get('date_1') != '') { ;?>
					<p class="wpg-date"
						<?php
						if($this->get('date_size') || $this->get('date_color') != '') {
							echo 'style=" ';
							if($this->get('date_size') != '') {
								echo 'font-size: ' . $this->get('date_size') . 'px;';
							}
							if($this->get('date_color') != '') {
								echo 'color: ' . $this->get('date_color') . ';';
							}
							echo '"';
						}
						;?>
						>
						<?php echo $this->get('date_1') ;?>
					</p>
					<?php } ;?>
					<?php if($this->get('button_text_1') && $this->get('button_url_1') != '') { ;?>
					<a href="<?php echo $this->get('button_url_1') ;?>" target="_blank" class="wpg-link-download"
						<?php
						if($this->get('button_size') || $this->get('button_color') != '') {
							echo 'style=" ';
							if($this->get('button_size') != '') {
								echo 'font-size: ' . $this->get('button_size') . 'px;';
							}
							if($this->get('button_color') != '') {
								echo 'color: ' . $this->get('button_color') . ';';
							}
							echo '"';
						}
						;?>
						>
						<?php echo $this->get('button_text_1') ;?>
					</a>
					<?php } ;?>
				</div>
			</div>
			<?php } ;?>
			<!-- 2 block -->
			<?php if($this->get('title_2') || $this->get('image_2') != '') { ;?>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="wpg-inset-box"
					<?php
					if($this->get('background_blocks_color')) {
						echo 'style="';
						echo 'background-color: ' . $this->get('background_blocks_color') . ';';
						echo '"';
					}
					;?>
					>
					<?php if($this->get('image_2') != '') { ;?>
					<img alt="<?php echo $this->get('title_2') ;?>" src="<?php echo wp_get_attachment_url($this->get('image_2')) ;?>">
					<?php } ;?>
					<?php if($this->get('title_2') != '') { ;?>
					<h3
					<?php
					if($this->get('title_size') || $this->get('title_color') != '') {
						echo 'style=" ';
						if($this->get('title_size') != '') {
							echo 'font-size: ' . $this->get('title_size') . 'px;';
						}
						if($this->get('title_color') != '') {
							echo 'color: ' . $this->get('title_color') . ';';
						}
						echo '"';
					}
					;?>
					>
					<?php echo $this->get('title_2') ;?>
					</h3>
					<?php } ;?>
					<?php if($this->get('date_2') != '') { ;?>
					<p class="wpg-date"
						<?php
						if($this->get('date_size') || $this->get('date_color') != '') {
							echo 'style=" ';
							if($this->get('date_size') != '') {
								echo 'font-size: ' . $this->get('date_size') . 'px;';
							}
							if($this->get('date_color') != '') {
								echo 'color: ' . $this->get('date_color') . ';';
							}
							echo '"';
						}
						;?>
						>
						<?php echo $this->get('date_2') ;?>
					</p>
					<?php } ;?>
					<?php if($this->get('button_text_2') && $this->get('button_url_2') != '') { ;?>
					<a href="<?php echo $this->get('button_url_2') ;?>" target="_blank" class="wpg-link-download"
						<?php
						if($this->get('button_size') || $this->get('button_color') != '') {
							echo 'style=" ';
							if($this->get('button_size') != '') {
								echo 'font-size: ' . $this->get('button_size') . 'px;';
							}
							if($this->get('button_color') != '') {
								echo 'color: ' . $this->get('button_color') . ';';
							}
							echo '"';
						}
						;?>
						>
						<?php echo $this->get('button_text_2') ;?>
					</a>
					<?php } ;?>
				</div>
			</div>
			<?php } ;?>
			
			<!-- 3 block -->
			<?php if($this->get('title_3') || $this->get('image_3') != '') { ;?>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="wpg-inset-box"
					<?php
					if($this->get('background_blocks_color')) {
						echo 'style="';
						echo 'background-color: ' . $this->get('background_blocks_color') . ';';
						echo '"';
					}
					;?>
					>
					<?php if($this->get('image_3') != '') { ;?>
					<img alt="<?php echo $this->get('title_3') ;?>" src="<?php echo wp_get_attachment_url($this->get('image_3')) ;?>">
					<?php } ;?>
					<?php if($this->get('title_3') != '') { ;?>
					<h3
					<?php
					if($this->get('title_size') || $this->get('title_color') != '') {
						echo 'style=" ';
						if($this->get('title_size') != '') {
							echo 'font-size: ' . $this->get('title_size') . 'px;';
						}
						if($this->get('title_color') != '') {
							echo 'color: ' . $this->get('title_color') . ';';
						}
						echo '"';
					}
					;?>
					>
					<?php echo $this->get('title_3') ;?>
					</h3>
					<?php } ;?>
					<?php if($this->get('date_3') != '') { ;?>
					<p class="wpg-date"
						<?php
						if($this->get('date_size') || $this->get('date_color') != '') {
							echo 'style=" ';
							if($this->get('date_size') != '') {
								echo 'font-size: ' . $this->get('date_size') . 'px;';
							}
							if($this->get('date_color') != '') {
								echo 'color: ' . $this->get('date_color') . ';';
							}
							echo '"';
						}
						;?>
						>
						<?php echo $this->get('date_3') ;?>
					</p>
					<?php } ;?>
					<?php if($this->get('button_text_3') && $this->get('button_url_3') != '') { ;?>
					<a href="<?php echo $this->get('button_url_3') ;?>" target="_blank" class="wpg-link-download"
						<?php
						if($this->get('button_size') || $this->get('button_color') != '') {
							echo 'style=" ';
							if($this->get('button_size') != '') {
								echo 'font-size: ' . $this->get('button_size') . 'px;';
							}
							if($this->get('button_color') != '') {
								echo 'color: ' . $this->get('button_color') . ';';
							}
							echo '"';
						}
						;?>
						>
						<?php echo $this->get('button_text_3') ;?>
					</a>
					<?php } ;?>
				</div>
			</div>
			<?php } ;?>
		</div>
	</div>
</div>