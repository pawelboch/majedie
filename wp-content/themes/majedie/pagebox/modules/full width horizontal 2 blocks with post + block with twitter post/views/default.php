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
				<div class="wpg-post-box wpg-bg-white" style="
<?php	if($this->get('post1_background_color')) {
		echo 'background-color: ' . $this->get('post1_background_color') . ';';
				}
			;?>
" data-wpg-equal-height-item>
				
						<?php if($post1) { ;?>
					<p class="wpg-post-box_tag"
						<?php if($this->get('post1_category_color') || $this->get('post1_category_size') != '') {
							echo 'style=" ';
							if($this->get('post1_category_size') != '') {
								echo 'font-size: ' . $this->get('post1_category_size') . 'px;';
							}
							if($this->get('post1_category_color') != '') {
								echo 'color: ' . $this->get('post1_category_color') . ';';
							}
							echo '"';
						} ;?>
						><?php the_category(', ') ?></p>
						<?php } ;?>
					<h3>
						<?php if($post1) { ;?>
					<a href="<?php echo get_permalink(); ?>"
						<?php if($this->get('post1_title_color') || $this->get('post1_title_size') != '') {
							echo 'style=" ';
							if($this->get('post1_title_size') != '') {
								echo 'font-size: ' . $this->get('post1_title_size') . 'px;';
							}
							if($this->get('post1_title_color') != '') {
								echo 'color: ' . $this->get('post1_title_color') . ';';
							}
							echo '"';
						} ;?>
						><?php echo get_the_title(); ?></a>
						<?php } ;?>
					</h3>
					<?php if($post1) { ;?>
					<p class="wpg-post-box_date"
						<?php if($this->get('post1_date_color') || $this->get('post1_date_size') != '') {
							echo 'style=" ';
							if($this->get('post1_date_size') != '') {
								echo 'font-size: ' . $this->get('post1_date_size') . 'px;';
							}
							if($this->get('post1_date_color') != '') {
								echo 'color: ' . $this->get('post1_date_color') . ';';
							}
							echo '"';
						} ;?>
						><?php echo the_date('d/m/Y'); ?></p>
						<?php } ;?>
					<div class="wpg-post-box_main-content">
				
						<?php if($post1) { ;?>
					<p
						<?php if($this->get('post1_paragraph_color') || $this->get('post1_paragraph_size') != '') {
							echo 'style=" ';
							if($this->get('post1_paragraph_size') != '') {
								echo 'font-size: ' . $this->get('post1_paragraph_size') . 'px;';
							}
							if($this->get('post1_paragraph_color') != '') {
								echo 'color: ' . $this->get('post1_paragraph_color') . ';';
							}
							echo '"';
						} ;?>
						><?php 
						echo get_the_excerpt(); ?></p>
						<?php } ;?>
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
						<div class="wpg-post-box wpg-bg-white" style="
<?php	if($this->get('post2_background_color')) {
		echo 'background-color: ' . $this->get('post2_background_color') . ';';
				}
			;?>
" data-wpg-equal-height-item>
							
								<?php if($post2) { ;?>
					<p class="wpg-post-box_tag"
						<?php if($this->get('post2_category_color') || $this->get('post2_category_size') != '') {
							echo 'style=" ';
							if($this->get('post2_category_size') != '') {
								echo 'font-size: ' . $this->get('post2_category_size') . 'px;';
							}
							if($this->get('post2_category_color') != '') {
								echo 'color: ' . $this->get('post2_category_color') . ';';
							}
							echo '"';
						} ;?>
						><?php the_category(', ') ?></p>
						<?php } ;?>
							<h3>
						<?php if($post2) { ;?>
					<a href="<?php echo get_permalink(); ?>"
						<?php if($this->get('post2_title_color') || $this->get('post2_title_size') != '') {
							echo 'style=" ';
							if($this->get('post2_title_size') != '') {
								echo 'font-size: ' . $this->get('post2_title_size') . 'px;';
							}
							if($this->get('post2_title_color') != '') {
								echo 'color: ' . $this->get('post2_title_color') . ';';
							}
							echo '"';
						} ;?>
						><?php echo get_the_title(); ?></a>
						<?php } ;?>
					</h3>
							<?php if($post2) { ;?>
					<p class="wpg-post-box_date"
						<?php if($this->get('post2_date_color') || $this->get('post2_date_size') != '') {
							echo 'style=" ';
							if($this->get('post2_date_size') != '') {
								echo 'font-size: ' . $this->get('post2_date_size') . 'px;';
							}
							if($this->get('post2_date_color') != '') {
								echo 'color: ' . $this->get('post2_date_color') . ';';
							}
							echo '"';
						} ;?>
						><?php echo the_date('d/m/Y'); ?></p>
						<?php } ;?>
							<div class="wpg-post-box_main-content">
							<?php if($post2) { ;?>
					<p
						<?php if($this->get('post2_paragraph_color') || $this->get('post2_paragraph_size') != '') {
							echo 'style=" ';
							if($this->get('post2_paragraph_size') != '') {
								echo 'font-size: ' . $this->get('post2_paragraph_size') . 'px;';
							}
							if($this->get('post2_paragraph_color') != '') {
								echo 'color: ' . $this->get('post2_paragraph_color') . ';';
							}
							echo '"';
						} ;?>
						><?php 
						echo get_the_excerpt(); ?></p>
						<?php } ;?>
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
				<div class="wpg-post-box wpg-bg-orange-twitter" style="background-color: #dd6e1d; color: #fff;" data-wpg-equal-height-item data-wpg-equal-height-item-smartphone-remove-height>
					<p class="wpg-post-box_tag">Social</p>
					<i class="fa fa-twitter"></i>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet condi mentum diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque egestas nulla ac vestibulum hendrerit.</p>
					<p><a href="http://www.ghjjjd.com">http://www.ghjjjd.com</a></p>
				
				</div>
			</div>

		</div>


	</div>
</div>