<?php get_header(); ?>
<div class="top-container">
	<div class="module-wpg module-full-width-title">
		<div class="container">
			<h1><?php the_archive_title('') ;?></h1>
		</div>
	</div>
</div>
<div class="main-container">
	<div class="archive-posts-list">
		<div class="container">
			<div class="row" data-wpg-equal-height-wrap="height">
				<?php
				if (have_posts()) {
				while ( have_posts() ) : the_post();
				$post_id = $post->ID;
				;?>
				<div class="col-xs-12 col-md-6 col-lg-4 wpg-col wpg-col-classic archive-post">
					<div style="background-color: #fff;" data-wpg-equal-height-item data-wpg-equal-height-item-smartphone-remove-height>
						<a href="<?php echo get_permalink($post_id);?>" class="wpg-inside-bg" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)) ;?>);"></a>
						<div class="wpg-post-box">
							<p class="wpg-post-box_tag">
								<?php post_categories($post_id) ;?>
							</p>
							<h3><a href="<?php echo get_permalink($post_id) ;?>"><?php echo get_post($post_id)->post_title ;?></a>
							</h3>
							<p class="wpg-post-box_date"><?php echo get_the_date('d / m / Y', $post_id) ;?></p>
							<div class="wpg-post-box_main-content">
								<p><?php echo wp_trim_words($post->post_excerpt, 20, '...') ;?></p>
							</div>
						</div>
					</div>
				</div>
				<?php
				endwhile;
				wp_reset_query();
				;?>
				<?php } else { ?>
				<div class="no-results">
					<h2>Nothing Found</h2>
					<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
				</div>
				<?php } ;?>
				<?php if($wp_query->max_num_pages >= 2) { ;?>
				<div class="col-md-12">
					<div class="pagination">
						<?php $pagination = array(
							'prev_next'          => true,
							'prev_text'          => __('PREV'),
							'next_text'          => __('NEXT'),
						); ?>
						<div class="numbered">
							<?php echo paginate_links($pagination ); ?>
						</div>
					</div>
				</div>
				<?php } ;?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>