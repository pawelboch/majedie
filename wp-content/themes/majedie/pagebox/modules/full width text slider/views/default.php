<div class="module-full-width-text-slider">
	<?php $idUniqid=uniqid(); ?>
	<div class="container">
		<p><?php echo $this->get('above_title') ;?></p>
		<h2><?php echo $this->get('title') ;?></h2>
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
					<p><?php echo $slide->carousel_text ;?></p>
				</div>
			<?php } ;?>
			</div>
			<div class="cycle-slideshow-prev cycle-slideshow-prev-<?php echo $idUniqid; ?>"><i class="fa fa-angle-left"></i></div>
			<div class="cycle-slideshow-next cycle-slideshow-next-<?php echo $idUniqid; ?>"><i class="fa fa-angle-right"></i></div>
		</div>
		<div class="cycle-slideshow-pager cycle-slideshow-pager-<?php echo $idUniqid; ?>"></div>
	</div>
</div>