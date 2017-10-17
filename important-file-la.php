<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header();
?>
	<?php
$creaditcard = array(EUR, GBP, USD, RUB);
$megatransfer = array(EUR, USD, GBP, AED, AUD, BTC, CAD, CHF, CNY, CZK, DKK, HKD, HUF,ILS, IDR, INR, JPY, KWD, LTC, LTL, MYR, NOK, NZD, PHP, PLN, RON, RUB, SAR, SEK, SGD);
$chinapay = array(EUR, USD, GBP, AED, AUD, CAD, CHF, CNY, CZK, DKK, HKD, HUF,ILS, IDR, INR, JPY, KWD, LTL, MYR, NOK, NZD, PHP, PLN, RON, RUB, SAR, SEK, SGD);
$wiretrans = array(EUR, USD, GBP, CZK, NOK, SEK, CHF, CAD, AUD, DKK, HKD, JPY, NZD, PLN, RUB, SGD);



if(isset($_REQUEST['myactionper']) && $_REQUEST['myactionper']=='banktransfer')
{


    $items = $_REQUEST['ref'];
    $quantity = '1';
    $amount =  number_format($_REQUEST['amount'],2);
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
    $total_amount = number_format($_REQUEST['amount'],2);
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
    $amount =  number_format($_REQUEST['amount'],2);
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
    $total_amount = number_format($_REQUEST['amount'],2);
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
    $amount =  number_format($_REQUEST['amount'],2);
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
    $total_amount = number_format($_REQUEST['amount'],2);
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
    $amount =  number_format($_REQUEST['amount'],2);
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
    $total_amount = number_format($_REQUEST['amount'],2);
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
    $amount =  number_format($_REQUEST['amount'],2);
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
    $total_amount = number_format($_REQUEST['amount'],2);
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

<div class="container pad50">
 <div class="row">
 <div class="col-md-12">
<h3> Deposit funds into an EZYFX Global trading account with security and speed today</h3>
<p>We offer a variety of methods for depositing and withdrawing funds quickly and easily. There are no fees for making a deposit and you are free to withdraw your funds at any time. Learn more about our convenient funding methods by clicking on the options below.</p>
</div>
 </div>

    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="ic-box">
                <h4>Bank Transfer</h4>
                <p class="ic-image"><img class="size-full wp-image-439 aligncenter" src="http://ezyfx.la/wp-content/uploads/2017/05/bank-transfer.png" alt=""/></p>
                <div class="ic-content">
                    <p><strong>Max. Deposit :</strong>$10000</p>
                     <p><strong>Fee:</strong> $0</p>
                    <p><strong>Region:</strong> Worldwide</p>
                    <p><strong>Deposit Time:</strong> Up to 2 Business Days</p>
                </div>
                    <input type="submit" name="Submit" class="ic-btn" value="Deposit Now" onclick="actionperform('banktransfer');"/>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="ic-box">
                <h4>Credit/Debit Card</h4>
                <p class="ic-image">
                    <img class="aligncenter size-full wp-image-441" src="http://ezyfx.la/wp-content/uploads/2017/05/master-card.png" alt="" /><img class="aligncenter size-full wp-image-442" src="http://ezyfx.la/wp-content/uploads/2017/05/visa1.png" alt=""/>
                </p>
                <div class="ic-content">
                    <p><strong>Max. Deposit :</strong>$10000</p>
                    <p><strong>Fee:</strong> $0</p>
                    <p><strong>Region:</strong> Worldwide</p>
                    <p><strong>Withdrawal Time:</strong> Up to 2 Business Days</p>
                </div>
                <input type="submit" name="Submit" class="ic-btn" value="Deposit Now" onclick="actionperform('credit');"/>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="ic-box">
                <h4>Mega Transfer</h4>
                <p class="ic-image">
                    <img class="aligncenter size-full wp-image-444" src="http://ezyfx.la/wp-content/uploads/2017/05/megatransfer.png" alt="" />
                </p>
                <div class="ic-content">
                    <p><strong>Max. Deposit :</strong>$10000</p>
                    <p><strong>Fee:</strong> $0</p>
                    <p><strong>Region:</strong> Worldwide</p>
                    <p><strong>Withdrawal Time:</strong> Up to 2 Business Days</p>
                </div>
                <input type="submit" name="Submit" class="ic-btn" value="Deposit Now" onclick="actionperform('megatransfer');"/>

            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="ic-box">
                <h4>UnionPay</h4>
                <p class="ic-image">
                    <img class="aligncenter size-full wp-image-444" src="http://ezyfx.la/wp-content/uploads/2017/05/UnionPay_logo.svg.png" alt="" />
                </p>
                <div class="ic-content">
                    <p><strong>Max. Deposit :</strong>$10000</p>
                    <p><strong>Fee:</strong> $0</p>
                    <p><strong>Region:</strong> Worldwide</p>
                    <p><strong>Withdrawal Time:</strong> Up to 2 Business Days</p>
                </div>
                <input type="submit" name="Submit" class="ic-btn" value="Deposit Now" onclick="actionperform('unionpayment');"/>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="ic-box">
                <h4>Safe Charge</h4>
                <p class="ic-image">
                    <img class="aligncenter size-full wp-image-444" src="http://ezyfx.la/wp-content/uploads/2017/05/safechargeo2mjiO.png" alt="" />
                </p>
                <div class="ic-content">
                    <p><strong>Max. Deposit :</strong>$10000</p>
                    <p><strong>Fee:</strong> $0</p>
                    <p><strong>Region:</strong> Worldwide</p>
                    <p><strong>Withdrawal Time:</strong> Up to 2 Business Days</p>
                </div>
                <input type="submit" name="Submit" class="ic-btn" value="Coming Soon"/>
            </div>
        </div>

          <div class="col-md-3 col-sm-6">
            <div class="ic-box">
                <h4>Skrill</h4>
                <p class="ic-image">
                    <img class="aligncenter size-full wp-image-443" src="http://ezyfx.la/wp-content/uploads/2017/05/skrill.png" alt="" />
                </p>
                <div class="ic-content">
                    <p><strong>Max. Deposit :</strong>$10000</p>
                    <p><strong>Fee:</strong> $0</p>
                    <p><strong>Region:</strong> Worldwide</p>
                    <p><strong>Withdrawal Time:</strong> Up to 2 Business Days</p>
                </div>
                <input type="submit" name="Submit" class="ic-btn" value="Coming Soon"/>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="ic-box">
                <h4>Neteller</h4>
                <p class="ic-image">
                    <img class="aligncenter size-full wp-image-444" src="http://ezyfx.la/wp-content/uploads/2017/05/net.png" alt="" />
                </p>
                <div class="ic-content">
                    <p><strong>Max. Deposit :</strong>$10000</p>
                    <p><strong>Fee:</strong> $0</p>
                    <p><strong>Region:</strong> Worldwide</p>
                    <p><strong>Withdrawal Time:</strong> Up to 2 Business Days</p>
                </div>
                 <input type="submit" name="Submit" class="ic-btn" value="Coming Soon"/>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="ic-box">
                <h4>Bitcoin</h4>
                <p class="ic-image">
                    <img class="aligncenter size-full wp-image-444" src="http://ezyfx.la/wp-content/uploads/2017/05/Bitcoin_logo.svg.png" alt="" />
                </p>
                <div class="ic-content">
                    <p><strong>Max. Deposit :</strong>$10000</p>
                    <p><strong>Fee:</strong> $0</p>
                    <p><strong>Region:</strong> Worldwide</p>
                    <p><strong>Withdrawal Time:</strong> Up to 2 Business Days</p>
                </div>
                  <input type="submit" name="Submit" class="ic-btn" value="Coming Soon"/>
            </div>
        </div>
    </div>
</div>
<section class="light-bg">
    <div class="container">
        <p><b>Please note:</b></p>
        <ul class="simple-list-design">
            <li><i class="fa fa-check"></i>All Withdrawals are subject to a fee of 1% (Min 10 / Max 30 currency units of the requested currency)</li>
            <li><i class="fa fa-check"></i>Withdrawal Fees are subject to change without prior notice. Please visit our website regularly for the most up to date information!</li>
            <li><i class="fa fa-check"></i>"Withdrawal Time" refers to the estimated period in which the funds will arrive into the client's account under the usual circumstances. Please note, this period is indicative! Actual withdrawal time will vary from case to case depending on the time it takes EZYFXto process each withdrawal request and depending on the payment institution / Bank used by the client to receive the funds. Please check the Deposit and Withdrawal Section of our <a href="https://www.ezyfx.la/terms/">Terms of Business </a>for more information!</li>
            <li><i class="fa fa-check"></i>Withdrawal requests shall be processed only towards a bank account, a bank card or an electronic wallet account, belonging to the EZYFXaccount holder. Third-party transfers are not allowed.</li>
            <li><i class="fa fa-check"></i>EZYFXcan send withdrawals via Skrill and Neteller to countries all over the world except for countries from the European Economic Area (EEA)</li>
        </ul>
    </div>
</section>
<input type="submit" class="ic-btn" value="Deposit Now" id="popupmodeshow" data-toggle="modal" data-target="#myModal" style="display:none;"/>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Please fill this form</h4>
      </div>
      <form action="" method="get" id="mypopupaction">
      <input type="hidden" name="myactionper" id="myactionper" value="" />
      <div class="modal-body">
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <label class="col-md-4">Name</label>
                      <div class="col-md-8">
                          <input type="text" class="form-control" name="customer" placeholder="name" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-md-4">Currency</label>
                      <div class="col-md-8">
                          <select class="form-control currencymy" name="wirecurrency" id="wiretrans" required>
                          	<?php foreach($wiretrans as $mywird){?>
                              <option value="<?php echo $mywird;?>"><?php echo $mywird;?></option>
                            <?php }?>
                          </select>

                          <select class="form-control currencymy" name="creditcurrency" id="creaditcard" required>
                          	<?php foreach($creaditcard as $mycreaditcard){?>
                              <option value="<?php echo $mycreaditcard;?>"><?php echo $mycreaditcard;?></option>
                            <?php }?>
                          </select>


                          <select class="form-control currencymy" name="megacurrency" id="megatransfer" required>
                          	<?php foreach($megatransfer as $mymegatransfer){?>
                              <option value="<?php echo $mymegatransfer;?>"><?php echo $mymegatransfer;?></option>
                            <?php }?>
                          </select>

                          <select class="form-control currencymy" name="chinacurrency" id="chinapay" required>
                          	<?php foreach($chinapay as $mychinapay){?>
                              <option value="<?php echo $mychinapay;?>"><?php echo $mychinapay;?></option>
                            <?php }?>
                          </select>

                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-md-4">Amount</label>
                      <div class="col-md-8">
                          <input type="number" name="amount" class="form-control" placeholder="Enter Amount" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-md-4">Reference No.</label>
                      <div class="col-md-8">
                          <input type="text" name="ref" class="form-control" placeholder="Reference No." required>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <input  type="submit" class="btn btn-default" value="Submit">
      </div>
      </form>
    </div>

  </div>
</div>
<?php get_footer(); ?>
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
