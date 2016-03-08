<!--
<div class="module-wpg module-full-width-3-tabs-with-photo-title-subtitle-text meet-the-team">
	<?php
	/*
	$idUniqid=uniqid();

	$args = array(
		'post_type'=> 'team_member',
		'order'    => 'DESC',
		'posts_per_page' => '-1',
		't_category_web' => '',
	);

	$the_query = get_posts( $args );
	*/
	?>
	<div class="container">
		<div class="team-member">
			<?php //foreach ($the_query as $team) : ?>

				<?php
				//$taxonomy_objects = get_the_terms( $team->ID, 't_category' );
				//$selected_name = ($taxonomy_objects) ? $taxonomy_objects[0]->name : '';
				//$image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id($team->ID), 'team' );
				?>
				<?php /* tu trzeba dociac obrazek w atrybucie data: 301x355px */ ?>
				<div class='team-header active'>
					<img src='<?php  //echo $image_attributes[0] ?> ' alt='x'>
					<h3>
						<?php //echo $team->post_title; ?>
					</h3>
					<p class='wpg-job-title'>
						<?php //echo $selected_name; ?>
					</p>
				</div>
				<div class="team-body">
					<div class="col-xs-12 col-md-10">
						<h3><?php //echo $team->post_title; ?></h3>
						<p class="wpg-job-title"><?php //echo $selected_name; ?></p>
						<?php //echo $team->post_content; ?>
					</div>
				</div>
			<?php //endforeach ?>
		</div>
	</div>
</div>
</div>
-->



<?php

$args = array(
	'post_type'=> 'team_member',
	'order'    => 'DESC',
	'posts_per_page' => '-1',
	't_category_web' => '',
);

$the_query = get_posts( $args );
?>

<div class="module-wpg module-full-width-many-tabs-with-photo-title-subtitle-text">
	<div class="container">
		<div class="row wpg-items-persons" data-wpg-equal-height-wrap="height">
			<?php foreach ($the_query as $team) : ?>

			<?php
			$taxonomy_objects = get_the_terms( $team->ID, 't_category' );
			$selected_name = ($taxonomy_objects) ? $taxonomy_objects[0]->name : '';
			$image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id($team->ID), 'team' );
			?>

			<div class='col-xs-12 col-sm-6 col-md-4 wpg-item-person'>
				<div class='pager-mfw3twptst-item' data-wpg-equal-height-item data-wpg-equal-height-item-smartphone-remove-height>
					<img src='<?php  echo $image_attributes[0] ?>' alt='x'>
					<h3><?php echo $team->post_title; ?></h3>
					<p class='wpg-job-title'><?php echo $selected_name; ?></p>
				</div>
				<div class="wpg-item-person-description">
					<div>
						<h4><?php echo $team->post_title; ?></h4>
						<p class='wpg-job-title'><?php echo $selected_name; ?></p>					
						<?php echo $team->post_content; ?>
					</div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</div>


