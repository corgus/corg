<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>JSON Mapping</title>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js"></script> <!--infobox example at http://jsfiddle.net/jEhJ3/597/ -->
	<script type="text/javascript" src="markerclusterer.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	
    <script>
		var jsonmap, ptClick, infoWindow, infoBox, mc;
		var dat;
		var clk = 0;
		function initialize() { 	// Initializing Map
			// find current window width to set zoom map accordingly (>1000px=3, >400px=2, <400px=1) */
			var mapDiv = document.getElementById("map-canvas");
			var cw = mapDiv.innerWidth;
			switch (true) { 	
				case (cw >2000): cZoom = 4; break;
				case (cw >1000): cZoom = 3; break;
				case (cw >400): cZoom = 2; break;
				default: cZoom = 1; }
			var mapOptions = {
				zoom: 13, // cZoom,
				center: new google.maps.LatLng(37.403301,-121.996994),  // (30,-75),
				mapTypeId: google.maps.MapTypeId.ROADMAP 	}
			jsonmap = new google.maps.Map(mapDiv, mapOptions);
			
			// Set styles for map:			
			var mapStyles = [
			  {
				featureType: "poi.park",
				stylers: [ 	{ visibility: "on" }, { saturation: -44 }, { lightness: 36 } ]
			  },{
				featureType: "administrative.neighborhood",
				stylers: [  { visibility: "on" }, { saturation: 5 }, { lightness: 44 } ]
			  },{
				featureType: "water",
				stylers: [  { lightness: 15 }, { saturation: 19 } ]
			  },{
				featureType: "transit",
				elementType: "labels.icon",
				stylers: [ { weight: 0.1 }, { visibility: "on" }, { lightness: 22 }, { saturation: -90 } ]
			  },{
				featureType: "road",
				stylers: [ { gamma: 0.93 }, { lightness: 4 }, { hue: "#ffff00" }, { saturation: -26 } ]
			  },{
				featureType: "poi",
				stylers: [ { lightness: 23 } ]
			  } 
			];
			jsonmap.setOptions({styles: mapStyles});
			
			// Create a script tag and fill with map data from file via jsonp
			/*var script = document.createElement('script');
			script.src = 'http://www.corg.us/meetyl/map/company_latlon_3.json';
			document.getElementsByTagName('head')[0].appendChild(script);
			*/
			
			// place markers into map via JSONP, and push into array for clustering:
			var markers = [];
			
			jsonRaw = jQuery.getJSON('company_map.json', function(data) {
				jsonObj = data;
				
				for (var i = 0; i < jsonObj.features.length; i++) {
					var coords = jsonObj.features[i].geometry.coordinates;
					var prop = jsonObj.features[i].properties;
					var latLng = new google.maps.LatLng(coords[1], coords[0]);
					if (prop.Focus == 1) {
						if(prop.Watch == 1) { 	markerIcon = "img/focuswatch_icon.png";
							} else { 			markerIcon = "img/focus_icon_magenta.png"; 
						}
					} else { 
						if(prop.Watch == 1) { 	markerIcon = "img/watch_icon_indigo.png";
							} else { 			markerIcon = "img/company_icon_red.png"; 
						}
					}
					var setIcon = new google.maps.MarkerImage(markerIcon, null, new google.maps.Point(0,0), new google.maps.Point(11,28));
					var marker = new google.maps.Marker({
						position: latLng,
						map: jsonmap,
						icon: setIcon
					});
					markers.push(marker);
					
					iwcontent = "<a href='javascript:void(0);' onclick=\"alert('link -> "+prop.Ticker+"');\"><strong>"+prop.Company+"</strong></a> ("+prop.Ticker+")<br>"+prop.Address; //+"<br><em>@ "+coords[1]+", "+coords[0]+"</em>";
					setInfo(marker,iwcontent);
				}
				
				mc = new MarkerClusterer(jsonmap, markers, {gridSize: 40, maxZoom: 12} );
				clusterSty('red2');
				
			});
		}
		
		// function for binding content of clicked marker to infoWindow:
		function setInfo (marker,content) {
			google.maps.event.addListener(marker, 'click', function() { 
				
				// remove current info box if necessary
				if (document.getElementById("infobox") != null) {
						prevBox = document.getElementById("infobox").parentElement;
						prevBox.parentElement.removeChild(prevBox); }
				
				// create new info box
				infoContent = document.createElement("div");
				infoContent.setAttribute("id", "infobox")
				infoContent.style.cssText = "border: 1px solid black; margin-top: 7px; background:#333; color:#FFF; font-family:Arial; font-size:12px; padding: 5px; border-radius:6px; -webkit-border-radius:6px; -moz-border-radius:6px;";
				infoContent.innerHTML = content;
				
				infobox = new InfoBox({
					 content: infoContent,
					 disableAutoPan: false,
					 maxWidth: 150,
					 pixelOffset: new google.maps.Size(-90, 0),
					 zIndex: null,
					 boxStyle: {
						background: "url('http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/examples/tipbox.gif') no-repeat -50px 0px",
						opacity: 0.9,
						width: "180px"
					},
					closeBoxMargin: "12px 4px 2px 2px",
					closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
					infoBoxClearance: new google.maps.Size(1, 1)
				});
				infobox.open(jsonmap, this);
				// jsonmap.panTo(loc);
			});
		}
		
		function clusterSty(color) {
			var cIcons, cColors;
			switch (color) {
				case 'blue':
					cColors = ['#fff','#fff','#fff'];
					cIcons = ['img/clusticon_small_blue.png','img/clusticon_medium_blue.png','img/clusticon_large_blue.png'];
					break;
				case 'red':
					cColors = ['#fff','#fff','#fff'];
					cIcons = ['img/clusticon_small_red.png','img/clusticon_medium_red.png','img/clusticon_large_red.png'];
					break;
				case 'blurple':
					cColors = ['#fff','#eee','#eee'];
					cIcons = ['img/clustericon_b3_small.png','img/clustericon_b3_medium.png','img/clustericon_b3_large.png',];
					break;
				case 'red2':
					cColors = ['#fff','#eee','#eee'];
					cIcons = ['img/clustericon_rb_small.png','img/clustericon_rb_medium.png','img/clustericon_rb_large.png'];
					break;
				case 'blurple2':
					cColors = ['#fff','#eee','#eee'];
					cIcons = ['img/clustericon_b4_small.png','img/clustericon_b4_medium.png','img/clustericon_b4_large.png'];
					break;
			}
			var clusterStyles = [
			  { height: 50, width: 50, textColor: cColors[0], fontWeight: 'bold', url: cIcons[0] }, 
			  { height: 50, width: 50, textColor: cColors[1], fontWeight: 'bold', url: cIcons[1] }, 
			  { height: 50, width: 50, textColor: cColors[2], url: cIcons[2] }, 
			];
			mc.setStyles(clusterStyles);
			
		}
		  
    </script>
	
	<style type="text/css">
	
		html, body {
		  height: 100%;
		  margin: 0;
		  padding: 0;
		  font-family:Courier,monospace;
		  background:#222;
		}
		
		.top{
			text-align:center;
			width:100%;
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
			width:100%;
			max-width:600px;
			margin:0 auto;
			text-align:center;
		}
		#map-canvas, #map_canvas {
		  height: 70%;
		}
		#infobox a { color:#fff; text-decoration:none; }
		#infobox a:hover { text-decoration:underline; }
		#bottom { 
			text-align:center;
			color: #fff;
			padding: 20px;
			font-size: 12px;
		}
	
	</style>
  
</head>
  
<body onload="initialize()">
	<div class="top">dynamic mapping with json</div>
	<div class="top top2"><div id="info"><img src="img/company_icon_red.png"><img src="img/focus_icon_magenta.png"><img src="img/focuswatch_icon.png"><img src="img/watch_icon_indigo.png"><img src="img/meeting_icon_red_2.png"></div><!--button onclick="UpdateRSS()">update</button--></div>
    <div id="map-canvas"></div>
	<div id="bottom">Size options (click then adjust zoom): <button onclick="clusterSty('red');">small</button><button onclick="clusterSty('red2');">large</button></div>

	
</body>
  
</html>