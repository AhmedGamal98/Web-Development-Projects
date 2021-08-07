<?php 
  
   $do = isset($_GET['do'])? $_GET['do'] : 'add_employee';


 session_start();
if(!isset($_SESSION['password'])){
	
	
	header('Location:../login1.php');


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
<link rel="stylesheet" href="layouts/css/validation.css">		
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
					<p style="display:inline;margin-top:7px;margin-right:55px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000;margin-left:25px">مرحبا بك : مدير</p>
					<ul class="nav" id="side-menu" style="margin-top:20px">
						<li>
							<a href="employees.php"><i class="fa fa-user-md nav_icon"></i>الموظفين</a>
						</li>
						<li>
							<a href="patients.php"><i class="fa fa-users nav_icon"></i>المرضى</a>
						</li>
						<li class="active">
							<a href="add_employees.php"><i class="fa fa-plus nav_icon"></i>اضافة الموظفين</a>
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
			<div class="header-right" style="margin-top:35px">
				
				<a style="display:inline;background: #FFF; color:#333;margin-left:20px;font-family:Almarai" href="../homepage.php" class="btn btn-primary"> <i class="fa fa-home"></i> الرئيسية </a>
				
				<a style="display:inline;background: #FFF; color:#333;margin-left:20px;font-family:Almarai" href="../logout.php" class="btn btn-primary"> <i class="fa fa-sign-out"></i> خروج </a>
				
				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper" class="pull-left" style="background: url('layouts/images/doc.jpeg') no-repeat;background-size:cover">
			<div class="main-page">
				
				<?php if($do == "add_employee"){ ?>
				
				<div class="login-page" style="margin-top:140px;height:900px">
				<div class="widget-shadow">
					<h3 style="padding-top:15px;margin-bottom:0" class="title1">اضافة موظف جديد</h3>
					<div class="login-body">
						<form action="?do=Insert" method="post">
					
							<div class="ast">
								<input class="form-control id" type="text" class="user" name="id" placeholder="رقم الهوية" required="">
							  <div class="alert alert-danger empty-alert">رقم الهوية مطلوب أو <strong>اجباري</strong></div>
							  <div class="alert alert-danger custom-alert">  رقم الهوية لا يقل عن<strong>10 أرقام </strong></div>
							  <div class="alert alert-danger number-alert">  رقم الهوية يجب أن يحتوي علي<strong>أرقام فقط</strong></div>
							  <div  class="alert alert-danger one-alert">  رقم الهوية يجب أن يبدأ برقم<strong>1</strong></div>
							</div>
							<div class="ast">
								<input class="form-control first" type="text" class="user" name="name" placeholder="اسم الموظف" required="">
								<div class="alert alert-danger empty-alert">الاسم مطلوب أو <strong>اجباري</strong></div>
							  <div  class="alert alert-danger long-alert">  الاسم يجب أن يحتوي علي<strong>حروف فقط</strong></div>
							</div>
							<div class="ast">
								<input class="form-control phone" type="text" class="user" name="phone" placeholder="رقم الهاتف" required="">
								<div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
							  <div  class="alert alert-danger long-alert">رقم الهاتف يجب أن يكون علي الأقل  <strong>10 أرقام</strong></div>
							  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
							  <div  class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
							</div>
							<div class="ast">
								<input class="form-control email" type="text" class="user" name="email" placeholder="البريد الالكتروني" required="">
								<div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
							  <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
							</div>
							<div class="ast">
								<input class="form-control address" type="text" class="user" name="address" placeholder="العنوان" required="">
								<div class="alert alert-danger empty-alert"> العنوان مطلوب أو<strong>اجباري</strong></div>
							  <div  class="alert alert-danger custom-alert"> العنوان يجب أن يحتوي علي <strong>حروف فقط</strong></div>
							</div>
							<div class="ast">
								<input class="form-control password" type="password" class="user" name="password" placeholder="كلمة المرور" required="">
								<div  class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
							  <div  class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>6 حروف</strong></div>
							  <div  class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة وحروف صغيرة ورقم.</strong></div>
							</div>
							<div class="ast">
								<select class="form-control type" name="type" style="margin-bottom:20px">
									<option >الوظيفة</option>
									<option >موظف وزارة الصحة</option>
									<option >موظف استقبال</option>
									<option >فني المعمل</option>
									<option >طبيب</option>
								</select>
								<div  class="alert alert-danger empty-alert">الوظيفة لا يمكن أن تترك  <strong></strong>فارغة</div>
							</div>
							
							<input type="submit" name="add" value="اضافة">
						</form>
					</div>
				</div>
			</div>
				
				
				<?php }elseif($do == "Insert"){
				
				
	
	               if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			$national = $_POST["id"];
			$name = $_POST["name"];	
			$phone = $_POST["phone"];		 
			$email = $_POST["email"];	 
			$address = $_POST["address"];	
			$type = $_POST["type"];
			$password = sha1($_POST["password"]);		   
			//Validate Form By Server site
			
			$formErrors = array();
			
			if(empty($national)){
				
				$formErrors[] = "هوية الموظف  يجب أن لا تترك فارغة ";
				
			}
			if(strlen($national) < 10){
				
				$formErrors[] = "هوية الموظف  يجب أن يحتوي علي 10 أرقام فثط ";
				
			}		 
			if(empty($name)){
				
				$formErrors[] = "اسم الموظف  يجب أن لا يترك فارغ ";
				
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
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				//Check if the item exist in database or not
				
				//$check = checkItem("Username" , "users" , $username);
				
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM employees WHERE employee_id= ?");
				 $stmt->execute(array($national));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				
				if($count > 0){
					
					echo "<div style='margin-top:40px' dir='rtl' class='alert alert-info'>هذا الموظف موجود من قبل
					<button type='button' class='close pull-left' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
					</div>";
					echo '<div class="login-page" style="margin-top:140px;height:900px">
				<div class="widget-shadow">
					<h3 style="padding-top:15px;margin-bottom:0" class="title1">اضافة موظف جديد</h3>
					<div class="login-body">
						<form action="?do=Insert" method="post">
					
							<div class="ast">
								<input class="form-control id" type="text" class="user" name="id" placeholder="رقم الهوية" required="">
							  <div class="alert alert-danger empty-alert">رقم الهوية مطلوب أو <strong>اجباري</strong></div>
							  <div class="alert alert-danger custom-alert">  رقم الهوية لا يقل عن<strong>10 أرقام </strong></div>
							  <div class="alert alert-danger number-alert">  رقم الهوية يجب أن يحتوي علي<strong>أرقام فقط</strong></div>
							  <div  class="alert alert-danger one-alert">  رقم الهوية يجب أن يبدأ برقم<strong>1</strong></div>
							</div>
							<div class="ast">
								<input class="form-control first" type="text" class="user" name="name" placeholder="اسم الموظف" required="">
								<div class="alert alert-danger empty-alert">الاسم مطلوب أو <strong>اجباري</strong></div>
							  <div  class="alert alert-danger long-alert">  الاسم يجب أن يحتوي علي<strong>حروف فقط</strong></div>
							</div>
							<div class="ast">
								<input class="form-control phone" type="text" class="user" name="phone" placeholder="رقم الهاتف" required="">
								<div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
							  <div  class="alert alert-danger long-alert">رقم الهاتف يجب أن يكون علي الأقل  <strong>10 أرقام</strong></div>
							  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
							  <div  class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
							</div>
							<div class="ast">
								<input class="form-control email" type="text" class="user" name="email" placeholder="البريد الالكتروني" required="">
								<div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
							  <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
							</div>
							<div class="ast">
								<input class="form-control address" type="text" class="user" name="address" placeholder="العنوان" required="">
								<div class="alert alert-danger empty-alert"> العنوان مطلوب أو<strong>اجباري</strong></div>
							  <div  class="alert alert-danger custom-alert"> العنوان يجب أن يحتوي علي <strong>حروف فقط</strong></div>
							</div>
							<div class="ast">
								<input class="form-control password" type="password" class="user" name="password" placeholder="كلمة المرور" required="">
								<div  class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
							  <div  class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>6 حروف</strong></div>
							  <div  class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة وحروف صغيرة ورقم.</strong></div>
							</div>
							<div class="ast">
								<select class="form-control type" name="type" style="margin-bottom:20px">
									<option >الوظيفة</option>
									<option >موظف وزارة الصحة</option>
									<option >موظف استقبال</option>
									<option >فني المعمل</option>
									<option >طبيب</option>
								</select>
								<div  class="alert alert-danger empty-alert">الوظيفة لا يمكن أن تترك  <strong></strong>فارغة</div>
							</div>
							
							<input type="submit" name="add" value="اضافة">
						</form>
					</div>
				</div>
			</div>';
					
					
				}else{
				

					$stmt = $con->prepare("INSERT INTO employees(employee_id , Name , Phone , Email , Address , Type , Password) VALUES(:id , :name , :phone , :email , :address ,  :type , :password)");

					$stmt->execute(array(

						'id' => $national,
						'name' => $name,
						'phone' => $phone,
						'email' => $email,
						'address' => $address,
						'type' => $type,
						'password' => $password

					));
					
					if($type == "طبيب"){
					
					
				$stmt = $con->prepare("INSERT INTO doctor(doctor_id , Username , Phone , Email , Address , specialization , password) VALUES(:id , :name , :phone , :email , :address ,  :type , :password)");

					$stmt->execute(array(

						'id' => $national,
						'name' => $name,
						'phone' => $phone,
						'email' => $email,
						'address' => $address,
						'type' => $type,
						'password' => $password
						
						));
					
					
				}elseif($type == "فني المعمل"){
					
					
					
				$stmt = $con->prepare("INSERT INTO lab_artist(artist_id , Username , Phone , Email , Address , Type , Password) VALUES(:id , :name , :phone , :email , :address ,  :type , :password)");

					$stmt->execute(array(

						'id' => $national,
						'name' => $name,
						'phone' => $phone,
						'email' => $email,
						'address' => $address,
						'type' => $type,
						'password' => $password
						
						));
					
					
				}elseif($type == "موظف استقبال"){
					
					
				$stmt = $con->prepare("INSERT INTO receptionist(receptionist_id , Username , Phone , Email , Address , Type , Password) VALUES(:id , :name , :phone , :email , :address ,  :type , :password)");

					$stmt->execute(array(

						'id' => $national,
						'name' => $name,
						'phone' => $phone,
						'email' => $email,
						'address' => $address,
						'type' => $type,
						'password' => $password
						
						));
					
					
				}elseif($type == "موظف وزارة الصحة"){
					
					
					
				$stmt = $con->prepare("INSERT INTO health_ministry(ministry_id , Username , Phone , Email , Address , Type , Password) VALUES(:id , :name , :phone , :email , :address ,  :type , :password)");

					$stmt->execute(array(

						'id' => $national,
						'name' => $name,
						'phone' => $phone,
						'email' => $email,
						'address' => $address,
						'type' => $type,
						'password' => $password
						
						));
					
					
				}


					// echo success message

					echo '<div style="margin-top:40px" dir="rtl" class="alert alert-info">تم اضافة موظف بنجاح
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<div class="login-page" style="margin-top:140px;height:900px">
				<div class="widget-shadow">
					<h3 style="padding-top:15px;margin-bottom:0" class="title1">اضافة موظف جديد</h3>
					<div class="login-body">
						<form action="?do=Insert" method="post">
					
							<div class="ast">
								<input class="form-control id" type="text" class="user" name="id" placeholder="رقم الهوية" required="">
							  <div class="alert alert-danger empty-alert">رقم الهوية مطلوب أو <strong>اجباري</strong></div>
							  <div class="alert alert-danger custom-alert">  رقم الهوية لا يقل عن<strong>10 أرقام </strong></div>
							  <div class="alert alert-danger number-alert">  رقم الهوية يجب أن يحتوي علي<strong>أرقام فقط</strong></div>
							  <div  class="alert alert-danger one-alert">  رقم الهوية يجب أن يبدأ برقم<strong>1</strong></div>
							</div>
							<div class="ast">
								<input class="form-control first" type="text" class="user" name="name" placeholder="اسم الموظف" required="">
								<div class="alert alert-danger empty-alert">الاسم مطلوب أو <strong>اجباري</strong></div>
							  <div  class="alert alert-danger long-alert">  الاسم يجب أن يحتوي علي<strong>حروف فقط</strong></div>
							</div>
							<div class="ast">
								<input class="form-control phone" type="text" class="user" name="phone" placeholder="رقم الهاتف" required="">
								<div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
							  <div  class="alert alert-danger long-alert">رقم الهاتف يجب أن يكون علي الأقل  <strong>10 أرقام</strong></div>
							  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
							  <div  class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
							</div>
							<div class="ast">
								<input class="form-control email" type="text" class="user" name="email" placeholder="البريد الالكتروني" required="">
								<div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
							  <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
							</div>
							<div class="ast">
								<input class="form-control address" type="text" class="user" name="address" placeholder="العنوان" required="">
								<div class="alert alert-danger empty-alert"> العنوان مطلوب أو<strong>اجباري</strong></div>
							  <div  class="alert alert-danger custom-alert"> العنوان يجب أن يحتوي علي <strong>حروف فقط</strong></div>
							</div>
							<div class="ast">
								<input class="form-control password" type="password" class="user" name="password" placeholder="كلمة المرور" required="">
								<div  class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
							  <div  class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>6 حروف</strong></div>
							  <div  class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة وحروف صغيرة ورقم.</strong></div>
							</div>
							<div class="ast">
								<select class="form-control type" name="type" style="margin-bottom:20px">
									<option >الوظيفة</option>
									<option >موظف وزارة الصحة</option>
									<option >موظف استقبال</option>
									<option >فني المعمل</option>
									<option >طبيب</option>
								</select>
								<div  class="alert alert-danger empty-alert">الوظيفة لا يمكن أن تترك  <strong></strong>فارغة</div>
							</div>
							
							<input type="submit" name="add" value="اضافة">
						</form>
					</div>
				</div>
			</div>';
					
					
				}
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
	<script src="layouts/js/login.js"></script> 	
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="layouts/js/bootstrap.js"> </script>
</body>
</html>