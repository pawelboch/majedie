<div class="main-container">
	<div class="main-container">
				<?php foreach ($this->get_variable( 'top_modules' ) as $module): ?>
				<?php $module->display(); ?>
				<?php endforeach ?>
			</div>
	<div class="container top">
		<div class="row">
	
			<div class="col-sm-4">
				<?php foreach ($this->get_variable( 'left_modules' ) as $module): ?>
				<?php $module->display(); ?>
				<?php endforeach ?>
			</div>
			<div class="col-sm-8">
				<?php foreach ($this->get_variable( 'right_modules' ) as $module): ?>
				<?php $module->display(); ?>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<div class="bottom">
		<?php foreach ($this->get_variable( 'bottom_modules' ) as $module): ?>
		<?php $module->display(); ?>
		<?php endforeach ?>
	</div>
</div>