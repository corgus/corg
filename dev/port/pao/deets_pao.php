
<style>

#pao_parallax{
	position:relative;
	margin:0; padding:0;
	left:0; right:0;
	width:100%;height:100%;
	z-index:1;
	background-color:#000;	
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	overflow:hidden;
	}

#pao_header_box{ width:100%; }
#pao_header{
	margin:0 auto;
	padding:10px;
	width:100%; min-width:200px; max-width:1000px;
	height: 200px;
}
#pao_header_parallax{
	position:absolute; 
	width:1000px; height:220px;  //220px;
	overflow:hidden;
}
#pao_header_parallax img{
	position:absolute;
}

#pao_etch_container{
	width:1400px; height:250px;
}

.pao_etch{
	position:absolute;
	width:100px; height:40px;
	overflow:hidden;
	background-image:url(port/pao/img/etch2.png);
	background-repeat:none;
}
.pao_etch:hover{cursor:pointer;}
.pao_etch a{
	display:block;
	width:100px; height:40px;
}

#pao_goHome{ 		margin-top:120px; margin-left:315px;
				background-position: 0 0;}
#pao_goHome:hover{ 	background-position:100px 0}

#pao_goArt{  		margin-top: 70px; margin-left:680px;
				background-position: 0px -40px;}
#pao_goArt:hover{ 	background-position:100px -40px;}

#pao_goContact{ 	margin-top: 100px; margin-left:950px;
				background-position: 0px -80px;}
#pao_goContact:hover{background-position:100px -80px;}

#pao_frame_1{	position: absolute;
			top: 0px; left: 0px; height:0px; width: 100%;	}
#pao_frame_2{ 	display: block; height:0px;
			width:1000px; margin:0 auto;	}
#pao_frame_3{ 	display: block;
			width:1000px; margin:180px auto 0 auto; 	}
#pao_head_frame_top, #pao_head_frame_left, #pao_head_frame_right, #pao_head_frame_bottom{
	overflow:hidden;
	background-image:url(port/pao/img/dark_tree_framev2.png);
	background-repeat: no-repeat;	
}
#pao_head_frame_top{
	height: 30px; width: 900px;
	margin-left:60px;
	background-position:-60px 0px;
}
#pao_head_frame_left{
	height:230px; width:60px;
}
#pao_head_frame_right{
	height:230px; width:60px;
	margin-left:960px;
	background-position: -960px 0px;
}
#pao_head_frame_bottom{
	height: 80px; width: 900px;
	margin-left:60px;
	background-position:-60px -180px;
}
#pao_sig_box img{
	float:right;
}

</style>

<!--/////////////////////////////////////////////////////////////////////////////////////-->

<div class="port_body dark">

	<div class="port_header row">
		<div class="port_title pad_h">paonow.com parallax header</div>
        <div class="port_client pad_h">client : Pauline Aillet</div>
    </div>
    
	<div id="pao_parallax">
		<div id="pao_header_box"> <div id="pao_header">  <div id="pao_header_parallax">
            <img src="port/pao/img/dark_tree_layer3v2.png" alt="" style="width:1100px; height:230px;"/>
            <img src="port/pao/img/dark_tree_layer2v2.png" alt="" style="width:1250px; height:240px;"/>
            <img src="port/pao/img/dark_tree_fog2.png" alt="" style="width:1250px; height:240px;"/>
            <img src="port/pao/img/dark_tree_layer1v3.png" alt="" style="width:1400px; height:250px;"/>
            <img src="port/pao/img/dark_tree_fog1.png" alt="" style="width:1250px; height:250px;"/>
            <div id="pao_etch_container">   
                <div id="pao_goHome" class="pao_etch"><a href="index.php"></a></div>
                <div id="pao_goArt" class="pao_etch"><a href="art.php"></a></div>
                <div id="pao_goContact" class="pao_etch"><a href="contact.php"></a></div>
            </div>
		</div></div></div>
        <div id="pao_frame_1"><div id="pao_frame_2"><div id="pao_head_frame_top"></div></div></div>
        <div id="pao_frame_1"><div id="pao_frame_2"><div id="pao_head_frame_left"></div></div></div>
        <div id="pao_frame_1"><div id="pao_frame_2"><div id="pao_head_frame_right"></div></div></div>
        <div id="pao_frame_1"><div id="pao_frame_3"><div id="pao_head_frame_bottom"></div></div></div>
	</div>
    

	<div class="port_info_dark row ">
        <div class="port_info_text pad_h">
            <div class="port_left">
                <p>French artist Pauline Aillet wanted a website to display some sketches and paintings, to supplement art school applications. To veer from the masses of typical straight-lined digital portfolios, I sketched and implemented this interactive parallax-style header with clickable navigation, in the initial design of her site. It was inspired by her favorite game <a href="#" class="tooltip black">LIMBO<span><img class="callout" src="img/callout_black.gif" /><img height='200px' width='300px' src='port/pao/img/LIMBO.jpg' /></span></a>. Her signature was animated with Adobe Flash and was displayed while the site was loading.</p>
            </div>
            <div class="port_right">
            	<div id="pao_sig_box"> <img float="right" src="port/pao/pao_sig.gif" /></div>
            </div>
        
            <div class="port_footer pad_h">
                <div class="port_tech">JavaScript + Photoshop + Flash</div>
                <div class="port_date">October 2011</div>
            </div>
        
        </div>
    </div>
</div>