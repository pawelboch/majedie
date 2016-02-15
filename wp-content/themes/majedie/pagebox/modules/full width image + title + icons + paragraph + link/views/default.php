<div class="container-fluid module-full_width_image-title-icons-paragraph-link" 
<?php 
	if($this->get('background_color')) {
		echo 'style="';
		echo 'background-color: ' . $this->get('background-color') . ';';
		echo '"';
	}
;?>
>
	<div class="container">
		<div class="table-block">
			<div class="first-col
				<?php 
				if($this->get('photo_side') == 'right') {
					echo 'pull-xl-right';
				}
				;?>
			">
				<?php if($this->get('image') != '') { ;?>
				<img src="<?php echo wp_get_attachment_url($this->get('image')) ;?>" alt="<?php echo $this->get('title') ;?>">
				<?php } ;?>
			</div>
			<div class="second-col
				<?php 
				if($this->get('photo_side') == 'right') {
					echo 'pull-xl-left';
				}
				;?>
			">
				<?php if($this->get('title') != '') { ;?>
				<h2
				<?php if($this->get('title_size') || $this->get('title_color') != '') {
					echo 'style="';
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
				<?php if($this->get('social_links') != '') { ;?>
				<div class="social-icons">
					<?php foreach ($this->get('social_links') as $link) { ;?>
					<a href="<?php echo $link->link ;?>">
						<i class="fa <?php echo $link->icon ;?>"
							<?php if($this->get('social_button_size') || $this->get('social_button_color') != '') {
								echo 'style=" ';
								if($this->get('social_button_size') != '') {
									echo 'font-size: ' . $this->get('social_button_size') . 'px;';
								}
								if($this->get('social_button_color') != '') {
									echo 'color: ' . $this->get('social_button_color') . ';';
								}
								echo '"';
							} ;?>
						></i>
					</a>
					<?php } ;?>
				</div>
				<?php } ;?>
				<?php if($this->get('paragraph') != '') { ;?>
				<p
				<?php if($this->get('paragraph_size') || $this->get('paragraph_color') != '') {
					echo 'style=" ';
					if($this->get('paragraph_size') != '') {
						echo 'font-size: ' . $this->get('paragraph_size') . 'px;';
					}
					if($this->get('paragraph_color') != '') {
						echo 'color: ' . $this->get('paragraph_color') . ';';
					}
					echo '"';
				} ;?>
				><?php echo $this->get('paragraph') ;?></p>
				<?php } ;?>
				<?php if($this->get('button_link') && $this->get('button_text') != '') { ;?>
				<a href="<?php echo $this->get('button_link') ;?>" class="btn btn-1"
					<?php if($this->get('button_font_size') || $this->get('button_font_color') != '') {
						echo 'style=" ';
						if($this->get('button_font_size')) {
							echo 'font-size: ' . $this->get('button_font_size') . 'px;';
						}
						if($this->get('button_font_color')) {
							echo 'color: ' . $this->get('button_font_color') . ';';
						}
						echo '"';
					} ;?>
				><?php echo $this->get('button_text') ;?></a>
				<?php } ;?>
			</div>
		</div>
	</div>
</div>