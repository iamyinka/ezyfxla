<?php include('includes/nav.php'); ?>

<style>
form
{
	display: block;
	margin: 100px auto 20px;
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

.partner-form {
	/*padding-top: -30px;*/
	margin-top: -80px;
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

<!-- <section class="bonus-icons">
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
</section> -->

<?php include 'includes/bonus-icons.php' ?>

<section class="reg-start partnerWithUs">
	<div class="container">
		<div class="bonus-intro">
			<!-- <p>TRADE MORE &amp; <br>CONVERT YOUR BONUSES INTO REAL MONEY</p>
				<a href="#" class="btn btn-success">CLAIM BONUS</a> -->
				<h6 class="lead text-center" style="color: #fff; font-weight: 700; font-size: 3em;">Register as an ezyfx partner</h6>
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
			<h2 class="text-center" style="margin-top: -10px; padding-bottom: 5px;">Partner Registration Form</h2>
			<div id="form-messages" style="color: #444; text-align: center;"></div>
		</div>

		<div class="container">
			<div class="row">
				<div class="partner-form">
					<div class="col-md-12">
						<form id="ajax-contact" method="post" action="partner-success.php">
							<div class="col-md-6" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
								<label>
									Status
									<select id="status" tabindex="5" name="status" required="">
										<option value="">Select Status</option>
										<option value="Individual">Individual</option>
										<option value="Company">Company</option>
									</select>
								</label>
							</div>
							<div class="col-md-6" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
								<label>
									Partnership Type
									<select tabindex="5" id="partnerType" name="partnerType" required="">
										<option value="">Select Type</option>
										<option value="Introducing Broker">Introducing Broker</option>
										<option value="Trader Partner">Trader Partner</option>
										<option value="Investment Project">Investment Project</option>
										<option value="Webmaster">Webmaster</option>
										<option value="Blogger">Blogger</option>
										<option value="FX Education Project">FX Education Project</option>
										<option value="Exchanger">Exchanger</option>
										<option value="FX Signal Provider">FX Signal Provider</option>
										<option value="FX Advisor Seller">FX Advisor Seller</option>
									</select>
								</label>
							</div>
							<div class="col-md-6" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
								<label>
									Name
									<input placeholder="What is your full name?" id="name" name="name" tabindex="1" required=""/>
								</label>
							</div>
							<div class="col-md-6" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
								<label>
									Email
									<input placeholder="What is your email address" name="email" id="email" tabindex="2" required=""/>
								</label>
							</div>
							<div class="col-md-4" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
								<label>
									Address
									<input placeholder="What is your mailing address" name="address"  id="address" tabindex="2" required=""/>
								</label>
							</div>
							<div class="col-md-4" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
								<label>
									City
									<input placeholder="What City?" tabindex="3" name="city" id="city" required=""/>
								</label>
							</div>
							<div class="col-md-4" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
								<label>
									State
									<input placeholder="What State?" tabindex="4" name="state" id="state" required=""/>
								</label>
							</div>

							<div class="col-md-4" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
								<label>
									Country
									<select name="country" id="country" tabindex="5">
										<option data-countryCode="GB" value="44" Selected>UK (+44)</option>
										<option data-countryCode="US" value="1">USA (+1)</option>
										<optgroup label="Other countries">
											<option data-countryCode="DZ" value="213">Algeria (+213)</option>
											<option data-countryCode="AD" value="376">Andorra (+376)</option>
											<option data-countryCode="AO" value="244">Angola (+244)</option>
											<option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
											<option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
											<option data-countryCode="AR" value="54">Argentina (+54)</option>
											<option data-countryCode="AM" value="374">Armenia (+374)</option>
											<option data-countryCode="AW" value="297">Aruba (+297)</option>
											<option data-countryCode="AU" value="61">Australia (+61)</option>
											<option data-countryCode="AT" value="43">Austria (+43)</option>
											<option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
											<option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
											<option data-countryCode="BH" value="973">Bahrain (+973)</option>
											<option data-countryCode="BD" value="880">Bangladesh (+880)</option>
											<option data-countryCode="BB" value="1246">Barbados (+1246)</option>
											<option data-countryCode="BY" value="375">Belarus (+375)</option>
											<option data-countryCode="BE" value="32">Belgium (+32)</option>
											<option data-countryCode="BZ" value="501">Belize (+501)</option>
											<option data-countryCode="BJ" value="229">Benin (+229)</option>
											<option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
											<option data-countryCode="BT" value="975">Bhutan (+975)</option>
											<option data-countryCode="BO" value="591">Bolivia (+591)</option>
											<option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
											<option data-countryCode="BW" value="267">Botswana (+267)</option>
											<option data-countryCode="BR" value="55">Brazil (+55)</option>
											<option data-countryCode="BN" value="673">Brunei (+673)</option>
											<option data-countryCode="BG" value="359">Bulgaria (+359)</option>
											<option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
											<option data-countryCode="BI" value="257">Burundi (+257)</option>
											<option data-countryCode="KH" value="855">Cambodia (+855)</option>
											<option data-countryCode="CM" value="237">Cameroon (+237)</option>
											<option data-countryCode="CA" value="1">Canada (+1)</option>
											<option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
											<option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
											<option data-countryCode="CF" value="236">Central African Republic (+236)</option>
											<option data-countryCode="CL" value="56">Chile (+56)</option>
											<option data-countryCode="CN" value="86">China (+86)</option>
											<option data-countryCode="CO" value="57">Colombia (+57)</option>
											<option data-countryCode="KM" value="269">Comoros (+269)</option>
											<option data-countryCode="CG" value="242">Congo (+242)</option>
											<option data-countryCode="CK" value="682">Cook Islands (+682)</option>
											<option data-countryCode="CR" value="506">Costa Rica (+506)</option>
											<option data-countryCode="HR" value="385">Croatia (+385)</option>
											<option data-countryCode="CU" value="53">Cuba (+53)</option>
											<option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
											<option data-countryCode="CY" value="357">Cyprus South (+357)</option>
											<option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
											<option data-countryCode="DK" value="45">Denmark (+45)</option>
											<option data-countryCode="DJ" value="253">Djibouti (+253)</option>
											<option data-countryCode="DM" value="1809">Dominica (+1809)</option>
											<option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
											<option data-countryCode="EC" value="593">Ecuador (+593)</option>
											<option data-countryCode="EG" value="20">Egypt (+20)</option>
											<option data-countryCode="SV" value="503">El Salvador (+503)</option>
											<option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
											<option data-countryCode="ER" value="291">Eritrea (+291)</option>
											<option data-countryCode="EE" value="372">Estonia (+372)</option>
											<option data-countryCode="ET" value="251">Ethiopia (+251)</option>
											<option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
											<option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
											<option data-countryCode="FJ" value="679">Fiji (+679)</option>
											<option data-countryCode="FI" value="358">Finland (+358)</option>
											<option data-countryCode="FR" value="33">France (+33)</option>
											<option data-countryCode="GF" value="594">French Guiana (+594)</option>
											<option data-countryCode="PF" value="689">French Polynesia (+689)</option>
											<option data-countryCode="GA" value="241">Gabon (+241)</option>
											<option data-countryCode="GM" value="220">Gambia (+220)</option>
											<option data-countryCode="GE" value="7880">Georgia (+7880)</option>
											<option data-countryCode="DE" value="49">Germany (+49)</option>
											<option data-countryCode="GH" value="233">Ghana (+233)</option>
											<option data-countryCode="GI" value="350">Gibraltar (+350)</option>
											<option data-countryCode="GR" value="30">Greece (+30)</option>
											<option data-countryCode="GL" value="299">Greenland (+299)</option>
											<option data-countryCode="GD" value="1473">Grenada (+1473)</option>
											<option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
											<option data-countryCode="GU" value="671">Guam (+671)</option>
											<option data-countryCode="GT" value="502">Guatemala (+502)</option>
											<option data-countryCode="GN" value="224">Guinea (+224)</option>
											<option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
											<option data-countryCode="GY" value="592">Guyana (+592)</option>
											<option data-countryCode="HT" value="509">Haiti (+509)</option>
											<option data-countryCode="HN" value="504">Honduras (+504)</option>
											<option data-countryCode="HK" value="852">Hong Kong (+852)</option>
											<option data-countryCode="HU" value="36">Hungary (+36)</option>
											<option data-countryCode="IS" value="354">Iceland (+354)</option>
											<option data-countryCode="IN" value="91">India (+91)</option>
											<option data-countryCode="ID" value="62">Indonesia (+62)</option>
											<option data-countryCode="IR" value="98">Iran (+98)</option>
											<option data-countryCode="IQ" value="964">Iraq (+964)</option>
											<option data-countryCode="IE" value="353">Ireland (+353)</option>
											<option data-countryCode="IL" value="972">Israel (+972)</option>
											<option data-countryCode="IT" value="39">Italy (+39)</option>
											<option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
											<option data-countryCode="JP" value="81">Japan (+81)</option>
											<option data-countryCode="JO" value="962">Jordan (+962)</option>
											<option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
											<option data-countryCode="KE" value="254">Kenya (+254)</option>
											<option data-countryCode="KI" value="686">Kiribati (+686)</option>
											<option data-countryCode="KP" value="850">Korea North (+850)</option>
											<option data-countryCode="KR" value="82">Korea South (+82)</option>
											<option data-countryCode="KW" value="965">Kuwait (+965)</option>
											<option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
											<option data-countryCode="LA" value="856">Laos (+856)</option>
											<option data-countryCode="LV" value="371">Latvia (+371)</option>
											<option data-countryCode="LB" value="961">Lebanon (+961)</option>
											<option data-countryCode="LS" value="266">Lesotho (+266)</option>
											<option data-countryCode="LR" value="231">Liberia (+231)</option>
											<option data-countryCode="LY" value="218">Libya (+218)</option>
											<option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
											<option data-countryCode="LT" value="370">Lithuania (+370)</option>
											<option data-countryCode="LU" value="352">Luxembourg (+352)</option>
											<option data-countryCode="MO" value="853">Macao (+853)</option>
											<option data-countryCode="MK" value="389">Macedonia (+389)</option>
											<option data-countryCode="MG" value="261">Madagascar (+261)</option>
											<option data-countryCode="MW" value="265">Malawi (+265)</option>
											<option data-countryCode="MY" value="60">Malaysia (+60)</option>
											<option data-countryCode="MV" value="960">Maldives (+960)</option>
											<option data-countryCode="ML" value="223">Mali (+223)</option>
											<option data-countryCode="MT" value="356">Malta (+356)</option>
											<option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
											<option data-countryCode="MQ" value="596">Martinique (+596)</option>
											<option data-countryCode="MR" value="222">Mauritania (+222)</option>
											<option data-countryCode="YT" value="269">Mayotte (+269)</option>
											<option data-countryCode="MX" value="52">Mexico (+52)</option>
											<option data-countryCode="FM" value="691">Micronesia (+691)</option>
											<option data-countryCode="MD" value="373">Moldova (+373)</option>
											<option data-countryCode="MC" value="377">Monaco (+377)</option>
											<option data-countryCode="MN" value="976">Mongolia (+976)</option>
											<option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
											<option data-countryCode="MA" value="212">Morocco (+212)</option>
											<option data-countryCode="MZ" value="258">Mozambique (+258)</option>
											<option data-countryCode="MN" value="95">Myanmar (+95)</option>
											<option data-countryCode="NA" value="264">Namibia (+264)</option>
											<option data-countryCode="NR" value="674">Nauru (+674)</option>
											<option data-countryCode="NP" value="977">Nepal (+977)</option>
											<option data-countryCode="NL" value="31">Netherlands (+31)</option>
											<option data-countryCode="NC" value="687">New Caledonia (+687)</option>
											<option data-countryCode="NZ" value="64">New Zealand (+64)</option>
											<option data-countryCode="NI" value="505">Nicaragua (+505)</option>
											<option data-countryCode="NE" value="227">Niger (+227)</option>
											<option data-countryCode="NG" value="234">Nigeria (+234)</option>
											<option data-countryCode="NU" value="683">Niue (+683)</option>
											<option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
											<option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
											<option data-countryCode="NO" value="47">Norway (+47)</option>
											<option data-countryCode="OM" value="968">Oman (+968)</option>
											<option data-countryCode="PW" value="680">Palau (+680)</option>
											<option data-countryCode="PA" value="507">Panama (+507)</option>
											<option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
											<option data-countryCode="PY" value="595">Paraguay (+595)</option>
											<option data-countryCode="PE" value="51">Peru (+51)</option>
											<option data-countryCode="PH" value="63">Philippines (+63)</option>
											<option data-countryCode="PL" value="48">Poland (+48)</option>
											<option data-countryCode="PT" value="351">Portugal (+351)</option>
											<option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
											<option data-countryCode="QA" value="974">Qatar (+974)</option>
											<option data-countryCode="RE" value="262">Reunion (+262)</option>
											<option data-countryCode="RO" value="40">Romania (+40)</option>
											<option data-countryCode="RU" value="7">Russia (+7)</option>
											<option data-countryCode="RW" value="250">Rwanda (+250)</option>
											<option data-countryCode="SM" value="378">San Marino (+378)</option>
											<option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
											<option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
											<option data-countryCode="SN" value="221">Senegal (+221)</option>
											<option data-countryCode="CS" value="381">Serbia (+381)</option>
											<option data-countryCode="SC" value="248">Seychelles (+248)</option>
											<option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
											<option data-countryCode="SG" value="65">Singapore (+65)</option>
											<option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
											<option data-countryCode="SI" value="386">Slovenia (+386)</option>
											<option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
											<option data-countryCode="SO" value="252">Somalia (+252)</option>
											<option data-countryCode="ZA" value="27">South Africa (+27)</option>
											<option data-countryCode="ES" value="34">Spain (+34)</option>
											<option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
											<option data-countryCode="SH" value="290">St. Helena (+290)</option>
											<option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
											<option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
											<option data-countryCode="SD" value="249">Sudan (+249)</option>
											<option data-countryCode="SR" value="597">Suriname (+597)</option>
											<option data-countryCode="SZ" value="268">Swaziland (+268)</option>
											<option data-countryCode="SE" value="46">Sweden (+46)</option>
											<option data-countryCode="CH" value="41">Switzerland (+41)</option>
											<option data-countryCode="SI" value="963">Syria (+963)</option>
											<option data-countryCode="TW" value="886">Taiwan (+886)</option>
											<option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
											<option data-countryCode="TH" value="66">Thailand (+66)</option>
											<option data-countryCode="TG" value="228">Togo (+228)</option>
											<option data-countryCode="TO" value="676">Tonga (+676)</option>
											<option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
											<option data-countryCode="TN" value="216">Tunisia (+216)</option>
											<option data-countryCode="TR" value="90">Turkey (+90)</option>
											<option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
											<option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
											<option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
											<option data-countryCode="TV" value="688">Tuvalu (+688)</option>
											<option data-countryCode="UG" value="256">Uganda (+256)</option>
											<!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
											<option data-countryCode="UA" value="380">Ukraine (+380)</option>
											<option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
											<option data-countryCode="UY" value="598">Uruguay (+598)</option>
											<!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
											<option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
											<option data-countryCode="VU" value="678">Vanuatu (+678)</option>
											<option data-countryCode="VA" value="379">Vatican City (+379)</option>
											<option data-countryCode="VE" value="58">Venezuela (+58)</option>
											<option data-countryCode="VN" value="84">Vietnam (+84)</option>
											<option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
											<option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
											<option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
											<option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
											<option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
											<option data-countryCode="ZM" value="260">Zambia (+260)</option>
											<option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
										</optgroup>
									</select>
								</label>
							</div>
							<div class="col-md-4" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
								<label>
									Telephone
									<input placeholder="What is your phone number?" id="tel" tabindex="1" name="tel" required=""/>
								</label>
							</div>

							<div class="col-md-4" style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
								<label>
									Date of Birth
									<input type="date" placeholder="What State?" id="dob" name="dob" tabindex="4" required=""/>
								</label>
							</div>
					<!-- <div class="col-md-4" style="border: none;">
						<label>
							Partnership Agreement here &raquo;
							<input placeholder="What is your email address" tabindex="2" />
						</label>
					</div> -->
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
					<div class="col-xs-12 text-center" style="margin-top: 20px;">
						<!-- <a href="partnership-agreement.php" target="_blank"> -->
							<label>
								<span class="button-checkbox">
									<button type="button" class="btn btn-default" data-color="primary">I Agree to the </button>
									<input type="checkbox" class="hidden" required="" />
									<a href="#agreement">Partnership Terms &amp; Conditions</a>
								</span>
							</label>
							<!-- </a> -->

						</div>

						<div class="col-xs-12 text-center" style="margin-bottom: 20px;">
							<input type="submit" value="Register As A Partner" class="btn btn-danger">
						</div>


					</form>

					<div class="col-xs-12">
						<h2 class="text-center">Partnership Agreement</h2>
						<div class="agreement" id="agreement">

							
							<p>
								The present Agreement is made between EZYFX LIMITED (hereinafter referred to as “the Company”) and the Partner. The Parties hereby agree as follows:
							</p>

							<ol class="subMenuItem ppro">
								<li><em>1.</em> General provisions </li>
								<li><em>1.1.</em> The Company and the Partner undertake obligations to attract Customers so that Customers conduct trading operations with the instruments the Company offers.</li> 
								<li><em>1.2.</em> The Partner undertakes rights and obligations laid down in the present Agreement with regard to attraction of Customers for entering into brokerage service contracts with the Company. The Partner also undertakes other rights and obligations hereinafter set forth. Honouring the commitments stipulated in the present Agreement, the Partner attracts Customers for the Company acting in his name.</li> 
								<li><em>1.3.</em> The Partner unconditionally acknowledges that all Customers attracted are the Company’s Customers.</li> 
								<li><em>1.4.</em> Language</li> 
								<li><em>1.4.1.</em> The ruling language of the present Agreement is English. </li> 
								<li><em>1.4.2.</em> For partners' convenience, the Company may provide the translation of the present Agreement into another language. The function of the translation is merely informative.</li> 
								<li><em>1.4.3.</em> In case of inconsistency between the English version and the translation of the present Agreement into another language, the English version shall be of prior importance.</li> 
								<li><em>1.5.</em> Partner’s identity verification</li> 
								<li><em>1.5.1.</em> The Company shall be entitled to request confirmation of any information the Partner provided at the stage of registration with the affiliate program. For this purpose, the Company shall be entitled to request a scanned copy or a notarized copy of the Partner's ID document (at the Company's discretion). </li> 
								<li><em>1.5.2.</em> If the Partner has not received the Company's request for a scanned copy or a notarized copy of the ID document, verification of the affiliate account shall be deemed non-obligatory. However, the Company reserves the right to restrict access of non-verified accounts to certain services. In this case, the Partner may optionally pass the verification procedure.</li> 
								<li><em>1.5.3.</em> Should any information provided by the Partner during registration (name, residential address or telephone number) change, the Partner shall immediately inform the Partner Relations Department of the Company about these changes and request the Company to update the information.</li> 
								<li><em>1.5.4.</em> The Partner acknowledges and agrees that any information provided at the stage of registration with the affiliate program may be employed by the Company in an anti-money laundering campaign.</li> 
								<li><em>1.5.5.</em> The Partner shall be responsible for the authenticity of the ID documents (copies). The Partner acknowledges the Company's right to contact law enforcement agencies of the country where the ID document was issued to confirm its authenticity if it is questionable. Should the ID document be found to be a forgery, the Company shall be entitled to bring the Partner to justice pursuant to the current legislation of the country where the ID document was issued.</li> 
								<li><em>2.</em> Relationship with Customers</li> 
								<li><em>2.1.</em> The Partner may provide any advertising information about the Company referring to the corresponding section of the Company’s website and information confirmed to be authentic by the Company to potential Customers.</li> 
								<li><em>2.2.</em> The Partner warrants the authenticity and legal validity of all documents and contracts which the Partner submits to the Company in the name of a Customer.</li> 
								<li><em>2.3.</em> The Partner shall provide Customers with essential reliable information relevant to entering into brokerage service contracts with the Company, give Customers explanations regarding content of the contracts and the Company’s services.</li> 
								<li><em>2.4.</em> The Partner is obliged to notify a Customer of risks related to currency trading before the Public Offer Agreement is signed.</li> 
								<li><em>2.5.</em> Providing recommendations and information to motivate a Customer to trading operations is not part of the Company’s service plan. In exceptional cases, the Company has a right to provide information, recommendations and pieces of advice to a Customer at its discretion, however the Company shall not bear responsibility for consequences of such recommendations. All trading operations originating from inaccurate information or a mistake are in effect and compulsory for execution by a Customer and by the Company.</li> 
								<li><em>2.6.</em> The Partner shall refrain from giving a Customer recommendations and pieces of advice concerning trading operations on the trading account. If otherwise, the Company shall not bear responsibility for consequences of the recommendations and pieces of advice.</li> 
								<li><em>3.</em> Partner’s rights and obligations</li> 
								<li><em>3.1.</em> The Partner is obliged to attract new Customers so that Customers enter into brokerage service agreements with the Company and operate on international financial markets under the Company's terms and conditions.</li> 
								<li><em>3.2.</em> The Partner is obliged to open an affiliate account with the Company for receiving commissions.</li> 
								<li><em>3.3.</em> The Partner is obliged to be competent at the Company’s services and master general information about international financial markets.</li> 
								<li><em>3.4.</em> The Partner is obliged to study all the Company’s informational resources on his own and inform Customers about important changes in time.</li> 
								<li><em>3.5.</em> The Partner is obliged to provide Customers of the affiliate group with comprehensive information and legal support, as well as solve problems Customers may face while trading on foreign exchange markets.</li> 
								<li><em>3.6.</em> The Partner is obliged to answer all Customer questions regarding the services provided by the Company.</li> 
								<li><em>3.7.</em> The Partner shall not be entitled to make any sub-agency and other agreements (contracts), which give a right to delegate Partner’s authority, in full or in part, to the third parties under the present Agreement without prior written consent of the Company. Assignment of right of demand is only possible after obtaining the Company’s consent.</li> 
								<li><em>3.8.</em> Should the Partner be incapable of solving the problem of a Customer on his own, the Partner is obliged to contact the Company’s specialists with all the details necessary to solve the problem (account numbers, order tickets, time etc.).</li>  
								<li><em>3.9.</em> The Partner has a right to plan and implement marketing and advertising campaigns, provided that the Company approved the campaigns.</li>  
								<li><em>3.10.</em> The Company reserves the right to cancel affiliate commissions without prior notice in case the Partner was found to request the keyword "EZYFX" and its spelling variations, including conformable words in other languages, in such search engines as YANDEX, GOOGLE etc. to attract new Customers.</li>  
								<li><em>3.11.</em> The Partner has a right to replenish the affiliate account and withdraw funds from it in accordance with the Public Offer Agreement.</li>  
								<li><em>3.12.</em> As stipulated in the Public Offer Agreement, the affiliate account is available in the mode of a private customer account, i.e. the Partner has a right to conduct trading operations on the affiliate account. Due to rapid changes in the exchange rates of national currencies used by customers to replenish their trading accounts, the Company reserves the right to use an average of these exchange rates in settlements with partners.</li>  
								<li><em>3.13.</em> In case of any problems related to business running and rendering the Company’s services, the Partner shall contact the Company with details of a problem so that the Company can consult the Partner in time on possible ways to solve it.</li>  
								<li><em>3.14.</em> The Partner shall only be entitled to conduct trading operations on a Customer’s trading account by written permission of a Customer.</li>  
								<li><em>3.15.</em> The Partner shall not be entitled to make settlements with Customers (cash or non-cash, in national or foreign currency) and to accept funds, securities or other property from Customers.</li>  
								<li><em>3.16.</em> The Partner has a right to monitor efficiency of promotional campaigns through custom affiliate codes and affiliate statistics provided by the Company.</li>  
								<li><em>3.17.</em> The Partner has a right to use promotional materials provided by the Company such as banners, widgets/informers, text links, landing pages etc.</li>  
								<li><em>3.18.</em> The Partner has a right to use the design of the Company’s brand production for advertising.</li>  
								<li><em>3.19.</em> The Partner has a right to attract other partners and earn a commission from every trade of Customers they referred.</li>  
								<li><em>3.20.</em> The Partner has a right to refer ForexCopy followers and receive commissions from their trades.</li>  
								<li><em>3.21.</em> The Partner has a right to refer PAMM traders and earn commissions from their trades.</li>  
								<li><em>3.22.</em> The Partner has a right to refer PAMM investors and earn a profit share set by a PAMM trader in case the investment is profitable.</li>  
								<li><em>3.23.</em> The Partner has a right for a free affiliate website with regularly updated content. The Partner shall be entitled to give it a domain name. The latter is to be approved by the Company in advance.</li>  
								<li><em>3.24.</em> The Partner has a right to conduct trading operations on the affiliate account.</li>  
								<li><em>4.</em> Company’s rights and obligations</li>  
								<li><em>4.1.</em> The Company is obliged to open trading accounts for Customers referred by the Partner pursuant to the Public Offer Agreement.</li>  
								<li><em>4.2.</em> The Company shall enable Customers to conduct trading operations in the system by providing Customers with logins and passwords.</li>  
								<li><em>4.3.</em> The Company is obliged to maintain a comprehensive record of all operations made by Customers.</li>  
								<li><em>4.4.</em> The Company shall provide the Partner with information concerning the content of agreements signed as well as the terms and conditions of Customer participation in foreign exchange trading.</li>  
								<li><em>4.5.</em> The Company is obliged to make payments to the Partner on the basis of a monthly income and expense sheet in accordance with the procedure set out in Clause 10 hereof.</li>  
								<li><em>4.6.</em> The Company has a right to request the Partner to provide a full report on the course and results of the Customer attraction campaigns.</li>  
								<li><em>4.7.</em> The Company has a right to terminate the Agreement in case the Partner did not attract 3 or more Customers within 30 days since registration with the Company’s affiliate program. The Partner shall not be entitled to refer close relatives if the Partner is an individual, or close relatives of the founders if the Partner is a legal entity. The Partner shall not be entitled to refer his own accounts.</li>  
								<li><em>4.8.</em> The Company has a right to exclude a Customer account from the affiliate group in case the account was not replenished within 30 days since registration in Client Cabinet.</li>  
								<li><em>4.9.</em> In the event that the Partner fails to perform any obligations under the present Agreement, the Company has a right to exclude Customers from his affiliate group.</li>  
								<li><em>4.10.</em> The Company has a right to inform Customers of the affiliate group about commissions received by the Partner from trading operations conducted by them on international financial markets pursuant to the present Agreement.</li>  
								<li><em>4.11</em> In the event that the Partner breaches or fails to perform any obligations under the present Agreement, the Company shall be entitled to terminate the present Agreement at its sole discretion.</li>  
								<li><em>4.12</em> The Company has a right to perform other actions stipulated in the present Agreement and its Appendices.</li>  
								<li><em>5.</em> Partner’s work principles and Customer attraction</li>  
								<li><em>5.1</em> The Partner has a right to create a website relevant to the Company’s activities containing information about international financial markets and providing brokerage, dealer and investment services with regard to Clause 3 hereof.</li>  
								<li><em>5.2.</em> A Customer is registered and referred to the affiliate group by either of the following methods:</li>  
								<li><em>5.2.1.</em> A Customer clicks on an affiliate link to the Company’s official website.</li>  
								<li><em>5.2.2</em> A Customer enters an affiliate code in the trading account registration form.</li>  
								<li><em>5.2.3</em> The Partner submits a Customer identification form signed by a Customer to the Company.</li>  
								<li><em>5.3</em> A Customer may choose to decline the Partner’s services and opt for being serviced by the Company.</li>  
								<li><em>5.4.</em> With a view to prevent unfair competition, it is prohibited to move clients from one affiliate group to another, as well as to move present Customers to affiliate groups. This Clause of the present Agreement is to be also observed by present Customers opening new accounts with the Company with an aim to move them to affiliate groups. Note: A Customer may apply to the Company with explanations why he was moved to another affiliate group. The Company shall consider and deliver a decision on each application individually.</li>   
								<li><em>5.5.</em> The Partner shall not be entitled to get affiliate commissions from his own accounts and those owned by his close relatives if the Partner is an individual; as well as from private accounts of founders or accounts of their close relatives if the Partner is a legal entity.</li>  
								<li><em>5.6.</em> The Partner is prohibited to use unfair methods of attracting the Customers including but not limited to using any forms of forced redirecting of users to the websites of the Company and registering them in the affiliate group.</li>   
								<li><em>6.</em> Dispute resolution</li>    
								<li><em>6.1.</em> The Partner has a right to lodge a claim with the Company within 5 working days of the date upon which the Partner became aware of any event or occurrence alleged to give rise to such a claim.</li>    
								<li><em>6.2.</em> Any claim by the Customer against the Company shall be either written on paper and sent to the Company by post or emailed to one of the Company’s official email addresses specified on the Company’s website. Claims made in any other way (forum, telephone etc.) shall not be taken into consideration.</li>    
								<li><em>6.3.</em> The particulars of a claim must contain: the first and second name of the Partner/Partner’s company name; core description of a disputable situation; other dispute details that might contribute to dispute resolution. The particulars of a claim must not contain: emotional evaluation of a disputable situation; verbal abuse of the Company; expletives.</li>    
								<li><em>6.4.</em> The Company has a right to request a Customer/the Partner to provide any information necessary for dispute resolution.</li>    
								<li><em>6.5.</em> The Company has a right to reject a claim if the provisions set out in Clauses 6.2, 6.3, 6.4, 7.2 and 7.3 have not been met.</li>    
								<li><em>6.6.</em> The Company is obliged to examine the Partner’s claim, deliver a decision on the dispute with the shortest possible delay and email it to the Partner. Maximum period for dispute investigation is 10 working days since the date the claim was filed.</li>    
								<li><em>6.7.</em> Disputes concerning interpretation or application of the present Agreement shall be settled by negotiation.</li>    
								<li><em>6.8.</em> A dispute might be referred to arbitration under the dispute resolution procedure. A request for arbitration can be submitted in case the claim was not satisfied, or there was no response to the claim within the period specified in Clauses 6.5, 7.2 and 7.3 hereof.</li>    
								<li><em>7.</em> Data exchange</li>      
								<li><em>7.1.</em> The Company shall contact the Partner via the following means of communication:</li>      
								<li><em>7.1.1.</em> email;</li>      
								<li><em>7.1.2.</em> fax;</li>      
								<li><em>7.1.3.</em> phone;</li>      
								<li><em>7.1.4.</em> post office;</li>      
								<li><em>7.1.5.</em> announcement in appropriate section of the Company’s website;</li>      
								<li><em>7.1.6</em> other electronic means of communication set by the Company (Skype, ICQ, etc.)</li>      
								<li><em>7.2.</em> The Partner may contact the Company using the means of communication listed in Clause 7.1 hereof.</li>      
								<li><em>7.3.</em> Messages, documents, announcements, notifications, confirmations, reports etc. shall be deemed accepted by the opposite Party:</li>      
								<li><em>7.3.1.</em> 1 hour after sending a message by email;</li>      
								<li><em>7.3.2.</em> 1 hour after sending a message by trading terminal internal mail;</li>      
								<li><em>7.3.3.</em> 1 hour after sending a message by fax;</li>      
								<li><em>7.3.4.</em> right after a telephone conversation was finished;</li>      
								<li><em>7.3.5.</em> 7 calendar days after sending documents by post;</li>      
								<li><em>7.3.6.</em> 1 hour after an announcement was posted on the Company’s website.</li>       
								<li><em>8.</em> Confidential information</li>        
								<li><em>8.1.</em> The Partner shall not be entitled to disclose information received from the Company during the cooperation and data the present Agreement contains throughout the period of validity of the present Agreement and within 5 years after its termination.</li>        
								<li><em>8.2.</em> The Partner shall not be entitled to divulge confidential information concerning the Company’s business and services to a rival third party.</li>        
								<li><em>8.3.</em> The Parties shall ensure confidentiality of Customer personal and account data as well as details of trades conducted by Customers.</li>
								<li><em>9.</em> Incomes and mutual settlements</li>
								<li><em>9.1.</em> In case, a daily commission for any of the trading days is more than $500, and the number of attracted active (actually trading) Customers is less than 10, the Company reserves the right to revise the commission amount on this affiliate account and reduce it to 0.5 pip unilaterally.</li>
								<li><em>9.2.</em> The Company shall pay the Partner an affiliate commission only in case the Partner attracted not less than 3 actually trading Customers.</li>
								<li><em>9.3.</em> The Company pays affiliate commissions to the Partner in accordance with Appendix 1 of the present Agreement. Commissions shall not be more than 50% of the average equity value on all Customer accounts in the affiliate group for a reporting month. The average equity value is calculated as a sum of equity values on all Customer accounts at the beginning and at the end of each reporting month divided by 2.</li>
								<li><em>9.4.</em> When calculating commissions, the Company has a right not to take into consideration trades made by Customers as a result of the trading platform faults and exclude Customers responsible for such trades from the affiliate group.</li>
								<li><em>9.5.</em> In case the amount of commissions from trades of a given Customer exceeds 30% of the total amount of commissions credited to the affiliate account, or if Clause 5.5 of the present Agreement is violated, the Company reserves the right not to pay the commissions to the Partner and exclude such Customers from the affiliate group.</li>
								<li><em>9.6.</em> Should orders on the account of a referred Customer be detected violating EZYFX general regulations, the rules of the bonus system; should commissions be charged from allegedly fraudulent accounts; or should Customers be found using strategies aimed at deriving profit from affiliate commissions and rebates to the detriment of the main trading (including but not limited to cases when this strategy is a part of the common strategy of a Customer account and an affiliate account), the Company reserves the right to cancel the commissions from such accounts and exclude such Customers from the affiliate group.</li>
								<li><em>9.7.</em> In case registration data of the Partner coincides, in part or in full, with registration data of a Customer who belongs to the affiliate group, the Company reserves the right to regard this coincidence as a ground to apply Clauses 5.5 and 9.5 of the present Agreement to the affiliate account in full measure.</li>
								<li><em>9.8.</em> In case the account of a Customer belonging to the affiliate group and the affiliate account are found using the same IP address, the Company reserves the right to consider this coincidence as a ground to apply Clauses 5.5 and 9.5 of the present Agreement to the affiliate account in full measure.</li>
								<li><em>9.9.</em> In order to prevent dishonest attempts to obtain commissions from trades executed on the accounts of referred Customers or the accounts registered under assumed names yet managed by the Partner, the Company reserves the right not to pay affiliate commissions from trades which yield the profit less than 3 pips.</li>
								<li><em>9.10.</em> The Company may regard cases of violation of Clauses 3.1 and 5.4 of the present Agreement by the Partner as activity inconsistent with the affiliate program principles. Customers attracted through violation of the above-mentioned Clauses of the present Agreement shall be excluded from the affiliate group, and commissions derived from their trades shall be cancelled in full.</li>
								<li><em>9.11.</em> On a monthly basis, the Partner has a right to request the Company to check the number of Customers referred and the number of Customer accounts as well as to review the results of their trading operations.</li>
								<li><em>9.12.</em> A commission is credited to the affiliate account immediately after a referred Customer closes a trade. In case the accounts of the Partner and a Customer are based on different servers of the Company, an affiliate commission is credited the next day after a Customer closes a trade.</li>
								<li><em>9.13.</em> The Company reserves the right not to pay a commission from trades the margin of which proceeds from the bonus funds of the bonus program participants. This Clause is applicable to commissions that have already been credited. Such bonus program participants may be excluded from the affiliate group.</li>
								<li><em>9.14.</em> In case a Customer belonging to the affiliate group applied to the Company’s Dealing Department with a claim regarding an order from which the Partner received a commission, the Company reserves the right to cancel the affiliate commission in full.</li>
								<li><em>9.15.</em> In case the profit from a trade made by a Customer does not exceed 5 pips, the Company reserves the right to adjust the affiliate commissions the Partner received from a part of such trades.</li>
								<li><em>9.16.</em> Should the total amount of affiliate commissions obtained from any trading account exceeds 60% of the total deposit made by a Customer to this account (for instance, if the total amount of affiliate commissions from a $1,000 Customer account is more than $600), the Company reserves the right to adjust the total amount of affiliate commissions so that it is not more than 60% of the total deposit.</li>
								<li><em>9.17.</em> The Company pays commissions to the Partner in accordance with Appendix 1 of the present Agreement.</li>
								<li><em>9.18.</em> The Parties undertake to calculate and pay their taxes and other third party fiscal duties independently.</li>
								<li><em>9.19.</em> Commission withdrawal shall be proceeded within the term, defined by the payment system, however, in case commission from referrals that were deposited via a credit card and some other payment systems, the term might be extended up to 45 calendar days since the last replenishment through this particular system with the further extending possible if required. The Company shall duly inform the Partner of imposing such restrictions.</li>
								<li><em>9.20.</em> The Company reserves the right to cancel anytime any commissions over 1.5 pips without explanations, even after it has been credited. It can be due to the fact that cooperation with the Partner caused losses for the Company including losses while servicing his financial operations.</li> 
								<li><em>10.</em> Final provisions</li> 
								<li><em>10.1.</em> The present Agreement enters into force on the date when the last of the two Parties has duly signed it.</li> 
								<li><em>10.2.</em> The present Agreement is valid for 12 months since the date when signed by the Parties.</li> 
								<li><em>10.3.</em> Should the conditions of the present Agreement be fulfilled, the Agreement shall be prolonged for an indefinite period of time.</li> 
								<li><em>10.4.</em> The Company shall have the absolute discretion to amend and supplement any of the terms and conditions stipulated in the present Agreement and shall give 5 calendar days’ prior notice.</li> 
								<li><em>10.5.</em> Either Party may terminate the present Agreement unilaterally by giving at least 5 calendar days’ prior notice to the other Party.</li> 
								<li><em>10.6.</em> Either Party shall be entitled to apply to court seeking to terminate the present Agreement in case of repeated breach of obligations by the other Party and other cases specified in the current legislation.</li> 
								<li><em>10.7.</em> No amendment, supplement or appendix to this agreement shall be effective unless it is in writing and signed by the duly authorized representatives of the Parties within the time limit prescribed by these amendments, supplements and appendices. If the date of becoming effective is not specified, they shall enter into force on the date when signed by the Parties.</li> 
								<li><em>10.8.</em> The present Agreement and its appendices are executed in two copies of which each Party shall retain one. Each copy shall be deemed equally authentic.</li>
							</ol>
							<hr>
							<p>Appendix: Mutual settlements</p>

							<ol class="subMenuItem ppro">
								<li><em>1.</em> The Company shall pay the Partner affiliate commissions from all trades made by Customers referred by the Partner, regardless of the fact whether Customers gained any profit or not. </li>
								<li><em>2.</em> Affiliate commission amount </li>
								<li><em>2.1.</em> The Company shall pay the Partner a commission of 1.5 pips from each trade made on Forex major instruments. </li>
								<li><em>2.2.</em> The Company shall pay the Partner a commission of 1.2 pips from each trade made on CFDs. </li>
								<li><em>2.3.</em> The Company shall pay the Partner a commission of $20 for each trade made on GOLD and $10 for each trade made on SILVER.</li>
								<li><em>2.4.</em> The Company shall pay the Partner a commission equal to 33.3% of the fee charged by the Company from a trade on a given futures contract. </li>
								<li><em>2.5.</em> The Company shall pay the Partner a commission equal to 4% of each option value. </li>
								<li><em>2.6.</em> The affiliate commission amount is specified for a 1 lot trade on Forex, CFDs and metals. </li>
								<li><em>3.</em> Any other payments are possible only if the Company and the Partner agreed it in a collateral arrangement.</li>
							</ol>

							<!-- <h4>Privacy Policy</h4>

							<p>At EZYFX we strive to deliver quality products and services to our users. We value their businesses
								and recognize that privacy is an important issue. The information contained in this Privacy Policy
								explains the practices of EZYFX, and its subsidiaries and affiliates (collectively, "EZYFX," "we," or
								"us") regarding the personal or non-personal information that we collect from you or about you
							through this Site. </p>

							<p>“The Site” shall refer collectively to ezyfx.la website and its available language versions and domain names. </p>

							<p>“User” shall refer to any person or entity visiting, using or otherwise accessing the Site.</p>

							<p>Although we aim to ensure the safety and confidentiality of all information received by our clients, please note that this Privacy Policy does not apply to processing of personal information by third parties such as payment service providers. </p>

							<p>If you have any questions about our Privacy Policy, please contact us at <a href="mailto:support@ezyfx.la">support@ezyfx.la</a></p>

							<h5>Registration and Use of User Activities on the Website </h5>

							<h6>Non-Personal Data </h6>

							<p>EZYFX collects non- personal information about Users when they visit The Site unless Users choose to provide that information to us by registering an account. </p>

							<p>EZYFX may record and analyse all User activities on the Site for the purposes of security, system monitoring, management, and marketing in compliance with legal and regulatory obligations incumbent on EZYFX. We undertake to store such information using adequate security measures and for a limited period of time.</p>

							<h6>Log Files</h6>

							<p>Log files allow us to record visitors' use of the Site. We put together log file information from all our visitors and use it to improve our understanding of Users’ patterns of behaviour and needs, and to make improvements to the Site, based on the way users move around it. Log files do not contain any personal information about the User. We automatically collect non-personal information such as: </p>

							<ul class="ppro">
								<li>&mdash; The type and version of the operating system of User’s computer </li>
								<li>&mdash; The date and time of User’s access to the Site </li>
								<li>&mdash; The type and version of the browser used to access the Site </li>
								<li>&mdash; The IP address from which User accesses the Site</li>
								<li>&mdash; The pages the user has visited</li>
								<li>&mdash; If User linked to the Site from another website, the address of that other website; etc. </li>
							</ul>

							<p>Regularly reviewing this page ensures that Users are always aware of what information we collect and how we use it. </p>

							<h6>Cookies</h6>

							<p>Cookies are small text files sent by a web server and stored on a visitor's browser which are read by the server when Users re-visit a website. Cookies are used to store information such as passwords (encrypted), user-names, interests, shopping preferences, etc., allowing Users to re-visit a website without having to enter the same information again. Cookies are not used to determine the personal identity of visitors to the Site. </p>

							<h6>Personal Data </h6>

							<p>To open a demo or a trading account with EZYFX, Users need to provide certain information (hereinafter referred to as “Personal Data”) about themselves. The Personal Data that we collect may include: </p>

							<ul class="ppro">
								<li>&mdash; Information provided on applications and other forms on the Site, such as full name, address, date of birth, passport data, or other identification information </li>
								<li>&mdash; Personal phone number </li>
								<li>&mdash; Financial information that may include investment experience </li>
								<li>&mdash; Documentation made available to us to confirm identity, such as ID card, passport, utilities, etc., for individual customers  </li>
								<li>&mdash; Company incorporation information for business clients </li>
								<li>&mdash; Payment documents, such as money transfer orders, bank statements, etc.  </li>
							</ul>

							<h6>Use of Personal Data </h6>
							<p>EZYFX may use a User's Personal Data for one or more of the purposes below: </p>

							<ul class="ppro">
								<li>&mdash; To verify User's identity  </li>
								<li>&mdash; To process trading or non-trading operations </li>
								<li>&mdash; To perform anti-money laundering procedures </li>
								<li>&mdash; To keep an accurate and up-to-date record of User’s account data  </li>
								<li>&mdash; To provide information to the User about specific products and services of EZYFX that we believe will be most suitable for him.  </li>
							</ul>

							<h6>Confidentiality in Respect of User IDs and Passwords </h6>

							<p>Users are obliged to keep user IDs, passwords and other means of identification secret. Users shall not store their user IDs, passwords or other means of identification in their browsers and shall delete all temporary files stored in their cache memory as well as surfing history. Users are solely responsible should such means of identification be communicated to, discovered or misused by a third party, and for any and all losses and damages that may result therefrom. </p>

							<p>Users have taken note of the fact that they should disconnect from the identification services proposed by EZYFX before leaving their Internet station. </p>

							<h6>Confidentiality and Encryption </h6>

							<p>The data exchanged between Users and EZYFX is transmitted via open, public networks (such as the Internet) that are not subject to any controls or reviews. Even if the data transmitted is encrypted, it may not necessarily stay encrypted for the entire duration of the transmission, nor may it necessarily remain encrypted at User’s end: it is possible that data may be intercepted. </p>

							<p>Furthermore, Users hereby declare that they have taken note that the legislation applicable in their country may prohibit or restrict the importing, exporting or use of encryption logarithms. In no event shall EZYFX be responsible for any violations of measures governing the importing, exporting or use of encryption logarithms. User alone shall be responsible in the event of any such violation.</p>

							<p>Lastly, User attention is drawn to the fact that information transmitted electronically, e.g. by e-mail, SMS, etc., is in principle not encrypted and may be intercepted.</p>

							<p>If you have any questions about this Privacy Policy or how EZYFX processes your personal information, please contact us by email at <a href="mailto:support@ezyfx.la">support@ezyfx.la</a></p>


							<h4>RISK DISCLOSURE</h4>

							<p>EZYFX Limited., operating under the trading name EZYFX, having its registered address at S.I.P. Building,
								P.O Box 3010, Rue Pasteur, Port Vila, Vanuatu, registration number 17925, hereinafter collectively referred
								to as “EZYFX”, we”, or “us”, is authorised and recognized by Vanuatu FSC as one of the Registered
							Financial Service Provider (FSP). </p>

							<p>“The Site” shall refer collectively to ezyfx.la website and its available language versions and domain names. </p>

							<p>“Client” shall refer to any person or entity who registered an account at the Site, or who is using, visiting or
							otherwise accessing the Site. </p>

							<p>This document is a disclosure by EZYFX Limited, of the potential risks involved in trading on financial
								markets. The document cannot and does not disclose all risks and all other considerable aspects inherent in
								trading on financial markets. The client should first and foremost be aware of the potential losses related to
							this activity. </p>

							<p>The client hereby acknowledges, understands and agrees that:</p>

							<p><strong>Trading is highly speculative and risky</strong></p>

							<p>Trading CFDs or any other derivate product is highly speculative, involves a high-degree of risk of loss and
							may not be appropriate for all clients, but only for those clients who:</p>

							<ul class="ppro">
								<li>&mdash; Understand and are willing to assume the economic, legal and other risks and costs involved;  </li>
								<li>&mdash; Have knowledge and experience in trading in derivatives and in underlying asset types, as well as
								enough time to manage their investment in an active basis; and  </li>
								<li>&mdash; Are able to assume financial losses significantly in excess of margin or deposits as clients may lose
								the total value of the contract not just the margin or the deposit.  </li>
							</ul>

							<p>The client is the only responsible person for all the losses suffered in his account. Therefore, the client
								should be prepared that he may lose all of his investments. Clients are advised not to invest money they
							cannot afford to lose. </p>

							<p><strong>Through EZYFX Limited clients can trade CFDs on forex (FX), spot metals, futures and shares. </strong></p>

							<ol class="ppro">
								<li><strong><em>1.</em> Product description</strong></li>
								<p>A Contract for Difference (CFD) is an agreement to buy or sell a contract that reflects the performance of,
									including among others, FX, precious metals, futures and shares; the profit or loss of is determined by the
									difference between the price the CFD is bought at and the price the CFD is sold at and vice versa. CFDs are
									traded on margin and no physical delivery of either the CFD or the underlying asset is occurring. When
									buying, for instance, CFDs on shares, clients are just speculating on the value of the share to either increase
								or decrease. </p>

								<p>The types of CFDs include, but are not limited to FX CFDs, Futures CFDs, Option CFDs, Share CFDs and
								Stock Index CFDs. </p>

								<p>CFDs fluctuate in value during the day. The price fluctuations of CFDs depend on a number of factors
								including but not limited to availability access to market information. </p>

								<p>CFDs are leveraged products. They offer exposure to the markets while requiring clients to only put down a
									small margin (deposit) of the total value of the trade. CFDs allow traders to take benefit from prices
								moving up (take long positions) or prices moving down (take short positions) on underlying assets. </p>
								<li><strong><em>2.</em> Performance</strong></li>
								<p>Past performance of CFDs does not constitute a reliable indicator of future results. </p>

								<li><strong><em>3.</em> Leverage (Gearing) </strong></li>
								<p>When executing trading operations under margin trading conditions, even a small market movement may
									have a great impact on client‟s trading account due to the effect of leverage (or „gearing‟ as it is also
									referred to). This means that a relatively small market change may lead to a proportionately much larger
									change in the value of client‟s position either favourably or unfavourably. Greater leverage involves greater
								risk. The size of leverage therefore partly determines the result of the investment</p>

								<li><strong><em>4.</em> Major Risks Associated with CFDs Transactions </strong></li>
								<p>As CFDs are leveraged products, they carry a higher level of risk to client‟s capital as compared to
									other financial products and can result in large losses. The value of CFDs may increase or decrease
								depending on the market conditions. </p>

								<p>The client hereby acknowledges, warrants and agrees that he understands these risks, is willing and is
									able, financially and otherwise, to assume the risks of trading CFDs. The client shall hold full
								responsibility for all risks and financial resources used, as well as the chosen trading strategy. </p>

								<p>We recommend maintaining a Margin Level no lower than 1,000%, as well as placing Stop Loss orders to
									limit potential losses. EZYFX Limited reserves the right to decrease the leverage depending on client‟s
								trading volume. </p>

								<li><strong><em>5.</em> Off-Exchange Transactions in Derivatives </strong></li>
								<p>When clients trade CFDs with EZYFX Limited, clients will be entering into an off-exchange (OTC)
									derivative transaction, by placing their orders through the trading platform of EZYFX Limited. These
									OTC transactions could involve greater risk than investing in on-exchange derivatives as there is no
									exchange market on which to close out an open position. The client must open and close a position
									with EZYFX Limited that is not transferable to any other person. In this case, the client may be
								exposed to the risk of EZYFX Limited default. </p>

								<li><strong><em>6.</em> Counterparty Risk </strong></li>
								<p>A counterparty risk refers to the risk of default of one party in a particular transaction and its inability
									to meet its financial obligations. EZYFX Limited holds clients‟ money in an account that is segregated
									from other clients‟ and EZYFX Limited‟s money, in compliance with current regulations but this may
								not afford complete protection. </p>

								<li><strong><em>7.</em> Stop Loss Limit </strong></li>
								<p>Clients understand that there may be cases in which a Stop Loss limit is ineffective, for example, where
									there are rapid price movements or market closure, and Stop Loss limits cannot always prevent clients
								from losses. </p>

								<li><strong><em>8.</em> Liquidity Risk </strong></li>
								<p>Clients should take into consideration that some financial instruments may not become immediately
									liquid due, for example, to reduced demand and clients may not be able to trade them quickly enough
									to prevent a possible loss, or to easily obtain information on the value of these financial instruments or
								the extent of the associated risks. </p>

								<li><strong><em>9.</em> Execution Risk and Underlying Market Volatility</strong></li>
								<p>CFDs and other financial derivative products are instruments that allow clients to trade on price
									movements in underlying instruments/ markets. Although we offer our own prices at which clients trade
								CFDs, EZYFX Limited's prices are derived based on the underlying instruments/ markets. </p>

								<p>Clients should understand and take into consideration that the fluctuation of the underlying instrument
								may have effect on the value of the derivative product and can affect client profitability. </p>

								<p>Under certain circumstances clients' trades may not take place immediately. Clients should be aware
									of “gapping” (time lag) where such events can result in a significant profit or loss on their accounts.
									Such “gapping” may occur when the underlying instrument/ market is open and when it is closed, or if
									there is a time lag between the moment the client places its order and the moment the order is carried
									out. During this period, the market conditions might have moved unfavourably for the client. That is,
								the order is not carried out at the requested price. </p>
								<ol class="subMenuItem">
									<li><em>9.1</em> Technical Risk </li>
									<li><em>9.1.1</em>  Clients shall assume the risk of financial loss caused by the failure of information,
									communication, electronic and other systems. </li>
									<li><em>9.1.2</em> When executing trading operations through the Site, the client shall assume the
										risk of financial loss or damage from any cause or fault whatsoever, including but not
										limited to the failure of hardware and software (Servers/ Internet), improper
										functioning and operation of client's equipment, delayed client terminal updates,
										wrong settings in client‟s terminal, client‟s ignorance of the applicable rules
										described in the MetaTrader4 User Guide. The result of any such failure may be that
										client‟s orders are either not executed or are not executed according to his
									instructions. </li>
									<p>EZYFX Limited does not accept any liability in the case of such a failure. The use of
										wireless or dial-up connection or any other form of unstable connection at the client‟s
										end, may result in poor or interrupted connectivity or lack of signal strength causing
									delays in the data transmission between us and the client when using EZYFX Limited's</p>
									<p>Electronic Trading Platform. The delay may cause sending to EZYFX Limited orders
									that are out of date (at old prices). </p>

									<li><em>9.2</em> Communication</li>
									<ul>
										<p>&mdash; We bear no responsibility for any loss that arises as a result of delayed or un-received
										communication sent to clients by EZYFX Limited</p>
										<p>&mdash; In addition, we bear no responsibility for any loss that arises as a result of unencrypted
										information sent to clients by EZYFX Limited that has been accessed via unauthorised means. </p>
										<p>&mdash; We bear no responsibility for any un-received or unread internal messages sent to clients
										through the trading platform. </p>
										<p>&mdash; The client is solely responsible for the privacy of any information contained within the
										communication received by EZYFX Limited. </p>
										<p>&mdash; Additionally, the client accepts that any loss that arises as a result of unauthorised access of a
										third party to his trading account is not the responsibility of EZYFX Limited.</p>
										<li><em>9.2</em> Force Majeure Events</li>  
										<p>In case of a Force Majeure event the client shall accept any loss arising. </p>        
									</ul>
								</ol>
								<li><strong><em>10.</em> Costs and Other Considerations</strong></li>
								<p>All applicable costs, commissions and fees will be provided to clients by EZYFX Limited or published on
									the Site. Clients should be aware of such costs, commissions and fees that may be charged and influence
									the account profitability of the client. All such costs, commissions and fees may be complex to calculate
								and may be more significant than the gross profits from a trade.</p>
								<p>Not all costs are represented in monetary terms (for instance, costs may appear as a percentage of the
									value of a CFD). EZYFX Limited reserves the right to change, from time to time, any of the costs
									applicable to trading CFDs and clients understand and agree that the most up-to-date information in
								relation to costs is available online at the Site. </p>
								<li><strong><em>11.</em> Swap Values and Charges </strong></li>
								<p>
									A swap is the interest added or deducted for holding a position open overnight. Depending on the position held and the interest rates of the
									currency pair involved in the transaction a client‟s trading account may
either be credited or debited, accordingly. Clients‟ trading accounts are reconciled every day at 23:59:31
(our server time) and the resulting amount shall be automatically converted into the currency that client‟s
trading account is denominated in.
								</p>
								<p>
									EZYFX Limited reserves the right to change the level of the swap rate on each financial instrument at any
time and clients understand and acknowledge that they shall stay informed about that through the Site.
Clients further agree that they will stay informed of the applicable swap value by regularly checking the Site.
In addition, clients are responsible for checking the applicable swap value prior to placing an instruction for
trading.
								</p>
								<li><strong><em>12.</em> Taxation </strong></li>
								<p>
									Although investing in CFDs does not involve taking physical delivery of the underlying financial instrument
independent tax advice should be sought, if necessary, to establish whether the client is subject to any tax,
including stamp duty. It is client‟s sole responsibility to obtain such information and comply with it
accordingly.
								</p>
								<li><strong><em>13.</em> Client’s Acknowledgement and Consent  </strong></li>
								<p>
									The client hereby acknowledges and declares that he has read, understood and accepts without any
reservation all the information herein including without limitation the following:
								</p>
								<ul>
									<p>
										&mdash; Financial instruments in foreign markets could involve risks different from the usual risks in
the market at the client‟s country of residence. The prospect of profit or loss from
transactions in foreign markets is also influenced by fluctuations of the exchange rate. 
									</p>
									
									<p>
										&mdash; When a financial instrument is negotiated in a currency other than the currency of the
client‟s country of residence, any changes in an exchange rate may affect in a negative way
the value, price and performance of the financial instrument. 
									</p>

									<p>
										&mdash; The value of a financial instrument may decrease and the client may receive less money
than invested or the value of the financial instrument may be highly fluctuating. There is a
possibility that client‟s investment become of no value.
									</p>
								</ul>

							</ol>

							<h4 class="text-center">Terms of Use for EZYFX</h4>
							<p class="text-center">Governing the Access to the Website and the Online Trading Environment</p>

							<p>
								<strong>Ezyfx.la</strong> website and its available language versions and domain names (collectively
“the Site”) represents a web-based project, designed and implemented by EZYFX Limited.,
whose registered address is at S.I.P. Building, P.O Box 3010, Rue Pasteur, Port Vila,
Vanuatu.
							</p>

							<p>
								<q><strong>Site partners</strong></q>  are third-party service suppliers or information providers with whom EZYFX
Limited operates. 
							</p>
							<p>
								<q><strong>The Content</strong></q> is the layout and all content, including but not limited to text, software, sound,
images, photographs, video, charts/graphs or other materials contained on the Site or in
commercially produced information presented through the Site by EZYFX Limited, its
affiliates and Site Partners.
							</p>
							<p>
								<q><strong>User</strong></q>  is any person or entity visiting, using, or otherwise accessing the Site. 
							</p>

							<p>
								<em>Please read these terms and conditions before accessing the content of the Site or using any
services or products provided by it. In case you do not agree with all of the terms and
conditions specified here (and subject to change without prior notice) please do not access
the Site. </em>
							</p>

							<p>
								<em>
									By accessing, using, exploring, consulting the website and downloading Content via a
browser you agree to be bound by the terms and conditions expressed below. 
								</em>
							</p>

							<p>
								EZYFX Limited reserves the right to change these Terms of Use without prior notice and it is
your sole responsibility to regularly review them, and your continued use of the Site
constitutes agreement to all such changes. 
							</p>

							<p>
								If you have any questions about these terms of use, please contact us at <a href="mailto:support@ezyfx.la">support@ezyfx.la</a>
							</p>

							<hr>

							<h6>Local Restrictions</h6>

							<p>
								The products and services presented on the Site are not intended for any person(s) who, based
on their nationality, place of birth, domicile or for any other reasons, is (are) subject to legal
provisions that prohibit foreign financial services providers from engaging in business
activities in these jurisdictions, or which prohibit or restrict natural persons or legal entities
from accessing the websites of foreign financial services providers.
							</p>
							<p>
								Where EZYFX Limited is not authorized by the supervisory authority of a certain country,
EZYFX Limited can as a general rule not promote financial services in that country.
							</p>

							<p>
								In particular, EZYFX Limited is not authorized by the supervisory authorities of the USA, the
Democratic People’s Republic of Korea, Haiti, and Suriname. If Users are domiciled in any
of these countries, they confirm that they access the Site on their own initiative and without
any solicitation from EZYFX Limited. 
							</p>

							<h6>Ownership of the Site</h6>
							<p>
								The Site is the exclusive property of EZYFX Limited. EZYFX Limited’s proprietary rights
shall not be altered in any way by any reproduction or use of the website. 
							</p>

							<h6>Copyright Notice</h6>
							<p>
								All of the trademarks, service marks, and logos displayed on the Site are registered and
unregistered trademarks of EZYFX Limited, its affiliates, or Site Partners who have licensed
their trademarks to EZYFX Limited or some of its affiliates or subsidiaries.
							</p>

							<p>
								Additionally, the layout and all content, including but not limited to text, software, sound,
images, photographs, videos, charts/graphs, or other material contained on the Site or in
commercially produced information presented through the Site by EZYFX Limited, its
affiliates or Site Partners (collectively “The Content”) is protected by copyright, patents or
other proprietary agreements and laws and you are only permitted to use Content as
expressly authorized by EZYFX Limited, its affiliates or its licensors. 
							</p>

							<p>
								Nothing contained herein transfers any rights, title or interest in the Site or the Content to you
as a User. You are allowed to view, download, copy, and reproduce Content subject to the
following conditions:
							</p>

							<ol class="ppro">
								<li>1.) The Content may be used for personal, non-commercial purposes only; </li>
								<li>
									2.) Any and all copyright, trademark or other proprietary rights notices must appear on
