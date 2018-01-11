<?php include('includes/nav.php'); ?>

<style>
main {
  /*min-width: 320px;
  max-width: 800px;
*/  padding: 50px;
  margin: 0 auto;
  background: #fff;
}

main section {
  display: none;
  padding: 20px;
  border-top: 1px solid #ddd;
  height: 300px;
  max-height: 300px;
  overflow-y: scroll;
}

input {
  display: none;
}

label {
  display: inline-block;
  margin: 0 0 -1px;
  padding: 15px 25px;
  font-weight: 600;
  text-align: center;
  color: #bbb;
  border: 1px solid transparent;
}

label:before {
  font-family: fontawesome;
  font-weight: normal;
  margin-right: 10px;
}

label[for*='1']:before { content: '\f1cb'; }
/*label[for*='2']:before { content: '\f17d'; }
label[for*='3']:before { content: '\f16b'; }
label[for*='4']:before { content: '\f1a9'; }
label[for*='5']:before { content: '\f1c0'; }
label[for*='6']:before { content: '\f185'; }
label[for*='7']:before { content: '\f1da'; }
label[for*='8']:before { content: '\f0c5'; }*/
/*label[for*='9']:before { content: '\f2ac'; }
label[for*='10']:before { content: '\f2a0'; }*/

label:hover {
  color: #888;
  cursor: pointer;
}

input:checked + label {
  color: #555;
  border: 1px solid #ddd;
  border-top: 2px solid orange;
  border-bottom: 1px solid #fff;
}

#tab1:checked ~ #content1/*,
#tab2:checked ~ #content2,
#tab3:checked ~ #content3,
#tab4:checked ~ #content4,
#tab5:checked ~ #content5,
#tab6:checked ~ #content6,
#tab7:checked ~ #content7,
#tab8:checked ~ #content8,
#tab9:checked ~ #content9,
#tab10:checked ~ #content10*/ {
  display: block;
}

@media screen and (max-width: 650px) {
  label {
    font-size: 0;
  }
  label:before {
    margin: 0;
    font-size: 18px;
  }
}

@media screen and (max-width: 400px) {
  label {
    padding: 15px;
  }
}
</style>

<section class="why-us">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1><i class="fa fa-book"></i>Agreements & Legals</h1>
      </div>
      <?php include 'open-accts.php'; ?>
    </div>
  </div>
</section>

<section class="reg-start legals">
  <div class="container">
    <div class="bonus-intro">
      <!-- <p>TRADE MORE &amp; <br>CONVERT YOUR BONUSES INTO REAL MONEY</p>
      <a href="#" class="btn btn-success">CLAIM BONUS</a> -->
    </div>
  </div>
</section>

<main>
  
  <input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1">Acceptable Use</label>
    
  <!-- <input id="tab2" type="radio" name="tabs">
  <label for="tab2">RISK DISCLOSURE</label>
    
  <input id="tab3" type="radio" name="tabs">
  <label for="tab3">ORDER EXECUTION POLICY</label>
    
  <input id="tab4" type="radio" name="tabs">
  <label for="tab4">COMPLAINT HANDLING POLICY</label>
    
  <input id="tab5" type="radio" name="tabs">
  <label for="tab5">FOREX BONUS TERMS &amp; CONDITIONS</label>

  <input id="tab6" type="radio" name="tabs">
  <label for="tab6">BINARY OPTIONS CASHBACK TERMS &amp; CONDITIONS</label>

  <input id="tab7" type="radio" name="tabs">
  <label for="tab7">Forex-Education Currencies and Instruments</label>

  <input id="tab8" type="radio" name="tabs">
  <label for="tab8">EZYFX NO DEPOSIT PROMOTION</label> -->

