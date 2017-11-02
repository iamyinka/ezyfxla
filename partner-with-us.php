<?php include('includes/nav.php'); ?>

<style>
  form
{
  display: block;
  margin: 100px auto;
  /*width: 950px;*/
  /*width: 100%;*/
  overflow: hidden;
  background: #FFF;
  border: 1px solid #E4E4E4;
  border-radius: 5px;
  font-size: 0;
}

form > div
{
  display: inline-block;
  width: 100%;
}

form > div > label
{
  display: block;
  padding: 20px 20px 10px;
  vertical-align: top;
  font-family: Source Sans Pro, Arial, sans-serif;
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
  color: #939393;
  cursor: pointer;
}

form > div.col-2, form > div.col-3, form > div.col-4 { box-shadow: 1px 1px #E4E4E4 }

form > div.col-2 { width: 50% }
form > div.col-3 { width: 33.3333333333% }
form > div.col-4 { width: 25% }

form > div > label > input
{
  display: inline-block;
  position: relative;
  width: 100%;
  height: 27px;
  line-height: 27px;
  margin: 5px -5px 0;
  padding: 7px 5px 3px;
  border: none;
  outline: none;
  border-radius: 3px;
  background: transparent;
  font-size: 14px;
  font-weight: 200;
  opacity: .66;
  transition: opacity .3s, box-shadow .3s;
}

form > div > label > select
{
  display: block;
  width: 100%;
  margin: 16px 0 -3px;
  padding: 0;
  background: transparent;
  border: none;
  outline: none;
  font-size: 14px;
  font-weight: 200;
  opacity: .33;
}


form > div > label > input:focus, form > div > label > select:focus
{
  opacity: 1;
  box-shadow: 0 3px 4px rgba(0, 0, 0, .15);
}
</style>

<section class="why-us">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1><i class="fa fa-handshake-o"></i>EZYFX Partnership</h1>
      </div>
      <?php include 'open-accts.php'; ?>
    </div>
  </div>
</section>

<section class="bonus-icons">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
        <i class="fa fa-gift pull-left"></i> Wide range of Bonuses
      </div>

      <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
        <i class="fa fa-star-half pull-left"></i> 5% Interest Rate
      </div>

      <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
        <i class="fa fa-google-wallet pull-left"></i> Variety of Account types
      </div>

      <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
        <i class="fa fa-lock pull-left"></i> Funds Security
      </div>

      <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
        <i class="fa fa-venus-double pull-left"></i> Fixed Spreads
      </div>

      <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
        <i class="fa fa-tasks pull-left"></i> Many Deposit Methods
      </div>
    </div>
  </div>
</section>

<section class="reg-start partnerWithUs">
  <div class="container">
    <div class="bonus-intro">
      <!-- <p>TRADE MORE &amp; <br>CONVERT YOUR BONUSES INTO REAL MONEY</p>
      <a href="#" class="btn btn-success">CLAIM BONUS</a> -->
      <h6 class="lead" style="color: #fff; font-weight: 700;">Register as an ezyfx partner</h6>
    </div>
  </div>
</section>

<section class="reg-start">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Cooperating with us, you obtain unlimited improvement opportunities, reliability and stability. We offer the highest partnership reward up to 2 pips from a trade of each involved client. Becoming a partner you get ready-made website, 24-hour access to the partners statistics and completed educational and advertising materials.</p>

        <p>To become a partner it is enough to just complete the registration form below. During the cooperation process the partner is allowed to change the type of partnership program. Traders also can become partners, that will be an additional source of income, with information distribution about company's services among acquaintances and friends.</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <h2 class="page-header text-center">Partner Registration Form</h2>
    

    <div class="row">
      <div class="col-md-12">
        <form>
          <div class="col-md-6" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              Name
              <input placeholder="What is your full name?" tabindex="1" />
            </label>
          </div>
          <div class="col-md-6" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              Address
              <input placeholder="What is your mailing address" tabindex="2" />
            </label>
          </div>
          <div class="col-md-4" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              City
              <input placeholder="What City?" tabindex="3" />
            </label>
          </div>
          <div class="col-md-4" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              State
              <input placeholder="What State?" tabindex="4" />
            </label>
          </div>
          <div class="col-md-4" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              Country
              <select tabindex="5">
                <option>Select Country</option>
                <option>United States of EZYFX</option>
                <option>Super Rani Republic</option>
              </select>
            </label>
          </div>
          <div class="col-md-6" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              Telephone
              <input placeholder="What is your phone number?" tabindex="1" />
            </label>
          </div>
          <div class="col-md-6" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              Email
              <input placeholder="What is your email address" tabindex="2" />
            </label>
          </div>
          <div class="col-md-4" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              Partnership Type
              <select tabindex="5">
                <option>Select Type</option>
                <option>Blah Blah Blah</option>
                <option>Hahaha Gotchat!</option>
              </select>
            </label>
          </div>
          <div class="col-md-4" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
            <label>
              Date of Birth
              <input type="date" placeholder="What State?" tabindex="4" />
            </label>
          </div>
          <div class="col-md-4">
            <label>
              Email
              <input placeholder="What is your email address" tabindex="2" />
            </label>
          </div>
          <!-- <div class="col-3">
            <label>
              Shipping Method
              <select tabindex="5">
                <option>Select shipment method</option>
                <option>Standard 3 - 5 Business Days</option>
                <option>Expedited Next-Day Delivery</option>
              </select>
            </label>
          </div> -->
          
        </form>
      </div>
    </div>
  </div>
</section>




<?php include('includes/footer.php'); ?>
