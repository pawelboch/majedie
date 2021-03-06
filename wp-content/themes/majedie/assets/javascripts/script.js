'use strict';


/* pixel perefect developer 
 pixelperfect.init( { 
     image: "http://majedie-dev.kurtosysdev.com/wp-content/themes/majedie/assets/images/www.png",
     opacity: 1,
 } );
/* end pixel perefect developer */


/* menu mobile */
(function($){
	var $wpgHamburegr=$(".wpg-hamburger"),
		$wpgNavGroup=$(".wpg-nav-group");
	$wpgHamburegr.click(function(){
		$wpgNavGroup.toggleClass("wpg-active-menu-dropdown");
	});

	$('.menu-item-has-children > a').append('<i class="fa fa-angle-down arrow"></i>');
	$('.menu-item-has-children > a > .arrow').click(function(e) {
		$(this).parent().next().toggleClass('opened');
		e.preventDefault();
	});
	$('.wpg-main-menu > .menu-item-has-children > a > .arrow').click(function(e) {
		if($(".wpg-hamburger").css("display")!="block")
		{
			$('.menu-item-has-children .arrow').not(this).parent().parent().find('.sub-menu').removeClass('opened');
			e.preventDefault();
		}
	});
	$(document).on("click","body", function(e) {
		if (jQuery(e.target).is('.wpg-main-menu *')) return; 
		else 
		{
			$('.wpg-main-menu .sub-menu').removeClass('opened');
		} 
	});
	$(window).resize(function(){
		if($(".wpg-hamburger").css("display")!="block") $('.wpg-main-menu').find('.sub-menu').removeClass('opened');
	});
})(jQuery);
/* end menu mobile */

/* menu mobile fund */
(function($){
	$('.tablesorter' ).tablesorter();
})(jQuery);
/* end menu mobile fund */

/* menu mobile fund */
(function($){
	var bw=$(".wpg-fund-menu-inset .wpg-mobile-menu");
	bw.click(function(e){
		$(this).next().toggleClass("wpg-mobile-menu-active");
		e.preventDefault();
	});
})(jQuery);
/* end menu mobile fund */




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
					if(i!=ti){
						$('.wpg-plugin-select-simulate-selection').eq(i).toggleClass("wpg-plugin-select-simulate-selection-active");
						$('.wpg-plugin-select-simulate-options').eq(i).slideToggle(speedAnimate);
					}
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
					$(this).toggleClass("wpg-plugin-select-simulate-selection-active");
					$(this).next().slideToggle(speedAnimate); 
				});

				for(var i=0, iLength=$wpgPluginSelect.eq(t).find("option").length; i<iLength; i++)
				{
					var defaultActiveSelected=(($wpgPluginSelect.eq(t).find('option').eq(i).attr("selected")=="selected")?' wpg-plugin-select-simulate-option-active':'');
					$(".wpg-plugin-select-simulate-options").eq(t).append('<div data-value="' + $wpgPluginSelect.eq(t).find("option").eq(i).val() + '" class="wpg-plugin-select-simulate-option' + defaultActiveSelected + '">' + $wpgPluginSelect.eq(t).find("option").eq(i).text() + '</div>');
				}
			}
		}
		$("body").on("click",".wpg-plugin-select-simulate-option",function(){
			$(this).parent().find(".wpg-plugin-select-simulate-option").removeClass("wpg-plugin-select-simulate-option-active");
			$(this).addClass("wpg-plugin-select-simulate-option-active");
			$(this).parent().prev().find("strong").html($(this).text());
			var indexOption=$(this).parent().find(".wpg-plugin-select-simulate-option").index($(this));
			$(this).parent().parent().prev().find('option').removeAttr("selected").eq(indexOption).attr("selected","selected");
			$(this).parent().prev().toggleClass("wpg-plugin-select-simulate-selection-active");
			$(this).parent().slideToggle(speedAnimate);
				
			var dataValue=String($(this).data("value"));
			if (dataValue.indexOf("http://") == 0 || dataValue.indexOf("https://") == 0 || dataValue.indexOf("?") == 0)
			{
				document.location.href=dataValue;
			}

		});
		jQuery(document).on("click","body", function(e) {
			if (jQuery(e.target).is('.wpg-plugin-select-simulate *')) return; 
			else closeDefaultoptions();   
		});
	}
})(jQuery);
/* end plugin select */


