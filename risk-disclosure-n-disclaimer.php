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
  <label for="tab1">Risk Disclosure &amp; Disclaimer</label>
    
  
    
  <section id="content1">
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

  </section>
   
    
</main>

<?php include('includes/footer.php'); ?>
