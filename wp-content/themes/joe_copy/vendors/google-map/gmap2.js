 var map;
 var x;
 var y;
 var z; 

    function initialize() {
        var mapOptions = {
            zoom: 13,
            center: new google.maps.LatLng(1.319713, 103.892441),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('map-canvas'),
       mapOptions);

   var image = 'http://main.ssagroup.com/mark3.png';
    var myLatLng = new google.maps.LatLng(1.319713, 103.892441);
    var beachMarker1 = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
    });
   beachMarker1.setAnimation(google.maps.Animation.BOUNCE);
      


    var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3 id="firstHeading" class="firstHeading">SSA Headquarters</h3>'+
      '<div id="bodyContent">'+
      '<p><h4>11 Eunos Road 8 Lifelong Learning<br/>' +
      'Institute #06-01 Singapore 408601</h4>'+
      'Tel: +65 6842 2282<br/>'+
      'Fax: +65 6842 2202<br/>'+
      'contact@ssagroup.com</p>'+
      '</div>'+
      '</div>';

      var infowindow = new google.maps.InfoWindow({
          content: contentString
      });

    }

    google.maps.event.addDomListener(window, 'load', initialize);