/* max height for items horizonatl */
var wpgMaxHeightItem=function($) {
	if($("[data-wpg-equal-height-wrap]").length>0)
	{
		var wpgWrapItemsMaxHeight=$("[data-wpg-equal-height-wrap]");
		$("[data-wpg-equal-height-item]").css({"height":"auto","min-height":10});
		for(var i=0, iLength=wpgWrapItemsMaxHeight.length; i<iLength; i++)
		{
			if(wpgWrapItemsMaxHeight.eq(i).data("wpg-equal-height-wrap")=="height" || wpgWrapItemsMaxHeight.eq(i).data("wpg-equal-height-wrap")=="min-height")
			{
				//console.log("-------------------------------");
				var heightArray=[]; 
				wpgWrapItemsMaxHeight.eq(i).find("[data-wpg-equal-height-item]").removeProp("height").removeProp("min-height");
				for(var k=0, kLength=wpgWrapItemsMaxHeight.eq(i).find("[data-wpg-equal-height-item]").length; k<kLength; k++)
				{
					var heightItem=parseInt(wpgWrapItemsMaxHeight.eq(i).find("[data-wpg-equal-height-item]").eq(k).css("height"));
					//console.log(heightItem);
					heightArray.push(heightItem);
				}
				wpgWrapItemsMaxHeight.eq(i).find("[data-wpg-equal-height-item]").css(wpgWrapItemsMaxHeight.eq(i).data("wpg-equal-height-wrap"),Math.max.apply(null, heightArray));
			}
			else
			{
				console.log("Bad parametr...");
			}
		}	
	}
}
wpgMaxHeightItem(jQuery);
jQuery(window).resize(function(){ wpgMaxHeightItem(jQuery); });
jQuery(window).load(function(){ wpgMaxHeightItem(jQuery); });
/* end max height for items horizonatl */


/* block height 100% window */
var wpgHeight100pWindow=function($) {
	if($("[data-wpg-height-100p-window]").length>0)
	{
		var dwh100pw=$("[data-wpg-height-100p-window]"),
			heightHeader=parseInt($(".wpg-main-header").css("height")),
			heightFooter=parseInt($(".wpg-main-footer").css("height")),
			heightInset=$(window).height() - heightHeader - heightFooter
		
		dwh100pw.css("height",heightInset);
	}
}
wpgHeight100pWindow(jQuery);
jQuery(window).resize(function(){ wpgHeight100pWindow(jQuery); });
jQuery(window).load(function(){ wpgHeight100pWindow(jQuery); });
/* end block height 100% window */


/* module timeline */
(function($){
	if($(".module-full-width-timeline").length>0)
	{
		var $wpgTimeline=$(".wpg-timeline");
		$wpgTimeline.after("<div class='wpg-timeline-design'><div class='wpg-timeline-design-top'></div><hr><div class='wpg-timeline-design-bottom'></div></div>");
		var $top=$(".wpg-timeline-design-top"),
			$bottom=$(".wpg-timeline-design-bottom");
		for(var i=0, iLength=$wpgTimeline.find("> li").length; i<iLength; i++)
		{
			if(i<9)
			{
				if(i%2) {
					$bottom.append("<div>" + $wpgTimeline.find("> li").eq(i).html() + "</div>");
				}
				else
				{
					$top.append("<div>" + $wpgTimeline.find("> li").eq(i).html() + "</div>");
				}
			}
		}
	}
})(jQuery);
/* end module timeline */


