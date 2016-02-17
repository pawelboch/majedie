'use strict';

/* pixel perefect developer */
pixelperfect.init( { 
    image: "http://majedie-dev.kurtosysdev.com/wp-content/themes/majedie/assets/images/www.png",
    opacity: 1,
} );

/* menu mobile */
(function($){
	var $wpgHamburegr=$(".wpg-hamburger"),
		$wpgNavGroup=$(".wpg-nav-group");
	$wpgHamburegr.click(function(){
		$wpgNavGroup.toggleClass("wpg-active-menu-dropdown");
	});
})(jQuery);

/* max height for items horizonatl */
var wpgMaxHeightItem=function($) {
	var maxi = 0, wpgWrapItemsMaxHeight=$(".wpg-wrap-items-max-height");
	for(var i=0, iLength=wpgWrapItemsMaxHeight.length; i<iLength; i++)
	{
		wpgWrapItemsMaxHeight.eq(i).find(".wpg-item-max-height").css("height","auto").each(function() {
		    maxi = Math.max($(this).height(), maxi);
		}).height(maxi);		
	}

}
wpgMaxHeightItem(jQuery);



/* main events */
jQuery(window).resize(function(){ 
	wpgMaxHeightItem(jQuery); 
});
jQuery(window).load(function(){
	wpgMaxHeightItem(jQuery);
});

