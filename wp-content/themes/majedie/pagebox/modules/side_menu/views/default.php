<style type="text/css" media="screen">
.tg_simple li{
	list-style: none;
	color: #a6a6a6;
	text-transform: uppercase;
	line-height: 30px;
	font-family: Avenir-Light;
}
.tg_simple{
	background-color: #fff;
	padding:20px;
}
.tg_simple li a:hover{
	text-decoration: none;
	color: #000;
	font-weight: 900;
}
</style>

	<div class="wpg-inset-col">
				<div class="wpg-inset-box-2">


					<div class="wpg-box-fund">
						<ul class="wpg-simple-list tg_simple">
								<?php foreach ($this->get('items') as $item) { ?>

								<?php 
								
								if($item->post->type == "page"){
									$page = get_post($item->post->page);
									echo "<li><a href='".get_permalink($page->ID)."'>".$page->post_title."</a></li>";
								}
								else{
									$page = get_post($item->post->post);
										echo "<li><a href='".get_permalink($page->ID)."'>".$page->post_title."</a></li>";
								}

									 ?></li>
								<?php } ?>
								
						</ul>
					</div>	


				</div>
				</div>