/* contact */
(function($){
	$('.module-full-width-contact-form-box-title-text .wpcf7-radio input').after('<div class="custom-radio"></div>');
})(jQuery);
/* end contact */


/* left-to-right attachment size */
(function($){
	function articleLeftToRightImage() {
		var articleLeftSide = $('.module-full-width-post-content .left-side').outerWidth();
		var articleRightSide = $('.module-full-width-post-content .right-side').outerWidth();
		var articleWidth = $('.wpg-main-content-article').outerWidth();
		var articleLeftToRightPhoto = $('.module-full-width-post-content .size-left-to-right');
		var leftPadding = (parseInt($('.module-full-width-post-content .right-side').css('padding-left')) + parseInt($('.wpg-main-content-article').css('padding-left')));

		articleLeftToRightPhoto.removeAttr('height');
		articleLeftToRightPhoto.attr('width', articleWidth);
		
		articleLeftToRightPhoto.css('margin-left', ((articleLeftSide + leftPadding) * -1));

		$('.module-full-width-post-content img').removeAttr('height');
	}

	$(document).ready(articleLeftToRightImage);
	$(window).resize(articleLeftToRightImage);

})(jQuery);
/* end left-to-right attachment size */


/* toggle class for news module menu */
function arrowMenuParent() {
	$('.menu-item-has-children').append('<i class="fa fa-angle-down"></i>');
	$('.menu-item-has-children').click(function() {
		$(this).find('.sub-menu').toggleClass('opened');
	});
}

(function($){
	var moduleClass = $('.module-full-width-2-posts-with-thumnails-2-posts');

	$('.wpg-filter-topic').click(function(e) { //button click class name is myDiv
	 e.stopPropagation();
	})

	$(function(){
		moduleClass.find('.wpg-filter-topic').click(function() {
			moduleClass.find('.wpg-filter-topic-menu').toggleClass('opened');
		});
	});
	$(document).click(function(){  
		$('.wpg-filter-topic-menu').removeClass('opened'); //hide the button
	});

})(jQuery);
/* end toggle class for news module menu */


/* Team module toggle */

jQuery(document).ready(function(){
	jQuery('.meet-the-team .team-header').removeClass('active');
	var first = jQuery('.meet-the-team .team-header').first();
	first.addClass('active');
	first.next().show();

	jQuery('.meet-the-team .team-header').click(function(){
		jQuery('.meet-the-team .team-header').removeClass('active');
		jQuery(this).addClass('active');
		jQuery('.meet-the-team .team-body').hide();
		jQuery(this).next().show();
	});
});

/* Team module toggle end*/


/* jQuery Ajax posts */
(function($){
	function ajaxLoadPosts() {

	}

	$(document).ready(ajaxLoadPosts);

})(jQuery);
/* end jQuery Ajax posts */



/* .module-full-width-many-tabs-with-photo-title-subtitle-text */
var debounce=function(fn, delay) {
  var timer = null;
  return function () {
    var context = this, args = arguments;
    clearTimeout(timer);
    timer = setTimeout(function () {
      fn.apply(context, args);
    }, delay);
  };
}
if(jQuery(".module-full-width-many-tabs-with-photo-title-subtitle-text").length>0)
{
	var scrollControler=true;
}
jQuery(window).scroll(function(){
	if(jQuery(".module-full-width-many-tabs-with-photo-title-subtitle-text").length>0)
	{
		scrollControler=false;
	}
});
jQuery(window).on('scroll', debounce(function (event) {
	if(jQuery(".module-full-width-many-tabs-with-photo-title-subtitle-text").length>0)
	{
		scrollControler=true;
	}
}, 1000));

