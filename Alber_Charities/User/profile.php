<?php

$do = isset($_GET['do'])? $_GET['do'] : "Manage";


 session_start();

if(!isset($_SESSION['Password'])){
	
	
	header("location: ../login.php");
	
	
}

$userid = $_SESSION['userid'];
$email = $_SESSION['email'];
$password = $_SESSION['Password'];
$name = $_SESSION['Name'];
$phone = $_SESSION['phone'];

?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="layouts/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="layouts/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="layouts/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="layouts/js/jquery-1.11.1.min.js"></script>
<script src="layouts/js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="layouts/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="layouts/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="layouts/js/metisMenu.min.js"></script>
<script src="layouts/js/custom.js"></script>
<link href="layouts/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						
						<li class="">
							<a href="voluntary.php"><i class="fa fa-file-text-o nav_icon"></i>Socialistics</a>
						</li>
						<li>
							<a href="donnations.php"><i class="fa fa-book nav_icon"></i>Donations</a>
						</li>
						<li>
							<a href="donnation.php"><i class="fa fa-book nav_icon"></i>My Donations</a>
						</li>
						
					</ul>
					<div class="clearfix"> </div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section"style="height: 80px; z-index: 9999;box-shadow: none">
			<div class="header-left">
				<div style="margin:10px;margin-left:65px;margin-top:25px">
					<img class="img-responsive" src="layouts/images/alber1.jpg" width="120px; height: 60px">
				</div>
			</div>
			<div class="header-right">
				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="layouts/images/avatar.jpeg" width="50px" height="50px" style="border-radius:50%;border:1px solid #CCC" alt=""> </span> 
									<div class="user-name">
										<p style="font-family:cursive"><?php echo $name; ?></p>
										<span style="font-family:cursive">User</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="profile.php"><i class="fa fa-user"></i> Profile</a> </li> 
								<li> <a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<a href="../homepage.php" style="margin-top:23px;margin-right:10px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000" class="btn btn-info"><i class="fa fa-home"></i>

				<a href="baskets.php" style="margin-top:23px;margin-right:10px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000" class="btn btn-info"><i class="fa fa-shopping-cart"></i></a>
				
				<a href="chats.php" style="margin-top:23px;margin-right:10px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000" class="btn btn-info"><i class="fa	 fa-comments"></i></a>
				
			</div>
			<div class="clearfix"> </div>
		 </div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper" style="background-color: #ac9c76;">
			<div class="main-page">
				
				<?php if($do == "Manage"){ ?>
				
				<!-- Start Profile Page -->
							
							
							<h1 class="text-center" style="margin-bottom:0;color:#FFF">Hi <?php echo $name; ?></h1>
						    <div class="row">
								<div class="col-md-12 image">
									<img style="border-radius:50%" class='img-responsive img-thumbnail center-block' src='layouts/images/avatar.jpeg' alt='item'>
								</div>
							<div class="col-md-12 item-info">
								<h2 class="text-center" style="margin-top:10px;color:#FFF"><?php  echo $name; ?></h2>
								<p class="text-center" style="color:#FFF">User</p>
								<ul class="list-unstyled">
									<li>
										<i class="glyphicon glyphicon-user fa-fw"></i>
										<span>Name: </span><?php  echo $name; ?>
									</li>
									<li>
										<i class="glyphicon glyphicon-phone fa-fw"></i>
										<span>Phone Number: </span><?php  echo "0" . $phone; ?>
									</li>
									<li>
										<i class="glyphicon glyphicon-envelope fa-fw"></i>
										<span>Email: </span><?php  echo $email; ?>
									</li>
									<!--<li>
										<i class="glyphicon glyphicon-calendar fa-fw"></i>
										<span>Date: </span>1/2/2021
									</li>-->
									<li>
										<i class="glyphicon glyphicon-pencil fa-fw"></i>
										<span>Update Your Data: </span><a href="profile.php?do=Edit&userid=<?php  echo $userid; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil fa-fw"></i> Update</a>
										
									</li>
									<li>
										<i class="glyphicon glyphicon-trash glyphicon-fw"></i>
										<span class="delete">Delete Account: </span><a href="profile.php?do=Delete&userid=<?php  echo $userid; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash glyphicon-fw"></i> Delete</a>
									</li>
								</ul>	
							</div>
						</div>
							
							<!-- End Profile Page -->
				
				<?php }elseif($do == "Edit"){ ?>
				
				
				<?php
	  
				include('../connect.php');  
				$sql = $con->prepare("SELECT * FROM user WHERE user_ID=$userid");
				$sql->execute();
				$row = $sql->fetch();

				

			   ?>
				
				<div class="login-page">
				<h3 class="title1" style="color:#fff;">Update Your Data</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Update" method="post">
							
							
							<input class="form-control" type="hidden" name="id" value="<?php echo $row["user_ID"]; ?>" required="">
							
							<input class="form-control" type="text" name="name" value="<?php echo $row["Name"]; ?>" required="">
							
							<input class="form-control" type="hidden" name="old-password" value="<?php echo $row["password"]; ?>">
							
							<input class="form-control" type="password" placeholder="Password" name="password">
							
							<input style="margin-bottom:20px" class="form-control" type="email" class="user" name="email" value="<?php echo $row["Email"]; ?>" required="">
							
							<input style="margin-bottom:20px" class="form-control" type="tel" name="phone" value="<?php echo "0" . $row["phone"]; ?>">
							
							<input type="submit" name="update" style="background-color:#ffc923;" value="Update">
						</form>
					</div>
				</div>
			</div>
				
				
				<?php }elseif($do == "Update"){
	
	          include('../connect.php');  
     	//echo "<div class='container'>";
		
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			//Get Varaiables from Post Method
			
			$id       = $_POST["id"];
			$name   = $_POST["name"];
			$email     = $_POST["email"];
			$phone  = $_POST["phone"];
			
			//Password Trick
			
		   //$pass = empty($_POST['new-password']) ? $_POST['old-password'] : sha1($_POST['new-password']);
			
			if(empty($_POST['password'])){
				
				$password = $_POST['old-password'];
				
			}else{
				
				$password = sha1($_POST['password']);
			}
			
			
			//Validate Form By Server site
			
			$formErrors = array();
			
			if(empty($name)){
				
				$formErrors[] = "Name Must Be Written";
				
			}
			if(empty($phone)){
				
				$formErrors[] = "Phone Number Must Be Written";
				
			}
			if(empty($email)){
				
				$formErrors[] = "Email Must Be Written";
				
			}
			
			//Loop into errors array and echo it
			
			foreach($formErrors as $error){
				
				
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM user WHERE user_ID= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				
				
				
				echo "<div class='alert alert-info'>" . $error . "
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
				</div>";
				echo '<div class="login-page">
				<h3 class="title1" style="color:#fff;">Update Your Data</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Update" method="post">
							
							
							<input class="form-control" type="hidden" name="id" value="' . $row["user_ID"] . '" required="">
							
							<input class="form-control" type="text" name="name" value="' . $row["Name"] . '" required="">
							
							<input class="form-control" type="hidden" name="old-password" value="' . $row["password"] . '">
							
							<input class="form-control" placeholder="Password" type="password" name="password">
							
							<input style="margin-bottom:20px" class="form-control" type="email" class="user" name="email" value="' . $row["Email"] . '" required="">
							
							<input style="margin-bottom:20px" class="form-control" type="tel" name="phone" value="' . "0" . $row["phone"] . '">
							
							<input type="submit" name="update" style="background-color:#ffc923;" value="Update">
						</form>
					</div>
				</div>
			</div>';
				
				
			}
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				//Update the Database with this info
				
				$stmt2 = $con->prepare("SELECT * FROM user WHERE Email = ? AND user_ID != ?");
				
				$stmt2->execute(array($email , $id));
				
				$count = $stmt2->rowCount();
				
				if($count > 0){
					
					
				 //include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM user WHERE user_ID= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
					
					
		   echo "<div class='alert alert-info'>
		   
		   These Values are Found Before Please Try Again
		   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
		   </div>";
					
			echo '<div class="login-page">
				<h3 class="title1" style="color:#fff;">Update Your Data</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Update" method="post">
							
							
							<input class="form-control" type="hidden" name="id" value="' . $row["user_ID"] . '" required="">
							
							<input class="form-control" type="text" name="name" value="' . $row["Name"] . '" required="">
							
							<input class="form-control" type="hidden" name="old-password" value="' . $row["password"] . '">
							
							<input class="form-control" placeholder="Password" type="password" name="password">
							
							<input style="margin-bottom:20px" class="form-control" type="email" class="user" name="email" value="' . $row["Email"] . '" required="">
							
							<input style="margin-bottom:20px" class="form-control" type="tel" name="phone" value="' . "0" . $row["phone"] . '">
							
							<input type="submit" name="update" style="background-color:#ffc923;" value="Update">
						</form>
					</div>
				</div>
			</div>';
					
					
				}else{
					
					

					$stmt = $con->prepare("UPDATE user SET Name = ?, Email = ? , phone = ? , password = ?  WHERE user_ID = ?");
					$stmt->execute(array($name , $email , $phone , $password , $id));
					
					
					
					

					// echo success message
					
					
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM user WHERE user_ID= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();

					echo '<div class="alert alert-info">
					Updated Successfully For Your Data
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<div class="login-page">
				<h3 class="title1" style="color:#fff;">Update Your Data</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Update" method="post">
							
							
							<input class="form-control" type="hidden" name="id" value="' . $row["user_ID"] . '" required="">
							
							<input class="form-control" type="text" name="name" value="' . $row["Name"] . '" required="">
							
							<input class="form-control" type="hidden" name="old-password" value="' . $row["password"] . '">
							
							<input class="form-control" placeholder="Password" type="password" name="password">
							
							<input style="margin-bottom:20px" class="form-control" type="email" class="user" name="email" value="' . $row["Email"] . '" required="">
							
							<input style="margin-bottom:20px" class="form-control" type="tel" name="phone" value="' . "0" . $row["phone"] . '">
							
							<input type="submit" name="update" style="background-color:#ffc923;" value="Update">
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

		
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM user WHERE user_ID= ?");
		 $stmt->execute(array($userid));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){
				
				
				$stmt = $con->prepare("DELETE FROM user WHERE user_ID = ?");

				$stmt->execute(array($userid));

				
				
			}else{
				
				echo "<div class='alert alert-danger'>This Investor Not Found</div>";
				
			}
				
				
				
				} ?>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2021 All Rights Reserved <a href="alber.php" target="_blank">ALBER CHARITY</a></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="layouts/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="layouts/js/jquery.nicescroll.js"></script>
	<script src="layouts/js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="layouts/js/bootstrap.js"> </script>
</body>
</html>