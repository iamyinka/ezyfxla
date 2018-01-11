

<?php
    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection



    $name = strip_tags(trim($_POST["customer"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["customerEmail"]), FILTER_SANITIZE_EMAIL);
    // $cont_subject = trim($_POST["subject"]);
    $amount = trim($_POST["amount"]);
    $accountNo = trim($_POST["ref"]);
    $phone = trim($_POST["subscriberPhone"]);
    
    // $currency = array($currency1, $currency2, $currency3, $currency4);
    function getPaymentType() {
        $currency1 = strip_tags(trim($_POST["wirecurrency"]));
        $currency2 = strip_tags(trim($_POST["creditcurrency"]));
        $currency3 = strip_tags(trim($_POST["megacurrency"]));
        $currency4 = strip_tags(trim($_POST["chinacurrency"]));
        if (isset($_REQUEST['myactionper']) && $_REQUEST['myactionper']=='banktransfer') {
            $method = "Wire Transfer";
            $currencyType = $currency1;
            return "Payment Method: $method \n
                Currency Type: $currencyType";
        } else if (isset($_REQUEST['myactionper']) && $_REQUEST['myactionper']=='credit') {
            $method = "Credit Card";
            $currencyType = $currency2;
            return "Payment Method: $method \n
                Currency Type: $currencyType";
        } else if (isset($_REQUEST['myactionper']) && $_REQUEST['myactionper']=='unionpayment') {
            $method = "China Union Pay";
            $currencyType = $currency4;
            return "Payment Method: $method \n
                Currency Type: $currencyType";
        } else if (isset($_REQUEST['myactionper']) && $_REQUEST['myactionper']=='megatransfer') {
            $method = "Mega Transfer";
            $currencyType = $currency3;
            return "Payment Method: $method \n
                Currency Type: $currencyType";
        }
    };
    $paymentType = getPaymentType();
    $ip = $_SERVER["REMOTE_ADDR"];
    $user = "$email";
    $to = "accounts@ezyfx.la";
    $subject = "Funds Deposit Enquiry";
    $headers = "From: $email\n";
    $message = "New Client wants to make Payment.\n
    Name: $name \n
    Email Address: $email \n
    Phone: $phone \n
    Account Number: $accountNo \n
    \n Payment Details: \n 
    ======================\n
    $paymentType \n
    Amount: $amount \n
    Location: $ip";
    $user = "$email";
    $usersubject = "Payment Details Received | $name";
    $userheaders = "From: mailer@ezyfx.la\n";
    $usermessage = "Thank you $name. We have received your details and will contact you soon with payment details.";
    mail($to,$subject,$message,$headers);
    mail($user,$usersubject,$usermessage,$userheaders);
    // $dialCode = $_POST['dial-code'];
    echo "<div class='alert alert-success alert-dismissable' style='color: #444;'>Thank you " . $name . " We have received your details and will contact you soon with payment details.</div>";

?>

