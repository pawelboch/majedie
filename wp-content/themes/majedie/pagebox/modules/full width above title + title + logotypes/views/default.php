<div class="module-wpg module-full-width-above-title-title-12-logotypes"
	<?php
	if($this->get('background_color')) {
		echo 'style="';
		echo 'background-color: ' . $this->get('background_color') . ';';
		if($this->get('title') == '') {
			echo 'style="padding-top: 0px;"';
		} else {
			echo 'style="padding-bottom: 0px;"';
		}
	}
	else {
		echo '"';
	}
	;?>
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
			<?php foreach ($this->get('logotypes') as $logotype) { ?>
			<div
			<?php 
			echo 'class="col-md-' . $this->get('columns_number') . '"';
			;?>
			>
				<?php
				if($logotype->url != '') {
					echo '<a target="_blank" href="' . $logotype->url . '">';
							};
							echo '<img src="' . wp_get_attachment_url($logotype->logo) . '"/>';
							if($logotype->url != '') {
					echo '</a>';
				};
				?>
			</div>
			<?php } ;?>
		</div>
	</div>
</div>