<?php 
  
   $do = isset($_GET['do'])? $_GET['do'] : 'Manage';

 session_start();
if(!isset($_SESSION['password'])){
	
	
	header('Location:../homepage.php');


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
<body class="cbp-spmenu-push" dir="rtl">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation" dir="rtl">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="schools.php"><i class="fa fa-home nav_icon"></i>المدارس</a>
						</li>
						<li class="active">
							<a href="new-schools.php"><i class="fa fa-home nav_icon"></i>المدارس الجديدة</a>
						</li>
						<li>
							<a href="../logout.php"><i class="fa fa-sign-out nav_icon"></i>خروج</a>
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
				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper" class="pull-left" style="height:800px">
			<div class="main-page">
				
				<?php if($do == "Manage"){ ?>
				
				<div class="tables" style="margin-top:40px">
					<h3 class="title1">المدارس الجديدة</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>ادارة المدارس الجديدة :</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">اسم المدرسه</th>
									<th class="text-center">البريد الالكتروني</th>
									<th class="text-center">رقم التواصل</th>
									<th class="text-center">المرحلة التعليمية</th>
									<th class="text-center">التحكم</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT * FROM admin WHERE acceptance = 0");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?>
								<tr class="">
									<th scope="row"><?php echo $pat["admin_ID"]; ?></th>
									<td><?php echo $pat["Name"]; ?></td>
									<td><?php echo $pat["Email"]; ?></td>
									<td><?php echo $pat["hot_line"]; ?></td>
									<td><?php echo $pat["Stage"]; ?></td>
									<td>
										
											<a style="background: #FFF; color:#333" href="new-schools.php?do=Accept&schoolid=<?php echo $pat["admin_ID"]; ?>" class="btn btn-primary confirm"><i class="glyphicon glyphicon-ok"></i> قبول</a>
										
											<a style="background: #FFF; color:#333" href="new-schools.php?do=Reject&schoolid=<?php echo $pat["admin_ID"]; ?>" class="btn btn-danger confirm"><i class="glyphicon glyphicon-remove"></i> رفض</a>
										
									</td>
								</tr>
								<?php  } ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				
				<?php }elseif($do == "Accept"){
	
	              //echo "<div class='container'>";
		
		 $schoolid = isset($_GET['schoolid']) && is_numeric($_GET['schoolid']) ? intval($_GET['schoolid']) : 0;
		
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM admin WHERE admin_ID= ?");
		 $stmt->execute(array($schoolid));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("UPDATE admin SET acceptance = 1 WHERE admin_ID = ?");

				$stmt->execute(array($schoolid));

				echo '<div style="margin-top:40px" dir="rtl" class="alert alert-info">تم تفعيل هذه المدرسة بنجاح
				<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
				</div>';
				echo '<div class="tables" style="margin-top:40px">
					<h3 class="title1">المدارس الجديدة</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>ادارة المدارس الجديدة :</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">اسم المدرسه</th>
									<th class="text-center">البريد الالكتروني</th>
									<th class="text-center">رقم التواصل</th>
									<th class="text-center">المرحلة التعليمية</th>
									<th class="text-center">التحكم</th>
								</tr>
							</thead>
							<tbody class="text-center">';
								
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT * FROM admin WHERE acceptance = 0");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							  
								echo '<tr class="">
									<th scope="row">' . $pat["admin_ID"] . '</th>
									<td>' . $pat["Name"] . '</td>
									<td>' . $pat["Email"] . '</td>
									<td>' . $pat["hot_line"] . '</td>
									<td>' . $pat["Stage"] . '</td>
									<td>';
										//if($pat["acceptance"] == 0){
											echo '<a style="background: #FFF; color:#333" href="new-schools.php?do=Accept&schoolid=' .  $pat["admin_ID"] . '" class="btn btn-primary confirm"><i class="glyphicon glyphicon-ok"></i> قبول</a>';
										//}elseif($pat["acceptance"] == 1){
											echo '<a style="background: #FFF; color:#333" href="new-schools.php?do=Reject&schoolid=' . $pat["admin_ID"] . '" class="btn btn-danger confirm"><i class="glyphicon glyphicon-remove"></i> رفض</a>';
										// }
									echo '</td>
								</tr>';
							 } 
							echo '</tbody>
						</table> 
					</div>
				</div>';
				
				
			}else{
				
				echo "<div class='alert alert-danger'>هذه المدرسة غير مسجلة عندك</div>";
				
			}
		
		//echo "</div>";	
				
				
				
				
			    }elseif($do == "Reject"){
				
				
				 //echo "<div class='container'>";
		
		 $schoolid = isset($_GET['schoolid']) && is_numeric($_GET['schoolid']) ? intval($_GET['schoolid']) : 0;
		
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM admin WHERE admin_ID= ?");
		 $stmt->execute(array($schoolid));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("DELETE FROM admin  WHERE admin_ID = ?");

				$stmt->execute(array($schoolid));

				echo '<div style="margin-top:40px" dir="rtl" class="alert alert-info">تم الغاء تفعيل هذه المدرسة بنجاح
				<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
				</div>';
				echo '<div class="tables" style="margin-top:40px">
					<h3 class="title1">المدارس الجديدة</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>ادارة المدارس الجديدة :</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">اسم المدرسه</th>
									<th class="text-center">البريد الالكتروني</th>
									<th class="text-center">رقم التواصل</th>
									<th class="text-center">المرحلة التعليمية</th>
									<th class="text-center">التحكم</th>
								</tr>
							</thead>
							<tbody class="text-center">';
								
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT * FROM admin WHERE acceptance = 0");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							  
								echo '<tr class="">
									<th scope="row">' . $pat["admin_ID"] . '</th>
									<td>' . $pat["Name"] . '</td>
									<td>' . $pat["Email"] . '</td>
									<td>' . $pat["hot_line"] . '</td>
									<td>' . $pat["Stage"] . '</td>
									<td>';
										//if($pat["acceptance"] == 0){
											echo '<a style="background: #FFF; color:#333" href="new-schools.php?do=Accept&schoolid=' .  $pat["admin_ID"] . '" class="btn btn-primary confirm"><i class="glyphicon glyphicon-ok"></i> قبول</a>';
										//}elseif($pat["acceptance"] == 1){
											echo '<a style="background: #FFF; color:#333" href="new-schools.php?do=Reject&schoolid=' . $pat["admin_ID"] . '" class="btn btn-danger confirm"><i class="glyphicon glyphicon-remove"></i> رفض</a>';
										// }
									echo '</td>
								</tr>';
							 } 
							echo '</tbody>
						</table> 
					</div>
				</div>';
				
				
			}else{
				
				echo "<div class='alert alert-danger'>هذه المدرسة غير مسجلة عندك</div>";
				
			}
		
				
				
				
			} ?>
				
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