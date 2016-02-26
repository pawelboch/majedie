<div class="module-full-width-search-funds-title-paragraph-link">
	<div class="container">

		<div class="span-table">
			<div class="span-table-cell vertical-align-middle wpg-first-block">
				<h2><?php echo $this->get('title') ;?></h2>
				<div class="text">
					<?php echo $this->get('text') ;?>
				</div>
				<a href="<?php echo $this->get('button_url') ;?>" class="btn-2"><?php echo $this->get('button_text') ;?></a>
			</div>
			<div class="span-table-cell vertical-align-middle wpg-second-block">
				<h2><?php echo $this->get('fund_form_title') ;?></h2>
				<form method="get" action="/">
					<select class="wpg-plugin-select">
						<option value="1">Fund</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
						<option value="4">Option 4</option>
						<option value="5">Option 5</option>
						<option value="6">Option 6</option>
						<option value="7">Option 7</option>
					</select>
					<select class="wpg-plugin-select">
						<option value="1">Fund Domicile</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
						<option value="4">Option 4</option>
						<option value="5">Option 5</option>
						<option value="6">Option 6</option>
						<option value="7">Option 7</option>
						<option value="8">Option 8</option>
					</select>
					<select class="wpg-plugin-select">
						<option value="1">Share Class</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
						<option value="4">Option 4</option>
					</select>
					<select class="wpg-plugin-select">
						<option value="1">Acc / Inc</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
						<option value="4">Option 4</option>
						<option value="5">Option 5</option>
						<option value="6">Option 6</option>
					</select>
					<button class="btn-1" type="submit" name="search-funds" value=""><?php echo $this->get('fund_form_button_text') ;?></button>
				</form>
				
			</div>
		</div>

	</div>
</div>