all copies, including the copyright notice at the bottom of the Site pages.
								</li>
								<li>
									3.) The Content may not be altered or modified in any way.
								</li>
								<li>
									4.) No diagrams, graphics or charts shall be used separate from the accompanying text.
								</li>
							</ol>

							<p>
								Except as provided above Users may not use, download, upload, copy, display, perform,
reproduce, publish, print, license, post, transmit, frame, mirror on another web service, use
any meta tags, inline any graphics or distribute any Content from the Site, either in whole or
in part without having received permission from EZYFX Limited in writing. 
							</p>

							<p>
								Any rights not expressly granted herein are reserved. By copying or reproducing information
available on the Site you do not acquire any rights; all rights are retained by EZYFX Limited,
its affiliated or Site Partners. Users of the Site are prohibited from using anywhere other than
on the Site and from copying in any way whatsoever software or other tools that are available
through the Site.
							</p>
							<h6>No Offer or Advice Disclosure </h6>
							<p>
								All the information provided on the Site, including but not limited to technical analyses,
equations and other financial results available to users via tools that are available through
the Site, is provided for information purposes only
							</p>
							<p>
								The Site does not constitute an offer to sell or a solicitation of an offer to buy any product or
service that may be referenced on or through the Site. The Site does not constitute an offering
or recommendation by EZYFX Limited of any product or service. Opinions expressed on the
Site may change at any time and EZYFX Limited maintains no duty or obligation to update
information pertaining to specific products. EZYFX Limited does not provide any investment
advice through the Site and users agree that the Site will not be used by them for such
purposes. 
							</p>
							<p>
								All of the investment decisions users take shall be based exclusively on their own assessment
