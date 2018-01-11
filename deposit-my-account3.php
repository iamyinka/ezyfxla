<?php  

$merchant_id = isset($_REQUEST['merchant_id']);
$custm_account_no = isset($_REQUEST['custm_account_no']);
$invoice_no = strtotime("now");
$acc_currency = isset($_REQUEST['acc_currency']);
$dep_currency = isset($_REQUEST['dep_currency']);
$dep_amount = isset($_REQUEST['dep_amount']);
$dep_amount = sprintf('%0.2f', $dep_amount);
$separator = "+&";
$signature = $merchant_id . $separator . $custm_account_no . $separator . $invoice_no . $separator . $acc_currency . $separator . $dep_currency . $separator . $dep_amount;
$merchant_token = sha1($signature);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Testing</title>
</head>
<body>

  <form action="http://dev.localpay2u.com/simulate.php" method="POST">
    <input type="text" readonly="readonly" name="merchant_id" value="EZ-14-1514089661" /><br>
     <input type="text" name="custm_account_no" value="" /><br>
     <input type="text" readonly="readonly" name="invoice_no" value="<?php echo $invoice_no ?>" /><br>
     <select name="acc_currency">
     <option value="MYR">MYR</option>
     <option value="SGD">SGD</option>
     <option value="THB">THB</option>
     <option value="IDR">IDR</option>
     </select><br>
     <input type="text" readonly="readonly" name="dep_currency" value="USD" /><br>
     <input type="text" name="dep_amount" value=".00" /> <small>Amount should be in .00 format for example 569.00</small><br>
     <input type="hidden" name="return_url" value="http://ezyfx.la/payment-fail.php" /><br>
     <input type="hidden" name="cancel_url" value="http://ezyfx.la/payment-callback.php" /><br>
     <input type="hidden" name="notify_url" value="http://ezyfx.la/payment-success.php" /><br>
     <button type="submit" name="submit_btn">Submit</button>
  </form>
  
</body>
</html>