<div class="module-full-width-title-paragraph-background-image" style="
<?php	if($this->get('ou_background_color')) {
		echo 'background-color: ' . $this->get('ou_background_color') . ';';
				}
			;?>
">
	<div class="container">
		<div class="wpg-container-inset" style="
		<?php	if($this->get('background_image')) {
		echo 'background-image: url( ' . wp_get_attachment_url($this->get("background_image"));
		echo ');';
			}
			;?>

		<?php	if($this->get('in_background_color')) {
		echo 'background-color: ' . $this->get('in_background_color') . ';';
				}
			;?>
		">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
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
					<?php if($this->get('editor') != '') {
						
			echo $this->get('editor') ;
						
						} ?>
				</div>
			</div>
		</div>
	</div>
</div>