and their personal interpretation of the information available on or through the Site. The
users are solely responsible for such decisions. 
							</p>
							<p>
								Investment in securities featured on the Site are subject to risk. The price of securities may go
down as well as up. Fluctuations in foreign exchange rates can also alter the value of
securities. The future performance of a security cannot be guaranteed by past performance. It
is therefore possible that users do not get back the amount they invest. WE STRONGLY
RECOMMEND THAT USERS PROFESSIONAL ADVICE BEFORE TAKING INVESTMENT
DECISIONS. 
							</p>
							
							<h6>Exclusion of Liability </h6>

							<p>
								Neither EZYFX Limited, its directors, officers, employees, agents or shareholders, nor Site
Partners, their directors, officers, employees, agents or shareholders will assume ANY
LIABILITY FOR ANY LOSS OR DAMAGES WHATSOEVER, be those direct or indirect, incurred as a result of accessing the Site or using the information and services available on
the Site, or as a result of the inability to access or use any information or services available
on or through the Site. 
							</p>
							<p>
								In particular, it is expressly stated that IN NO EVENT WILL EZYFX LIMITED, its directors,
officers, employees, agents or shareholders BE LIABLE FOR ANY LOSS OR DAMAGES
incurred as a result of errors, technical or otherwise, transmission failures, system overloads,
usage problems, interruptions in services (including but not limited to system maintenance
services), any delay in the transmission of information, incompatibility between the website
and your files and/or software (in particular user browsers) and/or computers, malfunction,
interference, the transmission of a virus onto user computers, unauthorized access (such that
may result from hacking or piracy activities, etc.), the wilful blocking of telecommunications
tools or networks, or any other failure or inadequacy on the part of telecommunication or
network service providers.
							</p>
							<h6>Disclaimer of Warranty </h6>

							<p>
								EZYFX Limited and Site Partners aim at providing complete, accurate and up-to-date status
