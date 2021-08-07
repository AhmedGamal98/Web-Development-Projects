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
						<li class="active">
							<a href="Sons.php"><i class="fa fa-plus nav_icon"></i>اضافة الأبناء</a>
						</li>
						<li>
							<a href="information.php"><i class="fa fa-users nav_icon"></i>معلومات الأبناء</a>
						</li>
						<!--<li>
							<a href="grades.php"><i class="fa fa-book nav_icon"></i>الدرجات</a>
						</li>-->
						<li>
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
				
				<div class="login-page" style="margin-top:140px;height:900px">
				<h3 class="title1">تسجيل ابن</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert" method="post">
							
							
							<input class="form-control" type="text" class="user" name="n_id" placeholder="هوية الطالب" required="">
							
							<input class="form-control" type="text" class="user" name="name" placeholder="اسم الطالب" required="">
							
							
							<select class="form-control" name="class" style="margin-bottom:20px">
								<option value="">الفصل</option>
								<?php
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT
									 * FROM class

								   	WHERE admin_ID=$adminid");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?>
								<option value="<?php echo $pat["class_id"]; ?>"><?php echo $pat["Name"]; ?></option>
								<?php } ?>
							</select>
							
							
							<!--<input class="form-control" type="text" class="user" name="code" placeholder="كود المدرسة" required="">-->
							
							
							<!--<select class="form-control" name="stage" style="margin-bottom:20px">
								<option value="0">المرحلة</option>
								<option value="1">المرحلة 1</option>
								<option value="1">المرحلة 1</option>
								<option value="1">المرحلة 1</option>
								<option value="1">المرحلة 1</option>
							</select>-->
							
		
							<input type="submit" name="add" value="اضافة">
						</form>
					</div>
				</div>
			</div>
				
				<?php }elseif($do == "Insert"){ 
	
	
	         if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			$national = $_POST["n_id"];
			$name = $_POST["name"];	
			$class = $_POST["class"];	 
			
			//Validate Form By Server site
			
			
			$formErrors = array();
			
			if(empty($national)){
				
				$formErrors[] = " هوية الطالب يجب أن لا يترك فارغ ";
				
			}
		   if(strlen($national) < 10){
				
				$formErrors[] = "هوية الطالب  يجب أن تحتوي علي 10 أرقام فثط ";
				
			}
			if(strlen($national) > 10){
				
				$formErrors[] = "هوية الطالب  يجب أن تحتوي علي 10 أرقام فثط ";
				
			}	 
		   if(empty($name)){
				
				$formErrors[] = " اسم الطالب يجب أن لا يترك فارغ ";
				
			}
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				//Check if the item exist in database or not
				
				//$check = checkItem("Username" , "users" , $username);
				
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM student WHERE National_ID= ?");
				 $stmt->execute(array($national));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				
				if($count > 0){
					
					echo "<div style='margin-top:40px' dir='rtl' class='alert alert-info'>هذا الطالب موجود من قبل
					<button type='button' class='close pull-left' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
					</div>";
					echo '<div class="login-page" style="margin-top:140px;height:900px">
				<h3 class="title1">تسجيل ابن</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert" method="post">
							
							
							<input class="form-control" type="text" class="user" name="n_id" placeholder="هوية الطالب" required="">
							
							<input class="form-control" type="text" class="user" name="name" placeholder="اسم الطالب" required="">
							
							
							<select class="form-control" name="class" style="margin-bottom:20px">
								<option value="">الفصل</option>';
								
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT
									 * FROM class

								   	WHERE admin_ID=$adminid");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

								echo '<option value="' . $pat["class_id"] . '">' . $pat["Name"] . '</option>';
								}
							echo '</select>
							
							
							<!--<input class="form-control" type="text" class="user" name="code" placeholder="كود المدرسة" required="">-->
							
							
							<!--<select class="form-control" name="stage" style="margin-bottom:20px">
								<option value="0">المرحلة</option>
								<option value="1">المرحلة 1</option>
								<option value="1">المرحلة 1</option>
								<option value="1">المرحلة 1</option>
								<option value="1">المرحلة 1</option>
							</select>-->
							
		
							<input type="submit" name="add" value="اضافة">
						</form>
					</div>
				</div>
			</div>';
					
					
				}else{
				

					$stmt = $con->prepare("INSERT INTO student(National_ID, Name , school_code , parent_ID , adminid , class_id) VALUES(:national,  :name , :code , :parent , :admin , :class)");

					$stmt->execute(array(

						'national' => $national,
						'name' => $name,
						'code' => $code,
						'parent' => $id,
						'admin' => $adminid,
						'class' => $class

					));
					
					$sql = $con->prepare("SELECT
					   *
					   FROM
						  student

					   WHERE National_ID=$national");
					$sql->execute();
					$row = $sql->fetch();
					
					$studentid = $row["student_ID"];
					
					
					
				//echo $studentid;
					

					$stmt = $con->prepare("INSERT INTO grades (student_id) VALUES(:student_id)");

					$stmt->execute(array(

						'student_id' => $studentid

					));


					// echo success message

					echo '<div style="margin-top:40px" dir="rtl" class="alert alert-info">تم اضافة طالب بنجاح
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<div class="login-page" style="margin-top:140px;height:900px">
				<h3 class="title1">تسجيل ابن</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert" method="post">
							
							
							<input class="form-control" type="text" class="user" name="n_id" placeholder="هوية الطالب" required="">
							
							<input class="form-control" type="text" class="user" name="name" placeholder="اسم الطالب" required="">
							
							
							<select class="form-control" name="class" style="margin-bottom:20px">
								<option value="">الفصل</option>';
								
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT
									 * FROM class

								   	WHERE admin_ID=$adminid");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

								echo '<option value="' . $pat["class_id"] . '">' . $pat["Name"] . '</option>';
								}
							echo '</select>
							
							
							<!--<input class="form-control" type="text" class="user" name="code" placeholder="كود المدرسة" required="">-->
							
							
							<!--<select class="form-control" name="stage" style="margin-bottom:20px">
								<option value="0">المرحلة</option>
								<option value="1">المرحلة 1</option>
								<option value="1">المرحلة 1</option>
								<option value="1">المرحلة 1</option>
								<option value="1">المرحلة 1</option>
							</select>-->
							
		
							<input type="submit" name="add" value="اضافة">
						</form>
					</div>
				</div>
			</div>';
					
					
				}
			}else{
				
				foreach($formErrors as $error){
				
				echo '<div style="margin-top:40px" dir="rtl" class="alert alert-info">' . $error . '
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
				
			     }
			
				
				
					echo '<div class="login-page" style="margin-top:140px;height:900px">
				<h3 class="title1">تسجيل ابن</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert" method="post">
							
							
							<input class="form-control" type="text" class="user" name="n_id" placeholder="هوية الطالب" required="">
							
							<input class="form-control" type="text" class="user" name="name" placeholder="اسم الطالب" required="">
							
							
							<select class="form-control" name="class" style="margin-bottom:20px">
								<option value="">الفصل</option>';
								
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT
									 * FROM class

								   	WHERE admin_ID=$adminid");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

								echo '<option value="' . $pat["class_id"] . '">' . $pat["Name"] . '</option>';
								}
							echo '</select>
							
							
							<!--<input class="form-control" type="text" class="user" name="code" placeholder="كود المدرسة" required="">-->
							
							
							<!--<select class="form-control" name="stage" style="margin-bottom:20px">
								<option value="0">المرحلة</option>
								<option value="1">المرحلة 1</option>
								<option value="1">المرحلة 1</option>
								<option value="1">المرحلة 1</option>
								<option value="1">المرحلة 1</option>
							</select>-->
							
		
							<input type="submit" name="add" value="اضافة">
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