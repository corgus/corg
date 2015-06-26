<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>KML Mapping</title>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
		function initialize() {
		
			function showProps(obj) {
			  var result = "";
			  for (var i in obj) {
				if (obj.hasOwnProperty(i)) {
					result +=  "ptClick.featureData." + i + " = " + obj[i] + "\n";
				}
			  }
			  return result;
			}
			
			/* find current window width and set zoom accordingly (>1000px=3, >400px=2, <400px=1) */
			var cw = window.innerWidth;
			switch (true) { 	case (cw >2000): cZoom = 4; break;
								case (cw >1000): cZoom = 3; break;
								case (cw >400): cZoom = 2; break;
								default: cZoom = 1; }
			/* alert("innerWidth = "+window.innerWidth+"\nZoom = "+cZoom); */
			
			/* Variables and Map Options */
			var clk = 0;
			var mapOptions = {
			  zoom: cZoom,
			  center: new google.maps.LatLng(30,-75),
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			var kmlmap = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
			var xmlurl = 'http://www.corg.us/meetyl/map/KML_Samples2.kml';
					/*	'http://www.corg.us/meetyl/map/KML_Samples.kml';
						'http://www.corg.us/meetyl/map/company_latlon_mini.kml';
						'http://api.flickr.com/services/feeds/geo/?g=322338@N20&lang=en-us&format=feed-georss'); */
			var kml_1 = new google.maps.KmlLayer({
				map: kmlmap,
				preserveViewport: false,
				suppressInfoWindows: false,
				url: xmlurl
			});

			function pointInfo(ptClick) {
				/* adapted from http://www.geocodezip.com/v3_GoogleEx_layer-kml_us_states_simpleA.html */
				function showProps(obj) {
					var result = "";
					for (var i in obj) {
						if (obj.hasOwnProperty(i)) {
							result +=  "ptClick.featureData." + i + " = " + obj[i] + "<br>";
						}
					}
					return result;
				}
				var cProps = showProps(ptClick.featureData);
				clk = clk + 1;
				if (ptClick.row) {
					var ptContent = ptClick.row['admin'].value;
				} else if (ptClick.featureData) {
					var ptContent = "Click ("+clk+") "+cProps+"<br>description = "+ptClick.featureData.description;
				}
				document.getElementById('info').innerHTML = ptContent;
			}
			
			google.maps.event.addListener(kml_1, "click", pointInfo);			

		  }
    </script>
  </head>
  
  <style>
	html, body {
	  height: 100%;
	  margin: 0;
	  padding: 0;
	  font-family:Courier,monospace;
	}
	
	.top{
		text-align:center;
		width:100%;
		background: #111;
		color: #ddd;
		padding-top: 20px;
		padding-bottom: 20px;
	}
	.top2{
		color: #e55;
		padding-top: 0px;
		font-size: 12px;
	}
	#info{ 
		width:400px;
		margin:0 auto;
		text-align:left;
	}
	#map-canvas, #map_canvas {
	  height: 100%;
	}

	@media print {
	  html, body {
		height: auto;
	  }

	  #map_canvas {
		height: 650px;
	  }
	}
  </style>
  
  <body onload="initialize()">
	<div class="top">mapping with kml!</div>
	<div class="top top2"><div id="info"></div><!--button onclick="UpdateRSS()">update</button--></div>
    <div id="map-canvas"></div>
  </body>
  
</html>