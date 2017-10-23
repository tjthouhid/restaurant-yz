 <?php if($current_url!=="index.php"){
 	$s_url=$site_url;
 }else{
 	$s_url="";
 }
 ?>
     <!-- ******************************************************* -->
    <!-- ************  Footer Section  ************** -->
    <!-- ******************************************************* -->

    <footer>
        
            <div class="row fix">
                <div class="col-md-12">
                    <div class="social-icon">
                        <ul>
                            <li><a href="https://www.facebook.com/mangiamouae/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/mangiamo.restaurant/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.snapchat.com/add/mangiamo" target="_blank"><i class="fa fa-snapchat"></i></a></li>
                        </ul>
                    </div>
                    <div class="footer-nav">
                        <ul class="go-menu">
                            <li><a href="<?php echo $site_url;?>">لقائمة الرئيسية</a></li>
                            <li><a href="<?php echo $s_url;?>#our_story">قصتنا</a></li>
                            <li><a href="<?php echo $s_url;?>#reservation">لحجوزات</a></li>
                            <li><a href="<?php echo $s_url;?>#menu">قائمة الطعام</a></li>
                            <li><a href="<?php echo $s_url;?>#contact">للتواصل</a></li>
                        </ul>
                    </div>
                    <div class="footer-sign" >
                        <p>mangiamo @Allrightreserved-2017</p>
                        <!-- <p>Developed By <a href="https://www.frndzit.org" target="_blank">Frndzit</a></p> -->
                        
                    </div>
                    
                </div>
            </div>
       
    </footer>

    <!--=== fixed js ===-->
    <script src="js/jquery.min.js"></script> <!-- jQuery v3.1.1 -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- Bootstrap v3.3.7 -->
    <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script> <!-- Bootstrap v3.3.7 -->
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdehGANaOcGnAcQjXt9zP22I0nHmONJdw&callback=initMap">
    </script>
    <!--=== Scroll Effects js ===-->
    <script type="text/javascript" src="js/anijs-min.js"></script>
    <script type="text/javascript" src="js/anijs-helper-scrollreveal.min.js"></script>
    
    <!--=== Jquery validator js ===-->
    <script src="js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        var burl="<?php echo get_server_url(ENVR);?>";
    </script>

    <!--=== custom js ===-->
    <script type="text/javascript" src="js/custom.js"></script>
    <!--=== map js ===-->
    <script type="text/javascript">
        
        /******************************
              ---------Google Map Js ---------- 
              ********************************/
        function initMap() {}
        $(() => {
          initMap = function() {
            // your code like...
            
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
                    var myLatLng = {lat: 24.4121921, lng: 54.4687664};
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
                             title: 'Mangiamo Restaurant, Armed Forces Officers Club - Abu Dhab',
                             name: 'Mangiamo Restaurant, Armed Forces Officers Club - Abu Dhab',
                             icon : icon
                           });


                   
          }
        })
              
              


    </script>
</body>
</html>



<?php include "template-parts/pop-up-form.php" ?>

<?php include "template-parts/pop-up-video.php" ?>




