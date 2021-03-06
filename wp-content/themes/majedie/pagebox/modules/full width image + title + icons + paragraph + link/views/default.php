<div class="module-wpg module-full-width-image-title-icons-paragraph-link"
	<?php
		if($this->get('background_color')) {
			echo 'style="';
			echo 'background-color: ' . $this->get('background_color') . ';';
			echo '"';
		}
	;?>
	>
	<div class="container">
		<div class="row" data-wpg-equal-height-wrap="height">
			<div class="
				<?php
				if($this->get('image') != '') {
					echo 'col-xs-12 col-sm-8 col-lg-6';
				} else {
					echo 'col-xs-12 col-sm-12 col-lg-12';
				}
				if($this->get('photo_side') == 'right') {
					echo ' pull-xs-left';
				} else {
					echo ' pull-xs-right';
				}
				;?>
				" data-wpg-equal-height-item data-wpg-equal-height-item-smartphone-remove-height>
				<!-- wersja z obrazkiem po lewej estronie zamiast klasy pull-xs-left  ma miec pull-xs-right -->
				<div class="span-table wpg-100p">
					<div class="span-table-cell vertical-align-middle">
						<?php if($this->get('title') != '') { ;?>
						<h1
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
						>
						<?php echo $this->get('title') ;?>
						</h1>
						<?php } ;?>
						<?php if($this->get('social_links')->{0}->icon != '') { ;?>
						<ul class="wpg-social-icons">
							<?php foreach ($this->get('social_links') as $link) { ;?>
							<li><a href="<?php echo $link->link ;?>">
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
							</li></a>
							<?php } ;?>
						</ul>
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
						<a href="<?php echo get_permalink($this->get('button_link')) ;?>" class="btn-1"
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
			<?php if($this->get('image')) { ;?>
			<div class="col-xs-12 col-sm-4 col-lg-6
				<?php
					if($this->get('photo_side') == 'right') {
						echo 'pull-xs-right';
					} else {
						echo 'pull-xs-left';
					}
				;?>
				" data-wpg-equal-height-item data-wpg-equal-height-item-smartphone-remove-height><!-- wersja z obrazkiem po lewej estronie zamiast klasy pull-xs-right  ma miec pull-xs-left -->
				<div class="span-table wpg-100p">
					<!-- tu ma byc do wyboru obrazek u dolu krawedzi ma miec klase: vertical-align-bottom, obarazek wycentrowany w pionie ma miec klase vertical-align-middle -->
					<div class="span-table-cell text-xs-center
						<?php
							if($this->get('photo_align') == 'bottom') {
								echo 'vertical-align-bottom';
							} else {
								echo 'vertical-align-middle';
							}
						;?>">
						<?php if($this->get('image') != '') { ;?>
						<img src="<?php echo wp_get_attachment_url($this->get('image')) ;?>" alt="<?php echo $this->get('title') ;?>">
						<?php } ;?>
					</div>
				</div>
			</div>
			<?php } ;?>
		</div>
	</div>
</div>