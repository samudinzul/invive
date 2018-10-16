<?php 

include("header.php");
      include('sidebar.php');
      $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
extract($_REQUEST);?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
    <h1>
      Merchandise
    </h1>

      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Merchandise </li>
      </ol>
       
        <div class="content">
	   <div class="container-fluid">
       
  
 

   
   <a href="buy_merch.php" class="btn btn-primary pull-right">Purchase Merchandise</a>
   <br/><br/>
         <div class="panel panel-info">
	          <div class="panel-heading">Merchandise List </div>
		         <div class="panel-body">
              <div class="box-body">
                           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    
                                    <th> Artist Name </th>
                                    <th> Merch Name </th>
                                    <th> Price($) </th>
                                    <th> Image </th>
                                    
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                $i=1;
                                $query = "SELECT * from merch";
                                $result = $db->query($query);
                                while($row = $result->fetch_object())
                                { 
                                ?>
                                <tr>
                               
<?php
                          echo'<form method="post" action="cart_update.php">';
                            echo "<td>" . $row->username . "</td>";
                               echo "<td>" . $row->title . "</td>";
                               echo "<td>" . $row->price . "</td>";
                               echo '<td><img src="'. $row->upload .'" height ="150" width ="150" class="img" alt=""> ';
echo "</td>";

                               
                                ?> </tr>
                             <?php $i++; } ?>
                               

                            
                              </tbody>
                              <tfoot>
                                 
                              </tfoot>
                           </table>
                        </div>
                        <!-- /.box-body -->
                     </div>
                     <!-- /.box -->
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
      

 
<?php include('footer.php');?>