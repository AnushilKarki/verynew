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
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<p id="demo">

</p>
    <!-- <div id="map" class="map"></div> -->
    <div id="map" class="map leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" tabindex="0">
    <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
    <div class="leaflet-pane leaflet-tile-pane">
    </div>
    <div class="leaflet-pane leaflet-shadow-pane"></div>
    <div class="leaflet-pane leaflet-overlay-pane"></div>
    <div class="leaflet-pane leaflet-marker-pane"></div>
    <div class="leaflet-pane leaflet-tooltip-pane"></div>
    <div class="leaflet-pane leaflet-popup-pane">
    </div><div class="leaflet-proxy leaflet-zoom-animated"></div></div>
    <div class="leaflet-control-container"><div class="leaflet-top leaflet-left">
    <div class="leaflet-control-zoom leaflet-bar leaflet-control">
    <a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a>
    <a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a></div></div>
    <div class="leaflet-top leaflet-right"><div class="leaflet-routing-container leaflet-bar leaflet-routing-collapsible leaflet-control"><div class="leaflet-routing-geocoders ">
    <div class="leaflet-routing-geocoder"><input class="" placeholder="Start"><span class="leaflet-routing-remove-waypoint"></span></div>
    <div class="leaflet-routing-geocoder"><input class="" placeholder="End"><span class="leaflet-routing-remove-waypoint"></span></div>
    <button class="leaflet-routing-add-waypoint " type="button"></button></div><span class="leaflet-routing-collapse-btn"></span>
    <div class="leaflet-routing-alternatives-container"></div></div
    ><div class="leaflet-control-geocoder leaflet-bar leaflet-control"><button class="leaflet-control-geocoder-icon" type="button" aria-label="Initiate a new search">&nbsp;</button>
    <div class="leaflet-control-geocoder-form"><input class="" type="text" placeholder="Search..."></div>
    <div class="leaflet-control-geocoder-form-no-error">Nothing found.</div><ul class="leaflet-control-geocoder-alternatives leaflet-control-geocoder-alternatives-minimized"></ul></div></div>
    <div class="leaflet-bottom leaflet-left"></div>
    <div class="leaflet-bottom leaflet-right"
    ><div class="leaflet-control-attribution leaflet-control"><a href="http://leafletjs.com" title="A JS library for interactive maps">Leaflet</a></div></div></div></div>
    
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