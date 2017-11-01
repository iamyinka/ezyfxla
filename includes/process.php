<?php

/*$post = (!empty($_POST['subscribeBtn'])) ? true : false;
 
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
}*/






  $name = $_POST['subscriberName'];
  $email = $_POST['subscriberEmail'];
  $phone = $_POST['subscriberPhone'];
  $to = "iamyinka@ezyfx.la";
  $subject = "New Email Address for Mailing List";
  $headers = "From: $email\n";
  $message = "A new client has joined the EZYFX Community.\n
  Name: $name \n
  Email Address: $email \n
  Phone: $phone";
  $user = "$email";
  $usersubject = "Thank You";
  $userheaders = "From: mailer@ezyfx.la\n";
  $usermessage = "Thank you for subscribing to our mailing list.";
  mail($to,$subject,$message,$headers);
  mail($user,$usersubject,$usermessage,$userheaders);
  // $dialCode = $_POST['dial-code'];
  echo "<div class='alert alert-success alert-dismissable' style='color: #444;'>Thank you " . $name . " and your phone number is " . $phone . " for your joining EZYFX.</div>";
 
?>