of the data. Nevertheless, they do not guarantee or warrant, either expressly or implicitly, the
quality, pertinence, accuracy, completeness, update status, availability or legality of the
information published on the Site, transmitted to Users or obtained via tools that are
available through the Site. Additionally, real-time information is obtained from what is
believed to be a reliable source, but cannot be guaranteed
							</p>
							<p>
								Furthermore, information may be changed at any time without any prior notice being
required. 
							</p>
							<h6>Material Interests </h6>
							<p>
								EZYFX Limited, its directors, officers, employees, agents or shareholders may have or have
had business relationships or other forms of dealings with companies whose securities are
referred to on the Site. Furthermore, EZYFX Limited, its directors, officers, employees,
agents or shareholders may hold or have held securities that are referred to on the Site. 
							</p>
							<h6>External Links </h6>
							<p>
								Some Site web pages contain links to other websites whose information practices might be
different from those of EZYFX Limited. 
							</p>
							<p>
								EZYFX Limited does not review any of these linked websites and does not guarantee or
warrant in any way the quality, pertinence, accuracy, completeness, update status,
availability or legality of the content of these websites, nor shall it be in any way responsible
for the products, services, information and other content available to Users via these linked
sites. The same shall apply to websites offering links to the Site.
							</p>
							<p>
								We encourage Users to read the privacy statements on other linked sites, as EZYFX Limited
