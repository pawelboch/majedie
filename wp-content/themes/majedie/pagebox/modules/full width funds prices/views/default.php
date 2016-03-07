<?php

	$rows = majedie_get_prices_table();

?>
<div class="module-wpg module-full-width-funds-prices">

	<div class="wpg-container-tabels">
		<div class="container">

			<div class="wpg-table-wrap-outset">
				<div class="wpg-table-wrap">
					<table class="tablesorter">
						<thead>
						<tr>
							<th>FUND</th>
							<th>FUND<br>DOMICILE</th>
							<th>SHARE<br>CLASS</th>
							<th>ACC/INC</th>
							<th>ISIN</th>
							<th>CURRENCY</th>
							<th>PRICE</th>
							<th>PRICE<br>SWING *</th>
							<th>PRICE<br>DATE</th>
							<th>VALUATION<br>POINT</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach( $rows as $row ): ?>
						<tr>
							<td><?php echo $row->{'fund-name'}; ?></td>
							<td><?php echo $row->{'domicile'}; ?></td>
							<td><?php echo $row->{'share-class'}; ?></td>
							<td><?php echo $row->{'type'}; ?></td>
							<td><?php echo $row->{'isin'}; ?></td>
							<td><?php echo strtoupper( $row->{'currency'} ); ?></td>
							<td><?php echo sprintf("%.2f", $row->{'nav'}); ?></td>
							<td><?php echo $row->{'price-swing'}; ?></td>
							<td><?php echo date_format(date_create($row->{'navdate'}), "d M Y"); ?></td>
							<td><?php echo $row->{'time'}; ?></td>
						</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>

			<div class="wpg-bottom-container">
				<div class="col-xs-12">
					<p>* The UK-domiciled funds, and the Ireland-domiciled UK Equity, UK Income, US Equity funds,
						operate on a single swinging price basis. The prices for each fund are swung up / down whenever
						there are net inflows / outflows of over £250,000 - or £1,000,000 in the case of the
						UK-domiciled UK Equity Fund. The current swing rates for the funds are as follows (quoted as bid
						/ offer spreads): Global Equity Fund 0.08% / 0.10%, Global Focus&nbsp;Fund 0.08% / 0.15%,&nbsp;US
						Equity Fund 0.05% / 0.05%,&nbsp;UK Equity Fund 0.15% / 0.60%, UK Focus Fund 0.15% / 0.55%, UK
						Income Fund 0.20% / 0.50%, Tortoise Fund 0.10% / 0.15%,&nbsp;UK Smaller Companies&nbsp;0.95% /
						1.25%,&nbsp;Majedie Institutional Trust&nbsp;0.15% / 0.60%.</p>
					<p>The Ireland-domiciled Tortoise fund operates on a NAV pricing basis, where an anti-dilution levy
						of 0.10% applied to net redemptions of over £1,000,000.&nbsp; If triggered, details of the levy
						shall be contained on the contract note.</p>
				</div>
			</div>

		</div>
	</div>


</div>