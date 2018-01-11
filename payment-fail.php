<?php
            if (isset($_REQUEST['paymenttype']) && $_REQUEST['paymenttype'] == 'fail') {
                echo "<h2>Your last transaction has been failed.</h2>";
            } else if (isset($_REQUEST['paymenttype']) && $_REQUEST['paymenttype'] == 'success') {
                echo "<h2>Your transaction has been successfully completed.</h2>";
            } else if (isset($_REQUEST['paymenttype']) && $_REQUEST['paymenttype'] == 'callback') {
                parse_str(file_get_contents("php://input"), $_POST);
                $response = $_POST["response"];
                $response = json_decode($response, true);
// Print out order_id to notify us you have received the payment result
                echo $response["order_id"];
                $items = $response["items"];
                $quantity = $response["quantity"];
                $amount = $response["amount"];
                $currency = $response["currency"];
                $merchant_id = $response["merchant_id"];
                $order_id = $response["order_id"];
                $status = $response["status"];

                $secret_code = "6c417hg8eaef344c41b8ffggh56064cdfe13101dc28bbnx9b03bbb34c7e96dbdf4";
                if ($status == "success") {
                    $transaction_id = $response["transaction_id"];
                    $token = $response["token"];
                    if ($token == hash("md5", $secret_code . $order_id . $transaction_id . $secret_code)) {
//your statement here
//update your database for success transaction
                        echo "<h3>Your Payment is Confirmed</h3>";
                    }
                } else {
                    echo "<h3>Your Payment is Failed</h3>";
                    echo $message = $response["message"];
                }
            }
            ?> 
<?php include('includes/nav.php'); ?>



<section class="why-us">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1><i class="fa fa-money"></i>Payment Failed</h1>
      </div>
      <?php include 'open-accts.php'; ?>
    </div>
  </div>
</section>

<section class="reg-start deposit">
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="deposit-intro text-center">
            <h4>Your last transaction failed!</h4>
          </div>
        </div>
    </div>
  </div>
</section>

<?php include('includes/footer.php'); ?>
