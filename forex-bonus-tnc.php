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
  <label for="tab1">Forex Bonus Terms &amp; Conditions</label>
    
  
    
  <section id="content1">
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
   
    
</main>

<?php include('includes/footer.php'); ?>
