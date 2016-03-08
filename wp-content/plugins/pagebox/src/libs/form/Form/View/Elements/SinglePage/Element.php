<?php
/**
 * Element view file for page input
 * 
 * @author      Pavel
 * @package     WPGeeks
 * @subpackage  Forms
 */
?>
<table>
	<tr class="subelement-post" data-type="page">
                        <?php
				// set default value
				if (!isset($this->values)) :
					$this->values = '';
				endif;
                                echo $this->values;
			?>
                        <select data-setting="page" class="make-chosen subelement" name="<?php echo $this->getConfig( 'name' ); ?>" >
                                <option value=""></option>
				<?php foreach ($this->pages as $page): ?>
                                <?php echo $page->ID; ?>
				<option value="<?php echo $page->post_name; ?>" <?php is_numeric( $this->values ) ? selected($page->ID, $this->values) : selected($page->post_name, $this->values); ?>>
					<?php echo $page->post_title; ?>
				</option>

				<?php endforeach;?>
			</select>
	</tr>
</table>