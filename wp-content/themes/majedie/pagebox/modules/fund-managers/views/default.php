<div class="wpg-box-fund">
	<h2>Fund managers</h2>
	<ul class="row wpg-fund-list-image-circle clearfix" data-wpg-equal-height-wrap="min-height">
		<?php foreach($this->get('managers') as $manager) : ?>
		<li class="col-xs-6 col-sm-4" data-wpg-equal-height-item>
			<?php
			$image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id($manager->manager_id), 'team2' );
			?>
			<?php echo get_the_post_thumbnail($manager->manager_id, 'manager-thumbnail') ;?>
			<h3><?php echo get_the_title($manager->manager_id); ?></h3>
			<p><?php echo get_post($manager->manager_id)->post_excerpt; ?></p>
		</li>
		<?php endforeach; ?>
	</ul>
</div>
