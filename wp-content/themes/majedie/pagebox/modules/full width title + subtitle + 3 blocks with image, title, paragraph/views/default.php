<div class="module-wpg container-fluid module_full_width_title-subtitle-3blocks_with_image-title-paragraph"
<?php 
if($this->get('background_color') != '') {
	echo 'style=" ';
	echo 'background-color: ' . $this->get('background_color') . ';';
	echo '"';
}
;?>
>
	<div class="container">
		<div class="row row-1">
			<div class="col-md-12">
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
				<p
				<?php 
				if($this->get('paragraph_size') || $this->get('paragraph_color') != '') {
					echo 'style=" ';
					if($this->get('paragraph_size') != '') {
						echo 'font-size: ' . $this->get('paragraph_size') . 'px;';
					}
					if($this->get('paragraph_color') != '') {
						echo 'color: ' . $this->get('paragraph_color') . ';';
					}
					echo '"';
				}
				;?>
				><i><?php echo $this->get('paragraph') ;?></i></p>
			</div>
		</div>
		<div class="row row-2">
			<?php foreach ($this->get('blocks') as $block) { ;?>
			<div class="col-md-4 block">
				<img src="<?php echo wp_get_attachment_url($block->image) ;?>" alt="<?php $block->title ;?>"
				<?php  
				if($this->get('image_max_width') || $this->get('image_max_height') != '') {
					echo 'style=" ';
					if($this->get('image_max_width') != '') {
						echo 'max-width: ' . $this->get('image_max_width') . 'px;';
					}
					if($this->get('image_max_height') != '') {
						echo 'max-height: ' . $this->get('image_max_height') . 'px;';
					}
					echo '"';
				}
				;?>
				>
				<h2
				<?php 
				if($this->get('block_title_size') || $this->get('block_title_color') != '') {
					echo 'style=" ';
					if($this->get('block_title_size') != '') {
						echo 'font-size: ' . $this->get('block_title_size') . 'px;';
					}
					if($this->get('block_title_color') != '') {
						echo 'color: ' . $this->get('block_title_color') . ';';
					}
					echo '"';
				}
				;?>
				><?php echo $block->title ;?></h2>
				<p
				<?php 
				if($this->get('block_paragraph_size') || $this->get('block_paragraph_color') != '') {
					echo 'style=" ';
					if($this->get('block_paragraph_size') != '') {
						echo 'font-size: ' . $this->get('block_paragraph_size') . 'px;';
					}
					if($this->get('block_paragraph_color') != '') {
						echo 'color: ' . $this->get('block_paragraph_color') . ';';
					}
					echo '"';
				}
				;?>
				><?php echo $block->paragraph ;?></p>
			</div>
			<?php } ;?>
		</div>
	</div>
</div>