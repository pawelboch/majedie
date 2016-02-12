'use strict';
(function($){
	var $wpgHamburegr=$(".wpg-hamburger"),
		$wpgNavGroup=$(".wpg-nav-group");
	$wpgHamburegr.click(function(){
		$wpgNavGroup.toggleClass("wpg-active-menu-dropdown");
	});
})(jQuery);