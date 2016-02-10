var _fromBlanket = blanket_localized_script_vars;
jQuery(document).ready(function ($) {
    /*
    | -----------------------------------------
    | # Waypoint
    | -----------------------------------------
    */
    $('body:not(#programmes) section[class*="phase"] img, body:not(#programmes) section[class*="phase"] .hides, body:not(#programmes) section[class*="phase"] h1, body:not(#programmes) section[class*="phase"] p').addClass('opacitate');

    $('body:not(#programmes) section .title').waypoint(function(direction) {

        $(this.element).parents('section').next('section').find('img').removeClass("opacitate").addClass('animated zoomIn');
        $(this.element).parents('section').next('section').find('.hides').removeClass("opacitate").addClass('animated zoomIn');
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
    | ----------------
    | # Datetimepicker
    | ----------------
    */
    $('.datepicker').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('.timepicker').datetimepicker({
        format: 'HH:mm'
    });

    $('[name=country]').on('change', function () {
        var Singapore = ['Paya Lebar'];
        var Cairo = ["Sixth October City", "Maadi", "Heliopolis", "Mohandseen", "Tagamoa"];

        if( $(this).val() == 'Singapore, Singapore' )
        {
            $('[name=centre]').html('');
            for (var i = 0; i < Singapore.length; i++) {
                $('[name=centre]').append("<option value='"+Singapore[i]+"'>"+Singapore[i]+"</option>");
            };
        }
        else
        {
            $('[name=centre]').html('');
            for (var i = 0; i < Cairo.length; i++) {
                $('[name=centre]').append("<option value='"+Cairo[i]+"'>"+Cairo[i]+"</option>");
            };
        }

        $('[name=centre]').selectpicker('refresh');

    });

    /*
    | -------------------------------
    | # Selectpicker
    | -------------------------------
    */
    $('.selectpicker').selectpicker({
        width: '100%'
    });

    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "fade",
            slideshowSpeed: '2000',
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });

    /*
    | -------------------------------
    | # Carousel
    | -------------------------------
    */
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
    });

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
if( null != document.getElementById('map') ) {
    google.maps.event.addDomListener(window, 'load', initializeMap );
}