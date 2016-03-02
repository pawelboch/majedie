<div class="module-wpg module-full-width-search-results-pagination">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8">
				<?php if (have_posts()) : ?>
				<?php
				$paged = get_query_var('paged') ? get_query_var('paged') : 1;
				$args = array(
				'orderby'          => 'date',
				'order'            => 'DESC',
				'paged' => $paged,
				);
				$custom_query = new WP_Query ( $query_args );
				?>
				<?php while (have_posts()) : the_post(); ?>
				<div class="wpg-short-post">
					<h3><a href="#"><?php echo $i; ?><?php echo get_the_title(); ?></a></h3>
					<p><?php echo get_excerpt(); ?></p>
				</div>
				<?php endwhile; ?>
				
				<?php else : ?>
				<h2 class="center">No posts found. Try a different search?</h2>
				<?php endif; ?>
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
		</div>
	</div>
</div>