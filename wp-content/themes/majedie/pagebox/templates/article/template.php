<div class="main-container">
	<div class="article-section">
		<?php foreach ($this->get_variable( 'article_modules' ) as $module): ?>
			<?php $module->display(); ?>
		<?php endforeach ?>
	</div>
	<?php foreach ($this->get_variable( 'bottom_modules' ) as $module): ?>
		<?php $module->display(); ?>
	<?php endforeach ?>
</div>