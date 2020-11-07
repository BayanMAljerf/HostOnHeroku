<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Querying features</title>
  <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />

  <!-- Load Leaflet from CDN -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
    crossorigin=""></script>

  <!-- Load Esri Leaflet from CDN -->
  <script src="https://unpkg.com/esri-leaflet@2.5.0/dist/esri-leaflet.js"
    integrity="sha512-ucw7Grpc+iEQZa711gcjgMBnmd9qju1CICsRaryvX7HJklK0pGl/prxKvtHwpgm5ZHdvAil7YPxI1oWPOWK3UQ=="
    crossorigin=""></script>

  <!-- Load Esri Leaflet Renderers plugin to use feature service symbology -->
  <script src="https://unpkg.com/esri-leaflet-renderers@2.1.2" 
    integrity="sha512-/McnqdlwYvfeOEWqoniEagFRQnLi/TNbkHe4EJypmZI02LBT7vBU/+PZ5W3FSsFFlRbnMCsJvnbp5MX8XOBrnQ=="
    crossorigin=""></script>



<!-- Load Esri Leaflet Geocoder from CDN -->
<link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.css"
    integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g=="
    crossorigin="">
  <script src="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.js"
    integrity="sha512-HrFUyCEtIpxZloTgEKKMq4RFYhxjJkCiF5sDxuAokklOeZ68U2NPfh4MFtyIVWlsKtVbK5GD2/JzFyAfvT5ejA=="
    crossorigin=""></script>








  <style>
    body { margin:0; padding:0; }
    #map { position: absolute; top:0; bottom:0; right:0; left:0; }
  </style>
</head>
<body>

<style>
  #query {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 1000;
    background: white;
    padding: 1em;
  }

  #query select {
    font-size: 16px;
  }
</style>

<div id="map"></div>

<div id="query" class="leaflet-bar">
  <label>
    Zoning District:
    <select id="district">
      <!-- make sure to encase string values in single quotes for valid sql -->
      <option value="1=1">Any</option>
      <option value="ZONE_SMRY='OPEN SPACE'">Open Space</option>
      <option value="ZONE_SMRY='AGRICULTURE'">Agriculture</option>
      <option value="ZONE_SMRY='RESIDENTIAL'">Residential</option>
      <option value="ZONE_SMRY='COMMERCIAL'">Commercial</option>
      <option value="ZONE_SMRY='INDUSTRIAL'">Industrial</option>
      <option value="ZONE_SMRY='PARKING'">Parking</option>
      <option value="ZONE_SMRY='PUBLIC FACILITY'">Public Facility</option>
    </select>
  </label>
</div>

<script>
  var map = L.map('map').setView([34.19, -118.53], 15);

  L.esri.basemapLayer('Gray').addTo(map);

//bayan


  var arcgisOnline = L.esri.Geocoding.arcgisOnlineProvider();

  L.esri.Geocoding.geosearch({
    providers: [
      arcgisOnline,
      L.esri.Geocoding.mapServiceProvider({
        label: 'States and Counties',
        url: 'https://sampleserver6.arcgisonline.com/arcgis/rest/services/Census/MapServer',
        layers: [2, 3],
        searchFields: ['NAME', 'STATE_NAME']
      })
    ]
  }).addTo(map);

//bayan
  var zoning = L.esri.featureLayer({
    url: 'https://services5.arcgis.com/7nsPwEMP38bSkCjy/arcgis/rest/services/TEST_PYTHON_ZONING/FeatureServer/0',
    simplifyFactor: 0.5,
    precision: 4
  }).addTo(map);

  var zoningDistrict = document.getElementById('district');

  zoningDistrict.addEventListener('change', function () {
    zoning.setWhere(zoningDistrict.value);
  });
</script>

</body>
</html>