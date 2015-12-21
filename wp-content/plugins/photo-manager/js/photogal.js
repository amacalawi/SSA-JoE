jQuery(document).ready(function ($) {

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
});