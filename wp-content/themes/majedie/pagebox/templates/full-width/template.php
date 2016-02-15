<?php 
global $post; 
$post_id = $wp_query->post->ID

$post = get_post( $post_id );
$slug = $post->post_name;
?>

<div class="main-container <?php echo $slug ;?>">
	<?php foreach ($this->get_variable( 'full_width_modules' ) as $module): ?>
	    <?php $module->display(); ?>
	<?php endforeach ?>
</div>