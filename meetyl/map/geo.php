<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Google Maps JavaScript API v3 Example: Geocoding Simple</title>
    <link href="/maps/documentation/javascript/examples/default.css" rel="stylesheet">
	<!--JQUERY-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
	<!--GOOGLE MAPS-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	
    <script>
		var geocoder;
		var map;
		function initialize() {
			var latlng = new google.maps.LatLng(37.826684,-122.423079);
			var mapOptions = {
				zoom: 16,
				center: latlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
			
			/* BIND TO 'ENTER' KEYCODE */
			$('#address').bind('keypress', function(e) {
				if(e.keyCode==13){ codeAddress(); }
			});
		
		}

		function codeAddress() {
			var address = document.getElementById('address').value;
			geocoder = new google.maps.Geocoder();
			geocoder.geocode( { 'address': address}, 
				function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						resultAll = results[0];
						resultLoc = results[0].geometry.location;
						map.setCenter(resultLoc);
						displayLatLon(resultLoc.lat(5),resultLoc.lng(5));
						displayGeo(resultAll);
						
						// Placing Marker
						var marker = new google.maps.Marker({
							map: map,
							draggable: true,
							animation: google.maps.Animation.DROP,
							position: results[0].geometry.location
						});
						
						// Adding Listener to marker, to output new lat/lon coordinates
						google.maps.event.addListener(marker, 'dragend', function() {
							geocodePosition(marker.getPosition());
						});
						function geocodePosition(pos) {
							geocoder = new google.maps.Geocoder();
							geocoder.geocode ({ latLng: pos }, 
								function(results, status) {
									if (status == google.maps.GeocoderStatus.OK)  { 
										resultAll = results[0];
										resultLoc = results[0].geometry.location;
										displayLatLon(resultLoc.lat(5),resultLoc.lng(5)); 
										displayGeo(resultAll);
									} else {
										displayLatLon('error',status);
									}
								}
							);
						}
					} else {
						displayLatLon('error',status);
					}
			});
		}
	  
		function displayLatLon (lat,lon) {
			if (lat=='error') {
				jQuery("#latlong").html('Geocode Failed! '+lon);
			} else {
				jQuery("#latlong").html(function() {
					var latlong = lat + ' , ' + lon;
					return '<p>' + latlong + '</p>';
				});
			}
		}
		
		function displayGeo (input) {
			// var curkey = Object.keys(input);
			//for(var curkey in input) {
			//	jQuery("#right_side").append(" /// "+input[curkey]);
			//}
				jQuery("#right_side").html(function() { 
					return '<p>' + pointInfo(input) + '</p>'; 
				});
		}
		
		function pointInfo(obj) { 
				var result = "";
				for (var i in obj) { 
					if (obj.hasOwnProperty(i)) { 
						if (typeof obj[i] == 'object')	{
							result += "<br> > "+pointInfo(obj[i]);
						} else {
							result +=  obj[i] + " . "; 
						}
					}
				}
					
				return result; 
		} 
		
    </script>
	
	<style>
	body {
		background: #000;
		font-family: Courier, monospace;
	}
	#content_wrapper{
		margin: 0 auto;
		position:relative;
		width:1000px;
		height: 500px;
		background: #070707;
	}
	.top{
		text-align:center;
		width:100%;
		color: #ddd;
		padding: 30px 0 30px 0;
		font-size: 20px;
	}
	.top2{
		position:relative;
		color: #e55;
		padding: 0 0 30px 0;
		font-size: 12px;
		margin: 0 auto;
		text-align: center;
	}
	#map_canvas {
		height: 300px; width:400px;
		margin: 0 auto;
	}
	#geoing {
		width: 400px;
		margin: 50px;
		text-align: center;
		padding: 10px 0 10px 0;
		// background: #222;
	}
	#address  {
		width: 300px;
	}
	#latlong {
		color: #bbb;
	}
	
	#right_side {
		float:right;
		position:relative;
		display: inline-block;
		width: 460px;
		height: 500px;
		margin: 0px 20px ;
		color: #bbb;
		overflow:auto;
		font-size: 11px;
	}
	</style>
	
  </head>
  
  <body onload="initialize()">
  
	<div id="content_wrapper">
		<div class="top">adjustable geocoding with google</div>
		<div class="top2">click-drag to adjust marker. </br>descriptor follows name: > long_name . short_name . > descriptor . </div>
		
		<div id="right_side">>></div>
		<div id="map_canvas" style="height:300px;"></div>
		
		<div id="geoing">
		  <input id="address" type="textbox" value="Transamerica Pyramid, San Francisco">
		  <input id="zap" type="button" value="Geocode" onclick="codeAddress()">
		  <!-- div id="latlong"></div -->
		</div>
	</div>
	
	<div id="add_incl">
		<?php /* include_once('add.php');  */?>
	</div>
	
  </body>
</html>	