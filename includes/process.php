<?php

$post = (!empty($_POST['subscribeBtn'])) ? true : false;
 
if($post) {
 
	$name = stripslashes($_POST['subscriberName']);
	$email = $_POST['subscriberEmail'];
	$phone = stripslashes($_POST['subscriberPhone']);
	$to = "Yinka Ash<iamyinka@ezyfx.la>";
	$subject = "New Client Subscribed!";

	$mail = mail($to, $subject, $message,
     "From: ".$name." <".$email.">rn"
    ."Reply-To: ".$email."rn"
    ."X-Mailer: PHP/" . phpversion());
}
 
?>