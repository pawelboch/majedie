<div class="module-wpg module-full-width-3-blocks-with-icon-title-text" style="
				<?php	if($this->get('background')) {
		echo 'background-color: ' . $this->get('background') . ';';
				}
			;?>
				">
	<div class="container">
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
		
		<div class="row" data-wpg-equal-height-wrap="min-height">
			<div class="col-xs-12 col-sm-4">
				<div class="wpg-inset-col" style="
				<?php	if($this->get('background_color_row1')) {
		echo 'background-color: ' . $this->get('background_color_row1') . ';';
				}
			;?>
				" data-wpg-equal-height-item data-wpg-equal-height-item-smartphone-remove-height>
					<?php if (wp_get_attachment_url($this->get('image_row1')) != ''):?>
							<img src="<?php echo wp_get_attachment_url($this->get('image_row1')) ;?>" alt="<?php echo $this->get('title_row1') ;?>">
						<?php endif ?>
					<?php if($this->get('title_row1') != '') { ;?>
						<h3
						<?php if($this->get('title_size_row1') || $this->get('title_color_row1') != '') {
							echo 'style=" ';
							if($this->get('title_size_row1') != '') {
								echo 'font-size: ' . $this->get('title_size_row1') . 'px;';
							}
							if($this->get('title_color_row1') != '') {
								echo 'color: ' . $this->get('title_color_row1') . ';';
							}
							echo '"';
						} ;?>
						><?php echo $this->get('title_row1') ;?></h3>
						<?php } ;?>
					<?php if($this->get('editor_row1') != '') {
						
			echo $this->get('editor_row1') ;
						
						} ?>
				</div>
			</div>
		




			<div class="col-xs-12 col-sm-4">
				<div class="wpg-inset-col" style="
				<?php	if($this->get('background_color_row2')) {
		echo 'background-color: ' . $this->get('background_color_row2') . ';';
				}
			;?>
				" data-wpg-equal-height-item data-wpg-equal-height-item-smartphone-remove-height>
					<?php if (wp_get_attachment_url($this->get('image_row2')) != ''):?>
							<img src="<?php echo wp_get_attachment_url($this->get('image_row2')) ;?>" alt="<?php echo $this->get('title_row2') ;?>">
						<?php endif ?>
					<?php if($this->get('title_row2') != '') { ;?>
						<h3
						<?php if($this->get('title_size_row2') || $this->get('title_color_row2') != '') {
							echo 'style=" ';
							if($this->get('title_size_row2') != '') {
								echo 'font-size: ' . $this->get('title_size_row2') . 'px;';
							}
							if($this->get('title_color_row2') != '') {
								echo 'color: ' . $this->get('title_color_row2') . ';';
							}
							echo '"';
						} ;?>
						><?php echo $this->get('title_row2') ;?></h3>
						<?php } ;?>
					<?php if($this->get('editor_row2') != '') {
						
			echo $this->get('editor_row2') ;
						
						} ?>
				</div>
			</div>





				<div class="col-xs-12 col-sm-4">
				<div class="wpg-inset-col" style="
				<?php	if($this->get('background_color_row3')) {
		echo 'background-color: ' . $this->get('background_color_row3') . ';';
				}
			;?>
				" data-wpg-equal-height-item data-wpg-equal-height-item-smartphone-remove-height>
					<?php if (wp_get_attachment_url($this->get('image_row3')) != ''):?>
							<img src="<?php echo wp_get_attachment_url($this->get('image_row3')) ;?>" alt="<?php echo $this->get('title_row3') ;?>">
						<?php endif ?>
					<?php if($this->get('title_row3') != '') { ;?>
						<h3
						<?php if($this->get('title_size_row3') || $this->get('title_color_row3') != '') {
							echo 'style=" ';
							if($this->get('title_size_row3') != '') {
								echo 'font-size: ' . $this->get('title_size_row3') . 'px;';
							}
							if($this->get('title_color_row3') != '') {
								echo 'color: ' . $this->get('title_color_row3') . ';';
							}
							echo '"';
						} ;?>
						><?php echo $this->get('title_row3') ;?></h3>
						<?php } ;?>
					<?php if($this->get('editor_row3') != '') {
						
			echo $this->get('editor_row3') ;
						
						} ?>
				</div>
			</div>




		</div>



	</div>
</div>