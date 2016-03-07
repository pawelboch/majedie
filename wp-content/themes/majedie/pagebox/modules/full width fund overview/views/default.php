<?php
	$f = isset( $_GET['f'] ) ? $_GET['f'] : array();
	$filters = array(
		'Fund'          => 'name',
		'Fund Domicile' => 'domicile',
		'Share Class'   => 'share_class',
		'Acc / Inc'     => 'acc_inc',
		'Currency'      => 'currency'
	);
	$filtersValues = majedie_get_prices_filters();
?>
<div class="module-wpg module-full-width-fund-overview">
	<div class="container">

		<form method="get">
			<?php $i = 0; foreach( $filters as $name => $id ): ?>
			<select name="f[<?php echo $id; ?>]" class="wpg-plugin-select" style="display:none">
				<option value=""><?php echo $name; ?></option>
				<?php foreach( $filtersValues[$i] as $option ) { echo '<option '.selected( $f[$id] == $option ).' value="'.$option.'">' . $option . '</option>'; } ?>
			</select>
			<?php $i++; endforeach; ?>
			<input type="submit" value="Apply" class="btn-1">
		</form>
	</div>

</div>