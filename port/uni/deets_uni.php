<style>
.uni_page{
	display:none;
	border-top: 6px double #111;
	border-bottom: 6px double #111;
	
}
#uni_img_ucsb {
	width:350px;
	float:right;
} 
#uni_stack_box {
	clear:both;
	margin-bottom: 30px;
}
.uni_stack_page {
	width: 80px;
	height: 200px;
	float:left;
	background: #222;
	margin: 30px 0;
	z-index:10;
}
.uni_stack_page:nth-child(even) {
	margin-top: 40px;
}
.uni_stack_page click:hover {
	cursor:pointer;
}
.uni_stack_page {
	width: 200px;
	height: 200px;
	overflow: hidden;
}
#uni_p1 { background-position: 0px 0px; }
#uni_p2 { background-position: 0px 0px; }
#uni_p3 { background-position: 0px 0px; }
#uni_p4 { background-position: 0px 0px; }
#uni_p5 { background-position: 0px 0px; }
#uni_p6 { background-position: 0px 0px; }
#uni_p7 { background-position: 0px 0px; }

</style>


<div class="port_body dark">

	<div class="port_header row">
		<div class="port_title pad_h">selected works from ucsb</div>
        <div class="port_client pad_h"></div>
    </div>
    
    <div class="port_content row">
    	<!-- div class="uni_page"><iframe title="Inverted Pendulum Lab" src="port/uni/ECE147B_L3_Inverted-Pendulum.pdf" frameborder="1" scrolling="auto" height="500" width="100%" ></iframe></div -->
    </div>

	<div class="port_info_dark row ">
        <div class="port_info_text pad_h">
            <div class="port_left">
                <p>Below are various labs and projects completed in pursuit of a Bachelor's of Science degree in Electrical Engineering, at the University of California at Santa Barbara. <a target="_blank" href="http://engineering.ucsb.edu/news/415/">The ECE program</a> was ranked <a target="_blank" href="http://www.university-list.net/us/rank/univ-1058.htm">17th</a> in the nation in 2010. Challenging courses, great times, at a wonderful institution, in a beautiful location. Gauchos a'ooh!</p>
                <p>
                <a target="_blank" href="http://www.corg.us/port/uni/WRIT50E_PedGen-Product-Design.pdf">PedGen Bicycle Generator Proposal</a> | 
                <a target="_blank" href="http://www.corg.us/port/uni/ECE147A_L4_PID-Design.pdf">Proportional-Integral-Derivative (PID) Control</a> | 
                <a target="_blank" href="http://www.corg.us/port/uni/ECE147A_L5_Linear-Flex.pdf">Linear Flex System</a> | 
                <a target="_blank" href="http://www.corg.us/port/uni/ECE147B_L3_Inverted-Pendulum.pdf">Inverted Pendulum</a> | 
                <a target="_blank" href="http://www.corg.us/port/uni/ECE158_L4_Filtering.pdf">Signal Filtering</a> | 
                <a target="_blank" href="http://www.corg.us/port/uni/ECE158_L5_Windowing.pdf">DSP: Windowing</a> | 
                <a target="_blank" href="http://www.corg.us/port/uni/ENGR101_Green-Power.doc">Green Energy Project</a> | 
                </p>
            </div>
            <div class="port_right">
            	<p><img id="uni_img_ucsb" src="port/uni/ucsb.jpg" style="float:right"/> </p>
            </div>
        
        	<!--div id="uni_stack_box">
            	<div class="uni_stack_page"> <img alt="pg1"/> </div>
                <div class="uni_stack_page"> <img alt="pg2"/> </div>
                <div class="uni_stack_page"> <img alt="pg3"/> </div>
            </div -->
            <div class="port_footer pad_h">
                <div class="port_tech">MATLAB + Simulink + Solidworks</div>
                <div class="port_date">Graduated June 2010</div>
            </div>
        </div>
    </div>
</div>

<script>

	var k = jQuery.noConflict();
	
	k(function() {
	
		// LIGHT COLORED BUTTONS (darken font at hover)
		k(".uni_stack_page img").hover(
				// ON MOUSE OVER:
				function () {
					k('.uni_stack_page img').stop().css('z-index','10');
					k(this)	.stop().css('z-index','30');
				},
				// ON MOUSE OUT:
				function(){
					k(this)	.siblings('.port_button_blur').stop()
							.animate({ opacity: 1 }, btime, 'easeOutQuad');		  
					k(this) .stop().animate({'color': col_light },btime, 'easeOutQuad');
								   
				}
		);
		
		// DARK COLORED BUTTONS (lighten font at hover)
		k(".port_click.butt_dark").hover(
				// ON MOUSE OVER:
				function () {
					k(this)	.siblings('.port_button_blur').stop()
							.animate({ opacity:0 }, btime, 'easeOutQuad' );
					k(this) .stop().animate({'color': col_lighten },btime, 'easeOutQuad');
				},
				// ON MOUSE OUT:
				function(){
					k(this)	.siblings('.port_button_blur').stop()
							.animate({ opacity: 1 }, btime, 'easeOutQuad');	
					k(this) .stop().animate({'color': col_dark },btime, 'easeOutQuad');
								   
				}
		);
	
	});
</script>
