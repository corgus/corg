<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <title>meetyl metro map</title>
	
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5/leaflet.css" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5/leaflet.ie.css" />
    <![endif]-->

    <script src="http://cdn.leafletjs.com/leaflet-0.5/leaflet.js"></script>

</head>
 
<!--script>
  var geocoder;
  var map;
  function initialize() {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(-34.397, 150.644);
    var mapOptions = {
      zoom: 8,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
  }
  function codeAddress() {
    var address = document.getElementById("address").value;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
        });
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }
</script>


<body onload="initialize()">
  <div id="map_canvas" style="width: 320px; height: 480px;"></div>
  <div>
    <input id="address" type="textbox" value="Sydney, NSW">
    <input type="button" value="Encode" onclick="codeAddress()">
  </div -->


<body>

<style>

body{
    width: 100%; height: 100%;
}

#metro_map {
    position: absolute;
    width: 100%;
    height: 100%;
}

</style>



<div id="content_wrapper">
 
<div id="metro_map" class="home-map"></div>

</div>  <!-- div#content_wrapper -->
 

<script type="text/javascript"> 
 
	// LEAFLET MAP INITIATION
 
	var map = L.map('metro_map').setView([43,-116], 4);
	L.tileLayer('http://{s}.tile.cloudmade.com/BC9A493B41014CAABB98F0471D759707/997/256/{z}/{x}/{y}.png', {
	maxZoom: 18,
	attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery Â© <a href="http://cloudmade.com">CloudMade</a>'
	}).addTo(map);

