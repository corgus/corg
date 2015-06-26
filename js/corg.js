
var k = jQuery.noConflict();
var win = k(window); 
var btime = 1000;
var p_ease = ""; //"easeInOutQuad";
var b_ease = "easeOutQuad";

var col_light = 	"#eee"; // must match css spec for .port_click
var col_dark = 		"#999";
var col_lighten = 	"#ccc";
var col_darken = 	"#000";

// At page load
jQuery(document).ready(function(){
	// Bind click function to buttons
	k(".port_click").click( function(){ port_buttonclick(this) });  // , .port_header
	k('#nav_about').click( function(){ about_click() });
	k('.port_deets').attr('load','no');
});

function about_click() {
	about_div = k('#corg_about');
	if (about_div.height() < 170) {
		about_div.stop().animate({height:170},800,'easeOutBack');
	} else { about_div.stop().animate({height:0},800,'easeOutBack');
	}
}

function port_buttonclick(div) {
	
	var curr_port = k(div).parents(".port");
	var curr_deets = curr_port.find('.port_deets');
	var curr_id = curr_port.attr('id');
	
	if(curr_deets.attr('load') == 'yes') { 	// already loaded
		port_switch(div); 
	} else { 								// not loaded yet
		switch (curr_id) {
			case "port_splice": 	load_deets('port/splice/deets_splice.php');	break;
			case "port_mops": 		load_deets('port/mops/deets_mops.php'); 	break;
			case "port_uni": 		load_deets('port/uni/deets_uni.php'); 		break;
			case "port_dw": 		load_deets('port/dw/deets_dw.php'); 		break;
			case "port_pao": 		load_deets('port/pao/deets_pao_2.php'); 	break;
			case "port_qblik": 		load_deets('port/qblik/deets_qblik.php'); 	break;
			case "port_jaclyn": 	load_deets('port/jaclyn/deets_jaclyn.php'); break;
			case "port_chris": 		load_deets('port/chris/deets_chris.php'); 	break;
		}	
	}	
	
	// Loading respective detail file
	function load_deets(deets) {
		curr_deets.attr('load','yes');
		curr_deets.load(deets, function() { port_switch(div);  });	
	}
	
	// Button accordion animation
	function port_switch(div) {
		
		var header_clicked = (k(div).hasClass('port_header')||k(div).parent().hasClass('port_header'));  
			
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
		var bheight = 130;		// button height - compare with CSS .button_stuff
		var docwidth = jQuery(document).width();
			
		
		// show/hide buttons
		prev_butt		.animate({opacity:1, height:bheight}, btime)
						.click( function(){port_buttonclick(this) })
						.removeClass('hidden_button');

		if(!(header_clicked)){
					<!-- alert('header_clicked = '+header_clicked); -->
				curr_butt		.animate({opacity:0, height:0}, btime)
						.unbind('click')
						.addClass('hidden_button');
		}
						
		// hide/show port content
		// backgroundColor:bgprev ; backgroundColor: bgcurr
		prev_port		.animate({opacity:0 }, btime, p_ease)
						.removeClass('prev_port')
						.find(".port_deets")
							.slideUp(btime)
							.removeClass('curr_deets');
		prev_port		.find(".port_header").unbind('click');
		
		if(!(header_clicked)) {
		curr_port		.animate({opacity:1}, btime, p_ease, function(){slide_done(curr_port, header_clicked);})
						.addClass('prev_port')
						.find(".port_deets")
							.slideDown(btime)
							.addClass('curr_deets');
		<!-- curr_port		.find(".port_header").click( function(){port_buttonclick(this) }); -->
		
		auto_scroll();
		
		}
		
			// After accordion animation
		function slide_done(div, header_clicked) {
			
			// var header_clicked = k(div).hasClass('port_header');
			if (header_clicked) {
				alert('header_clicked');
			} else { 
				k(prev_port).fadeTo(0, 1); 
			}
			
			switch (curr_id) {
				case "port_splice": 	break;
				case "port_mops": 		break;
				case "port_uni": 		break;
				case "port_dw": 		break;
				case "port_pao": 		// bind parallax effect
										k('#pao_header_parallax').jparallax({},{},{},{xtravel:-1},{},{xtravel:-1},{});	
										break;
				case "port_qblik": 		break;
				case "port_jaclyn": 	break;
				case "port_chris": 		break;
			}	
		}
	
		// Scrolls to track accordion transition
		function auto_scroll() {
			
			win_h = win.height();
			curr_h = curr_port.height();
			prev_h = prev_port.height();
			win_scroll = win.scrollTop();
			curr_scroll = curr_port.offset().top;
			prev_scroll = prev_port.offset().top;
			
			if (prev_h) { // do nothing if there is no previous port open
				/* alert('win_h = '+win_h+
					  '\ncurr_h = '+curr_h+
					  '\nprev_h = '+prev_h+
					  '\nwin_scroll = '+win_scroll+
					  '\ncurr_scroll = '+curr_scroll+
					  '\nprev_scroll = '+prev_scroll);
				*/
				if (curr_scroll > prev_scroll) { // do nothing if current port is above previous
					var new_scroll = curr_scroll-prev_h;
					k("html, body").animate({ scrollTop: new_scroll },btime,p_ease);
				}
			}
			
		}
	}
}

win.scroll( function() {
});

k(function() {

	// LIGHT COLORED BUTTONS (darken font at hover)
	k(".port_click.butt_light").hover(
			// ON MOUSE OVER:
			function () {
				k(this)	.stop().animate({'color': col_darken },btime, b_ease)
							.siblings('.port_button_blur').stop()
								.animate({ opacity:0 }, btime, b_ease );
				k(this) .find('.pad30').stop().animate({'color': col_darken }, btime/2,b_ease)
							.css({'text-shadow':'0 0 5px #fff'})
			},
			// ON MOUSE OUT:
			function(){
				k(this)	.siblings('.port_button_blur').stop()
						.animate({ opacity: 1 }, btime, b_ease);		  
				k(this) .find('.pad30').stop().animate({'color': col_light },btime/2, b_ease)
							.css({'text-shadow':'none'});
							   
			}
	);
	
	// DARK COLORED BUTTONS (lighten font at hover)
	k(".port_click.butt_dark").hover(
			// ON MOUSE OVER:
			function () {
				k(this)	.siblings('.port_button_blur').stop()
						.animate({ opacity:0 }, btime, b_ease );
				k(this) .find('.pad30').stop().animate({'color': col_lighten},btime/2, b_ease)
							.css({'text-shadow':'0 0 5px #666'})
			},
			// ON MOUSE OUT:
			function(){
				k(this)	.siblings('.port_button_blur').stop()
						.animate({ opacity: 1 }, btime, b_ease);	
				k(this) .find('.pad30').stop().animate({'color': col_dark },btime/2, b_ease)
							.css('text-shadow','none')
							   
			}
	);

});
