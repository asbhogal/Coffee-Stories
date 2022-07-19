// scroll-to-top button show and hide
jQuery(document).ready(function(){
    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 100) {
            jQuery('#scroll-to-top-btn').fadeIn(1000);
        } else {
            jQuery('#scroll-to-top-btn').fadeOut(1000);
    }
});
// scroll-to-top animate
jQuery('#scroll-to-top-btn').click(function(){
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});