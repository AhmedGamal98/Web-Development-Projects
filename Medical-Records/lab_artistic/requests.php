<?php 
  
   $do = isset($_GET['do'])? $_GET['do'] : 'Manage';

 session_start();
if(!isset($_SESSION['password'])){
	
	
	header('Location:../login1.php');


}

$id = $_SESSION['artist_id'];
$name = $_SESSION['Username'];
$password = $_SESSION['password'];
$phone = $_SESSION['Phone'];
$email = $_SESSION['Email'];
$address = $_SESSION['Address'];

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
					<p style="display:inline;margin-top:7px;margin-right:55px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000;margin-left:25px">مرحبا بك : فني المعمل <?php echo $name; ?> </p>
					<ul class="nav" id="side-menu" style="margin-top:20px">
						<li>
							<a href="requests_lab.php"><i class="fa fa-file-text-o nav_icon"></i>طلبات التحليل</a>
						</li>
						<li class="active">
							<a href="requests.php"><i class="fa fa-caret-square-o-left nav_icon"></i>طلبات الاشعة</a>
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
				
				<?php if($do == "Manage"){ ?>
						
				<div class="tables" style="margin-top:40px;height:800px">
					<i class="fa fa-caret-square-o-left fa-2x" style="display:inline;margin-left:20px;color:#FFF"></i>
					<h3 style="display:inline;color: #FFF" class="title1">طلبات الاشعة</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>ادارة طلبات الاشعة :</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th class="text-center">رقم الطلب</th>
									<th class="text-center">اسم المريض</th>
									<th class="text-center">اسم الطبيب</th>
									<th class="text-center">التخصص</th>
									<th class="text-center">الطلب أو الفحص المطلوب</th>
									<th class="text-center">التحكم</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT  checkups.rays , checkups.checkup_id ,  doctor.Username ,doctor.specialization , medical_record.Name FROM checkups INNER JOIN doctor ON checkups.doctor_id = doctor.doctor_id INNER JOIN medical_record ON medical_record.record_id = checkups.patient_id WHERE checkups.Type='أشعه' AND checkups.state = 0");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?>
								<tr class="active">
									<th scope="row"><?php echo $pat["checkup_id"]; ?></th>
									<td><?php echo $pat["Name"]; ?></td>
									<td><?php echo $pat["Username"]; ?></td>
									<td><?php echo $pat["specialization"]; ?></td>
									<td><?php echo $pat["rays"]; ?></td>
									<td>
										<a style="background: #FFF; color:#333" href="requests.php?do=Add&checkid=<?php echo $pat["checkup_id"]; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> اضافة نتائج الفحوصات للسجل الطبي للمريض</a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				
				<?php }elseif($do == "Add"){
				
				
				$checkid = isset($_GET['checkid']) && is_numeric($_GET['checkid']) ? intval($_GET['checkid']) : 0;
				
				?>
				
				
				<div class="login-page" style="margin-top:140px;height:550px;width:90%">
				<!--<h3 class="title1"></h3>-->
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert" method="post">
							
							<input type="hidden" name="checkid" value="<?php echo $checkid; ?>"/>
							
							<textarea name="rays" class="form-control" style="height:250px;margin-bottom:20px;resize:none" placeholder="نتيجة الاشعة"></textarea>
							
							
							<input type="submit" name="add" value="اضافة">
						</form>
					</div>
				</div>
			</div>
				
				
				<?php  }elseif($do == "Insert"){
	
	
	                if($_SERVER['REQUEST_METHOD'] =='POST'){
			
					   include("../connect.php");
			
			//Get Varaiables from Post Method
			
					$checkid = $_POST["checkid"];
					$rays = $_POST["rays"];	
			
					/*$stmt = $con->prepare("INSERT INTO  medicines(medicine_name , patient_id , doctor_id) VALUES(:name , :patient , :doctor)");

					$stmt->execute(array(

						'name' => $med,
						'patient' => $patientid,
						'doctor' => $id
						
					));*/
					   
					   
			    $stmt = $con->prepare("UPDATE checkups SET rays_result = '$rays' , artist_id = $id  , state = 1 WHERE checkup_id = :checkid");

				$stmt->bindParam(":checkid" , $checkid);

				$stmt->execute();   
					
					
					echo '<div style="margin-top:40px" dir="rtl" class="alert alert-info">تم اضافة نتيجة لهذه الأشعه بنجاح
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<div class="login-page" style="margin-top:140px;height:550px;width:90%">
				<!--<h3 class="title1"></h3>-->
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert" method="post">
							
							<input type="hidden" name="checkid" value="' . $checkid . '"/>
							
							<textarea name="rays" class="form-control" style="height:250px;margin-bottom:20px;resize:none" placeholder="نتيجة الاشعة"></textarea>
							
							
							<input type="submit" name="add" value="اضافة">
						</form>
					</div>
				</div>
			</div>';
					
				
			
		}else{
			
			echo "<div class='alert alert-danger'>لا يمكنك الدخول لهذه الصفحة</div>";
			
		}			
	
				
				
				 }  ?>
				
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