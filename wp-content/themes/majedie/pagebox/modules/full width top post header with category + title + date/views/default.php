<div class="module-wpg module-full-width-top-post-header-with-category-title-date">
	<div class="container">
		<div class="wpg-baner-outset" style="background-color: #fff;">
			<div class="wpg-baner" style="<?php	if($this->get('background_image')) {
				echo 'background-image: url( ' . wp_get_attachment_url($this->get("background_image"));
				echo ');';
				}
				;?>">
				<p class="wpg-fund"
					<?php if($this->get('category_size') || $this->get('category_color') != '' || $this->get('shadow') != 'Yes') {
						echo 'style=" ';
						if($this->get('category_size') != '') {
							echo 'font-size: ' . $this->get('category_size') . 'px;';
						}
						if($this->get('category_color') != '') {
							echo 'color: ' . $this->get('category_color') . ';';
						}
						if($this->get('shadow') == 'Yes') {
							echo 'text-shadow: 3px 3px 3px #000;';
						}
						echo '"';
					} ;?>
					><?php
					global $post;
					$category = get_the_category($post->ID);
					echo $category[0]->name;
				?></p>
				<?php if($this->get('title') != '') { ;?>
				<h2
				<?php if($this->get('title_size') || $this->get('title_color') != '' || $this->get('shadow') != 'Yes') {
					echo 'style=" ';
					if($this->get('title_size') != '') {
						echo 'font-size: ' . $this->get('title_size') . 'px;';
					}
					if($this->get('title_color') != '') {
						echo 'color: ' . $this->get('title_color') . ';';
					}
					if($this->get('shadow') == 'Yes') {
						echo 'text-shadow: 3px 3px 3px #000;';
					}
					echo '"';
				} ;?>
				>
				<?php echo $this->get('title') ;?>
				</h2>
				<?php } ;?>
				<p class="wpg-date"
					<?php if($this->get('date_size') || $this->get('date_color') != '' || $this->get('shadow') != 'Yes') {
						echo 'style=" ';
						if($this->get('date_size') != '') {
							echo 'font-size: ' . $this->get('date_size') . 'px;';
						}
						if($this->get('date_color') != '') {
							echo 'color: ' . $this->get('date_color') . ';';
						}
						if($this->get('shadow') == 'Yes') {
							echo 'text-shadow: 3px 3px 3px #000;';
						}
						echo '"';
					} ;?>
					><?php
					echo get_the_time('d/m/Y', $post->ID);
				?></p>
			</div>
		</div>
	</div>
</div>