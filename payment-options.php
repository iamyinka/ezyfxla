<?php include('includes/nav.php'); ?>

<?php
$creaditcard = array("EUR", "GBP", "USD", "RUB");
$megatransfer = array("EUR", "USD", "GBP", "AED", "AUD", "BTC", "CAD", "CHF", "CNY", "CZK", "DKK", "HKD", "HUF","ILS", "IDR", "INR", "JPY", "KWD", "LTC", "LTL", "MYR", "NOK", "NZD", "PHP", "PLN", "RON", "RUB", "SAR", "SEK", "SGD");
$chinapay = array("EUR", "USD", "GBP", "AED", "AUD", "CAD", "CHF", "CNY", "CZK", "DKK", "HKD", "HUF","ILS", "IDR", "INR", "JPY", "KWD", "LTL", "MYR", "NOK", "NZD", "PHP", "PLN", "RON", "RUB", "SAR", "SEK", "SGD");
$wiretrans = array("EUR", "USD", "GBP", "CZK", "NOK", "SEK", "CHF", "CAD", "AUD", "DKK", "HKD", "JPY", "NZD", "PLN", "RUB", "SGD");



if(isset($_REQUEST['myactionper']) && $_REQUEST['myactionper']=='banktransfer')
{


  $items = $_REQUEST['ref'];
  $quantity = '1';
  $amount =  (float) ($_REQUEST['amount']);
  $currency = $_REQUEST['wirecurrency'];
  $client_name = $_REQUEST['customer'];
  $client_country = 'Malaysia';
  $client_city = 'Klang Selangor';
  $client_email = 'ezyfx4u@gmail.com';
  $reg_date = date('Y-m-d');
  $url = "https://www.megatransfer.com/";
  $merchant_id = "368570928";
  $secret_code = "38ee540e9cffe4f8a93370edfdf68afb49bba7a75accfbe2e5687feb27cf8e68";
  $separator = "10113696";
  $order_id = strtotime("now");
  $total_amount = (float) ($_REQUEST['amount']);
  $total_amount = sprintf("%1.2f", $total_amount);
  $signature = hash("sha256", $secret_code . $separator . $merchant_id . $separator . $items . $separator . $quantity . $separator . $amount . $separator . $total_amount . $separator . $currency . $separator . $secret_code);
  ?>
  <form id="banktransfer" name="form" method="post" action="https://www.megatransfer.com/payments/">
      <input type="hidden" name="items" value="<?php echo $items ?>"/>
      <input type="hidden" name="quantity" value="<?php echo $quantity ?>"/>
      <input type="hidden" name="amount" value="<?php echo $amount ?>"/>
      <input type="hidden" name="currency" value="<?php echo $currency ?>"/>
      <input type="hidden" name="total_amount" value="<?php echo $total_amount ?>"/>
      <input type="hidden" name="merchant_id" value="<?php echo $merchant_id ?>"/>
      <input type="hidden" name="order_id" value="<?php echo $order_id ?>"/>
      <input type="hidden" name="client_name" value="<?php echo $client_name ?>"/>
      <input type="hidden" name="client_country" value="<?php echo $client_country ?>"/>
      <input type="hidden" name="client_city" value="<?php echo $client_city ?>"/>
      <input type="hidden" name="client_email" value="<?php echo $client_email ?>"/>
      <input type="hidden" name="client_regdate" value="<?php echo $reg_date ?>"/>
      <input type="hidden" name="url" value="<?php echo $url ?>"/>
      <input type="hidden" name="signature" value="<?php echo $signature ?>"/>
      <!--FOR TEST GATEWAY-->
      <input type="hidden" name="gateway_id" value="0"/>
      <!--//FOR LIVE GATEWAY-->
      <!--<input type="hidden" name="gateway_id" value="1"/>-->
      <input type="hidden" name="payment_method" value="wt"/>
      <input type="hidden" name="success_url" value="http://ezyfx.la/payment-gateway-test?paymenttype=success"/>
      <input type="hidden" name="fail_url" value="http://ezyfx.la/payment-gateway-test?paymenttype=fail"/>
      <input type="hidden" name="callback_url" value="http://ezyfx.la/payment-gateway-test?paymenttype=callback"/>
      <input type="submit" name="Submit" class="ic-btn" value="Deposit Now"/>
  </form>
  <script type="text/javascript">
  document.getElementById("banktransfer").submit();
    $('#banktransfer').submit();

  </script>
<?php }
else if(isset($_REQUEST['myactionper']) && $_REQUEST['myactionper']=='credit'){

$items = $_REQUEST['ref'];
  $quantity = '1';
  $amount =  (float) ($_REQUEST['amount']);
  $currency = $_REQUEST['creditcurrency'];
  $client_name = $_REQUEST['customer'];
  $client_country = 'Malaysia';
  $client_city = 'Klang Selangor';
  $client_email = 'ezyfx4u@gmail.com';
  $reg_date = date('Y-m-d');
  $url = "https://www.megatransfer.com/";
  $merchant_id = "368570928";
  $secret_code = "38ee540e9cffe4f8a93370edfdf68afb49bba7a75accfbe2e5687feb27cf8e68";
  $separator = "10113696";
  $order_id = strtotime("now");
  $total_amount = (float) ($_REQUEST['amount']);
  $total_amount = sprintf("%1.2f", $total_amount);
  $signature = hash("sha256", $secret_code . $separator . $merchant_id . $separator . $items . $separator . $quantity . $separator . $amount . $separator . $total_amount . $separator . $currency . $separator . $secret_code);
  ?>
  <form id="credit" name="form" method="post" action="https://www.megatransfer.com/payments/">
      <input type="hidden" name="items" value="<?php echo $items ?>"/>
      <input type="hidden" name="quantity" value="<?php echo $quantity ?>"/>
      <input type="hidden" name="amount" value="<?php echo $amount ?>"/>
      <input type="hidden" name="currency" value="<?php echo $currency ?>"/>
      <input type="hidden" name="total_amount" value="<?php echo $total_amount ?>"/>
      <input type="hidden" name="merchant_id" value="<?php echo $merchant_id ?>"/>
      <input type="hidden" name="order_id" value="<?php echo $order_id ?>"/>
      <input type="hidden" name="client_name" value="<?php echo $client_name ?>"/>
      <input type="hidden" name="client_country" value="<?php echo $client_country ?>"/>
      <input type="hidden" name="client_city" value="<?php echo $client_city ?>"/>
      <input type="hidden" name="client_email" value="<?php echo $client_email ?>"/>
      <input type="hidden" name="client_regdate" value="<?php echo $reg_date ?>"/>
      <input type="hidden" name="url" value="<?php echo $url ?>"/>
      <input type="hidden" name="signature" value="<?php echo $signature ?>"/>
      <!--FOR TEST GATEWAY-->
      <input type="hidden" name="gateway_id" value="0"/>
      <!--//FOR LIVE GATEWAY-->
      <!--<input type="hidden" name="gateway_id" value="1"/>-->
      <input type="hidden" name="payment_method" value="cc"/>
      <input type="hidden" name="success_url" value="http://ezyfx.la/payment-gateway-test?paymenttype=success"/>
      <input type="hidden" name="fail_url" value="http://ezyfx.la/payment-gateway-test?paymenttype=fail"/>
      <input type="hidden" name="callback_url" value="http://ezyfx.la/payment-gateway-test?paymenttype=callback"/>
      <input type="submit" name="Submit" class="ic-btn" value="Deposit Now"/>
  </form>
  <script type="text/javascript">
  document.getElementById("credit").submit();
    $('#credit').submit();

  </script>

<?php } else if(isset($_REQUEST['myactionper']) && $_REQUEST['myactionper']=='unionpayment'){

$items = $_REQUEST['ref'];
  $quantity = '1';
  $amount =  (float) ($_REQUEST['amount']);
  $currency = $_REQUEST['chinacurrency'];
  $client_name = $_REQUEST['customer'];
  $client_country = 'Malaysia';
  $client_city = 'Klang Selangor';
  $client_email = 'ezyfx4u@gmail.com';
  $reg_date = date('Y-m-d');
  $url = "https://www.megatransfer.com/";
  $merchant_id = "368570928";
  $secret_code = "38ee540e9cffe4f8a93370edfdf68afb49bba7a75accfbe2e5687feb27cf8e68";
  $separator = "10113696";
  $order_id = strtotime("now");
  $total_amount = (float) ($_REQUEST['amount']);
  $total_amount = sprintf("%1.2f", $total_amount);
  $signature = hash("sha256", $secret_code . $separator . $merchant_id . $separator . $items . $separator . $quantity . $separator . $amount . $separator . $total_amount . $separator . $currency . $separator . $secret_code);
  ?>
  <form id="unionpayment" name="form" method="post" action="https://www.megatransfer.com/payments/">
      <input type="hidden" name="items" value="<?php echo $items ?>"/>
      <input type="hidden" name="quantity" value="<?php echo $quantity ?>"/>
      <input type="hidden" name="amount" value="<?php echo $amount ?>"/>
      <input type="hidden" name="currency" value="<?php echo $currency ?>"/>
      <input type="hidden" name="total_amount" value="<?php echo $total_amount ?>"/>
      <input type="hidden" name="merchant_id" value="<?php echo $merchant_id ?>"/>
      <input type="hidden" name="order_id" value="<?php echo $order_id ?>"/>
      <input type="hidden" name="client_name" value="<?php echo $client_name ?>"/>
      <input type="hidden" name="client_country" value="<?php echo $client_country ?>"/>
      <input type="hidden" name="client_city" value="<?php echo $client_city ?>"/>
      <input type="hidden" name="client_email" value="<?php echo $client_email ?>"/>
      <input type="hidden" name="client_regdate" value="<?php echo $reg_date ?>"/>
      <input type="hidden" name="url" value="<?php echo $url ?>"/>
      <input type="hidden" name="signature" value="<?php echo $signature ?>"/>
      <!--FOR TEST GATEWAY-->
      <input type="hidden" name="gateway_id" value="0"/>
      <!--//FOR LIVE GATEWAY-->
      <!--<input type="hidden" name="gateway_id" value="1"/>-->
      <input type="hidden" name="payment_method" value="mt"/>
      <input type="hidden" name="success_url" value="http://ezyfx.la/payment-gateway-test?paymenttype=success"/>
      <input type="hidden" name="fail_url" value="http://ezyfx.la/payment-gateway-test?paymenttype=fail"/>
      <input type="hidden" name="callback_url" value="http://ezyfx.la/payment-gateway-test?paymenttype=callback"/>
      <input type="submit" name="Submit" class="ic-btn" value="Deposit Now"/>
  </form>
  <script type="text/javascript">
  document.getElementById("unionpayment").submit();
    $('#unionpayment').submit();

  </script>

<?php } else if(isset($_REQUEST['myactionper']) && $_REQUEST['myactionper']=='megatransfer'){

$items = $_REQUEST['ref'];
  $quantity = '1';
  $amount =  (float) ($_REQUEST['amount']);
  $currency = $_REQUEST['megacurrency'];
  $client_name = $_REQUEST['customer'];
  $client_country = 'Malaysia';
  $client_city = 'Klang Selangor';
  $client_email = 'ezyfx4u@gmail.com';
  $reg_date = date('Y-m-d');
  $url = "https://www.megatransfer.com/";
  $merchant_id = "368570928";
  $secret_code = "38ee540e9cffe4f8a93370edfdf68afb49bba7a75accfbe2e5687feb27cf8e68";
  $separator = "10113696";
  $order_id = strtotime("now");
  $total_amount = (float) ($_REQUEST['amount']);
  $total_amount = sprintf("%1.2f", $total_amount);
  $signature = hash("sha256", $secret_code . $separator . $merchant_id . $separator . $items . $separator . $quantity . $separator . $amount . $separator . $total_amount . $separator . $currency . $separator . $secret_code);
  ?>
  <form id="megatransfer" name="form" method="post" action="https://www.megatransfer.com/payments/">
      <input type="hidden" name="items" value="<?php echo $items ?>"/>
      <input type="hidden" name="quantity" value="<?php echo $quantity ?>"/>
      <input type="hidden" name="amount" value="<?php echo $amount ?>"/>
      <input type="hidden" name="currency" value="<?php echo $currency ?>"/>
      <input type="hidden" name="total_amount" value="<?php echo $total_amount ?>"/>
      <input type="hidden" name="merchant_id" value="<?php echo $merchant_id ?>"/>
      <input type="hidden" name="order_id" value="<?php echo $order_id ?>"/>
      <input type="hidden" name="client_name" value="<?php echo $client_name ?>"/>
      <input type="hidden" name="client_country" value="<?php echo $client_country ?>"/>
      <input type="hidden" name="client_city" value="<?php echo $client_city ?>"/>
      <input type="hidden" name="client_email" value="<?php echo $client_email ?>"/>
      <input type="hidden" name="client_regdate" value="<?php echo $reg_date ?>"/>
      <input type="hidden" name="url" value="<?php echo $url ?>"/>
      <input type="hidden" name="signature" value="<?php echo $signature ?>"/>
      <!--FOR TEST GATEWAY-->
      <input type="hidden" name="gateway_id" value="0"/>
      <!--//FOR LIVE GATEWAY-->
      <!--<input type="hidden" name="gateway_id" value="1"/>-->
      <input type="hidden" name="payment_method" value="mt"/>
      <input type="hidden" name="success_url" value="http://ezyfx.la/payment-gateway-test?paymenttype=success"/>
      <input type="hidden" name="fail_url" value="http://ezyfx.la/payment-gateway-test?paymenttype=fail"/>
      <input type="hidden" name="callback_url" value="http://ezyfx.la/payment-gateway-test?paymenttype=callback"/>
      <input type="submit" name="Submit" class="ic-btn" value="Deposit Now"/>
  </form>
  <script type="text/javascript">
  document.getElementById("megatransfer").submit();
    $('#megatransfer').submit();

  </script>

<?php } else if(isset($_REQUEST['myactionper']) && $_REQUEST['myactionper']=='default'){

$items = $_REQUEST['ref'];
  $quantity = '1';
  $amount =  (float) ($_REQUEST['amount']);
  $currency = $_REQUEST['currency'];
  $client_name = $_REQUEST['customer'];
  $client_country = 'Malaysia';
  $client_city = 'Klang Selangor';
  $client_email = 'ezyfx4u@gmail.com';
  $reg_date = date('Y-m-d');
  $url = "https://www.megatransfer.com/";
  $merchant_id = "368570928";
  $secret_code = "38ee540e9cffe4f8a93370edfdf68afb49bba7a75accfbe2e5687feb27cf8e68";
  $separator = "10113696";
  $order_id = strtotime("now");
  $total_amount = (float) ($_REQUEST['amount']);
  $total_amount = sprintf("%1.2f", $total_amount);
  $signature = hash("sha256", $secret_code . $separator . $merchant_id . $separator . $items . $separator . $quantity . $separator . $amount . $separator . $total_amount . $separator . $currency . $separator . $secret_code);
  ?>
  <form id="default" name="form" method="post" action="https://www.megatransfer.com/payments/">
      <input type="hidden" name="items" value="<?php echo $items ?>"/>
      <input type="hidden" name="quantity" value="<?php echo $quantity ?>"/>
      <input type="hidden" name="amount" value="<?php echo $amount ?>"/>
      <input type="hidden" name="currency" value="<?php echo $currency ?>"/>
      <input type="hidden" name="total_amount" value="<?php echo $total_amount ?>"/>
      <input type="hidden" name="merchant_id" value="<?php echo $merchant_id ?>"/>
      <input type="hidden" name="order_id" value="<?php echo $order_id ?>"/>
      <input type="hidden" name="client_name" value="<?php echo $client_name ?>"/>
      <input type="hidden" name="client_country" value="<?php echo $client_country ?>"/>
      <input type="hidden" name="client_city" value="<?php echo $client_city ?>"/>
      <input type="hidden" name="client_email" value="<?php echo $client_email ?>"/>
      <input type="hidden" name="client_regdate" value="<?php echo $reg_date ?>"/>
      <input type="hidden" name="url" value="<?php echo $url ?>"/>
      <input type="hidden" name="signature" value="<?php echo $signature ?>"/>
      <!--FOR TEST GATEWAY-->
      <input type="hidden" name="gateway_id" value="0"/>
      <!--//FOR LIVE GATEWAY-->
      <!--<input type="hidden" name="gateway_id" value="1"/>-->
      <input type="hidden" name="payment_method" value="cc|ch|mt|wt"/>
      <input type="hidden" name="success_url" value="http://ezyfx.la/payment-gateway-test?paymenttype=success"/>
      <input type="hidden" name="fail_url" value="http://ezyfx.la/payment-gateway-test?paymenttype=fail"/>
      <input type="hidden" name="callback_url" value="http://ezyfx.la/payment-gateway-test?paymenttype=callback"/>
      <input type="submit" name="Submit" class="ic-btn" value="Deposit Now"/>
  </form>
  <script type="text/javascript">
  document.getElementById("megatransfer").submit();
    $('#default').submit();

  </script>

<?php } ?>

