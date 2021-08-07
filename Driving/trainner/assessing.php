<?php 
  
   $do = isset($_GET['do'])? $_GET['do'] : 'Manage';

  session_start();
if(!isset($_SESSION["password"])){
	
	
	header("location: ../signin.php");
	
	
}

$trainnerid = $_SESSION['trainnerid'];
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

    <title>Assessing</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
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
        <!--<li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>-->
        <!--<li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hello <?php  echo $fname; ?>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
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
          <a class="nav-link" href="participation.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Participations</span></a>
        </li> 
		<li class="nav-item active">
          <a class="nav-link" href="assessing.php">
            <i class="fas fa-fw fa-star"></i>
            <span>Assessing</span></a>
        </li>   
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-star"></i>
            <span>Assessing</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="weekly.php">Weekly Assessing</a>
            <a class="dropdown-item" href="final.php">Definitive Assessing</a>
          </div>
        </li>-->
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">


          <?php
			
			if($do == "Manage"){
			
		  ?>	
			
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-cogs"></i>
              Assessing Management</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" width="100%">
                  <thead>
                    <tr>
                      <th>Package Name</th>	
                      <th>Trainee Name</th>
                      <th>Control</th>
                    </tr>
                  </thead>
                  
                  <tbody>
					  <?php
	  
					include('../connect.php');  
					$sql = $con->prepare("SELECT  participation.* ,  trainee.Firstname , trainee.traineeID , trainning_schedule.Name , trainning_schedule.trainnerID FROM  participation JOIN  trainee ON participation.traineeID = trainee.traineeID JOIN   trainning_schedule ON trainning_schedule.trainningID = participation.trainningID  WHERE trainning_schedule.trainnerID=$trainnerid AND participation.acceptance=1");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				   ?> 
                    <tr>
                      <td><?php echo $pat["Name"]; ?></td>
                      <td><?php echo $pat["Firstname"]; ?></td>
                      <td>
						<a style="background: #FFF; color:#333" href="?do=week&trainneid=<?php echo $pat["traineeID"]; ?>&trainnerid=<?php echo $pat["trainnerID"]; ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Add Weekly Assessing</a>  
						<a style="background: #FFF; color:#333" href="?do=finall&trainneid=<?php echo $pat["traineeID"]; ?>&trainnerid=<?php echo $pat["trainnerID"]; ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Add definitive Assessing</a>  
					  </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
			
	<?php 	}elseif($do == "week"){ 
			
			
			$trainneid = isset($_GET['trainneid']) && is_numeric($_GET['trainneid']) ? intval($_GET['trainneid']) : 0;	
				
			$trainnerid = isset($_GET['trainnerid']) && is_numeric($_GET['trainnerid']) ? intval($_GET['trainnerid']) : 0;	
			
			?>
			
	<div class="container" style="height:600px">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><i class="fas fa-star"></i> Add Weekly Assessing</div>
        <div class="card-body">
          <form action="?do=weekly" method="post">
			  <input type="hidden" value="<?php echo $trainneid;  ?>"  name="trainneid">
			  <input type="hidden" value="<?php echo $trainnerid;  ?>"  name="trainnerid">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="assessing" class="form-control" placeholder="Assessing" required="required" autofocus="autofocus">
                <label for="inputEmail">Assessing</label>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Add Assessing"/>
          </form>
        </div>
      </div>
    </div>	
			
			
	<?php 	}elseif($do == "finall"){
			
			$trainneid = isset($_GET['trainneid']) && is_numeric($_GET['trainneid']) ? intval($_GET['trainneid']) : 0;	
				
			$trainnerid = isset($_GET['trainnerid']) && is_numeric($_GET['trainnerid']) ? intval($_GET['trainnerid']) : 0;
			
			
			?>	
			
	<div class="container" style="height:600px">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><i class="fas fa-star"></i> Add Definitive Assessing</div>
        <div class="card-body">
          <form action="?do=final" method="post">
			  <input type="hidden" value="<?php echo $trainneid;  ?>"  name="trainneid">
			  <input type="hidden" value="<?php echo $trainnerid;  ?>"  name="trainnerid">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputE" name="assessing" class="form-control" placeholder="Assessing" required="required" autofocus="autofocus">
                <label for="inputE">Assessing</label>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Add Assessing"/>
          </form>
        </div>
      </div>
    </div>		
			
		 <?php  }elseif($do == "weekly"){
			
			
	include('../connect.php');  	
			$trainnerid  = $_POST["trainnerid"];
		    $trainneid  = $_POST["trainneid"];		
			$assessing    = $_POST["assessing"];
				
				if($assessing <= 10){
			//Password Trick
		    $stmt = $con->prepare("INSERT INTO assessing(Assessing , Type , traineeID , trainnerID
 ) VALUES(:assessing, :type, :trainneid, :trainnerid)");

					$stmt->execute(array(

						'assessing' => $assessing,
						'type' => 'Weekly',
						'trainneid'    => $trainneid,
						'trainnerid' => $trainnerid
					));
		

					echo '<div style="margin-left:20px" class="alert alert-success">
					Weekly Assessing Added Successfully
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
				    echo '<div class="container" style="height:600px">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><i class="fas fa-star"></i> Add Weekly Assessing</div>
        <div class="card-body">
          <form action="?do=weekly" method="post">
			  <input type="hidden" value="' . $trainneid . '"  name="trainneid">
			  <input type="hidden" value="' . $trainnerid . '"  name="trainnerid">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="assessing" class="form-control" placeholder="Assessing" required="required" autofocus="autofocus">
                <label for="inputEmail">Assessing</label>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Add Assessing"/>
          </form>
        </div>
      </div>
    </div>';
					
				}else{
					
					
					echo '<div style="margin-left:20px" class="alert alert-danger">
					Weekly Assessing Is From 10
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
				    echo '<div class="container" style="height:600px">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><i class="fas fa-star"></i> Add Weekly Assessing</div>
        <div class="card-body">
          <form action="?do=weekly" method="post">
			  <input type="hidden" value="' . $trainneid . '"  name="trainneid">
			  <input type="hidden" value="' . $trainnerid . '"  name="trainnerid">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="assessing" class="form-control" placeholder="Assessing" required="required" autofocus="autofocus">
                <label for="inputEmail">Assessing</label>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Add Assessing"/>
          </form>
        </div>
      </div>
    </div>';
					
					
					
				}
					
				
				
				
			
			
		
		 }elseif($do == "final"){
		
			include('../connect.php');  	
			 $trainnerid  = $_POST["trainnerid"];
		    $trainneid  = $_POST["trainneid"];		
			$assessing    = $_POST["assessing"];
				
			$sql = $con->prepare("SELECT * FROM  assessing WHERE Type = 'Definitive' AND traineeID=$trainneid");
			$sql->execute();
			$row = $sql->fetch();
			$count = $sql->rowCount();
				
			if($count <= 0){	
				
				
			if($assessing <= 100){
			//Password Trick
		    $stmt = $con->prepare("INSERT INTO assessing(Assessing , Type , traineeID , trainnerID
 ) VALUES(:assessing, :type, :trainneid, :trainnerid)");

					$stmt->execute(array(

						'assessing' => $assessing,
						'type' => 'Definitive',
						'trainneid'    => $trainneid,
						'trainnerid' => $trainnerid
					));
				
				
				/*$stmt = $con->prepare("UPDATE participation SET acceptance = 0  WHERE traineeID = ?");

				$stmt->execute(array($trainneid));*/
				
				
				/*$stmtt = $con->prepare("UPDATE trainning_schedule SET traineeID = NULL  WHERE trainnerID = ?");

				$stmtt->execute(array($trainnerid));*/
		

					echo '<div style="margin-left:20px" class="alert alert-success">
					Final Assessing Added Successfully
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
				    echo '<div class="container" style="height:600px">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><i class="fas fa-star"></i> Add Definitive Assessing</div>
        <div class="card-body">
          <form action="?do=final" method="post">
			  <input type="hidden" value="' . $trainneid . '"  name="trainneid">
			  <input type="hidden" value="' . $trainnerid . '"  name="trainnerid">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputE" name="assessing" class="form-control" placeholder="Assessing" required="required" autofocus="autofocus">
                <label for="inputE">Assessing</label>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Add Assessing"/>
          </form>
        </div>
      </div>
    </div>';
					
			}else{
				
				
				echo '<div style="margin-left:20px" class="alert alert-danger">
					Final Assessing Is From 100
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
				    echo '<div class="container" style="height:600px">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><i class="fas fa-star"></i> Add Definitive Assessing</div>
        <div class="card-body">
          <form action="?do=final" method="post">
			  <input type="hidden" value="' . $trainneid . '"  name="trainneid">
			  <input type="hidden" value="' . $trainnerid . '"  name="trainnerid">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputE" name="assessing" class="form-control" placeholder="Assessing" required="required" autofocus="autofocus">
                <label for="inputE">Assessing</label>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Add Assessing"/>
          </form>
        </div>
      </div>
    </div>';
				
				
				
				
				
			}
			}else{
				
				echo '<div style="margin-left:20px" class="alert alert-success">
					This Trainee Has Been Final Assessing from Before
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
				    echo '<div class="container" style="height:600px">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><i class="fas fa-star"></i> Add Definitive Assessing</div>
        <div class="card-body">
          <form action="?do=final" method="post">
			  <input type="hidden" value="' . $trainneid . '"  name="trainneid">
			  <input type="hidden" value="' . $trainnerid . '"  name="trainnerid">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputE" name="assessing" class="form-control" placeholder="Assessing" required="required" autofocus="autofocus">
                <label for="inputE">Assessing</label>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Add Assessing"/>
          </form>
        </div>
      </div>
    </div>';
				
				
			}
			
			
		} ?>	
			

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

  </body>

</html>
