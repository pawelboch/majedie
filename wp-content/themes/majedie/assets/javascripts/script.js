pixelperfect.init( { 
    image: "http://majedie-dev.kurtosysdev.com/wp-content/themes/majedie/assets/images/www.png",
    opacity: 1,
} );

'use strict';
(function($){
	var $wpgHamburegr=$(".wpg-hamburger"),
		$wpgNavGroup=$(".wpg-nav-group");
	$wpgHamburegr.click(function(){
		$wpgNavGroup.toggleClass("wpg-active-menu-dropdown");
	});
})(jQuery);