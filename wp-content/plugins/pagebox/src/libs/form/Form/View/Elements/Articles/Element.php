<?php
/**
 * Element view file for post input
 * 
 * @author      Max Matloka (max@matloka.me)
 * @package     WPGeeks
 * @subpackage  Forms
 */
?>
<table>
	<tr class="subelement-post" data-type="posts">
		<th class="label" scope="row">
			<label><?php _e( 'Latest post', 'pagebox' ); ?></label> 
		</th>
		<td class="input">
                    <label><input type="checkbox" style="width: 15px;" name="<?php echo $this->getConfig( 'name' ); ?>[latest]" value="1" <?php if( !empty( $this->values['latest'] ) ){ checked( $this->values['latest'], 1 ); } ?> /> <?php _e( 'Select latest post', 'pagebox' ); ?></label>
		</td>
	</tr>
        
        <?php if (is_array($this->types)) : ?>
	<tr class="subelement-types" data-type="post">
		<th class="label" scope="row">
			<label><?php _e( 'Types', 'pagebox' ); ?></label> 
		</th>
		<td class="input">
			<?php
				// set default value
				if (!isset($this->values['type'])) :
					$this->values['type'] = '';
				endif;
			?>
			<select data-setting="type" class="make-chosen" name="<?php echo $this->getConfig( 'name' ); ?>[type][]" multiple >
				<option value=""></option>

				<?php foreach ($this->types as $type): ?>
                                <option value="<?php echo $type->slug; ?>" <?php is_array($this->values['type']) ? selected( in_array($type->slug, $this->values['type']) ) : selected( $type->slug, $this->values['type']); ?>>
						<?php echo $type->name; ?>
				</option>

				<?php endforeach;?>
			</select>
			<p class="description">
				<?php _e( 'Select type name to specify post query', 'pagebox' ); ?>
			</p>
		</td>
	</tr>
	<?php endif; ?>
        
	<?php if (is_array($this->categories)) : ?>
	<tr class="subelement-categories" data-type="post">
		<th class="label" scope="row">
			<label><?php _e( 'Categories', 'pagebox' ); ?></label> 
		</th>
		<td class="input">
			<?php
				// set default value
				if (!isset($this->values['category'])) :
					$this->values['category'] = '';
				endif;
			?>
			<select data-setting="category" class="make-chosen" name="<?php echo $this->getConfig( 'name' ); ?>[category][]" multiple>
				<option value=""></option>

				<?php foreach ($this->categories as $category): ?>

                                <option value="<?php echo $category->slug; ?>" <?php is_array($this->values['category']) ? selected( in_array($category->slug, $this->values['category']) ) : selected($category->slug, $this->values['category']); ?>>
						<?php echo $category->name; ?>
				</option>

				<?php endforeach;?>
			</select>
			<p class="description">
				<?php _e( 'Select category name to specify post query', 'pagebox' ); ?>
			</p>
		</td>
	</tr>
	<?php endif; ?>
        
        <?php if ( !empty( $this->tags ) ) : ?>
        
        <tr class="subelement-tags" data-type="post">
		<th class="label" scope="row">
			<label><?php _e( 'Tags', 'pagebox' ); ?></label> 
		</th>
		<td class="input">
			<?php
				// set default value
				if (!isset($this->values['tag'])) :
					$this->values['tag'] = '';
				endif;
			?>
			<select data-setting="tag" class="make-chosen" name="<?php echo $this->getConfig( 'name' ); ?>[tag][]" multiple>
				<option value=""></option>

				<?php foreach ($this->tags as $tag): ?>

				<option value="<?php echo $tag->slug; ?>" <?php is_array($this->values['tag']) ? selected( in_array($tag->slug, $this->values['tag']) ) : selected( $tag->slug, $this->values['tag']); ?>>
						<?php echo $tag->name; ?>
				</option>

				<?php endforeach;?>
			</select>
			<p class="description">
				<?php _e( 'Enter tags to specify post query. It is possible to enter more than one tag. Tags should be separated with comma sign (,) without additional spaces.', 'pagebox' ); ?>
			</p>
		</td>
	</tr>
        <?php endif; ?>

	<tr class="subelement-orderby" data-type="posts">
		<th class="label" scope="row">
			<label><?php _e( 'Order by', 'pagebox' ); ?></label> 
		</th>
		<td class="input">
			<?php
				// set default value
				if (!isset($this->values['orderby'])) :
					$this->values['orderby'] = '';
				endif;
			?>
			<select data-setting="orderby" name="<?php echo $this->getConfig( 'name' ); ?>[orderby]">
				<option value="title" <?php selected('title', $this->values['orderby']); ?>><?php _e('Title', 'pagebox'); ?></option>
				<option value="date" <?php selected('date', $this->values['orderby']); ?>><?php _e('Date', 'pagebox'); ?></option>
				<option value="random" <?php selected('random', $this->values['orderby']); ?>><?php _e('Random', 'pagebox'); ?></option>
			</select>
			<p class="description">
				<?php _e( 'Sort retrieved posts by selected parameter.', 'pagebox' ); ?>
			</p>
		</td>
	</tr>

	<tr class="subelement-order" data-type="posts">
		<th class="label" scope="row">
			<label><?php _e( 'Order', 'pagebox' ); ?></label> 
		</th>
		<td class="input">
			<?php
				// set default value
				if (!isset($this->values['order'])) :
					$this->values['order'] = '';
				endif;
			?>
			<select data-setting="order" name="<?php echo $this->getConfig( 'name' ); ?>[order]">
				<option value="ASC" <?php selected('ASC', $this->values['order']); ?>>
					<?php _e('Ascending order', 'pagebox'); ?>
				</option>
				<option value="DESC" <?php selected('DESC', $this->values['order']); ?>>
					<?php _e('Descending order', 'pagebox'); ?>
				</option>
			</select>
			<p class="description">
				<?php _e( 'Designate the ascending (1, 2, 3) or descending (3, 2, 1) order.', 'pagebox' ); ?>
			</p>
		</td>
	</tr>

	<tr class="subelement-count" data-type="post">
		<th class="label" scope="row">
			<label><?php _e( 'Number of posts', 'pagebox' ); ?></label> 
		</th>
		<td class="input">
			<?php
				// set default value
				if (!isset($this->values['count'])) :
					$this->values['count'] = '';
				endif;
			?>
                        <input type="number" min="-1" data-setting="count" name="<?php echo $this->getConfig( 'name' ); ?>[count]" <?php if (isset($this->values['count'])): ?>value="<?php echo $this->values['count']; ?>"<?php endif; ?>/>
			<p class="description">
				<?php _e( 'Enter number of posts to display or leave empty to view all', 'pagebox' ); ?>
			</p>
		</td>
	</tr>
</table>