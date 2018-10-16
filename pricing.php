<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pricing || INVIVE Music Store</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

     <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">INVIVE</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="pricing.php">Pricing</a></li>
          <li><a href="termsofuse.php">Terms of Use</a></li>
          <li><a href="login.php">Log In</a></li>
          <li><a href="register.php">Register</a></li>
         
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:30px;">
      <div class="small-12"><h2><b>Pricing</b><br></h2>
      <br>
          <h3>Accounts in this site are free. We make money through our revenue share on sales, which is 15% for digital, 10% for merch.</h3>
              <b>Is there a volume discount?</b><br>
Yes, the revenue share on digital drops from 15% to 10% as soon as you reach $5,000 USD in sales (and stays there, provided you’ve made at least $5,000 in the past 12 months).<br><br>
<b>For merch sales, does the 10% revenue share apply to shipping and tax?</b>
No. Shipping and tax, if applicable, are not included when calculating the share on merch.<br><br>
<b>Are payment processing fees included in the revenue share rates?</b><br>
No, processing fees are separate and typically range between 4 and 6%. Please see the details here, including tips on what you can do to minimize those fees.<br><br>
<b>Is there a break for higher-priced items?</b><br>
Yes. Many expensive items are sold through INVIVE Music Store, like deluxe packages and beat licenses, and with name-your-price we occasionally see superfans paying hundreds of dollars for a single album or track (thanks, mom!). The revenue share applies to the first $100 of an item only (or the item total when more than one of that item is purchased).<br><br>
<b>How do I get paid, and how often?</b><br>
For digital content: Your share of each digital transaction is transferred into your PayPal account 24 to 48 hours after the sale. (Higher-value purchases, like a track that sells for $500, are manually reviewed and may take up to 14 days.) INVIVE Music Store collects its share at the time of sale.<br>
For merchandise: When a fan purchases a physical item, the money flows directly from them into your PayPal account. As such, INVIVE Music Store can’t take its revenue share at the time of the transaction, so instead we keep a running tab of the amount owed, which we call your “revenue share balance.” That balance is automatically paid off with proceeds from future sales (e.g., a percentage of a digital sale, or an entire physical sale if that sale is less than your balance).

</p>

 <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; INVIVE Music Store. All Rights Reserved.</p>
           <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a24c76ad0795768aaf8d278/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
