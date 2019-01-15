console.clear();
/*
function initMap() {
  var latlng = new google.maps.LatLng(42.9546046, -85.6727534);
  var latlng2 = new google.maps.LatLng(42.944909, -85.5444814);
  // State custom styles

  var styles = [
    {
      featureType: "administrative.locality",
      elementType: "all",
      stylers: [
        { hue: "#c79c60" },
        { saturation: 7 },
        { lightness: 19 },
        { visibility: "on" }
      ]
    },
    {
      featureType: "landscape",
      elementType: "all",
      stylers: [
        { hue: "#ffffff" },
        { saturation: -100 },
        { lightness: 100 },
        { visibility: "simplified" }
      ]
    },
    {
      featureType: "poi",
      elementType: "all",
      stylers: [
        { hue: "#ffffff" },
        { saturation: -100 },
        { lightness: 100 },
        { visibility: "off" }
      ]
    },
    {
      featureType: "road",
      elementType: "geometry",
      stylers: [
        { hue: "#c79c60" },
        { saturation: -52 },
        { lightness: -10 },
        { visibility: "simplified" }
      ]
    },
    {
      featureType: "road",
      elementType: "labels",
      stylers: [
        { hue: "#c79c60" },
        { saturation: -93 },
        { lightness: 31 },
        { visibility: "on" }
      ]
    },
    {
      featureType: "road.arterial",
      elementType: "labels",
      stylers: [
        { hue: "#c79c60" },
        { saturation: -93 },
        { lightness: -2 },
        { visibility: "simplified" }
      ]
    },
    {
      featureType: "road.local",
      elementType: "geometry",
      stylers: [
        { hue: "#c79c60" },
        { saturation: -52 },
        { lightness: -10 },
        { visibility: "simplified" }
      ]
    },
    {
      featureType: "transit",
      elementType: "all",
      stylers: [
        { hue: "#c79c60" },
        { saturation: 10 },
        { lightness: 69 },
        { visibility: "on" }
      ]
    },
    {
      featureType: "water",
      elementType: "all",
      stylers: [
        { hue: "#c79c60" },
        { saturation: -78 },
        { lightness: 67 },
        { visibility: "simplified" }
      ]
    }
  ];
  

  var myOptions = {
    zoom: 13,
    center: latlng,
    styles: styles

    // mapTypeId: google.maps.MapTypeId.featureOpts
  };

  var myOptions2 = {
    zoom: 13,
    center: latlng2,
    styles: styles
  };

  var map = new google.maps.Map(
    document.getElementById("map_canvas"),
    myOptions
  );

  var map2 = new google.maps.Map(
    document.getElementById("map_canvas_2"),
    myOptions2
  );

  var myMarker = new google.maps.Marker({
    position: latlng,
    map: map,
    title: "FishLads"
  });

  var myMarker2 = new google.maps.Marker({
    position: latlng2,
    map: map2,
    title: "FishLads"
  });

  //      // This event expects a click on a marker
  //    // When this event is fired the Info Window content is created
  //    // and the Info Window is opened.
  //    google.maps.event.addListener(marker, 'click', function() {

  //       // Creating the content to be inserted in the infowindow
  //       var iwContent = '<div id="iw_container">' +
  //             '<div class="iw_title">' + name + '</div>' +
  //          '<div class="iw_content">' + address1 + '<br />' +
  //          address2 + '<br />' +
  //          postalCode + '</div></div>';

  //       // including content to the Info Window.
  //       infoWindow.setContent(iwContent);

  //       // opening the Info Window in the current map and at the current marker location.
  //       infoWindow.open(map, marker);
  //    });

  //Get Center on resize
	
  google.maps.event.addDomListener(window, "resize", function() {
    var center = map.getCenter();
    var center2 = map2.getCenter();
    google.maps.event.trigger(map, "resize");
    google.maps.event.trigger(map2, "resize");
    map.setCenter(center);
    map2.setCenter(center2);
  });
  
}

*/


var map;
function initMap(){
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 40.0519752, lng: -76.314270999999},
    zoom: 15 // typical is usually 8 or 9
  });
}

/*google.maps.event.addDomListener(window, "load", initMap);*/