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


  $("#programmes .nav-tabs a").click(function (e){
    e.preventDefault();
    var $thesubtitle = $(this).attr('title');
    var $thetitle = $(this).html();
    var $title = $(".programme-phase .title");
    var $subtitle = $(".programme-phase .sub-title");
    
    $subtitle.html($thesubtitle).addClass("fadeIn animated");
    $title.html($thetitle);
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