<?php

$do = isset($_GET['do'])? $_GET['do'] : "Payment";

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
				
				<a href="chats.php" style="margin-top:23px;margin-right:10px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000" class="btn btn-info"><i class="fas fa-comments"></i></a>
				
				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper" style="background-color:#AC9C76">
			<div class="main-page">
				
				<?php if($do == "Payment"){ ?>
				
				
				<div class="credit center-block login design" style="width:600px;padding:5px">
					<div class="row">
						<form action="?do=Pay" method="post">
							<div class="hold" style="background-color:#F7F7F7;margin-bottom:20px">
								<div class="col-md-6"> <span style="font-weight:bold;color:#FFF">CREDIT/DEBIT CARD PAYMENT</span> </div>
							<div class="col-md-6 text-right" style="margin-top: -5px;"> <img src="layouts/images/visa.png"> <img src="layouts/images/mastercard.png"> <img src="layouts/images/amex.png"> </div>
							</div>
							
							<div class="form-group col-md-12 ast"> <label for="cc-number" class="control-label" style="color:#FFF">CARD NUMBER</label> <input id="cc-number" name="card" type="tel" class="input-lg form-control cc-number phone" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" required>
								
							<div style="margin-top:20px" class="alert alert-danger empty-alert">Card Number Can't Be <strong></strong>Empty</div>
							<div style="margin-top:20px" class="alert alert-danger long-alert">Card Number Must Be Contains At Least  <strong>16 Numbers</strong></div>
							<div style="margin-top:20px" class="alert alert-danger custom-alert">Card Number Must Be Contains Numbers <strong>Only</strong></div>
							
							
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group ast"> <label for="cc-exp" class="control-label" style="color:#FFF">CARD EXPIRY</label> <input id="cc-exp" name="date" type="date" class="input-lg form-control cc-exp username" autocomplete="cc-exp" placeholder="•• / ••" required> 
									
									
									<div style="margin-top:20px" class="alert alert-danger empty-alert">CARD EXPIRY Date Can't Be <strong></strong>Empty</div>
							        
									
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group ast"> <label for="cc-cvc" class="control-label" style="color:#FFF">CARD CVC</label> <input id="cc-cvc" name="cvc" type="tel" class="input-lg form-control cc-cvc cvv" autocomplete="off" placeholder="••••" required> 
									
									<div style="margin-top:20px" class="alert alert-danger empty-alert">Card CVC Can't Be <strong></strong>Empty</div>
									<div style="margin-top:20px" class="alert alert-danger long-alert">Card CVC  Must Be Contains At Least  <strong>4 Numbers</strong></div>
									<div style="margin-top:20px" class="alert alert-danger custom-alert">Card CVC  Must Be Contains Numbers <strong>Only</strong></div>
									
									
									</div>
								</div>
							</div>
							<div class="form-group col-md-12 ast"> <label for="numeric" class="control-label" style="color:#FFF">CARD HOLDER NAME</label> <input type="text" name="name" class="input-lg form-control username"> 
							
							<div style="margin-top:20px" class="alert alert-danger empty-alert">Card Holder Name Can't Be <strong></strong>Empty</div>
							<div style="margin-top:20px" class="alert alert-danger number-alert">Card Holder Name   Must Be Contains Characters <strong>Only</strong></div>
							
							
							</div><br>
							<div class="form-group col-md-12"><a onclick="return confirm('Are you sure you want to Pay?')"> <input value="MAKE PAYMENT" type="submit" class="btn btn-success btn-lg form-control" style="font-size: .8rem;height:50px; background-color: #FFC923 ;color:#ffffff;border:none "></a> </div>
						</form>
					</div>
				</div>
				
				
				
				<?php }else if($do == "Pay"){
				
				
				
	                 if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			include('../connect.php');  	
			
			$card = $_POST["card"];
			$cvc = $_POST["cvc"];
			$name = $_POST["name"];	
			$date = $_POST["date"];			 
				   
						 
						 

			$stmt = $con->prepare("INSERT INTO   payment(Card_ID , 	End_Date , 	CVV , name , user_id) VALUES(:card, :date, :cvv, :name , :userid)");

					$stmt->execute(array(

						'card' => $card,
						'date' => $date,
						'cvv'    => $cvc,
						'name'    => $name,
						'userid' => $userid

					));
				
						 
						 
					 
				   $stmt = $con->prepare("DELETE FROM my_basket WHERE user_id=$userid");

				   $stmt->execute(array());	 
						 
						 
					
					echo '
					<div class="alert alert-info">Your Payment Has Been Successfully
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="credit center-block" style="width:600px;padding:5px">
					<div class="row">
						<form action="?do=Pay" method="post">
							<div class="hold" style="background-color:#F7F7F7;margin-bottom:20px">
								<div class="col-md-6"> <span style="font-weight:bold;color:#FFF">CREDIT/DEBIT CARD PAYMENT</span> </div>
							<div class="col-md-6 text-right" style="margin-top: -5px;"> <img src="layouts/images/visa.png"> <img src="layouts/images/mastercard.png"> <img src="layouts/images/amex.png"> </div>
							</div>
							
							<div class="form-group col-md-12"> <label for="cc-number" class="control-label" style="color:#FFF">CARD NUMBER</label> <input id="cc-number" name="card" type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" required> </div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group"> <label for="cc-exp" class="control-label" style="color:#FFF">CARD EXPIRY</label> <input id="cc-exp" name="date" type="date" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="•• / ••" required> </div>
								</div>
								<div class="col-md-6">
									<div class="form-group"> <label for="cc-cvc" class="control-label" style="color:#FFF">CARD CVC</label> <input id="cc-cvc" name="cvc" type="tel" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="••••" required> </div>
								</div>
							</div>
							<div class="form-group col-md-12"> <label for="numeric" class="control-label" style="color:#FFF">CARD HOLDER NAME</label> <input type="text" name="name" class="input-lg form-control"> </div><br>
							<div class="form-group col-md-12"><a onclick="return confirm(\'Are you sure you want to Pay?\')" href="main.html"> <input value="MAKE PAYMENT" type="submit" class="btn btn-success btn-lg form-control" style="font-size: .8rem;height:50px; background-color: #FFC923 ;color:#ffffff;border:none "></a> </div>
						</form>
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
	<script src="../layouts/js/login.js"></script>	
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="layouts/js/bootstrap.js"> </script>
</body>
</html>