jQuery('html, body').ready(function() {
var options = {
thumbs:false,
nextButton: false,
prevButton: false,
pagination: true,
animateStartingFrameIn: true,
autoPlay: true,
autoPlayDelay: 3000,
preloader: true,
preloadTheseFrames: [1],
preloadTheseImages: [
"<?php echo get_template_directory_uri(); ?>/ images/smalldot1.png"
]
};
var mySequence = jQuery("#sequence").sequence(options).data("sequence");
});

jQuery(document).ready(function() {
	//Default Action
	jQuery(".tab_contentblog").hide(); //Hide all content
	jQuery("ul.tabsblog li:first").addClass("active").show(); //Activate first tab
	jQuery(".tab_contentblog:first").show(); //Show first tab content
	
	//On Click Event
	jQuery("ul.tabsblog li").click(function() {
		jQuery("ul.tabsblog li").removeClass("active"); //Remove any "active" class
		jQuery(this).addClass("active"); //Add "active" class to selected tab
		jQuery(".tab_contentblog").hide(); //Hide all tab content
		var activeTab = jQuery(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		jQuery(activeTab).fadeIn(); //Fade in the active content
		return false;
	});

});

jQuery('html, body').ready(function(){
jQuery('#bxslider1').bxSlider();
});

jQuery('html, body').ready(function(){
jQuery('#mycollapsible').collapse("hide");
});
function scrollToTop() {
jQuery('html, body').animate({scrollTop:0}, 'slow');
}

jQuery('html, body').ready(function() {
jQuery("a[class^='prettyPhoto']").prettyPhoto();
  });

jQuery('.collapse').live('show', function(){
    jQuery(this).parent().find('.accordion-heading').addClass('open'); //add active state to button on open
});

jQuery('.collapse').live('hide', function(){
    jQuery(this).parent().find('.accordion-heading').removeClass('open'); //remove active state to button on close
});

