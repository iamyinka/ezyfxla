<?php include('includes/nav.php'); ?>


  <div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
      <div id="homeModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content homeModal">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Looking for a new MT4 Broker?</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-xs-12 col-sm-12">
                  <div class="form-logo">
                    <img src="images/logo.png" alt="" class="img-responsive img-thumbnail">
                  </div>
                  <div id="mail-status"></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="subscribeForm">
                    
                    <form role="form" action="includes/process.php" method="post" id="subscribeForm">
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group addon">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" id="subscriberName" placeholder="Enter Full Name" name="subscriberName" required="" minlength="3">
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group addon">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope-o"></i></span>
                            <input type="email" class="form-control" id="subscriberEmail" placeholder="Enter Email Address" name="subscriberEmail" required="">
                          </div>
                        </div>
                      </div>

                      <!-- <div class="form-group">
                        <div class="input-group">
                          <div class="input-group addon">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-mobile-phone"></i></span>
                            <input type="text" class="form-control" id="subscriberPhone" placeholder="Enter Phone Number" name="subscriberPhone" required="" minlength="8">
                          </div>
                        </div>
                      </div> -->

                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group addon">
                            <input id="phone" type="tel" class="form-control" name="subscriberPhone" required="" style="width: 100%;">
                          </div>
                        </div>
                      </div>

                      <div class="checkbox" style="color: #444;">
                        <label for="check"></label>
                        <input type="checkbox" name="check" id="check" required=""> I <strong style="color: #b33;">Agree</strong> to the <em>Terms &amp; Conditions</em>.
                      </div>

                      <div class="form-group">
                        <input type="submit" name="subscribeBtn" value="JOIN US NOW &raquo;" class="btn btn-custom-demo btn-block">
                      </div>
                    </form>
                  </div>
                </div>

                
                

                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="subscribeImgQuoute">
                    <img src="images/refactor/home-modal.png" alt="">
                  </div>
                </div>
              </div>
              <hr>
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
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

