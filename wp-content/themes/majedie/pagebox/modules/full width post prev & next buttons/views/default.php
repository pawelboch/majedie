<div class="module_full_width_post_prev-next_buttons"
	<?php
	if($this->get('background_outside_color')) {
		echo 'style="';
		echo 'background-color: ' . $this->get('background_outside_color') . ';';
		echo '"';
	}
	;?>
	>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="inner">
					<ul class="navigation">
						<li class="prev-post">
							<a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>"
							<?php if($this->get('button_size') || $this->get('button_color') != '') {
								echo 'style=" ';
								if($this->get('button_size') != '') {
									echo 'font-size: ' . $this->get('button_size') . 'px;';
								}
								if($this->get('button_color') != '') {
									echo 'color: ' . $this->get('button_color') . ';';
								}
								echo '"';
							} ;?>
							>
								<i class="fa fa-angle-left"></i>
								<?php
								if($this->get('prev_text') == '') {
									echo 'Previous';
								} else {
									echo $this->get('prev_text');
								}
								;?>
							</a>
						</li>
						<li class="next-post">
							<a href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>"
							<?php if($this->get('button_size') || $this->get('button_color') != '') {
								echo 'style=" ';
								if($this->get('button_size') != '') {
									echo 'font-size: ' . $this->get('button_size') . 'px;';
								}
								if($this->get('button_color') != '') {
									echo 'color: ' . $this->get('button_color') . ';';
								}
								echo '"';
							} ;?>
							>
								<?php
								if($this->get('next_text') == '') {
									echo 'Next';
								} else {
									echo $this->get('next_text');
								}
								;?>
								<i class="fa fa-angle-right"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>