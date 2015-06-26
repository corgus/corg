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

a:hover {
	cursor: pointer;
}

.blue-button {
	// -moz-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	// -webkit-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	// box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	-webkit-border-radius:6px;
	-moz-border-radius:6px;
	border-radius:6px;
	text-indent:0;
	display:block;
	font-family:Arial;
	font-size:15px;
	/* font-weight:bold; */
	font-style:normal;
	height:30px;
	line-height:29px;
	width:100px;
	text-decoration:none;
	text-align:center;
	box-sizing:border-box;
	-moz-box-sizing:border-box;
}
.blue-button:active {
	position:relative;
	top:1px;
}
.blue-button.blue-regular {
	color:#ffffff;
	text-shadow:1px 1px 2px #528ecc;
	border:1px solid #7788aa;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5) );
	background:-moz-linear-gradient( center top, #79bbff 5%, #378de5 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5');
	background-color:#79bbff;
}
.blue-button.blue-regular:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #378de5), color-stop(1, #79bbff) );
	background:-moz-linear-gradient( center top, #378de5 5%, #79bbff 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#378de5', endColorstr='#79bbff');
	background-color:#378de5;
}
.blue-button.blue-dark {
	color:#ffffff;
	text-shadow:1px 1px 2px #528ecc;
	border:1px solid #445577;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #3488db), color-stop(1, #235587) );
	background:-moz-linear-gradient( center top, #3488db 5%, #235587 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#3488db', endColorstr='#235587');
	background-color:#3488db;
}
.blue-button.blue-dark:hover{
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #235587), color-stop(1, #3488db) );
	background:-moz-linear-gradient( center top, #235587 5%, #3488db 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#235587', endColorstr='#3488db');
	background-color:#235587;
}
.blue-button.blue-light {
	color: #666666;
	text-shadow:1px 1px 2px #ffffff;
	border:1px solid #bbddee;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #cceeff), color-stop(1, #aaddff) );
	background:-moz-linear-gradient( center top, #cceeff 5%, #aaddff 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#cceeff', endColorstr='#aaddff');
	background-color:#cceeff;
}
.blue-button.blue-light:hover{
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #aaddff), color-stop(1, #cceeff) );
	background:-moz-linear-gradient( center top, #aaddff 5%, #cceeff 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#aaddee', endColorstr='#cceeff');
	background-color:#cceeff;
}
.blue-button.gray {
	color: #666666;
	text-shadow:1px 1px 2px #ffffff;
	border:1px solid #dddddd;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
	background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
	background-color:#ededed;
}
.blue-button.gray:hover{
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
	background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
	background-color:#dfdfdf;
}
</style>

<a class="blue-button blue-light">Light Blue</a></br>
<a class="blue-button blue-light"></a></br></br>
<a class="blue-button blue-regular">Regular Blue</a></br>
<a class="blue-button blue-regular"></a></br></br>
<a class="blue-button blue-dark">Dark Blue</a></br>
<a class="blue-button blue-dark"></a></br></br>
<a class="blue-button gray">Light Gray</a></br>
<a class="blue-button gray"></a></br>

</body>

</html>