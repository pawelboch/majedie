<?php

	$groups = majedie_get_charges_table();

?>
<div class="module-wpg module-full-width-funds-charges">

	<div class="wpg-container-tabels">
		<div class="container">

			<?php foreach( $groups as $groupName => $funds ): ?>
			<div class="wpg-table-wrap-outset">
				<div class="wpg-table-wrap">
					<table class="tablesorter">
						<caption><?php echo $groupName; ?></caption>
						<thead>
							<tr>
								<th>Fund</th>
								<th>Share<br>Class</th>
								<th>Currency</th>
								<th>Acc / Inc</th>
								<th>OFC (%)</th>
								<th>AMC (%)</th>
								<th>AAC (%)</th>
								<th>Perf Fee (%)</th>
								<th>Entry / Exit Charge (%)</th>
								<th>Taxes (%NAV)</th>
								<th>Execution (%NAV)</th>
								<th>Research (%NAV)</th>
								<th>Pricing Basis</th>
								<th>Dilution Rates (%)</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach( $funds as $fund ): ?>
							<tr>
								<td><?php echo $fund->{'fund-name'}; ?></td>
								<td><?php echo $fund->{'share-class'}; ?></td>
								<td><?php echo strtoupper( $fund->{'currency'} ); ?></td>
								<td><?php echo $fund->{'type'}; ?></td>
								<td><?php echo sprintf("%.2f", $fund->{'ongoing-charge'}); ?></td>
								<td><?php echo sprintf("%.2f", $fund->{'amc'}); ?></td>
								<td><?php echo sprintf("%.2f", $fund->{'admin-cost-charge'}); ?></td>
								<td><?php echo $fund->{'perf-fee'}; ?></td>
								<td><?php echo sprintf("%.2f", $fund->{'entry-charge'}); ?></td>
								<td><?php echo sprintf("%.2f", $fund->{'taxes'}); ?></td>
								<td><?php echo sprintf("%.2f", $fund->{'trade-ex'}); ?></td>
								<td><?php echo sprintf("%.2f", $fund->{'research'}); ?></td>
								<td><?php echo $fund->{'pricing-basis'}; ?></td>
								<td><?php echo $fund->{'dilution-rates'}; ?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<?php endforeach; ?>

			<div class="row wpg-bottom-container">
				<div class="col-xs-12">
					<p>1. Fund: For further information, please refer to the Prospectus and/or KIIDs</p>
					<p>2. Share Class: For further information, please refer to the Prospectus and/or KIIDs</p>
					<p>3. Currency: £ means Pounds Sterling, $ means US Dollars and € means euros.</p>
					<p>4. Acc / Inc: With accumulation shares, income from the Fund's investments will be included in the value of your shares rather than being paid out via a dividend. With income shares, income from the Fund's investments will be paid out via a dividend.</p>
					<p>5. OCF (%): Ongoing Charges Figure. This is the annual cost that is incurred through the regular operation of the Fund. The figure is normally based the actual costs of the previous year, but for new funds or a new share class of existing funds, the figure provided may be an estimate based on expected costs. These charges are deducted from the daily quoted price of the Fund. The two components of the OCF, Annual Management Charge (AMC) and Admin Cost Charges (ACC) are described separately. The OCF does not include Entry Charges, Exit Charges, Transaction Taxes, Trade Execution or Research, which are quoted separately in this table.</p>
					<p>6. AMC (%): Annual Management Charge. This is the annual charge received by Majedie Asset Management Limited.</p>
					<p>7. ACC (%): Admin Cost Charge. This is the annual charge for all other administrative costs incurred in the regular operation of the Fund, including for example daily fund accounting, safe custody of assets, transfer agency services, trustee & depositary oversight and external audit. Where Majedie Asset Management has elected to pay certain costs, the ACC quotes only those costs that will be paid by the Fund. The ACC is the difference between the OCF and the AMC.</p>
					<p>8. Performance fee (%): Performance fees are charged for the Tortoise Fund at a rate of 20% of the outperformance subject to a 5% hurdle. The funds listed n/a do not charge performance fees. The only share classes that incurred a performance fee for the year ending 31 December 2014 were the Tortoise Fund Class I Acc (0.10%) and the Tortoise Fund Class Z GBP Inc (0.23%).</p>
					<p>9. Entry / Exit Charge: No entry or exit fees are charged for any fund, with the exception of the Ireland-domiciled Tortoise Fund. Please see the prospectus for further information.</p>
					<p>10. Taxes (%NAV): Transaction taxes and levies, predominantly Stamp Duty, calculated as a 3 year annualised average to 31 December 2014. For funds launched after 1 January 2012, this figure has been based on the period from launch to 31 December 2014.</p>
					<p>11. Execution (%NAV): Trade execution costs. This is calculated as a 3 year annualised average to 31 December 2014. For funds launched after 1 January 2012, this figure has been based on the period from launch to 31 December 2014.</p>
					<p>12. Research (%NAV): Research costs. This is calculated as a 3 year annualised average to 31 December 2014. For funds launched after 1 January 2012, this figure has been based on the period from launch to 31 December 2014.</p>
					<p>13. Pricing Basis: The UK-domiciled funds, and the Ireland-domiciled UK Equity, UK Income, US Equity funds, operate on a single swinging price. The prices for each fund are swung up / down whenever there are net inflows / outflows of over £250,000 - or £1,000,000 in the case of the UK-domiciled UK Equity Fund. The Ireland-domiciled Tortoise Fund operates a dilution levy when there are net redemptions exceeding £1,000,000. Please see the prospectus for further information.</p>
					<p>14. Dilution Rates (%): The current swing rates for the UK-domiciled funds and the Ireland-domiciled UK Equity, UK Income, US Equity funds; or dilution levy for the Ireland-domiciled Tortoise fund, as bid / offer. Dilution compensates each fund for the transaction taxes, trade execution costs and market spread incurred by the Fund in actioning trades resulting from investor subscriptions or redemptions. Taxes and trade execution costs quoted on this page reflect the costs incurred by each fund having offset the dilution compensation. Dilution rates are subject to change.</p>
					<br>
					<p>*    To protect the interests of all other investors, a preliminary charge of up to 5% of the Net Asset Value per share may be payable. A redemption charge of up to 3% of the Net Asset Value per share may be applied. Both charges are at the discretion of the Directors and on a case by case basis the charges may be waived by the Directors.</p>
					<p>^   Tax, trade execution and research figures are not available for the Ireland-domiciled UK Income Fund, as this is a newly launched fund with limited charge history.</p>
				</div>
			</div>

		</div>
	</div>


</div>