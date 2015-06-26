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
		var jsonmap, mc;
		var prop, coords, togf, togw, togn;
		var markers = [];
		
		// Array of focus and watch lists - must both be in order of ID (along with json file)
		var focusID = [3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25];
		var watchID = [15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40];
		
		
		function initialize() { 	// Initializing Map
			// find current window width to set zoom map accordingly (>1000px=3, >400px=2, <400px=1) */
			var mapDiv = document.getElementById("map-canvas");
			var cw = mapDiv.innerWidth;
			togf=document.getElementById('toggleFocus');
			togw=document.getElementById('toggleWatch');
			togn=document.getElementById('toggleNeither');
			
			switch (true) { 	
				case (cw >2000): cZoom = 4; break;
				case (cw >1000): cZoom = 3; break;
				case (cw >400): cZoom = 2; break;
				default: cZoom = 1; }
			var mapOptions = {
				zoom: 13, // cZoom,
				center: new google.maps.LatLng(37.403301,-121.996994),
				mapTypeId: google.maps.MapTypeId.ROADMAP 	}
			jsonmap = new google.maps.Map(mapDiv, mapOptions);
			
			// Set styles for map:			
			var mapStyles = [
			  { featureType: "poi.park",
				stylers: [ 	{ visibility: "on" }, { saturation: -44 }, { lightness: 36 } ]
			  },{ featureType: "administrative.neighborhood",
				stylers: [  { visibility: "on" }, { saturation: 5 }, { lightness: 44 } ]
			  },{ featureType: "water",
				stylers: [  { lightness: 15 }, { saturation: 19 } ]
			  },{ featureType: "transit", elementType: "labels.icon",
				stylers: [ { weight: 0.1 }, { visibility: "on" }, { lightness: 22 }, { saturation: -90 } ]
			  },{ featureType: "road",
				stylers: [ { gamma: 0.93 }, { lightness: 4 }, { hue: "#ffff00" }, { saturation: -26 } ]
			  },{ featureType: "poi",
				stylers: [ { lightness: 23 } ]
			  } ];
			jsonmap.setOptions({styles: mapStyles});
			placeMarkers();
			
			// setting up radio toggle callbacks
			$("#toggleFocus").click(function(){ placeMarkers(); });
			$("#toggleWatch").click(function(){ placeMarkers(); });
			$("#toggleNeither").click(function(){ placeMarkers(); });
			
			jQuery.ajaxSetup({cache:false});
			
		}
		
		function placeMarkers(focusin,watchin) {
			
			// console.log('focus: '+togf.checked+' / watch: '+togw.checked+' / neither: '+togn.checked);
			
			// Disable checkboxes while clearing/loading markers
			jQuery("input.map-filter").attr("disabled",true);
			
			// Clear current markers
			for (var x in markers) { markers[x].setMap(null); }
			if (mc) { 	if(typeof mc.clearMarkers == 'function'){  mc.clearMarkers();
						} else {  console.log('mc.clearMarkers() is not a function'); } }
			markers = [];
			
			// Populate new markers, show/hide loading gif
			jQuery('#map-loading-wrapper').fadeIn();
			jQuery.getJSON('company_map.json', function(data) {
				currentmarkers = markerPop(data);
				mc = new MarkerClusterer(jsonmap, currentmarkers, {gridSize: 40, maxZoom: 12} );
				var clusterStyles = [
				  { height: 50, width: 50, textColor: '#fff', fontWeight: 'bold', url: 'img/clustericon_rb_small.png' }, 
				  { height: 50, width: 50, textColor: '#eee', fontWeight: 'bold', url: 'img/clustericon_rb_medium.png' }, 
				  { height: 50, width: 50, textColor: '#eee', url: 'img/clustericon_rb_large.png' }, 
				];
				mc.setStyles(clusterStyles);
				jQuery('#map-loading-wrapper').fadeOut();
				
				// Enable checkboxes while after loading markers
				jQuery("input.map-filter").removeAttr("disabled");
			});
		}
		
		// function for populating markers 
		function markerPop (jsonObj) {
		
			var focusCounter = 0;
			var watchCounter = 0;
			
			for (var i = 0; i < jsonObj.features.length; i++) {
				
				cf = jsonObj.features[i];
				var latLng = new google.maps.LatLng(cf.geometry.coordinates[1], cf.geometry.coordinates[0]);
				
				// Incrementing list placeholder to check if company is on focus list of user or watching user
				while ( focusID[focusCounter] < cf.id ) { focusCounter++; }
				while ( watchID[watchCounter] < cf.id ) { watchCounter++; }
				
				// Set marker icon based on type (focusing on, watching me, both, or other)
				if (focusID[focusCounter] == cf.id) {
					if((watchID[watchCounter] == cf.id) && (togf.checked||togw.checked) ) { 
						markNow(cf, "img/focuswatch_icon.png", 		markers); 	// BOTH
					} else if ( togf.checked ) { 
						markNow(cf, "img/focus_icon_magenta.png", 	markers); 	// FOCUS
					}
				} else { if( (watchID[watchCounter] == cf.id) && togw.checked ) { 
						markNow(cf, "img/watch_icon_indigo.png", 	markers);	// WATCH
					} else if( togn.checked ) {
						markNow(cf, "img/company_icon_red.png",		markers);	// OTHER
					}
				}
			}
			
			function markNow(cf,markerIcon,markerstack) {
				// setIcon adjusts marker position (for 50x50px: 25,25 is center; 11,28 pushes image 14px east and 3px north)
				var setIcon = new google.maps.MarkerImage(markerIcon, null, new google.maps.Point(0,0), new google.maps.Point(11,28));
				var marker = new google.maps.Marker({ position: latLng, map: jsonmap, icon: setIcon });
				prop = cf.properties;
				
				if (prop.Street_Two == ""){
					iwcontent = "<a target='_blank' href='http://meetyl-green.herokuapp.com/company/"+prop.url_id+"'><strong>"+prop.Company+"</strong></a> ("+prop.Ticker+")<br>"+prop.Street_One+"<br>"+prop.City+", "+prop.State+prop.Region+" "+prop.Country+" "+prop.Zip_Code; //+"<br><em>@ "+coords[1]+", "+coords[0]+"</em>";
				} else {
					iwcontent = "<a target='_blank' href='http://meetyl-green.herokuapp.com/company/"+prop.url_id+"'><strong>"+prop.Company+"</strong></a> ("+prop.Ticker+")<br>"+prop.Street_One+"<br>"+prop.Street_Two+"<br>"+prop.City+", "+prop.State+prop.Region+" "+prop.Country+" "+prop.Zip_Code; //+"<br><em>@ "+coords[1]+", "+coords[0]+"</em>";
				}
				setInfo(marker,iwcontent);
				
				markerstack.push(marker);
			}
			
			return markers;
		
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
				
				// pointer orig from http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/examples/tipbox.gif')
				infobox = new InfoBox({
					 content: infoContent,
					 disableAutoPan: false,
					 maxWidth: 150,
					 pixelOffset: new google.maps.Size(-90, 0),
					 zIndex: null,
					 boxStyle: {
						background: "url('img/tipbox.gif') no-repeat -50px 0px",
						opacity: 0.9,
						width: "180px"
					},
					closeBoxMargin: "12px 4px 2px 2px",
					closeBoxURL: "img/infobox_close_black.gif",
					infoBoxClearance: new google.maps.Size(1, 1)
				});
				infobox.open(jsonmap, this);
			});
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
		#map-canvas-wrapper, #map_canvas {
			position:relative;
			height: 70%;
		}
		#map-canvas, #map-loading-wrapper {
			position:absolute;
			height: 100%; width: 100%;
			z-index:10;
			background: #fff;
		}
		#map-loading-wrapper { 
			background:rgba(255,255,255,.8);
			color: #fff;
			z-index:100;
		}
		#map-loading {
			position:absolute;
			margin: -64px 0 0 -64px;
			left:50%;
			top:50%;
			height:128px; width: 128px;
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

	<div class="top">dynamic mapping with json and filters</div>
	<div class="top top2"><!--div id="info"><img src="img/company_icon_red.png"><img src="img/focus_icon_magenta.png"><img src="img/focuswatch_icon.png"><img src="img/watch_icon_indigo.png"-->
		<input type="checkbox" id="toggleFocus" class="map-filter" checked> on my focus list 
		<input type="checkbox" id="toggleWatch" class="map-filter" checked> watching me
		<input type="checkbox" id="toggleNeither" class="map-filter" checked> neither focused or watching
	</div>
	<div id="map-canvas-wrapper">
		<div id="map-loading-wrapper"><div id="map-loading"><img src="img/meetyl_loader.gif" alt="loading..."></div></div>
		<div id="map-canvas"></div>
	</div>
	
</body>
  
</html>