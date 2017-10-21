
/******************************
      ---------Google Map Js ---------- 
      ********************************/
      //var r=[];
      //r['t']='t';
      //console.log('t');
      
      //console.log(location_info[0])
      function initMap() {

        var styles = [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "landscape.man_made",
    "stylers": [
      {
        "color": "#edf1f3"
      }
    ]
  },
  {
    "featureType": "landscape.natural",
    "stylers": [
      {
        "color": "#f9fdff"
      }
    ]
  },
  {
    "featureType": "poi",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#edf1f3"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
];
        var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});
        var myLatLng = {lat: 24.904539, lng: 91.861101};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: myLatLng,
          mapTypeControlOptions: {
               mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
             },
            mapTypeControl: false,
           mapTypeControlOptions: {
               style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
               position: google.maps.ControlPosition.TOP_CENTER
           },
           zoomControl: true,
           zoomControlOptions: {
               position: google.maps.ControlPosition.LEFT_BOTTOM
           },
           scaleControl: false,
           streetViewControl: false,
           streetViewControlOptions: {
               position: google.maps.ControlPosition.LEFT_TOP
           },
           fullscreenControl: false
        });
        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');

        var icon = {
            url: "img/marker.png", // url
            //scaledSize: new google.maps.Size(40, 50), // scaled size
           // origin: new google.maps.Point(0,0), // origin
           // anchor: new google.maps.Point(0, 0) // anchor
        };
        var marker = new google.maps.Marker({
                 position: myLatLng,
                 map: map,
                 title: '7th floor, Avenue st Road Roma, London!',
                 name: '7th floor, Avenue st Road Roma, London!',
                 icon : icon
               });


        // var markers = locations.map(function(location, i) {
        //   marker= new google.maps.Marker({
        //     position: location,
        //     //label: labels[i],
        //     title: location_info[i]['label'],
        //     name: location_info[i]['label'],
            
        //   });
        //   google.maps.event.addListener(marker, 'click', function() {
        //       modal_with_detail(i)
        //       });
        //  return marker;
        // });

        // Add a marker clusterer to manage the markers.
  
      }
      