<!-- carousel -->

  <div class="main-hero">
    <div id="myCarousel" class="carousel slide">
        <!-- <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="" contenteditable="false"></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active" contenteditable="false"></li>
            <li data-target="#myCarousel" data-slide-to="2" class="" contenteditable="false"></li>
            <li data-target="#myCarousel" data-slide-to="3" class="" contenteditable="false"></li>
            <li data-target="#myCarousel" data-slide-to="4" class="" contenteditable="false"></li>
        </ol> -->
        <div class="carousel-inner">
            <div class="item active" style="">
                <a href="register.php">
                  <img src="images/refactor/sliders/banners/04.jpg" alt="" class="">
                </a>

                <div class="carousel-caption">
                    <h4 class="bigText wow zoomIn" data-wow-duration="2s">No Deposit Bonus</h4>

                    <p class="smallText wow animated zoomIn" data-wow-delay="2s" data-wow-duration="2s">
                      Get $100 USD and trade instantly!
                    </p>

                    <a href="dynamic-bonus.php" class="btn btn-danger btn-lg wow animated zoomIn" data-wow-delay="2s" data-wow-duration="2s">Get Started Now &raquo;</a>

                    <a href="register.php" class="btn btn-success btn-lg wow animated zoomIn" data-wow-delay="2s" data-wow-duration="2s">Join Us Now &raquo;</a>
                </div>
            </div>
            <div class="item">
                <a href="register.php">
                  <img src="images/refactor/sliders/banners/05.jpg" alt="" class="">
                </a>

                <div class="carousel-caption">
                    <h4 class="bigText wow animated zoomIn" data-wow-duration="2s">Trade With A Trusted Broker Like Us</h4>

                    <p class="smallText wow animated zoomIn" data-wow-delay="2s" data-wow-duration="2s">
                      &quot; Your Wealth Is Our Health &quot;
                    </p>

                    <a href="trading-accounts.php" class="btn btn-danger btn-lg wow animated zoomIn" data-wow-delay="2s" data-wow-duration="2s">See Account Types &raquo;</a>

                    <a href="ezy-reasons.php" class="btn btn-success btn-lg wow animated zoomIn" data-wow-delay="2s" data-wow-duration="2s">Learn More &raquo;</a>
                </div>
            </div>
            <div class="item" style="">
                <a href="register.php">
                  <img src="images/refactor/sliders/banners/06.jpg" alt="" class="">
                </a>
                <div class="carousel-caption">
                    <h4 class="bigText wow zoomIn" data-wow-duration="2s">Choose Ezyfx <br> as your trading partner</h4>

                    <p class="smallText wow animated zoomIn" data-wow-delay="2s" data-wow-duration="2s">
                      For your best forex trading experience
                    </p>

                    <a href="ezy-reasons.php" class="btn btn-danger btn-lg wow animated zoomIn" data-wow-delay="2s" data-wow-duration="2s">See Why Many Trade With Us &raquo;</a>

                    <a href="register.php" class="btn btn-success btn-lg wow animated zoomIn" data-wow-delay="2s" data-wow-duration="2s">Join Us Now &raquo;</a>
                </div>
                <!-- <div class="carousel-caption">
                    <h4 class="bigText">Start with 100% Tradable Bonus</h4>

                    <p class="smallText">
                      Trade Forex With Asia's Best Forex Broker.
                    </p>

                    <a href="dynamic-bonus.php" class="btn btn-danger">Get Started Now &raquo;</a>

                    <a href="register.php" class="btn btn-success">Join Us Now &raquo;</a>
                </div> -->
            </div>
            <div class="item">
                <a href="deposit-my-account.php">
                  <img src="images/refactor/sliders/banners/08.jpg" alt="" class="">
                </a>

                <div class="carousel-caption">
                    <h4 class="bigText wow zoomIn" data-wow-duration="2s">Do you see a millionaire in your mirror?</h4>

                    <p class="smallText wow animated zoomIn" data-wow-delay="2s" data-wow-duration="2s">
                      If not, It's time for a change!
                    </p>

                    <a href="register.php" class="btn btn-danger btn-lg wow animated zoomIn" data-wow-delay="2s" data-wow-duration="2s">Register With Us &raquo;</a>

                    <a href="partnership-programs.php" class="btn btn-success btn-lg wow animated zoomIn" data-wow-delay="2s" data-wow-duration="2s">Partner With EZYFX &raquo;</a>
                </div>
            </div>
            <div class="item">
                <a href="deposit-my-account.php">
                  <img src="images/refactor/sliders/banners/10.jpg" alt="" class="">
                </a>

                <div class="carousel-caption">
                    <h4 class="bigText wow zoomIn" data-wow-duration="2s" style="color: #000;">$100 DEPOSIT Bonus Withdrawable</h4>

                    <p class="smallText wow animated zoomIn" data-wow-delay="2s" data-wow-duration="2s" style="color: #000;">
                      That's right! Start with 100% Tradable Bonus.
                    </p>

                    <a href="promotions.php" class="btn btn-danger btn-lg wow animated zoomIn" data-wow-delay="2s" data-wow-duration="2s">Read More &raquo;</a>

                    <a href="welcome-bonus.php" class="btn btn-success btn-lg wow animated zoomIn" data-wow-delay="2s" data-wow-duration="2s">Enjoy Our Welcome Bonus &raquo;</a>
                </div>
            </div>
        </div>

        <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>

        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a> -->


    </div>
  </div>


  <section class="intro">
    <div class="container">
      <div class="section-title wow slideInLeft">
        <h1>The Best Broker in Asia</h1>
        <p><small>...providing universal trading tools for money management</small></p>
        <img src="images/divider.png" alt="Divider">
      </div>

      <div class="get-started wow slideInRight">
        <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-2">
  					<a href="https://secure.ezyfx.la/open-demo-account" target="_blank" class="btn btn-custom-demo btn-lg-xs btn-block">Open Demo Account</a>
  					<br>
  				</div>

          <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0">
  					<a href="https://secure.ezyfx.la/open-live-account" target="_blank" class="btn btn-custom-live btn-lg-xs btn-block">Open Live Account</a>
  					<br>
  				</div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 text-center">
  					<div class="animate-flicker">
  					  <a href="downloads/EzyFx-MT4.zip" class="btn btn-lg btn-link">Download Metatrader trading platform &rarr;</a>
  					</div>
  					<br><br>
  				</div>
        </div>

        <div class="container-fluid">

    			<div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
              <div class="platforms">

        				<a target="_blank" class="appstore" href="https://itunes.apple.com/us/app/metatrader-4/id496212596?mt=8"></a>

        				<a target="_blank" class="googleplay" href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4"></a>

        			</div>
            </div>
      		</div>

        </div>

      </div>
    </div>
    <!-- <hr> -->
  </section>

  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 extras">
          <h4 class="wow pulse">Trading Perks</h4>

          <ul>
            <li class="wow fadeInLeft"><i class="fa fa-check-square-o"></i>World’s Leading Trading Platforms - MetaTrader 4</li>
            <li class="wow fadeInLeft"><i class="fa fa-check-square-o"></i>107 currency instruments</li>
            <li class="wow fadeInLeft"><i class="fa fa-check-square-o"></i>88 CFDs on US stocks</li>
            <li class="wow fadeInLeft"><i class="fa fa-check-square-o"></i>Contracts on gold and silver</li>
            <li class="wow fadeInLeft"><i class="fa fa-check-square-o"></i>CFDs on futures</li>
            <li class="wow fadeInLeft"><i class="fa fa-check-square-o"></i>Options trading: intraday and expiry binary options</li>
            <li class="wow fadeInLeft"><i class="fa fa-check-square-o"></i>Unlimited deposit amount</li>
            <li class="wow fadeInLeft"><i class="fa fa-check-square-o"></i>Instant automated processing of all deals</li>
            <li class="wow fadeInLeft"><i class="fa fa-check-square-o"></i>Trading leverage from 1:1 to 1:1000</li>
            <li class="wow fadeInLeft"><i class="fa fa-check-square-o"></i>Shariah Compliant Accounts</li>
            <li class="wow fadeInLeft"><i class="fa fa-check-square-o"></i>Top Bonuses</li>
          </ul>
        </div>
        <div class="col-sm-6 extras">
          <h4 class="wow pulse">How we make you successful</h4>

          <ul>
            <li class="wow fadeInRight"><i class="fa fa-check-square-o"></i>Daily information support</li>
            <li class="wow fadeInRight"><i class="fa fa-check-square-o"></i>80+ Languages</li>
            <li class="wow fadeInRight"><i class="fa fa-check-square-o"></i>Trading facilitated through the largest counteragents providing direct access to the currency market</li>
            <li class="wow fadeInRight"><i class="fa fa-check-square-o"></i>Huge range of trading services</li>
            <li class="wow fadeInRight"><i class="fa fa-check-square-o"></i>24/7 high-quality technical and consultancy support</li>
            <li class="wow fadeInRight"><i class="fa fa-check-square-o"></i>Live analysis and chat</li>
            <li class="wow fadeInRight"><i class="fa fa-check-square-o"></i>Comments and video analytics from professionals</li>
            <li class="wow fadeInRight"><i class="fa fa-check-square-o"></i>More than 260 representative offices worldwide</li>
            <li class="wow fadeInRight"><i class="fa fa-check-square-o"></i>Wide range of depositing options</li>
            <li class="wow fadeInRight"><i class="fa fa-check-square-o"></i>Technical safety of trading accounts at the bank level</li>
            <li class="wow fadeInRight"><i class="fa fa-check-square-o"></i>System of trading servers</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="trading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12">
          <h4 class="page-header text">Accounts Registration</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-3">
          <a href="https://secure.ezyfx.la/open-demo-account" target="_blank">
            <div class="accts-reg">
              <div class="acct-demo">
                <img src="images/acct-demo/01.png" alt="">
              </div>
              <div class="acct-demo-details1">
                <i class="fa fa-usd"></i>
                <h6><span>Demo</span>Account</h6>
              </div>
            </div>
          </a>
        </div>

        <div class="col-xs-6 col-sm-3 col-md-3">
          <a href="https://secure.ezyfx.la/open-live-account" target="_blank">
            <div class="accts-reg">
              <div class="acct-demo">
                <img src="images/acct-demo/02.jpg" alt="">
              </div>
              <div class="acct-demo-details2">
                <i class="fa fa-money"></i>
                <h6><span>Live</span>Account</h6>
              </div>
            </div>
          </a>
        </div>

        <div class="col-xs-6 col-sm-3 col-md-3">
          <a href="partner-with-us.php">
            <div class="accts-reg">
              <div class="acct-demo">
                <img src="images/acct-demo/04.jpg" alt="">
              </div>
              <div class="acct-demo-details3">
                <i class="fa fa-thumbs-o-up"></i>
                <h6><span>Partner</span>Account</h6>
              </div>
            </div>
          </a>
        </div>

        <div class="col-xs-6 col-sm-3 col-md-3">
          <a href="partner-with-us.php">
            <div class="accts-reg">
              <div class="acct-demo">
                <img src="images/acct-demo/03.png" alt="">
              </div>
              <div class="acct-demo-details4">
                <i class="fa fa-thumbs-up"></i>
                <h6><span>Multi-Partner</span>Account</h6>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>


<?php include('includes/footer.php'); ?>
