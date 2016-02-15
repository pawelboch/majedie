<div class="container-fluid module-full_width_image-title-icons-paragraph-link" 
<?php 
	if($this->get('background_color')) {
		echo 'style="';
		echo 'background-color: ' . $this->get('background_color') . ';';
		echo '"';
	}
;?>
>
	<div class="container">
		<div class="row">
			<div class="table-block">
				<div class="first-col
					<?php 
					if($this->get('photo_side') == 'right') {
						echo 'col-xs-push-6 is-right';
					} else {
						echo 'is-left';
					}
					;?>
				">
					<?php if($this->get('image') != '') { ;?>
					<div class="inner">
						<img src="<?php echo wp_get_attachment_url($this->get('image')) ;?>" alt="<?php echo $this->get('title') ;?>">
					</div>
					<?php } ;?>
				</div>
				<div class="second-col
					<?php 
					if($this->get('photo_side') == 'right') {
						echo 'col-xs-pull-6 is-left';
					} else {
						echo 'is-right';
					}
					;?>
				">
					<div class="inner">
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
									<?php if($this->get('social_buttons_size') || $this->get('social_buttons_color') != '') {
										echo 'style=" ';
										if($this->get('social_buttons_size') != '') {
											echo 'font-size: ' . $this->get('social_buttons_size') . 'px;';
										}
										if($this->get('social_buttons_color') != '') {
											echo 'color: ' . $this->get('social_buttons_color') . ';';
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
									echo 'border-color: ' . $this->get('button_font_color') . ';';
								}
								echo '"';
							} ;?>
						><?php echo $this->get('button_text') ;?></a>
						<?php } ;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>