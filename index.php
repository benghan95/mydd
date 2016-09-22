<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <title>Traffic Offended Reporting Application</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div id="map"></div>
  <script>

    function initMap() {
      var myLatLng = {lat: -25.363, lng: 131.044};

      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: myLatLng
      });

      var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
      });
    }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbJZZWgEERd109sQqri7L6fzdAxw6wID4&callback=initMap">
  </script>
</body>
</html>