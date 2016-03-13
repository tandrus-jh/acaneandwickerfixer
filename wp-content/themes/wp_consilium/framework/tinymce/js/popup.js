jQuery(document).ready(function() {
    jQuery('.shortcode-options').css('display', 'none');
    var option_id = [];
    jQuery('select#cs_shortcodes_chooser').chosen();

    // Change select shortcode
    jQuery('#cs_shortcodes_chooser_chzn div ul li').click(function() {       
        var type = jQuery('#cs_shortcodes_chooser').val();
        option_id = [];        
        jQuery('.shortcode-options').hide();
        jQuery('#cs_shortcodes_chooser').trigger('change');
        jQuery('#options-' + type).show();
        
        jQuery('#options-' + type + ' .attr').each(function() {
            var option_list = jQuery(this).attr('data-attrname');
            option_id.push(option_list);
        });
    });

    // Add Shortcoder
    jQuery('#cshero_shortcode_add_btn').click(function() {
        var add_code = '';
        var shortcode = jQuery('#cs_shortcodes_chooser').val();
        add_code += '[' + shortcode + ' ';

        for (var i = 0; i < option_id.length; i++) {
            if(option_id[i] == 'category'){
                value_category = '';
                jQuery('#options-' + shortcode + ' .cs-taxonomy-terms input.pro_taxonomy').each(function(){
                    if(jQuery(this).is(':checked')){
                        value_category = value_category + jQuery(this).val() + ',';
                    }
                });
                jQuery('#options-' + shortcode + ' .pro_taxonomy_field').val(value_category.substring(0, value_category.length - 1));
                option = jQuery('#options-' + shortcode + ' .pro_taxonomy_field').val();
            }
            else if (jQuery('#options-' + shortcode + ' #option_' + option_id[i]).is(':checkbox')) {
                option = jQuery('#options-' + shortcode + ' #option_' + option_id[i]).is(':checked') ? true : false;
            }
            else {
                option = jQuery('#options-' + shortcode + ' #option_' + option_id[i]).val();
            }

            add_code += option_id[i] + '="' + option + '" ';
        }
        
        //image upload loop for extra attrs
        var image_upload ='';
        jQuery('#options-'+shortcode+' [data-name=image-upload] img.pro-screenshot').each(function(){
            image_upload += ' ' + jQuery(this).attr('id')+'="' + jQuery(this).attr('src') + '"';	
        });
        add_code += image_upload;		
        //color loop for extra attrs
        jQuery('#options-'+shortcode+' input.popup-colorpicker').each(function(){
            add_code += ' background_color="'+ jQuery(this).val()+'"'; 
        });
        var content_html = jQuery('#options-' + shortcode + ' #shortcode-option-content').val();
        if(content_html == undefined) content_html = "";
        add_code += ']' + content_html + '[/' + shortcode + ']';
        var ed = tinyMCE.activeEditor;
        var content = ed.selection.getContent();
        ed.selection.setContent(add_code);
        tb_remove();
    });
    
    jQuery('input.popup-colorpicker').wpColorPicker({
        palettes: ['#27CCC0', '#78cd6e', '#29c1e7', '#ae81f9', '#f78224', '#FF4629']
    });
    
    //upload
    initUpload();
    function initUpload() {
        jQuery(".pro-upload").on('click', function(event) {

            var activeFileUploadContext = jQuery(this).parent();
            var relid = jQuery(this).attr('rel-id');

            event.preventDefault();

            // if its not null, its broking custom_file_frame's onselect "activeFileUploadContext"
            custom_file_frame = null;

            // Create the media frame.
            custom_file_frame = wp.media.frames.customHeader = wp.media({
                // Set the title of the modal.
                title: jQuery(this).data("choose"),
                // Tell the modal to show only images. Ignore if want ALL
                library: {
                    type: 'image'
                },
                // Customize the submit button.
                button: {
                    // Set the text of the button.
                    text: jQuery(this).data("update")
                }
            });

            custom_file_frame.on("select", function() {
                // Grab the selected attachment.
                var attachment = custom_file_frame.state().get("selection").first();

                // Update value of the targetfield input with the attachment url.
                jQuery('.pro-screenshot', activeFileUploadContext).attr('src', attachment.attributes.url);
                jQuery('#' + relid).val(attachment.attributes.url).trigger('change');

                jQuery('.pro-upload', activeFileUploadContext).hide();
                jQuery('.pro-screenshot', activeFileUploadContext).show();
                jQuery('.pro-upload-remove', activeFileUploadContext).show();
            });

            custom_file_frame.open();
        });

        jQuery(".pro-upload-remove").on('click', function(event) {
            var activeFileUploadContext = jQuery(this).parent();
            var relid = jQuery(this).attr('rel-id');

            event.preventDefault();

            jQuery('#' + relid).val('');
            jQuery(this).prev().fadeIn('slow');
            jQuery('.pro-screenshot', activeFileUploadContext).fadeOut('slow');
            jQuery(this).fadeOut('slow');
        });
    }
//and upload
});