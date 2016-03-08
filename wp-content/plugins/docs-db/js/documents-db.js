jQuery(document).ready(function () {

    if (jQuery('.post-type-documents_db').length > 0) {
        jQuery('.page-title-action').hide();
        jQuery('span.view').hide();
    }

    if (jQuery('#documentsdb-upload-ui').length > 0) {
        var uploaddiv = jQuery('#documentsdb-upload-ui');
        jQuery('.uploading').hide();
        jQuery('#media-items').hide();

        var options = false;
        var container = jQuery('#documentsdb-upload-ui');
        options = JSON.parse(JSON.stringify(global_uploader_options));
        options['multipart_params']['_ajax_nonce'] = container.find('.ajaxnonce').attr('id');

        if (container.hasClass('multiple')) {
            options['multi_selection'] = true;
        }

        var uploader = new plupload.Uploader(options);

        uploader.bind('Init', function (up) {
            console.log('Init', up);


            if (up.features.dragdrop) {
                uploaddiv.addClass('drag-drop');
                jQuery('#drag-drop-area')
                        .bind('dragover.wp-uploader', function () {
                            uploaddiv.addClass('drag-over');
                        })
                        .bind('dragleave.wp-uploader, drop.wp-uploader', function () {
                            uploaddiv.removeClass('drag-over');
                        });

            } else {
                uploaddiv.removeClass('drag-drop');
                jQuery('#drag-drop-area').unbind('.wp-uploader');
            }
        });

        uploader.init();

        uploader.bind('FilesAdded', function (up, files) {
            jQuery.each(files, function (i, file) {
                console.log('File Added', i, file);
            });

            up.refresh();
            up.start();
        });

        uploader.bind('UploadProgress', function (up, file) {
            console.log('Progress', up, file);

            jQuery('.uploading').show();

        });

        uploader.bind('FileUploaded', function (up, file, response) {
            response = jQuery.parseJSON(response.response);
            jQuery('.uploading').hide();

            if (response['status'] == 'success') {
                console.log('Success', up, file, response);
//                jQuery('#media-items').show();
//                var latest = jQuery('#media-items .media-item').first().clone().prependTo('#media-items').show().find('.title').html(file.name);
                var latest = jQuery('.wrap .updated').first().clone().prependTo('.wrap').show().find('p').html(file.name + ' was uploaded successfully.');
            } else {
                console.log('Error', up, file, response);
                var latest = jQuery('.wrap .notice-error').first().clone().prependTo('.wrap').show().find('p').html(file.name + ' was not uploaded. Please try again');
            }

        });
    }

});