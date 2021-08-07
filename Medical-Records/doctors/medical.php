<?php 
  
   $do = isset($_GET['do'])? $_GET['do'] : 'Manage';

 session_start();
if(!isset($_SESSION['password'])){
	
	
	header('Location:../login1.php');


}

$id = $_SESSION['doctor_id'];
$name = $_SESSION['Username'];
$password = $_SESSION['password'];
$phone = $_SESSION['Phone'];
$email = $_SESSION['Email'];
$address = $_SESSION['Address'];
$spec = $_SESSION['specialization'];

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
					<p style="display:inline;margin-top:7px;margin-right:55px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000;margin-left:25px">مرحبا بك : دكتور <?php echo $name; ?> </p>
					<ul class="nav" id="side-menu" style="margin-top:20px">
						<li>
							<a href="patients-records.php"><i class="fa fa-user nav_icon"></i>استعلام عن مريض</a>
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
				
				<?php if($do == "Manage"){
				
				
				$patientid = isset($_GET['patientid']) && is_numeric($_GET['patientid']) ? intval($_GET['patientid']) : 0;
		
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM  medical_record WHERE national_id= ?");
				 $stmt->execute(array($patientid));
				 $row = $stmt->fetch();
				 $patient = $row["record_id"];
	
	
	            					  
				 $stmt = $con->prepare("SELECT * FROM medicines WHERE patient_id= ?");
				 $stmt->execute(array($patient));
	             $rows = $stmt->fetch();
	
	
	            						  
				 $stmt = $con->prepare("SELECT * FROM checkups WHERE patient_id= ?");
				 $stmt->execute(array($patient));
				 $rowss = $stmt->fetch();
				 //$count = $stmt->rowCount();

	            
				
				
				?>
				
				
			<a style="display:inline;background: #FFF; color:#333;margin-left:4px;font-family:Almarai;width:100px;margin-top:30px" href="show.php?patientid=<?php echo $patientid; ?>" class="btn btn-primary pull-left">رجوع</a>
		    <div class="clearfix"></div>			
			<div class="tables" style="margin-top:40px">
				   
					<i class="fa fa-user fa-2x" style="display:inline;margin-left:20px;color:#FFF"></i>
					<h3 style="display:inline;color: #FFF" class="title1">السجل الطبي</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4 style="font-weight:bold;color: #3A5D70" class="text-center">المعلومات الشخصية</h4>
						<hr>
						<div class="row" style="margin-bottom:30px">
							<div class="col-md-12 item-info">
								<ul class="list-unstyled">
									<li>
										<span>رقم الهوية: </span><?php echo $row["national_id"];  ?>
									</li>
									<li>
										<span>اسم المريض: </span><?php echo $row["Name"];  ?>
									</li>
									<li>
										<span>العنوان </span><?php echo $row["Address"];  ?>
									</li>
									<li>
										<span>رقم الهاتف: </span><?php echo $row["Phone"];  ?>
									</li>
									<li>
										<span>البريد الالكتروني: </span><?php echo $row["Email"];  ?>
									</li>
								</ul>	
							</div>
						</div>
						<h4 style="font-weight:bold;color: #3A5D70" class="text-center">التشخيص</h4>
						<hr>
						<div class="row" style="margin-bottom:30px">
							<div class="col-md-12 item-info">
								<ul class="list-unstyled">
									<li>
										<?php if($rows["diagnosis"] != FALSE){ ?>
										   <span>التشخيص: </span> <?php echo $rows["diagnosis"];  ?>
										<?php }else{ ?>
										
										<span>التشخيص: </span> <?php echo "لا يوجد تشخيص";  ?>
										
										<?php } ?>
									</li>
								</ul>	
							</div>
						</div>
						<h4 style="font-weight:bold;color: #3A5D70" class="text-center">الأدوية</h4>
						<hr>
						<div class="row" style="margin-bottom:30px">
							<div class="col-md-12 item-info">
								<ul class="list-unstyled">
									<?php
	                                   include('../connect.php');  	
	
										 $stmt = $con->prepare("SELECT * FROM medicines WHERE patient_id= ?");
										 $stmt->execute(array($patient));
										 $row = $stmt->fetchAll();

										 $count = $stmt->rowCount();
				
	                                  foreach($row as $pat){
	
	                                ?>
									<li>
										<?php if($count > 0){ ?>
										<?php if($pat["medicine_name"] != FALSE){  ?>
										<span><?php echo $pat["medicine_id"]; ?>: </span> <?php echo $pat["medicine_name"]; ?>
										
										<?php }else{ ?>
										
										<span><?php echo "#"; ?>: </span> <?php echo "لا يوجد وصفات طبية"; ?>
										
										<?php } ?>
										
										<?php } ?>
									</li>
									<?php } ?>
								</ul>	
							</div>
						</div>
						<h4 style="font-weight:bold;color: #3A5D70" class="text-center">نتائج الفحوصات</h4>
						<hr>
						<div class="row" style="margin-bottom:30px">
							<div class="col-md-12 item-info">
								<div class="col-md-6">
								<h4 style="font-weight:bold;color: #3A5D70">نتائج التحاليل</h4>
								<ul class="list-unstyled">
									<?php
	
										 $stmt = $con->prepare("SELECT DISTINCT analysis_result FROM checkups WHERE patient_id= ? AND  Type= ?");
										 $stmt->execute(array($patient , 'تحاليل'));
										 $rowss = $stmt->fetchAll();
	                                     $count = $stmt->rowCount();
	                                     foreach($rowss as $pat){
	
	                                 ?>
									<li>
										<?php  if($count > 0){ ?>
										<span>النتيجة: </span> <?php echo $pat["analysis_result"]; ?>
										<?php } ?>
									</li>
									<?php } ?>
								</ul>
								</div>
								<div class="col-md-6">
								<h4 style="font-weight:bold;color: #3A5D70">نتائج الأشعة</h4>
								<ul class="list-unstyled">
									<?php
	
										 $stmt = $con->prepare("SELECT DISTINCT rays_result FROM checkups WHERE patient_id= ? AND  Type= ?");
										 $stmt->execute(array($patient , 'أشعه'));
										 $rowss = $stmt->fetchAll();
	                                     $count = $stmt->rowCount();
	                                     foreach($rowss as $pat){
	
	                                 ?>
									<li>
										<?php if($count > 0){ ?>
										
										<span>النتيجة: </span> <?php echo $pat["rays_result"]; ?>
										
										
										<?php }else{ ?>
										
										<span>النتيجة: </span> <?php echo "لا يوجد أشعه"; ?>
										
										<?php } ?>
										
									</li>
									<?php } ?>
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