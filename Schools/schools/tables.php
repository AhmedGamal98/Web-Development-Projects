<?php 
  
 $do = isset($_GET['do'])? $_GET['do'] : 'Manage';
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
							<a href="teachers.php"><i class="fa fa-users nav_icon"></i>المعلمين</a>
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
						<li class="active">
							<a href="tables.php"><i class="fa fa-calendar-o nav_icon"></i>الجداول الدراسية</a>
						</li>
						<li>
							<a href="messages.php"><i class="fa fa-bell-o nav_icon"></i>الاعلانات والتنبيهات</a>
						</li>
						<li>
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
		<div id="page-wrapper" class="pull-left">
			<div class="main-page">
				
				
				<?php if($do == "Manage"){ ?>
				
				<div class="tables" style="margin-top:40px;height:800px">
					<a href="tables.php?do=Add" class="btn btn-primary pull-left" style="margin-bottom:30px;background-color:#FFF;width:170px;border:1px solid #337AB7;color:#000"><i class="fa fa-plus"></i> اضافة جدول لفصل</a>
					<i style="display:inline;margin-left:20px" class="fa fa-calendar-o fa-2x"></i>
					<h3 style="display:inline" class="title1">الجداول الدراسية</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>ادارة الجداول الدراسية:</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									
									<!--<th class="text-center">المرحلة</th>-->
									<th class="text-center">الفصل</th>
									<th class="text-center">التحكم</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	  
									include('../connect.php');  
									$sql = $con->prepare("SELECT DISTINCT sechdule.class_id , 
										  class.Name , class.class_id
									   FROM
										  sechdule
									   INNER JOIN
										  class
									   ON
										  sechdule.class_id = class.class_id

									   WHERE sechdule.adminid=$id");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{

								   ?>
								<tr>
									
									<!--<td></td>-->
									<td><?php echo $pat["Name"]; ?></td>
									<td>
										<a style="background: #FFF; color:#333;width:170px" href="tables.php?do=Show&tableid=<?php echo $pat["class_id"]; ?>" class="btn btn-primary"><i class="fa fa-eye"></i> عرض الجدول الدراسي</a>
										<a onclick="return confirm('هل أنت متأكد؟');" style="background: #FFF; color:#333;width:170px" href="tables.php?do=Delete&tableid=<?php echo $pat["class_id"]; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> حذف</a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				
				<?php }elseif($do == "Add"){ ?>
					
				   <form class="form" action="?do=Insert" method="post">
					   <h3 style="margin-top:30px" class="title1">اضافة جدول دراسي لفصل</h3>
					   <div class="tables" style="margin-top:40px">
						<!--<a href="tables.php?do=Add" class="btn btn-primary pull-left" style="margin-bottom:30px;background-color:#FFF;width:170px;border:1px solid #337AB7;color:#000"><i class="fa fa-plus"></i> اضافة جدول لفصل</a>-->
						   
						   
						 <div class="row">
							<div class="col-md-12">
								<select class="form-control" name="class">
									<option value="">اسم الفصل</option>
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
							</div> 
						   
							<!--<div class="col-md-6">
								<select class="form-control" name="stage">
									<option value="0">المرحلة</option>
									<option value="1">روضة</option>
									<option value="2">ابتدائي</option>
									<option value="3">اعدادي</option>
									<option value="4">ثانوي</option>
							    </select>
							</div>-->
						 </div>
						   
						<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
							<table class="table" dir="rtl">
								<thead>
									<tr>
										<th class="text-center">اليوم / الحصة</th>
										<th class="text-center">حصه 1</th>
										<th class="text-center">حصه 2</th>
										<th class="text-center">حصه 3</th>
										<th class="text-center">حصه 4</th>
										<th class="text-center">حصه 5</th>
										<th class="text-center">حصه 6</th>
										<th class="text-center">حصه 7</th>
									</tr>
								</thead>
								<tbody class="text-center">
									<tr class="active">
										<th scope="row">الأحد</th>
										<td>
											<select style="width:100px" name="course1" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select> 
											
										</td>
										<td>
											<select style="width:100px" name="course2" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course3" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select> 
										</td>
										<td>
											<select style="width:100px" name="course4" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course5" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course6" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course7" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
									</tr>
									<tr>
										<th scope="row">الاثنين</th>
										<td>
											<select style="width:100px" name="course8" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course9" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select> 
										</td>
										<td>
											<select style="width:100px" name="course10" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course11" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course12" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course13" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course14" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>

									</tr>
									<tr class="active">
										<th scope="row">الثلاثاء</th>
										<td>
											<select style="width:100px" name="course15" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
											<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
										<select style="width:100px" name="course16" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
											<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>  
										</td>
										<td>
										 <select style="width:100px" name="course17" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course18" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course19" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course20" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course21" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select>
										</td>

									</tr>
									<tr>
										<th scope="row">الأربعاء</th>
										<td>
											<select style="width:100px" name="course22" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course23" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course24" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course25" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>  
										</td>
										<td>
											<select style="width:100px" name="course26" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select> 
										</td>
										<td>
											<select style="width:100px" name="course27" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select> 
										</td>
										<td>
											<select style="width:100px" name="course28" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select> 
										</td>

									</tr>
									<tr class="active">
										<th scope="row">الخميس</th>
										<td>
											<select style="width:100px" name="course29" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select> 
										</td>
										<td>
											<select style="width:100px" name="course30" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select> 
										</td>
										<td>
											<select style="width:100px" name="course31" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course32" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>  
										</td>
										<td>
											<select style="width:100px" name="course33" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course34" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select> 
										</td>
										<td>
											<select style="width:100px" name="course35" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>  
										</td>
									</tr>
								</tbody>
							</table> 
						</div>
					</div>
					   <input style="margin-top:25px;width:200px;background-color:#FFF;color:#000" class="btn btn-primary center-block" type="submit" name="add" value="اضافة">
			   </form>	
				
				
				<?php }elseif($do == "Insert"){
	
	
	
	              if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			$course1 = $_POST["course1"];
			$course2 = $_POST["course2"];		  
			$course3 = $_POST["course3"];
			$course4 = $_POST["course4"];
			$course5 = $_POST["course5"];
			$course6 = $_POST["course6"];
			$course7 = $_POST["course7"];
			$course8 = $_POST["course8"];
			$course9 = $_POST["course9"];
			$course10 = $_POST["course10"];
			$course11 = $_POST["course11"];
			$course12 = $_POST["course12"];
			$course13 = $_POST["course13"];
			$course14 = $_POST["course14"];
			$course15 = $_POST["course15"];
			$course16 = $_POST["course16"];
			$course17 = $_POST["course17"];		  
			$course18 = $_POST["course18"];
			$course19 = $_POST["course19"];
			$course20 = $_POST["course20"];
			$course21 = $_POST["course21"];
			$course22 = $_POST["course22"];
			$course23 = $_POST["course23"];
			$course24 = $_POST["course24"];
			$course25 = $_POST["course25"];
			$course26 = $_POST["course26"];
			$course27 = $_POST["course27"];
			$course28 = $_POST["course28"];
			$course29 = $_POST["course29"];
			$course30 = $_POST["course30"];	
			$course31 = $_POST["course31"];
			$course32 = $_POST["course32"];
			$course33 = $_POST["course33"];
			$course34 = $_POST["course34"];
			$course35 = $_POST["course35"];			  
			//Validate Form By Server site
					  
			//$stage = $_POST["stage"];
			$class = $_POST["class"];
					  
			$day1 = "الأحد";	
			$day2 = "الاثنين";	
			$day3 = "الثلاثاء";	
			$day4 = "الأربعاء";	
			$day5 = "الخميس";	
					  
					  
			$row1 = "حصه 1";
			$row2 = "حصه 2";	
			$row3 = "حصه 3";	  
			$row4 = "حصه 4";	  
			$row5 = "حصه 5";	  
			$row6 = "حصه 6";	  
			$row7 = "حصه 7";		  
			
			//echo $course29;
			//$formErrors = array();
			
			/*if(empty($course1)){
				
				$formErrors[] = "اسم المادة يجب أن لا يترك فارغ";
				
			}*/
			
			//Check if there's no errors proceed the update opteration
			include('../connect.php');  
			
			//if(empty($formErrors)){
				
				
				if($course1 == ""){

					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row1,
						'session_day' => $day1,
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row1,
						'session_day' => $day1,
						'class_id' => $class,
						'course_id' => $course1,
						'adminid' => $id

					));
					
				}
				
				if($course2 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id  , :adminid)");

					$stmt->execute(array(

						'session_name' => $row2,
						'session_day' => $day1,
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row2,
						'session_day' => $day1,
						'class_id' => $class,
						'course_id' => $course2,
						'adminid' => $id

					));
				}

                if($course3 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row3,
						'session_day' => $day1,
						'class_id' => $class,
						'adminid' => $id

					));
					
					
				}else{
					
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row3,
						'session_day' => $day1,
						'class_id' => $class,
						'course_id' => $course3,
						'adminid' => $id

					));
					
				}
				
				if($course4 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row4,
						'session_day' => $day1,
						'class_id' => $class,
						'adminid' => $id

					));
					
					
				}else{
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id  , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row4,
						'session_day' => $day1,
						'class_id' => $class,
						'course_id' => $course4,
						'adminid' => $id

					));
					
					
				}
				
				
				
				if($course5 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row5,
						'session_day' => $day1,
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row5,
						'session_day' => $day1,
						'class_id' => $class,
						'course_id' => $course5,
						'adminid' => $id

					));
					
					
				}
				
				
				if($course6 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row6,
						'session_day' => $day1,
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id  , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row6,
						'session_day' => $day1,
						'class_id' => $class,
						'course_id' => $course6,
						'adminid' => $id

					));
					
					
					
				}
				
				if($course7 == ""){
				
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row7,
						'session_day' => $day1,
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row7,
						'session_day' => $day1,
						'class_id' => $class,
						'course_id' => $course7,
						'adminid' => $id

					));
					
					
					
				}
				
				if($course8 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row1,
						'session_day' => $day2,
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row1,
						'session_day' => $day2,
						'class_id' => $class,
						'course_id' => $course8,
						'adminid' => $id

					));
					
					
					
				}
				
				if($course9 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row2,
						'session_day' => $day2,
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row2,
						'session_day' => $day2,
						'class_id' => $class,
						'course_id' => $course9,
						'adminid' => $id

					));
					
					
					
				}
				
				if($course10 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row3,
						'session_day' => $day2,
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => $row3,
						'session_day' => $day2,
						'class_id' => $class,
						'course_id' => $course10,
						'adminid' => $id

					));
					
					
					
					
				}
				
				if($course11 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 4',
						'session_day' => 'الاثنين',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id ,  :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 4',
						'session_day' => 'الاثنين',
						'class_id' => $class,
						'course_id' => $course11,
						'adminid' => $id

					));
					
					
				}
				
				if($course12 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 5',
						'session_day' => 'الاثنين',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 5',
						'session_day' => 'الاثنين',
						'class_id' => $class,
						'course_id' => $course12,
						'adminid' => $id

					));
					
					
				}
				
				
				if($course13 == ""){
				
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 6',
						'session_day' => 'الاثنين',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id  , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 6',
						'session_day' => 'الاثنين',
						'class_id' => $class,
						'course_id' => $course13,
						'adminid' => $id

					));
					
					
					
				}
				
				if($course14 == ""){
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 7',
						'session_day' => 'الاثنين',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id ,  :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 7',
						'session_day' => 'الاثنين',
						'class_id' => $class,
						'course_id' => $course14,
						'adminid' => $id

					));
					
					
					
				}
				
				if($course15 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 1',
						'session_day' => 'الثلاثاء',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 1',
						'session_day' => 'الثلاثاء',
						'class_id' => $class,
						'course_id' => $course15,
						'adminid' => $id

					));
					
					
					
				}
				
				if($course16 == ""){
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 2',
						'session_day' => 'الثلاثاء',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 2',
						'session_day' => 'الثلاثاء',
						'class_id' => $class,
						'course_id' => $course16,
						'adminid' => $id

					));
					
					
					
				}
				
				
				if($course17 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 3',
						'session_day' => 'الثلاثاء',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 3',
						'session_day' => 'الثلاثاء',
						'class_id' => $class,
						'course_id' => $course17,
						'adminid' => $id

					));
					
					
					
				}
				
				if($course18 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 4',
						'session_day' => 'الثلاثاء',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 4',
						'session_day' => 'الثلاثاء',
						'class_id' => $class,
						'course_id' => $course18,
						'adminid' => $id

					));
					
					
					
					
				}
				
				if($course19 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 5',
						'session_day' => 'الثلاثاء',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id ,  :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 5',
						'session_day' => 'الثلاثاء',
						'class_id' => $class,
						'course_id' => $course19,
						'adminid' => $id

					));
					
					
					
				}
				
				if($course20 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 6',
						'session_day' => 'الثلاثاء',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 6',
						'session_day' => 'الثلاثاء',
						'class_id' => $class,
						'course_id' => $course20,
						'adminid' => $id

					));
					
					
					
				}
				
				if($course21 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 7',
						'session_day' => 'الثلاثاء',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 7',
						'session_day' => 'الثلاثاء',
						'class_id' => $class,
						'course_id' => $course21,
						'adminid' => $id

					));
					
				}
				
				if($course22 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 1',
						'session_day' => 'الأربعاء',
						'class_id' => $class,
						'adminid' => $id

					));
				}else{
					
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id ,  :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 1',
						'session_day' => 'الأربعاء',
						'class_id' => $class,
						'course_id' => $course22,
						'adminid' => $id

					));
					
				}
				
				if($course23 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 2',
						'session_day' => 'الأربعاء',
						'class_id' => $class,
						'adminid' => $id

					));
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id  , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 2',
						'session_day' => 'الأربعاء',
						'class_id' => $class,
						'course_id' => $course23,
						'adminid' => $id

					));
					
					
				}
				
				if($course24 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 3',
						'session_day' => 'الأربعاء',
						'class_id' => $class,
						'adminid' => $id

					));
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id  , course_id , adminid) VALUES(:session_name , :session_day , :class_id  , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 3',
						'session_day' => 'الأربعاء',
						'class_id' => $class,
						'course_id' => $course24,
						'adminid' => $id

					));
					
				}
				
				if($course25 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 4',
						'session_day' => 'الأربعاء',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 4',
						'session_day' => 'الأربعاء',
						'class_id' => $class,
						'course_id' => $course25,
						'adminid' => $id

					));
					
					
					
				}
				
				
				if($course26 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 5',
						'session_day' => 'الأربعاء',
						'class_id' => $class,
						'adminid' => $id

					));
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 5',
						'session_day' => 'الأربعاء',
						'class_id' => $class,
						'course_id' => $course26,
						'adminid' => $id

					));
					
					
				}
				
				if($course27 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 6',
						'session_day' => 'الأربعاء',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id  , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 6',
						'session_day' => 'الأربعاء',
						'class_id' => $class,
						'course_id' => $course27,
						'adminid' => $id

					));
					
					
				}
				
				
				if($course28 == ""){
					
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 7',
						'session_day' => 'الأربعاء',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id  , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 7',
						'session_day' => 'الأربعاء',
						'class_id' => $class,
						'course_id' => $course28,
						'adminid' => $id

					));
					
					
					
				}
				
				if($course29 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 1',
						'session_day' => 'الخميس',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id  , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 1',
						'session_day' => 'الخميس',
						'class_id' => $class,
						'course_id' => $course29,
						'adminid' => $id

					));
					
					
					
				}
				
				
				if($course30 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 2',
						'session_day' => 'الخميس',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 2',
						'session_day' => 'الخميس',
						'class_id' => $class,
						'course_id' => $course30,
						'adminid' => $id

					));
					
					
				}
				
				if($course31 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 3',
						'session_day' => 'الخميس',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 3',
						'session_day' => 'الخميس',
						'class_id' => $class,
						'course_id' => $course31,
						'adminid' => $id

					));
					
					
					
				}
				
				if($course32 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 4',
						'session_day' => 'الخميس',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id  , course_id , adminid) VALUES(:session_name , :session_day , :class_id  , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 4',
						'session_day' => 'الخميس',
						'class_id' => $class,
						'course_id' => $course32,
						'adminid' => $id

					));
					
					
					
				}
				
				if($course33 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 5',
						'session_day' => 'الخميس',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id  , course_id , adminid) VALUES(:session_name , :session_day , :class_id  , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 5',
						'session_day' => 'الخميس',
						'class_id' => $class,
						'course_id' => $course33,
						'adminid' => $id

					));
					
					
					
				}
				
				
				if($course34 == ""){
					
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 6',
						'session_day' => 'الخميس',
						'class_id' => $class,
						'adminid' => $id

					));
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id  , course_id , adminid) VALUES(:session_name , :session_day , :class_id , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 6',
						'session_day' => 'الخميس',
						'class_id' => $class,
						'course_id' => $course34,
						'adminid' => $id

					));
					
					
				}
				
				if($course35 == ""){
				
				$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , adminid) VALUES(:session_name , :session_day , :class_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 7',
						'session_day' => 'الخميس',
						'class_id' => $class,
						'adminid' => $id

					));
					
				}else{
					
					
					$stmt = $con->prepare("INSERT INTO sechdule(session_name , session_day , class_id , course_id , adminid) VALUES(:session_name , :session_day , :class_id  , :course_id , :adminid)");

					$stmt->execute(array(

						'session_name' => 'حصه 7',
						'session_day' => 'الخميس',
						'class_id' => $class,
						'course_id' => $course35,
						'adminid' => $id

					));
					
					
				}
				

					echo '<div style="margin-top:40px" dir="rtl" class="alert alert-info">تم اضافة جدول بنجاح
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>'; ?>
					
				
					<form class="form" action="?do=Insert" method="post">
					   <h3 style="margin-top:30px" class="title1">اضافة جدول دراسي لفصل</h3>
					   <div class="tables" style="margin-top:40px">
						<!--<a href="tables.php?do=Add" class="btn btn-primary pull-left" style="margin-bottom:30px;background-color:#FFF;width:170px;border:1px solid #337AB7;color:#000"><i class="fa fa-plus"></i> اضافة جدول لفصل</a>-->
						   
						   
						 <div class="row">
							<div class="col-md-12">
								<select class="form-control" name="class">
									<option value="0">اسم الفصل</option>
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
							</div> 
						   
							<!--<div class="col-md-6">
								<select class="form-control" name="stage">
									<option value="0">المرحلة</option>
									<option value="1">روضة</option>
									<option value="2">ابتدائي</option>
									<option value="3">اعدادي</option>
									<option value="4">ثانوي</option>
							    </select>
							</div>-->
						 </div>
						   
						<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
							<table class="table" dir="rtl">
								<thead>
									<tr>
										<th class="text-center">اليوم / الحصة</th>
										<th class="text-center">حصه 1</th>
										<th class="text-center">حصه 2</th>
										<th class="text-center">حصه 3</th>
										<th class="text-center">حصه 4</th>
										<th class="text-center">حصه 5</th>
										<th class="text-center">حصه 6</th>
										<th class="text-center">حصه 7</th>
									</tr>
								</thead>
								<tbody class="text-center">
									<tr class="active">
										<th scope="row">الأحد</th>
										<td>
											<select style="width:100px" name="course1" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select> 
											
										</td>
										<td>
											<select style="width:100px" name="course2" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course3" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select> 
										</td>
										<td>
											<select style="width:100px" name="course4" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course5" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course6" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course7" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
									</tr>
									<tr>
										<th scope="row">الاثنين</th>
										<td>
											<select style="width:100px" name="course8" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course9" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select> 
										</td>
										<td>
											<select style="width:100px" name="course10" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course11" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course12" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course13" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course14" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>

									</tr>
									<tr class="active">
										<th scope="row">الثلاثاء</th>
										<td>
											<select style="width:100px" name="course15" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course16" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>  
										</td>
										<td>
											<select style="width:100px" name="course17" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course18" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course19" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course20" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course21" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select>
										</td>

									</tr>
									<tr>
										<th scope="row">الأربعاء</th>
										<td>
											<select style="width:100px" name="course22" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course23" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course24" class="form-control">
												<option  value="">>مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course25" class="form-control">
												<option  value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>  
										</td>
										<td>
											<select style="width:100px" name="course26" class="form-control">
												<option  value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select> 
										</td>
										<td>
											<select style="width:100px" name="course27" class="form-control">
												<option  value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select> 
										</td>
										<td>
											<select style="width:100px" name="course28" class="form-control">
												<option  value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select> 
										</td>

									</tr>
									<tr class="active">
										<th scope="row">الخميس</th>
										<td>
											<select style="width:100px" name="course29" class="form-control">
												<option  value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select> 
										</td>
										<td>
											<select style="width:100px" name="course30" class="form-control">
												<option  value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select> 
										</td>
										<td>
											<select style="width:100px" name="course31" class="form-control">
												<option  value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course32" class="form-control">
												<option  value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>  
										</td>
										<td>
											<select style="width:100px" name="course33" class="form-control">
												<option  value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>
										    </select>
										</td>
										<td>
											<select style="width:100px" name="course34" class="form-control">
												<option  value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select> 
										</td>
										<td>
											<select style="width:100px" name="course35" class="form-control">
												<option value="">مادة / معلم</option>
												<?php
	  
											include('../connect.php');  
											$sql = $con->prepare("SELECT
												  teachers.* , course.Name , course.course_ID
											   FROM
												  teachers
											   INNER JOIN
												  course
											   ON
												  course.teacher_ID = teachers.teacher_ID

											   WHERE teachers.admin_ID=$id");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["course_ID"]; ?>"><?php echo $pat["Name"]; ?> / <?php echo $pat["Fname"]; ?></option>
											<?php } ?>	
										    </select>  
										</td>
									</tr>
								</tbody>
							</table> 
						</div>
					</div>
					   <input style="margin-top:25px;width:200px;background-color:#FFF;color:#000" class="btn btn-primary center-block" type="submit" name="add" value="اضافة">
			   </form>	
				
				
					
				
		<?php //}
			
		}else{
			
			echo "<div class='alert alert-danger'>لا يمكنك الدخول لهذه الصفحة</div>";
			
		}
	
				
				
				
				}elseif($do == "Show"){
				
				
				 $classid = isset($_GET['tableid']) && is_numeric($_GET['tableid']) ? intval($_GET['tableid']) : 0;
				  
	           ?>
	  
					
				
				<div class="tables" style="margin-top:40px;height:500px">
					<a href="tables.php?do=Add" class="btn btn-primary pull-left" style="margin-bottom:30px;background-color:#FFF;width:170px;border:1px solid #337AB7;color:#000"><i class="fa fa-plus"></i> اضافة جدول لفصل</a>
					<i style="display:inline;margin-left:20px" class="fa fa-home fa-2x"></i>
					<?php
	
					  include('../connect.php');  
						$sql = $con->prepare("SELECT
						   sechdule.* , class.Name , class.class_id 
						   FROM
							  sechdule
						   INNER JOIN
							  class

						   ON
							  sechdule.class_id = class.class_id


						   WHERE sechdule.adminid=$id AND sechdule.class_id=$classid LIMIT 1");
						$sql->execute();
						$rows = $sql->fetchAll();

						foreach($rows as $pat)
						{

					   ?>
					<h3 style="display:inline" class="title1">فصل: <?php echo $pat["Name"]; ?></h3>
					<!--<i style="display:inline;margin-left:20px;margin-right:40px" class="fa fa-calendar fa-2x"></i>-->
					<!--<h3 style="display:inline" class="title1">المرحلة:</h3>-->
					<?php  } ?>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th class="text-center">اليوم / الحصة</th>
									<?php
	
	                                  include('../connect.php');  
										$sql = $con->prepare("SELECT
										   sechdule.* , class.Name , class.class_id 
										   FROM
											  sechdule
										   INNER JOIN
											  class

										   ON
											  sechdule.class_id = class.class_id


										   WHERE sechdule.adminid=$id AND sechdule.class_id=$classid LIMIT 7");
										$sql->execute();
										$rows = $sql->fetchAll();

										foreach($rows as $pat)
										{

									   ?>
	
									
									<th class="text-center"><?php echo $pat["session_name"]; ?></th>
									<?php  } ?>
								</tr>
							</thead>
							<tbody class="text-center">
								<tr>
                            <th scope="row">الأحد</th>
                            <?php
                                $day= "الأحد";
                                $num ="حصه 1";
                                //$id = $_GET['id'];
                                

                                    $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,'',$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الأحد";
                                $num ="حصه 2";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,'',$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                       echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الأحد";
                                $num ="حصه 3";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,'',$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الأحد";
                                $num ="حصه 4";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,'',$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الأحد";
                                $num ="حصه 5";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,'',$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الأحد";
                                $num ="حصه 6";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,'',$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
									<?php
                                $day= "الأحد";
                                $num ="حصه 7";
                                //$id = $_GET['id'];
                                

                                    $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,'',$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>

                                    
                            
                          </tr>
								<tr>
                            <th scope="row">الاثنين</th>
                            <?php
                                $day= "الاثنين";
                                $num ="حصه 1";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الاثنين";
                                $num ="حصه 2";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                       echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الاثنين";
                                $num ="حصه 3";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الاثنين";
                                $num ="حصه 4";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");
	
                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الاثنين";
                                $num ="حصه 5";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الاثنين";
                                $num ="حصه 6";
                                //$id = $_GET['id'];
                                

                                    $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
									<?php
                                $day= "الاثنين";
                                $num ="حصه 7";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>

                                    
                            
                          </tr>
								<tr>
                            <th scope="row">الثلاثاء</th>
                            <?php
                                $day= "الثلاثاء";
                                $num ="حصه 1";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الثلاثاء";
                                $num ="حصه 2";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الثلاثاء";
                                $num ="حصه 3";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الثلاثاء";
                                $num ="حصه 4";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الثلاثاء";
                                $num ="حصه 5";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                       echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الثلاثاء";
                                $num ="حصه 6";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
									<?php
                                $day= "الثلاثاء";
                                $num ="حصه 7";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>

                                    
                            
                          </tr>
								<tr>
                            <th scope="row">الأربعاء</th>
                            <?php
                                $day= "الأربعاء";
                                $num ="حصه 1";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                       echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الأربعاء";
                                $num ="حصه 2";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الأربعاء";
                                $num ="حصه 3";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الأربعاء";
                                $num ="حصه 4";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الأربعاء";
                                $num ="حصه 5";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الأربعاء";
                                $num ="حصه 6";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
									<?php
                                $day= "الأربعاء";
                                $num ="حصه 7";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>

                                    
                            
                          </tr>
								<tr>
                            <th scope="row">الخميس</th>
                            <?php
                                $day= "الخميس";
                                $num ="حصه 1";
                                //$id = $_GET['id'];
                                

                                    $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الخميس";
                                $num ="حصه 2";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الخميس";
                                $num ="حصه 3";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الخميس";
                                $num ="حصه 4";
                                //$id = $_GET['id'];
                                

                                    $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الخميس";
                                $num ="حصه 5";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");
	
                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
                                     <?php
                                $day= "الخميس";
                                $num ="حصه 6";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>
									<?php
                                $day= "الخميس";
                                $num ="حصه 7";
                                //$id = $_GET['id'];
                                

                                     $sql =$con->prepare("SELECT 
                                    sechdule.course_id  , course.Name , course.teacher_ID, teachers.Fname
                                    FROM
                                    sechdule 
                                    INNER JOIN
                                    course
                                    ON
                                    course.course_id = sechdule.course_id
                                    INNER JOIN
                                    teachers
                                    ON
                                    teachers.teacher_ID = course.teacher_ID
                                    WHERE sechdule.class_id=?  AND sechdule.session_day=? AND sechdule.session_name=?");

                                    $sql->execute([$classid,$day,$num]);
                                                                    
                                    $row =$sql->fetch();
                                    if($row != False){
                                        echo "<td>".$row['Fname']." / ".$row['Name']."</td>";
                                    }
                                    else{
                                        echo "<td></td>";
                                    }
                                    
                                       
                                        
                                     ?>

                                    
                            
                          </tr>
							</tbody>
						</table> 
					</div>
				</div>
				
				
				
				<?php }elseif($do == "Delete"){
				
	        $classid = isset($_GET['tableid']) && is_numeric($_GET['tableid']) ? intval($_GET['tableid']) : 0;
		
			 include('../connect.php');  						  
			 $stmt = $con->prepare("SELECT * FROM sechdule WHERE class_id= ?");
			 $stmt->execute(array($classid));
			 $row = $stmt->fetch();
			 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("DELETE FROM sechdule WHERE class_id = :classid");

				$stmt->bindParam(":classid" , $classid);

				$stmt->execute();

				echo '<div style="margin-top:40px" dir="rtl" class="alert alert-info">تم حذف هذا الجدول بنجاح
				<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
				</div>';
				echo '<div class="tables" style="margin-top:40px;height:700px">
					<a href="tables.php?do=Add" class="btn btn-primary pull-left" style="margin-bottom:30px;background-color:#FFF;width:170px;border:1px solid #337AB7;color:#000"><i class="fa fa-plus"></i> اضافة جدول لفصل</a>
					<i style="display:inline;margin-left:20px" class="fa fa-calendar-o fa-2x"></i>
					<h3 style="display:inline" class="title1">الجداول الدراسية</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>ادارة الجداول الدراسية:</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									
									<th class="text-center">المرحلة</th>
									<th class="text-center">الفصل</th>
									<th class="text-center">التحكم</th>
								</tr>
							</thead>
							<tbody class="text-center">';
								
	  
									include('../connect.php');  
									$sql = $con->prepare("SELECT
										  sechdule.* , class.Name , class.class_id
									   FROM
										  sechdule
									   INNER JOIN
										  class
									   ON
										  sechdule.class_id = class.class_id

									   WHERE sechdule.adminid=$id LIMIT 1");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{

								
								echo '<tr>
									
									<td>' . $pat["stage_name"]. '</td>
									<td>' . $pat["Name"] . '</td>
									<td>
										<a style="background: #FFF; color:#333;width:170px" href="tables.php?do=Show&tableid=' .  $pat["class_id"]. '" class="btn btn-primary"><i class="fa fa-eye"></i> عرض الجدول الدراسي</a>
										<a onclick="return confirm(\'هل أنت متأكد؟\');" style="background: #FFF; color:#333;width:170px" href="tables.php?do=Delete&tableid=' . $pat["class_id"] . '" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> حذف</a>
									</td>
								</tr>';
								 } 
							echo '</tbody>
						</table> 
					</div>
				</div>';
				
				
			}else{
				
				echo "<div class='alert alert-danger'>هذا الجدول غير مسجل عندك</div>";
				
				
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