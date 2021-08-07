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
    $CV = $_SESSION['cv'];

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>
 
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
	<link href="css/profile.css" rel="stylesheet">

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
            Hello <?php echo $fname; ?>
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
		<li class="nav-item">
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
              <i class="fas fa-user"></i>
              Profile</div>
            <div class="card-body">
					<div class="row">
						<div class="col-md-12 image">
							<img style="border-radius:50%" class='img-responsive img-thumbnail center-block' src='avatar.jpeg' alt='item'>
						</div>
					<div class="col-md-12 item-info">
						<h2 class="text-center" style="margin-top:10px"><?php echo $fname . ' ' . $lname; ?></h2>
						<p class="text-center">Trainner</p>
						<ul class="list-unstyled">
							<li>
								<i class="fas fa-user-circle fa-fw"></i>
								<span>Name: </span><?php echo $fname . ' ' . $lname; ?>
							</li>
							<li>
								<i class="fas fa-phone fa-fw"></i>
								<span>Phone Number: </span><?php echo '0' . $phone; ?>
							</li>
							<li>
								<i class="fas fa-envelope fa-fw"></i>
								<span>Email: </span><?php echo $email; ?>
							</li>
							<!--<li>
								<i class="fas fa-calendar fa-fw"></i>
								<span>Registeration Date: </span>1/2/2021
							</li>-->
							<li>
								<i class="fas fa-image fa-fw"></i>
								<span>Licence Photo: </span><img src="avatar.jpeg" width="40px" height="40px">
							</li>
							<li>
								<i class="fas fa-file fa-fw"></i>
								<span>CV: </span><a href="../cv/<?php echo $CV; ?>" download style="text-decoration:none;color:#000">download</a>
								  
                            
                     
							</li>
							<li>
								<i class="fas fa-edit fa-fw"></i>
								<span>Update Your Data: </span><a style="background: #FFF; color:#333" href="profile.php?do=Edit&trainnerid=<?php echo $trainnerid; ?>" class="btn btn-primary"><i class="fas fa-edit fa-fw"></i> Update</a>

							</li>
							<li>
								<i class="fas fa-trash fa-fw"></i>
								<span class="delete">Delete Account: </span><a style="background: #FFF; color:#333" href="profile.php?do=Delete&trainnerid=<?php echo $trainnerid; ?>" class="btn btn-danger"><i class="fas fa-trash fa-fw"></i> Delete</a>
							</li>
						</ul>	
					</div>
				</div>
            </div>
          </div>
			
		 <?php  }elseif($do == "Edit"){
			
			
		 $trainnerid = isset($_GET['trainnerid']) && is_numeric($_GET['trainnerid']) ? intval($_GET['trainnerid']) : 0;
	   
	     include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM trainner WHERE trainnerID= ?");
		 $stmt->execute(array($trainnerid));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

	    if($count > 0){
			
			?>
			
			
			
			<div class="container" style="height:650px">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><i class="fas fa-edit"></i> Edit Your Data</div>
        <div class="card-body">
          <form action="?do=Update" method="post" enctype="multipart/form-data">
			<input class="form-control" type="hidden" name="trainnerid" autocomplete="off" value="<?php echo $trainnerid; ?>"/>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="f" class="form-control" value="<?php echo $row["Firstname"]; ?>" name="first" required="required" autofocus="autofocus">
                <label for="f">First Name</label>
              </div>
            </div>
			<div class="form-group">
              <div class="form-label-group">
                <input type="text" id="l" class="form-control" value="<?php echo $row["Lastname"]; ?>" name="last" required="required" autofocus="autofocus">
                <label for="l">Last Name</label>
              </div>
            </div>  
			<div class="form-group">
              <div class="form-label-group">
                <input type="hidden" name="old-password" value="<?php echo $row["Password"]; ?>">
				<input type="password" id="pass" name="password" class="form-control"  placeholder="Password"  autofocus="autofocus">  
                <label for="pass">Password</label>
              </div>
            </div>  
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="email" name="email" class="form-control" value="<?php echo $row["Email"]; ?>" placeholder="Email" required="required">
                <label for="email">Email</label>
              </div>
            </div>
			<div class="form-group">
              <div class="form-label-group">
                <input type="text" id="phone" name="phone" value="<?php echo "0" . $row["Phone"]; ?>" class="form-control"  required="required">
                <label for="phone">Phone Number</label>
              </div>
            </div> 
			<div class="form-group">
              <div class="form-label-group">
                <input type="file" id="photo" name="image" class="form-control" placeholder="Licence Photo" >
                <label for="photo">Licence Photo</label>
              </div>
            </div>  
			<div class="form-group">
              <div class="form-label-group">
                <input type="file" id="cc" name="cv" class="form-control" placeholder="CV" >
                <label for="cc">CV</label>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Update"/>
          </form>
        </div>
      </div>
    </div>
			
			<?php  } ?>
			
		<?php  }elseif($do == "Update"){
				
				
				
				
				 include('../connect.php');  
     	//echo "<div class='container'>";
		
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			//Get Varaiables from Post Method
			
			$id       = $_POST["trainnerid"];
			$first    = $_POST["first"];
			$last     = $_POST["last"];
			$email    = $_POST["email"];
			$phone  = $_POST["phone"];
			//$cv = $_POST["cv"];
			
			//Password Trick
			
		   //$pass = empty($_POST['new-password']) ? $_POST['old-password'] : sha1($_POST['new-password']);
			
			if(empty($_POST['password'])){
				
				$password = $_POST['old-password'];
				
			}else{
				
				$password = sha1($_POST['password']);
			}
			
			
			
			//Validate Form By Server site
			
			$formErrors = array();
			
			if(empty($first)){
				
				$formErrors[] = "First Name Must Be Written";
				
			}
			if(empty($last)){
				
				$formErrors[] = "Last Name Must Be Written";
				
			}
			
			if(empty($phone)){
				
				$formErrors[] = "Phone Number Must Be Written";
				
			}
			
			
			//Loop into errors array and echo it
			
			foreach($formErrors as $error){
				
				
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM trainner WHERE trainnerID= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				
				
				
				echo "<div style='margin-left:20px' class='alert alert-danger'>" . $error . "
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
				</div>";
				echo '<div class="container" style="height:650px">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><i class="fas fa-edit"></i> Edit Your Data</div>
        <div class="card-body">
          <form action="?do=Update" method="post" enctype="multipart/form-data">
			<input class="form-control" type="hidden" name="trainnerid" autocomplete="off" value="' . $trainnerid . '"/>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="f" class="form-control" value="' . $row["Firstname"] . '" name="first" required="required" autofocus="autofocus">
                <label for="f">First Name</label>
              </div>
            </div>
			<div class="form-group">
              <div class="form-label-group">
                <input type="text" id="l" class="form-control" value="' . $row["Lastname"] . '" name="last" required="required" autofocus="autofocus">
                <label for="l">Last Name</label>
              </div>
            </div>  
			<div class="form-group">
              <div class="form-label-group">
                <input type="hidden" name="old-password" value="' . $row["Password"] . '">
				<input type="password" id="pass" name="password" class="form-control"  placeholder="Password"  autofocus="autofocus">  
                <label for="pass">Password</label>
              </div>
            </div>  
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="email" name="email" class="form-control" value="' . $row["Email"] . '" placeholder="Email" required="required">
                <label for="email">Email</label>
              </div>
            </div>
			<div class="form-group">
              <div class="form-label-group">
                <input type="text" id="phone" name="phone" value="' .  $row["Phone"] . '" class="form-control"  required="required">
                <label for="phone">Phone Number</label>
              </div>
            </div> 
			<div class="form-group">
              <div class="form-label-group">
                <input type="file" id="photo" name="image" class="form-control" placeholder="Licence Photo" >
                <label for="photo">Licence Photo</label>
              </div>
            </div>  
			<div class="form-group">
              <div class="form-label-group">
                <input type="file" id="cv" name="cv" class="form-control" placeholder="CV">
                <label for="cv">CV</label>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Update"/>
          </form>
        </div>
      </div>
    </div>';
				
				
			}
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				//Update the Database with this info
				
				$stmt2 = $con->prepare("SELECT * FROM trainner WHERE Email = ? AND trainnerID != ?");
				
				$stmt2->execute(array( $email , $id));
				
				$count = $stmt2->rowCount();
				
				if($count > 0){
					
					
				 //include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM trainner WHERE trainnerID= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
					
					
		   echo "<div style='margin-left:20px' class='alert alert-danger'>
		   
		   These Values are Found Before Please Try Again
		   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
		   </div>";
					
			echo '<div class="container" style="height:650px">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><i class="fas fa-edit"></i> Edit Your Data</div>
        <div class="card-body">
          <form action="?do=Update" method="post" enctype="multipart/form-data">
			<input class="form-control" type="hidden" name="trainnerid" autocomplete="off" value="' . $trainnerid . '"/>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="f" class="form-control" value="' . $row["Firstname"] . '" name="first" required="required" autofocus="autofocus">
                <label for="f">First Name</label>
              </div>
            </div>
			<div class="form-group">
              <div class="form-label-group">
                <input type="text" id="l" class="form-control" value="' . $row["Lastname"] . '" name="last" required="required" autofocus="autofocus">
                <label for="l">Last Name</label>
              </div>
            </div>  
			<div class="form-group">
              <div class="form-label-group">
                <input type="hidden" name="old-password" value="' . $row["Password"] . '">
				<input type="password" id="pass" name="password" class="form-control"  placeholder="Password" autofocus="autofocus">  
                <label for="pass">Password</label>
              </div>
            </div>  
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="email" name="email" class="form-control" value="' . $row["Email"] . '" placeholder="Email" required="required">
                <label for="email">Email</label>
              </div>
            </div>
			<div class="form-group">
              <div class="form-label-group">
                <input type="text" id="phone" name="phone" value="' .  $row["Phone"] . '" class="form-control"  required="required">
                <label for="phone">Phone Number</label>
              </div>
            </div> 
			<div class="form-group">
              <div class="form-label-group">
                <input type="file" id="photo" name="image" class="form-control" placeholder="Licence Photo" >
                <label for="photo">Licence Photo</label>
              </div>
            </div>  
			<div class="form-group">
              <div class="form-label-group">
                <input type="file" id="cv" name="cv" class="form-control" placeholder="CV"">
                <label for="cv">CV</label>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Update"/>
          </form>
        </div>
      </div>
    </div>';
					
					
				}else{
					
					
					
					if($_FILES['image']['tmp_name'] == FALSE){


					 
					$stmt = $con->prepare("UPDATE trainner SET Firstname = ?, Lastname = ? , Email = ? , Phone = ? , Password = ?  WHERE trainnerID = ?");
					$stmt->execute(array($first , $last , $email , $phone , $password ,  $id));
						
						

				 }else{

$image = addslashes($_FILES['image']['tmp_name']);
					 $name = addslashes($_FILES['image']['name']);
					 $image = file_get_contents($image);
					 $image = base64_encode($image);
$cv = $_FILES['cv']['name'];
$file_type = $_FILES['cv']['type']; 
$extension=explode('.',$cv); 
$file_ext=strtolower(end($extension));
$expensions= array("pdf"); 

if(in_array($file_ext,$expensions) === false)
{
    echo " <div class='alert alert-danger alert-dismissible show fade'>
                               Sorry, This file cannot be loaded, it must be one of the types: pdf .
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>×</span>
                                </button>
                        </div>";
            
        }

else {
$filetmpname = $_FILES['cv']['tmp_name'];
move_uploaded_file($filetmpname,"../cv/".$cv);


						
					$stmt = $con->prepare("UPDATE trainner SET Firstname = ?, Lastname = ? , Email = ? , Phone = ? , Password = ? , license_photo = ? , CV = ? WHERE trainnerID = ?");
					$stmt->execute(array($first , $last , $email , $phone , $password , $image , $cv ,  $id));


				 }}
					
					
					

					// echo success message
					
					
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM trainner WHERE trainnerID= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();

					echo '<div style="margin-left:20px" class="alert alert-success">
					Updated Successfully For Your Data
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<div class="container" style="height:650px">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><i class="fas fa-edit"></i> Edit Your Data</div>
        <div class="card-body">
          <form action="?do=Update" method="post" enctype="multipart/form-data">
			<input class="form-control" type="hidden" name="trainnerid" autocomplete="off" value="' . $trainnerid . '"/>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="f" class="form-control" value="' . $row["Firstname"] . '" name="first" required="required" autofocus="autofocus">
                <label for="f">First Name</label>
              </div>
            </div>
			<div class="form-group">
              <div class="form-label-group">
                <input type="text" id="l" class="form-control" value="' . $row["Lastname"] . '" name="last" required="required" autofocus="autofocus">
                <label for="l">Last Name</label>
              </div>
            </div>  
			<div class="form-group">
              <div class="form-label-group">
                <input type="hidden" name="old-password" value="' . $row["Password"] . '">
				<input type="password" id="pass" name="password" class="form-control"  placeholder="Password"  autofocus="autofocus">  
                <label for="pass">Password</label>
              </div>
            </div>  
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="email" name="email" class="form-control" value="' . $row["Email"] . '" placeholder="Email" required="required">
                <label for="email">Email</label>
              </div>
            </div>
			<div class="form-group">
              <div class="form-label-group">
                <input type="text" id="phone" name="phone" value="' .  $row["Phone"] . '" class="form-control"  required="required">
                <label for="phone">Phone Number</label>
              </div>
            </div> 
			<div class="form-group">
              <div class="form-label-group">
                <input type="file" id="photo" name="image" class="form-control" placeholder="Licence Photo" >
                <label for="photo">Licence Photo</label>
              </div>
            </div>  
			<div class="form-group">
              <div class="form-label-group">
                <input type="file" id="cv" name="cv" class="form-control" placeholder="CV">
                <label for="cv">CV</label>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Update"/>
          </form>
        </div>
      </div>
    </div>';
					
				}
				
			}
			
		}else{
			
			echo "<div class='alert alert-danger'>You can not Browse This Page</div>";
			
		}
				
				
				
				
				
				
				
			}elseif($do == "Delete"){
			
			
				$trainnerid = isset($_GET['trainnerid']) && is_numeric($_GET['trainnerid']) ? intval($_GET['trainnerid']) : 0;
		
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM trainner WHERE trainnerID= ?");
		 $stmt->execute(array($trainnerid));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("DELETE FROM trainner WHERE trainnerID = :trainnerid");

				$stmt->bindParam(":trainnerid" , $trainnerid);

				$stmt->execute();

				header("location: ../logout.php");
				
			}
				
				
			
			
			}	?>	
			

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
