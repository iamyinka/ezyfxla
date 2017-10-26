<?php include('includes/nav.php'); ?>

<section class="why-us">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1><i class="fa fa-credit-card-alt"></i>Payment Options</h1>
      </div>
      <?php include 'open-accts.php'; ?>
    </div>
  </div>
</section>

<section class="reg-start payment-options">
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <!-- Nav tabs category -->
            <ul class="nav nav-tabs faq-cat-tabs myTableTabs text-center">
                <li class="active" style="width: 50%;"><a href="#faq-cat-1" data-toggle="tab">Opening An Account</a></li>
                <li style="width: 50%;"><a href="#faq-cat-2" data-toggle="tab">Dashboard</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content faq-cat-content">
                <div class="tab-pane active in fade" id="faq-cat-1">
                    <div class="panel-group" id="accordion-cat-1">

                        <div class="bs-component">

                          <div class="tab-content">
                              <div id="tab1" class="tab-pane fade active in">
                                  <table class="table table-responsive table-striped table-bordered table-hover footable toggle-medium">
                                      <thead>
                                           <th>Deposits</th>
                                           <th data-hide="all">Currency</th>
                                           <th data-hide="all">Lead Time</th>
                                           <th data-hide="all">Minimum Deposit</th>
                                           <th data-hide="all">Deposit Charge</th>
                                           <th data-hide="all">Minimum Withdraw</th>
                                           <th data-hide="all">Withdraw Charge</th>
                                           <th data-hide="all">Action</th>
                                       </thead>
                                       <tbody>
                                          <tr>
                                            <td>
                                              <small>Local Transfer</small>
                                              <img src="images/payments/local.png" alt="">
                                            </td>
                                            <td>Local Currency</td>
                                            <td>Usually within 30 minutes</td>
                                            <td>$100 USD depends on the local depositor</td>
                                            <td>Fixed Rate Applies</td>
                                            <td>Profit cannot be withdrawn by local depositor</td>
                                            <td> Not Applicable  </td>
                                            <td><a href="#" class="btn btn-danger">Make Deposit &raquo;</a></td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <small>Credit / Debit Card (Visa &amp; MasterCard)</small>
                                              <img src="images/payments/cc.png" alt="">
                                            </td>
                                            <td>USD</td>
                                            <td>Instantly if no further verification needed</td>
                                            <td>$10 USD</td>
                                            <td>No</td>
                                            <td>Withdraw treat as ‘Refund’ from the previous deposit, hence the withdraw amount has to be same with the previous deposit amount.</td>
                                            <td>No * (Refund takes 5 ~ 7 working days)</td>
                                            <td><a href="#" class="btn btn-danger">Make Deposit &raquo;</a></td>
                                          </tr>

                                          <tr>
                                            <td>
                                              <small>Bank Wire / Telegraphic Transfer</small>
                                              <img src="images/payments/swift.png" alt="">
                                            </td>
                                            <td>USD</td>
                                            <td>1 ~ 5 working days</td>
                                            <td>$500 USD</td>
                                            <td>Bank charges upon sending and receiving</td>
                                            <td>$300 USD</td>
                                            <td>Bank charges upon sending and receiving</td>
                                            <td><a href="#" class="btn btn-danger">Make Deposit &raquo;</a></td>
                                          </tr>
                                       </tbody>
                                   </table>
                               </div>
                             </div>
                          </div>

                    </div>
                </div>


                <div class="tab-pane fade" id="faq-cat-2">
                    <div class="panel-group" id="accordion-cat-2">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-1">
                                    <h4 class="panel-title">
                                        FAQ Item Category #2
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-2-sub-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-2">
                                    <h4 class="panel-title">
                                        FAQ Item Category #2
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-2-sub-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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


<?php include('includes/footer.php'); ?>
