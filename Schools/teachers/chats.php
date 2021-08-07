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
						<li>
							<a href="messages.php"><i class="fa fa-bell-o nav_icon"></i>الاعلانات والتنبيهات</a>
						</li>
						<!--<li>
							<a href="absence.php"><i class="fa fa-users nav_icon"></i>الحضور والغياب</a>
						</li>-->
						<li class="active">
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
				
				<div class="tables" style="margin-top:40px">
					<!--<a href="classes.php?do=Add" class="btn btn-primary pull-left" style="margin-bottom:30px;background-color:#FFF;width:170px;border:1px solid #D88C50;color:#000;color:#D88C50"><i class="fa fa-plus"></i> اضافة فصل</a>-->
					<i style="display:inline;margin-left:20px;color:#DC624A" class="fa fa-comments-o fa-2x"></i>
					<h3 style="display:inline;color:#3A5D71" class="title1">المحادثات</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>ادارة المحادثات:</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th>#</th>
									<th class="text-center">اسم الفصل</th>
									<th class="text-center">التحكم</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	  
								include('../connect.php');  
								/*$sql = $con->prepare("SELECT * FROM class
									 

								   WHERE admin_ID=$adminid AND teacher_id=$id");
								$sql->execute();
								$rows = $sql->fetchAll();*/
	
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
								$rows = $sql->fetchAll();
									
								foreach($rows as $pat)
								{
									
							   ?>
								<tr>
									<th scope="row"><?php echo $pat["class_id"]; ?></th>
									<td><?php echo $pat["Name"]; ?></td>
									<td>
										<a style="background: #FFF; color:#333;width:140px" href="chats.php?do=parents&classid=<?php echo $pat["class_id"]; ?>" class="btn btn-primary"><i class="fa fa-eye"></i> عرض</a>
									</td>
								</tr>
								<?php }} ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				<?php }elseif($do == "parents"){
				
				
	            $classid = isset($_GET['classid']) && is_numeric($_GET['classid']) ? intval($_GET['classid']) : 0;
				
				?>
				
				<div class="tables" style="margin-top:40px;height:600px">
					<!--<a href="classes.php?do=Add" class="btn btn-primary pull-left" style="margin-bottom:30px;background-color:#FFF;width:170px;border:1px solid #D88C50;color:#000;color:#D88C50"><i class="fa fa-plus"></i> اضافة فصل</a>-->
					<i style="display:inline;margin-left:20px;color:#DC624A" class="fa fa-comments-o fa-2x"></i>
					<h3 style="display:inline;color:#3A5D71" class="title1">المحادثات</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>ادارة المحادثات:</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th>#</th>
									<th class="text-center">ولي الأمر</th>
									<th class="text-center">التحكم</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	  
								include('../connect.php');  
								/*$sql = $con->prepare("SELECT
									 * FROM parents

								   WHERE class_id=$classid");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{*/
	
	                             $sql = $con->prepare("SELECT
									 student_ID FROM student

								   WHERE class_id=$classid");
								$sql->execute();
								$row = $sql->fetch();
	
	                             $student_id = $row["student_ID"];
	
	                             //echo $student_id;

								$sql = $con->prepare("SELECT
									 parents.* , student.student_ID FROM parents INNER JOIN student
									 
									 ON student.parent_ID = parents.parent_ID

								   WHERE student.student_ID=$student_id");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?>
								<tr>
									<th scope="row"><?php echo $pat["parent_ID"]; ?></th>
									<td><?php echo $pat["Fname"]; ?></td>
									<td>
										<a style="background: #FFF; color:#333;width:140px" href="chats.php?do=chat&parentid=<?php echo $pat["parent_ID"]; ?>" class="btn btn-primary"><i class="fa fa-comments-o"></i> ابدأ محادثة</a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				
				<?php }elseif($do == "chat"){ 
				
				
				$parentid = isset($_GET['parentid']) && is_numeric($_GET['parentid']) ? intval($_GET['parentid']) : 0;
				
				
				
				?>
				
				
				<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="elements  row">
					<div class="col-md-8 profile widget-shadow chat-mdl-grid" style="width: 610px">
						<?php
										   
						include('../connect.php');  
						$sql = $con->prepare("SELECT Fname FROM parents WHERE parent_ID=$parentid");
						$sql->execute();
						$rows = $sql->fetchAll();

						foreach($rows as $pat)
						{

					  ?>
						<h4 class="title3"><?php echo $pat["Fname"]; ?></h4>
						<?php } ?>
						<div class="scrollbar scrollbar1">
							<?php 
	
						include('../connect.php');		
									
						if(isset($_POST["submit"])){
						
						
						 $message = $_POST["message"];
						 $dat = date("yy-mm-d");	
					
											
					    $sql = "INSERT INTO chat (message , teacher_ID , opposer , date) VALUES ('$message', '$id' , '$parentid' , '$dat')"; 		
						
                        $con->exec($sql);
							

                        $con=null;
					
						
						}
									
										
						?>
							<?php
										   
								include('../connect.php');  
								$sql = $con->prepare("SELECT * FROM chat WHERE teacher_ID=$id AND opposer=$parentid");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							  ?>
							<div class="activity-row activity-row1 activity-left">
								<div class="col-xs-9 activity-img2">
									<div class="activity-desc-sub1">
										<p><?php echo $pat["message"]; ?></p>
										<span class="right"><?php echo $pat["date"]; ?></span>
									</div>
								</div>
								<div class="col-xs-3 activity-img"><img src="layouts/images/avatar.jpeg" width="40px" height="40px" class="img-responsive" alt=""></div>
								<div class="clearfix"> </div>
							</div>
							<?php } ?>
							
							<?php
										   
								include('../connect.php');  
								$sql = $con->prepare("SELECT * FROM chat WHERE opposer=$id AND parent_ID=$parentid");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							  ?>
							<div class="activity-row activity-row1 activity-right">
								<div class="col-xs-3 activity-img"><img src="layouts/images/avatar.jpeg" width="40px" height="40px" class="img-responsive" alt=""></div>
								<div class="col-xs-9 activity-img1">
									<div class="activity-desc-sub">
										<p><?php echo $pat["message"]; ?></p>
										<span><?php echo $pat["date"]; ?></span>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<?php } ?>
							
						</div>
						<div class="chat-bottom">
							<form method="post">
								<input type="text" name="message" style="width:510px" placeholder="اكتب رسالة" required="">
								<button style="background-color:#FFF;border: none;color:#6164C1;display:inline=flex;font-size:20px;background-color:#E7E7E7;padding:4px;border-radius:50%;margin-left:7px;width:40px;height:40px;line-height:1.2;margin-bottom:5px" type="submit" name="submit" class="btn btn-outline-primary"><i class="fa fa-chevron-up"></i></button>
							</form>
						</div>
					</div>
					<div class="clearfix"> </div>	
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