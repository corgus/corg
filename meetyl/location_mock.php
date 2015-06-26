<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Mockup</title>
	
	<style type="text/css">
	
		html, body {
		  height: 100%;
		  margin: 0;
		  padding: 0;
		  font-family:Courier,monospace;
		  background:#000;
		}
		
		#bg{
			position:absolute;
			width: 974px; height:625px;
			background: url('img/dashboard_loc.png');
		}
		#trans{
			display:none;
			position:absolute;
			margin-left:597px;
			margin-top:350px;
			width:256px;
			height:26px;
			// background: rgba(60,60,100,.5);
			padding:12px 13px 12px 18px;
		}
		#title{
			display:none;
			position:absolute;
			font-size: 22px;
			color:#fff;
			font-family:Arial;
			// text-shadow: 0px 0px 3px #000;
			text-shadow: 0px 0px 3px #000, 0px 0px 3px #000;
		}
		#other{
			margin-left:980px;
			position:absolute;
		}
		a.nav{
			position:relative;
		}
	
	</style>
  
</head>
  
<body>
	<div id="bg"></div>
	<div id="trans"><div id="title">Home / Boston</div></div>
	<div id="other">
		<a class="nav" href="./location_mock.php"><button>Original</button></a></br>
		<a class="nav" href="./location_mock_1.php"><button>Blue</button></a></br>
		<a class="nav" href="./location_mock_2.php"><button>Shadow</button></a></br>
	</div>
	
	
</body>
  
</html>