<!--   <input id="tab9" type="radio" name="tabs">
  <label for="tab9">Forex-Education Currencies and Instruments</label>

  <input id="tab10" type="radio" name="tabs">
  <label for="tab10">Forex-Education Currencies and Instruments</label> -->
    
  <section id="content1">
    <!-- <p>At EZYFX we strive to deliver quality products and services to our users. We value their businesses
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
  </section>
    
  <section id="content2">
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

                            </ol> -->

                            <h4 class="text-center" id="tou">Terms of Use for EZYFX</h4>
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
  <!-- </section>
    
  <section id="content3"> -->
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


  </section>
    <!-- 
  <section id="content4">
    
                            <h4>Anti-Money Laundering Policy</h4>
                            <p>
                                The Anti-Money Laundering Policy of EZYFX Limited is a crucial part of the company’s code of ethics. Its purpose is to ensure that customers who choose to engage in illegal activities are held up to a moral standard, while the rest of our clients who do not engage in illegitimate actions feel safe using our products.  Money laundering is defined as “the process of creating the appearance that large amounts of money obtained from serious crimes, such as drug trafficking or terrorist activity, originated from a legitimate source.” By presenting illegally obtained funds as legitimate, one commits a crime as they intentionally obscure the illegitimate source of that money. Both domestic and international laws condemn money laundering and make it illegal for companies that provide financial services, such as EZYFX Limited, as well as its customers, employees or agents to knowingly engage or attempt to engage in this type of criminal transactions.
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
                            </p>
  </section>

  <section id="content5">
    <p>
      The following Terms and Conditions shall be considered an inseparable part of the Client Agreement between Global Derivative Capital Markets NZ Limited referred to as “EZYFX Limited” and “The Company” and all Customers that have requested and have subsequently been granted a Forex Bonus, referred hereinafter as “Bonus”.
    </p>
    <p>
      These Terms are binding, and all Customers are advised to read through them carefully and to seek independent advice where necessary.
    </p>
    <p>
      EZYFX Limited does not recommend this Bonus to Customers who lack the experience or knowledge needed in order to use its properties to their advantage.
    </p>
    <h6>Eligibility</h6>
    <p>
      All New and Existing Customers of EZYFX Limited can request to receive a Bonus of up to 100 000 USD if the following conditions are met:
    </p>
    <ul class="ppro">
      <li>&mdash; If on one and the same day the client makes several new deposits, the total eligible amount of deposits based on which the Bonus will be granted shall be considered the total of those new same-day deposits</li>

      <li>&mdash; Bonus requests shall be accepted no later than 48 business hours after making the new eligible deposit(s)</li>

      <li>&mdash; The Customer doesn’t have open positions in the Bonus Trading Account for which the Bonus Request is made.</li>

      <li>&mdash; A Bonus can be requested and granted only once per Customer</li>

      <li>&mdash; EZYFX shall consider the Deposited Capital of a Customer to be an “Eligible Deposit” if the Deposit has been made after the 1st of July 2017. Internal Transfers from Trading Accounts belonging to the Customer are not considered Eligible Deposits.</li>

      <li>&mdash; EZYFX reserves the right to deny any Bonus Request or to reduce the granted Bonus Amount based on its sole discretion and without providing any explanation for its decision.</li>
    </ul>
    <h6>Properties of the Bonus</h6>
    <ul class="ppro">
      <li>&mdash;The Bonus is transferred as Credit in a separate trading account, hereinafter referred to as “Bonus Holding” account. Internal transfers, deposits, withdrawals and trading shall be prohibited in the Bonus Holding account </li>

      <li>&mdash; The bonus is not tradable</li>

      <li>&mdash; The amount of the bonus is automatically calculated based on the minimum Newly Deposited Capital made into a trading account belonging to the client, hereinafter referred to as “bonus trading account”. Please note that the trading account where the deposit is made (bonus trading account) is different from the trading account where the bonus is credited (bonus holding account)</li>

      <li>&mdash; Size: the amount of the Bonus shall be automatically applied based on the amount of deposit</li>
    </ul>

    <table class="table table-responsive" style="color: #444;">
      <thead>
        <td>Amount of Deposit<sup>*</sup></td>
        <td>Amount of Bonus</td>
      </thead>

      <tbody>
        <tr>
          <td>500 - 2000</td>
          <td>5000</td>
        </tr>

        <tr>
          <td>2001 - 10000</td>
          <td>20000</td>
        </tr>

        <tr>
          <td>10 001+</td>
          <td>100 000</td>
        </tr>
      </tbody>
    </table>
    <p><em><sup>*</sup>This number reflects the number of currency units denominated in USD, EUR or GBP. The denomination of the bonus is in the same currency as the currency of the deposit</em></p>
    <p>Bonus Trading Account will have the following properties:</p>

    <ul class="ppro">
      <li>&mdash; It can be denominated in EUR, USD or GBP currency.</li>
      <li>&mdash; Withdrawals from the Bonus trading account shall be allowed</li>
      <li>&mdash; Internal transfers from/to the Bonus trading account shall be prohibited</li>
      <li>&mdash; The Bonus Trading Account shall be based on the “Blade FX” Account Type offered by EZYFX Limited and described on the Company’s website. All properties of the Bonus Account shall be the same as those of the said Account Type with the exception of the properties described herein.</li>
      <li>&mdash; Margin from opposite trading positions shall not cancel out. In other words, 1 lot Buy on EURUSD and 1 lot Sell on EURUSD will have a Margin equal to the requirement for 2 lots</li>
      <li>&mdash; If after the date the bonus was granted, the Client makes new deposits to the Bonus Trading Account, the amount of Credit in the Bonus Account shall be increased based in the above table. The Net Amount of Deposits (Total Deposits - Total Withdrawals) in the Bonus Trading Account will be used for adjusting the amount of the Bonus. As an example: if on the date the Client requests the bonus, his/her newly deposited capital is 2500 USD, the amount of the Bonus will be 20 000 USD. If on a later date the Client makes a withdrawal of 1000 USD and a few days later makes an additional deposit into the Bonus Trading Account of 9000 USD, his/her total Net deposited capital becomes (2500 - 1000 + 9000), or 10 500 USD. Therefore an additional 80 000 USD Credit will be added to the Bonus Account. Adjustments to the amount of Credit will only be made upon deposits to the Bonus trading account. Once a Credit was added, it will not be decreased</li>
      <li>&mdash; No other Promotions or Special Arrangements can be applied to the Bonus Account in combination with the present promotion.</li>
      <li>&mdash; The Company reserves the right to change the properties of the Trading Account on which the Bonus Request has been made and to consider it a Bonus Trading Account instead of creating a new one.</li>
    </ul>

    <h6>Bonus Withdrawal</h6>
    <p>Customers will be able to withdraw the Bonus once a Minimal Trading Requirement, also referred to as “MTR” has been fulfilled in the Bonus Trading Account. Once the Minimal Trading Requirement has been fulfilled the Bonus is considered to have been permanently and irrevocably awarded from The Company to the Customer and furthermore, the amount of the Bonus shall cease to be referred to as “Bonus” and will from that moment on be considered as profit that has been achieved by the Customer.</p>
    <p>All Trading activity also referred to as “volume” on the Platforms of EZYFX Limited is measured in Lots, where one Standard Forex Lot is equal to 100,000.00 units of the Base Currency of the specific Forex Pair. MTR will depend on the Total Bonus Awarded to the Client in the Bonus account. The purchase of 1 standard lot will release the following amounts of the Bonus:</p>

    <table class="table table-responsive" style="color: #444;">
      <thead>
        <td>Amount of Bonus</td>
        <td>Amount of Bonus Released per 1 Standard Lot</td>
      </thead>

      <tbody>
        <tr>
          <td>5 000</td>
          <td>2</td>
        </tr>

        <tr>
          <td>20 000</td>
          <td>2.5</td>
        </tr>

        <tr>
          <td>100 000</td>
          <td>3</td>
        </tr>
      </tbody>
    </table>

    <ul class="ppro">
      <li>
        &mdash; Only trading activity from the time the Bonus is Credited onwards, shall be considered towards MTR
      </li>
      <li>
        &mdash; The volume of opposite positions opened on the same instrument at the same or nearly the same time, shall not be counted towards MTR
      </li>
      <li>
        &mdash; The MTR is considered to have been fulfilled when 100% of the Bonus has been released. At this point, client can request bonus conversion to balance from <a href="mailto:support@ezyfx.la">support@ezyfx.la</a>
      </li>
      <li>
        &mdash;  Partial conversion of the Bonus into balance is not allowed.
      </li>
    </ul>

      <h6>
        Bonus Expiration
      </h6>
      <p>
        The bonus shall be revoked 12 months after the date it was granted. The Company reserves the rights to revoke the bonus if no trading activity has been generated in the Bonus Trading Account for a period of more than 3 months.
      </p>
      <h6>
        Bonus Cancellation
      </h6>
      <p>
        EZYFX Limited reserves the right to cancel an assigned/granted Bonus entirely on its own discretion in the event of:
      </p>
  
      <ul class="ppro">
        <li>
          &mdash; In all cases when the Customer is in breach of any of the Terms and Conditions of EZYFX Limited
        </li>
        <li>
          &mdash; In case of Account Termination as specified in the EZYFX Client Verification and Administration Policy
        </li>
        <li>
          &mdash; In case the Company suspects trading practices by the Client, aiming solely at generating trading volume for converting the bonus, which includes but are not limited to:
        </li>
        <ul class="ppro">
          <li>&mdash; Churning</li>
          <li>&mdash; Internal/external hedging</li>
          <li>&mdash; Same electronic identification point or same unique hardware identification number (Mac) with other users;</li>
          <li>&mdash; Different accounts being traded by one trader simultaneously</li>
        </ul>
      </ul>
      <p>
        Customers are explicitly warned and agree that the decision of EZYFX Limited shall be final, non-negotiable and non-reversible.
      </p>
  
  </section>

  <section id="content6">
    <p>The following Terms and Conditions shall be considered an inseparable part of the Client Agreement between EZYFX Limited, the Company” and all Customers that have requested and have subsequently been granted a Binary Options Cashback, referred hereinafter as “Cashback”.</p>
    <p>
      These Terms are binding, and all Customers are advised to read through them carefully and to seek independent advice where necessary.
    </p>
    <p>
      EZYFX Limited does not recommend this promotion to Customers who lack the experience or knowledge needed in order to use its properties to their advantage.
    </p>
    <h6>Eligibility</h6>
    <p>
      All New and Existing Customers of EZYFX Limited can request to participate in this promotion under which they can receive a Cashback of up to 500 USD/EUR/GBP in the form of reimbursement of the first 5 losing trades if the following conditions are met:
    </p>

    <ul class="ppro">
      <li>
        &mdash; Participation in this promotion must be made no later than 48 business hours after making the new eligible deposit(s)
      </li>

      <li>
        &mdash; The Customer doesn’t have open positions in the Trading Account for which the promotion shall apply.
      </li>

      <li>
        &mdash; Participation can be requested and granted only once per Customer
      </li>

      <li>
        &mdash; Participation can be requested for a trading account with at least 500 USD/EUR/GBP of newly deposited capital
      </li>

      <li>
        &mdash; EZYFX Limited shall consider the Deposited Capital of a Customer to be an “Eligible Deposit” if the Deposit has been made after the 1st of July 2017. Internal Transfers from Trading Accounts belonging to the Customer are not considered Eligible Deposits.
      </li>
    </ul>
    <p>
      EZYFX Limited reserves the right to deny any participation request based on its sole discretion and without providing any explanation for its decision.
    </p>

    <h6>
      Properties of the Cashback
    </h6>

    <ul>
      <li>
        &mdash; Every participating Customer can ask EZYFX Limited to reimburse losses from the first 5 trades that were made once participation was granted.
      </li>
      <li>
        &mdash; EZYFX Limited shall  reimburse up to 500 USD/EUR/GBP of losses but not more than 100 USD/EUR/GBP per trade
      </li>
      <li>
        &mdash; The amount of the reimbursement, hereinafter referred to as “Cashback” shall be transferred to the Customer’s balance by the Company once a Minimal Trading Requirement (hereinafter referred to as “MTR”) has been met
      </li>
      <li>
        &mdash; MTR is equal to the Cashback amount multiplied by 10. In other words, in order to receive a Cashback of 100 USD, the participating Customer must have purchased Binary Options for the total amount of 1 000 USD (100X10).
      </li>
      <li>
        &mdash; The amount of the Cashback is equal to the amount of losses from the first 5 losing trades of the Client
      </li>
      <li>
        &mdash; The maximal amount of the Cashback shall not exceed 500 USD/EUR/GBP, depending on the denomination of the trading account for which participation was granted
      </li>

      <li>
        &mdash; The Cashback Account shall be based on the “Classic Binary” Account Type offered by EZYFX Limited and described on the Company’s website. All properties of the Cashback Account shall be the same as those of the said Account Type
      </li>
      <li>
        &mdash; No other Promotions or Special Arrangements can be applied to the Cashback Account in combination with the present promotion.
      </li>
    </ul>

    <h6>
      Participation Cancellation
    </h6>
    <p>EZYFX reserves the right to terminate any customer’s participation in the current promotion in the following cases:</p>

    <ul class="ppro">
      <li>&mdash; When the Customer is in breach of any of the Terms and Conditions of EZYFX Limited</li>
      <li>&mdash; In case of Account Termination as specified in the EZYFX Client Verification and Administration Policy</li>
      <li>&mdash; In case the Client does not claim the reimbursement or fails to satisfy the conditions set herein for more than 3 months since his/her participation was granted</li>
      <li>&mdash; In case the Company suspects trading practices by the Client, aiming solely at generating trading volume for getting awarded with the Cashback, which includes but are not limited to:</li>
      <ul class="ppro">
        <li>
          Churning
        </li>
        <li>
          Internal/external hedging
        </li>
        <li>
          Same electronic identification point or same unique hardware identification number (Mac) with other users;
        </li>
        <li>
          Different accounts being traded by one trader simultaneously
        </li>
      </ul>
    </ul>
    <p>
      Customers are explicitly warned and agree that the decision of EZYFX Limited shall be final, non-negotiable and non-reversible.
    </p>
  </section>

  <section id="content7">
    <h6>Currencies and Instruments, Trading Introduction Tutorial <br><small>Everything you never knew about money and trading it</small></h6>

    <h6>The Liquid Currency Pairs</h6>
    
    <p>
      Currencies, like equities and bonds, have pairs that are very liquid and those that are not so liquid. The liquid currencies are characterized by their country's stable economy and political system. Since the European currencies unified and created the euro, the currencies that are most liquid now include:
    </p>

    <ul class="ppro">
      <li>&mdash; US Dollar</li>
      <li>&mdash; Japanese Yen</li>
      <li>&mdash; British Pound</li>
      <li>&mdash; Euro</li>
      <li>&mdash; Canadian Dollar</li>
    </ul>

    <p>
      It is estimated that activities in these currencies comprise more than 80% of the daily foreign exchange volume.
    </p>

    <h6>
      Foreign Currency Symbols
    </h6>
    <p>
      Currencies have their own symbols that distinguish one from another. In Forex, the price of a currency pair is simply the value of one currency against the value of another. A currency pair includes the "name" for both currencies, separated by a "/". The "name" is a three letter acronym. The first two letters, in most cases, identify the country, while the last letter denotes the unit of currency for that country. <br>

      <br>
      For example,
    </p>

    <ul class="ppro">
      <li>
        &mdash; USD = United States Dollar
      </li>
      <li>
        &mdash; GBP = Great Britain Pound
      </li>
      <li>
        &mdash; JPY = Japanese Yen
      </li>
      <li>
        &mdash; CAD = Canadian Dollar
      </li>
      <li>
        &mdash; CHF = Confederation Helvetica (Latin for Swiss Confederation) Franc
      </li>
      <li>
        &mdash; NZD = New Zealand Dollar
      </li>
      <li>
        &mdash; AUD = Australian Dollar
      </li>
      <li>
        &mdash; NOK = Norwegian Krona
      </li>
      <li>
        &mdash; SEK = Swedish Krona
      </li>
    </ul>
    <p>
      Since the European Euro has no specific country attached to it, it goes simply by the acronym EUR
    </p>

    <p>
      By combining one currency, EUR, with another USD, you create a currency pair EUR/USD.
    </p>
    <h6>
      The Base and Counter Currency
    </h6>
    <p>
      The Base Currency is the first currency in a pair. It is always the dominant currency in the pair. The Counter Currency is the second currency in a currency pair.
    </p>
    <p>
      The euro is the dominant base currency against all other global currencies. As a result, currency pairs against the EUR will be identified as EUR/USD, EUR/GBP, EUR/CHF, EUR/JPY, EUR/CAD, etc. The EUR acronym will always appear first in the sequence.
    </p>
    <p>
      The British Pound is next in the hierarchy of currency name domination. The major currency pairs versus the GBP would, therefore be identified as GBP/USD, GBP/CHF, GBP/JPY, GBP/CAD. Apart from the EUR/GBP, expect to see GBP as the first currency in a currency pair.
    </p>
    <p>
      The USD is the next dominant base currency. USD/CAD, USD/JPY, USD/CHF would be the normal currency pair convention for the major currencies. Since the EUR and the GBP are more dominant in terms of base currencies, the dollar is quoted as EUR/USD and GBP/USD.
    </p>
    <p>
      Knowing the base currency is important as it determines the values of currencies (notional or real) exchanged when a foreign exchange deal is transacted.
    </p>

    <h6>
      The Value of Currencies
    </h6>
    <p>
      The base currency ALWAYS equals one of the currency's monetary units of exchange (i.e., 1 euro, 1 pound, and 1 dollar). When an investor buys 100,000 EUR/USD, he is buying (or receiving) the Euro (the Base Currency) and selling (or paying for) the USD (the Counter Currency). The amount of the Base Currency he is buying is equal to 100,000 Euros.
    </p>
    <p>
      While the base currency remains a constant price, the counter currency will fluctuate with the exchange rate for the Currency Pair. It is equal to: (Amount of Base Currency x Market Foreign Exchange Rate)
    </p>
    <p>
      The smallest incremental change in a currency pair's price is called a "pip". In all pairs that exclude the JPY, a pip is equal to the fourth decimal value of a currency pair. Using leverage, traders can experience considerable gains or losses as price moves in fractions of a percent.
    </p>
    <p>
      FXDD provides a Maximum Trading Leverage Ratio of 50:1 for standard accounts. At that ratio, a 100,000 EUR position would require $2,400 of Margin at an exchange rate of 1.2000. This is calculated by taking the US$ equivalent of 100,000 EUR or US$120,000 and dividing by the 50:1 leverage ratio.
    </p>
    <p>
      Margin Required = $120,000 / 50 = $2,400
    </p>
    <p>
      To determine the value of a pip for the deal above the following calculation would be made:
    </p>
    <p>
      Value in US$ = 1.20 x Par Amount of Base Currency = $120,000
    </p>
    <p>
      Value in US$ - a pip = (1.20-.0001) x Par Amount of Base Currency = $119,990
    </p>
    <p>
      The value of a pip in dollars is equal to $120,000 - $119,990 or $10.
    </p>
    <p>
      The movement of price determines whether a currency is getting stronger or weaker. When a currency pair goes from a low price to a higher price, the Base Currency is said to have strengthened or gotten stronger. Or, the Counter Currency has weakened or gotten weaker as the Base Currency has gotten stronger.
    </p>
    <p>
      If the EUR/USD exchange rate goes from 1.2000 to 1.2024, we have concluded that the EUR got stronger, the USD got weaker. Why?
    </p>
    <p>
      When looking at Foreign Exchange Rates (or prices) an action to buy the Currency Pair implies buying the Base Currency, or EUR, and selling the Counter Currency, or USD. If a trader buys EUR/USD at a low rate and sells at a higher rate, the trader will profit. However, if the trader purchased at a high price and sold at a lower price, he will have made a loss.
    </p>
  </section>

  <section id="content8">
  	<h6>General Characteristics</h6>
  	<ul class="ppro">
  		<li>
  			&mdash; Available for new clients who register their account with EZYFX Limited from the 12th of December 2016 till 30th of June 2017.
  		</li>
  		<li>
  			&mdash; Get a 100 USD credit deposit into your first trading account.
  		</li>
  		<li>
  			&mdash; Trade Forex with risk-free funds on the most famous trading platform with an award winning order execution and have access to our superb 24/5 customer support.
  		</li>
  	</ul>

  	<h6>Steps to claim the Bonus</h6>
  	<ol class="ppro">
  		<li>
  			<em>1.</em> Register your first EZYFX live account
  		</li>
  		<li>
  			<em>2.</em> Claim the bonus from support@ezyfx.la within 48 hours of your registration
  		</li>
  	</ol>
  	<h6>Terms and Conditions</h6>
  	<p>
  		The no-deposit bonus is available for clients who open their first registration with EZYFX Limited in accordance with the Company's Legal Documents.
  	</p>
  	<h6>Bonus Specifications</h6>
  	<ul class="ppro">
  		<li>
  			&mdash; The no-deposit promotion can be granted only once per client.
  		</li>
  		<li>
  			&mdash; The no-deposit bonus is added as credit of 100 USD into a trading account herein referred to as “bonus account”.
  		</li>
  		<li>
  			&mdash; All eligible clients are permitted to hold only one no-deposit promotion account per one unique IP address. Multiple registrations from the same IP are not permitted, nor are multiple no-deposit accounts to be registered with the same client details.
  		</li>
  		<li>
  			&mdash; Profits from the bonus account can be withdrawn any time only after at least 10 round-turn trades have been completed and at least 10 standard lots have been traded.
  		</li>
  		<li>
  			&mdash; The number of completed trades and their volume can be verified in the Account History tab of the MetaTrader4 platform, or inside the Member's Area under the Positions section.
  		</li>
  		<li>
  			&mdash; The number of completed trades and their volume can be verified in the Account History tab of the MetaTrader4 platform, or inside the Member's Area under the Positions section.
  		</li>
  		<li>
  			&mdash; The volume and total number of opposite positions opened on the same instrument at the same or nearly the same time, shall not be counted towards the trading requirement of the bonus schemes.
  		</li>
  		<li>
  			&mdash; Subject to the provisions set forth above, the minimum amount that can be withdrawn from a bonus account is 100 USD.
  		</li>
  		<li>
  			&mdash; The first approved withdrawal from the bonus account shall be exempt from the standard withdrawal fees charged by EZYFX Limited.
  		</li>
  		<li>
  			&mdash; The Bonus shall be revoked upon the first eligible withdrawal request.
  		</li>
  		<li>
  			&mdash; Internal transfers out of the bonus account shall be prohibited.
  		</li>
  		<li>
  			&mdash; The bonus account shall be based on the “Blade” Account Type offered by EZYFX and described on the Company’s website. All properties of the bonus account shall be the same as those of the said Account Type with the exception of the properties described herein.
  		</li>
  		<li>
  			&mdash; The use of Expert Advisers and any other form of automated trading including but not limited to any trading signals, arbitrage, auto-clicking scripts, is prohibited.
  		</li>
  		<li>
  			&mdash; Leverage of the bonus account shall be set to 1:100.
  		</li>
  		<li>
  			&mdash; The credit amount of the no-deposit bonus shall be revoked after one month.
  		</li>
  		<li>
  			&mdash; EZYFX reserves the right to alter, amend or terminate its no-deposit promotion or any aspect of it at any time. Such changes shall be announced on the company's website. It is therefore recommended that participants in the bonus scheme consult its Terms and Conditions on the company's website regularly. Taking part in the bonus scheme constitutes acceptance and agreement to abide by such alterations, amendments and/or changes.
  		</li>
  	</ul>
  	<p>
  		EZYFX Limited reserves the right to deny a bonus request at its sole discretion and to revoke an already granted “no deposit” bonus and profits generated by its use, in the event of:
  	</p>
  	<ul class="ppro">
  		<li>
  			&mdash; In all cases when the Customer is in breach of any of the Terms and Conditions of EZYFX Limited.
  		</li>
  		<li>
  			&mdash; In case of Account Termination as specified in the EZYFX Limited Client Verification and Administration Policy.
  		</li>
  		<li>
  			&mdash; In case the bonus account becomes dormant.
  		</li>
  	</ul>
  </section> -->
    
</main>

<?php include('includes/footer.php'); ?>
