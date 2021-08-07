<?php 
  
   $do = isset($_GET['do'])? $_GET['do'] : 'Manage';
 session_start();
if(!isset($_SESSION['password'])){
	
	
	header('Location:../login.php');


}

$id = $_SESSION['patientid'];
$name = $_SESSION['name'];
$password = $_SESSION['password'];
$address = $_SESSION['add'];
$email = $_SESSION['mail'];
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
<body class="cbp-spmenu-push" dir="rtl">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation" dir="rtl">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<p style="display:inline;margin-top:7px;margin-right:55px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000;margin-left:25px">مرحبا بك : <?php echo $name; ?> </p>
					<ul class="nav" id="side-menu" style="margin-top:20px">
						<!--<li class="active">
							<a href="patients.php"><i class="fa fa-users nav_icon"></i>المرضى</a>
						</li>-->
						<li>
							<a style="margin-right:4px" href="patients-records.php"><i class="fa fa-file-o nav_icon"></i>السجل الطبي</a>
						</li>
						<!--<ul class="nav nav-second-level collapse" style="margin-right:18px">-->
						<li>
							<a style="color:#1B9CA3;width:310px" href="appointments.php"><i class="fa fa-calendar"></i>قائمة المواعيد</a>
						</li>
						<li>
							<a style="color:#1B9CA3;width:310px" href="medical_check.php"><i class="fa fa-file-text-o"></i>نتائج الفحوصات الطبية</a>
						</li>
						<li>
							<a style="color:#1B9CA3;width:310px" href="medicine.php"><i class="fa fa-medkit"></i>الوصفات الطبية</a>
						</li>
						<!--<li>
							<a href="appointments.php"><i class="fa fa-calendar nav_icon"></i>مواعيد المرضى</a>
						</li>-->
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
					<img class="img-responsive" src="layouts/images/logos.jpg" width="190px; height: 100px">
				</div>
			</div>
			<div class="header-right" style="margin-top:40px">
				
				<a style="display:inline;background: #FFF; color:#333;margin-left:20px;font-family:Almarai" href="../homepage.php" class="btn btn-primary"> <i class="fa fa-home"></i> الرئيسية </a>
				
				<a style="display:inline;background: #FFF; color:#333;margin-left:20px;font-family:Almarai" href="../logout.php" class="btn btn-primary"> <i class="fa fa-sign-out"></i> خروج </a>
				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper" class="pull-left" style="background: url('layouts/images/doc.jpeg') no-repeat;background-size:cover">
			<div class="main-page">
				
				<?php if($do == "Manage"){ ?>
				
				
				<a style="display:inline;background: #FFF; color:#333;margin-left:4px;font-family:Almarai;width:100px" href="patients-records.php" class="btn btn-primary pull-left">رجوع</a>
				<div class="tables" style="margin-top:40px;height:600px">
					<i class="fa fa-file-text-o fa-2x" style="display:inline;margin-left:20px;color:#FFF"></i>
					<h3 style="display:inline;color: #FFF" class="title1">نتائج الفحوصات الطبية</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>الفحوصات :</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th>#</th>
									<th class="text-center">اسم الطبيب</th>
									<th class="text-center">التخصص</th>
									<th class="text-center">التحكم</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT checkups.* , doctor.Username , doctor.specialization FROM checkups INNER JOIN doctor ON doctor.doctor_id =  checkups.doctor_id WHERE checkups.patient_id=$id");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?>
								<tr class="active">
									<th scope="row"><?php echo $pat["checkup_id"];  ?></th>
									<td><?php echo $pat["Username"];  ?></td>
									<td><?php echo $pat["specialization"];  ?></td>
									<td>
										<a style="background: #FFF; color:#333;font-family:Almarai" href="medical_check.php?do=Result&checkid=<?php echo $pat["checkup_id"];  ?>" class="btn btn-danger"><i class="fa fa-file-text-o"></i> نتيجة الفحص الطبي </a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				
				<?php }elseif($do == "Result"){ 
				
				
				$checkid = isset($_GET['checkid']) && is_numeric($_GET['checkid']) ? intval($_GET['checkid']) : 0;
		
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM checkups WHERE checkup_id= ?");
				 $stmt->execute(array($checkid));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();

				
				?>
				
				
				<a style="display:inline;background: #FFF; color:#333;margin-left:4px;font-family:Almarai;width:100px;margin-top:30px" href="medical_check.php" class="btn btn-primary pull-left">رجوع</a>
		    <div class="clearfix"></div>			
			<div class="tables" style="margin-top:40px;height:700px">
				   
					<i class="fa fa-file-text-o fa-2x" style="display:inline;margin-left:20px;color:#FFF"></i>
					<h3 style="display:inline;color: #FFF" class="title1">نتائج الفحوصات الطبية</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4 style="font-weight:bold;color: #3A5D70" class="text-center">نتائج الفحوصات</h4>
						<hr>
						<div class="row" style="margin-bottom:30px">
							<div class="col-md-12 item-info">
								<div class="col-md-6">
								<h4 style="font-weight:bold;color: #3A5D70">نتائج التحاليل</h4>
								<ul class="list-unstyled">
									<li>
										<span>النتيجة: </span> <?php echo $row["analysis_result"]; ?>
									</li>
								</ul>
								</div>
								<div class="col-md-6">
								<h4 style="font-weight:bold;color: #3A5D70">نتائج الأشعة</h4>
								<ul class="list-unstyled">
									<li>
										<span>النتيجة: </span> <?php echo $row["rays_result"]; ?>
									</li>
								</ul>
								</div>
							</div>
						</div>
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