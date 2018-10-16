<?php include("header.php");
      include('sidebar.php');
extract($_REQUEST);?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
    <h1>
      Tracks
    </h1>

      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Tracks </li>
      </ol>
       
        <div class="content">
	   <div class="container-fluid">

   <a href="buy_song.php" class="btn btn-primary pull-right">Purchase Track</a>
   <br/><br/>
         <div class="panel panel-info">
	          <div class="panel-heading">Tracks List </div>
		         <div class="panel-body">
              <div class="box-body">
                           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    
                                    <th> Artist Name </th>
                                    <th> Song Name </th>
                                    <th> Price ($) </th>
                                    <th> Genre </th>
                                    <th> Playback </th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                $i=1;
                                $query = "SELECT * from songs";
                                $result = $db->query($query);
                                while($row = $result->fetch_object())
                                { 
                                ?>
                                <tr>
                               
<?php
                          
                            echo "<td>" . $row->username . "</td>";
                               echo "<td>" . $row->title . "</td>";
                               echo "<td>" . $row->price . "</td>";
                               echo "<td>" . $row->genre . "</td>";
                                echo '<td><audio controls controlsList="nodownload"><source src="'. $row->upload .'" type="audio/mp3"></audio>'
                                ?>
                             </tr>
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