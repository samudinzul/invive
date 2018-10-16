<?php include("header.php");
   include("sidebar.php");
   ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Home
         
      </h1>
   
      <!-- Main content -->
      <section class="content">
         <!-- Small boxes (Stat box) -->
         <div class="row">
            <div class="col-lg-3 col-xs-6">
               <!-- small box -->
               <div class="">
                  <div class="inner">
                  
                     <p>Buy song</p>
                  </div>
                 
                  <a href="buy_song.php" class="small-box-footer">Purchase now <i class="fa fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
               <!-- small box -->
               <div class="">
                  <div class="inner">
                     <?php 
                        $gm    = "SELECT * FROM merch";
                        $gmresult = $db->query($gm);
                        $gmcount  = mysqli_num_rows($gmresult);
                        ?>
                    
                     <p>Buy merchandise </p>
                  </div>
                 
                  <a href="buy_merch.php" class="small-box-footer">Purchase now <i class="fa fa-arrow-circle-right"></i></a>
               </div>
            </div>
           
         <!-- /.row -->
         <!-- Main row -->
      </section>
</div>
<?php include("footer.php");?>