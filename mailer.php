<?php
    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["contactName"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["contactEmail"]), FILTER_SANITIZE_EMAIL);
        // $cont_subject = trim($_POST["subject"]);
        $message = trim($_POST["contactMsg"]);
		$phone = trim($_POST["contactPhone"]);
		$ip = $_SERVER["REMOTE_ADDR"];
        $user = "$email";
        $usersubject = "Thank You";
        $userheaders = "From: mailer@ezyfx.la\n";
        $userheaders .= 'MIME-Version: 1.0' . "\r\n";
        $userheaders .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $usermessage = '<html><body>';
        $usermessage .= 'Thank you for contacting us. We will get back to you as soon as we can.'; 
        $usermessage .= '</body></html>';

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($phone) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "info@ezyfx.la";

        // Set the email subject.
        $subject = "New contact form submitted by $name";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        // $email_content .= "Subject: $cont_subject\n";
        $email_content .= "Phone Number:\n$phone\n";
		$email_content .= "Message:\n$message\n";
		$email_content .= "Location: $ip\n\n";
        // Build the email headers.
        $email_headers = "From: $name <$email>";
        

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            mail($user,$usersubject,$usermessage,$userheaders);
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You $name. We will get back to you as soon as we can.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
