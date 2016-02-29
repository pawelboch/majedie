<div class="module-full-width-contact-form-box-title-text span-table" style="
	<?php	if($this->get('background_color')) {
		echo 'background-color: ' . $this->get('background_color') . ';';
				}
	;?>
	" data-wpg-height-100p-window>
	<div class="span-table-cell vertical-align-middle">
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<?php if($this->get('title') != '') { ;?>
					<h1
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
					><?php echo $this->get('title') ;?></h1>
					<?php } ;?>
					<?php if($this->get('editor') != '') {
						
					echo $this->get('editor') ;
						
					} ?>
				</div>
				<div class="col-xs-12 col-md-6">
					<?php echo do_shortcode('[contact-form-7 id="' . $this->get('contact_form') . '"]'); ?>
				</div>
			</div>
		</div>
	</div>
</div>