<?php

if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>INVIVE Music Store</title>
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




    <img data-interchange="[images/music-retina.jpg, (retina)], [images/music-landscape.jpg, (large)], [images/music-mobile.jpg, (mobile)], [images/music-landscape.jpg, (medium)]">
    <noscript><img src="images/music-landscape.jpg"></noscript>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">
          
          <b>INVIVE Music Store is an online music streaming and purchasing website founded in 2017 by IIUM student, Ahmad Syahir Aisamuddin  and Firdzarullah Amiddudin. Developed during FYP2 in Sem 1 2017/18, the website provides music distribution and merchandising in the form of a microsite for artists, mainly catering to independent artists.</b></br><br>
          <b>Artists who use INVIVE Music Store are provided with a customizable microsite where the music they create can be uploaded and shared. All tracks can be played for free on the website and users are most often provided with the option to purchase the track at customizable prices. This website also provide merchandise section for the artist to sell their merchandise. Thus, user not only can buy or support the artist through buying digital track from the artist but they can also buy the artist merchandise and shipping it to their home. 
INVIVE Music Store also allows the fans to chat with each other using INVIVE Music Store Discord server .</b>

        <footer style="margin-top:10px;">
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
