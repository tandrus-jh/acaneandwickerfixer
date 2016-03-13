jQuery(document).ready(function($){
	"use strict";
	$('#post-formats-select input').change(checkFormat);
    $('.wp-post-format-ui .post-format-options > a').click(checkFormat);
    function checkFormat(){
        var format = $('#post-formats-select input:checked').attr('value');
        if(typeof format != 'undefined'){
            if(format == 'gallery'){
                $('#poststuff div[id$=slide][id^=post]').stop(true,true).fadeIn(500);
            }
            else {
                $('#poststuff div[id$=slide][id^=post]').stop(true,true).fadeOut(500);
            }

            $('#post-body div[id^=cs-metabox-post-]').hide();
            $('#post-body #cs-metabox-post-'+format+'').stop(true,true).fadeIn(500);

			$('#cs-metabox-post-user-team').css('display', 'block');
        }
        else {
            var format = $(this).attr('data-wp-format');

            if( typeof format == 'undefined' && $('a[data-wp-format="gallery"]').hasClass('active')){
                format = $('a[data-wp-format="gallery"]').attr('data-wp-format');
            }

            if(typeof format != 'undefined'){
                if(format == 'gallery'){
                    $('#cs-metabox-post-gallery').stop(true,true).fadeIn(500);

                }
                else {
                    $('#cs-metabox-post-gallery').stop(true,true).fadeOut(500);
                }

				$('#cs-metabox-post-user-team').css('display', 'block');
            }
        }
    }
    $(window).load(function(){
        checkFormat();
    });
});