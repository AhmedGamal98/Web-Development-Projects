<?php 
  
   $do = isset($_GET['do'])? $_GET['do'] : 'Manage';

session_start();
if(!isset($_SESSION["password"])){
	
	
	header("location: ../signin.php");
	
	
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Packages</title>
    <link href="css/main.css" rel="stylesheet">  
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
	<link href="css/material-design-iconic-font.min.css" rel="stylesheet" media="all">  
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
	<link href="css/select2.min.css" rel="stylesheet">      
	<link href="css/daterangepicker.css" rel="stylesheet"> 
    <link href="css/sb-admin.css" rel="stylesheet">     

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href=""><i class="fas fa-car"></i> Women’s Drive Training System</a>

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
            <!--<i class="fas fa-user-circle fa-fw"></i>-->
			Hello Admin  
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <!--<div class="dropdown-divider"></div>-->  
            <a class="dropdown-item" href="../logout.php"><i class="fas fa-sign fa-fw"></i> Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>-->
        <!--<li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="users.php">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="trainners.php">
            <i class="fas fa-fw fa-users"></i>
            <span>Trainners</span></a>
        </li>
		<li class="nav-item active">
          <a class="nav-link" href="packages.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Participation Packages</span></a>
        </li>  
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <!--<ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
          </ol>-->

          <!-- DataTables Example -->
			
		<?php
			
			
			if($do == "Manage"){
			
			
	    ?>		
			
          <div class="card mb-3">
            <div class="card-header">
				  <i class="fas fa-cogs"></i>
                  Participation Packages Management
			      <a style="float:right;text-align:right;text-decoration:none;color:#000" href="packages.php?do=Add"><i class="fas fa-plus fa-fw"></i> Add Package</a>
			</div>
            <div class="card-body">
               <div class="table-responsive">
                <table class="table" width="100%">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Starting Date</th>
                      <th>Ending Date</th>
                      <th>Trainning Time</th>
					  <th>Price</th>
					  <th>Trainner</th>	
                      <th>Control</th>
                    </tr>
                  </thead>
                  <tbody>
					  <?php  
				    
				
				
				     include('../connect.php');  
						$sql = $con->prepare("SELECT  trainning_schedule.* , trainner.trainnerID , trainner.Firstname

							   FROM 
								 trainning_schedule
							  JOIN
								trainner
							
							ON 
								trainning_schedule.trainnerID = trainner.trainnerID	
									

                            ");
						$sql->execute();
						$rows = $sql->fetchAll();
				        foreach($rows as $pat){
				
				     ?>
                    <tr>
                      <td><?php echo $pat["Name"]; ?></td>
                      <td><?php echo $pat["Starting_date"]; ?></td>
                      <td><?php echo $pat["Ending_date"]; ?></td>
					  <td><?php echo $pat["trainning_time"]; ?></td>
					  <td><?php echo $pat["Price"] . " R"; ?></td>
					  <td><?php echo $pat["Firstname"]; ?></td>	
                      <td>
						<a onclick="return confirm('Are You Sure?');" style="background: #FFF; color:#333" href="packages.php?do=Delete&packageid=<?php echo $pat["trainningID"]; ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>  
					  </td>
                    </tr>
                     <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
	<?php
				
			}elseif($do == "Add"){ ?>
			
			
			
			<div class="container" style="height:600px">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><i class="fas fa-plus"></i> Add Package</div>
        <div class="card-body">
          <form action="?do=Insert" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="name" class="form-control" placeholder="Name" required="required" autofocus="autofocus">
                <label for="inputEmail">Name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="date" id="start" name="start" class="form-control" placeholder="Starting Date" required="required">
				  
                <label for="start">Starting Date</label>
              </div>
            </div>
			<div class="form-group">
              <div class="form-label-group">
                <input type="date" id="end" name="end" class="form-control" placeholder="Ending Date" required="required">
                <label for="end">Ending Date</label>
              </div>
            </div> 
			<div class="form-group">
              <div class="form-label-group">
                <input type="time" id="time" name="time" class="form-control" placeholder="Trainning Time" required="required">
                <label for="time">Trainning Time</label>
              </div>
            </div>  
			<div class="form-group">
              <div class="form-label-group">
                <input type="text" id="price" name="price" class="form-control" placeholder="Price" required="required">
                <label for="price">Price</label>
              </div>
            </div>
			<!--<div class="form-group">
              <div class="form-label-group">
                <input type="text" id="trainner" class="form-control" placeholder="Trainner" required="required">
                <label for="trainner">Trainner</label>
              </div>
            </div>-->
			  
			<div class="form-group">
				<div class="form-label-group rs-select2 js-select-simple select--no-search">
					<select name="trainner">
						<option disabled="disabled" selected="selected">Choose Trainner</option>
						<?php  
				    
				
				
				     include('../connect.php');  
						$sql = $con->prepare("SELECT * 

							   FROM 
								 trainner	

                            WHERE acceptance=1");
						$sql->execute();
						$rows = $sql->fetchAll();
				        foreach($rows as $pat){
				
				     ?>
						<option value="<?php echo $pat["trainnerID"]; ?>"><?php echo $pat["Firstname"]; ?></option>
						<?php } ?>
					</select>
					<div class="select-dropdown"></div>
				</div>
			</div>  
            <input type="submit" class="btn btn-primary btn-block" value="Add Package"/>
          </form>
        </div>
      </div>
    </div>
			
			
			
		<?php	}elseif($do == "Insert"){
				
				
				
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			include('../connect.php');  	
			
			$name = $_POST["name"];
			$start = $_POST["start"];
			$end    = $_POST["end"];
			$price = $_POST["price"];
			$time = $_POST["time"];
			$id = $_POST["trainner"];

			
			$formErrors = array();
			
			if(empty($name)){
				
				$formErrors[] = "Package Name Must Be Written";
				
			}
			if(empty($start)){
				
				$formErrors[] = "Starting Date Must Be Written";
				
			}
			if(empty($end)){
				
				$formErrors[] = "Ending Date Must Be Written";
				
			}
			if(empty($price)){
				
				$formErrors[] = "Price Must Be Written";
				
			}
			if(empty($time)){
				
				$formErrors[] = "Trainning Time Must Be Written";
				
			}
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				//Check if the item exist in database or not
				
				//$check = checkItem("Username" , "users" , $username);
				
				 					  
				 $stmt = $con->prepare("SELECT * FROM  trainning_schedule WHERE Name= ?");
				 $stmt->execute(array($name));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				
				if($count > 0){
					
					echo '<div class="alert alert-info">This Package Is Found Before Please Try Again
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					
						<div class="container" style="height:600px">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><i class="fas fa-plus"></i> Add Package</div>
        <div class="card-body">
          <form action="?do=Insert" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="name" class="form-control" placeholder="Name" required="required" autofocus="autofocus">
                <label for="inputEmail">Name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="date" id="start" name="start" class="form-control" placeholder="Starting Date" required="required">
				  
                <label for="start">Starting Date</label>
              </div>
            </div>
			<div class="form-group">
              <div class="form-label-group">
                <input type="date" id="end" name="end" class="form-control" placeholder="Ending Date" required="required">
                <label for="end">Ending Date</label>
              </div>
            </div> 
			<div class="form-group">
              <div class="form-label-group">
                <input type="time" id="time" name="time" class="form-control" placeholder="Trainning Time" required="required">
                <label for="time">Trainning Time</label>
              </div>
            </div>  
			<div class="form-group">
              <div class="form-label-group">
                <input type="text" id="price" name="price" class="form-control" placeholder="Price" required="required">
                <label for="price">Price</label>
              </div>
            </div>
			<!--<div class="form-group">
              <div class="form-label-group">
                <input type="text" id="trainner" class="form-control" placeholder="Trainner" required="required">
                <label for="trainner">Trainner</label>
              </div>
            </div>-->
			  
			<div class="form-group">
				<div class="form-label-group rs-select2 js-select-simple select--no-search">
					<select name="trainner">
						<option disabled="disabled" selected="selected">Choose Trainner</option>';
						
				
				     include('../connect.php');  
						$sql = $con->prepare("SELECT user.* , trainner.trainnerID

							   FROM 
								 user
							INNER JOIN
								trainner
							ON 
								user.trainnerID = trainner.trainnerID	

                            WHERE acceptance=1");
						$sql->execute();
						$rows = $sql->fetchAll();
				        foreach($rows as $pat){
				
				    
						echo '<option value="' . $pat["trainnerID"] . '">' . $pat["Firstname"] . '</option>';
						 } 
					echo '</select>
					<div class="select-dropdown"></div>
				</div>
			</div>  
            <input type="submit" class="btn btn-primary btn-block" value="Add Package"/>
          </form>
        </div>
      </div>
    </div>
					
					';
					
				}else{
				

					$stmt = $con->prepare("INSERT INTO  trainning_schedule(Name , Starting_date , Ending_date , trainning_time , Price , trainnerID) VALUES(:name, :start, :end, :time , :price , :trainnerid)");

					$stmt->execute(array(

						'name' => $name,
						'start' => $start,
						'end'    => $end,
						'time' => $time,
						'price' => $price,
						'trainnerid' => $id

					));
				

					
					echo '
					<div class="alert alert-info">Package Added Successdully
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					
						<div class="container" style="height:600px">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><i class="fas fa-plus"></i> Add Package</div>
        <div class="card-body">
          <form action="?do=Insert" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="name" class="form-control" placeholder="Name" required="required" autofocus="autofocus">
                <label for="inputEmail">Name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="date" id="start" name="start" class="form-control" placeholder="Starting Date" required="required">
				  
                <label for="start">Starting Date</label>
              </div>
            </div>
			<div class="form-group">
              <div class="form-label-group">
                <input type="date" id="end" name="end" class="form-control" placeholder="Ending Date" required="required">
                <label for="end">Ending Date</label>
              </div>
            </div> 
			<div class="form-group">
              <div class="form-label-group">
                <input type="time" id="time" name="time" class="form-control" placeholder="Trainning Time" required="required">
                <label for="time">Trainning Time</label>
              </div>
            </div>  
			<div class="form-group">
              <div class="form-label-group">
                <input type="text" id="price" name="price" class="form-control" placeholder="Price" required="required">
                <label for="price">Price</label>
              </div>
            </div>
			<!--<div class="form-group">
              <div class="form-label-group">
                <input type="text" id="trainner" class="form-control" placeholder="Trainner" required="required">
                <label for="trainner">Trainner</label>
              </div>
            </div>-->
			  
			<div class="form-group">
				<div class="form-label-group rs-select2 js-select-simple select--no-search">
					<select name="trainner">
						<option disabled="disabled" selected="selected">Choose Trainner</option>';
						
				
				     include('../connect.php');  
						$sql = $con->prepare("SELECT user.* , trainner.trainnerID

							   FROM 
								 user
							INNER JOIN
								trainner
							ON 
								user.trainnerID = trainner.trainnerID	

                            WHERE acceptance=1");
						$sql->execute();
						$rows = $sql->fetchAll();
				        foreach($rows as $pat){
				
				    
						echo '<option value="' . $pat["trainnerID"] . '">' . $pat["Firstname"] . '</option>';
						 } 
					echo '</select>
					<div class="select-dropdown"></div>
				</div>
			</div>  
            <input type="submit" class="btn btn-primary btn-block" value="Add Package"/>
          </form>
        </div>
      </div>
    </div>
					
					';
					
					
				}
			}
			
		}else{
			
			echo "<div class='alert alert-danger'>You Can not Browse This Page</div>";
			
		}
				
				
				
		  }elseif($do == "Delete"){
			
			
			 $id = isset($_GET['packageid']) && is_numeric($_GET['packageid']) ? intval($_GET['packageid']) : 0;
		
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM trainning_schedule WHERE trainningID= ?");
		 $stmt->execute(array($id));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("DELETE FROM trainning_schedule WHERE trainningID = :userid");

				$stmt->bindParam(":userid" , $id);

				$stmt->execute();

				
				echo '
				<div class="alert alert-success">Package Deleted Successfully
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button></div>
				<div class="card mb-3">
            <div class="card-header">
				  <i class="fas fa-cogs"></i>
                  Participation Packages Management
			      <a style="float:right;text-align:right;text-decoration:none;color:#000" href="packages.php?do=Add"><i class="fas fa-plus fa-fw"></i> Add Package</a>
			</div>
            <div class="card-body">
               <div class="table-responsive">
                <table class="table" width="100%">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Starting Date</th>
                      <th>Ending Date</th>
                      <th>Trainning Time</th>
					  <th>Price</th>
					  <th>Trainner</th>	
                      <th>Control</th>
                    </tr>
                  </thead>
                  <tbody>';
					  
				
				     include('../connect.php');  
						$sql = $con->prepare("SELECT  trainning_schedule.* , trainner.trainnerID , trainner.Firstname

							   FROM 
								 trainning_schedule
							  JOIN
								trainner
							ON 
								trainning_schedule.trainnerID = trainner.trainnerID	
								");
						$sql->execute();
						$rows = $sql->fetchAll();
				        foreach($rows as $pat){
				
				     
                    echo '<tr>
                      <td>' . $pat["Name"] . '</td>
                      <td>' . $pat["Starting_date"] . '</td>
                      <td>'  . $pat["Ending_date"] . '</td>
					  <td>'  . $pat["trainning_time"] . '</td>
					  <td>' . $pat["Price"] . " R" . '</td>
					  <td>' . $pat["Firstname"] . '</td>	
                      <td>
						<a onclick="return confirm(\'Are You Sure?\');" style="background: #FFF; color:#333" href="packages.php?do=Delete&packageid=' .  $pat["trainningID"] . '" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>  
					  </td>
                    </tr>';
                     }
                  echo '</tbody>
                </table>
              </div>
            </div>
          </div>
			
				
				';
				
				
			}else{
				
				echo "<div class='alert alert-danger'>You Can not Browse This Page</div>";
				
				
			}
			
			}
			
		?>		
			
						
          <!--<p class="small text-center text-muted my-5">
            <em>More table examples coming soon...</em>
          </p>-->

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
	<script src="js/select2.min.js"></script>    
	<script src="js/moment.min.js"></script>    
	<script src="js/daterangepicker.js"></script> 
	  
	<script src="js/global.js"></script>     

  </body>

</html>
