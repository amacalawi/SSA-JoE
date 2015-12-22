var _fromBlanket = blanket_localized_script_vars;
jQuery(document).ready(function ($) {
    /*
    | -----------------------------------------
    | # Waypoint
    | -----------------------------------------
    */
    $('section[class*="phase"] img, section[class*="phase"] h1, section[class*="phase"] p, section.stars h1').addClass('opacitate');

    $('section .title').waypoint(function(direction) {

        $(this.element).parents('section').next('section').find('img').removeClass("opacitate").addClass('animated zoomIn');
        $(this.element).parents('section').next('section').find('h1:first-child').removeClass("opacitate").addClass('animated fadeIn');
        $(this.element).parents('section').next('section').find('h1:nth-child(2)').delay(200).queue(function(next){
            $(this).removeClass("opacitate").addClass('animated fadeIn');
            next();
        });
        $(this.element).parents('section').next('section').find('p').delay(400).queue(function(next){
            $(this).removeClass("opacitate").addClass('animated fadeIn')
            next();
        });

    }, {
        triggerOnce: true,
        offset: '30%'
    });

    $('.content section:nth-child(2)').waypoint(function(){
        $('header.navbar-fixed-top').toggleClass('navbar-white');
    }, {
        triggerOnce: false,
        offset: '50%'
    });


    /*
    | -------------------------------
    | # Selectpicker
    | -------------------------------
    */
    $('.selectpicker').selectpicker();

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


    /*
    | --------------
    | # Contact Page
    | --------------
    */
    $(document).on('click', '.btn-show-toggle', function () {
        var _target = $(this).data('target'),
            _shrink = $(this).data('shrink'),
            _text = $(this).text();

        if( _text == 'View Map')
        {
            $(_target).fadeOut();
            $(this).text('Hide Map');

            $(_shrink).css({width:0});
        } else {
            $(_target).fadeIn();
            $(this).text('View Map');
            $(_shrink).css({width:'50%'});
        }
    })
});

function initializeMap() {
    var coords = _fromBlanket.map;
    var mapCanvas = document.getElementById('map');
    var mapOptions = {
      center: new google.maps.LatLng(coords.long, coords.lat),
      zoom: 13,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(coords.long, coords.lat),
        map: map,
        title: _fromBlanket.title,
        icon: _fromBlanket.blanketURL + '/assets/logos/marker.png',
    });
}
google.maps.event.addDomListener(window, 'load', initializeMap);