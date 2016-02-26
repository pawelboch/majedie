<div class="module-full-width-search-funds-title-paragraph-link"
<?php	if($this->get('background_outer_color')) {
echo 'style="';
echo 'background-color: ' . $this->get('background_outer_color') . ';';
echo '"';
	}
;?>
>
	<div class="container">

		<div class="span-table">
			<div class="span-table-cell vertical-align-middle wpg-first-block"
			<?php	if($this->get('background_inner_color')) {
			echo 'style="';
			echo 'background-color: ' . $this->get('background_inner_color') . ';';
			echo '"';
				}
			;?>
			>
				<h2
				<?php if($this->get('title_size') || $this->get('title_color') != '') {
					echo 'style=" ';
					if($this->get('title_size') != '') {
						echo 'font-size: ' . $this->get('title_size') . 'px;';
					}
					if($this->get('title_color') != '') {
						echo 'color: ' . $this->get('title_color') . ';';
					}
					echo '"';
				} ;?>
				><?php echo $this->get('title') ;?></h2>
				<p class="text"
				<?php if($this->get('text_size') || $this->get('text_color') != '') {
					echo 'style=" ';
					if($this->get('text_size') != '') {
						echo 'font-size: ' . $this->get('text_size') . 'px;';
					}
					if($this->get('text_color') != '') {
						echo 'color: ' . $this->get('text_color') . ';';
					}
					echo '"';
				} ;?>
				>
				<?php echo $this->get('text') ;?>
				</p>
				<a href="<?php echo $this->get('button_url') ;?>" class="btn-2"
				<?php if($this->get('button_size') || $this->get('button_color') != '') {
					echo 'style=" ';
					if($this->get('button_size') != '') {
						echo 'font-size: ' . $this->get('button_size') . 'px;';
					}
					if($this->get('button_color') != '') {
						echo 'color: ' . $this->get('button_color') . ';';
						echo 'border-color: ' . $this->get('button_color') . ';';
					}
					echo '"';
				} ;?>
				><?php echo $this->get('button_text') ;?></a>
			</div>
			<div class="span-table-cell vertical-align-middle wpg-second-block"
			<?php	if($this->get('background_right_block_color')) {
			echo 'style="';
			echo 'background-color: ' . $this->get('background_right_block_color') . ';';
			echo '"';
				}
			;?>
			>
				<h2
				<?php if($this->get('fund_form_title_size') || $this->get('fund_form_title_color') != '') {
					echo 'style=" ';
					if($this->get('fund_form_title_size') != '') {
						echo 'font-size: ' . $this->get('fund_form_title_size') . 'px;';
					}
					if($this->get('fund_form_title_color') != '') {
						echo 'color: ' . $this->get('fund_form_title_color') . ';';
					}
					echo '"';
				} ;?>
				><?php echo $this->get('fund_form_title') ;?></h2>
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
					<button class="btn-1" type="submit" name="search-funds" value=""
					<?php if($this->get('fund_form_button_size') || $this->get('fund_form_button_color') != '') {
						echo 'style=" ';
						if($this->get('fund_form_button_size') != '') {
							echo 'font-size: ' . $this->get('fund_form_button_size') . 'px;';
						}
						if($this->get('fund_form_button_color') != '') {
							echo 'color: ' . $this->get('fund_form_button_color') . ';';
							echo 'border-color: ' . $this->get('fund_form_button_color') . ';';
						}
						echo '"';
					} ;?>
					><?php echo $this->get('fund_form_button_text') ;?></button>
				</form>
				
			</div>
		</div>

	</div>
</div>
<?php	if($this->get('background_right_block_color')) {
echo '<style scoped>';
echo '.module-full-width-search-funds-title-paragraph-link .wpg-second-block::before {';
echo 'border-color: transparent ' . $this->get('background_right_block_color') . ' transparent transparent;';
echo '}';
echo '</style>';
			}
;?>