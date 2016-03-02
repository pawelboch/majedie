<div class="module-wpg module-full-width-2-blocks-with-title-paragraph">
	<div class="container">
		<div class="row" data-wpg-equal-height-wrap="min-height">
			<div class="col-xs-12 col-sm-6">
				<div class="wpg-inset-col" style="
					<?php	if($this->get('title1_background_color')) {
						echo 'background-color: ' . $this->get('title1_background_color') . ';';
								}
					;?>
					" data-wpg-equal-height-item data-wpg-equal-height-item-smartphone-remove-height>
					<?php if($this->get('title1') != '') { ;?>
					<h2
					<?php if($this->get('title1_size') || $this->get('title1_font_color') != '') {
						echo 'style=" ';
						if($this->get('title1_size') != '') {
							echo 'font-size: ' . $this->get('title1_size') . 'px;';
						}
						if($this->get('title1_font_color') != '') {
							echo 'color: ' . $this->get('title1_font_color') . ';';
						}
						echo '"';
					} ;?>
					><?php echo $this->get('title1') ;?></h2>
					<?php } ;?>
					<?php if($this->get('editor1') != '') {
						
					echo $this->get('editor1') ;
						
					} ?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="wpg-inset-col" style="
					<?php	if($this->get('title2_background_color')) {
						echo 'background-color: ' . $this->get('title2_background_color') . ';';
								}
					;?>
					" data-wpg-equal-height-item data-wpg-equal-height-item-smartphone-remove-height>
					<?php if($this->get('title2') != '') { ;?>
					<h2
					<?php if($this->get('title2_size') || $this->get('title2_font_color') != '') {
						echo 'style=" ';
						if($this->get('title2_size') != '') {
							echo 'font-size: ' . $this->get('title2_size') . 'px;';
						}
						if($this->get('title1_font_color') != '') {
							echo 'color: ' . $this->get('title2_font_color') . ';';
						}
						echo '"';
					} ;?>
					><?php echo $this->get('title2') ;?></h2>
					<?php } ;?>
					<?php if($this->get('editor2') != '') {
						
					echo $this->get('editor2') ;
						
					} ?>
				</div>
			</div>
		</div>
	</div>
</div>