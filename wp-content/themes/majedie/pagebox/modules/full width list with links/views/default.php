<div class="module-wpg module-full-width-list-with-links">
	<div class="container">

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
					} ;?> 
					href="<?php echo $link->url ;?>">
					<?php echo $link->link ;?>
				</a>
			</li>
			<?php } ;?>
		</ul>
	
	</div>
</div>