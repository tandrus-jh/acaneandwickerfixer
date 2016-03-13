jQuery(document).ready(function ($) {
	if ($('.set_custom_images').length > 0) {
		if (typeof wp !== 'undefined' && wp.media && wp.media.editor) {
			$('.wrap').on('click', '.set_custom_images', function (e) {
				e.preventDefault();
				var input_text = $('#' + (this.id).substring(7));
				wp.media.editor.send.attachment = function (props, attachment) {
					input_text.val(attachment.url);
				};
				wp.media.editor.open(input_text);
				return false;
			});
		}
	}
	jQuery('.menu_icon_wrap').each(function(){
		var _this = $(this);
		var $item_id = _this.attr('data-item_id');
		jQuery("li",_this).click(function() {
			jQuery(this).attr("class","selected").siblings().removeAttr("class");
			var icon = jQuery(this).attr("data-icon");
			jQuery("#edit-menu-item-menu_icon-"+ $item_id ).val(icon);
			jQuery(".icon-preview-"+ $item_id).html("<i class=\'icon fa fa-"+icon+"\'></i>");
		});
	})
});
