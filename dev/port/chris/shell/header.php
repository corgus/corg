<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chris Schunk</title>
<base href="http://www.chrisschunk.com" > <!-- Change if testing with local server -->
<link href="styles/chris-style.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js'></script>
<link rel="shortcut icon" href="/scrib.ico?" type="image/x-icon" />

</head>

<body>

<script>
function changeClass(elementID, newClass, key) {
	if (key=='class'){
		var $element = document.getElementsByClassName(elementID);
	} else{
		var $element = document.getElementById(elementID);
	}
	
	if($element){
		$element.setAttribute("class", newClass); //For Most Browsers
		$element.setAttribute("className", newClass); //For IE; else harmless
	}
}
</script>

<div id="main"></div>

<div id="header_box">
    <div id="header">
        <div>
        <div id="top_name">
            <b><a href="index.php">Christoffer Schunk</a></b> <br/>
            <div id="top_name_2">COMPOSER / PERFORMER / TEACHER</div>
        </div>
        </div>
    </div>
</div>

<div id="sheet">

    <div class="abs1"><div id="menu_box">
    <div id="menu">
        <div id="mBio" class="menu_item" ><a href="bio.php">bio ..........................</a></div>
        <div id="mNews" class="menu_item" ><a href="news/index.php">news ..........................</a></div>
        <div id="mCalendar" class="menu_item" ><a href="calendar.php">calendar ......................</a></div>
        <div id="mMusic" class="menu_item" ><a href="music.php">music .........................</a></div>
            <div  class="menu_sub" ><a href="music/stage_works.php">.. stage works ..............</a></div>
            <div class="menu_sub" ><a href="music/concert_works.php">.. concert works ............</a></div>
            <div class="menu_sub" ><a href="music/electronic.php">.. electronic ...............</a></div>
            <div class="menu_sub" ><a href="music/film.php">.. film .....................</a></div>
            <div class="menu_sub" ><a href="music/folk.php">.. folk .....................</a></div>
        
        <div id="mResume" class="menu_item" ><a href="resume.php">résumé ........................</a></div>
        <div id="mContact" class="menu_item" ><a href="contact.php">contact .......................</a></div>
    
    </div>
    </div></div>
    
    <!--div id="content_box"><div id="content"-->