<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Switching basemaps</title>
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
  #basemaps-wrapper {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 400;
    background: white;
    padding: 10px;
  }
  #basemaps {
    margin-bottom: 5px;
  }
</style>

<div id="map"></div>

<div id="basemaps-wrapper" class="leaflet-bar">
  <select id="basemaps">
    <option value="Topographic">Topographic</option>
    <option value="Streets">Streets</option>
    <option value="NationalGeographic">National Geographic</option>
    <option value="Oceans">Oceans</option>
    <option value="Gray">Gray</option>
    <option value="DarkGray">Dark Gray</option>
    <option value="Imagery">Imagery</option>
    <option value="ImageryClarity">Imagery (Clarity)</option>
    <option value="ImageryFirefly">Imagery (Firefly)</option>
    <option value="ShadedRelief">Shaded Relief</option>
    <option value="Physical">Physical</option>
  </select>
</div>

<script>
  var map = L.map('map').setView([-33.87, 150.77], 10);
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
  var layer = L.esri.basemapLayer('Topographic').addTo(map);
  var layerLabels;

  function setBasemap (basemap) {
    if (layer) {
      map.removeLayer(layer);
    }

    layer = L.esri.basemapLayer(basemap);

    map.addLayer(layer);

    if (layerLabels) {
      map.removeLayer(layerLabels);
    }

    if (
      basemap === 'ShadedRelief' ||
      basemap === 'Oceans' ||
      basemap === 'Gray' ||
      basemap === 'DarkGray' ||
      basemap === 'Terrain'
    ) {
      layerLabels = L.esri.basemapLayer(basemap + 'Labels');
      map.addLayer(layerLabels);
    } else if (basemap.includes('Imagery')) {
      layerLabels = L.esri.basemapLayer('ImageryLabels');
      map.addLayer(layerLabels);
    }
  }

  document
    .querySelector('#basemaps')
    .addEventListener('change', function (e) {
      var basemap = e.target.value;
      setBasemap(basemap);
    });
</script>

</body>
</html>