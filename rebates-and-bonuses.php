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
  <label for="tab1">REBATES &amp; BONUSES: GENERAL RULES AND CONDITIONS</label>
    
  
    
  <section id="content1">
   <p>Only non-hedging qualified trades will be considered.</p>
    <p>
      A qualified trade is defined as a trade where your trades take profit or loss more than triple spread (at least 3 pips), and are kept open for more than 3 minutes. 
    </p>
    <p>
      1. Each bonus or rebate can be received by each client once only, unless otherwise specified. In case of such exception the bonuses can not be added to several accounts simultaneously. The request should be sent to <a href="mailto:support@ezyfx.la">support@ezyfx.la</a>
    </p>
    <p>
      2. A deposit bonus can be requested during a week after the deposit is made. At the moment of the request the account balance (equity) should not be less than 50% of the requested credit.
    </p>
    <p>
      3. The bonus or rebate will be automatically moved to the balance of your account and become available for withdrawal as soon as the withdrawal terms are complete.
    </p>
    <p>
      4. EZYFX reserves the rights to disqualify any bonus or rebate due to abuse of the bonus conditions, such as arbitrage or hedging between multiple accounts. Note that such violations will lead to exclusion of the client from all promotion programs in future with no exceptions.
    </p>
    <p>
      5. Withdrawal rules must be observed in order to retain your bonus or rebate. Any withdrawal/outgoing internal transfer processed after a deposit has been made cancels the right of account to receive bonus for that deposit. Any withdrawal/outgoing internal transfer processed before the required withdrawal conditions are met will disqualify the accrued bonus or rebate.
    </p>
    <p>
      6. EZYFX is not responsible for late, lost, incorrect, illegible, misdirected, mutilated or incomplete rebate/bonus calculations.
    </p>
    <p>
      7. Anyone using fraudulent means to participate and/or win the rebates and bonuses herein will be disqualified.
    </p>
    <p>
      8. EZYFX reserves the right, in its sole discretion, to cancel, modify or prematurely conclude the promotions for any reason.
    </p>
    <p>
      9. Once the equity is less than the credit size, the rebate / bonus will be annulled automatically, unless otherwise specified. Be aware, it may lead to Margin Call and eventually to Stop Out.
    </p>
    <p>
      10. A bonus or rebate can be credited in case all total incoming transactions of the profile overrun the sum of the outgoing transactions unless otherwise specified.
    </p>
    <p>
      11. Bonuses and rebates are not transferable between accounts.
    </p>
    <p>
      12. Client may choose between any allowed promotions, but several active bonuses can't be combined on the same account simultaneously.
    </p>
    <p>
      13. Bonuses and rebates are automatically cancelled if the account is inactive during 90 days.
    </p>
    <p>
      14. Any credit is active during 120 days unless otherwise specified.
    </p>
    <h6>T&amp;C for all Bonus Accounts</h6>
    <p>
      1. Accounts with Bonuses are only eligible for withdrawal upon completing X number of lots. <br><br>
      X=total bonus received <br><br>
      Example; if a client deposited 1000 USD and request for 60% bonus, which equivalent to 600 USD, the client should complete 600 lots of trading prior to any withdrawals.
    </p>
    <p>
      2. Bonus accounts are not allowed to participate in <strong>EZYSOCIO</strong> as Fund Manager, Professional Trader or Investor.
    </p>
    <p>
      3. Bonus accounts are not allowed to participate in <strong>5 STAR</strong> program.
    </p>
    <p>
      4. Bonus accounts are not allowed to participate in any contest or competition.
    </p>
    <p>
      5. Bonus accounts are not eligible for any other company promotions.
    </p>
    <p>
      6. Bonus accounts are not allowed to do scalping less than 2 minutes.
    </p>
    <p>
      7. Bonus accounts are not allowed for hedging positions.
    </p>
    <p>
      8. Bonus are not applicable for additional deposits and for additional trading accounts.
    </p>

  </section>
   
    
</main>

<?php include('includes/footer.php'); ?>
