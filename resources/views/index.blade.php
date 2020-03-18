@extends('layout.main')

@section('content')


    <div id="map" style="height: 300px;"></div>


    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <img src="{{ url('/') }}/reports/2019-08-14_10-00-00/map/Runoff.png" width="100%">
        </div>
        <div class="col-lg-6">
          <img src="http://weather.bangkok.go.th/FTPCustomer/radar/pics/nkradar.gif" width="100%" from="http://weather.bangkok.go.th/radar/RadarAnimationNk.aspx">
        </div>
      </div>
    </div>


    <script>
      var map;

      //var src = "https://weather.ckartisan.com/sample/kml/test1.kmz";
      //var src = "https://weather.ckartisan.com/sample/kml/test2.kmz";
      // /2D_Base.kmz
      //var src = "{{ url('/') }}/reports/2019-08-14_10-00-00/kml/1RG.kmz";
      //var src = "https://csincube.com/us_states.kml";
      //var src = 'https://developers.google.com/maps/documentation/javascript/examples/kml/westcampus.kml';


      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          //center: {lat: 21.3143328800798, lng: 105.603779579014},
          center: {lat: 13.751288, lng: 100.628847},
          //13.751288, 100.628847
          zoom: 15
        });

        //BOUNDARY
        var src = "https://weather.ckartisan.com/sample/kml/2D_Base.kmz";
        var kmlLayer = new google.maps.KmlLayer(src, {
          suppressInfoWindows: true,
          preserveViewport: false,
          map: map
        });
        //Animation
        var src2 = "https://weather.ckartisan.com/sample/kml/2D_Base_Animation.kmz";        
        var kmlLayer = new google.maps.KmlLayer(src2, {
          suppressInfoWindows: true,
          preserveViewport: false,
          map: map
        });
        //console.log("kmlLayer : " , kmlLayer);

      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-NoP20OejFNd_gxMizvmRCDHwRPg0gJI&callback=initMap"
    async defer></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
@endsection