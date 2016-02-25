<div class="module-full-width-horizontal-2-blocks-with-post-block-with-twitter-post">

<?php
$post1 = $this->get('post1');
$p1 = $post1->post; 

$post2 = $this->get('post2');
$p2 = $post2->post; 

?>

	<div class="container">

		<div class="row" data-wpg-equal-height-wrap="min-height">


		<?php 

		$args = array(
		'post_type' => 'post',
		'p'  =>  $p1,
		);

		$args2 = array(
		'post_type' => 'post',
		'p'  =>  $p2,
		);


 
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>


<!-- POST 1 -->


	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="col-xs-12 col-sm-4">
				<div class="wpg-post-box wpg-bg-white" style="background-color: #fefffe; color: #000;" data-wpg-equal-height-item>
					<p class="wpg-post-box_tag"><?php the_category(', ') ?></p>
					<h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
					<p class="wpg-post-box_date"><?php echo the_date('d/m/Y'); ?></p>
					<div class="wpg-post-box_main-content">
					<p>	
					<?php echo majadie_get_the_excerpt( $post_id = 0 ); ?>
					</p>
					</div>
					
				</div>
			</div>
	<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

<!-- END  POST 1 -->


<!-- POST 2 -->
			<?php

			$the_query = new WP_Query( $args2 ); ?>

<?php if ( $the_query->have_posts() ) : ?>


	<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<div class="col-xs-12 col-sm-4">
						<div class="wpg-post-box wpg-bg-white" style="background-color: #fefffe; color: #000;" data-wpg-equal-height-item>
							<p class="wpg-post-box_tag"><?php the_category(', ') ?></p>
							<h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
							<p class="wpg-post-box_date"><?php echo the_date('d/m/Y'); ?></p>
							<div class="wpg-post-box_main-content">
							<p>	
								<?php echo majadie_get_the_excerpt( $post_id = 0 ); ?>
							</p>
							</div>
							
						</div>
					</div>
			<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

<!-- END  POST 2 -->





			<div class="col-xs-12 col-sm-4">
				<div class="wpg-post-box wpg-bg-orange-twitter" style="background-color: #dd6e1d; color: #fff;" data-wpg-equal-height-item>
					<p class="wpg-post-box_tag">Social</p>
					<i class="fa fa-twitter"></i>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet condi mentum diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque egestas nulla ac vestibulum hendrerit.</p>
					<p><a href="http://www.ghjjjd.com">http://www.ghjjjd.com</a></p>
				
				</div>
			</div>

		</div>


	</div>
</div>