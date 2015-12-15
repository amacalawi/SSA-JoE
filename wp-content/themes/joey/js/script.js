var _fromBlanket = blanket_localized_script_vars;

jQuery(document).ready(function ($) {
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "fade",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
})