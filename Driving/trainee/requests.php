<?php 
  
   $do = isset($_GET['do'])? $_GET['do'] : 'Manage';


  session_start();
if(!isset($_SESSION["password"])){
	
	
	header("location: ../signin.php");
	
	
	
}

$trainneid = $_SESSION['traineeid'];
$password = $_SESSION['password'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Participations</title>
    <link href="css/main.css" rel="stylesheet"> 
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
	<link href="css/daterangepicker.css" rel="stylesheet">   
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="../homepage.php"><i class="fas fa-car"></i> Women’s Drive Training System</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <!--<div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>-->
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hello <?php echo $fname; ?>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
			<a class="dropdown-item" href="../homepage.php"><i class="fas fa-home fa-fw"></i> Drive Trainning System</a>  
            <a class="dropdown-item" href="profile.php"><i class="fas fa-user-circle fa-fw"></i> Profile</a>
            <a class="dropdown-item" href="../logout.php"><i class="fas fa-sign fa-fw"></i> Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
		<li class="nav-item">
          <a class="nav-link" href="my_participations.php">
            <i class="fas fa-fw fa-table"></i>
            <span>My Participations</span></a>
        </li>  
		<li class="nav-item">
          <a class="nav-link" href="trainner_assessing.php">
            <i class="fas fa-fw fa-star"></i>
            <span>Trainner Assessing</span></a>
        </li> 
		<li class="nav-item active">
          <a class="nav-link" href="requests.php">
            <i class="fas fa-fw fa-envelope"></i>
            <span>My Requests</span></a>
        </li>   
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">


          <?php
			
			
			if($do == "Manage"){
			
			
	    ?>		
			
          <div class="card mb-3">
            <div class="card-header">
				  <i class="fas fa-table"></i>
                  My Participations
			</div>
            <div class="card-body">
               <div class="table-responsive">
                <table class="table" width="100%">
                  <thead>
                    <tr>
                      <th>Package Name</th>
					  <th>Starting Date</th>
                      <th>Ending Date</th>
                      <th>Trainning Time</th>
					  <th>Price</th>	
					  <th>Trainner</th>
					  <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
					  <?php
	  
					include('../connect.php');  
					$sql = $con->prepare("SELECT DISTINCT  trainning_schedule.* , participation.acceptance , trainner.Firstname FROM  trainning_schedule  JOIN participation ON participation.trainningID = trainning_schedule.trainningID JOIN trainner ON trainner.trainnerID = trainning_schedule.trainnerID  WHERE participation.traineeID=$trainneid ");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				   ?> 
                    <tr>
                      <td><?php echo $pat["Name"]; ?></td>
					  <td><?php echo $pat["Starting_date"]; ?></td>
                      <td><?php echo $pat["Ending_date"]; ?></td>
					  <td><?php echo $pat["trainning_time"]; ?></td>
					  <td><?php echo $pat["Price"] . " R"; ?></td>	
					  <td><?php echo $pat["Firstname"]; ?></td>
					 <td><?php if($pat['acceptance'] == 0){echo"Pendding";} elseif($pat['acceptance'] == 1){echo"Accepted";} else{echo"Rejected";}?></td>	
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>	
			
			
			
			
		<?php  } ?>	
			

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>2021 Copyright © All Rights Reserved Driving</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <!--<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>-->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
	<script src="js/moment.min.js"></script>    
	<script src="js/daterangepicker.js"></script> 
	  
	<script src="js/global.js"></script>   
	  

  </body>

</html>
