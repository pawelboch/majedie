<div class="module-full-width-title-subtitle-paragraph span-table" style="
	<?php	if($this->get('background_color')) {
		echo 'background-color: ' . $this->get('background_color') . ';';
				}
	;?>
	" data-wpg-height-100p-window>
	<div class="span-table-cell vertical-align-middle">
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
			
			<?php if($this->get('subtitle') != '') { ;?>
			<h3
			<?php if($this->get('subtitle_size') || $this->get('subtitle_color') != '') {
				echo 'style=" ';
				if($this->get('subtitle_size') != '') {
					echo 'font-size: ' . $this->get('subtitle_size') . 'px;';
				}
				if($this->get('subtitle_color') != '') {
					echo 'color: ' . $this->get('subtitle_color') . ';';
				}
				echo '"';
			} ;?>
			><?php echo $this->get('subtitle') ;?></h3>
			<?php } ;?>
			
			<?php if($this->get('editor') != '') {
			echo '<p>';
			echo $this->get('editor') ;
			echo '</p>';
			} ?>
		</div>
	</div>
</div>