var resizeFullwsa=function($){
	if($(".module-full-width-many-tabs-with-photo-title-subtitle-text").length>0 && scrollControler)
	{
		var zblSep='<div class="col-xs-12 wpg-items-person-show wpg-clear-both"></div>';
		$(".wpg-item-person").removeClass("cycle-pager-active");
		$(".wpg-items-person-show").remove();
		if($(".module-full-width-many-tabs-with-photo-title-subtitle-text").css("overflow")=="hidden")
		{
			for(var i=1, iLength=($(".wpg-item-person").length+1); i<iLength; i++) {
				//if((i%3) == 0 ) $(".wpg-item-person").eq((i-1)).after(zblSep);
				if((i%2)==0) $(".wpg-item-person").eq((i-1)).after(zblSep);
			}
		}
		else
		{
			for(var i=1, iLength=($(".wpg-item-person").length+1); i<iLength; i++) {
				if((i%3) == 0 ) $(".wpg-item-person").eq((i-1)).after(zblSep);
				//if((i%2)==0) $(".wpg-item-person").eq((i-1)).after(zblSep);
			}
		}
		$(".wpg-items-persons").append(zblSep);
	}
};
jQuery(window).resize(function(){
	if(jQuery(".module-full-width-many-tabs-with-photo-title-subtitle-text").length>0)
	{
		resizeFullwsa(jQuery);
	}
});
(function($){
	if(jQuery(".module-full-width-many-tabs-with-photo-title-subtitle-text").length>0)
	{
		var timeoutAnimateScroll=setTimeout(function(){},300);
		if($(".module-full-width-many-tabs-with-photo-title-subtitle-text").length>0)
		{
			resizeFullwsa($);

			
			$(".wpg-items-person-show").hide().html("");
			$(".wpg-item-person").click(function(){
				clearTimeout(timeoutAnimateScroll);
				$(".wpg-item-person").removeClass("cycle-pager-active");
				$(this).addClass("cycle-pager-active");

				$(".wpg-items-person-show").removeClass("wpg-active-dropdown");
				$(this).nextAll(".wpg-items-person-show").first().addClass("wpg-active-dropdown");
				for(var i=0, iLength=$(".wpg-items-person-show").length; i<iLength; i++)
				{
					if(!($(".wpg-items-person-show").eq(i).hasClass("wpg-active-dropdown")))
					{
						$(".wpg-items-person-show").eq(i).slideUp(200).html("");
					}

				}
				var indexItemPos=$(".wpg-item-person").index($(this));
				$(this).nextAll(".wpg-items-person-show").first().html( '<div>' + $(this).find(".wpg-item-person-description").html() + "</div>" ).slideDown(300,function(){});

				timeoutAnimateScroll=setTimeout(function(){
					if($(".module-full-width-many-tabs-with-photo-title-subtitle-text").css("overflow")=="hidden") 
					{	
						$('html, body').animate({scrollTop:($('.wpg-item-person').eq(indexItemPos).position().top+$('.wpg-item-person').eq(indexItemPos).find(".pager-mfw3twptst-item").height()+50)}, 200);
					}
					else
					{
						$('html, body').animate({scrollTop:($('.wpg-item-person').eq(indexItemPos).nextAll(".wpg-items-person-show").first().position().top-50)}, 200);
					}
				},400);
			});
			
		}
	}
})(jQuery);

/* end .module-full-width-many-tabs-with-photo-title-subtitle-text */


/* .module-full-width-post-content */
(function($){
	if($(".module-full-width-post-content").length>0)
	{
		$(".module-full-width-post-content table").wrap('<div class="wpg-table-wrap"></div>');
	}
})(jQuery);
/* end .module-full-width-post-content */


/* Show/hide social links */

(function($) {
	$('.wpg-sidebar .social-icons').hide();

	$('.wpg-sidebar .wpg-share').click(function() {
		$('.wpg-sidebar .social-icons').toggle('fast');
	});
})(jQuery);

/* end Show/hide social links */
/* end .module-full-width-post-content */


/* toggle class for top menu in header */

