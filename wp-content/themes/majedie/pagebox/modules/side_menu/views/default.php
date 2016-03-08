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
.side_menu .active{
	color:#000;
	font-weight: 600;
}
.side_menu{
margin-top:60px;
}

.side_menu a:visited{
	color: #000;
}
</style>

<?php 
global $post;
$la = get_permalink($post->ID);

 ?>
<div class="side_menu">
	<div class="wpg-inset-col">
				<div class="wpg-inset-box-2">


					<div class="wpg-box-fund">
						<ul class="wpg-simple-list tg_simple">
								<?php foreach ($this->get('items') as $item) {
								
								$page = get_post($item->post->page);
								$li = get_permalink($page->ID);

								if($li == $la){
									$active = 'class="active"';
								}
								else{
									$active = '';
								}

									$page2 = get_post($item->post->post);
									$li2 = get_permalink($page2->ID);
									if($li2 == $la){
										$active2 = 'class="active"';
									}
									else{
										$active = '';
									}
							
								
								if($item->post->type == "page"){
									
									echo "<li><a ".$active." href='".get_permalink($page->ID)."'>".$page->post_title."</a></li>";
						
								}
								else{
									$page = get_post($item->post->post);
										echo "<li><a ".$active2." href='".get_permalink($page->ID)."'>".$page->post_title."</a></li>";
					

						
								}

									 ?></li>
								<?php } ?>
								
						</ul>
					</div>	


				</div>
				</div>

</div>