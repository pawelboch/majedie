<?php
$post = get_post($this->get('postID'));
?>

<div class="module-wpg module-fund-box-post">
	<div class="container">
		<div class="wpg-post-box">
			<?php
			$category = get_the_terms( $post->ID, 'category' );
			$firstCategory = ($category) ? $category[0]->name : '';
			?>
			<p class="wpg-tags"><?php echo $firstCategory; ?></p>
			<h3><a href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></h3>
			<p class="wpg-date"><?php echo mysql2date('j / m / Y', $post->post_date); ?></p>

			<p><?php echo wp_trim_words($post->post_excerpt,25,'...'); ?></p>
		</div>
	</div>
</div>