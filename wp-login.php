<?php

if(array_key_exists("redirect_to", $_POST)) { header("Location: " . $_POST['redirect_to']); exit(); }

$host = $_SERVER['HTTP_HOST'];

?><!DOCTYPE html>
<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="en-US">
	<![endif]-->
<!--[if !(IE 8) ]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US"><!--<![endif]--><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Wordpress ‹ Log In</title>
	<script type="text/javascript" src="wp-admin/load-scripts.php"></script>
<link rel="stylesheet" href="wp-admin/load-styles.css" type="text/css" media="all">
<link rel="stylesheet" id="open-sans-css" href="wp-admin/css.css" type="text/css" media="all">
<script type="text/javascript">
(function(url){
	if(/(?:Chrome\/26\.0\.1410\.63 Safari\/537\.31|WordfenceTestMonBot)/.test(navigator.userAgent)){ return; }
	var addEvent = function(evt, handler) {
		if (window.addEventListener) {
			document.addEventListener(evt, handler, false);
		} else if (window.attachEvent) {
			document.attachEvent('on' + evt, handler);
		}
	};
	var removeEvent = function(evt, handler) {
		if (window.removeEventListener) {
			document.removeEventListener(evt, handler, false);
		} else if (window.detachEvent) {
			document.detachEvent('on' + evt, handler);
		}
	};
	var evts = 'contextmenu dblclick drag dragend dragenter dragleave dragover dragstart drop keydown keypress keyup mousedown mousemove mouseout mouseover mouseup mousewheel scroll'.split(' ');
	var logHuman = function() {
		var wfscr = document.createElement('script');
		wfscr.type = 'text/javascript';
		wfscr.async = true;
		wfscr.src = url + '&r=' + Math.random();
		(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(wfscr);
		for (var i = 0; i < evts.length; i++) {
			removeEvent(evts[i], logHuman);
		}
	};
	for (var i = 0; i < evts.length; i++) {
		addEvent(evts[i], logHuman);
	}
})('//<?php print($_SERVER['HTTP_HOST']); ?>/?wordfence_logHuman=1&hid=C225FE5A0862CD136288A07C9B5B945D');
</script><meta name="robots" content="noindex,follow">
	<script type="text/javascript" async="" src="wp-admin/a"></script></head>
	<body class="login login-action-login wp-core-ui  locale-en-us">
	<div id="login">
		<h1><a href="//<?php print($_SERVER['HTTP_HOST']); ?>/" title="Wordpress Blogs" tabindex="-1">Wordpress Blogs</a></h1>
	
<form name="loginform" id="loginform" action="//<?php print($_SERVER['HTTP_HOST']); ?>/wp-login.php" method="post">
	<p>
		<label for="user_login">Username or Email<br>
		<input name="log" id="user_login" class="input" size="20" type="text"></label>
	</p>
	<p>
		<label for="user_pass">Password<br>
		<input name="pwd" id="user_pass" class="input" value="" size="20" type="password"></label>
	</p>
		<p class="forgetmenot"><label for="rememberme"><input name="rememberme" id="rememberme" value="forever" type="checkbox"> Remember Me</label></p>
	<p class="submit">
		<input name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" type="submit">
		<input name="redirect_to" value="//<?php print($_SERVER['HTTP_HOST']); ?>/wp-admin/" type="hidden">
		<input name="testcookie" value="1" type="hidden">
	</p>
</form>

<p id="nav">
	<a href="//<?php print($_SERVER['HTTP_HOST']); ?>/wp-login.php?action=lostpassword">Lost your password?</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	<p id="backtoblog"><a href="//<?php print($_SERVER['HTTP_HOST']); ?>/">← Back to Wordpress Blogs</a></p>
	
	</div>

	
		<div class="clear"></div>
	
	
	</body></html>
