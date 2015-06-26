<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
	<title>An Access Controlled Page</title>
	<link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">


	<script type="text/javascript">

		var cur_id_user = <?= $fgmembersite->UserID() ?>;
		var _gaq = _gaq || [];
		
		_gaq.push(['_setAccount', 'UA-29073238-1']);
		_gaq.push(['_setDomainName', 'corg.us/user']); */
		_gaq.push(['_setCustomVar',
			1,					// This custom var is set to slot #1.  Required parameter.
			'id_user',			// The name acts as a kind of category for the user activity.  Required parameter.
			<?= $fgmembersite->UserID() ?>,	// This value of the custom variable.  Required parameter.
			2      				// Sets the scope to session-level.  Optional parameter.
		]);   
		_gaq.push(['_trackEvent(category, action, opt_label, opt_value, opt_noninteraction)
		_gaq.push(['_trackPageview']);
		
		// alert(_gaq);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
		
		

	</script>
	
	
		<!-- Start of Woopra Code -->
	<script type="text/javascript">
	function woopraReady(tracker) {
		tracker.setDomain('corg.us');
		tracker.setIdleTimeout(1800000);

		// Make sure you add the visitor properties before the track() function.
		tracker.addVisitorProperty('name', 'some name');
		tracker.addVisitorProperty('email', 'some email');
		tracker.addVisitorProperty('company', 'corg company');

		// Send a custom event using the pushEvent function.
		tracker.pushEvent({
			name: 'CorgEvent',
			amount: 'amount###'
		});
		
		tracker.track();
		return false;
	}
	(function() {
		var wsc = document.createElement('script');
		wsc.src = document.location.protocol+'//static.woopra.com/js/woopra.js';
		wsc.type = 'text/javascript';
		wsc.async = true;
		var ssc = document.getElementsByTagName('script')[0];
		ssc.parentNode.insertBefore(wsc, ssc);
	})();
	</script>
	<!-- End of Woopra Code -->

		
		
	  
	  
</head>
<body>
<div id='fg_membersite_content'>
<h2>This is an Access Controlled Page</h2>
This page can be accessed after logging in only.
<p>
Logged in as: <?= $fgmembersite->UserFullName() ?> with an id_user of <?= $fgmembersite->UserID() ?>
</p>
<p>
Sent log-in data as 
</p>
<p>
<a href='login-home.php'>Home</a>
</p>
</div>
</body>

</html>
