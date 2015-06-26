
<!DOCTYPE html>
<html><head>
<title>corg geoloc experiment</title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<style>html {overflow:visible};</style>

</head>

<body style='border:0px;margin:0px'>

<div style="width:100%; position:fixed; height:40px; top:0px; padding:15px; background-color: #faa;
		-moz-box-shadow: 0 0 4px 3px #000; -webkit-box-shadow: 0 0 4px 3px #000; box-shadow: 0 0 4px 3px #000;">
	<div id="stat1" style="float:left; width:200px;">[num, Ticker, Address]</div>
	<div id="stat2" style="float:left; width:70px; text-align:right; "></div>
	<div id="stat3" style="float:left; width:100px;" ></div>
	<div id="stat4" ></div>
</div>

<div id='company_table' style="width:80%; padding-top:100px;">

<?php
echo "<table>\n\n";
$f = fopen("company_up_v1.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
            echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
		echo "<td class='lat'>" . lat . "</td>";
		echo "<td class='long'>" . long . "</td>";
        echo "<tr>\n";
}

fclose($f);
?>
</div>

</body></html>

<script>
	
	var rowCount = jQuery('#company_table tr').length / 2; // halved to accomodate for auto-inserted rows
	jQuery('#stat3').html('/ '+rowCount);
	jQuery(document).ready(function() {
		
	var botRange = 3500*2;
	var topRange = 3769*2;
	var i = botRange;
	var curAtts = {};
	var goNom = 0;

	function geoLoop() { //  create a loop function
		setTimeout(function () {
			
			var newAddress = 'san+fran';
			var newlat = '___';
			var newlong = '___';

			//    Set up query
			var curRow = $('#company_table tr').eq(i);
			var curAddress = curRow.find('td').eq(2).html();
			//$('#stat4').html('typeof curAtts.getNamedItem is ' + (typeof curAtts.getNamedItem));
			
			if (typeof curAddress != 'undefined') {
				var newAddress = curAddress.split(' ').join('+');
				$('#stat4').html('newAddress = ' + (newAddress));
				var goNom = 1;
			}
			
					
			var nomQuery = "http://nominatim.openstreetmap.org/search?q=" + newAddress + "&format=xml";

			function createCORSRequest(method, url) {
				var xhr = new XMLHttpRequest();
				if ("withCredentials" in xhr) {
					xhr.open(method, url, true);
				} else if (typeof XDomainRequest != "undefined") {
					xhr = new XDomainRequest();
					xhr.open(method, url);
				} else {
					xhr = null;
				}
				return xhr;
			}

			if (goNom == 1) {
				var geoReq = new XMLHttpRequest();
				geoReq.onload = reqListener;
				geoReq.open("get", nomQuery, true);
				geoReq.send(null);
				goNom = 0;
			}
			
			//  Send Query to http://nominatim.openstreetmap.org
			function reqListener() {
				//  console.log(this.responseText);
				curXml = this.responseXML;
				
				 if (typeof curXml.firstChild.children.item(0).attributes === 'object') {
				    curAtts = curXml.firstChild.children.item(0).attributes;
					// setTimeout(alert('typeof curAtts is ' + (typeof curAtts)), 500);
				} else {
					curAtts = {};
				}
			}
			
			setTimeout("",200);
			
			if (typeof curAtts.getNamedItem === 'function') {
				newlat = curAtts.getNamedItem("lat").value;
				newlon = curAtts.getNamedItem("lon").value;
				$('#company_table tr').eq(r).find('.lat').html(newlat);
				$('#company_table tr').eq(r).find('.long').html(newlon);
			} 
			
			r = Math.max(i,0);
			
			i++; //  increment the counter and display
			$('#stat2').html(i /2 ); 	// halved to accomodate for auto-inserted rows
			if (i < topRange) { //  if the counter < this, callback to loop again
				geoLoop();
			}

		}, 1500); //  delay 1500ms between iterations
	}

	geoLoop(); //  start the loop

	});

</script>

<!-- http://jsfiddle.net/PBAnD/3/ -->