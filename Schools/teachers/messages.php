<?php 
  
   $do = isset($_GET['do'])? $_GET['do'] : 'Manage';

session_start();
if(!isset($_SESSION['password'])){
	
	
	header('Location:../homepage.php');


}

$id = $_SESSION['teacherid'];
$adminid = $_SESSION['adminid'];

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
							<a href="classes.php"><i class="fa fa-home nav_icon"></i>الفصول</a>
						</li>
						<!--<li>
							<a href="grades.php"><i class="fa fa-book nav_icon"></i>الدرجات</a>
						</li>-->
						<li class="active">
							<a href="messages.php"><i class="fa fa-bell-o nav_icon"></i>الاعلانات والتنبيهات</a>
						</li>
						<!--<li>
							<a href="absence.php"><i class="fa fa-users nav_icon"></i>الحضور والغياب</a>
						</li>-->
						<li>
							<a href="chats.php"><i class="fa fa-comments-o nav_icon"></i>المحادثات</a>
						</li>
						<!--<li>
							<a href="add_assessing.php"><i class="fa fa-plus nav_icon"></i>اضافة تقييم للدرس</a>
						</li>
						<li>
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
				
				<!--<a href="../login.php" style="margin-top:7px;margin-right:10px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000;margin-left:25px" class="btn btn-danger"><i class="fa fa-sign-out"></i> خروج</a>-->
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper" class="pull-left">
			<div class="main-page">
				
				
				<?php if($do == "Manage"){ ?>
				
				<div class="tables" style="margin-top:40px;height:600px">
					<a href="messages.php?do=Add" class="btn btn-primary pull-left" style="margin-bottom:30px;background-color:#FFF;width:170px;border:1px solid #337AB7;color:#000"><i class="fa fa-plus"></i> اضافة اعلان أو تنبيه</a>
					<i style="display:inline;margin-left:20px" class="fa fa-bell-o fa-2x"></i>
					<h3 style="display:inline" class="title1">الاعلانات والتنبيهات</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>الاعلانات والتنبيهات:</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th>#</th>
									<th class="text-center">الفصل</th>
									<th class="text-center">الاعلان أو التنبيه</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT
									 messagess.* , class.Name FROM messagess INNER JOIN class ON messagess.class_id = class.class_id
 
								   WHERE messagess.teacher_id=$id");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?>
								<tr>
									<th scope="row"><?php echo $pat["message_id"]; ?></th>
									<td><?php echo $pat["Name"]; ?></td>
									<td><?php echo $pat["message"]; ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				
				<?php }elseif($do == "Add"){ ?>
				
				<form class="page col-md-12" action="?do=Insert" method="post">	
				<div class="tables col-md-6" style="margin-top:75px;float:right">
					<!--<i style="display:inline;margin-left:20px;color:#DC624A" class="fa fa-home fa-2x"></i>
					<!--<h3 style="display:inline;color:#3A5D71" class="title1">الفصول</h3>-->
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>اختيار الفصول:</h4>
						<table class="table login-body" dir="rtl">
							<thead>
								<tr class="active text-center">
									<td>
										<input id="all" value="1" style="width:20px;height:20px" type="checkbox" class="all" name="classes"/>
									</td>
									<td><label for="all">الكل</label></td>
								</tr>
								<tr>
									<th class="text-center">اختيار الفصل</th>
									<th class="text-center">اسم الفصل</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	  
								include('../connect.php');  
								/*$sql = $con->prepare("SELECT
									 * FROM class

								   	WHERE admin_ID=$adminid AND teacher_id=$id");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{*/
	
	                             $sql = $con->prepare("SELECT course_ID FROM course

								   WHERE teacher_ID=$id");
								$sql->execute();
								$row = $sql->fetch();
	
	                            $course_id = $row["course_ID"];
	
	                          //echo $course_id;
	
	
	                           $sql = $con->prepare("SELECT DISTINCT class_id FROM sechdule

								   WHERE course_id=$course_id");
								$sql->execute();
								$rows = $sql->fetchAll();
	                            
								

								foreach($rows as $pat)
								{
								$class_id = $pat["class_id"];
									
									//echo $class_id;
									
								$sql = $con->prepare("SELECT class_id , Name FROM class

								   WHERE class_id=$class_id");
								$sql->execute();
								$rows = $sql->fetchAll() ;
									
								foreach($rows as $pat)
								{
	
	

							   ?>
								<tr>
									<td>
										<input id="student" value="<?php echo $pat["class_id"];  ?>" style="width:20px;height:20px" type="checkbox" class="user" name="class"/>
									</td>
									<td><label for="student"><?php echo $pat["Name"];  ?></label></td>
								</tr>
								<?php }} ?>
							</tbody>
						</table> 
					</div>
				</div>
					<!--<input style="width:300px;margin-top:20px;color:#FFF;background-color:#6164C1;border:none;height:35px;font-weight:bold" type="submit" name="add" value="تحضير">-->
					<div class="login-page col-md-3" style="margin-top:40px">
					<h3 class="title1">اضافة اعلان أو تنبيه جديد</h3>
					<div class="widget-shadow">
						<div class="login-body">
							

						<textarea class="form-control" name="message" placeholder="الاعلان أو التنبيه" style="resize:none;height:200px;margin-bottom:20px"></textarea>

						<input type="submit" name="add" value="اضافة">
							
						</div>
					</div>
				</div>
			  </form>
				
				
				
				<?php }elseif($do == "Insert"){
				
				if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			$message = $_POST["message"];
					
			
			//Validate Form By Server site
			
			
			$formErrors = array();
			
			if(empty($message)){
				
				$formErrors[] = "الاعلان أو التنبيه يجب أن لا يترك فارغ ";
				
			}
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				//Check if the item exist in database or not
				
				//$check = checkItem("Username" , "users" , $username);
				
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM messagess WHERE message= ?");
				 $stmt->execute(array($message));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				
				if($count > 0){
					
					echo "<div style='margin-top:40px' dir='rtl' class='alert alert-info'>هذا الاعلان أو التنبيه موجود من قبل
					<button type='button' class='close pull-left' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
					</div>";
					echo '<form class="page col-md-12" action="?do=Insert" method="post">	
				<div class="tables col-md-6" style="margin-top:75px;float:right">
					<!--<i style="display:inline;margin-left:20px;color:#DC624A" class="fa fa-home fa-2x"></i>
					<!--<h3 style="display:inline;color:#3A5D71" class="title1">الفصول</h3>-->
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>اختيار الفصول:</h4>
						<table class="table login-body" dir="rtl">
							<thead>
								<tr class="active text-center">
									<td>
										<input id="all" value="1" style="width:20px;height:20px" type="checkbox" class="all" name="class"/>
									</td>
									<td><label for="all">الكل</label></td>
								</tr>
								<tr>
									<th class="text-center">اختيار الفصل</th>
									<th class="text-center">اسم الفصل</th>
								</tr>
							</thead>
							<tbody class="text-center">';
								
	  
								include('../connect.php');  
								/*$sql = $con->prepare("SELECT
									 * FROM class

								   	WHERE admin_ID=$adminid AND teacher_id=$id");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{*/
					
					
					            $sql = $con->prepare("SELECT course_ID FROM course

								   WHERE teacher_ID=$id");
								$sql->execute();
								$row = $sql->fetch();
	
	                            $course_id = $row["course_ID"];
	
	                          //echo $course_id;
	
	
	                           $sql = $con->prepare("SELECT DISTINCT class_id FROM sechdule

								   WHERE course_id=$course_id");
								$sql->execute();
								$rows = $sql->fetchAll();
	                            
								

								foreach($rows as $pat)
								{
								$class_id = $pat["class_id"];
									
									//echo $class_id;
									
								$sql = $con->prepare("SELECT class_id , Name FROM class

								   WHERE class_id=$class_id");
								$sql->execute();
								$rows = $sql->fetchAll() ;
									
								foreach($rows as $pat)
								{
	

							   
								echo '<tr>
									<td>
										<input id="student" value="' . $pat["class_id"] . '" style="width:20px;height:20px" type="checkbox" class="user" name="class"/>
									</td>
									<td><label for="student">' . $pat["Name"] . '</label></td>
								</tr>';
								}}
							echo '</tbody>
						</table> 
					</div>
				</div>
					<!--<input style="width:300px;margin-top:20px;color:#FFF;background-color:#6164C1;border:none;height:35px;font-weight:bold" type="submit" name="add" value="تحضير">-->
					<div class="login-page col-md-3" style="margin-top:40px">
					<h3 class="title1">اضافة اعلان أو تنبيه جديد</h3>
					<div class="widget-shadow">
						<div class="login-body">
							

						<textarea class="form-control" name="message" placeholder="الاعلان أو التنبيه" style="resize:none;height:200px;margin-bottom:20px"></textarea>

						<input type="submit" name="add" value="اضافة">
							
						</div>
					</div>
				</div>
			  </form>';
					
					
				}else{
					
					
					
							 
					if(isset($_POST["classes"])){		 

					/*$sql = $con->prepare("SELECT
						 * FROM class

						WHERE teacher_id=$id");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{*/
						
						
				   $sql = $con->prepare("SELECT course_ID FROM course

				   WHERE teacher_ID=$id");
				$sql->execute();
				$row = $sql->fetch();

				$course_id = $row["course_ID"];

			  //echo $course_id;


			   $sql = $con->prepare("SELECT DISTINCT class_id FROM sechdule

				   WHERE course_id=$course_id");
				$sql->execute();
				$rows = $sql->fetchAll();



				foreach($rows as $pat)
				{
				$class_id = $pat["class_id"];

					//echo $class_id;

				$sql = $con->prepare("SELECT class_id , Name FROM class

				   WHERE class_id=$class_id");
				$sql->execute();
				$rows = $sql->fetchAll() ;

				foreach($rows as $pat)
				{
			
				

					$stmt = $con->prepare("INSERT INTO messagess(message, teacher_id , class_id) VALUES(:message,  :teacherid , :classid)");

					$stmt->execute(array(

						'message' => $message,
						'teacherid' => $id,
						'classid' => $pat["class_id"]

					));
					}}
					}else{
						
						$class = $_POST["class"];
						
				   $stmt = $con->prepare("INSERT INTO messagess(message, teacher_id , class_id) VALUES(:message,  :teacherid , :classid)");

					$stmt->execute(array(

						'message' => $message,
						'teacherid' => $id,
						'classid' => $class

					));
						
						
					}


					// echo success message

					echo '<div style="margin-top:40px" dir="rtl" class="alert alert-info">تم اضافة اعلان أو تنبيه بنجاح
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<form class="page col-md-12" action="?do=Insert" method="post">	
				<div class="tables col-md-6" style="margin-top:75px;float:right">
					<!--<i style="display:inline;margin-left:20px;color:#DC624A" class="fa fa-home fa-2x"></i>
					<!--<h3 style="display:inline;color:#3A5D71" class="title1">الفصول</h3>-->
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>اختيار الفصول:</h4>
						<table class="table login-body" dir="rtl">
							<thead>
								<tr class="active text-center">
									<td>
										<input id="all" value="1" style="width:20px;height:20px" type="checkbox" class="all" name="class"/>
									</td>
									<td><label for="all">الكل</label></td>
								</tr>
								<tr>
									<th class="text-center">اختيار الفصل</th>
									<th class="text-center">اسم الفصل</th>
								</tr>
							</thead>
							<tbody class="text-center">';
								
	  
								include('../connect.php');  
								/*$sql = $con->prepare("SELECT
									 * FROM class

								   	WHERE admin_ID=$adminid");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{*/
					
					
					             $sql = $con->prepare("SELECT course_ID FROM course

								   WHERE teacher_ID=$id");
								$sql->execute();
								$row = $sql->fetch();
	
	                            $course_id = $row["course_ID"];
	
	                          //echo $course_id;
	
	
	                           $sql = $con->prepare("SELECT DISTINCT class_id FROM sechdule

								   WHERE course_id=$course_id");
								$sql->execute();
								$rows = $sql->fetchAll();
	                            
								

								foreach($rows as $pat)
								{
								$class_id = $pat["class_id"];
									
									//echo $class_id;
									
								$sql = $con->prepare("SELECT class_id , Name FROM class

								   WHERE class_id=$class_id");
								$sql->execute();
								$rows = $sql->fetchAll() ;
									
								foreach($rows as $pat)
								{
	

							   
								echo '<tr>
									<td>
										<input id="student" value="' . $pat["class_id"] . '" style="width:20px;height:20px" type="checkbox" class="user" name="class"/>
									</td>
									<td><label for="student">' . $pat["Name"] . '</label></td>
								</tr>';
								}}
							echo '</tbody>
						</table> 
					</div>
				</div>
					<!--<input style="width:300px;margin-top:20px;color:#FFF;background-color:#6164C1;border:none;height:35px;font-weight:bold" type="submit" name="add" value="تحضير">-->
					<div class="login-page col-md-3" style="margin-top:40px">
					<h3 class="title1">اضافة اعلان أو تنبيه جديد</h3>
					<div class="widget-shadow">
						<div class="login-body">
							

						<textarea class="form-control" name="message" placeholder="الاعلان أو التنبيه" style="resize:none;height:200px;margin-bottom:20px"></textarea>

						<input type="submit" name="add" value="اضافة">
							
						</div>
					</div>
				</div>
			  </form>';
					
					
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