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
  <label for="tab1">EZYFX NO DEPOSIT PROMOTION</label>
    
  
    
  <section id="content1">
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

  </section>
   
    
</main>

<?php include('includes/footer.php'); ?>
