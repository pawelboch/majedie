<div class="module-wpg module-full-width-content"
	<?php
	if($this->get('background_color')) {
		echo 'style="';
		echo 'background-color: ' . $this->get('background_color') . ';';
		echo '"';
	}
	;?>
	>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="text">
					<?php if($this->get('editor') != '') {
						echo $this->get('editor') ;
					} ?>
				</div>
			</div>
		</div>
	</div>
</div>