<html>
<head>
    <meta charset="utf-8" />
    <title>Leaflet Routing Machine Example</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <style>
        .map {
            position: absolute;
            width: 50%;
            height: 100%;
        }
    </style>
</head>
<body>
<div id="map2" class="map2">
<div class="leaflet-top leaflet-right"><div class="leaflet-routing-container leaflet-bar leaflet-routing-collapsible leaflet-control"><div class="leaflet-routing-geocoders ">
    <div class="leaflet-routing-geocoder"><input class="" placeholder="Start"><span class="leaflet-routing-remove-waypoint"></span></div>
    <div class="leaflet-routing-geocoder"><input class="" placeholder="End"><span class="leaflet-routing-remove-waypoint"></span></div>
    <button class="leaflet-routing-add-waypoint " type="button"></button></div><span class="leaflet-routing-collapse-btn"></span>
    <div class="leaflet-routing-alternatives-container"></div></div
    ><div class="leaflet-control-geocoder leaflet-bar leaflet-control"><button class="leaflet-control-geocoder-icon" type="button" aria-label="Initiate a new search">&nbsp;</button>
    <div class="leaflet-control-geocoder-form"><input class="" type="text" placeholder="Search..."></div>
    <div class="leaflet-control-geocoder-form-no-error">Nothing found.</div><ul class="leaflet-control-geocoder-alternatives leaflet-control-geocoder-alternatives-minimized"></ul></div></div>

</div>
<br><br>
    <div id="map" class="map"></div>
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script>
var map = L.map('map');


L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);


L.Routing.control({
        waypoints: [
         
          
        ],
        routeWhileDragging: true,
        geocoder: L.Control.Geocoder.nominatim()
    })
    .on('routesfound', function(e) {
        var routes = e.routes;
        alert('Found ' + routes.length + ' route(s).');
    })
    .on('routesfound', function(e) {
   var routes = e.routes;
   var summary = routes[0].summary;
   // alert distance and time in km and minutes
   alert('Total distance is ' + summary.totalDistance / 1000 + ' km and total time is ' + Math.round(summary.totalTime % 3600 / 60) + ' minutes');
})
    .addTo(map);
L.Control.geocoder().addTo(map);

    </script>
  
</body>
</html>