has no control over the information that is submitted to or collected by these third parties. 
							</p>

							<h6>Registration of User Activities on the Site</h6>
							<p>
								EZYFX Limited may record and analyse all User activities on the Site for the purposes of
security, system monitoring and improvement, in compliance with legal and regulatory
obligations incumbent on EZYFX Limited. 
							</p>
							<p>
								EZYFX Limited shall store such information using adequate security measures and for a
limited period of time. For more details, please read our <strong>Privacy Policy</strong>.
							</p>
							<h6>Place of Jurisdiction</h6>
							<p>
								The sole place for jurisdiction of all disputes arising out of or in connection with the Terms
and Conditions herein and/or the use of the Site is Rue Pasteur, Port Vila, Vanuatu
<strong>Partial Nullity and Choice of Law</strong>
							</p>
							<p>
								In the event of one of the Terms and Conditions being void, cancelled or rendered otherwise
invalid, the validity of the remaining Terms and Conditions shall not be affected or impaired.
In all other instances the Terms and Conditions as well as the use of the website are
exclusively governed by and construed in accordance with the laws of Vanuatu. 
							</p>
							<h4>
								ORDER EXECUTION POLICY
							</h4>
							<h6>1. Introduction</h6>
							<p>
								Operating under the trading name EZYFX, regulated and recognized by Vanuatu FSC as one of the Registered Financial Service Provider (FSP). its registered address at S.I.P Building, P.O Box 3010, Rue Pasteur, Port Villa Vanuatu
