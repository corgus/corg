<!-- *** note: need jquery.jparallax.js link in header *** -->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>pauline aillet</title>
<!-- link href="paonow_style.css" rel="stylesheet" type="text/css" / -->
<!-- link href="corg_style.css" rel="stylesheet" type="text/css" / -->

<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js'></script>
<script type="text/javascript" src="../../js/jquery.jparallax.js"></script>

</head>


<body>



<style>



/*////////////////////////////////////////////////////////////////*/

#pao_body1, #pao_body2{
	margin:0; padding:0;
	left:0; right:0;
	width:100%;
	z-index:1;
	background-color:#000;	
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	overflow:hidden;
	}
#pao_body2{
  position:relative;
}
	
.center{
	margin:0 auto;
}

#header_box,#footer_box{
	width:100%;
}
#header, #footer, #sheet{
	margin:0 auto;
	padding:10px;
	width:100%; min-width:200px; max-width:1000px;
}
#header{ height:200px;
	padding-top:10px;}
#footer{ height:20px; margin-top:30px; color:#222; text-align:center; font-size:11px;
	min-width:1000px;}
#footer a{text-decoration:none; color:#444}
#footer a:hover{color:#CCC;}


#header_parallax{
	
	position:relative; 
	width:1000px; height:220px; 
	overflow:hidden;
}

#header_parallax img{
	position:absolute;
}

#etch_container{
	width:1400px; height:250px;
}

div.etch{
	position:absolute;
	width:100px; height:40px;
	overflow:hidden;
	background-image:url(img/etch2.png);
	background-repeat:none;
}
div.etch a{
	display:block;
	width:100px; height:40px;
}

#goHome{ margin-top:120px; margin-left:315px;
	background-position: 0 0;}
#goHome:hover{background-position:100px 0}

#goArt{ margin-top: 70px; margin-left:680px;
		background-position: 0px -40px;}
#goArt:hover{background-position:100px -40px;}

#goContact{ margin-top: 100px; margin-left:950px;
		background-position: 0px -80px;}
#goContact:hover{background-position:100px -80px;}

div.etch:hover{cursor:pointer;}
#sig:hover{}

#frame_1{
	position: absolute;
	top: 0px; left: 0px; height:0px; width: 100%;
}
#frame_2{
	display: block; height:0px;
	width:1000px; margin:0 auto;
}
#frame_3{
	display: block;
	width:1000px; margin:180px auto 0 auto;
}
#head_frame_top, #head_frame_left, #head_frame_right, #head_frame_bottom{
	overflow:hidden;
	background-image:url(img/dark_tree_framev2.png);
	background-repeat: no-repeat;
	
}
#head_frame_top{
	height: 30px; width: 900px;
	margin-left:60px;
	background-position:-60px 0px;
}
#head_frame_left{
	height:230px; width:60px;
}
#head_frame_right{
	height:230px; width:60px;
	margin-left:960px;
	background-position: -960px 0px;
}
#head_frame_bottom{
	height: 80px; width: 900px;
	margin-left:60px;
	background-position:-60px -180px;
}

.box{
	width:100px; height:100px; background-color:#099;
}

.content{
	color:#666; text-align:center; margin:20px;
	min-width:1000px;
}

</style>

<script>
jQuery(document).ready(function(){
			jQuery('#header_parallax').jparallax({},{},{},{xtravel:-1},{},{xtravel:-1},{});		
});

</script>

<div id="pao_body1"><div id="pao_body2">
  <div id="header_box">
    <div id="header">
      <div id="header_parallax">

        <!-- background: color, image, repeat, attachment, position -->

        <img src="img/dark_tree_layer3v2.png" alt="" style="width:1100px; height:230px;"/>
          <img src="img/dark_tree_layer2v2.png" alt="" style="width:1250px; height:240px;"/>
          <img src="img/dark_tree_fog2.png" alt="" style="width:1250px; height:240px;"/>
        <img src="img/dark_tree_layer1v3.png" alt="" style="width:1400px; height:250px;"/>
          <img src="img/dark_tree_fog1.png" alt="" style="width:1250px; height:250px;"/>
          <div id="etch_container">   
              <div id="goHome" class="etch"><a href="#"></a></div>
              <div id="goArt" class="etch"><a href="#"></a></div>
              <div id="goContact" class="etch"><a href="#"></a></div>
          </div>

  </div></div></div>

  <div id="frame_1"><div id="frame_2"><div id="head_frame_top"></div></div></div>
  <div id="frame_1"><div id="frame_2"><div id="head_frame_left"></div></div></div>
  <div id="frame_1"><div id="frame_2"><div id="head_frame_right"></div></div></div>
  <div id="frame_1"><div id="frame_3"><div id="head_frame_bottom"></div></div></div>
  
</div></div>

<script>
  jQuery('#goHome').click(function(){alert('"home" clicked!')});
  jQuery('#goArt').click(function(){alert('"art" clicked!')});
  jQuery('#goContact').click(function(){alert('"contact" clicked!')});
</script>


</body>
</html>