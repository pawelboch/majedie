<?php
$background_inside_color = $this->get('block_inside_color');
?>
<div class="module-wpg module-full-width-title-text-photo"
	<?php
		if($this->get('block_outside_color')) {
			echo 'style="';
			echo 'background-color: ' . $this->get('block_outside_color') . ';';
			echo '"';
		}
	;?>
	>
	<div class="container">
		<div class="row" data-wpg-equal-height-wrap="height">
			
			<div class="col-xs-12 col-sm-6 col-lg-6
				<?php
				if($this->get('image_side') == 'right') {
					echo 'pull-xs-right';
				} else {
					echo 'pull-xs-left';
				}
				;?>
				">
				<a href="<?php echo get_permalink($this->get('link')) ;?>" class="wpg-block wpg-image-bg" style="background-image: url(<?php echo wp_get_attachment_url($this->get('image'));?>);" data-wpg-equal-height-item data-wpg-equal-height-item-smartphone-remove-height></a>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-6 wpg-container-text
				<?php
				if($this->get('image_side') == 'right') {
					echo 'pull-xs-left';
				} else {
					echo 'pull-xs-right';
				}
				;?>
				"
				<?php
						if($this->get('block_inside_color')) {
							echo 'style="';
							echo 'background-color: ' . $this->get('block_inside_color') . ';';
							echo '"';
						}
				;?>
				>
				<div class="span-table" data-wpg-equal-height-item data-wpg-equal-height-item-smartphone-remove-height>
					<div class="span-table-cell vertical-align-middle">
						<h2>
						<a href="<?php echo get_permalink($this->get('link')) ;?>"
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
							;?>>
							<?php echo $this->get('title') ;?>
						</a>
						</h2>
						
						<?php if($this->get('text') != '') { ;?>
						<div
							<?php if($this->get('text_size') || $this->get('text_color') != '') {
								echo 'style=" ';
								if($this->get('text_size') != '') {
									echo 'font-size: ' . $this->get('text_size') . 'px;';
								}
								if($this->get('text_color') != '') {
									echo 'color: ' . $this->get('text_color') . ';';
								}
								echo '"';
							} ;?>
						><?php echo $this->get('text') ;?></div>
						<?php } ;?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>