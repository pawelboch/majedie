<div class="module-wpg module-full-width-3-tabs-with-photo-title-subtitle-text">
	<?php $idUniqid=uniqid(); ?>
	<div class="container">
		<div class="row pager-mfw3twptst pager-mfw3twptst-<?php echo $idUniqid; ?>" data-wpg-equal-height-wrap="height"></div>
		<div
			class="cycle-slideshow wpg-main-slides-persons"
			data-cycle-fx="scrollHorz"
			data-cycle-timeout="0"
			data-cycle-speed="600"
			data-cycle-manual-speed="300"
			data-cycle-swipe="true"
			data-cycle-swipe-fx="scrollHorz"
			data-cycle-auto-height="container"
			data-cycle-slides="> div"
			data-cycle-pager=".pager-mfw3twptst-<?php echo $idUniqid; ?>"
			>
			<?php foreach ($this->get('teams') as $team) : ?>
			<?php
			?>
			<?php
			$image_attributes = wp_get_attachment_image_src( $attachment_id = $team->image, 'team' );
			?>
			<?php /* tu trzeba dociac obrazek w atrybucie data: 301x355px */ ?>
			<div data-cycle-pager-template="<div class='col-xs-4'><div class='pager-mfw3twptst-item' data-wpg-equal-height-item><img src='<?php  echo $image_attributes[0]; ?> ' alt='x'><h3><?php echo $team->title; ?></h3><p class='wpg-job-title'><?php echo $team->bottom_title; ?></p></div></div>">
			<div class="row">
				<div class="col-xs-12 col-md-10">
					<h3><?php echo $team->title; ?></h3>
					<p class="wpg-job-title"><?php echo $team->bottom_title; ?></p>
					<?php echo $team->editor; ?>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</div>
</div>
</div>