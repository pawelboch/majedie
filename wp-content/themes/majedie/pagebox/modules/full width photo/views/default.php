<div class="container-fluid module-full_width_photo">
	<div class="inner"
	<?php if($this->get('image') != '') {
		echo 'style=" ';
		echo 'background-image: url(' . wp_get_attachment_url($this->get('image')) . ');';
		echo 'min-height: ' . $this->get('height') . 'px;';
		echo '"';
	} ;?>
	>
	</div>
</div>