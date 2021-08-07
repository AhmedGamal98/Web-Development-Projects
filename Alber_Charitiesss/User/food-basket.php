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
		<div id="page-wrapper" style="background-color: #ac9c76;">
			<div class="main-page">
				
				<?php if($do == "Manage"){ ?>
				
				
				<div class="need-cases text-center">
						<div class="row">
							<?php
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT * FROM  food_basket");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?>
							<div class="col-md-4">
								<div class="need" style="height: 280px;">
									<p><?php echo $pat["Description"]; ?></p>
									<form action="?do=Insert" method="post" style="margin-top:40px">
										<input type="hidden" name="desc" value="<?php echo $pat["Description"]; ?>" class="form-control">
										<select class="form-control" name="quantity" style="margin-bottom:20px">
											<option>Quantity</option>
											<?php
											for($i = 1; $i <= $pat["quantity"]; $i++){

											?>
											<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
											<?php } ?>
										</select>
										<p><?php echo $pat["price"] . " R"; ?></p>
										<input style="margin-bottom:20px" type="hidden" name="price" value="<?php echo $pat["price"]; ?>">
										<input style="margin-bottom:20px" type="hidden" name="id" value="<?php echo $pat["FB_ID"]; ?>">
										<input type="submit" value="Donate" style="background-color:#ffc923; border:0px;"  class="btn btn-info">
									</form>
								</div>
							</div>
							<?php } ?>
							
						</div>
				</div>
				
				
				<?php }elseif($do == "Insert"){
				
				
				
	           if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			include('../connect.php');  	
			
			$quantity = $_POST["quantity"];
			$price = $_POST["price"];
			$desc = $_POST["desc"];
			$id = $_POST["id"];	   
				   
			$total = $quantity * $price;
				 
			$formErrors = array();
			
			if(empty($quantity)){
				
				$formErrors[] = "Quantity Must Be Written";
				
			}
			
				

					$stmt = $con->prepare("INSERT INTO  my_basket(description , quantity , total_price , user_id) VALUES(:desc, :quantity, :price, :userid)");

					$stmt->execute(array(

						'desc' => $desc,
						'quantity' => $quantity,
						'price'    => $total,
						'userid' => $userid

					));
				   
				

					$stmt = $con->prepare("INSERT INTO  requests(Donor_name , description  , quantity , type , donation_date , user_id) VALUES(:name , :desc , :quantity , :type , :donation_date , :userid)");

					$stmt->execute(array(

						'name' => $name,
						'desc' => $desc,
						'quantity' => $quantity,
						'type'    => 'Donation By Food Basket',
						'donation_date'    => date("y-m-d"),
						'userid' => $userid

					));
				   
				   
				   $sql = $con->prepare("SELECT * FROM  food_basket WHERE FB_ID=$id");
				   $sql->execute();
				   $row = $sql->fetch();
				   
				   $q = $row["quantity"] - $quantity;
				   
				   
				   if($q == 0){
				   
				   
				   
				   $stmt = $con->prepare("DELETE FROM food_basket WHERE FB_ID = ?");

				   $stmt->execute(array($id));
					   
					   
					   
				   }else{
					   
					   
					$stmt = $con->prepare("UPDATE food_basket SET quantity = ? WHERE FB_ID = ?");
					$stmt->execute(array($q , $id));
					   
					   
				   }
				
					
					echo '
					<div style="margin-left:20px" class="alert alert-info">Food Basket Has Been Buyed Successdully
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="need-cases text-center">
						<div class="row">';
							
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT * FROM  food_basket");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   
							echo '<div class="col-md-4">
								<div class="need" style="height: 280px;">
									<p>' . $pat["Description"] . '</p>
									<form action="?do=Insert" method="post" style="margin-top:40px">
										<input type="hidden" name="desc" value="' . $pat["Description"] . '" class="form-control">
										<select class="form-control" name="quantity" style="margin-bottom:20px">
											<option>Quantity</option>';
										
											for($i = 1; $i <= $pat["quantity"]; $i++){

											
											echo '<option value="' . $i . '">' . $i . '</option>';
										   } 
										echo '</select>
										<p>' . $pat["price"] . " R" . '</p>
										<input style="margin-bottom:20px" type="hidden" name="price" value="' . $pat["price"] . '">
										<input style="margin-bottom:20px" type="hidden" name="id" value="' . $pat["FB_ID"] . '">
										<input type="submit" value="Donate" style="background-color:#ffc923; border:0px;" class="btn btn-info">
									</form>
								</div>
							</div>';
							}
							
						echo '</div>
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