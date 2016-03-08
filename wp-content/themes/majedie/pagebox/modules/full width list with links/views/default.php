<style type="text/css" media="screen">
 .active2{
	color:#000;
	font-weight: 600;
}	
.module-full-width-list-with-links a:visited{
	color:#000;
}
</style>


<div class="module-wpg module-full-width-list-with-links">
<?php 
global $post;
$lar = get_permalink($post->ID);
 ?>
		<ul>
			<?php foreach ($this->get('links') as $link) { ;?>
			<li>
				<a
					<?php if($this->get('link_size') || $this->get('link_color') != '') {
						echo 'style=" ';
						if($this->get('link_size') != '') {
							echo 'font-size: ' . $this->get('link_size') . 'px;';
						}
						if($this->get('link_color') != '') {
							echo 'color: ' . $this->get('link_color') . ';';
						}
						echo '"';
					} ;

					if($link->url == $lar){
									echo  'class="active2"';
								}
								else{
									
								}

					?> 
					href="<?php echo $link->url ;?>">
					<?php echo $link->link ;?>
				</a>

			</li>
			<?php } ;?>
		</ul>
</div>