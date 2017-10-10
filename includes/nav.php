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
            <li class="ct-language"><a href="#"><i class="fa fa-flag-o fa-4x" title="Select Language"></i> <span>Choose Your Language</span></a>
            <!-- <li ><i class="fa fa-flag-o fa-4x"></i> Choose Your Language -->
              <ul class="list-unstyled ct-language__dropdown">
          		  <li><a href="#googtrans(en|en)" class="lang-en lang-select" data-lang="en"><img src="https://www.solodev.com/assets/google-translate/flag-usa.png" alt="USA"> English</a></li>
          		  <li><a href="#googtrans(en|es)" class="lang-es lang-select" data-lang="es"><img src="https://www.solodev.com/assets/google-translate/flag-mexico.png" alt="MEXICO"> Spanish</a></li>
          		  <li><a href="#googtrans(en|fr)" class="lang-es lang-select" data-lang="fr"><img src="https://www.solodev.com/assets/google-translate/flag-france.png" alt="FRANCE"> French</a></li>
          		  <li><a href="#googtrans(en|zh-CN)" class="lang-es lang-select" data-lang="zh-CN"><img src="https://www.solodev.com/assets/google-translate/flag-china.png" alt="CHINA"> Chinese</a></li>
          		  <li><a href="#googtrans(en|ja)" class="lang-es lang-select" data-lang="ja"><img src="https://www.solodev.com/assets/google-translate/flag-japan.png" alt="JAPAN"> Japanese</a></li>
          		</ul>
            </li>
            <li><a href="#" title="Need Help? Contact Us" id="support"><i class="fa fa-headphones"></i> <span>Support</span></a></li>
            <li><a href="#" title="Log In"><i class="fa fa-sign-in"></i> <span>Log In</span></a></li>
            <li><a href="#" title="Register"><i class="fa fa-user-plus"></i> <span>Register</span></a></li>
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
              <img src="images/logo.png" alt="EzyFx Limited">
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="contact">
              <div class="row">
                <div class="col-sm-4 col-xs-4" id="email-us">
                  <a href="#" id="emailIcon"><i class="fa fa-envelope"></i></a>
                  <a href="mailto:info@ezyfx.la" id="ourEmail" class="animated infinite wobble">&rarr; info@ezyfx.la</a>
                </div>
                <div class="col-sm-4 col-xs-4" id="call-us">
                  <a href="#"><i class="fa fa-volume-control-phone" id="phoneIcon"></i></a>
                  <p id="ourPhone" class="animated zoomIn">+60-31234567</p>
                </div>
                <div class="col-sm-4 col-xs-4" id="chat-us" title="Live Chat">
                  <a href="#" id="chatIcon"><i class="fa fa-comments"></i></a>
                  <a href="#" id="ourChat" class="animated infinite flash">Chat With Us &raquo;</a>
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
        <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
  			<li class="dropdown dropdown-large">
  				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-building"></i>Company <b class="caret"></b></a>

  				<ul class="dropdown-menu dropdown-menu-large row">
  					<li class="col-sm-3">
  						<ul>
  							<li><a href="about.php">About Us</a></li>
  							<li class="disabled"><a href="#">Welcome to EzyFx</a></li>
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
  							<li><a href="#">License &amp; Regulations</a></li>
  							<li><a href="#">EzyFx Regulation</a></li>
  							<li><a href="#">About VFSC</a></li>
  							<li><a href="#">Why VFSC</a></li>
  							<li><a href="#">Permitted Activities</a></li>
  							<li><a href="#">VFSC Faq</a></li>
  							<li class="divider"></li>
  							<li class="dropdown-header">Need Help?</li>
  							<li><a href="#">Contact Us</a></li>
                <li><a href="#">FAQ</a></li>
  						</ul>
  					</li>

  					<li class="col-sm-3">
  						<ul>
  							<li><a href="#">Legal Documents</a></li>
  							<li><a href="#">Terms Of Use</a></li>
  							<li><a href="#">Acceptable Use</a></li>
  							<li><a href="#">Deposit &amp; Withdrawal</a></li>
  							<li><a href="#">Risk Disclosure &amp; Disclaimer</a></li>
  							<li><a href="#">Complaint Handling Policy</a></li>
  							<li><a href="#">Order Execution Policy</a></li>
  							<li><a href="#">Margin Call Policy</a></li>
  							<li><a href="#">Anti Money Laundering</a></li>
  							<li><a href="#">Know Your Customer</a></li>
                <li><a href="#">Privacy Policy</a></li>
  						</ul>
  					</li>
  				</ul>

  			</li>


        <li class="dropdown dropdown-large">
  				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-money"></i>FX Trading <b class="caret"></b></a>

  				<ul class="dropdown-menu dropdown-menu-large row">
  					<li class="col-sm-3">
  						<ul>
  							<li><a href="#">Deposits &amp; Withdrawal</a></li>
  							<li><a href="#">Payment Options</a></li>
  							<li><a href="#">Deposit My Account</a></li>
  							<li><a href="#">Withdrawals</a></li>
  						</ul>
  					</li>
  					<li class="col-sm-3">
  						<ul>
  							<li><a href="accounts-and-conditions.php">Accounts &amp; Conditions</a></li>
  							<li><a href="#">Trading Account</a></li>
  							<li><a href="#">Trading Account Conditions</a></li>
  							<li><a href="#">Islamic Accounts</a></li>
  						</ul>
  					</li>
  					<li class="col-sm-3">
  						<ul>
  							<li><a href="#">Software Downloads</a></li>
  							<li><a href="#">MetaTrader 4</a></li>
  							<li><a href="#">WebTrader</a></li>
  							<li><a href="#">MetaTrader 4 Mobile</a></li>
  						</ul>
  					</li>
  					<li class="col-sm-3">
  						<ul>
  							<li><a href="#">Copy Trading</a></li>
  							<li><a href="#">Ezy Socio</a></li>
  							<li><a href="#">FX Junction</a></li>
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
            <li><a href="#">Video Education Center</a></li>
            <li><a href="#">Online Webinar Lessons</a></li>
            <li><a href="#">Trading Central</a></li>
          </ul>
        </li>


        <li class="dropdown dropdown-large">
  				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-handshake-o"></i>Partnership <b class="caret"></b></a>

  				<ul class="dropdown-menu dropdown-menu-large row">
  					<li class="col-sm-4">
  						<ul>
  							<li class="dropdown-header">Why Become A Partner?</li>
  							<li><a href="#">Partnership Programs</a></li>
  							<li><a href="#">Benefits For Partners</a></li>
                <li><a href="#">Benefits For Clients</a></li>
                <li><a href="#">Partner's Earnings</a></li>
                <li><a href="#">Rebate System</a></li>
  						</ul>
  					</li>
  					<li class="col-sm-3">
  						<ul>
  							<li class="dropdown-header">Partnership Types</li>
  							<li><a href="#">Standard</a></li>
  							<li><a href="#">Sub-Ezy Partners</a></li>
  						</ul>
  					</li>
  					<li class="col-sm-3">
  						<ul>
  							<li class="dropdown-header">Promo Material</li>
  							<li><a href="#">Banners, Logos &amp; Avatars</a></li>
  							<li><a href="#">EZYFX Certificates</a></li>
  							<li><a href="#">EZYFX Corporate Seals</a></li>
                <li><a href="#">Informers</a></li>
                <li><a href="#">Merchandise</a></li>
                <li><a href="#">API's</a></li>
                <li><a href="#">Partner's Ready Site</a></li>
  						</ul>
  					</li>

  				</ul>

  			</li>



        <li><a href="#"><i class="fa fa-calendar"></i>Events</a></li>
  		</ul>

  	</div><!-- /.nav-collapse -->
  </nav>