Referred to as “EZYFX Limited”, we”, or “us”, is authorized and regulated by International Financial Services Commission (IFSC).
							</p>
							<p>
								“The Site” shall refer collectively to ezyfx.la website and its available language versions and domain names.
							</p>

							<p>
								“Client” shall refer to any person or entity who registered an account at the Site.
							</p>
							<p>
								EZYFX Limited has established its Order Execution Policy (hereinafter referred to as the “Policy”) in order to take all reasonable steps to achieve the best possible results for its clients (“Best
Execution”) either when executing client orders or receiving and transmitting orders for execution in relation to financial instruments.
							</p>
							<p>
								EZYFX Limited shall apply the Policy upon acceptance of an order and also when a client gives no specific instruction on the method of execution. Nevertheless, when the client gives a specific instruction on an order, EZYFX Limited will execute the order following such instruction. If EZYFX Limited receives a specific instruction on an order, this may prevent EZYFX Limited from implementing the Policy to achieve the best possible result for the execution of the order.
							</p>
							<h6>2. Scope and Services</h6>
							<p>
								The Policy shall apply whenever EZYFX Limited executes an order on behalf of its clients. EZYFX Limited will always act as principal (counterparty) when executing orders by clients. Although EZYFX Limited takes every reasonable step to achieve the best possible result for its clients, we cannot guarantee that when executing a transaction the client’s price will be more favorable than one which might be available elsewhere.
							</p>
							<h6>3. Order Execution Factors</h6>
							<p>
								EZYFX Limited shall take all reasonable steps to achieve the best possible result for its clients taking into account the following factors when executing clients’ orders against EZYFX Limited’ quoted prices:
							</p>

							<ul class="ppro">
								<li>3.1 Price</li>
								<p>EZYFX Limited produces its own tradable prices from information obtained from third party external sources (such as banks, etc.) that generally provide liquidity to the global market.</p>
								<p>
									For any given Financial Instrument EZYFX Limited will quote two prices: the higher price (ASK) at which the client can buy (go long) that Financial Instrument, and the lower price (BID) at which the client can sell (go short) that Financial Instrument; The difference between the lower and the higher price of a given Financial Instrument is the SPREAD.
								</p>
								<p>
									EZYFX Limited will ensure that the client is given the best execution by ensuring that the calculation of the bid /ask spread is made with reference to a selection of underlying price providers and data sources.
								</p>
								<p>
									EZYFX Limited updates its prices as frequently as the limitations of technology and communication links allow. EZYFX Limited reviews the independent third party external
								</p>
								<p>
									Reference sources it uses at least once a year, to ensure that the pricing it offers continue to be correct and competitive.
								</p>
								<p>
									EZYFX Limited will not quote any price outside its operations time (see Execution Venue(s) below) therefore no orders can be placed by the client during that time.
								</p>

								<li>3.2 Costs</li>
								<p>
									For opening a position in some types of Financial Instruments clients may be required to pay a financing fee or a commission that may be charged in the form of a percentage of the overall value of the trade or as a fixed amount.
								</p>
								<p>
									We make every effort to ensure that clients are informed of such costs before they chose to trade. We further ensure that there are not any unknown to the client variables in place.
								</p>
								<p>
									
									For all types of Financial Instruments we offer, the commission and financing fees are not incorporated into EZYFX Limited quoted price and are charged explicitly to the client account.
								</p>
								<li>3.3 Speed of Execution</li>
								<p>
									Prices change in the course of time and the frequency of the change depends on the different financial instruments and market conditions.
								</p>
								<p>
									EZYFX Limited is committed to providing the highest possible speed of execution within the limitations of technology and communication links.
								</p>
								<p>
									EZYFX Limited acts as principal and not as agent on the client’s behalf. Therefore, EZYFX Limited is the sole Execution Venue for the execution of clients’ orders for the Financial Instruments provided by EZYFX Limited.
								</p>
								<p>
									In case clients undertake transactions on an electronic system, they may be exposed to risks in relation to the system, including but not limited to the failure of hardware and software (Servers/Internet). The result of any system failure may be that clients’ orders are either not executed or are not executed according to their instructions.
								</p>
								<p>
									EZYFX Limited does not accept any liability in the case of such a failure. The use of wireless or dial-up connection or any other form of unstable connection at the client’s end, may result in poor or interrupted connectivity or lack of signal strength causing delays in the data transmission between the us and the client when using EZYFX Limited’ Electronic Trading Platform. The delay may cause sending to EZYFX Limited orders that are out of date (on old prices). In this case EZYFX Limited will update the price and execute the order at the market price available.
								</p>
								<li>3.4 Nature of the Order</li>
								<p>
									The type of the order can affect its execution. Below are given the different types of orders that client can place with us:
								</p>
								<li>3.4.1 Market order </li>
								<p>
									(also “Instant order”) - an order to buy or sell at the price available at a given time. The order will usually be filled at the price the client sees on EZYFX Limited trading platform screen. There may be cases that the price will be different: if the market has moved while the client is placing his order, the price will differ. The client may place a Stop Loss to limit his loss or a Take Profit to limit his profit.
								</p>
								<li>3.4.2 Pending order</li>

								<p>
									Clients are allowed to buy and sell a financial instrument at a pre- defined price in the future, i.e. place the order at the best available price once a given price is reached. We offer are four types of pending orders available in EZYFX Limited trading platform:
								</p>

								<ul class="ppro">
									<li>&mdash; Buy Limit</li>
									<li>&mdash; Buy Stop</li>
									<li>&mdash; Sell Limit</li>
									<li>&mdash; Sell Stop</li>
								</ul>

								<p>
									Clients may also attach a Stop Loss and/or Take Profit on pending orders
								</p>

								<li>3.4.3 Trailing Order</li>
								<p>
									To close a position, clients may use the following orders:
								</p>
								<p>
									Stop Loss - the order closes a position at a price less profitable for the client as compared to the current price when making the order
								</p>
								<p>
									Take Profit – the order closes a position at a price more profitable for the client as compared to the price when making the order.
								</p>
								<li>3.5 Size of the Order</li>

								<p>
									All orders are placed in lot sizes.  A lot is a unit measuring the transaction amount and it  is different per each financial instrument. Details of the lot sizes are available on the Site.
								</p>
								<p>
									If the client wishes to execute a large size order, in some cases the price may become less favorable considering the liquidity in the market. EZYFX Limited reserves the right not to accept a client’s order, in case the size of the order is large and cannot be filled by EZYFX Limited.
								</p>
								<li>3.6 Likelihood of Execution</li>
								<p>
									EZYFX Limited strives to provide its clients with the fastest execution reasonably possible. We execute clients’ orders at the requested price. However, there may be trading conditions causing orders not be filled at the requested price but at the best available price. This may occur, for example, during periods of volatile market conditions; when trading session starts or on possible gaps where the underlying financial instruments have been restricted or suspended on a particular market.
								</p>

								<p>
									Although EZYFX Limited executes all orders placed by the client, it reserves the right to decline an order of any type or execute the order at the first available market price.
								</p>

								<p>
									EZYFX Limited reserves the right to modify its spread. The client may experience widened spreads and execution at the best available price considering the current market conditions.
								</p>

								<p>
									In the case of any technical communication failure, as well as any incorrect reflection on the quotes feed, EZYFX Limited may at its sole discretion not execute a certain order or change the opening and/or closing price of the order.
								</p>

								<li>3.7 Market Impact</li>
								<p>
									Some factors may affect the price of the underlying financial instruments from which the price, quoted by EZYFX Limited, is derived. These factors may influence the criteria that EZYFX Limited takes into consideration in order to ensure the best possible result for its clients. Clients hereby fully and irrevocably accept all risks related to the formation of the
