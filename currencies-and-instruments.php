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
  <label for="tab1">Forex-Education Currencies and Instruments</label>
    
  
    
  <section id="content1">
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
   
    
</main>

<?php include('includes/footer.php'); ?>
