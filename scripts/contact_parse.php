<?php
// Create local PHP variables from the info the user gave in the Flash form
$senderName   = $_POST['userName'];
$senderEmail     = $_POST['userEmail'];
$senderPhone     = $_POST['userPhone'];
$senderMessage = $_POST['userMsg'];

// Strip slashes on the Local variables
$senderName = stripslashes($senderName);
$senderEmail = stripslashes($senderEmail);
$senderPhone = stripslashes($senderPhone);
$senderMessage = stripslashes($senderMessage); 

$to = "support@clientsdomainname.com";
// Place sender Email address here
$from = "$senderEmail";
$subject = "Contact from Website";
//Begin HTML Email Message
$message = <<<EOF
<html>
<body bgcolor="#FFFFFF">
<b>Name</b>: $senderName<br /><br />
<b>Phone</b>: $senderPhone<br /><br />
<b>Email</b>: <a href="mailto:$senderEmail">$senderEmail</a><br /><br />
<b>Message</b>: $senderMessage<br /><br /><br />
</body>
</html>
EOF;
//end of message
//
// Additional headers
$headers = 'To: support@clientsdomainname.com' . "\r\n";
$headers .= 'From: support@clientsdomainname.com' . "\r\n";
$headers .= 'Reply-To: '. $senderEmail . "\r\n";
// To send HTML mail, the Content-type header must be set
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$to = "$to";
// keep the neg f, only change support at clientsdomainname dot com
mail($to, $subject, $message, $headers, "-fsupport@clientsdomainname.com");
	
exit();
?>