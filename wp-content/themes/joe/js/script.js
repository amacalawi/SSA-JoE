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

    $(".photogal").owlCarousel({
        navigation:true,
        paginationSpeed : 1000,
        goToFirstSpeed : 2000,
        // singleItem : true,
        items: 3,
        autoHeightClass: 'owl-height',
        responsive: true,
        transitionStyle:"fade",
        navigationText: [
            "<i class='fa fa-chevron-left'></i>&nbsp; Prev",
            "Next &nbsp;<i class='fa fa-chevron-right'></i>"
        ]
    });
    $("#testi-slider").owlCarousel({
        navigation:true,
        paginationSpeed : 1000,
        goToFirstSpeed : 2000,
        singleItem : true,
        autoHeightClass: 'owl-height',
        responsive: true
    });

    $("#gallery-slider").lightGallery({
        thumbnail: true,
        selector:'.image-selector',
        mode: 'lg-zoom-out',
        download: false,
        mousewheel: true,
    });

    $('section[class*="phase"], section.stars, section.journey, section.student, section.photo-gallery').css('opacity', 0);

    $('section h1').waypoint(function(direction) {
        // console.log(this);
        $(this.element).parents('section').next('section').addClass('animated fadeInUp');
    }, {
        triggerOnce: true,
        offset: '30%'
    });
});

function initialize() {
var coords = _fromBlanket.map;
var mapCanvas = document.getElementById('map');
var mapOptions = {
  center: new google.maps.LatLng(coords.long, coords.lat),
  zoom: 8,
  mapTypeId: google.maps.MapTypeId.ROADMAP
}
var map = new google.maps.Map(mapCanvas, mapOptions)
}
google.maps.event.addDomListener(window, 'load', initialize);