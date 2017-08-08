<?php

$refer = trim($_SERVER['HTTP_REFERER']);
if(strlen($refer) == 0) { header("Location: /wp-login.php"); exit(); }

$quotes = array(
	"Oh man. That's universally stupid, man!",
	"I hope you don't screw like you type."
);
shuffle($quotes);


?><!DOCTYPE html>
<!--[if IE 8]>
<html xmlns="http://www.w3.org/1999/xhtml" class="ie8 wp-toolbar"  lang="en-US">
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" class="wp-toolbar"  lang="en-US">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dashboard &#8212; WordPress</title>
</head>
<body>

	<div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; background-image: url(images/hackers.jpg); background-position: center center; background-size: cover;"></div>
	<div style="position: absolute; bottom: 0px; left: 0px; right: 0px; text-align: center; font-family: sans-serif; padding-bottom: 0.5em; font-weight: bold; color: #FFFFFF; text-shadow: 0px 0px 10px #000000; font-size: 3em;">"<?php print($quotes[0]); ?>"</div>

</body>
</html>
