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
$caseid = $_SESSION["caseid"];


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
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push" >
	<div class="main-content" >
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						
						<li class="">
							<a href="voluntary.php"><i class="far fa-file-alt nav_icon"></i>Socialistics</a>
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
		<div class="sticky-header header-section" style="height: 80px; z-index: 9999;box-shadow: none">
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
				
				<a href="chats.php" style="margin-top:23px;margin-right:10px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000" class="btn btn-info"><i class="fa fa-comments"></i></a>
				
				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper" style="background-color:#ac9c76;color:#fff;">
			<div class="main-page">
				
				<?php if($do == "Manage"){ ?>
				
				<div class="donnation center-block" style="margin-top:100px">
						<div class="row">
							<div class="col-md-4" style="">
								<div class="need" style="background-color: #ffc923;width: 300px;margin-right:10px;">
									<i class="fa fa-shopping-cart"></i>
									<a href="food-basket.php?userid=<?php echo $userid; ?>">Food Basket</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="need" style="background-color: #ffc923;width: 300px;margin-right:10px;">
								<i class="fas fa-tshirt"></i>
									<a href="donnations.php?do=Clothes&userid=<?php echo $userid; ?>">Donation By Clothes</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="need" style="background-color: #ffc923;width: 300px;">
								<i class="fas fa-plus-circle"></i>
									<a href="donnations.php?do=Others&userid=<?php echo $userid; ?>">Others</a>
								</div>
							</div>
						</div>
				</div>
				
				
			<?php }elseif($do == "Clothes"){ ?>
				
				
				<div class="login-page">
				<h3 style = "text-align: center; margin-bottom: 1em; color:#fff;">Add New Donnation Request</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert" method="post">
							
						   <select class="form-control" name="gender" style="margin-bottom:20px">
								<option>Gender</option>
								<option>male</option>
								<option>female</option>
							</select>
							
							<select class="form-control" name="age" style="margin-bottom:20px">
								<option>Age</option>
								<option>10 - 18</option>
								<option>18 - 25</option>
								<option>25 - 35</option>
								<option>35 - 60</option>
								<option>More than 60</option>
							</select>

							<select class="form-control" name="quantity" style="margin-bottom:20px">
								<option>Quantity</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>More than 4</option>
							</select>

							<select class="form-control" name="type" style="margin-bottom:20px">
								<option>Type</option>
								<option>Summer Clothes</option>
								<option>Winter clothes</option>
							</select>
							
							<!--<input style="padding-left:20px" class="form-control" value="Donation By Clothes" type="hidden" name="desc"/>
							
							
							<input style="margin-bottom:20px" class="form-control" placeholder="Address" type="date" name="date" required/>-->
							
							
							<select class="form-control hidden" name="case" style="margin-bottom:20px">
								<option value="0">Need Cases</option>
								<?php
								 include('../connect.php');  
									$sql = $con->prepare("SELECT * FROM  cases");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{
									?>			
								
								<option value="<?php echo $pat["case_ID"]; ?>"><?php echo $pat["case_name"]; ?></option>
								<?php } ?>
							</select>
							
							
							<input type="submit" name="add" value="Add Request" style="background-color:#ffc923;">
						</form>
					</div>
				</div>
			</div>
				
				<?php }elseif($do == "Insert"){ 
	
	
	          if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			include('../connect.php');  	
			
			$quantity = $_POST["quantity"];
			$age = $_POST["age"];
			$gender = $_POST["gender"];	 
			//$date = date("l jS \of F Y");
			$type = $_POST["type"];	 
				   
				

					$stmt = $con->prepare("INSERT INTO   requests(Donor_name , description , gender , age , quantity , type , donation_date , user_id , case_id) VALUES(:name , :desc , :gender , :age , :quantity , :type , :donation_date , :userid , :caseid)");

					$stmt->execute(array(

						'name' => $name,
						'desc' => 'Donation By Clothes',
						'gender' => $gender,
						'age' => $age,
						'quantity' => $quantity,
						'type'    => $type,
						'donation_date'    => date("y-m-d"),
						'userid' => $userid,
						'caseid' => $caseid

					));
				
					
					echo '
					<div class="alert alert-info">Donation Request Has Been Sent Successdully
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="login-page">
				<h3 style = "text-align: center; margin-bottom: 1em; color:#fff;">Add New Donnation Request</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert" method="post">
							
						   <select class="form-control" name="gender" style="margin-bottom:20px">
								<option>Gender</option>
								<option>male</option>
								<option>female</option>
							</select>
							
							<select class="form-control" name="age" style="margin-bottom:20px">
								<option>Age</option>
								<option>10 - 18</option>
								<option>18 - 25</option>
								<option>25 - 35</option>
								<option>35 - 60</option>
								<option>More than 60</option>
							</select>

							<select class="form-control" name="quantity" style="margin-bottom:20px">
								<option>Quantity</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>More than 4</option>
							</select>

							<select class="form-control" name="type" style="margin-bottom:20px">
								<option>Type</option>
								<option>Summer Clothes</option>
								<option>Winter clothes</option>
							</select>
							
							<!--<input style="padding-left:20px" class="form-control" placeholder="Address" type="text" name="address" required/>
							
							
							<input style="margin-bottom:20px" class="form-control" placeholder="Address" type="date" name="date" required/>-->
							
							
							<select class="form-control hidden" name="case" style="margin-bottom:20px">
								<option value="0">Need Cases</option>';
								
								 include('../connect.php');  
									$sql = $con->prepare("SELECT * FROM  cases");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{
											
								
								echo '<option value="' . $pat["case_ID"] . '">' . $pat["case_name"] . '</option>';
							    } 
							echo '</select>
							
							
							<input type="submit" name="add" value="Add Request" style="background-color:#ffc923;">
						</form>
					</div>
				</div>
			</div>
				';
					
					
		
			
		}else{
			
			echo "<div class='alert alert-danger'>Can not Browse This Page</div>";
			
		}
				
				
				
				
				 }elseif($do == "Others"){ ?>
				
				
				<div class="login-page">
				<h3 style = "text-align: center; margin-bottom: 1em; color:#fff;">Add New Donnation Request</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert1" method="post">
							
		
						   	
							
							<textarea name="donation" id="input"  class="form-control" placeholder="Enter The Donnation Description" rows="5" ></textarea>
							
							
							<!--<input style="padding-left:20px;margin-top:20px" class="form-control" placeholder="Address" type="text" name="address" required/>
							
							
							<input style="margin-bottom:20px" class="form-control" placeholder="Address" type="date" name="date" required/>-->
							
							<select style="margin-top:20px" class="form-control hidden" name="case" style="margin-bottom:20px">
								<option value="0">Need Cases</option>
								<?php
								 include('../connect.php');  
									$sql = $con->prepare("SELECT * FROM  cases");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{
									?>			
								
								<option value="<?php echo $pat["case_ID"]; ?>"><?php echo $pat["case_name"]; ?></option>
								<?php } ?>
							</select>
							
							
							
							<input type="submit" name="add" style="background-color:#ffc923;" value="Add Request">
						</form>
					</div>
				</div>
			</div>
				
				<?php }elseif($do == "Insert1"){ 
				
				
				 if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			include('../connect.php');  	
		 
			/*$address = $_POST["address"];	
			$date = $_POST["date"];
			$case = $_POST["case"];*/	 	  
			$desc = $_POST["donation"];	 
			//$date = new date("yy-mm-d");			 
				

					$stmt = $con->prepare("INSERT INTO   requests(Donor_name , description , type , donation_date , user_id , case_id) VALUES(:name , :desc , :type , :donation_date  , :userid , :caseid)");

					$stmt->execute(array(

						'name' => $name,
						'desc' => $desc,
						'type' => 'Others',
						'donation_date' => date("y-m-d"),
						'userid' => $userid,
						'caseid' => $caseid

					));
				
					
					echo '
					<div class="alert alert-info">Donation Request Has Been Sent Successdully
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="login-page">
				<h3 style = "text-align: center; margin-bottom: 1em; color:#fff;">Add New Donnation Request</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert1" method="post">
							
		
						   	
							
							<textarea name="donation" id="input"  class="form-control" placeholder="Enter The Donnation" rows="5" ></textarea>
							
							
							<!--<input style="padding-left:20px;margin-top:20px" class="form-control" placeholder="Address" type="text" name="address" required/>
							
							
							<input style="margin-bottom:20px" class="form-control" placeholder="Address" type="date" name="date" required/>-->
							
							<select style="margin-top:20px" class="form-control hidden" name="case" style="margin-bottom:20px">
								<option value="0">Need Cases</option>';
							
								 include('../connect.php');  
									$sql = $con->prepare("SELECT * FROM  cases");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{
									
								
								echo '<option value="' . $pat["case_ID"] . '">' . $pat["case_name"] . '</option>';
								}
							echo '</select>
							
							
							
							<input type="submit" name="add" style="background-color:#ffc923;" value="Add Request">
						</form>
					</div>
				</div>
			</div>
				';
					
					
		
			
		}else{
			
			echo "<div class='alert alert-danger'>Can not Browse This Page</div>";
			
		}
				
				
				} ?>	
			
				
				<div class="clearfix"> </div>	
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