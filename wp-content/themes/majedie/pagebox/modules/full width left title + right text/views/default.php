
<div class="module-full-width-left-title-right-text wpg-bg-grain"

<?php	if($this->get('background_color')) {
		echo 'background-color: ' . $this->get('background_color') . ';';
				}
			;?>
>
	<div class="container">
		<div class="wpg-container-inset">
			<?php if($this->get('text_left') != '') { ;?>
						<h2
						<?php if($this->get('text_left_size') || $this->get('text_left_color') != '') {
							echo 'style=" ';
							if($this->get('text_left_size') != '') {
								echo 'font-size: ' . $this->get('text_left_size') . 'px;';
							}
							if($this->get('text_left_color') != '') {
								echo 'color: ' . $this->get('text_left_color') . ';';
							}
							echo '"';
						} ;?>
						><?php echo $this->get('text_left') ;?></h2>
						<?php } ;?>
			
			<?php if($this->get('text_right') != '') { ;?>
						<p
						<?php if($this->get('text_right_size') || $this->get('text_right_color') != '') {
							echo 'style=" ';
							if($this->get('text_right_size') != '') {
								echo 'font-size: ' . $this->get('text_right_size') . 'px;';
							}
							if($this->get('text_left_color') != '') {
								echo 'color: ' . $this->get('text_right_color') . ';';
							}
							echo '"';
						} ;?>
						><?php echo $this->get('text_right') ;?></p>
						<?php } ;?>
			<!--
			<div class="row">
				<div class="col-xs-12 col-sm-5">
					<h2>£11bn</h2>
				</div>
				<div class="col-xs-12 col-sm-7">
					<p>Assets under management<br>total approximately</p>
				</div>
			</div>
			-->
		</div>
	</div>
</div>