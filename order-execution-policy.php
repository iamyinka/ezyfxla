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
  <label for="tab1">Order Execution</label>
    
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
   
    
</main>

<?php include('includes/footer.php'); ?>
