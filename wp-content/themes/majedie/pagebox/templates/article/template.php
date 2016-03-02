<div class="main-container">
	<div class="container">
		<div class="article-section">
			<div class="top-bg"></div>
			<div class="inner-section">
				<?php foreach ($this->get_variable( 'article_modules' ) as $module): ?>
				<?php $module->display(); ?>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<div class="article-bottom">
		<?php foreach ($this->get_variable( 'bottom_modules' ) as $module): ?>
		<?php $module->display(); ?>
		<?php endforeach ?>
	</div>
</div>