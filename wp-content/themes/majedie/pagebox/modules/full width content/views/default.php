<div class="module-wpg module-full-width-content" style="
	<?php
	if($this->get('background_color')) {
		echo 'background-color: ' . $this->get('background_color') . ';';
	}
	;?>
	">
	<div class="container">
		<div class="col-md-12">
			<div class="text">
				<?php if($this->get('editor') != '') {
					echo $this->get('editor') ;
				} ?>
			</div>
		</div>
	</div>
</div>