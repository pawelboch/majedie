<?php
/**
 * Element view file for aberdeen post
 */

if ( ! isset( $this->values['post'] ) ) $this->values['post'] = '-1';
if ( ! isset( $this->values['order'] ) ) $this->values['order'] = 'title';
if ( ! isset( $this->values['offset'] ) ) $this->values['offset'] = '0';

?>
<p class="description">Single post takes priority over a tag.</p>

<table>

	<tr class="subelement-post" data-type="post">
		<th class="label" scope="row">
		    <label><?php _e( 'Post', 'pagebox' ); ?></label>
		</th>
		<td class="input">

            <select name="<?php echo $this->getConfig( 'name' ); ?>[post]" class="post-select trigger-chosen-single make-chosen">
                <option value="-1" <?php selected('-1', $this->values['post']); ?>>Select post</option>
                <?php if ( is_array( $this->wp_posts ) && ! empty( $this->wp_posts ) ) : ?>
	                <optgroup label="WordPress articles">
	                    <?php foreach($this->wp_posts as $post ): ?>
	                        <option value="<?php echo $post->ID; ?>" <?php selected($post->ID, $this->values['post']); ?>><?php echo $post->post_title; ?></option>
	                    <?php endforeach; ?>
	                </optgroup>
	            <?php endif; ?>
	            <?php if ( is_array( $this->feed_posts ) && ! empty( $this->feed_posts ) ) : ?>
	                <optgroup label="Feed articles">
	                    <?php foreach($this->feed_posts as $post ): ?>
	                        <option value="<?php echo $post->GUID; ?>" <?php selected($post->GUID, $this->values['post']); ?>><?php echo $post->TITLE; ?></option>
	                    <?php endforeach; ?>
	                </optgroup>
                <?php endif; ?>
            </select>

            <p class="description">
                <?php _e( 'Select specific post name to display or use settings below', 'pagebox' ); ?>
            </p>

		</td>
	</tr>

	<tr class="subelement-post" data-type="post">
		<th class="label" scope="row">
		    <label><?php _e( 'Tag', 'pagebox' ); ?></label>
		</th>
		<td class="input">

			<?php $tags = aberdeen_get_feed_tags(); ?>

            <select name="<?php echo $this->getConfig( 'name' ); ?>[tag]" class="post-select trigger-chosen-single make-chosen">
                <option value="-1" <?php selected('-1', $this->values['tag']); ?>>Any</option>
                <?php if ( is_array( $tags ) && ! empty( $tags ) ) : ?>
                    <?php foreach( $tags as $tag ): ?>
                        <option value="<?php echo $tag; ?>" <?php selected($tag, $this->values['tag']); ?>><?php echo $tag; ?></option>
                    <?php endforeach; ?>
	            <?php endif; ?>
            </select>

		</td>
	</tr>

	<tr class="subelement-post" data-type="post">
		<th class="label" scope="row">
		    <label><?php _e( 'Combination', 'pagebox' ); ?></label>
		</th>
		<td class="input">

            <select name="<?php echo $this->getConfig( 'name' ); ?>[combination]" class="">
                <option value="combined" <?php selected( 'combined', $this->values['combination'] ); ?>>All combined</option>
                <option value="wp" <?php selected( 'wp', $this->values['combination'] ); ?>>WordPress articles</option>
                <option value="feed" <?php selected( 'feed', $this->values['combination'] ); ?>>Thinking Aloud feed</option>
            </select>

            <p class="description">
	            <?php _e( 'This field is required if tag was selected', 'pagebox' ); ?>
	        </p>

		</td>

	</tr>

	<tr class="subelement-post" data-type="post">
		<th class="label" scope="row">
		    <label><?php _e( 'Order', 'pagebox' ); ?></label>
		</th>
		<td class="input">

            <select name="<?php echo $this->getConfig( 'name' ); ?>[order]" class="">
                <option value="title" <?php selected( 'title', $this->values['order'] ); ?>>Title</option>
                <option value="recent" <?php selected( 'recent', $this->values['order'] ); ?>>Most recent</option>
                <option value="random" <?php selected( 'random', $this->values['order'] ); ?>>Random</option>
            </select>

            <p class="description">
	            <?php _e( 'This field is required if tag was selected', 'pagebox' ); ?>
	        </p>

		</td>

	</tr>

	<tr class="subelement-post" data-type="post">
		<th class="label" scope="row">
		    <label><?php _e( 'Offset', 'pagebox' ); ?></label>
		</th>
		<td class="input">

            <input type="number" name="<?php echo $this->getConfig( 'name' ); ?>[offset]" value="<?php echo $this->values['offset']; ?>">

            <p class="description">
	            <?php _e( 'Controlls how many posts should be skipped. Useful when same tag is selected in many boxes', 'pagebox' ); ?>
	        </p>

		</td>

	</tr>

</table>
