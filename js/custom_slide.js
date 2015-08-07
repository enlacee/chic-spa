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
"images/smalldot1.png"
]
};
var mySequence = jQuery("#sequence").sequence(options).data("sequence");
});

jQuery('html, body').ready(function(){
jQuery('#mycollapsible').collapse("hide");
});


function scrollToTop() {
jQuery('html, body').animate({scrollTop:0}, 'slow');
}

jQuery('.collapse').live('show', function(){
    jQuery(this).parent().find('.accordion-heading').addClass('open'); //add active state to button on open
});

jQuery('.collapse').live('hide', function(){
    jQuery(this).parent().find('.accordion-heading').removeClass('open'); //remove active state to button on close
});

