<?php 
  
   $do = isset($_GET['do'])? $_GET['do'] : 'Manage';
ob_start();

session_start();
if(!isset($_SESSION['password'])){
	
	
	header('Location:../login1.php');


}

$name = $_SESSION['Username'];



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
					<p style="display:inline;margin-top:7px;margin-right:55px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000;margin-left:25px">مرحبا بك :  <?php echo $name; ?></p>
					<ul class="nav" id="side-menu" style="margin-top:20px">
						<!--<li class="active">
							<a href="patients.php"><i class="fa fa-users nav_icon"></i>المرضى</a>
						</li>-->
						<li>
							<a href="patients.php" style="margin-right:0"><i class="fa fa-users nav_icon"></i>المرضى</a>
							
						</li>
						<li>
							<a style="color:#1B9CA3" href="patient_login.php"><i class="glyphicon glyphicon-user"></i>الدخول لملف مريض</a>
						</li>
						<li>
							<a style="color:#1B9CA3" href="patient_create.php"><i class="glyphicon glyphicon-plus"></i>انشاء سجل طبي</a>
						</li>
						<li>
							<a href="appointments.php" style="margin-right:0"><i class="fa fa-calendar nav_icon"></i> مواعيد المرضى</a>
						</li>
						<li>
							<a style="color:#1B9CA3" href="appointments.php?do=Add"><i class="glyphicon glyphicon-plus"></i> اضافة موعد لمريض</a>
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
				
				<!--<a style="background: #FFF; color:#333;margin-left:20px" href="patient_login.php" class="btn btn-primary"><i class="glyphicon glyphicon-user"></i>  تسجيل الدخول لملف مريض</a>
				
				<a style="background: #FFF; color:#333;margin-left:20px" href="patient_create.php" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>  انشاء سجل طبي لمريض جديد</a>-->
				
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
				
				<div class="login-page" style="margin-top:140px;height:500px;width:55%">
				<div class="widget-shadow">
					
					<i class="fa fa-sign-in" style="display:inline;float:right;font-size:30px;margin-right:25px;padding-top:20px;width:2px"></i>
					<h3 style="padding-top:15px;margin-bottom:0" class="title1">تسجيل الدخول لملف مريض</h3>
					<div class="login-body">
						<form action="?do=Insert" method="post">
							
							<input class="form-control" type="text" class="id" name="id" placeholder="رقم الهوية" required="">
							
							<input type="submit" name="add" value="دخول">
						</form>
					</div>
				</div>
			</div>
				
				<?php }elseif($do == "Insert"){
	
	                     if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			$national = $_POST["id"];
			
			
				
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM medical_record WHERE national_id= ?");
				 $stmt->execute(array($national));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				
				if($count > 0){
					
					    $_SESSION['patientid'] = $row['national_id'];
						$_SESSION['name'] = $row['Name'];
						$_SESSION['password'] = $row['Password'];
						$_SESSION['add'] = $row['Address'];
						$_SESSION['mail'] = $row['Email'];
						$_SESSION['phone'] = $row['Phone'];
						header('Location:../patient/patients-records.php');
					
					
				}else{
				

					echo "<div style='margin-top:40px' dir='rtl' class='alert alert-info'>هذا المريض غير موجود من قبل
					<button type='button' class='close pull-left' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
					</div>";
					echo '<div class="login-page" style="margin-top:140px;height:500px;width:55%">
				<div class="widget-shadow">
					
					<i class="fa fa-sign-in" style="display:inline;float:right;font-size:30px;margin-right:25px;padding-top:20px;width:2px"></i>
					<h3 style="padding-top:15px;margin-bottom:0" class="title1">تسجيل الدخول لملف مريض</h3>
					<div class="login-body">
						<form action="?do=Insert" method="post">
							
							<input class="form-control" type="text" class="id" name="id" placeholder="رقم الهوية" required="">
							
							<input type="submit" name="add" value="دخول">
						</form>
					</div>
				</div>
			</div>';
					
					
				}
			
			
		}else{
			
			echo "<div class='alert alert-danger'>لا يمكنك الدخول لهذه الصفحة</div>";
			
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

<?php

ob_end_flush();

?>