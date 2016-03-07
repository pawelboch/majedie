<div class="module-wpg module-fund-box-content" style="<?php echo ($this->get('background_color')) ? ('background-color: ' . $this->get('background_color') . ';') : '' ?>">
	<div class="container">
		<?php if($this->get('title') != '') { ;?>
		<h2 style="<?php echo ($this->get('title_size')) ? ('font-size: ' . $this->get('title_size') . 'px;') : ''; ?>
				   <?php echo ($this->get('title_color')) ? ('color: ' . $this->get('title_color') . ';') : ''; ?>
		">
			<?php echo $this->get('title') ;?>
		</h2>
		<?php } ;?>

		<?php if($this->get('content') != '') { ;?>
			<p style="<?php echo ($this->get('content_size')) ? ('font-size: ' . $this->get('content_size') . 'px;') : ''; ?>
			<?php echo ($this->get('content_color')) ? ('color: ' . $this->get('content_color') . ';') : ''; ?>
				">
				<?php echo $this->get('content') ;?>
			</p>
		<?php } ;?>
	</div>
</div>