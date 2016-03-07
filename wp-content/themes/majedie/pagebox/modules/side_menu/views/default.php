<div class="module-wpg module-side-menu wpg-inset-col">
	<div class="container wpg-inset-box-2">
		<div class="row wpg-box-fund">
			<div class="col-md-12">
				<ul class="wpg-simple-list tg_simple">
					<?php foreach ($this->get('items') as $item) {
					if($item->post->type == "page"){
						$page = get_post($item->post->page);
						echo "<li><a href='".get_permalink($page->ID)."'>".$page->post_title."</a></li>";
					}
					else{
						$page = get_post($item->post->post);
							echo "<li><a href='".get_permalink($page->ID)."'>".$page->post_title."</a></li>";
						};
				echo '</li>';
				}; ?>
				</ul>
			</div>
		</div>
	</div>
</div>