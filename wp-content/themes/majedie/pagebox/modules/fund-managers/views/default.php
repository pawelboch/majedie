<div class="wpg-box-fund">
	<h2>Fund managers</h2>
	<ul class="row wpg-fund-list-image-circle clearfix" data-wpg-equal-height-wrap="min-height">
		<?php foreach($this->get('managers') as $manager) : ?>
		<li style="height: auto; min-height: 402px;" class="col-xs-6 col-sm-4" data-wpg-equal-height-item>
			<?php
			$image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id($manager->manager_id), 'team' );
			?>
			<img class="image-circle" src="<?php echo $image_attributes[0];?>" alt="x">
			<h3><?php echo get_the_title($manager->manager_id); ?></h3>
			<p><?php echo get_post($manager->manager_id)->post_excerpt; ?></p>
		</li>
		<?php endforeach; ?>
	</ul>
</div>

<!--
<div class="module-wpg fund-managers">
	<div class="container">
		<h2>Fund managers</h2>
		<ul class="row wpg-fund-list-image-circle clearfix" data-wpg-equal-height-wrap="min-height">
			<?php //foreach($this->get('managers') as $manager) : ?>
			<li style="height: auto; min-height: 402px;" class="col-xs-6 col-sm-4" data-wpg-equal-height-item="" data-wpg-equal-height-item-smartphone-remove-height="">
				<?php
				//$image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id($manager->manager_id), 'team' );
				?>
				<img class="image-circle" src="<?php //echo $image_attributes[0];?>" alt="x">
				<h3><?php //echo get_the_title($manager->manager_id); ?></h3>
				<p><?php //echo get_post($manager->manager_id)->post_excerpt; ?></p>
			</li>
			<?php //endforeach; ?>
		</ul>
	</div>
</div>
-->