(function($) {
	$('.wpg-main-header .wpg-top-menu li button').click(function() {
		$('.wpg-main-header .wpg-top-menu li button').not(this).next('.dropdown').removeClass('opened');
		$(this).next('.dropdown').toggleClass('opened');
	});

	$('body').click(function(e) {
		if(!$(e.target).is('.wpg-main-header .wpg-top-menu *')) {
			$('.wpg-main-header .wpg-top-menu .dropdown').removeClass('opened');
		}
	});
})(jQuery);


/* end toggle class for top menu in header */


/* Modal cookie behavior */

(function($) {
	function investorModalBehavior() {
		var pageHeight = $(document).height();
		$('.module-investor-modal').css('height', pageHeight);
		if(Cookies.get('investor-type') == null) {
			$('.module-investor-modal').delay(500).fadeIn('slow');
		}
		$('.module-investor-modal .wpg-investor-modal').css("top",jQuery(window).scrollTop()+100)
		$('.wpg-popup-investor-modal-close').click(function() {
			$('.module-investor-modal').fadeOut('slow');
		});

		$('body').click(function(e) {
			$('.module-investor-modal').fadeOut('slow');
		});

		$('.module-investor-modal .wpg-investor-modal').click(function(e) {
			e.stopPropagation();
		});

		$('.wpg-investor-modal-lists ul li span').click(function(){
			$('.wpg-investor-modal-lists ul li span').not(this).removeClass('active');
			$(this).addClass('active');
			if($('.wpg-investor-modal-lists ul li span').hasClass('active')) {
				$('.wpg-disclaimer').slideDown('slow');
				var disclaimer = $(this).attr('data-code');
				$('.wpg-disclaimer .disclaimer').not(this).fadeOut('medium');
				$('.wpg-disclaimer').find('.' + disclaimer).fadeIn('medium');
			}
			if($('#wpg-checkbox-investor-modal').is(':checked') && $('.wpg-investor-modal-lists ul li span').hasClass('active')) {
				$('.wpg-investor-modal .wpg-button-accept').removeClass('disabled');
			} else {
				$('.wpg-investor-modal .wpg-button-accept').addClass('disabled');
			}
		});

		if($('#wpg-checkbox-investor-modal').is(':checked')) {
			$('#wpg-checkbox-investor-modal').prop('checked', false);
		};

		$('.wpg-inputs label').click(function() {
			if(!$('#wpg-checkbox-investor-modal').is(':checked') && $('.wpg-investor-modal-lists ul li span').hasClass('active')) {
				$('.wpg-investor-modal .wpg-button-accept').removeClass('disabled');
			} else {
				$('.wpg-investor-modal .wpg-button-accept').addClass('disabled');
			}
		});
	}

	function investorModalFunctionality() {
		$('.investor-type-form').submit(function() {
			var investorType = $('.wpg-investor-modal .wpg-investor-modal-lists ul li span.active').attr('data-code');
			if(Cookies.get('investor-type') != '') {
				Cookies.set('investor-type', investorType);
			}	else {
				Cookies.remove('investor-type');
				Cookies.set('investor-type', investorType);
			}
		});
	}

	function investorTopMenuFunctionality() {
		$('.wpg-top-menu .investor-type ul li a').click(function() {
			var investorType = $(this).attr('data-code');
			if(Cookies.get('investor-type') != '') {
				Cookies.set('investor-type', investorType);
			}	else {
				Cookies.remove('investor-type');
				Cookies.set('investor-type', investorType);
			}
		});
		var cookie = Cookies.get('investor-type');
		$('.wpg-top-menu .investor-type ul li a[data-code=' + cookie + ']').addClass('active');
	}

	$(document).ready(investorModalBehavior);
	$(document).ready(investorModalFunctionality);
	$(document).ready(investorTopMenuFunctionality);

})(jQuery);

/* end Modal cookie behavior */


