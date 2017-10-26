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
        <h1><i class="fa fa-usd"></i>Funds Deposit</h1>
      </div>
      <div class="col-sm-6">
        <p><a href="#" class="btn-link">Download Metatrader trading platform</a></p>
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6 downloads">
            <a href="https://www.instaforex.com/register_demo_account" class="btn btn-custom-default btn-lg-xs btn-block">Open Demo account</a>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 downloads">
            <a href="https://www.instaforex.com/fast_open_live_account" class="btn btn-custom-danger btn-lg-xs btn-block">Open trading account</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="reg-start deposit">
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="deposit-intro">
            <p>Deposit funds into an <strong>EZYFX</strong> Global trading account with security and speed today</p>

            <p>We offer a variety of methods for depositing and withdrawing funds quickly and easily. There are no fees for making a deposit and you are free to withdraw your funds at any time. Learn more about our convenient funding methods by clicking on the options below.</p>
          </div>
        </div>
    </div>
  </div>
</section>

<section class="deposit-methods">
  <div class="container">
    <div class="each-methods">
      <div class="row">
        <div class="col-sm-2">
          <img src="images/deposits/malasya.svg" alt="">
        </div>

        <div class="payments">
          <div class="col-sm-8">
            <p><strong>Local transfer in Malaysia</strong></p>

            <p>Bank fees vary. Deposit is processed within 1-2 days.</p>
          </div>

          <div class="col-sm-2">
            <a class="btn btn-danger btn-block" data-toggle="modal" data-target="#localTransfer" onclick="actionperform('banktransfer');">Deposit</a>
          </div>
        </div>
      </div>
    </div>

    <div class="each-methods">
      <div class="row">
        <div class="col-sm-2">
          <img src="images/deposits/credit-card.svg" alt="">
        </div>

        <div class="payments">
          <div class="col-sm-8">
            <p><strong>Local transfer in Malaysia</strong></p>

            <p>Bank fees vary. Deposit is processed within 1-2 days.</p>
          </div>

          <div class="col-sm-2">
            <a class="btn btn-danger btn-block" data-toggle="modal" data-target="#localTransfer" onclick="actionperform('credit');">Deposit</a>
          </div>
        </div>
      </div>
    </div>



    <div class="each-methods">
      <div class="row">
        <div class="col-sm-2">
          <img src="images/deposits/bank.svg" alt="">
        </div>

        <div class="payments">
          <div class="col-sm-8">
            <p><strong>Local transfer in Malaysia</strong></p>

            <p>Bank fees vary. Deposit is processed within 1-2 days.</p>
          </div>

          <div class="col-sm-2">
            <a class="btn btn-danger btn-block" data-toggle="modal" data-target="#localTransfer" onclick="actionperform('banktransfer');">Deposit</a>
          </div>
        </div>
      </div>
    </div>



    <div class="each-methods">
      <div class="row">
        <div class="col-sm-2">
          <img src="images/deposits/mega-transfer.svg" alt="">
        </div>

        <div class="payments">
          <div class="col-sm-8">
            <p><strong>Local transfer in Malaysia</strong></p>

            <p>Bank fees vary. Deposit is processed within 1-2 days.</p>
          </div>

          <div class="col-sm-2">
            <a class="btn btn-danger btn-block" data-toggle="modal" data-target="#localTransfer" onclick="actionperform('megatransfer');">Deposit</a>
          </div>
        </div>
      </div>
    </div>

    <div class="each-methods">
      <div class="row">
        <div class="col-sm-2">
          <img src="images/deposits/malasya.svg" alt="">
        </div>

        <div class="payments">
          <div class="col-sm-8">
            <p><strong>Local transfer in Malaysia</strong></p>

            <p>Bank fees vary. Deposit is processed within 1-2 days.</p>
          </div>

          <div class="col-sm-2">
            <a class="btn btn-danger btn-block" data-toggle="modal" data-target="#localTransfer" onclick="actionperform('unionpayment');">Deposit</a>
          </div>
        </div>
      </div>
    </div>

    <div class="each-methods">
      <div class="row">
        <div class="col-sm-2">
          <img src="images/deposits/skrill.svg" alt="">
        </div>

        <div class="payments">
          <div class="col-sm-8">
            <p><strong>Local transfer in Malaysia</strong></p>

            <p>Bank fees vary. Deposit is processed within 1-2 days.</p>
          </div>

          <div class="col-sm-2">
            <a href="#" class="btn btn-danger btn-block">Deposit</a>
          </div>
        </div>
      </div>
    </div>


    <div class="each-methods">
      <div class="row">
        <div class="col-sm-2">
          <img src="images/deposits/neteller.svg" alt="">
        </div>

        <div class="payments">
          <div class="col-sm-8">
            <p><strong>Local transfer in Malaysia</strong></p>

            <p>Bank fees vary. Deposit is processed within 1-2 days.</p>
          </div>

          <div class="col-sm-2">
            <a href="#" class="btn btn-danger btn-block">Deposit</a>
          </div>
        </div>
      </div>
    </div>


    <div class="each-methods">
      <div class="row">
        <div class="col-sm-2">
          <img src="images/deposits/bitcoin.svg" alt="">
        </div>

        <div class="payments">
          <div class="col-sm-8">
            <p><strong>Local transfer in Malaysia</strong></p>

            <p>Bank fees vary. Deposit is processed within 1-2 days.</p>
          </div>

          <div class="col-sm-2">
            <a href="#" class="btn btn-danger btn-block">Deposit</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>




             <!-- MODALS -->

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
