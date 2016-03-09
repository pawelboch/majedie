<!--
<div class="module-wpg module-fund-box-nav-menu">
	<div class="container clearfix">
		<ul class="clearfix">
			<?php //foreach($this->get('menu-items') as $item): ?>
				<li class=""><a href="<?php //echo $item->link_url; ?>"><?php //echo $item->link_text; ?></a></li>
			<?php //endforeach; ?>
		</ul>
	</div>
</div>
-->

	<div class="wpg-fund-menu wpg-bg-grain">
		<div class="container clearfix">
			<div class="wpg-fund-menu-inset">
				<h2>Overview</h2>
				<a href="#" class="wpg-mobile-menu"><i class="fa fa-chevron-down"></i></a>
				<ul class="clearfix">
					<?php foreach($this->get('menu-items') as $item): ?>
						<li class=""><a href="<?php echo $item->link_url; ?>"><?php echo $item->link_text; ?></a></li>
						<!--		<li class="wpg-fund-menu-active	">		-->
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>