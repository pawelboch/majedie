<div class="module-wpg module-full-width-title"
	<?php
	if($this->get('background_color')) {
		echo 'style="';
		echo 'background-color: ' . $this->get('background_color') . ';';
		echo '"';
	}
	;?>
	>
	<div class="container">
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
	</div>
</div>