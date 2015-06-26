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
      <title>Home page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">

      <!-- Start of Woopra Code -->
	<script type="text/javascript">
	function woopraReady(tracker) {
		tracker.setDomain('corg.us');
		tracker.setIdleTimeout(1800000);
 
		// Make sure you add the visitor properties before the track() function.
		tracker.addVisitorProperty('name', 'some name');
		tracker.addVisitorProperty('email', 'some email');
		tracker.addVisitorProperty('company', 'corg company');
 
		// Send custom events using the pushEvent function.
		tracker.pushEvent({
			name: 'CorgEvent',
			amount: 'amount###'
		});
		tracker.pushEvent({
			name: 'login',
			media: 'mymedia'
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
<h2>Home Page</h2>
Welcome back <?= $fgmembersite->UserFullName(); ?>!

<p><a href='change-pwd.php'>Change password</a></p>

<p><a href='access-controlled.php'>A sample 'members-only' page</a></p>
<br><br><br>
<p><a href='logout.php'>Logout</a></p>
</div>
</body>
</html>
			