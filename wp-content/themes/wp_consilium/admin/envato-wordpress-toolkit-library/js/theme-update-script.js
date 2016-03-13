jQuery(document).ready(function($) {
	var optionsLink = theme_update.update_url;
	var	envatoDetails = theme_update.envato_details;
	var notifier = new UpdateNotifier(optionsLink, envatoDetails);
	notifier.init();
});