/* USA */
L.circle([41.0805,-81.5214],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Akron (198402)');
L.circle([35.1056,-106.6474],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Albuquerque (552804)');
L.circle([35.1978,-101.8287],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Amarillo (193675)');
L.circle([33.8555,-117.7601],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Anaheim (341361)');
L.circle([61.1775,-149.2744],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Anchorage (295570)');
L.circle([32.7007,-97.1247],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Arlington (373698)');
L.circle([33.7629,-84.4227],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Atlanta (432427)');
L.circle([33.3655,-82.0734],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Augusta (196494)');
L.circle([32.7007,-97.1247],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Aurora (332354)');
L.circle([41.7635,-88.2901],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Aurora (199672)');
L.circle([30.3072,-97.756],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Austin (820611)');
L.circle([35.3212,-119.0183],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Bakersfield (352428)');
L.circle([39.3002,-76.6105],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Baltimore (619493)');
L.circle([30.4485,-91.1259],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Baton Rouge (230139)');
L.circle([33.5274,-86.799],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Birmingham (212413)');
L.circle([43.5985,-116.2311],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Boise (210145)');
L.circle([42.332,-71.0202],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Boston (625087)');
L.circle([26.0183,-97.4538],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Brownsville (178430)');
L.circle([42.8925,-78.8597],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Buffalo (261025)');
L.circle([26.6431,-81.9973],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Cape Coral (157476)');
L.circle([33.2829,-111.8549],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Chandler (240101)');
L.circle([35.2087,-80.8307],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Charlotte (751087)');
L.circle([35.0665,-85.2471],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Chattanooga (170136)');
L.circle([36.6794,-76.3018],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Chesapeake (225050)');
L.circle([41.8376,-87.6818],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Chicago (2707120)');
L.circle([32.6277,-117.0152],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Chula Vista (247535)');
L.circle([39.1399,-84.5064],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Cincinnati (296223)');
L.circle([41.4781,-81.6795],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Cleveland (393806)');
L.circle([38.8673,-104.7607],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Colorado Springs (426388)');
L.circle([39.9848,-82.985],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Columbus (797434)');
L.circle([32.5102,-84.8749],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Columbus (194107)');
L.circle([27.7543,-97.1734],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Corpus Christi (307953)');
L.circle([32.7942,-96.7655],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Dallas (1223229)');
L.circle([39.7618,-104.8806],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Denver (619968)');
L.circle([41.5739,-93.6167],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Des Moines (206599)');
L.circle([42.383,-83.1022],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Detroit (706585)');
L.circle([35.981,-78.9056],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Durham (233252)');
L.circle([31.8484,-106.427],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('El Paso (665568)');
L.circle([44.0567,-123.1162],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Eugene (156929)');
L.circle([35.0851,-78.9803],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Fayetteville (203945)');
L.circle([34.1088,-117.4627],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Fontana (199028)');
L.circle([26.1413,-80.1439],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Fort Lauderdale (168528)');
L.circle([41.0882,-85.1439],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Fort Wayne (255824)');
L.circle([32.7795,-97.3463],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Fort Worth (758738)');
L.circle([37.4944,-121.9411],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Fremont (216916)');
L.circle([36.7827,-119.7945],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Fresno (501362)');
L.circle([33.7788,-117.9605],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Garden Grove (173470)');
L.circle([32.9098,-96.6304],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Garland (231517)');
L.circle([33.3102,-111.7422],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Gilbert (211951)');
L.circle([33.5331,-112.1899],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Glendale (230482)');
L.circle([34.1814,-118.2458],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Glendale (193111)');
L.circle([32.6842,-97.021],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Grand Prairie (179100)');
L.circle([42.9612,-85.6556],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Grand Rapids (189815)');
L.circle([36.0965,-79.8271],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Greensboro (273425)');
L.circle([36.0122,-115.0375],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Henderson (260068)');
L.circle([25.8699,-80.3029],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Hialeah (229969)');
L.circle([21.3259,-157.8453],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Honolulu (340936)');
L.circle([29.7805,-95.3863],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Houston (2145146)');
L.circle([33.6906,-118.0093],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Huntington Beach (192888)');
L.circle([34.7843,-86.539],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Huntsville (182956)');
L.circle([39.7767,-86.1459],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Indianapolis (827609)');
L.circle([33.6784,-117.7713],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Irvine (215529)');
L.circle([32.8577,-96.97],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Irving (220702)');
L.circle([32.3158,-90.2128],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Jackson (175561)');
L.circle([30.337,-81.6613],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Jacksonville (827908)');
L.circle([40.7114,-74.0648],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Jersey City (250323)');
L.circle([39.1252,-94.5511],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Kansas City (463202)');
L.circle([35.9709,-83.9465],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Knoxville (180761)');
L.circle([34.6936,-118.1753],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Lancaster (157693)');
L.circle([27.5477,-99.4869],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Laredo (241935)');
L.circle([36.2277,-115.264],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Las Vegas (589317)');
L.circle([38.0402,-84.4584],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Lexington (301569)');
L.circle([40.809,-96.6804],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Lincoln (262341)');
L.circle([34.7254,-92.3586],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Little Rock (195314)');
L.circle([33.8091,-118.1553],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Long Beach (465576)');
L.circle([34.0194,-118.4108],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Los Angeles (3819702)');
L.circle([38.1781,-85.6667],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Louisville (602011)');
L.circle([33.5665,-101.8867],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Lubbock (233740)');
L.circle([43.0878,-89.4301],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Madison (236901)');
L.circle([35.1035,-89.9785],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Memphis (652050)');
L.circle([33.4019,-111.7174],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Mesa (446518)');
L.circle([25.7752,-80.2086],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Miami (408750)');
L.circle([43.0633,-87.9667],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Milwaukee (597867)');
L.circle([44.9633,-93.2683],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Minneapolis (387753)');
L.circle([30.6684,-88.1002],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Mobile (194914)');
L.circle([37.6609,-120.9891],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Modesto (202751)');
L.circle([32.3463,-86.2686],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Montgomery (208182)');
L.circle([33.9233,-117.2057],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Moreno Valley (197838)');
L.circle([36.1718,-86.785],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Nashville (609644)');
L.circle([30.0686,-89.939],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('New Orleans (360740)');
L.circle([40.6643,-73.9385],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('New York (8244910)');
L.circle([40.7242,-74.1726],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Newark (277540)');
L.circle([37.076,-76.5217],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Newport News (179611)');
L.circle([36.923,-76.2446],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Norfolk (242628)');
L.circle([36.283,-115.0893],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('North Las Vegas (219020)');
L.circle([37.7699,-122.2256],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Oakland (395817)');
L.circle([33.2246,-117.3062],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Oceanside (169569)');
L.circle([35.4671,-97.5137],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Oklahoma City (591967)');
L.circle([41.2647,-96.0419],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Omaha (415068)');
L.circle([34.0395,-117.6088],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Ontario (166390)');
L.circle([28.4159,-81.2988],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Orlando (243195)');
L.circle([38.889,-94.6906],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Overland Park (176185)');
L.circle([34.2023,-119.2046],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Oxnard (199943)');
L.circle([26.0212,-80.3404],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Pembroke Pines (157594)');
L.circle([40.0094,-75.1333],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Philadelphia (1536471)');
L.circle([33.5722,-112.088],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Phoenix (1469471)');
L.circle([40.4398,-79.9766],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Pittsburgh (307484)');
L.circle([33.0508,-96.7479],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Plano (269776)');
L.circle([27.281,-80.3838],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Port Saint Lucie (166149)');
L.circle([45.537,-122.65],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Portland (593820)');
L.circle([41.8231,-71.4188],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Providence (178053)');
L.circle([35.8302,-78.6414],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Raleigh (416468)');
L.circle([34.1233,-117.5642],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Rancho Cucamonga (167721)');
L.circle([39.4745,-119.7765],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Reno (227511)');
L.circle([37.5314,-77.476],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Richmond[12] (205533)');
L.circle([33.9381,-117.3932],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Riverside (310651)');
L.circle([43.1699,-77.6169],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Rochester (210855)');
L.circle([38.5666,-121.4686],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Sacramento (472178)');
L.circle([44.9489,-93.1039],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Saint Paul (288448)');
L.circle([27.762,-82.6441],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Saint Petersburg (244997)');
L.circle([40.7785,-111.9314],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Salt Lake City (189899)');
L.circle([29.4724,-98.5251],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('San Antonio (1359758)');
L.circle([34.1393,-117.2953],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('San Bernardino (213012)');
L.circle([32.8153,-117.135],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('San Diego (1326179)');
L.circle([37.775,-122.4183],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('San Francisco (812826)');
L.circle([37.2969,-121.8193],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('San Jose (967487)');
L.circle([33.7365,-117.8826],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Santa Ana (329427)');
L.circle([34.4049,-118.5047],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Santa Clarita (177601)');
L.circle([38.4468,-122.7061],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Santa Rosa (169292)');
L.circle([33.6687,-111.8237],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Scottsdale (221020)');
L.circle([47.6205,-122.3509],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Seattle (620778)');
L.circle([32.467,-93.7927],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Shreveport (200975)');
L.circle([47.6736,-117.4166],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Spokane (210103)');
L.circle([37.1942,-93.2913],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Springfield (160660)');
L.circle([38.6357,-90.2446],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('St. Louis (318069)');
L.circle([37.9763,-121.3133],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Stockton (296357)');
L.circle([47.2522,-122.4598],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Tacoma (200678)');
L.circle([30.4551,-84.2534],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Tallahassee (182965)');
L.circle([27.9701,-82.4797],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Tampa (346037)');
L.circle([33.3884,-111.9318],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Tempe (164268)');
L.circle([41.6641,-83.5819],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Toledo (286038)');
L.circle([32.1543,-110.8711],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Tucson (525796)');
L.circle([36.1279,-95.9023],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Tulsa (396466)');
L.circle([45.6372,-122.5965],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Vancouver (164759)');
L.circle([36.7793,-76.024],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Virginia Beach (442707)');
L.circle([38.9041,-77.0171],50000, {color: 'blue', fillColor: '#03f',fillOpacity: 0.5}).addTo(map).bindPopup('Washington (617996)');
L.circle([37.6907,-97.3427],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Wichita (384445)');
L.circle([36.1033,-80.2606],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Winston–Salem (232385)');
L.circle([42.2695,-71.8078],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Worcester (181631)');
L.circle([40.9459,-73.8674],10000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Yonkers (197399)');


/* CANADA */
L.circle([51.045,-114.058],50000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Calgary (1214839)');
L.circle([53.544,-113.491],50000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Edmonton (960015)');
L.circle([45.509,-73.554],50000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Montreal (3824221)');
L.circle([45.422,-75.697],50000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Ottawa (1236324)');
L.circle([46.89,-71.219],50000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Quebec (765706)');
L.circle([43.653,-79.383],50000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Toronto (5132794)');
L.circle([49.261,-123.114],50000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Vancouver (2135201)');
L.circle([49.883,-97.15],50000, {color: 'red', fillColor: '#f03',fillOpacity: 0.5}).addTo(map).bindPopup('Winnipeg (671551)');

	/* L.polygon([ [51.509, -0.08], [51.503, -0.06], [51.51, -0.047] ]).addTo(map).bindPopup("I am a polygon."); */
	/* L.marker([51.5, -0.09]).addTo(map).bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup(); */

        var popup = L.popup();
	function onMapClick(e) {
	    popup
	    .setLatLng(e.latlng)
	    .setContent(e.latlng.toString())
	    .openOn(map);
	}
	map.on('click', onMapClick); 
 
</script>
 
</body>
</html>					