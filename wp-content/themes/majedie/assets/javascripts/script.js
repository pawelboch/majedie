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

/* plugin select */
(function($){
	if($(".wpg-plugin-select").length>0)
	{
		var $wpgPluginSelect=$(".wpg-plugin-select"), 
			speedAnimate=100; // ms

		var closeDefaultoptions=function(ti){
			for(var i=0, iLengt=$('.wpg-plugin-select-simulate-options').length; i<iLengt; i++)
			{
				if($('.wpg-plugin-select-simulate-options').eq(i).css("display")!="none")
				{
					if(i!=ti) $('.wpg-plugin-select-simulate-options').eq(i).slideToggle(speedAnimate);
				}
			}
		};

		for(var t=0, tLenght=$wpgPluginSelect.length; t<tLenght; t++)
		{
			if($wpgPluginSelect.eq(t).find('option').length>0)
			{
				$wpgPluginSelect.eq(t).hide().after('<div class="wpg-plugin-select-simulate"><div class="wpg-plugin-select-simulate-selection"></div><div class="wpg-plugin-select-simulate-options"></div></div>');
				$(".wpg-plugin-select-simulate").eq(t).find(".wpg-plugin-select-simulate-options").hide();
				var wps;
				if($wpgPluginSelect.eq(t).find('option[selected="selected"]').length>0)
				{
					wps=$wpgPluginSelect.eq(t).find('option[selected="selected"]').text();
				}
				else
				{
					wps=$wpgPluginSelect.eq(t).find('option').eq(0).text();
				}
				$(".wpg-plugin-select-simulate").eq(t).find(".wpg-plugin-select-simulate-selection").html("<strong>" + wps + "</strong>").click(function() { 
					var thisIndex=$(".wpg-plugin-select-simulate-selection").parent().index($(this).parent());
					closeDefaultoptions(thisIndex);
					$(this).next().slideToggle(speedAnimate); 
				});

				for(var i=0, iLength=$wpgPluginSelect.eq(t).find("option").length; i<iLength; i++)
				{
					$(".wpg-plugin-select-simulate-options").eq(t).append('<div class="wpg-plugin-select-simulate-option">' + $wpgPluginSelect.eq(t).find("option").eq(i).text() + '</div>');
				}
			}
		}
		$("body").on("click",".wpg-plugin-select-simulate-option",function(){
			$(this).parent().find(".wpg-plugin-select-simulate-option").removeClass("wpg-plugin-select-simulate-option-active");
			$(this).addClass("wpg-plugin-select-simulate-option-active");
			$(this).parent().prev().find("strong").html($(this).text());
			var indexOption=$(this).parent().find(".wpg-plugin-select-simulate-option").index($(this));
			$(this).parent().parent().prev().find('option').removeAttr("selected").eq(indexOption).attr("selected","selected");
			$(this).parent().slideToggle(speedAnimate);
		});
		jQuery(document).on("click","body", function(e) {
			if (jQuery(e.target).is('.wpg-plugin-select-simulate *')) return; 
			else closeDefaultoptions();   
		});
	}
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

