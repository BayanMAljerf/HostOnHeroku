<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Clustering points</title>
  <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />

  <!-- Load Leaflet from CDN -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

  <!-- Load Esri Leaflet from CDN -->
  <script src="https://unpkg.com/esri-leaflet@2.5.0/dist/esri-leaflet.js"
    integrity="sha512-ucw7Grpc+iEQZa711gcjgMBnmd9qju1CICsRaryvX7HJklK0pGl/prxKvtHwpgm5ZHdvAil7YPxI1oWPOWK3UQ=="
    crossorigin=""></script>

  <!-- Load Leaflet MarkerCluster and Esri Leaflet Cluster from CDN -->
  <link rel="stylesheet" type="text/css"
    href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css"
    integrity="sha512-BBToHPBStgMiw0lD4AtkRIZmdndhB6aQbXpX7omcrXeG2PauGBl2lzq2xUZTxaLxYz5IDHlmneCZ1IJ+P3kYtQ=="
    crossorigin="">
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css"
    integrity="sha512-RLEjtaFGdC4iQMJDbMzim/dOvAu+8Qp9sw7QE4wIMYcg2goVoivzwgSZq9CsIxp4xKAZPKh5J2f2lOko2Ze6FQ=="
    crossorigin="">
  <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"
    integrity="sha512-MQlyPV+ol2lp4KodaU/Xmrn+txc1TP15pOBF/2Sfre7MRsA/pB4Vy58bEqe9u7a7DczMLtU5wT8n7OblJepKbg=="
    crossorigin=""></script>
  <script src="https://unpkg.com/esri-leaflet-cluster@2.1.0/dist/esri-leaflet-cluster.js"
    integrity="sha512-fEdNFHisleVtEYdLhW4Z2RsR7TN6hLutE/+O4D+skfTNY2rlHm8HOZARPWkdrFFy/+i2KjFxcZAKTUWaVfbV0g=="
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

<div id="map"></div>

<script>
  var map = L.map('map').setView([0, 0], 2);

  L.esri.basemapLayer('Streets').addTo(map);
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

  //  (new constructor syntax at 2.0.0)
  L.esri.Cluster.featureLayer({
    url: 'https://sampleserver6.arcgisonline.com/arcgis/rest/services/Earthquakes_Since1970/MapServer/0'
  }).addTo(map);
</script>

</body>
</html> 