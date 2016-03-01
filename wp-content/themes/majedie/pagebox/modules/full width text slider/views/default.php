<div class="module-wpg module-full-width-text-slider"
<?php 
if($this->get('outside_background_color') != '') {
	echo 'style=" ';
	echo 'background-color: ' . $this->get('outside_background_color') . ';';
	echo '"';
}
;?>
>
	<?php $idUniqid=uniqid(); ?>
	<div class="container">
		<p
		<?php 
		if($this->get('above_title_size') || $this->get('above_title_color') != '') {
			echo 'style=" ';
			if($this->get('above_title_size') != '') {
				echo 'font-size: ' . $this->get('above_title_size') . 'px;';
			}
			if($this->get('above_title_color') != '') {
				echo 'color: ' . $this->get('above_title_color') . ';';
			}
			echo '"';
		}
		;?>
		><?php echo $this->get('above_title') ;?></p>
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
		<div class="cycle-slideshow-wrap">
			<div class="cycle-slideshow"
				data-cycle-timeout="0"
				data-cycle-fx="scrollHorz"
				data-cycle-swipe="true"
				data-cycle-swipe-fx="scrollHorz"
				data-cycle-pager=".cycle-slideshow-pager-<?php echo $idUniqid; ?>"
				data-cycle-slides="> div"
				data-cycle-prev=".cycle-slideshow-prev-<?php echo $idUniqid; ?>"
				data-cycle-next=".cycle-slideshow-next-<?php echo $idUniqid; ?>"
				data-cycle-auto-height="container"
			>
			<?php foreach ($this->get('carousel') as $slide) { ?>
				<div class="slide">
					<p
					<?php 
					if($this->get('carousel_text_size') || $this->get('carousel_text_color') != '') {
						echo 'style=" ';
						if($this->get('carousel_text_size') != '') {
							echo 'font-size: ' . $this->get('carousel_text_size') . 'px;';
						}
						if($this->get('carousel_text_color') != '') {
							echo 'color: ' . $this->get('carousel_text_color') . ';';
						}
						echo '"';
					}
					;?>
					><?php echo $slide->carousel_text ;?></p>
				</div>
			<?php } ;?>
			</div>
			<div class="cycle-slideshow-prev cycle-slideshow-prev-<?php echo $idUniqid; ?>"><i class="fa fa-angle-left"></i></div>
			<div class="cycle-slideshow-next cycle-slideshow-next-<?php echo $idUniqid; ?>"><i class="fa fa-angle-right"></i></div>
		</div>
		<div class="cycle-slideshow-pager cycle-slideshow-pager-<?php echo $idUniqid; ?>"></div>
	</div>
</div>