<div class="module-wpg module-full-width-fund">

	<div class="container">
		<div class="row">

			<div class="col-xs-12 col-md-4 wpg-inset-col">
				<div class="wpg-inset-box-2">
					<?php foreach ($this->get_variable( 'left-first_modules' ) as $module): ?>
					<?php $module->display(); ?>
					<?php endforeach ?>
				</div>
			</div>

			<div class="col-xs-12 col-md-8 wpg-inset-col">
				<div class="wpg-inset-box-1">
					<?php foreach ($this->get_variable( 'right-first_modules' ) as $module): ?>
					<?php $module->display(); ?>
					<?php endforeach ?>
				</div>
			</div>

			<div class="col-xs-12 col-md-8 wpg-inset-col">
				<div class="wpg-inset-box-1">
					<?php foreach ($this->get_variable( 'bottom_modules' ) as $module): ?>
					<?php $module->display(); ?>
					<?php endforeach ?>
				</div>
			</div>

		</div>
	</div>
</div>