<section class="why-us">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1><i class="fa fa-credit-card-alt"></i>Payment Options</h1>
      </div>
      <?php include 'mobile-links.php'; ?>
    </div>
  </div>
</section>

<section class="reg-start">
  <div class="container">
    <div class="row softwares paymentOptions">
        <a id="option1">
          <div class="col-sm-4 col-md-4">
            <img src="images/deposit-methods/bank-tf.png" alt="EZYFX MT4 Trader For Desktop">
          </div>

          <div class="col-sm-8 col-md-8">
            <h4>Bank Wire Transfer <span class="pull-right" id="option1Sign1"><strong>+</strong></span><span class="pull-right" id="option1Sign2"><strong>-</strong></span></h4>
            <p><strong>Region</strong>: Worldwide</p>
            <p><strong>Max. Deposit</strong>: $10000</p>
            <p><strong>Fees / Commissions</strong>: $0 USD</p>
            <p><strong>Processing Time</strong>: Up to 2 Business Days</p>
            <!-- <p class="pull-right" id="learnMore3"><a>Read More &raquo;</a></p>
            <p class="pull-right" id="learnMore4"><a>Read Less &raquo;</a></p> -->

          </div>
        </a>
        <div class="col-sm-4">

        </div>
        <div class="col-sm-8">
          <div id="paymentOption1">
            <p>In order to ensure the highest levels of security for Customers' transactions, EZYFX uses the services of MegaTransfer to receive deposits via Bank Transfer. MegaTransfer is a global leader in money transfer services and is licensed and regulated in the United Kingdom by the Financial Conduct Authority, the UK's Financial Services Regulator.</p>

            <a href="register.php" class="btn btn-custom-success btn-lg" target="_blank">OPEN AN ACCOUNT &raquo;</a> <a data-toggle="modal" data-target="#localTransfer" onclick="actionperform('banktransfer');" class="btn btn-custom-success btn-lg">Make Deposit Via Bank Transfer &raquo;</a>
          </div>
        </div>
    </div>


    <div class="row softwares paymentOptions">
        <a id="option2">
          <div class="col-sm-4 col-md-4">
            <img src="images/deposit-methods/cc.png" alt="EZYFX MT4 Trader For Desktop">
          </div>

          <div class="col-sm-8 col-md-8">
            <h4>Credit Card <span class="pull-right" id="option2Sign1"><strong>+</strong></span><span class="pull-right" id="option2Sign2"><strong>-</strong></span></h4>
            <p><strong>Region</strong>: Worldwide</p>
            <p><strong>Max. Deposit</strong>: $10000</p>
            <p><strong>Fees / Commissions</strong>: $0 USD</p>
            <p><strong>Processing Time</strong>: Up to 2 Business Days</p>
            <!-- <p class="pull-right" id="learnMore3"><a>Read More &raquo;</a></p>
            <p class="pull-right" id="learnMore4"><a>Read Less &raquo;</a></p> -->

          </div>
        </a>
        <div class="col-sm-4">

        </div>
        <div class="col-sm-8">
          <div id="paymentOption2">
            <p>Did you know that according to the European Central Bank, during 2014 almost half of all non-cash transactions within the EU were card payments? Furthermore, card payments marked an increase of 8.8% compared to the previous year.</p>
            <p>EZYFX supports that trend by allowing you to deposit into your Trading Account through the use of your international Visa or MasterCard, regardless whether you are in the EU or not.</p>

            <a href="register.php" class="btn btn-custom-success btn-lg" target="_blank">OPEN AN ACCOUNT &raquo;</a> <a data-toggle="modal" data-target="#localTransfer" onclick="actionperform('credit');" class="btn btn-custom-success btn-lg">Deposit via Credit Card &raquo;</a>
          </div>
        </div>
    </div>

    <div class="row softwares paymentOptions">
        <a id="option3">
          <div class="col-sm-4 col-md-4">
            <img src="images/footer/mt2.png" alt="EZYFX MT4 Trader For Desktop">
          </div>

          <div class="col-sm-8 col-md-8">
            <h4>Mega Transfer <span class="pull-right" id="option3Sign1"><strong>+</strong></span><span class="pull-right" id="option3Sign2"><strong>-</strong></span></h4>
            <p><strong>Region</strong>: Worldwide</p>
            <p><strong>Max. Deposit</strong>: $10000</p>
            <p><strong>Fees / Commissions</strong>: $0 USD</p>
            <p><strong>Processing Time</strong>: Up to 2 Business Days</p>
            <!-- <p class="pull-right" id="learnMore3"><a>Read More &raquo;</a></p>
            <p class="pull-right" id="learnMore4"><a>Read Less &raquo;</a></p> -->

          </div>
        </a>
        <div class="col-sm-4">

        </div>
        <div class="col-sm-8">
          <div id="paymentOption3">
            <p>In order to ensure the highest levels of security for Customers' transactions, EZYFX uses the services of MegaTransfer to receive deposits. MegaTransfer is a global leader in money transfer services and is licensed and regulated in the United Kingdom by the Financial Conduct Authority, the UK's Financial Services Regulator.</p>

            <a href="register.php" class="btn btn-custom-success btn-lg" target="_blank">OPEN AN ACCOUNT &raquo;</a> <a data-toggle="modal" data-target="#localTransfer" onclick="actionperform('megatransfer');" class="btn btn-custom-success btn-lg">Deposit via MegaTransfer &raquo;</a>
          </div>
        </div>
    </div>

    <div class="row softwares paymentOptions">
        <a id="option4">
          <div class="col-sm-4 col-md-4">
            <img src="images/deposit-methods/upay.svg" alt="EZYFX MT4 Trader For Desktop">
          </div>

          <div class="col-sm-8 col-md-8">
            <h4>UnionPay <span class="pull-right" id="option4Sign1"><strong>+</strong></span><span class="pull-right" id="option4Sign2"><strong>-</strong></span></h4>
            <p><strong>Region</strong>: Worldwide</p>
            <p><strong>Max. Deposit</strong>: $10000</p>
            <p><strong>Fees / Commissions</strong>: $0 USD</p>
            <p><strong>Processing Time</strong>: Up to 2 Business Days</p>
            <!-- <p class="pull-right" id="learnMore3"><a>Read More &raquo;</a></p>
            <p class="pull-right" id="learnMore4"><a>Read Less &raquo;</a></p> -->

          </div>
        </a>
        <div class="col-sm-4">

        </div>
        <div class="col-sm-8">
          <div id="paymentOption4">
            <p>In order to ensure the highest levels of security for Customers' transactions, EZYFX uses the services of MegaTransfer to receive deposits via UnionPay. MegaTransfer is a global leader in money transfer services and is licensed and regulated in the United Kingdom by the Financial Conduct Authority, the UK's Financial Services Regulator.</p>

            <a href="register.php" class="btn btn-custom-success btn-lg" target="_blank">OPEN AN ACCOUNT &raquo;</a> <a data-toggle="modal" data-target="#localTransfer" onclick="actionperform('megatransfer');" class="btn btn-custom-success btn-lg">Deposit via UnionPay &raquo;</a>
          </div>
        </div>
    </div>


    <div class="row softwares paymentOptions">
        <a id="option5">
          <div class="col-sm-4 col-md-4">
            <img src="images/deposit-methods/local-tf.png" alt="EZYFX MT4 Trader For Desktop">
          </div>

          <div class="col-sm-8 col-md-8">
            <h4>Local Bank Transfer <span class="pull-right" id="option5Sign1"><strong>+</strong></span><span class="pull-right" id="option5Sign2"><strong>-</strong></span></h4>
            <p><strong>Region</strong>: Worldwide</p>
            <p><strong>Max. Deposit</strong>: $10000</p>
            <p><strong>Fees / Commissions</strong>: $0 USD</p>
            <p><strong>Processing Time</strong>: Up to 2 Business Days</p>
            <!-- <p class="pull-right" id="learnMore3"><a>Read More &raquo;</a></p>
            <p class="pull-right" id="learnMore4"><a>Read Less &raquo;</a></p> -->

          </div>
        </a>
        <div class="col-sm-4">

        </div>
        <div class="col-sm-8">
          <div id="paymentOption5">
            <p>Text for Local Bank Transfer.</p>

            <a href="register.php" class="btn btn-custom-success btn-lg" target="_blank">OPEN AN ACCOUNT &raquo;</a> <a data-toggle="modal" data-target="#localTransfer" onclick="actionperform('megatransfer');" class="btn btn-custom-success btn-lg disabled">Contact us for info &raquo;</a>
          </div>
        </div>
    </div>
  </div>
