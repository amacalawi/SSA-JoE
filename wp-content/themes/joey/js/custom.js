$(function(){

  $("#testi-slider").owlCarousel({
        navigation:true,
        paginationSpeed : 1000,
        goToFirstSpeed : 2000,
        singleItem : true,
        autoHeightClass: 'owl-height',
        responsive: true
  });

  $("#gallery-slider").owlCarousel({
    navigation:true,
        paginationSpeed : 1000,
        goToFirstSpeed : 2000,
        singleItem : true,
        autoHeightClass: 'owl-height',
        responsive: true,
    transitionStyle:"fade",
    navigationText: [
          "<i class='fa fa-chevron-left'></i>&nbsp; Prev",
          "Next &nbsp;<i class='fa fa-chevron-right'></i>"
          ]
  });

});
$(window).load(function(){
  $('.flexslider').flexslider({
    animation: "fade",
    start: function(slider){
      $('body').removeClass('loading');
    }
  });
});