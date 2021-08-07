<?php 
  
   $do = isset($_GET['do'])? $_GET['do'] : 'Add';
    session_start();
if(!isset($_SESSION['password'])){
	
	
	header('Location:../homepage.php');


}

$id = $_SESSION['adminid'];

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
							<a style="color:#527D86" href="teachers.php"><i class="fa fa-users nav_icon"></i>المعلمين</a>
						</li>
						<li>
							<a href="classes.php"><i class="fa fa-home nav_icon"></i>الفصول</a>
						</li>
						<li>
							<a href="materials.php"><i class="fa fa-book nav_icon"></i>المواد الدراسية</a>
						</li>
						<li>
							<a href="parents.php"><i class="fa fa-users nav_icon"></i>الطلاب</a>
						</li>
						<li>
							<a href="tables.php"><i class="fa fa-calendar-o nav_icon"></i>الجداول الدراسية</a>
						</li>
						<li>
							<a href="messages.php"><i class="fa fa-bell-o nav_icon"></i>الاعلانات والتنبيهات</a>
						</li>
						<li class="active">
							<a href="add_students.php"><i class="fa fa-plus nav_icon"></i>اضافة طلاب لفصل</a>
						</li>
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
				
				<!--<a href="../login.php" style="margin-top:7px;margin-right:10px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000;margin-left:25px" class="btn btn-danger"><i class="fa fa-sign-out"></i> خروج</a>-->
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper" class="pull-left" style="height:800px">
			<div class="main-page">
				
				<?php if($do == "Add"){ ?>
				
				
				<div class="login-page" style="margin-top:140px;height:400px">
				<h3 class="title1">اضافة طالب في فصل</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert" method="post">
							<input class="form-control" type="text" class="user" name="id" placeholder="هوية الطالب" required="">
							<input class="form-control" type="text" class="user" name="name" placeholder="اسم الطالب" required="">
							<?php
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT
									 Stage FROM admin

								   WHERE admin_ID=$id");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?>
							
							  <input class="form-control" type="text" class="user" name="stage" value="<?php echo $pat["Stage"]; ?>" readonly>
							
						 <?php   }	?>
							
							
							<!--<select class="form-control" name="stage" style="margin-bottom:20px">
								<option value="0">المرحلة</option>
								<option value="1">روضة</option>
								<option value="2">ابتدائي</option>
								<option value="3">متوسط</option>
								<option value="4">ثانوي</option>
							</select>-->
							
							<select class="form-control" name="class">
								<option value="0">رقم الفصل</option>
								<?php
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT
									 * FROM class

								   WHERE admin_ID=$id");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?>
								<option value="<?php echo $pat["class_id"]; ?>"><?php echo $pat["Name"]; ?></option>
								<?php } ?>
							</select>
							
							<select style="margin-top:20px" class="form-control" name="parent">
								<option value="0">ولي الأمر</option>
								<?php
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT
									 * FROM parents

								   WHERE admin_ID=$id");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?>
								<option value="<?php echo $pat["parent_ID"]; ?>"><?php echo $pat["Fname"]; ?></option>
								<?php } ?>
							</select>
							
							<input type="submit" name="add" value="اضافة">
						</form>
					</div>
				</div>
			</div>
				
				<?php }elseif($do == "Insert"){
	
	
	             if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			$national = $_POST["id"];
			//$name = $_POST["name"];	
			$stage = $_POST["stage"];		 
			$class = $_POST["class"];
			$name = $_POST["name"];		 
			$parent = $_POST["parent"];		 
			//Validate Form By Server site
			include('../connect.php');  
			$sql = $con->prepare("SELECT
				 code FROM admin

			   WHERE admin_ID=$id");
			$sql->execute();
			$row = $sql->fetch();
					  
			$code = $row["code"];		 

	
			
			$formErrors = array();
			
			if(empty($national)){
				
				$formErrors[] = "هوية الطالب  يجب أن لا تترك فارغة ";
				
			}
			if(strlen($national) < 10){
				
				$formErrors[] = "هوية الطالب  يجب أن يحتوي علي 10 أرقام فثط ";
				
			}		 
			if(empty($class)){
				
				$formErrors[] = "اسم الفصل  يجب أن لا يترك فارغ ";
				
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
					
					echo '<div class="login-page" style="margin-top:140px;height:400px">
				<h3 class="title1">اضافة طالب في فصل</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert" method="post">
							<input class="form-control" type="text" class="user" name="id" placeholder="هوية الطالب" required="">
							<input class="form-control" type="text" class="user" name="name" placeholder="اسم الطالب" required="">
							
							';
							
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT
									 Stage FROM admin

								   WHERE admin_ID=$id");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   
							
							  echo '<input class="form-control" type="text" class="user" name="stage" value="' . $pat["Stage"] . '" readonly>';
							
						        }
							
							
							
							
							echo '<select class="form-control" name="class">
								<option value="0">رقم الفصل</option>';
								
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT
									 * FROM class

								   WHERE admin_ID=$id");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   
								echo '<option value="' . $pat["class_id"] . '">' . $pat["Name"] . '</option>';
							   } 
							echo '</select>
							
							
							<select style="margin-top:20px" class="form-control" name="parent">
								<option value="0">ولي الأمر</option>';
								
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT
									 * FROM parents

								   WHERE admin_ID=$id");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   
								echo '<option value="' . $pat["parent_ID"] . '">' . $pat["Fname"] . '</option>';
								}
							echo '</select>
							
							<input type="submit" name="add" value="اضافة">
						</form>
					</div>
				</div>
			</div>';
					
				}else{
				

					$stmt = $con->prepare("INSERT INTO student(National_ID , Name , school_code , class_id , adminid , parent_ID) VALUES(:id , :name , :code , :class ,  :adminid , :parentid)");

					$stmt->execute(array(

						'id' => $national,
						'name' => $name,
						'class' => $class,
						'code' => $code,
						'adminid' => $id,
						'parentid' => $parent

					));


					// echo success message

					echo '<div style="margin-top:40px" dir="rtl" class="alert alert-info">تم اضافة طالب بنجاح
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<div class="login-page" style="margin-top:140px;height:400px">
				<h3 class="title1">اضافة طالب في فصل</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert" method="post">
							<input class="form-control" type="text" class="user" name="id" placeholder="هوية الطالب" required="">
							
							<input class="form-control" type="text" class="user" name="name" placeholder="اسم الطالب" required="">
							
							';
							
							
							include('../connect.php');  
								$sql = $con->prepare("SELECT
									 Stage FROM admin

								   WHERE admin_ID=$id");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   
							
							  echo '<input class="form-control" type="text" class="user" name="stage" value="' . $pat["Stage"] . '" readonly>';
							
						        }
							
							
							
							echo '<select class="form-control" name="class">
								<option value="0">رقم الفصل</option>';
								
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT
									 * FROM class

								   WHERE admin_ID=$id");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   
								echo '<option value="' . $pat["class_id"] . '">' . $pat["Name"] . '</option>';
							   } 
							echo '</select>
							
							
							<select style="margin-top:20px"  class="form-control" name="parent">
								<option value="0">ولي الأمر</option>';
								
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT
									 * FROM parents

								   WHERE admin_ID=$id");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   
								echo '<option value="' . $pat["parent_ID"] . '">' . $pat["Fname"] . '</option>';
								}
							echo '</select>
							
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
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="layouts/js/bootstrap.js"> </script>
</body>
</html>