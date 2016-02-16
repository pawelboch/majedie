<div class="container-fluid module_full_width_title-text-photo"
<?php 
	if($this->get('block_outside_color')) {
		echo 'style="';
		echo 'background-color: ' . $this->get('block_outside_color') . ';';
		echo '"';
	}
;?>
>
	<div class="container">
		<div class="row">
			<div class="col-md-6 block first-block 
			<?php  
			if($this->get('image_side') == 'right') {
				echo 'col-xs-push-6 is-right';
			} else {
				echo 'is-left';
			}
			;?>
			">
				<div class="inner"
				<?php 
					if($this->get('block_inside_color')) {
						echo 'style="';
						echo 'background-color: ' . $this->get('block_inside_color') . ';';
						echo '"';
					}
				;?>
				>
					<h2
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
					><?php echo $this->get('title') ;?></h2>
					<div class="text"
					<?php 
					if($this->get('text_size') || $this->get('text_color') != '') {
						echo 'style=" ';
						if($this->get('text_size') != '') {
							echo 'font-size: ' . $this->get('text_size') . 'px;';
						}
						if($this->get('text_color') != '') {
							echo 'color: ' . $this->get('text_color') . ';';
						}
						echo '"';
					}
					;?>
					>
						<?php echo $this->get('text') ;?>
					</div>
				</div>
			</div>
			<div class="col-md-6 block second-block 
			<?php  
			if($this->get('image_side') == 'right') {
				echo 'col-xs-pull-6 is-left';
			} else {
				echo 'is-right';
			}
			;?>
			">
				<a href="<?php echo get_permalink($this->get('link')) ;?>" class="image" style="background-image: url(<?php echo wp_get_attachment_url($this->get('image')) ;?>);">
					<i class="icon-arrow"></i>
				</a>
			</div>
		</div>
	</div>
</div>