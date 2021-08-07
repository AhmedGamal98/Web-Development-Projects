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
						<li class="active">
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
				
				<div class="tables" style="margin-top:40px;height:700px">
					<!--<a href="classes.php?do=Add" class="btn btn-primary pull-left" style="margin-bottom:30px;background-color:#FFF;width:170px;border:1px solid #D88C50;color:#000;color:#D88C50"><i class="fa fa-plus"></i> اضافة فصل</a>-->
					<i style="display:inline;margin-left:20px;color:#DC624A" class="fa fa-home fa-2x"></i>
					<h3 style="display:inline;color:#3A5D71" class="title1">الفصول</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>ادارة الفصول:</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">اسم الفصل</th>
									<!--<th class="text-center">اسم المادة</th>-->
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
									<th scope="row"><?php echo $pat["class_id"];  ?></th>
									<td><?php echo $pat["Name"];  ?></td>
									<!--<td>فيزياء</td>-->
									<td>
										<a style="background: #FFF; color:#333;width:115px" href="classes.php?do=absence&classid=<?php echo $pat["class_id"];  ?>" class="btn btn-danger"><i class="glyphicon glyphicon-user"></i> الحضور والغياب</a>
										<a style="background: #FFF; color:#333;width:105px" href="classes.php?do=grades&classid=<?php echo $pat["class_id"];  ?>" class="btn btn-danger"><i class="glyphicon glyphicon-book"></i> ادارة الدرجات</a>
										<a style="background: #FFF; color:#333;width:90px" href="classes.php?do=add_assessing&classid=<?php echo $pat["class_id"];  ?>" class="btn btn-danger"><i class="glyphicon glyphicon-plus"></i> تقييم درس</a>
										<a style="background: #FFF; color:#333;width:90px" href="classes.php?do=assessing&classid=<?php echo $pat["class_id"];  ?>" class="btn btn-danger"><i class="glyphicon glyphicon-star"></i> التقييمات</a>
									</td>
								</tr>
								<?php }} ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				
				<?php }elseif($do == "absence"){
				
				
				$classid = isset($_GET['classid']) && is_numeric($_GET['classid']) ? intval($_GET['classid']) : 0;
	
	
	            //$studentid = isset($_GET['studentid']) && is_numeric($_GET['studentid']) ? intval($_GET['studentid']) : 0;
				
				
				
				?>
				
			
				<form class="page" action="?do=InsertAb" method="post">
				<div class="tables" style="margin-top:40px">
					<i style="display:inline;margin-left:20px;color:#DC624A" class="fa fa-users fa-2x"></i>
					<h3 style="display:inline;color:#3A5D71" class="title1">الحضور والغياب</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>ادارة الحضور والغياب:</h4>
						<table class="table login-body" dir="rtl">
							<input type="hidden" name="classid" value="<?php echo $classid; ?>"/>
							
							<thead>
								<tr class="active text-center">
									<td>
										<input id="all" value="1" style="width:20px;height:20px" type="checkbox" class="all" name="classes"/>
									</td>
									<td><label for="all">الكل</label></td>
								</tr>
								<tr>
									<th class="text-center">الحضور والغياب</th>
									<th class="text-center">اسم الطالب</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT
									 * FROM student

								   	WHERE class_id=$classid");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?>
								<tr>
									<td>
										<input id="student" value="<?php echo $pat["student_ID"];  ?>" style="width:20px;height:20px" type="checkbox" class="user" name="class"/>
									</td>
									<td><label for="student"><?php echo $pat["Name"];  ?></label></td>
								</tr>
								<!--<input type="hidden" name="studentid" value=""/>-->
								<?php } ?>
							</tbody>
						</table> 
					</div>
				</div>
					<input style="width:300px;margin-top:20px;color:#FFF;background-color:#6164C1;border:none;height:35px;font-weight:bold" type="submit" name="add" value="تحضير">
			  </form>		
				
				
				
				<?php }elseif($do == "InsertAb"){
	
	             if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			//$class = $_POST["classes"];
			$studentid = $_POST["class"];		 
			$classid = $_POST["classid"];
			//$studentid = $_POST["studentid"];	
					 
			//echo $studentid;		 
			include('../connect.php'); 
					 
					 
			if(isset($_POST["classes"])){		 
					 			
			$sql = $con->prepare("SELECT
				 * FROM student

				WHERE class_id=$classid");
			$sql->execute();
			$rows = $sql->fetchAll();

			foreach($rows as $pat)
			{

				$stmt = $con->prepare("INSERT INTO  attendance(attendance_percentage , student_id) VALUES(:id , :student_id)");

				$stmt->execute(array(

					'id' => '1',
					'student_id' => $pat["student_ID"]

				));
			}
			}else{
				
				
				$stmt = $con->prepare("INSERT INTO  attendance(attendance_percentage , student_id) VALUES(:id , :student_id)");

				$stmt->execute(array(

					'id' => '1',
					'student_id' => $studentid

				));
				
			}

					// echo success message

					echo '<div style="margin-top:40px" dir="rtl" class="alert alert-info">تم تحضير الطلاب بنجاح
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
				   echo '<form class="page" action="?do=InsertAb" method="post">
				<div class="tables" style="margin-top:40px">
					<i style="display:inline;margin-left:20px;color:#DC624A" class="fa fa-users fa-2x"></i>
					<h3 style="display:inline;color:#3A5D71" class="title1">الحضور والغياب</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>ادارة الحضور والغياب:</h4>
						<table class="table login-body" dir="rtl">
						    <input type="hidden" name="classid" value="' . $classid . '"/>
							<thead>
								<tr class="active text-center">
									<td>
										<input id="all" value="1" style="width:20px;height:20px" type="checkbox" class="all" name="class"/>
									</td>
									<td><label for="all">الكل</label></td>
								</tr>
								<tr>
									<th class="text-center">الحضور والغياب</th>
									<th class="text-center">اسم الطالب</th>
								</tr>
							</thead>
							<tbody class="text-center">';
								
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT
									 * FROM student

								   	WHERE class_id=$classid");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   
								echo '<tr>
									<td>
										<input id="student" value="' . $pat["student_ID"] . '" style="width:20px;height:20px" type="checkbox" class="user" name="class"/>
									</td>
									<td><label for="student">' . $pat["Name"] . '</label></td>
								</tr>';
									
								}
							echo '</tbody>
						</table> 
					</div>
				</div>
					<input style="width:300px;margin-top:20px;color:#FFF;background-color:#6164C1;border:none;height:35px;font-weight:bold" type="submit" name="add" value="تحضير">
			  </form>';
					
					
			
			
		}else{
			
			echo "<div class='alert alert-danger'>لا يمكنك الدخول لهذه الصفحة</div>";
			
		}
	              
	
				
				
				}elseif($do == "grades"){
				
				$classid = isset($_GET['classid']) && is_numeric($_GET['classid']) ? intval($_GET['classid']) : 0;
				
				
				?>
				
				
				<div class="tables" style="margin-top:40px">
					<!--<a href="classes.php?do=Add_notes" class="btn btn-primary pull-left" style="margin-bottom:30px;background-color:#FFF;width:170px;border:1px solid #D88C50;color:#000;color:#D88C50"><i class="fa fa-plus"></i> اضافة درجات</a>-->
					<i style="display:inline;margin-left:20px;color:#DC624A" class="fa fa-book fa-2x"></i>
					<?php
	  
					include('../connect.php');  
					$sql = $con->prepare("SELECT
						 * FROM class

						WHERE class_id=$classid");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				   ?>
					<h3 style="display:inline;color:#3A5D71" class="title1">درجات فصل <?php echo $pat["Name"]; ?></h3>
					<?php } ?>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>ادارة الدرجات:</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th class="text-center">هوية الطالب</th>
									<th class="text-center">اسم الطالب</th>
									<th class="text-center">المادة</th>
									<th class="text-center">الحضور</th>
									<th class="text-center">الواجبات</th>
									<th class="text-center">فصلي</th>
									<th class="text-center">فصلي</th>
									<th class="text-center">نهائي</th>
									<th class="text-center">مشاريع</th>
									<th class="text-center">عملي</th>
									<th class="text-center">اختبار عملي قصير</th>
									<th class="text-center">اختبار عملي نهائي</th>
									<th class="text-center">اختبار قصير</th>
									<!--<th class="text-center">المجموع</th>-->
									<th class="text-center">التحكم</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	  
									include('../connect.php');  
									$sql = $con->prepare("SELECT
										 * FROM student

										WHERE class_id=$classid");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{

								   ?>
								<tr class="active">
									<form action="?do=add_grades" method="post">
											<th scope="row"><?php echo $pat["student_ID"]; ?></th>
											<td><?php echo $pat["Name"]; ?></td>
										    <input type="hidden" name="studentid" value="<?php echo $pat["student_ID"]; ?>">
										    <input type="hidden" name="classid" value="<?php echo $classid; ?>">
										    <?php
	  
										        $student = $pat["student_ID"];
												include('../connect.php');  
												$sql = $con->prepare("SELECT
													 * FROM grades

													WHERE student_id=$student");
												$sql->execute();
												$rows = $sql->fetchAll();

												foreach($rows as $pat)
												{
													
                                                    $sql = $con->prepare("SELECT
													 Name FROM course

													WHERE teacher_ID=$id");
												$sql->execute();
												$row = $sql->fetch();

											   ?>
										     <td><?php echo $row["Name"]; ?></td>
											<td><input name="attendance" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["attendance"]; ?>"></td>
											<td><input name="works" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["works"];  ?>"></td>
											<td><input name="classy1" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["classy1"];  ?>"></td>
											<td><input name="classy2" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["classy2"];  ?>"></td>
											<td><input name="final" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["final"];  ?>"></td>
											<td><input name="project" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["projects"];  ?>"></td>
											<td><input name="practical" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["practical"];  ?>"></td>
											<td><input name="short_practical" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["short_practical"];  ?>"></td>
											<td><input name="final_practical" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["final_practical"];  ?>"></td>
											<td><input name="short" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["short"];  ?>"></td>
										<?php  } ?>
											<!--<td><input name="sum" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="0"></td>-->
											<td>
												<input type="submit" style="background: #FFF; color:#333;width:70px" class="btn btn-danger" value="حفظ"/>

											</td>
									</form>
								</tr>
								<?php  } ?>
								
							</tbody>
						</table> 
					</div>
				</div>
				
				
				<?php }elseif($do == "add_grades"){
	
	             if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			$studentid = $_POST["studentid"];
			$classid = $_POST["classid"];		 
			$attendance = $_POST["attendance"];		
			$works = $_POST["works"];	
			$classy1 = $_POST["classy1"];	
			$classy2 = $_POST["classy2"];
			$final = $_POST["final"];		
			$project = $_POST["project"];	
			$practical = $_POST["practical"];
			$short_practical = $_POST["short_practical"];	
			$final_practical = $_POST["final_practical"];
			$short = $_POST["short"];
			$sum = 	$attendance + $works + $classy1 + $classy2 + $final + $project + $practical + $short_practical + $final_practical + $short;
			include('../connect.php');  
					 
			$sql = $con->prepare("SELECT
				 course_ID FROM course

				WHERE teacher_id=$id");
			$sql->execute();
			$row = $sql->fetch();

			$course_id = $row["course_ID"];
					 
			

					/*$stmt = $con->prepare("UPDATRE grades SET(attendance , works , classy1 , classy2 , final , projects , practical , short_practical , final_practical , short , sum , student_id , course_id) VALUES(:att , :work , :classy1 , :classy2 , :final , :projects , :practical , :short_practical , :final_practical , :short , :sum , :student_id , :course_id)");

					$stmt->execute(array(

						'att' => $attendance,
						'work' => $works,
						'classy1' => $classy1,
						'classy2' => $classy2,
						'final' => $final,
						'projects' => $project,
						'practical' => $practical,
						'short_practical' => $short_practical,
						'final_practical' => $final_practical,
						'short' => $short,
						'sum' => $sum,
						'student_id' => $studentid,
						'course_id' => $course_id
						

					));*/
					 
					 
					 $stmt = $con->prepare("UPDATE grades SET attendance = ?, works = ? , classy1 = ? , classy2 = ?, final = ?, projects = ? , practical = ? , short_practical = ? , final_practical = ? ,  short = ? , sum = ? , student_id = ? , course_id = ? WHERE student_id = ?");
					$stmt->execute(array($attendance , $works , $classy1 , $classy2 , $final , $project , $practical , $short_practical , $final_practical , $short , $sum , $studentid ,  $course_id ,  $studentid));


					// echo success message

					echo '<div style="margin-top:40px" dir="rtl" class="alert alert-info">تم اضافة درجات  للطلاب بنجاح
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>'; ?>
				   
					<div class="tables" style="margin-top:40px;height:600px">
					<!--<a href="classes.php?do=Add_notes" class="btn btn-primary pull-left" style="margin-bottom:30px;background-color:#FFF;width:170px;border:1px solid #D88C50;color:#000;color:#D88C50"><i class="fa fa-plus"></i> اضافة درجات</a>-->
					<i style="display:inline;margin-left:20px;color:#DC624A" class="fa fa-book fa-2x"></i>
					<?php
	  
					include('../connect.php');  
					$sql = $con->prepare("SELECT
						 * FROM class

						WHERE class_id=$classid");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				   ?>
					<h3 style="display:inline;color:#3A5D71" class="title1">درجات فصل <?php echo $pat["Name"]; ?></h3>
					<?php } ?>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>ادارة الدرجات:</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th class="text-center">هوية الطالب</th>
									<th class="text-center">اسم الطالب</th>
									<th class="text-center">اسم المادة</th>
									<th class="text-center">الحضور</th>
									<th class="text-center">الواجبات</th>
									<th class="text-center">فصلي</th>
									<th class="text-center">فصلي</th>
									<th class="text-center">نهائي</th>
									<th class="text-center">مشاريع</th>
									<th class="text-center">عملي</th>
									<th class="text-center">اختبار عملي قصير</th>
									<th class="text-center">اختبار عملي نهائي</th>
									<th class="text-center">اختبار قصير</th>
									<!--<th class="text-center">المجموع</th>-->
									<th class="text-center">التحكم</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	  
									include('../connect.php');  
									$sql = $con->prepare("SELECT
										 * FROM student

										WHERE class_id=$classid");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{

								   ?>
								<tr class="active">
									<form action="?do=add_grades" method="post">
											<th scope="row"><?php echo $pat["student_ID"]; ?></th>
											<td><?php echo $pat["Name"]; ?></td>
										    <input type="hidden" name="studentid" value="<?php echo $pat["student_ID"]; ?>">
										    <input type="hidden" name="classid" value="<?php echo $classid; ?>">
										
											<?php
	  
										        $student = $pat["student_ID"];
												include('../connect.php');  
												$sql = $con->prepare("SELECT
													 * FROM grades

													WHERE student_id=$student");
												$sql->execute();
												$rows = $sql->fetchAll();

												foreach($rows as $pat)
												{
													
											$sql = $con->prepare("SELECT
													 Name FROM course

													WHERE teacher_ID=$id");
												$sql->execute();
												$row = $sql->fetch();

											   ?>
										     <td><?php echo $row["Name"]; ?></td>
											<td><input name="attendance" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["attendance"];  ?>"></td>
											<td><input name="works" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["works"];  ?>"></td>
											<td><input name="classy1" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["classy1"];  ?>"></td>
											<td><input name="classy2" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["classy2"];  ?>"></td>
											<td><input name="final" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["final"];  ?>"></td>
											<td><input name="project" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["projects"];  ?>"></td>
											<td><input name="practical" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["practical"];  ?>"></td>
											<td><input name="short_practical" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["short_practical"];  ?>"></td>
											<td><input name="final_practical" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["final_practical"];  ?>"></td>
											<td><input name="short" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="<?php echo $pat["short"];  ?>"></td>
										<?php  } ?>
											<!--<td><input name="sum" style="border:none;box-shadow:none;width:35px;background-color:#F5F5F5" type="text" value="0"></td>-->
											<td>
												<input type="submit" style="background: #FFF; color:#333;width:70px" class="btn btn-danger" value="حفظ"/>

											</td>
									</form>
								</tr>
								<?php  } ?>
								
							</tbody>
						</table> 
					</div>
				</div>
					
			
			<?php
		}else{
			
			echo "<div class='alert alert-danger'>لا يمكنك الدخول لهذه الصفحة</div>";
			
		}
	                           
	
				
				
				}elseif($do == "add_assessing"){
				
				
	              $classid = isset($_GET['classid']) && is_numeric($_GET['classid']) ? intval($_GET['classid']) : 0;
				
				
				?>
				
				
				<div class="login-page" style="margin-top:140px;height:400px">
				<h3 class="title1">اضافة تقييم لدرس</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=add_assessing1" method="post">
							
							<input type="hidden" name="classid" value="<?php echo $classid; ?>">
							<input class="form-control" type="text" class="user" name="lesson" placeholder="اسم الدرس" required="">
							
							<!--<input class="form-control" type="text" class="user" name="course" placeholder="اسم المادة" required="">-->
							
							<input type="submit" name="add" value="ارسال">
						</form>
					</div>
				</div>
			</div>
				
				<?php }elseif($do == "add_assessing1"){ 
	
	          
	              if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			$classid = $_POST["classid"];
			$lesson = $_POST["lesson"];	
			//$course = $_POST["course"];	
					  
					
					    
					  
			include('../connect.php');  
					  
					  
				$sql = $con->prepare("SELECT
						 * FROM course

						WHERE teacher_id=$id");
					$sql->execute();
					$row = $sql->fetch();	  
					 $course_id = $row["course_ID"];
					  $count = $sql->rowCount();
			

					$stmt = $con->prepare("INSERT INTO  lesson(name , class_id , course_id) VALUES(:lesson , :classid , :course_id)");

					$stmt->execute(array(

						'lesson' => $lesson,
						'classid' => $classid,
						'course_id' => $course_id

					));


					// echo success message

					echo '<div style="margin-top:40px" dir="rtl" class="alert alert-info">تم اضافة درس للتقييم بنجاح
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
				   echo '<div class="login-page" style="margin-top:140px;height:400px">
				<h3 class="title1">اضافة تقييم لدرس</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=add_assessing" method="post">
							
							<input type="hidden" name="classid" value="' . $classid . '">
							<input class="form-control" type="text" class="user" name="lesson" placeholder="اسم الدرس" required="">
							
							<!--<input class="form-control" type="text" class="user" name="course" placeholder="اسم المادة" required="">-->
							
							<input type="submit" name="add" value="ارسال">
						</form>
					</div>
				</div>
			</div>';
					
					
			
			
		}else{
			
			echo "<div class='alert alert-danger'>لا يمكنك الدخول لهذه الصفحة</div>";
			
		}			
				
	
				
				}elseif($do == "assessing"){
				
				
				 $classid = isset($_GET['classid']) && is_numeric($_GET['classid']) ? intval($_GET['classid']) : 0;
				
				
				?>
				
				
				<div class="tables" style="margin-top:40px;height:600px">
					<!--<a href="classes.php?do=Add" class="btn btn-primary pull-left" style="margin-bottom:30px;background-color:#FFF;width:170px;border:1px solid #D88C50;color:#000;color:#D88C50"><i class="fa fa-plus"></i> اضافة فصل</a>-->
					<i style="display:inline;margin-left:20px;color:#DC624A" class="fa fa-book fa-2x"></i>
					<h3 style="display:inline;color:#3A5D71" class="title1">الدروس</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>ادارة الدروس:</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th>#</th>
									<th class="text-center">اسم الدرس</th>
									<th class="text-center">التحكم</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT
									 * FROM lesson

								   WHERE class_id=$classid");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?>
								<tr>
									<th scope="row"><?php echo $pat["lesson_id"]; ?></th>
									<td><?php echo $pat["name"]; ?></td>
									<td>
										<a style="background: #FFF; color:#333;width:115px" href="classes.php?do=show&lessonid=<?php echo $pat["lesson_id"]; ?>" class="btn btn-danger"><i class="fa fa-eye"></i> عرض</a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				
				<?php }elseif($do == "show"){ 
				
				
				$lessonid = isset($_GET['lessonid']) && is_numeric($_GET['lessonid']) ? intval($_GET['lessonid']) : 0;
				
				
				?>
				
				<div class="tables" style="margin-top:40px;height:600px">
					<!--<a href="classes.php?do=Add" class="btn btn-primary pull-left" style="margin-bottom:30px;background-color:#FFF;width:170px;border:1px solid #D88C50;color:#000;color:#D88C50"><i class="fa fa-plus"></i> اضافة فصل</a>-->
					<i style="display:inline;margin-left:20px;color:#DC624A" class="fa fa-star fa-2x"></i>
					<h3 style="display:inline;color:#3A5D71" class="title1">التقييمات</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>ادارة التقييمات لدرس المجال المغناطيسي:</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">اسم الطالب</th>
									<th class="text-center">التقييم</th>
								</tr>
							</thead>
							<tbody class="text-center">
								
								<?php
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT
									 assessing.* , student.Name FROM assessing INNER JOIN student ON assessing.student_id = student.student_ID

								   WHERE lesson_id=$lessonid");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?>
								<tr>
									<th scope="row"><?php echo $pat["assessing_id"]; ?></th>
									<td><?php echo $pat["Name"]; ?></td>
									<td>
										<?php
									
									 $sub = 5 - $pat["assessing"];
									   
									  for($i = 1; $i <= $pat["assessing"]; $i++){ ?>
										
											<i style="color:#F2B33F" class="fa fa-star-o"></i>
										
										<?php } ?>
										<?php for($r = 1; $r <= $sub; $r++){ ?>
										
										    <i class="fa fa-star-o"></i>
										
										<?php } ?>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				<?php }elseif($do == "Add_notes"){ ?>
				
				
				<!--<div class="login-page" style="margin-top:140px;height:900px">
				<h3 class="title1">اضافة درجات لطالب</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert" method="post">
							
							
							<input class="form-control" type="text" class="user" name="class" placeholder="هوية الطالب" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="اسم الطالب" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="الحضور" required="" value="4" readonly>
							
							<input class="form-control" type="text" class="user" name="class" placeholder="الواجبات" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="فصلي" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="فصلي" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="نهائي" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="مشاريع" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="عملي" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="اختبار عملي قصير" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="اختبار عملي نهائي" required="">
							
							
							<input class="form-control" type="text" class="user" name="class" placeholder="اختبار قصير" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="المجموع" required="" readonly>
							
							
							<input type="submit" name="add" value="اضافة">
						</form>
					</div>
				</div>
			</div>-->
				
				
				<?php }elseif($do == "edit"){ ?>
				
				
				<div class="login-page" style="margin-top:140px;height:900px">
				<h3 class="title1">تعديل درجات لطالب</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=Insert" method="post">
							
							
							<input class="form-control" type="text" class="user" name="class" placeholder="هوية الطالب" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="اسم الطالب" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="الواجبات" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="فصلي" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="فصلي" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="نهائي" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="مشاريع" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="عملي" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="اختبار عملي قصير" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="اختبار عملي نهائي" required="">
							
							
							<input class="form-control" type="text" class="user" name="class" placeholder="اختبار قصير" required="">
							
							<input class="form-control" type="text" class="user" name="class" placeholder="المجموع" required="" readonly>
							
							
							<input type="submit" name="add" value="اضافة">
						</form>
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