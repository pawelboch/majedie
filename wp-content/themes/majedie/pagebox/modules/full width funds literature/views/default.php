<div class="module-wpg module-full-width-funds-literature">
	<div class="wpg-selects-funds-literature">
		<div class="container">
		<form method="GET" >
				
			<?php if(count($this->get('terms')) > 0): ?> 		
			<?php foreach($this->get('terms') as $taxonomy): ?>
							<select class="wpg-plugin-select" style="display: none;" name="<?php echo $taxonomy['slug']; ?>">
								<option value=""><?php echo $taxonomy['name']; ?></option>
								<?php if(count($taxonomy['content']) > 0): ?>
								<?php foreach($taxonomy['content'] as $term): ?>
									<option value="<?php echo $term->slug; ?>" <?php selected($taxonomy['selected'] == $term->slug) ?> >
										<?php echo $term->name; ?>
									</option>
								<? endforeach; ?>
								<?php endif; ?>
							</select>
			<?php endforeach; ?>	

			<?php endif; ?> 

			<input type="submit" value="Apply" class="btn-1" name="wpg-submit-literature">
		</form>
		</div>
	</div>
	<div class="wpg-container-tabels">
		<div class="container">
			<p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque rhoncus pulvinar scelerisque.<br>Maecenas pharetra ac augue et aliquet. Nullam auctor ligula varius quam aliquam tempus.<br>Mauris a aliquet sem, vel suscipit libero. Morbi ultricies mattis semper. </p>
			


			<?php 
			$noResults = true;
			if(count($this->get('itmes')) > 0): ?> 
			<?php foreach($this->get('items') as $item): ?>
			<?php if(count($item['files']) > 0): ?> 
			<div class="wpg-table-wrap-outset">
				<div class="wpg-table-wrap">

					<table>
						<caption><?php echo $item['name']; ?> </caption>
						<thead>
							<tr>
								<th>Document Type</th>
								<th>Fund</th>
								<th>Share Class</th>
								<th>Currency</th>
								<th>Acc / Inc</th>
								<th>File</th>
							</tr>
						</thead>
						<tbody>	
						
						<?php foreach($item['files'] as $file): ?>
						<?php $noResults = false; ?>
							<tr>
								<td><?php echo implode(";<br>", $file[0]); ?></td>
								<td><?php echo implode(";<br>", $file[1]); ?></td>
								<td><?php echo implode(";<br>", $file[2]); ?></td>
								<td><?php echo implode(";<br>", $file[3]); ?></td>
								<td><?php echo implode(";<br>", $file[4]); ?></td>
								<td><a href="<?php echo $file[5]; ?>"><?php echo $file[6]; ?></a></td>
							</tr>
						<?php endforeach; ?>
						

						</tbody>
					</table>
				</div>
			</div>
			<?php endif; ?>
			<?php endforeach; ?>
			<?php endif; ?> 

			<?php if($noResults == true): ?>
					<p class="no-results"><strong>No results</strong></p>
			<?php endif; ?>

			

			<div class="row wpg-bottom-container">
				<div class="col-xs-12 col-md-8">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque rhoncus pulvinar scelerisque. Maecenas pharetra ac augue et aliquet. Nullam auctor ligula varius quam aliquam tempus. Mauris a aliquet sem, vel suscipit libero. Morbi ultricies mattis semper. Mauris luctus diam augue, eget gravida orci iaculis at. </p>
				</div>
			</div>
		</div>
	</div>
</div>