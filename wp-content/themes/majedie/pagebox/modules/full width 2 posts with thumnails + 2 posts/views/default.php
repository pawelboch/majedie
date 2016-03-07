<?php
$post_1 = $this->get('first_post');
$post_2 = $this->get('second_post');
$post_3 = $this->get('third_post');
$post_4 = $this->get('fourth_post');
;?>
<div class="module-wpg module-full-width-2-posts-with-thumnails-2-posts">
	<div class="container">
		<?php if($this->get('title')) { ;?>
		<h2><?php echo $this->get('title') ;?></h2>
		<?php } ;?>
		<?php if($this->get('hide_filter') != 'no') { ;?>
		<div class="wpg-filter">
			<button class="wpg-filter-topic">Filter Topic</button>
			<div class="wpg-filter-topic-menu">
				<?php list_categories() ;?>
			</div>
		</div>
		<?php } ;?>
		<div class="row" data-wpg-equal-height-wrap="height">
			<div class="col-xs-12 col-md-6 col-lg-4 wpg-col wpg-col-classic">
				<div style="background-color: #fff;" data-wpg-equal-height-item data-wpg-equal-height-item-smartphone-remove-height>
					<a href="<?php echo get_permalink($post_1) ;?>" class="wpg-inside-bg" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_1)) ;?>);"></a>
					<div class="wpg-post-box">
						<p class="wpg-post-box_tag">
							<?php post_categories($post_1) ;?>
						</p>
						<h3><a href="<?php echo get_permalink($post_1) ;?>"><?php echo get_post($post_1)->post_title ;?></a>
						</h3>
						<p class="wpg-post-box_date"><?php echo get_the_date('d / m / Y', $post_1) ;?></p>
						<div class="wpg-post-box_main-content">
							<p><?php echo wp_trim_words(get_post($post_1)->post_excerpt, 20, '') ;?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 wpg-col wpg-col-classic">
				<div style="background-color: #fff;" data-wpg-equal-height-item data-wpg-equal-height-item-smartphone-remove-height>
					<a href="<?php echo get_permalink($post_2) ;?>" class="wpg-inside-bg" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_2)) ;?>);"></a>
					<div class="wpg-post-box">
						<p class="wpg-post-box_tag">
							<?php post_categories($post_2) ;?>
						</p>
						<h3><a href="<?php echo get_permalink($post_2) ;?>"><?php echo get_post($post_2)->post_title ;?></a>
						</h3>
						<p class="wpg-post-box_date"><?php echo get_the_date('d / m / Y', $post_2) ;?></p>
						<div class="wpg-post-box_main-content">
							<p><?php echo wp_trim_words(get_post($post_2)->post_excerpt, 20, '') ;?></p>
						</div>
					</div>
				</div>
			</div>
<<<<<<< HEAD
			<div class="col-xs-12 col-md-12 col-lg-4 wpg-col wpg-col-special-1" data-wpg-equal-height-item-smartphone-remove-height="" data-wpg-equal-height-item="">
=======

			<div class="col-xs-12 col-md-12 col-lg-4 wpg-col wpg-col-special-1" data-wpg-equal-height-item data-wpg-equal-height-item-smartphone-remove-height>
				
>>>>>>> 2a664e75e688dfc245607f41776e5394998e0df0
				<div class="span-table wpg-post-box-cols" style="height: 100%">
					<div class="span-table-row">
						<div class="span-table-cell wpg-post-box-corrected-1-outset vertical-align-top">
							<div class="wpg-post-box wpg-post-box-corrected-1" style="background-color: #fff;">
								<p class="wpg-post-box_tag">
									<?php post_categories($post_3) ;?>
								</p>
								<h3><a href="<?php echo get_permalink($post_3) ;?>"><?php echo get_post($post_3)->post_title ;?></a>
								</h3>
								<p class="wpg-post-box_date"><?php echo get_the_date('d / m / Y', $post_3) ;?></p>
								<div class="wpg-post-box_main-content">
									<p><?php echo wp_trim_words(get_post($post_3)->post_excerpt, 20, '') ;?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="span-table-row">
						<div class="span-table-cell wpg-post-box-corrected-2-outset vertical-align-bottom">
							<div class="wpg-post-box wpg-post-box-corrected-2" style="background-color: #fff;">
								<p class="wpg-post-box_tag">
									<?php post_categories($post_4) ;?>
								</p>
								<h3><a href="<?php echo get_permalink($post_4) ;?>"><?php echo get_post($post_4)->post_title ;?></a>
								</h3>
								<p class="wpg-post-box_date"><?php echo get_the_date('d / m / Y', $post_4) ;?></p>
								<div class="wpg-post-box_main-content">
									<p><?php echo wp_trim_words(get_post($post_4)->post_excerpt, 20, '') ;?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>