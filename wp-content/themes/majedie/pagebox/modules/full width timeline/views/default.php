
<div class="module-full-width-timeline">
	<div class="container">
		<ul class="wpg-timeline">
			<?php foreach ($this->get('blocks') as $block) : ;?>

				<?php 
				$id = $block->post->post;
 				?>


			<li>
			
						<h3
						<?php if($this->get('date_size') || $this->get('date_color') != '') {
							echo 'style=" ';
							if($this->get('date_size') != '') {
								echo 'font-size: ' . $this->get('date_size') . 'px;';
							}
							if($this->get('date_color') != '') {
								echo 'color: ' . $this->get('date_color') . ';';
							}
							echo '"';
						} ;?>
						><?php echo get_the_date('d/m/Y', $id); ?></h3>
					
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
						><?php echo get_the_title($id);  ?></p>
			
			</li>
			<?php endforeach ;?>
			
		</ul>
	</div>
</div>