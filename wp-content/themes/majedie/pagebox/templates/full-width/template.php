<div class="main-container">
	<?php foreach ($this->get_variable( 'full_width_modules' ) as $module): ?>
	    <?php $module->display(); ?>
	<?php endforeach ?>
</div>