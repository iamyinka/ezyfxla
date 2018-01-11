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
  <label for="tab1">Privacy Policy</label>
    
  
    
  <section id="content1">
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

  </section>
   
    
</main>

<?php include('includes/footer.php'); ?>