EZYFX limited’ price, including without limitation unfavorable changes in the market
								</p>

								<p>
									Conditions, and acknowledge that EZYFX Limited has taken all reasonable steps to ensure the best possible result for its clients under the current circumstances.
								</p>

								<li>3.8 Best Execution Criteria</li>
								<p>
									EZYFX Limited will generally consider the following best execution criteria for determining the relative importance of the execution factors:
								</p>
								<ul class="ppro">
									<li>&mdash; the kind of the order</li>
									<li>&mdash; the record of the client with EZYFX Limited</li>
									<li>&mdash; the specifics of the execution venue</li>
									<li>&mdash; the specifics of the financial instruments that are the subject of the order</li>	
								</ul>

								<p>
									The best possible result shall be determined in terms of the total consideration (unless the objective of the order execution dictates otherwise), representing the price of the financial instrument and the costs directly or indirectly related to the execution of the order, including execution venue fees, clearing and settlement fees and any other fees paid to third parties involved in the execution of the order (if applicable).
								</p>

								<p>
									Other factors that may affect the execution of an order include without limitation speed, likelihood of execution, order size, order nature.
								</p>
							</ul>

							<h6>4. Specific Instructions</h6>

							<p>
								If the client gives a specific instruction to EZYFX Limited as to how to carry out an order and EZYFX Limited has accepted this instruction, EZYFX Limited shall arrange – to the extent possible – for the execution of the client order strictly in accordance with the given instruction.
							</p>
							<p>
								However, the specific instruction may prevent EZYFX Limited from taking the steps in this Policy to achieve the best possible result for the client.
							</p>
							<p>
								Certain trading conditions may prevent EZYFX Limited from strictly following the client's instructions. This may result in being unable to apply this Policy.
							</p>

							<h6>5. Execution Venue(s)</h6>
							<p>
								Execution venues are the entities with which the orders are placed or to which EZYFX Limited transmits orders for execution. EZYFX Limited will enter into all transactions with the client as principal (counterparty) and act as the sole execution venue for all client orders. The client shall open and close a position of any particular financial instrument with EZYFX Limited through its trading platform.
							</p>
							<p>
								Provided that there is only one possible venue, best execution is achieved by execution on that venue. Clients note that best execution is a process, which considers a variety of factors, not an outcome.
