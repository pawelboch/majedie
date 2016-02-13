<?php
/**
* Title
*/
?>
<div class="title-module">
<div class="wpg-tbd1t wpg-tbd1t-1 big-text-block">
	<div class="span-table-cell-inset
		<?php if($this->get('block_height') == 'normal') {
			echo 'normal-height';
		}
		;?>
		"
		<?php
		if($this->get('block_color')) {
			echo 'style="background-color: ' . $this->get('block_color') . ';"';
		} ;?>
		>
		<?php if($this->get('title')) { ;?>
		<h2
		<?php
		if($this->get('title_color') || $this->get('title_size')) {
			echo 'style="';
			if($this->get('title_color')) {
				echo 'color: ' . $this->get('title_color') . ';';
			}
			if($this->get('title_size')) {
				echo 'font-size: ' . $this->get('title_size') . ';';
			}
			echo '"';
		} ;?>
		><?php echo $this->get('title') ;?></h2>
		<?php } ;?>
		<?php if($this->get('paragraph')) { ;?>
		<div class="paragraph"
			<?php
			if($this->get('paragraph_color')) {
				echo 'style="';
				echo 'color: ' . $this->get('paragraph_color') . ';';
				echo '"';
			} ;?>
		><?php echo $this->get('paragraph') ;?></div>
		<?php } ;?>
	</div>
</div>
</div>