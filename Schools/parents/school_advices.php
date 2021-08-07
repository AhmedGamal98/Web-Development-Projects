<?php 
  
   $do = isset($_GET['do'])? $_GET['do'] : 'Manage';




session_start();
if(!isset($_SESSION['password'])){
	
	
	header('Location:../homepage.php');


}

$id = $_SESSION['parentid'];
$adminid = $_SESSION['adminid'];
$code = $_SESSION['code'];

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
<body class="cbp-spmenu-push" dir="rtl">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation" dir="rtl">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="Sons.php"><i class="fa fa-plus nav_icon"></i>اضافة الأبناء</a>
						</li>
						<li>
							<a href="information.php"><i class="fa fa-users nav_icon"></i>معلومات الأبناء</a>
						</li>
						<!--<li>
							<a href="grades.php"><i class="fa fa-book nav_icon"></i>الدرجات</a>
						</li>-->
						<li class="active">
							<a href="school_advices.php"><i class="fa fa-bell-o nav_icon"></i>اعلانات المدارس</a>
						</li>
						<!--<li>
							<a href="messages.php"><i class="fa fa-bell-o nav_icon"></i>الاعلانات</a>
						</li>
						<!--<li>
							<a href="chats.php"><i class="fa fa-comments-o nav_icon"></i>المحادثات</a>
						</li>
						<li>
							<a href="add_assessing.php"><i class="fa fa-plus nav_icon"></i>تقييم الدروس</a>
						</li>-->
						<!--<li>
							<a href="assessing.php"><i class="fa fa-star nav_icon"></i>التقييمات</a>
						</li>-->
						<li class="">
							<a href="../homepage.php"><i class="fa fa-sign-out nav_icon"></i>خروج</a>
						</li>
					</ul>
					<div class="clearfix"> </div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section" style="height: 120px; z-index: 9999;box-shadow: none;position:absolute;right:0">
			<div class="header-left">
				<div style="margin:10px;margin-left:60px;margin-top:10px">
					<img class="img-responsive" src="layouts/images/tward.jpg" width="170px; height: 90px">
				</div>
			</div>
			<div class="header-right" style="margin-top:35px">
				
				
				
				<a href="../homepage.php" style="margin-top:7px;margin-right:10px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000;margin-left:25px" class="btn btn-danger"><i class="fa fa-home"></i> الرئيسية</a>
				
				
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<!--<a href="advices.php" class="dropdown-toggle"><i style="font-size:22px" class="fa fa-bell-o"></i><span class="badge blue">3</span></a>
							<!--<ul class="dropdown-menu" style="pull-right">
								<li>
									<div class="notification_header">
										<h3>أنت تمتلك 3 تنبيهات</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="user_img"><img src="images/2.png" alt=""></div>
								   <div class="notification_desc">
									<p>تمت اضافة درجتين لابنك في مادة الفيزياء</p>
									<p><span>منذ ساعة واحدة</span></p>
									</div>
								  <div class="clearfix"></div>	
								 </a></li>
								 <li class="odd"><a href="#">
									<div class="user_img"><img src="images/1.png" alt=""></div>
								   <div class="notification_desc">
									<p>تمت اضافة درجتين لابنك في مادة الفيزياء</p>
									<p><span>منذ ساعة واحدة</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								 <li><a href="#">
									<div class="user_img"><img src="images/3.png" alt=""></div>
								   <div class="notification_desc">
									<p>تمت اضافة درجتين لابنك في مادة الفيزياء</p>
									<p><span>منذ ساعة واحدة</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								 <li>
									<div class="notification_bottom">
										<a href="#">كل التنبيهات</a>
									</div> 
								</li>
							</ul>-->
						</li>	
							
					</ul>
					<div class="clearfix"> </div>
				</div>
				
				<!--<a href="profile.php" style="margin-top:7px;margin-right:10px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000;margin-left:25px" class="btn btn-danger"><i class="fa fa-user"></i></a>-->
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper" class="pull-left">
			<div class="main-page">
				
				
				<?php if($do == "Manage"){ ?>
				
				<div class="tables" style="margin-top:40px;height:700px">
					<!--<a href="messages.php?do=Add" class="btn btn-primary pull-left" style="margin-bottom:30px;background-color:#FFF;width:170px;border:1px solid #337AB7;color:#000"><i class="fa fa-plus"></i> اضافة اعلان أو تنبيه</a>-->
					<i style="display:inline;margin-left:20px" class="fa fa-bell-o fa-2x"></i>
					<h3 style="display:inline" class="title1">اعلانات المدارس الملتحق بها</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>الاعلانات:</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th>#</th>
									<th>اسم المدرسة</th>
									<th class="text-center">الاعلان</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	
								  include('../connect.php');  
									$sql = $con->prepare("SELECT
									   messages.* , admin.Name 
									   FROM
										  messages
										  
										  INNER JOIN
										  admin
										ON messages.admin_ID = admin.admin_ID
										
									   WHERE messages.admin_ID=$adminid");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{

								   ?>
								<tr>
									<th scope="row"><?php echo $pat["message_ID"]; ?></th>
									<th><?php echo $pat["Name"]; ?></th>
									<td><?php echo $pat["message"]; ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				
				<?php } ?>
				
			</div>
		</div>
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