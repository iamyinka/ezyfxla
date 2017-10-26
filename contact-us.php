<?php include('includes/nav.php'); ?>

<section class="why-us">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1><i class="fa fa-envelope"></i>Contact Us</h1>
      </div>
      <?php include 'open-accts.php'; ?>
    </div>
  </div>
</section>

<section class="reg-start contact-us">
  <div class="container">
    <h4 class="text-center">Leave Us A Message</h4>
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <form role="form" action="" method="post">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group addon">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" id="contactName" placeholder="Full Name" name="contactName">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <div class="input-group addon">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope-o"></i></span>
                <input type="email" class="form-control" id="contactEmail" placeholder="Enter Email Address">
              </div>
            </div>
          </div>


          <div class="form-group">
            <div class="input-group">
              <div class="input-group addon">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-mobile-phone"></i></span>
                <input type="phone" class="form-control" id="contactPhone" placeholder="Enter Phone Number">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <div class="input-group addon">
                <textarea type="text" class="form-control" id="contactMsg" placeholder="Enter Message Here..."></textarea>
              </div>
            </div>
          </div>

          <div class="form-group">
            <input type="submit" name="depositBtn" value="Send Message &raquo;" class="btn btn-custom-demo btn-block">
          </div>


        </form>
      </div>
    </div>
  </div>
</section>

<?php include('includes/footer.php'); ?>