</section>



<section class="take-note">
  <div class="container">
    <div class="col-xs-12 col-sm-12">
      <h6>NOTE:</h6>

      <ol>
        <li>To prevent fraud or scam, it is the responsibility of the Client to verify the Local Depositor identity with us before making any deposit through it or only make deposit via Local Depositor that provided inside the cabinet.</li>
        <li>For fund deposit by credit card, it only allowed to withdraw back to the same credit card with the same amount of deposit made; for other amount of withdrawal, your fund cannot be withdrawn by using local depositor if any (first priority) or wire transfer where bank fee applies (but the company reserves the rights to hold this withdrawal request up to 90 days from the first date of the deposit made by the credit card to prevent dispute issue). Withdraw fee of 5% of withdraw amount could be charged if the account is inactive or very less transaction from the latest deposit.</li>
        <li>Credit card gateway is only accepted for Albania, Andorra, Armenia, Austria, Azerbaijan, Belarus, Belgium, Bosnia and Herzegovina, Brunei, Bulgaria, Croatia, Cyprus, Czech Republic, Denmark, Estonia, Finland, France, Georgia, Germany, Greece, Hungary, Iceland, Indonesia, Ireland, Italy, Kazakhstan, Kyrgyzstan, Latvia, Liechtenstein, Lithuania, Luxembourg, Macedonia, Malaysia, Malta, Moldova, Monaco, Montenegro, Netherlands, Norway, Pakistan, Philippines, Poland, Portugal, Russian Federation, San Marino, Saudi Arabia, Serbia, Singapore, Slovakia, Slovenia, Spain, Sweden, Switzerland, Taiwan, province of China, Tajikistan, Thailand, Turkmenistan, Ukraine, United Arab Emirates, United Kingdom, Uzbekistan, Vietnam.</li>
      </ol>
    </div>
  </div>
