<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terms of Use || INVIVE Music Store</title>
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
          <li><a href="termsofuse.php">Terms of Use</a></li>
          <li><a href="login.php">Log In</a></li>
          <li><a href="register.php">Register</a></li>
         
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p>INVIVE Music Store is a project on E-Commerce Website. This website is a testing website and it is fake. This project just gives a preview to what a real world implementation of E-Commerce Website will look like. Well if you do like the website then visit
        <a href="http://www.000webhost.com" target="_blank" title="000webhost">000webhost.com</a>.</p>

        <p>Why INVIVE? I like independent music.I want to revive new wave of music. And lastly, it was an instant thought. So went for it.</p>

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
