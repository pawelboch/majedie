<div class="module-full-width-above-title-title-12-logotypes"
<?php if($this->get('title') == '') {
	echo 'style="padding-top: 0px;"';
	}else{echo 'style="padding-bottom: 0px;"';}?>
>
	<div class="container">
		<?php if($this->get('paragraph') != '') { ;?>
						<p
						<?php if($this->get('paragraph_size') || $this->get('paragraph_color') != '') {
							echo 'style=" ';
							if($this->get('paragraph_size') != '') {
								echo 'font-size: ' . $this->get('paragraph_size') . 'px;';
							}
							if($this->get('paragraph_color') != '') {
								echo 'color: ' . $this->get('paragraph_color') . ';';
							}
							echo '"';
						} ;?>
						><?php echo $this->get('paragraph') ;?></p>
						<?php } ;?>
		<?php if($this->get('title') != '') { ;?>
						<h2
						<?php if($this->get('title_size') || $this->get('title_color') != '') {
							echo 'style=" ';
							if($this->get('title_size') != '') {
								echo 'font-size: ' . $this->get('title_size') . 'px;';
							}
							if($this->get('title_color') != '') {
								echo 'color: ' . $this->get('title_color') . ';';
							}
							echo '"';
						} ;?>
						><?php echo $this->get('title') ;?></h2>
						<?php } ;?>
		<div class="row">
			<div class="wpg-list-items-inline-block">
	
				<ul>
			
					<?php foreach ($this->get('logos') as $logo) : ;?>
						
			

					<?php  $img_src = wp_get_attachment_image_src($logo->logo, 'full');
        			$url = $img_src[0];   ?>

        			
					<li><a href="<?php echo $logo->url; ?>"><img src="<?php echo $url;  ?>" alt="x"></a><p><?php print_r($count);  ?></p></li>		

					<?php endforeach ;?>

					
				</ul>


				
			</div>
   

			
		</div>
	</div>
</div>



							