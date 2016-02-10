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
	<?php if (is_array($this->posts)) : ?>
	<tr class="subelement-post" data-type="post">
        <?php if( !$this->getConfig( 'hide_extras' ) ): ?>
		<th class="label" scope="row">

			    <label><?php _e( 'Post name', 'pagebox' ); ?></label>

		</th>
        <?php endif ?>
		<td class="input">
			<?php

				// set default value
				if (!isset($this->values['post'])) :
                    if(!$this->getConfig( 'hide_extras' )){
                        $this->values['post'] = '-1';
                    }else{
                        $this->values =array ('post' => $this->values);

                    }

				endif;

			?>

            <select name="<?php echo $this->getConfig( 'name' ); ?><?php if( !$this->getConfig( 'hide_extras' ) ): ?>[post]<?php endif ?>" class="post-select trigger-chosen-single make-chosen" >
                <option value='-1' data-cats="#" <?php selected($this->values['post'], '-1'); ?>>none</option>
                <optgroup label="Articles">
                    <?php foreach($this->posts as $post ): ?>
                        <?php $cats = get_the_category($post->ID);
                        $cats_string = '#';
                        foreach ($cats as $cat) $cats_string .= $cat->term_id.'#';
                        ?>
                        <option value='<?php echo $post->ID ?>' data-cats="<?php echo $cats_string; ?>" <?php selected($post->ID, $this->values['post']); ?>><?php echo $post->post_title ?></option>
                    <?php endforeach; ?>
                </optgroup>
                <optgroup label="Pages">
                    <?php foreach($this->pages as $post ): ?>
                        <option value='<?php echo $post->ID ?>' data-cats="#pages" <?php selected($post->ID, $this->values['post']); ?>><?php echo $post->post_title ?></option>
                    <?php endforeach; ?>
                </optgroup>
                <optgroup label="Asset Managers">
                    <?php foreach($this->managers as $post ): ?>
                        <option value='<?php echo $post->ID ?>' data-cats="#managers" <?php selected($post->ID, $this->values['post']); ?>><?php echo $post->post_title ?></option>
                    <?php endforeach; ?>
                </optgroup>
                <optgroup label="Funds">
                    <?php foreach($this->funds as $post ): ?>
                        <option value='<?php echo $post->ID ?>' data-cats="#funds" <?php selected($post->ID, $this->values['post']); ?>><?php echo $post->post_title.' - '.get_post_meta($post->ID, 'ISIN', true); ?></option>
                    <?php endforeach; ?>
                </optgroup>
            </select>

            <?php if( !$this->getConfig( 'hide_extras' ) ): ?>
                <p class="description">
                    <?php _e( 'Select specific post name to display or use settings below', 'pagebox' ); ?>
                </p>
            <?php endif ?>
		</td>
	</tr>
	<?php endif; ?>

    <?php if( !$this->getConfig( 'hide_extras' ) ): ?>
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
			<select data-setting="category" name="<?php echo $this->getConfig( 'name' ); ?>[category]"  class="make-chosen">
				<option value=""></option>

				<?php foreach ($this->categories as $category): ?>

				<option value="<?php echo $category->term_id; ?>" <?php selected($category->term_id, $this->values['category']); ?>>
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
			<select data-setting="tag" name="<?php echo $this->getConfig( 'name' ); ?>[tag]" class="make-chosen">
				<option value=""></option>

				<?php foreach ($this->tags as $tag): ?>

				<option value="<?php echo $tag->term_id; ?>" <?php selected($tag->term_id, $this->values['tag']); ?>>
						<?php echo $tag->name; ?>
				</option>

				<?php endforeach;?>
			</select>
			<p class="description">
				<?php _e( 'Enter tags to specify post query. It is possible to enter more than one tag. Tags should be separated with comma sign (,) without additional spaces.', 'pagebox' ); ?>
			</p>
		</td>
	</tr>

	<tr class="subelement-orderby" data-type="post">
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

	<tr class="subelement-order" data-type="post">
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

	<tr class="subelement-offset" data-type="post">
		<th class="label" scope="row">
			<label><?php _e( 'Offset', 'pagebox' ); ?></label>
		</th>
		<td class="input">
			<?php
				// set default value
				if (!isset($this->values['offset'])) :
					$this->values['offset'] = '';
				endif;
			?>
			<input data-setting="offset" name="<?php echo $this->getConfig( 'name' ); ?>[offset]" <?php if (isset($this->values['offset'])): ?>value="<?php echo $this->values['offset']; ?>"<?php endif; ?>/>
			<p class="description">
				<?php _e( 'Enter number of first posts to ommit', 'pagebox' ); ?>
			</p>
		</td>
	</tr>
    <tr class="subelement-offset" data-type="post">
        <th class="label" scope="row">
            <label><?php _e( 'Image Overwrite', 'pagebox' ); ?></label>
        </th>
        <td class="element-image">
            <?php
            // set default value
            if (!isset($this->values['image'])) :
                $this->values['image'] = '';
            endif;
            ?>



	        <div class="pagebox-image-preview">
		        <?php if ( $this->values['image'] == null) : ?>
			        <img src="http://placehold.it/150x150" alt="" />
		        <?php else: ?>
			        <?php echo wp_get_attachment_image($this->getValue()); ?>
		        <?php endif; ?>
	        </div>

	        <a href="#" class="button button-secondary pagebox" data-action="<?php echo ($this->values['image'] !=null)? 'remove_image':'image_upload'  ?>">
		        <?php if($this->values['image'] !=null): ?>
			        <?php _e('Remove Image', 'pagebox'); ?>
		        <?php else: ?>
			        <?php _e('Select Image', 'pagebox'); ?>
		        <?php endif ?>
	        </a>

            <input data-setting="image" type="hidden" name="<?php echo $this->getConfig( 'name' ); ?>[image]" <?php if (isset($this->values['image'])): ?>value="<?php echo $this->values['image']; ?>"<?php endif; ?>/>

            <p>
                Image Alt
            <input data-setting="image" type="text" name="<?php echo $this->getConfig( 'name' ); ?>[alt_image]" <?php if (isset($this->values['alt_image'])): ?>value="<?php echo $this->values['alt_image']; ?>"<?php endif; ?>/>
            </p>
            <p class="description">
                <?php _e( 'If Image selected then will overwrite the orginal image of single post. ', 'pagebox' ); ?>
                <?php if($this->getConfig('overwrite')){
                    _e('('.$this->getConfig('overwrite').')')  ;
                    } ?>
            </p>

        </td>
    </tr>

<?php endif ?>

</table>
<p class="description">Single post takes priority over category and category takes priority over tag.</p>