<div class="module-wpg module-full-width-table"
	<?php
	if($this->get('background_outer_color')) {
		echo 'style="';
		echo 'background-color: ' . $this->get('background_outer_color') . ';';
		if($this->get('title') == '') {
			echo 'style="padding-top: 0px;"';
		} else {
			echo 'style="padding-bottom: 0px;"';
		}
	}
	else {
		echo '"';
	}
	;?>
	>
	<div class="wpg-container-tabels">
		<div class="container">
			<div class="wpg-table-wrap-outset"
				<?php
				if($this->get('background_inner_color')) {
					echo 'style="';
					echo 'background-color: ' . $this->get('background_inner_color') . ';';
					echo '"';
				}
				;?>
				>
				<div class="wpg-table-wrap">
					<table>
						<?php if($this->get('above_table_text') != '') { ;?>
						<caption
						<?php
						if($this->get('above_table_background_color') != '' || $this->get('above_table_font_size') != '' || $this->get('above_table_font_color') != '') {
							echo 'style="';
							if($this->get('above_table_background_color')) {
								echo 'background-color: ' . $this->get('above_table_background_color') . ';';
							}
							if($this->get('above_table_font_size')) {
								echo 'font-size: ' . $this->get('above_table_font_size') . 'px;';
							}
							if($this->get('above_table_font_color')) {
								echo 'color: ' . $this->get('above_table_font_color') . ';';
							}
							echo '"';
						}
						;?>
						><?php echo $this->get('above_table_text') ;?></caption>
						<?php } ;?>
						<thead>
							<tr>
								<th
								<?php
								if($this->get('table_header_background_color') != '' || $this->get('table_header_font_size') != '' || $this->get('table_header_font_color') != '') {
									echo 'style="';
									if($this->get('table_header_background_color')) {
										echo 'background-color: ' . $this->get('table_header_background_color') . ';';
									}
									if($this->get('table_header_font_size')) {
										echo 'font-size: ' . $this->get('table_header_font_size') . 'px;';
									}
									if($this->get('table_header_font_color')) {
										echo 'color: ' . $this->get('table_header_font_color') . ';';
									}
									echo '"';
								}
								;?>
								><?php echo $this->get('left_col_text') ;?></th>
								<th
								<?php
								if($this->get('table_header_background_color') != '' || $this->get('table_header_font_size') != '' || $this->get('table_header_font_color') != '') {
									echo 'style="';
									if($this->get('table_header_background_color')) {
										echo 'background-color: ' . $this->get('table_header_background_color') . ';';
									}
									if($this->get('table_header_font_size')) {
										echo 'font-size: ' . $this->get('table_header_font_size') . 'px;';
									}
									if($this->get('table_header_font_color')) {
										echo 'color: ' . $this->get('table_header_font_color') . ';';
									}
									echo '"';
								}
								;?>
								><?php echo $this->get('right_col_text') ;?></th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1 ;?>
							<?php foreach ($this->get('table') as $row): ?>
							<tr>
								<td
								<?php
								if($this->get('table_even_color') != '' || $this->get('table_odd_color') != '' || $this->get('table_content_font_size') != '' || $this->get('table_content_font_color') != '') {
									echo 'style="';
									if($this->get('table_even_color') && $i % 2 == 0 ) {
										echo 'background-color: ' . $this->get('table_even_color') . ';';
									}
									if($this->get('table_odd_color') && $i % 2 != 0) {
										echo 'background-color: ' . $this->get('table_odd_color') . ';';
									}
									if($this->get('table_content_font_size')) {
										echo 'font-size: ' . $this->get('table_content_font_size') . 'px;';
									}
									if($this->get('table_content_font_color')) {
										echo 'color: ' . $this->get('table_content_font_color') . ';';
									}
									echo '"';
								}
								;?>
								><?php echo $row->left_col ;?></td>
								<td
								<?php
								if($this->get('table_even_color') != '' || $this->get('table_odd_color') != '' || $this->get('table_content_font_size') != '' || $this->get('table_content_font_color') != '') {
									echo 'style="';
									if($this->get('table_even_color') && $i % 2 == 0 ) {
										echo 'background-color: ' . $this->get('table_even_color') . ';';
									}
									if($this->get('table_odd_color') && $i % 2 != 0) {
										echo 'background-color: ' . $this->get('table_odd_color') . ';';
									}
									if($this->get('table_content_font_size')) {
										echo 'font-size: ' . $this->get('table_content_font_size') . 'px;';
									}
									if($this->get('table_content_font_color')) {
										echo 'color: ' . $this->get('table_content_font_color') . ';';
									}
									echo '"';
								}
								;?>
								><?php echo $row->right_col ;?></td>
							</tr>
							<?php $i++ ;?>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

