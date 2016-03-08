<div class="wrap media-upload-form">
    <div id="message" class="updated notice " style="display: none;" ><p>The files were uploaded successfully.</p></div>
    <div id="message" class="notice-error notice " style="display: none;"><p>Please try again</p></div>


    <div id="documentsdb-upload-ui" class="multiple hide-if-no-js" >
        <div id="drag-drop-area">
            <div class="drag-drop-inside">
                <p class="drag-drop-info"><?php _e('Drop files here'); ?></p>
                <p><?php _ex('or', 'Uploader: Drop files here - or - Select Files'); ?></p>
                <p class="drag-drop-buttons"><input id="documentsdb-browse-button" type="button" value="<?php esc_attr_e('Select Files'); ?>" class="button" /></p>
                <span class="ajaxnonce" id="<?php echo wp_create_nonce('documentsdb'); ?>"></span>
            </div>
        </div>
    </div>


    <div class="uploading" style="    text-align: center; width: 100%; float: left; padding: 20px 0; font-size: 1.3rem;">
        <span>Uploading</span>
        <span class="percent"></span>
    </div>

<!--    <div id="media-items" class="hide-if-no-js">
        <div class="media-item child-of-0" style="display: none;">
            <img class="pinkynail" src="<?php echo includes_url(); ?>/images/media/document.png" alt="">
            <a class="edit-attachment" href="<?php echo admin_url('edit.php?post_type=documents_db'); ?>" >Edit</a>
            <div class="filename new"><span class="title"></span>
            </div>
        </div>

    </div>-->
</div>