
var k = jQuery.noConflict();
var win = k(window); 
var btime = 500;

// At page load
jQuery(document).ready(function(){
	// Bind click function to buttons
	jQuery(".port_click").click( function(){ port_click(this) });
	
});

// Button clicking function
function port_click(div) {
	
	var curr_port = k(div).parents(".port");  	// clicked button port
	var prev_port = k('.prev_port');			// previously clicked port
	
	var curr_butt = curr_port.find('.button_stuff');
	var prev_butt = prev_port.find('.button_stuff');
	
	var curr_click = curr_butt.find('.port_click');
	var prev_click = prev_butt.find('.port_click');
	
	var curr_head = curr_port.find('.port_header');
	var prev_head = prev_port.find('.port_header');
	
	var curr_deets = k('.curr_deets');
	
	var bgprev = k('.prev_port').parent().css('backgroundColor');  // previous bg color
	var bgcurr = curr_port.parent().css('backgroundColor');		// current bg color
	var bheight = curr_butt.css('height');		// button height
	var docwidth = jQuery(document).width();
		
					
	// show/hide buttons
	prev_butt		.animate({opacity:1, height:bheight}, btime)
					.click( function(){port_click(this) })
					.removeClass('hidden_button');
	curr_butt		.animate({opacity:0, height:0}, btime)
					.unbind('click')
					.addClass('hidden_button');
					
	// hide/show port content
	prev_port		.animate({backgroundColor:bgprev}, btime)
					.removeClass('prev_port')
					.find(".port_deets")
						.slideUp(btime)
						.removeClass('curr_deets');
	curr_port		.animate({backgroundColor: bgcurr}, btime, function(){slide_done(div);})
					.addClass('prev_port')
					.find(".port_deets")
						.slideDown(btime)
						.addClass('curr_deets');
	
	// hide/show client details
	prev_port		.find(".port_header")
						.animate({opacity:0},btime);
	curr_port		.find(".port_header")
						.animate({opacity:1},btime);
	prev_port		.find(".butt_title")
						.animate({opacity:1},btime);
	curr_port		.find(".butt_title")
						.animate({opacity:0},btime);
						
	// bind/unbind click functionality from header
	prev_head		.click( function(){ port_click(this) })
					.removeClass('hidden_button');
	curr_head		.unbind('click')
					.addClass('hidden_button');
	

}
	
function slide_done(div) {
	
	// pao parallax header:
	jQuery('#header_parallax').jparallax({},{},{},{xtravel:-1},{},{xtravel:-1},{});		
	
}

win.scroll( function() {
					 /*
	var y = win.scrollTop();
	
	if (y > klogo) {
		if (!LOGOD) {
			// k('#main_nav_logo').addClass("visible_logo");
			k('#main_nav_logo>a>img').animate({
					width: '170px',
					opacity: 1
					},300);
			LOGOD = true;
		}
	} else {
		if (LOGOD) {
			// k('#main_nav_logo').removeClass("visible_logo");
			k('#main_nav_logo>a>img').animate({
					width: '0px',
					opacity: 0
					},200);
			LOGOD = false;					
		}
	}
	
	if (y > ksnap) {
		if (!SNAPPED) {
			k('#main_nav_div').addClass("sticky_main_nav");
			SNAPPED = true;
		}
	} else {
		if (SNAPPED) {
			k('#main_nav_div').removeClass("sticky_main_nav");
			SNAPPED = false;					
		}
	}
	*/
});

k(function() {
	
	var col_light = "#eee"; // must match css spec for .port_click
	var col_dark = "#999";
	var col_lighten = "#ccc";
	var col_darken = "333";

	// LIGHT COLORED BUTTONS (darken font at hover)
	k(".port_click.butt_light").hover(
			// ON MOUSE OVER:
			function () {
				k(this).stop().animate({'color': col_darken },btime, 'easeOutQuad')
					.siblings('.port_button_blur').stop()
						.animate({ opacity:0 }, btime, 'easeOutQuad' );
			},
			// ON MOUSE OUT:
			function(){
				k(this).stop().animate({'color': col_light },btime, 'easeOutQuad')
					.siblings('.port_button_blur').stop()
						.animate({ opacity: 1 }, btime, 'easeOutQuad');		   
							   
			}
	);
	
	// DARK COLORED BUTTONS (lighten font at hover)
	k(".port_click.butt_dark").hover(
			// ON MOUSE OVER:
			function () {
				k(this).stop().animate({'color': col_lighten },btime, 'easeOutQuad')
					.siblings('.port_button_blur').stop()
					.animate({ opacity:0 }, btime, 'easeOutQuad' );
			},
			// ON MOUSE OUT:
			function(){
				k(this).stop().animate({'color': col_dark },btime, 'easeOutQuad')
					.siblings('.port_button_blur').stop()
						.animate({ opacity: 1 }, btime, 'easeOutQuad');		   
							   
			}
	);
		   
/*	// OPACITY OF BUTTON SET TO 50%
	k(".shadow").prepend('<span class="roll"></span>');
	k(".roll").css("opacity","0");

	k(".roll").hover(function () {
		// ON MOUSE OVER, SET OPACITY TO 100%
		k(this).stop().animate({ opacity: 0.3 }, "fast");
		},
		// ON MOUSE OUT
		function () {
			// SET OPACITY BACK TO 50%
			k(this).stop().animate({ opacity: 0 }, "fast");
	});
*/	

});
