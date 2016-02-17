<div class="module-full-width-contact-form-title-paragraph"
<?php 
if($this->get('background_color') != '') {
	echo 'style=" ';
	echo 'background-color: ' . $this->get('background_color') . ';';
	echo '"';
}
;?>
>
	<div class="container">
		<div>
			<h2
			<?php 
			if($this->get('title_size') || $this->get('title_color') != '') {
				echo 'style=" ';
				if($this->get('title_size') != '') {
					echo 'font-size: ' . $this->get('title_size') . 'px;';
				}
				if($this->get('title_color') != '') {
					echo 'color: ' . $this->get('title_color') . ';';
				}
				echo '"';
			}
			;?>
			><?php echo $this->get('title') ;?></h2>
			<div class="text"
			<?php 
			if($this->get('text_size') || $this->get('text_color') != '') {
				echo 'style=" ';
				if($this->get('text_size') != '') {
					echo 'font-size: ' . $this->get('text_size') . 'px;';
				}
				if($this->get('text_color') != '') {
					echo 'color: ' . $this->get('text_color') . ';';
				}
				echo '"';
			}
			;?>
			>
			<?php echo $this->get('text') ;?>
			</div>
			<?php echo do_shortcode('[contact-form-7 id="' . $this->get('contact_form') . '"]'); ?>
		</div>
	</div>
</div>

<?php 

if($this->get('form_label_size') || $this->get('form_label_color') || $this->get('form_input_color') != '') {
	echo '<style>';
	if($this->get('form_label_size') || $this->get('form_label_color') != '') {
		echo '.module-full-width-contact-form-title-paragraph label {';
		if($this->get('form_label_size') != '') {
			echo 'font-size: ' . $this->get('form_label_size') . 'px;';
		}
		if($this->get('form_label_color') != '') {
			echo 'color: ' . $this->get('form_label_color') . ';';
		}
		echo '}';
	}
	if($this->get('form_input_color') != '') {
		echo '.module-full-width-contact-form-title-paragraph input, .module-full-width-contact-form-title-paragraph textarea {';
		echo 'background-color: ' . $this->get('form_input_color') . ';';
		echo '}';
	}
	echo '</style>';

} ;?>