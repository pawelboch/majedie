<<<<<<< HEAD
<div class="module-full-width-left-title-right-text wpg-bg-grain"
=======
<div class="module-wpg module-full-width-left-title-right-text wpg-bg-grain"

>>>>>>> 27923e73544228a7afc2e355b8cb7f3345fcdc9c
<?php	if($this->get('background_color')) {
echo 'style="';
echo 'background-color: ' . $this->get('background_color') . ';';
echo '"';
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
				>
				<?php echo $this->get('text_left') ;?>
				</h2>
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
		</div>
	</div>
</div>