When EZYFX Limited is carrying out a client’s order, EZYFX Limited shall execute the order following its execution policy, however EZYFX Limited does not guarantee that the exact requested price will be obtained at all times and, in any event, the factors may lead to a different result in a particular transaction.
							</p>
							<p>
								The client hereby fully and irrevocably accept that all transactions entered in any particular financial instrument with EZYFX Limited are executed outside a regulated market or a multi-lateral trading facility (MTF) and the client is exposed to a greater risk of a possible default of the counterparty (i.e.
EZYFX Limited).
							</p>
							<h6>6. Monitoring and Review</h6>
							<p>
								EZYFX Limited shall monitor on a regular basis the effectiveness of its order execution arrangements and execution policy to deliver the most favorable result to its clients and to identify and correct any errors or problems that may occur. EZYFX Limited reserves the right to correct any deficiencies in this Policy and to make improvement to its relevant execution arrangements wherever deemed necessary by EZYFX Limited.
							</p>
							<p>
								It should be noted that EZYFX Limited will not notify clients separately of changes, other than substantial
							</p>
							<p>
								Material changes (a substantial material change may include a change of execution venues, considerable delay in carrying out orders, etc.) to the Policy and clients should refer to the Site for the
							</p>
							<h6>7. Client Consent</h6>
							<p>
								The Policy is made available to every existing or potential client of EZYFX Limited. When establishing a business relationship with the client, EZYFX Limited is required to obtain the client’s prior consent to this Policy. Additionally, EZYFX Limited is required to obtain the client’s prior consent before executing client’s orders or receiving and transmitting orders to carry out outside a regulated market or a multi-lateral trading facility (MTF). The client is informed and acknowledges that EZYFX Limited always acts as principal (counterparty) and is the sole execution venue, which is not a regulated market or a multi-lateral trading facility (MTF).
							</p>
							<p>
								By entering into the Public Offer Agreement with EZYFX Limited for providing services of conversion arbitrage operations at the international currency market and derivatives markets, the client is consenting to an application of this Policy on him.
							</p>

							<p>
								In this Policy or any Regulations:
							</p>

							<p>
								Execution venue - shall mean a regulated market, an MTF, a systematic internaliser, or a market maker or other liquidity provider or an entity that performs a similar function in a third country to the functions performed by any of the foregoing.
							</p>

							<p>
								Multilateral trading facility (MTF) - shall mean a multilateral system operated by an investment firm or market operator, which brings together multiple third-party buying and selling interests in financial instruments in the system, in accordance with non-discretionary rules, in a way that results in a contract in accordance with the provisions of Title II of the Markets in Financial Instruments Directive (MiFID).
							</p>

							<p>
								Regulated market - shall mean a multilateral system operated and/or managed by a market operator, which brings together or facilitates the bringing together of multiple third-party buying and selling interests in financial instruments – in the system and in accordance with its nondiscretionary rules – in a way that results in a contract, in respect of the financial instruments admitted to trading under its rules and/or systems, and which is authorized and functions regularly and in accordance with the provisions of Title III of MiFID.
							</p>

							<p>
								Systematic internalizer - shall mean an investment firm which, on an organized, frequent and systematic basis, deals on own account by executing client orders outside a regulated market or an MTF.
							</p>

							<p>
								Should you require any additional information about the Order Execution Policy of EZYFX Limited, please contact us at <a href="mailto:support@ezyfx.la">support@ezyfx.la</a>
							</p>

							<h4>COMPLAINT HANDLING POLICY</h4>
							<p>
								EZYFX Limited, hereinafter referred to as the ‘Company,’ strives to provide top-quality brokerage services for trading on the Forex market.
							</p>
							<p>
								The Company has appointed a Compliance Officer who is responsible for efficiently handling any complaints from the Client. This would allow the Company to successfully deal with issues and prevent them from reoccurring in the future.
							</p>
							<h6>Definition</h6>
							<p>
								According to the Company, a complaint is any objection and/or dissatisfaction that the Client may have with regards to the provision of any financial service provided by the Company.
							</p>

							<h6>Procedure</h6>
							<p>
								The Compliance Officer is tasked with processing Client complaints, except in the case where the complaint involves the Compliance Officer; such complaints shall be handled by the Managing Director.
							</p>
							<p>
								Clients may register complaints using the following methods:
							</p>
							<ul class="ppro">
								<li>Email: ezyfxla@gmail.com</li>
								<li>Telephone: +44 20309 71796 (International format) or 0044 20309 71796 </li>
							</ul>
							<p>
								The requests will be forwarded to the Compliance Officer within 48 hours after being received. After he/she receives them, the Client will be sent a notification that their request is being processed within 48 hours.
							</p>
							<p>
								The Client will receive a final response or a holding response explaining the findings of the investigation up to 4 weeks from the date the Compliance Officer receives the Client’s complaint. If a holding response is sent to the Complainant, an explanation shall be given stating the reasons why the Company has not been able to resolve the complaint as well as giving a time estimate for the resolution of the issue.
							</p>
							<p>
								If after 8 weeks of receiving the complaint we are still unable to resolve the issue, the Compliance Officer will notify you in writing about the reasons for the delay and indicate an updated time estimate to resolve the issue.
							</p>
							<p>
								When the Client receives the final response, they will have 8 weeks to respond. If no response is received within that period from the complainant indicating that they are still dissatisfied with the explanation, the Complaint will be considered resolved.
							</p>
							<p>
								If the complainant is still not satisfied with the Company’s final response, they can refer their complaint with a copy of the Company’s final response to the competent authorities for further investigation within a period of 6 months.
							</p>
							<p>
								EZYFX Limited is regulated and recognized by Vanuatu FSC as one of the Registered Financial Service Provider (FSP).
							</p>
							<p>
									Address: S.I.P Building, <br>
									P.O Box 3010, <br>
									Rue Pasteur, <br>
									Port Villa, <br>
									Vanuatu <br>
									Website: https://www.ezyfx.la/ <br>
									Tel: +44 20309 71796
							</p>
							<h4>Anti-Money Laundering Policy</h4>
							<p>
								The Anti-Money Laundering Policy of EZYFX Limited is a crucial part of the company’s code of ethics. Its purpose is to ensure that customers who choose to engage in illegal activities are held up to a moral standard, while the rest of our clients who do not engage in illegitimate actions feel safe using our products.	Money laundering is defined as “the process of creating the appearance that large amounts of money obtained from serious crimes, such as drug trafficking or terrorist activity, originated from a legitimate source.” By presenting illegally obtained funds as legitimate, one commits a crime as they intentionally obscure the illegitimate source of that money. Both domestic and international laws condemn money laundering and make it illegal for companies that provide financial services, such as EZYFX Limited, as well as its customers, employees or agents to knowingly engage or attempt to engage in this type of criminal transactions.
							</p>
							<h6>Procedures</h6>
							<p>
								EZYFX Limited has implemented a highly sophisticated system for the detection of any signals that might suggest a customer is engaging in such illegal activities. This system keeps a record of and verifies all client identification materials, and tracks and maintains detailed records of all transactions.
							</p>
							<p>
								EZYFX Limited dedicates its keen attention to tracking suspicious and significant transaction activities, and reports such activities along with comprehensive information to the relevant law enforcement bodies. To maintain the integrity of reporting systems and to safeguard businesses, the legislative framework provides legal protection to the providers of such information.
							</p>
							<p>
								A key step to preventing and discouraging money laundering using our platforms is the fact that EZYFX Limited does not accept cash deposits. EZYFX Limited has the right to refuse to process a transfer at any stage where it believes the transfer to be connected in any way to money laundering or criminal activity. <br>
								EZYFX Limited cannot inform customers that they have been reported for suspicious activity.
							</p>
							<h6>Requirements</h6>
							<p>
								In order to comply with anti-money laundering laws, EZYFX Limited requires a number of different documents to verify the identity of each customer.
							</p>
							<p>
								The first document required is a legal government-issued document of identification that contains a picture of the customer. This may be a government-issued passport, a local ID card, or a driver's license (for countries where the driver's license is accepted as a primary identification document). Company, student or other cards are not acceptable forms of identification.
							</p>
							<p>
								The second step is to verify your address. This may be done through your document of identification if it includes it. Other acceptable records are bills paid in the past three months that include your name and address, bank statements or any other document with the customer’s name and address issued from an internationally recognized organization.
							</p>
							<p>
								Any documents in non-Latin letters must be translated into English by an official interpreter; the translation must be stamped and signed by the translator and a notary, and sent together with the original document with a clear picture of the customer on it.
							</p>
							<p>
								EZYFX Limited requires that all deposits where the name of the originating customer is present be made from the same name of the customer in our records. Third-party payments are not accepted.
							</p>
							<p>
								Withdrawing money may be done from the same account and by the same way it was received. For withdrawals where the name of the recipient is present, the name must be an exact match for the name of the customer in our records. For example, if the deposit was made by a wire transfer, funds may be withdrawn only by a wire transfer to the same bank and to the same account from which it originated. If the deposit was made via an electronic currency transfer, funds may be withdrawn only via an electronic currency transfer through the same system and to the same account it originated from.
							</p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<?php include('includes/footer.php'); ?>

<script>
	$(function () {
		$('.button-checkbox').each(function () {

				// Settings
				var $widget = $(this),
				$button = $widget.find('button'),
				$checkbox = $widget.find('input:checkbox'),
				color = $button.data('color'),
				settings = {
					on: {
						icon: 'glyphicon glyphicon-check'
					},
					off: {
						icon: 'glyphicon glyphicon-unchecked'
					}
				};

				// Event Handlers
				$button.on('click', function () {
					$checkbox.prop('checked', !$checkbox.is(':checked'));
					$checkbox.triggerHandler('change');
					updateDisplay();
				});
				$checkbox.on('change', function () {
					updateDisplay();
				});

				// Actions
				function updateDisplay() {
					var isChecked = $checkbox.is(':checked');

						// Set the button's state
						$button.data('state', (isChecked) ? "on" : "off");

						// Set the button's icon
						$button.find('.state-icon')
						.removeClass()
						.addClass('state-icon ' + settings[$button.data('state')].icon);

						// Update the button's color
						if (isChecked) {
							$button
							.removeClass('btn-default')
							.addClass('btn-' + color + ' active');
						}
						else {
							$button
							.removeClass('btn-' + color + ' active')
							.addClass('btn-default');
						}
					}

				// Initialization
				function init() {

					updateDisplay();

						// Inject the icon if applicable
						if ($button.find('.state-icon').length == 0) {
							$button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
						}
					}
					init();
				});
	});
</script>
<script src="js/app2.js"></script>