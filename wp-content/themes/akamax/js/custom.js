$(document).ready(function() {
    // Flex slider

    $(".flexslider").flexslider({
        animation: "slide",
        slideshow: true,
        pauseOnHover: true,
        dots: false,
        slideshowSpeed: 10000,
        animationSpeed: 600,
        controlsContainer: ".flexslider",
    });


});

jQuery(window).on('load', function() {

    jQuery('#preloader__status').fadeOut();

    jQuery('#preloader').delay(350).fadeOut('slow');

    jQuery('body').delay(3000).css({ 'overflow': 'visible' });

})