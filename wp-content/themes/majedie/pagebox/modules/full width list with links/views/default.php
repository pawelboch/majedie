<div class="module-wpg module-full-width-list-with-links"
	<?php
	if($this->get('background_color')) {
		echo 'style="';
		echo 'background-color: ' . $this->get('background_color') . ';';
		echo '"';
	}
	;?>
	>
	<div class="container">
		<?php if($this->get('links')->{0}->icon != '') { ;?>
		<ul>
			<?php foreach ($links as $link) { ;?>
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
		<?php } ;?>
	</div>
</div>
</div>