<div class="menu_item" onclick="goTo('#home');"> home</div>
<div class="menu_item" onclick="goTo('#bio');">bio</div>
<div class="menu_item" onclick="goTo('#teach');">teach</div>
<div class="menu_item" onclick="goTo('#contact');">contact</div>

<script>

function goTo(target){
	//document.getElementById('content').innerHTML="'"+target+"'";
	$('#content').children('div.page').fadeOut(700,'easeOutCirc');
	//animate({opacity:0},1000,'easeInOutBounce');
	$('#content').find("'"+target+"'").fadeIn(700,'easeOutCirc');
	//animate({opacity:1},1000,'easeInOutBounce');
}

function fadeOut(div){
	$(div).fadeOut(200);
}
function fadeIn(div){
	//$(target).html($(content).html);
	$(target).fadeIn(200);
	
}
</script>