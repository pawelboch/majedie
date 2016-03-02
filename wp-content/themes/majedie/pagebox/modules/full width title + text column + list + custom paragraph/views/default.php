<div class="module-wpg module-full-width-title-text-column-list-custom-paragraph"
	<?php
	if($this->get('background_outside_color')) {
	echo 'style="';
	echo 'background-color: ' . $this->get('background_outside_color') . ';';
	echo '"';
	}
	;?>
	>
	<div class="container">
		<div class="wpg-container-inset">
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
			<div class="row">
				<!-- .col-xs-	.col-sm-	.col-md-	.col-lg-	.col-xl- -->
				<div class="col-xs-12 col-sm-6">
					<?php if($this->get('editor1')  != '') {
						echo $this->get('editor1') ;
					} ;?>
				</div>
				<div class="col-xs-12 col-sm-6">
					<?php if($this->get('editor2')  != '') {
							echo $this->get('editor2') ;
					} ;?>
					<?php if ( wp_get_attachment_url($this->get('image')) != '' or $this->get('editor3') != '') :?>
					<hr class="wpg-separate-1">
					<?php endif ?>
					<div class="row">
						<div class="col-xs-4">
							<a href="
								<?php if($this->get('url')  != '') {
								echo $this->get('url') ;
								} ;?>
								">
								<?php if ( wp_get_attachment_url($this->get('image')) != '') :?>
								<img src="<?php echo wp_get_attachment_url($this->get('image')) ;?>" alt="<?php echo $this->get('title') ;?>">
								<?php endif ?>
							</a>
						</div>
						<div class="col-xs-8">
							<?php if($this->get('editor3')  != '') {
							echo $this->get('editor3') ;
							} ;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>