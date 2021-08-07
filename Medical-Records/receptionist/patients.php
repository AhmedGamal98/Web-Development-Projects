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
					<p style="display:inline;margin-top:7px;margin-right:55px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000;margin-left:25px">مرحبا بك :<?php echo $name;?></p>
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
				
				<div class="tables" style="margin-top:40px">
					<i class="fa fa-users fa-2x" style="display:inline;margin-left:20px;color:#FFF"></i>
					<h3 style="display:inline;color: #FFF" class="title1">المرضى</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>ادارة المرضى :</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th class="text-center">رقم الهوية</th>
									<th class="text-center">اسم المريض</th>
									<th class="text-center">العنوان</th>
									<th class="text-center">رقم الهاتف</th>
									<th class="text-center">البريد الالكتروني</th>
									<th class="text-center">التحكم</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT * FROM medical_record");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?>
								<tr class="active">
									<th scope="row"><?php echo $pat["national_id"]; ?></th>
									<td><?php echo $pat["Name"]; ?></td>
									<td><?php echo $pat["Address"]; ?></td>
									<td><?php echo $pat["Phone"]; ?></td>
									<td><?php echo $pat["Email"]; ?></td>
									<td>
										<a style="background: #FFF; color:#333" href="patients.php?do=Edit&patientid=<?php echo $pat["national_id"]; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> تحديث البيانات</a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				
				<?php }elseif($do == "Edit"){
				
				
				
				 $patientid = isset($_GET['patientid']) && is_numeric($_GET['patientid']) ? intval($_GET['patientid']) : 0;
		
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM medical_record WHERE national_id= ?");
				 $stmt->execute(array($patientid));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();

					if($count > 0){
				
				
				?>
				
				<div class="login-page" style="margin-top:140px">
				<div class="widget-shadow">
					<h3 style="padding-top:15px;margin-bottom:0" class="title1">تحديث بيانات المريض</h3>
					<div class="login-body">
						<form action="?do=Update" method="post">
							
							<input  type="hidden" value="<?php echo $row["national_id"]; ?>" name="patientid">
							
							<input class="form-control" type="text" value="<?php echo $row["Name"]; ?>" class="user" name="name" placeholder="اسم المريض" required="">
							
							<input class="form-control" type="text" value="<?php echo $row["Phone"]; ?>" class="user" name="phone" placeholder="رقم الهاتف" required="">
							
							<input class="form-control" type="text" class="user" value="<?php echo $row["Email"]; ?>" name="email" placeholder="البريد الالكتروني" required="">
							
							<input class="form-control" type="text" value="<?php echo $row["Address"]; ?>" class="user" name="address" placeholder="العنوان" required="">
							
							<input type="submit" name="add" value="تحديث">
						</form>
					</div>
				</div>
			</div>
			<?php }?>	
				
				<?php }elseif($do == "Update"){
				
				
				
				   include('../connect.php');  
     	//echo "<div class='container'>";
		
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			//Get Varaiables from Post Method
			
			$id       = $_POST["patientid"];
			$name   = $_POST["name"];
			$phone     = $_POST["phone"];
			$email    = $_POST["email"];
			$address  = $_POST["address"];
			//Password Trick
			
		   //$pass = empty($_POST['new-password']) ? $_POST['old-password'] : sha1($_POST['new-password']);
		
			$formErrors = array();
			
			if(empty($name)){
				
				$formErrors[] = "الاسم لا يجب أن يترك فارغ";
				
			}
			if(empty($phone)){
				
				$formErrors[] = "رقم الهاتف لا يجب أن يترك فارغ";
				
			}
			
			if(empty($email)){
				
				$formErrors[] = "البريد الالكتروني لا يجب أن يترك فارغ";
				
			}
			
			if(empty($address)){
				
				$formErrors[] = "العنوان لا يجب أن يترك فارغ";
				
			}
			
			
			//Loop into errors array and echo it
			
			foreach($formErrors as $error){
				
				
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM  medical_record WHERE national_id= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				
				
				
				echo "<div dir='rtl style='margin-left:20px;margin-top:40px' class='alert alert-danger'>" . $error . "
				<button type='button' class='close pull-left' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
				</div>";
				echo '<div class="login-page" style="margin-top:140px">
				<div class="widget-shadow">
					<h3 style="padding-top:15px;margin-bottom:0" class="title1">تحديث بيانات مريض</h3>
					<div class="login-body">
						<form action="?do=Update" method="post">
							
							<input type="hidden" value="' . $row["national_id"] . '" name="patientid">
							
							
							<input class="form-control" type="text" value="' . $row["Name"] . '" class="user" name="name" placeholder="اسم المريض" required="">
							
							<input class="form-control" type="text" value="' . $row["Phone"] . '" class="user" name="phone" placeholder="رقم الهاتف" required="">
							
							<input class="form-control" type="text" value="' . $row["Email"] . '" class="user" name="email" placeholder="البريد الالكتروني" required="">
							
							<input class="form-control" type="text" value="' . $row["Address"] . '" class="user" name="address" placeholder="العنوان" required="">
							
							<input type="submit" name="add" value="تحديث">
						</form>
					</div>
				</div>
			</div>';
				
				
			}
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				//Update the Database with this info
				
				$stmt2 = $con->prepare("SELECT * FROM medical_record WHERE Email = ? AND national_id != ?");
				
				$stmt2->execute(array( $email , $id));
				
				$count = $stmt2->rowCount();
				
				if($count > 0){
					
					
				 //include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM  medical_record WHERE national_id= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
					
					
		   echo "<div dir='rtl' style='margin-left:20px;margin-top:40px' class='alert alert-danger'>
		   
		   هذه البيانات موجودة من قبل
		   <button type='button' class='close pull-left' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
		   </div>";
		  echo '<div class="login-page" style="margin-top:140px">
				<div class="widget-shadow">
					<h3 style="padding-top:15px;margin-bottom:0" class="title1">تحديث بيانات مريض</h3>
					<div class="login-body">
						<form action="?do=Update" method="post">
							
							<input type="hidden" value="' . $row["national_id"] . '" name="patientid">
							
							
							<input class="form-control" type="text" value="' . $row["Name"] . '" class="user" name="name" placeholder="اسم المريض" required="">
							
							<input class="form-control" type="text" value="' . $row["Phone"] . '" class="user" name="phone" placeholder="رقم الهاتف" required="">
							
							<input class="form-control" type="text" value="' . $row["Email"] . '" class="user" name="email" placeholder="البريد الالكتروني" required="">
							
							<input class="form-control" type="text" value="' . $row["Address"] . '" class="user" name="address" placeholder="العنوان" required="">
							
							<input type="submit" name="add" value="تحديث">
						</form>
					</div>
				</div>
			</div>';			
			
					
					
				}else{
					
					
					
					


					 
					$stmt = $con->prepare("UPDATE medical_record SET  Name = ? , Email = ? , Phone = ? , Address = ?  WHERE national_id = ?");
					$stmt->execute(array($name , $email , $phone , $address ,  $id));
						
						


					// echo success message
					
					
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM medical_record WHERE national_id= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();

					echo '<div dir="rtl" style="margin-left:20px;margin-top:40px" class="alert alert-info">
					تم تحديث بيانات مريض بنجاح
						<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<div class="login-page" style="margin-top:140px">
				<div class="widget-shadow">
					<h3 style="padding-top:15px;margin-bottom:0" class="title1">تحديث بيانات مريض</h3>
					<div class="login-body">
						<form action="?do=Update" method="post">
							
							<input type="hidden" value="' . $row["national_id"] . '" name="patientid">
							
							
							<input class="form-control" type="text" value="' . $row["Name"] . '" class="user" name="name" placeholder="اسم المريض" required="">
							
							<input class="form-control" type="text" value="' . $row["Phone"] . '" class="user" name="phone" placeholder="رقم الهاتف" required="">
							
							<input class="form-control" type="text" value="' . $row["Email"] . '" class="user" name="email" placeholder="البريد الالكتروني" required="">
							
							<input class="form-control" type="text" value="' . $row["Address"] . '" class="user" name="address" placeholder="العنوان" required="">
							
							<input type="submit" name="add" value="تحديث">
						</form>
					</div>
				</div>
			</div>';
					
				}
				
			}
		
			
		}else{
			
			echo "<div class='alert alert-danger'>لا تستطيع الدخول لهذه الصفحه</div>";
			
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