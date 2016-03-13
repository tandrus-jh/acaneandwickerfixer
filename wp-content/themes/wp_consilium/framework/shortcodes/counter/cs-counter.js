jQuery(function($){
	"use strict";
	var options = {
		useEasing : false,
		useGrouping : false,
		separator : ',',
		decimal : '.'
	}
	$(".counter").each(function(){
		"use strict";
		var digit = $(this).attr("data-digit");
		var random = 0;
		if($(this).attr("data-type") == 'random'){
			var random = Math.floor(Math.random() * digit * 2);
		}
		$(this).waypoint(function() {
		new countUp($(this).attr("id"), random, digit, 0, 0, options).start();
		},{offset: '95%',triggerOnce: true});
	});
});
