<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ezyfx-Asia</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/custom.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <a href="javascript:" id="return-to-top" title="Back to Top of Page"><i class="fa fa-arrow-up"></i></a>
    <nav class="navbar navbar-inverse myNav" role="navigation">
      <div class="container-fluid">
        <!-- <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div> -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav top-layer">
            <!-- <li class="ct-language">
              <a href="#"><i class="fa fa-flag-o fa-4x" title="Select Language"></i> <span>Choose Your Language</span></a> -->
            <!-- <li ><i class="fa fa-flag-o fa-4x"></i> Choose Your Language -->
              <!-- <ul class="list-unstyled ct-language__dropdown"> -->
                <!-- <li><a href="#" class="lang-en lang-select" data-lang="en"><i class="fa fa-caret-down"></i> Scroll Down</a></li> -->
          		  <!-- <li><a href="#googtrans(en|en)" class="lang-en lang-select" data-lang="en"><img src="https://www.solodev.com/assets/google-translate/flag-usa.png" alt="USA"> English</a></li>
          		  <li><a href="#googtrans(en|es)" class="lang-es lang-select" data-lang="es"><img src="https://www.solodev.com/assets/google-translate/flag-mexico.png" alt="MEXICO"> Spanish</a></li>
          		  <li><a href="#googtrans(en|fr)" class="lang-es lang-select" data-lang="fr"><img src="https://www.solodev.com/assets/google-translate/flag-france.png" alt="FRANCE"> French</a></li>
          		  <li><a href="#googtrans(en|zh-CN)" class="lang-es lang-select" data-lang="zh-CN"><img src="https://www.solodev.com/assets/google-translate/flag-china.png" alt="CHINA"> Chinese</a></li>
          		  <li><a href="#googtrans(en|ja)" class="lang-es lang-select" data-lang="ja"><img src="https://www.solodev.com/assets/google-translate/flag-japan.png" alt="JAPAN"> Japanese</a></li> -->
                <!-- <li>
                  <div id="google_translate_element"></div>
                </li> -->
          		<!-- </ul> -->

              <!-- <script type="text/javascript">

              </script> -->
            <!-- </li> -->
            <li><div id="google_translate_element">

            </div></li>
            <li><a href="#" title="Need Help? Contact Us" id="support"><i class="fa fa-headphones"></i> <span>Support</span></a></li>
            <li><a href="https://secure.ezyfx.la/" title="Log In" target="_blank"><i class="fa fa-sign-in"></i> <span>Log In</span></a></li>
            <li><a href="register.php" title="Register" target="_blank"><i class="fa fa-user-plus"></i> <span>Register</span></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- <div class="ct-topbar">
      <div class="container">
    	<ul class="list-unstyled list-inline ct-topbar__list navbar-right">
    	  <li class="ct-language">Choose Your Language <i class="fa fa-arrow-down"></i>
    		<ul class="list-unstyled ct-language__dropdown">
    		  <li><a href="#googtrans(en|en)" class="lang-en lang-select" data-lang="en"><img src="https://www.solodev.com/assets/google-translate/flag-usa.png" alt="USA"> English</a></li>
    		  <li><a href="#googtrans(en|es)" class="lang-es lang-select" data-lang="es"><img src="https://www.solodev.com/assets/google-translate/flag-mexico.png" alt="MEXICO"> Spanish</a></li>
    		  <li><a href="#googtrans(en|fr)" class="lang-es lang-select" data-lang="fr"><img src="https://www.solodev.com/assets/google-translate/flag-france.png" alt="FRANCE"> French</a></li>
    		  <li><a href="#googtrans(en|zh-CN)" class="lang-es lang-select" data-lang="zh-CN"><img src="https://www.solodev.com/assets/google-translate/flag-china.png" alt="CHINA"> Chinese</a></li>
    		  <li><a href="#googtrans(en|ja)" class="lang-es lang-select" data-lang="ja"><img src="https://www.solodev.com/assets/google-translate/flag-japan.png" alt="JAPAN"> Japanese</a></li>
    		</ul>
    	  </li>
    	</ul>
      </div>
    </div> -->
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <div id="logo" class="logo">
              <a href="/"><img src="images/logo.png" alt="EzyFx Limited"></a>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="contact">
              <div class="row">
                <div class="col-sm-4 col-xs-4" id="email-us">
                  <a href="#" id="emailIcon"><i class="fa fa-envelope"></i></a>
                  <a href="mailto:info@ezyfx.la" id="ourEmail" class="animated infinite wobble">info@ezyfx.la</a>
                </div>
                <div class="col-sm-4 col-xs-4" id="call-us">
                  <a href="#"><i class="fa fa-volume-control-phone" id="phoneIcon"></i></a>
                  <p id="ourPhone" class="animated zoomIn">+44 20309 71796</p>
                </div>
                <div class="col-sm-4 col-xs-4" id="chat-us" title="Live Chat">
                  <a href="#" id="chatIcon"><i class="fa fa-comments"></i></a>
                  <a href="#" id="ourChat" class="animated infinite flash" onclick="phplive_launch_chat_0(0)">Chat With Us &raquo;</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>


    <nav class="navbar navbar-default">
      <div class="navbar-header">
  		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
  			<span class="sr-only">Toggle navigation</span>
  			<span class="icon-bar"></span>
  			<span class="icon-bar"></span>
  			<span class="icon-bar"></span>
  		</button>
  		<!-- <a class="navbar-brand" href="#">Large Dropdown Menu</a> -->
  	</div>


  	<div class="collapse navbar-collapse js-navbar-collapse">
  		<ul class="nav navbar-nav">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
  			<li class="dropdown dropdown-large">
  				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-building"></i>Company <b class="caret"></b></a>

  				<ul class="dropdown-menu dropdown-menu-large row">
  					<li class="col-sm-3">
  						<ul>
                <li class="dropdown-header">Welcome To EZYFX</li>
  							<li><a href="about.php">About Us</a></li>
  							<!-- <li class="disabled"><a href="#">Welcome to EzyFx</a></li> -->
  							<!-- <li class="disabled"><a href="#">How to use</a></li> -->
  							<li><a href="vision-mission.php">Our Vision &amp; Mission</a></li>
  							<li class="divider"></li>
  							<li><a href="why-us.php">Why Us</a></li>
  							<li><a href="advantages.php">Ezy Advantages</a></li>
  							<li><a href="ezy-reasons.php">8 top reasons why traders choose EzyFx</a></li>
  							<li><a href="safety-and-more.php">Safety &amp; Security of Client's funds</a></li>
  							<!-- <li><a href="#">Disabled menu items</a></li> -->
  						</ul>
  					</li>
  					<li class="col-sm-3">
  						<ul>
  							<li class="dropdown-header">License &amp; Regulations</li>
  							<li><a href="regulations.php">EzyFx Regulation</a></li>
  							<li><a href="about-vfsc.php">About VFSC</a></li>
  							<li><a href="why-vfsc.php">Why VFSC</a></li>
  							<li><a href="permitted-activites.php">Permitted Activities</a></li>
  							<li><a href="vfsc-faq.php">VFSC Faq</a></li>
  							<li class="divider"></li>
  							<li class="dropdown-header">Need Help?</li>
  							<li><a href="contact-us.php">Contact Us</a></li>
                <li><a href="faq.php">FAQ</a></li>
  						</ul>
  					</li>

  					<li class="col-sm-3">
  						<ul>
  							<li class="dropdown-header">Legal Documents</li>
  							<li class="disabled"><a href="tou.php">Terms Of Use</a></li>
  							<li class="disabled"><a href="au.php">Acceptable Use</a></li>
  							<li class="disabled"><a href="deposit-withdrawal.php">Deposit &amp; Withdrawal</a></li>
  							<li class="disabled"><a href="risk-disclosure.php">Risk Disclosure &amp; Disclaimer</a></li>
  							<li class="disabled"><a href="complaints.php">Complaint Handling Policy</a></li>
  							<li class="disabled"><a href="oep.php">Order Execution Policy</a></li>
  							<li class="disabled"><a href="margin-call-policy.php">Margin Call Policy</a></li>
  							<li class="disabled"><a href="anti-money-laundering.php">Anti Money Laundering</a></li>
  							<li class="disabled"><a href="know-your-customer.php">Know Your Customer</a></li>
                <li class="disabled"><a href="privacy-policy.php">Privacy Policy</a></li>
  						</ul>
  					</li>
  				</ul>

  			</li>


        <li class="dropdown dropdown-large">
  				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-money"></i>FX Trading <b class="caret"></b></a>

  				<ul class="dropdown-menu dropdown-menu-large row">
  					<li class="col-sm-3">
  						<ul>
  							<li class="dropdown-header">Deposits &amp; Withdrawals</li>
  							<li><a href="payment-options.php">Payment Options</a></li>
  							<li><a href="deposit-my-account.php">Deposit My Account</a></li>
  							<li class="disabled"><a href="withdrawals.php">Withdrawals</a></li>
  						</ul>
  					</li>
  					<li class="col-sm-3">
  						<ul>
  							<li><a href="accounts-and-conditions.php">Accounts &amp; Conditions</a></li>
  							<li><a href="trading-accounts.php">Trading Account</a></li>
  							<li><a href="tac.php">Trading Account Conditions</a></li>
  							<li><a href="islamic-accounts.php">Islamic Accounts</a></li>
  						</ul>
  					</li>
  					<li class="col-sm-3">
  						<ul>
  							<li><a href="software-downloads.php">Software Downloads</a></li>
  							<li><a href="metatrader-4.php">MetaTrader 4</a></li>
  							<li><a href="webtrader.php">WebTrader</a></li>
  							<li><a href="metatrader4-mobile.php">MetaTrader 4 Mobile</a></li>
  						</ul>
  					</li>
  					<li class="col-sm-3">
  						<ul>
  							<li class="disabled"><a href="copy-trading.php">Copy Trading</a></li>
  							<li class="disabled"><a href="ezy-socio.php">Ezy Socio</a></li>
  							<li class="disabled"><a href="fx-junction.php">FX Junction</a></li>
  						</ul>
  					</li>
  				</ul>

  			</li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-smile-o"></i>Promotions  <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="promotions.php">See Promotions</a></li>
            <li><a href="dynamic-bonus.php">Dynamic Bonus</a></li>
            <li><a href="welcome-bonus.php">40% Welcome Bonus</a></li>
            <li><a href="energy-bonus.php">60% Energy Bonus</a></li>
            <li><a href="hot-bonus.php">120% Hot Bonus</a></li>
          </ul>
        </li>




        <!-- <li class="dropdown dropdown-large">
  				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-smile-o"></i>Promotions <b class="caret"></b></a>

  				<ul class="dropdown-menu dropdown-menu-large row">
  					<li class="col-sm-3">
  						<ul>
  							<li class="dropdown-header">Glyphicons</li>
  							<li><a href="#">Available glyphs</a></li>
  							<li class="disabled"><a href="#">How to use</a></li>
  							<li><a href="#">Examples</a></li>
  							<li class="divider"></li>
  							<li class="dropdown-header">Dropdowns</li>
  							<li><a href="#">Example</a></li>
  							<li><a href="#">Aligninment options</a></li>
  							<li><a href="#">Headers</a></li>
  							<li><a href="#">Disabled menu items</a></li>
  						</ul>
  					</li>
  					<li class="col-sm-3">
  						<ul>
  							<li><a href="bonus.php">Dynamic Bonus</a></li>
  							<li><a href="#">Button toolbar</a></li>
  							<li><a href="#">Sizing</a></li>
  							<li><a href="#">Nesting</a></li>
  							<li><a href="#">Vertical variation</a></li>
  							<li class="divider"></li>
  							<li class="dropdown-header">Button dropdowns</li>
  							<li><a href="#">Single button dropdowns</a></li>
  						</ul>
  					</li>
  					<li class="col-sm-3">
  						<ul>
  							<li class="dropdown-header">Input groups</li>
  							<li><a href="#">Basic example</a></li>
  							<li><a href="#">Sizing</a></li>
  							<li><a href="#">Checkboxes and radio addons</a></li>
  							<li class="divider"></li>
  							<li class="dropdown-header">Navs</li>
  							<li><a href="#">Tabs</a></li>
  							<li><a href="#">Pills</a></li>
  							<li><a href="#">Justified</a></li>
  						</ul>
  					</li>
  					<li class="col-sm-3">
  						<ul>
  							<li class="dropdown-header">Navbar</li>
  							<li><a href="#">Default navbar</a></li>
  							<li><a href="#">Buttons</a></li>
  							<li><a href="#">Text</a></li>
  							<li><a href="#">Non-nav links</a></li>
  							<li><a href="#">Component alignment</a></li>
  							<li><a href="#">Fixed to top</a></li>
  							<li><a href="#">Fixed to bottom</a></li>
  							<li><a href="#">Static top</a></li>
  							<li><a href="#">Inverted navbar</a></li>
  						</ul>
  					</li>
  				</ul>

  			</li> -->


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book"></i>Education  <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="disabled"><a href="vec.php">Video Education Center</a></li>
            <li class="disabled"><a href="online-webinar-lessons.php">Online Webinar Lessons</a></li>
            <li class="disabled"><a href="trading-central.php">Trading Central</a></li>
          </ul>
        </li>


        <li class="dropdown dropdown-large">
  				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-handshake-o"></i>Partnership <b class="caret"></b></a>

  				<ul class="dropdown-menu dropdown-menu-large row">
  					<li class="col-sm-4">
  						<ul>
  							<li class="dropdown-header">Why Become A Partner?</li>
  							<li><a href="partnership-programs.php">Partnership Programs</a></li>
  							<li><a href="partner-benefits.php">Benefits For Partners</a></li>
                <li><a href="client-benefits.php">Benefits For Clients</a></li>
                <li class="disabled"><a href="partner-earnings.php">Partner's Earnings</a></li>
                <li><a href="rebate-system.php">Rebate System</a></li>
  						</ul>
  					</li>
  					<li class="col-sm-3">
  						<ul>
  							<li class="dropdown-header">Partnership Types</li>
  							<li><a href="standard-partners.php">Standard</a></li>
  							<li><a href="sub-ezy-partners.php">Sub-Ezy Partners</a></li>
  						</ul>
  					</li>
  					<li class="col-sm-3">
  						<ul>
  							<li class="dropdown-header">Promo Material</li>
  							<li><a href="banners-n-more.php">Banners, Logos &amp; Avatars</a></li>
  							<li><a href="ezy-certificate.php">EZYFX Certificates</a></li>
  							<li><a href="ezy-seals.php">EZYFX Corporate Seals</a></li>
                <li><a href="informers.php">Informers</a></li>
                <li><a href="merchandise.php">Merchandise</a></li>
                <li><a href="apis.php">API's</a></li>
                <li><a href="partners-ready-site.php">Partner's Ready Site</a></li>
  						</ul>
  					</li>

  				</ul>

  			</li>



        <li><a href="events.php"><i class="fa fa-calendar"></i>Events</a></li>
  		</ul>

  	</div><!-- /.nav-collapse -->
  </nav>
