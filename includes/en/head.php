
<?php

include($_SERVER['DOCUMENT_ROOT'].'/scripts/'.'mobile_device_detect.php');
// should this device be treated as mobile
// iphone, ipad, android, opera mini, blackberry, palm, windows mobile
// last two are, redirect to mobile to url, redirect desktop to url
$mobile = mobile_device_detect(true,false,true,true,true,true,true,false,false);


if($mobile==true)
{	
	echo '<link href="/css/m-reset.css" rel="stylesheet" type="text/css">'."\n";
	echo '<link href="/css/m-text.css" rel="stylesheet" type="text/css">'."\n";
	echo '<link href="/css/m-960.css" rel="stylesheet" type="text/css">'."\n";
	echo '<link href="/css/m-styles.css" rel="stylesheet" type="text/css">'."\n";
	echo '<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />'."\n";
	 
}
else
{
	echo ''."\n";
	echo '<link href="/css/reset.css" rel="stylesheet" type="text/css">'."\n";
	echo '<link href="/css/text.css" rel="stylesheet" type="text/css">'."\n";
	echo '<link href="/css/960.css" rel="stylesheet" type="text/css">'."\n";
	echo '<link href="/css/styles.css" rel="stylesheet" type="text/css">'."\n";
	echo '<link href="/shadowbox-3.0.3/shadowbox.css" rel="stylesheet" type="text/css" />'."\n";
	echo '<script type="text/javascript" src="/scripts/jquery-1.4.2.min.js"></script>'."\n";
	echo '<script type="text/javascript" src="/shadowbox-3.0.3/shadowbox.js"></script>'."\n";
	echo '<script type="text/javascript" src="/scripts/init.js"></script>'."\n";
}

?>