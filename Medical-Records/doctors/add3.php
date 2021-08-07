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
	
<link href="layouts/css/main.css" rel="stylesheet"> 		
<!-- Bootstrap Core CSS -->
<link href="layouts/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="layouts/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="layouts/css/font-awesome.css" rel="stylesheet"> 
<link href="layouts/css/daterangepicker.css" rel="stylesheet"> 
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
	
	
	            $patientd = isset($_GET['patientd']) && is_numeric($_GET['patientd']) ? intval($_GET['patientd']) : 0;
				
				
				?>
				
				<a style="display:inline;background: #FFF; color:#333;margin-left:4px;font-family:Almarai;width:100px;margin-top:30px" href="medical-data.php?patientid=<?php echo $patientd; ?>" class="btn btn-primary pull-left">رجوع</a>
		        <div class="clearfix"></div>	
				<div class="login-page" style="margin-top:140px;height:500px;width:90%">
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert" method="post">
							<input type="hidden" name="patient" value="<?php echo  $patientid; ?>"/>
							<input type="hidden" name="patientd" value="<?php echo  $patientd; ?>"/>
							<div class="col=md-12">
								<div class="col-md-2" style="margin-top:100px;font-size:50px"><i class="fa fa-caret-square-o-left"></i></div>
								<div class="col-md-10">
									<textarea name="as" style="height:250px;resize:none;padding:5px" placeholder="اكتب الاشعة التي يحتاج اليها المريض" class="form-control" required></textarea>	
								
							        
								</div>
							</div>
							
							<input style="width:670px;margin-right:15px" type="submit" name="add" value="اضافة">
						</form>
					</div>
				</div>
			</div>
				
				
				
				<?php }elseif($do == "Insert"){
	
	
	
	                  if($_SERVER['REQUEST_METHOD'] =='POST'){
			
					   include("../connect.php");
			
			//Get Varaiables from Post Method
			
					$patientid = $_POST["patient"];
					$as = $_POST["as"];	
				    $patientd = $_POST["patientd"];	  		   
			
					$stmt = $con->prepare("INSERT INTO  checkups(Type , rays , patient_id , doctor_id) VALUES(:type , :rays , :patient , :doctor)");

					$stmt->execute(array(

						'type' => 'أشعه',
						'rays' => $as,
						'patient' => $patientid,
						'doctor' => $id
						
					));
					
					
					echo '<div style="margin-top:40px" dir="rtl" class="alert alert-info">تم طلب اجراء أشعه  لهذا المريض بنجاح
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<a style="display:inline;background: #FFF; color:#333;margin-left:4px;font-family:Almarai;width:100px;margin-top:30px" href="medical-data.php?patientid=' . $patientd  . '" class="btn btn-primary pull-left">رجوع</a>
		        <div class="clearfix"></div>	
				<div class="login-page" style="margin-top:140px;height:500px;width:90%">
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert" method="post">
							<input type="hidden" name="patient" value="' . $patientid . '"/>
							<input type="hidden" name="patientd" value="' . $patientd . '"/>
							<div class="col=md-12">
								<div class="col-md-2" style="margin-top:100px;font-size:50px"><i class="fa fa-caret-square-o-left"></i></div>
								<div class="col-md-10">
									<textarea name="as" style="height:250px;resize:none;padding:5px" placeholder="اكتب الاشعة التي يحتاج اليها المريض" class="form-control" required></textarea>	
								
							        
								</div>
							</div>
							
							<input style="width:670px;margin-right:15px" type="submit" name="add" value="اضافة">
						</form>
					</div>
				</div>
			</div>';
					

			
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
   <script src="layouts/js/jquery-1.11.1.min.js"> </script>	
   <script src="layouts/js/bootstrap.js"> </script>
   <script src="layouts/js/moment.min.js"> </script>	
   <script src="layouts/js/daterangepicker.js"></script>
   <script src="layouts/js/global.js"> </script>	
</body>
</html>