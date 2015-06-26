<!DOCTYPE html>
<html> 
<head> 
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
	<title>corg > meetyl</title> 
	<script src="http://maps.google.com/maps/api/js?sensor=false" 
		  type="text/javascript"></script>
	
</head> 
<body>

<style>
body{
	background: #000;
	font-family: Courier, monospace;
	color: #aaa;
	padding: 30px;
	min-width: 260px;
}
a{
	color:#88f;
	text-decoration:none;
}
a:hover{
	color:#8f8;
	text-decoration:underline;
}
.title {
	width:100%;
	height:70px;
	font-size: 16px;
	text-align: center;
}
.logo {
	height:59px;
	width:200px;
}
.item_div, .border{
	position:static;
	margin:30px auto;
	width: 200px;
	text-align: center;
}
.item{
	height: 50px;
	font-size: 14px;
	// background: #222;
	padding: 20px;
	margin:auto;
}
.border{
	border-bottom:1px solid #833;
}

</style>

  <div class="title"><a href="www.meetyl.com/admin"><img class="logo" src="meetyl_logo.png"></img></a></div>
  <div class="title">corey's dev workshop</div>
  
  <div class="item_div"><a class="item" href="map/company_filter.php">google maps + filter</a></div>
  <div class="item_div"><a class="item" href="map/geo.php">google geoloc + drag</a></div>
  <div class="border"></div>
  <div class="item_div"><a class="item" href="map/metro.php">metro areas</a></div>
  <div class="item_div"><a class="item" href="map/add3.php">nominatim automator</a></div>
 

</body>
</html>