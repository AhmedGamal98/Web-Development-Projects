<?php

session_start();
if(!(isset($_SESSION['Password']))){
	
	header('Location:../login.php');
}

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
						<li>
							<a href="need_cases.php"><i class="fa fa-user nav_icon"></i>Need Cases</a>
						</li>
						<li class="">
							<a href="requests.php"><i class="fa fa-book nav_icon"></i>Donnation Requests</a>
						</li>
						<li>
							<a href="users.php"><i class="fa fa-users nav_icon"></i>Registered Users</a>
						</li>
						<li>
							<a href="messages.php"><i class="fa fa-comments nav_icon"></i>Messages Users</a>
						</li>
						<li>
							<a href="food.php"><i class="fa fa-shopping-cart nav_icon"></i>Food Basket </a>
						</li>
						<li>
							<a href="voluntary.php"><i class="fa fa-file-text-o nav_icon"></i>Voluntaryism Events</a>
						</li>
						<li>
							<a href="participations.php"><i class="fa fa-share nav_icon"></i>Participations</a>
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
				<div style="margin:10px;margin-left:80px;margin-top:25px">
					<img class="img-responsive" src="layouts/images/alber1.jpg" width="120px; height: 60px">
				</div>
			</div>
			<div class="header-right">
				
			<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img" style='margin-top:13px;'>	
									 
									<div class="user-name">
										<p style="font-family:cursive; color:#333;">Hi, admin</p>
									</div>
									<i class="fa fa-angle-down lnr" style='margin-top:7px;'></i>
									<i class="fa fa-angle-up lnr" style='margin-top:7px;'></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
							
								<li> <a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				
			</div>
			<div class="clearfix"> </div>
		 </div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				
				<div class="tables">
					<h3 style="color:#fff;" class="title1">Users Messages</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Users Messages Management:</h4>
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>User Name</th>
									<!--<th>Number Of Unread Messages</th>-->
									<th>Response</th>
								</tr>
							</thead>
							<tbody>
								<?php
										   
									include('../connect.php');  
									$sql = $con->prepare("SELECT *
										    
									   FROM
										  user
									   
									   ");
									$sql->execute();
									$rows = $sql->fetchAll();
								    

									foreach($rows as $pat)
									{

								  ?>
								<tr>
									<th scope="row"><?php echo $pat["user_ID"]; ?></th>
									<td><?php echo $pat["Name"]; ?></td>
									<td>
										<a style="background: #FFF; color:#333" href="chats.php?userid=<?php echo $pat["user_ID"]; ?>" class="btn btn-info"><i class="fa fa-comments-o"></i> Response By Chating</a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table> 
					</div>
				</div>
				
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