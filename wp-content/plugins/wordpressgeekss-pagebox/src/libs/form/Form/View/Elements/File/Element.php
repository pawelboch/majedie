
<?php
/**
 * Element view file for repeater
 *
 * @author      Max Matloka (max@matloka.me)
 * @package     WPGeeks
 * @subpackage  Forms
 */
?>

    <div class="pagebox-image-preview">
        <?php if ($this->getValue() == null) : ?>

        <?php else: ?>
            <?php  $att = get_post($this->getValue()) ?>
            <a href="<?php echo $att->guid ?>" ><?php echo $att->post_title; ?></a>
        <?php endif; ?>
    </div>
    <a href="#" class="button button-secondary pagebox" data-action="<?php echo ($this->getValue() !=null)? 'remove_file':'file_upload'  ?>">
        <?php if($this->getValue() !=null): ?>
            <?php _e('Remove File', 'pagebox'); ?>
        <?php else: ?>
            <?php _e('Select File', 'pagebox'); ?>
        <?php endif ?>
    </a>
<?php echo $this->element->getRenderedTag(); ?>