</section>






                    <!-- PAYMENT MODAL -->

<div class="row">
 <div class="col-xs-12 col-sm-6 col-sm-offset-3">
   <div id="localTransfer" class="modal fade" role="dialog">
     <div class="modal-dialog">
       <!-- Modal content-->
       <div class="modal-content homeModal">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title text-center">Make a Deposit</h4>
         </div>
         <div class="modal-body">
           <div class="row">
             <div class="col-xs-12 col-sm-12">
               <div class="form-logo">
                 <img src="images/logo.png" alt="" class="img-responsive img-thumbnail">
               </div>
             </div>
             <div class="col-xs-12 col-sm-8 col-sm-offset-2">
               <div class="fundsDeposit">
                 <form role="form " action="" method="get" id="mypopupaction">
                   <input type="hidden" name="myactionper" id="myactionper" value="" />
                   <div class="form-group">
                     <div class="input-group">
                       <div class="input-group addon">
                         <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                         <input type="text" class="form-control" id="depositName" placeholder="Full Name" name="customer">
                       </div>
                     </div>
                   </div>

                   <div class="form-group">
                     <div class="input-group">
                       <div class="input-group addon">
                         <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope-o"></i></span>
                         <input type="email" class="form-control" id="depositEmail" placeholder="Enter Email Address">
                       </div>
                     </div>
                   </div>

                   <div class="form-group">
                     <div class="input-group">
                       <div class="input-group addon">
                         <span class="input-group-addon" id="basic-addon1"><i class="fa fa-hand-o-up"></i></span>
                         <select class="form-control currencymy" name="wirecurrency" id="wiretrans" required>
                           <option value="Select Currency"> Select Currency</option>
                           <?php foreach($wiretrans as $mywird){?>
                             <option value="<?php echo $mywird;?>"> <?php echo $mywird;?></option>
                           <?php }?>
                         </select>

                         <select class="form-control currencymy" name="creditcurrency" id="creaditcard" required>
                           <option value="Select Currency"> Select Currency</option>
                           <?php foreach($creaditcard as $mycreaditcard){?>
                             <option value="<?php echo $mycreaditcard;?>"><?php echo $mycreaditcard;?></option>
                           <?php }?>
                         </select>


                         <select class="form-control currencymy" name="megacurrency" id="megatransfer" required>
                           <option value="Select Currency"> Select Currency</option>
                           <?php foreach($megatransfer as $mymegatransfer){?>
                             <option value="<?php echo $mymegatransfer;?>"><?php echo $mymegatransfer;?></option>
                           <?php }?>
                         </select>

                         <select class="form-control currencymy" name="chinacurrency" id="chinapay" required>
                           <option value="Select Currency"> Select Currency</option>
                           <?php foreach($chinapay as $mychinapay){?>
                             <option value="<?php echo $mychinapay;?>"><?php echo $mychinapay;?></option>
                           <?php }?>
                         </select>
                       </div>
                     </div>
                   </div>

                   <div class="form-group">
                     <div class="input-group">
                       <div class="input-group addon">
                         <span class="input-group-addon" id="basic-addon1"><i class="fa fa-money"></i></span>
                         <input type="amount" class="form-control" id="depositAmount" placeholder="Enter Amount" name="amount">
                       </div>
                     </div>
                   </div>

                   <div class="form-group">
                     <div class="input-group">
                       <div class="input-group addon">
                         <span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil-square-o"></i></span>
                         <input type="text" class="form-control" id="depositAcct" placeholder="Enter MT4 Account Number" name="ref">
                       </div>
                     </div>
                   </div>

                   <div class="form-group">
                     <div class="input-group">
                       <div class="input-group addon">
                         <span class="input-group-addon" id="basic-addon1"><i class="fa fa-mobile-phone"></i></span>
                         <input type="phone" class="form-control" id="subscriberPhone" placeholder="Enter Phone Number">
                       </div>
                     </div>
                   </div>

                   <div class="form-group">
                     <input type="submit" name="depositBtn" value="Make Deposit &rarr;" class="btn btn-custom-demo btn-block">
                   </div>
                 </form>
               </div>
             </div>
           </div>


           <!-- <hr>
           <div class="row">
             <div class="col-xs-12 col-sm-12">
               <p>And get the following benefits for <span>free</span>:</p>
               <ul class="ppro">
                 <li>
                   <i class="fa fa-check-square-o"></i> 30 minutes consultation on how to trade and earn like a professional trader.
                 </li>

                 <li>
                   <i class="fa fa-check-square-o"></i> 21 days "Zero To Hero" professionally guided forex trading course.
                 </li>

                 <li>
                   <i class="fa fa-check-square-o"></i> 21 days of <span>forex premium signals</span>.
                 </li>
               </ul>
               <p><em>... all of these benefits worth upto $7657 USD available for the first 10 subscribers</em></p>
               <p><sup>*</sup> <small>This offer is subjected to <a href="#">Terms &amp; Conditions</a>.</small></p>
             </div>
           </div> -->
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
       </div>

     </div>
   </div>
 </div>
</div>


<?php include('includes/footer.php'); ?>
<script type="text/javascript">
function actionperform(myvalue)
{
	$('.currencymy').css('display','none');
	if(myvalue=='banktransfer')
	{
		$('#wiretrans').css('display','block');
	}
	else if(myvalue=='credit')
	{
		$('#creaditcard').css('display','block');
	}
	else if(myvalue=='unionpayment')
	{
		$('#chinapay').css('display','block');
	}
	else if(myvalue=='megatransfer')
	{
		$('#megatransfer').css('display','block');
	}
	$('#myactionper').val(myvalue);
	$('#popupmodeshow').click();

}

</script>
