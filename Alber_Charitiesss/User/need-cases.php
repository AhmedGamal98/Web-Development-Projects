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
										<p style="font-family:cursive">Ahmed</p>
										<span style="font-family:cursive">User</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								
								<li> <a href="profile.php"><i class="fa fa-user"></i> Profile</a> </li> 
								<li> <a href="../login.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				
				<a href="../home-page.php" style="margin-top:23px;margin-right:10px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000" class="btn btn-info"><i class="fa fa-home"></i>
				
				<a href="baskets.php" style="margin-top:23px;margin-right:10px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000" class="btn btn-info"><i class="fa fa-shopping-cart"></i><span class="badge blue">3</span></a>
				
				<a href="chats.php" style="margin-top:23px;margin-right:10px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000" class="btn btn-info"><i class="fa fa-comments"></i><span style="background-color:blue" class="badge blue">5</span></a>
			
				
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
							<div class="col-md-4">
								<div class="need">
									<h3>Reyad - Soudia</h3>
									<p>Text text Text text Text text Text text Text text Text text Text text</p>
									<a href="need-cases.php?do=Donate&needid=1" class="btn btn-info"> Donate</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="need">
									<h3>Reyad - Soudia</h3>
									<p>Text text Text text Text text Text text Text text Text text Text text</p>
									<a href="need-cases.php?do=Donate&needid=1" class="btn btn-info"> Donate</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="need">
									<h3>Reyad - Soudia</h3>
									<p>Text text Text text Text text Text text Text text Text text Text text</p>
									<a href="need-cases.php?do=Donate&needid=1" class="btn btn-info"> Donate</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="need">
									<h3>Reyad - Soudia</h3>
									<p>Text text Text text Text text Text text Text text Text text Text text</p>
									<a href="need-cases.php?do=Donate&needid=1" class="btn btn-info"> Donate</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="need">
									<h3>Reyad - Soudia</h3>
									<p>Text text Text text Text text Text text Text text Text text Text text</p>
									<a href="need-cases.php?do=Donate&needid=1" class="btn btn-info"> Donate</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="need">
									<h3>Reyad - Soudia</h3>
									<p>Text text Text text Text text Text text Text text Text text Text text</p>
									<a href="need-cases.php?do=Donate&needid=1" class="btn btn-info"> Donate</a>
								</div>
							</div>
						</div>
				</div>
				
				
				
				<?php }elseif($do == "Donate"){ ?>
				
				
				
				<div class="need-cases text-center">
					   <div class="alert alert-info">Your Donnation Request Fetter Acceptation By Admin</div>
						<div class="row">
							<div class="col-md-4">
								<div class="need">
									<h3>Reyad - Soudia</h3>
									<p>Text text Text text Text text Text text Text text Text text Text text</p>
									<a href="need-cases.php?do=Donate&needid=1" class="btn btn-info"> Donate</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="need">
									<h3>Reyad - Soudia</h3>
									<p>Text text Text text Text text Text text Text text Text text Text text</p>
									<a href="need-cases.php?do=Donate&needid=1" class="btn btn-info"> Donate</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="need">
									<h3>Reyad - Soudia</h3>
									<p>Text text Text text Text text Text text Text text Text text Text text</p>
									<a href="need-cases.php?do=Donate&needid=1" class="btn btn-info"> Donate</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="need">
									<h3>Reyad - Soudia</h3>
									<p>Text text Text text Text text Text text Text text Text text Text text</p>
									<a href="need-cases.php?do=Donate&needid=1" class="btn btn-info"> Donate</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="need">
									<h3>Reyad - Soudia</h3>
									<p>Text text Text text Text text Text text Text text Text text Text text</p>
									<a href="need-cases.php?do=Donate&needid=1" class="btn btn-info"> Donate</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="need">
									<h3>Reyad - Soudia</h3>
									<p>Text text Text text Text text Text text Text text Text text Text text</p>
									<a href="need-cases.php?do=Donate&needid=1" class="btn btn-info"> Donate</a>
								</div>
							</div>
						</div>
				</div>
				
				
				
				
				<?php }elseif($do == "Insert"){ ?>
				
				
				
				
				
				
				<?php } ?>
				
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