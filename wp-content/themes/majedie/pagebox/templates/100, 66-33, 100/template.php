<div class="main-container">
	<div class="top-container">
		<?php foreach ($this->get_variable( 'top_modules' ) as $module): ?>
		<?php $module->display(); ?>
		<?php endforeach ?>
	</div>
	<div class="middle-container">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php foreach ($this->get_variable( 'left-first_modules' ) as $module): ?>
					<?php $module->display(); ?>
					<?php endforeach ?>
				</div>
				<div class="col-md-4">
					<?php foreach ($this->get_variable( 'right-first_modules' ) as $module): ?>
					<?php $module->display(); ?>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-container">
		<?php foreach ($this->get_variable( 'bottom_modules' ) as $module): ?>
		<?php $module->display(); ?>
		<?php endforeach ?>
	</div>
</div>