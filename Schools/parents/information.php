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
						<li>
							<a href="Sons.php"><i class="fa fa-plus nav_icon"></i>?????????? ??????????????</a>
						</li>
						<li class="active">
							<a href="information.php"><i class="fa fa-users nav_icon"></i>?????????????? ??????????????</a>
						</li>
						<!--<li>
							<a href="grades.php"><i class="fa fa-book nav_icon"></i>??????????????</a>
						</li>-->
						<li>
							<a href="school_advices.php"><i class="fa fa-bell-o nav_icon"></i>?????????????? ??????????????</a>
						</li>
						<!--<li>
							<a href="messages.php"><i class="fa fa-bell-o nav_icon"></i>??????????????????</a>
						</li>
						<!--<li>
							<a href="chats.php"><i class="fa fa-comments-o nav_icon"></i>??????????????????</a>
						</li>
						<li>
							<a href="add_assessing.php"><i class="fa fa-plus nav_icon"></i>?????????? ????????????</a>
						</li>-->
						<!--<li>
							<a href="assessing.php"><i class="fa fa-star nav_icon"></i>??????????????????</a>
						</li>-->
						<li class="">
							<a href="../logout.php"><i class="fa fa-sign-out nav_icon"></i>????????</a>
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
				
				<a href="../homepage.php" style="margin-top:7px;margin-right:10px;background-color:#FFF; border: 1px soild #5BC0DE;color:#000;margin-left:25px" class="btn btn-danger"><i class="fa fa-home"></i> ????????????????</a>
				
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<!--<a href="advices.php" class="dropdown-toggle"><i style="font-size:22px" class="fa fa-bell-o"></i><span class="badge blue">3</span></a>
							<!--<ul class="dropdown-menu" style="pull-right">
								<li>
									<div class="notification_header">
										<h3>?????? ?????????? 3 ??????????????</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="user_img"><img src="images/2.png" alt=""></div>
								   <div class="notification_desc">
									<p>?????? ?????????? ???????????? ?????????? ???? ???????? ????????????????</p>
									<p><span>?????? ???????? ??????????</span></p>
									</div>
								  <div class="clearfix"></div>	
								 </a></li>
								 <li class="odd"><a href="#">
									<div class="user_img"><img src="images/1.png" alt=""></div>
								   <div class="notification_desc">
									<p>?????? ?????????? ???????????? ?????????? ???? ???????? ????????????????</p>
									<p><span>?????? ???????? ??????????</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								 <li><a href="#">
									<div class="user_img"><img src="images/3.png" alt=""></div>
								   <div class="notification_desc">
									<p>?????? ?????????? ???????????? ?????????? ???? ???????? ????????????????</p>
									<p><span>?????? ???????? ??????????</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								 <li>
									<div class="notification_bottom">
										<a href="#">???? ??????????????????</a>
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
			
				<div class="tables" style="margin-top:40px;height:700px">
					<!--<a href="classes.php?do=Add" class="btn btn-primary pull-left" style="margin-bottom:30px;background-color:#FFF;width:170px;border:1px solid #D88C50;color:#000;color:#D88C50"><i class="fa fa-plus"></i> ?????????? ??????</a>-->
					<i style="display:inline;margin-left:20px;color:#DC624A" class="fa fa-users fa-2x"></i>
					<h3 style="display:inline;color:#3A5D71" class="title1">?????????????? ??????????????</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>?????????? ?????????????? ??????????????:</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">?????? ????????????</th>
									<th class="text-center">??????????</th>
									<th class="text-center">????????????</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	  
								include('../connect.php');  
								$sql = $con->prepare("SELECT
									 student.* , class.Name AS class_name FROM student INNER JOIN class ON student.class_id = class.class_id

								   	WHERE parent_ID=$id AND adminid=$adminid");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?>
								<tr>
									<th scope="row"><?php echo $pat["student_ID"] ?></th>
									<td><?php echo $pat["Name"] ?></td>
									<td><?php echo $pat["class_name"] ?></td>
									<td>
										<a style="background: #FFF; color:#333;width:130px" href="information.php?do=table&classid=<?php echo $pat["class_id"] ?>" class="btn btn-primary"><i class="fa fa-calendar-o"></i> ???????????? ?????????????? </a>
										<a style="background: #FFF; color:#333;width:140px" href="information.php?do=grades&studentid=<?php echo $pat["student_ID"] ?>" class="btn btn-primary"><i class="fa fa-book"></i> ?????????????? </a>
										<a style="background: #FFF; color:#333;width:130px" href="information.php?do=chat&classid=<?php echo $pat["class_id"]; ?>" class="btn btn-primary"><i class="fa fa-comments-o"></i> ?????????????????? </a>
										<a style="background: #FFF; color:#333;width:130px" href="information.php?do=assessing&classid=<?php echo $pat["class_id"] ?>&studentid=<?php echo $pat["student_ID"] ?>" class="btn btn-primary"><i class="fa fa-star"></i> ?????????????????? </a>
										<a style="background: #FFF; color:#333;width:130px" href="information.php?do=messages&classid=<?php echo $pat["class_id"] ?>" class="btn btn-primary"><i class="fa fa-bell-o"></i> ?????????????????? </a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				
				<?php }elseif($do == "table"){
				
				
				$classid = isset($_GET['classid']) && is_numeric($_GET['classid']) ? intval($_GET['classid']) : 0;
				
				
				?>
				
				<div class="tables" style="margin-top:40px;height:700px">
					<i style="display:inline;margin-left:20px;color:#DC624A" class="fa fa-calendar fa-2x"></i>
					<h3 style="display:inline;color:#3A5D71" class="title1">???????????? ??????????????</h3>
					
					
					<!--<i style="display:inline;margin-left:20px;color:#DC624A;margin-right:10px" class="fa fa-calendar fa-2x"></i>
					<h3 style="display:inline;color:#3A5D71" class="title1">??????????????: ??????????????</h3>-->
					
					
					<i style="display:inline;margin-left:20px;color:#DC624A;margin-right:10px" class="fa fa-home fa-2x"></i>
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


						   WHERE sechdule.adminid=$adminid AND sechdule.class_id=$classid LIMIT 1");
						$sql->execute();
						$rows = $sql->fetchAll();

						foreach($rows as $pat)
						{

					   ?>
					<h3 style="display:inline;color:#3A5D71" class="title1">??????????: <?php echo $pat["Name"]; ?></h3>
					<?php } ?>
					
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4> ???????????? ??????????????:</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th class="text-center">?????????? / ??????????</th>
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


										   WHERE sechdule.adminid=$adminid AND sechdule.class_id=$classid LIMIT 7");
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
                            <th scope="row">??????????</th>
                            <?php
                                $day= "??????????";
                                $num ="?????? 1";
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
                                $day= "??????????";
                                $num ="?????? 2";
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
                                $day= "??????????";
                                $num ="?????? 3";
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
                                $day= "??????????";
                                $num ="?????? 4";
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
                                $day= "??????????";
                                $num ="?????? 5";
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
                                $day= "??????????";
                                $num ="?????? 6";
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
                                $day= "??????????";
                                $num ="?????? 7";
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
                            <th scope="row">??????????????</th>
                            <?php
                                $day= "??????????????";
                                $num ="?????? 1";
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
                                $day= "??????????????";
                                $num ="?????? 2";
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
                                $day= "??????????????";
                                $num ="?????? 3";
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
                                $day= "??????????????";
                                $num ="?????? 4";
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
                                $day= "??????????????";
                                $num ="?????? 5";
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
                                $day= "??????????????";
                                $num ="?????? 6";
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
                                $day= "??????????????";
                                $num ="?????? 7";
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
                            <th scope="row">????????????????</th>
                            <?php
                                $day= "????????????????";
                                $num ="?????? 1";
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
                                $day= "????????????????";
                                $num ="?????? 2";
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
                                $day= "????????????????";
                                $num ="?????? 3";
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
                                $day= "????????????????";
                                $num ="?????? 4";
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
                                $day= "????????????????";
                                $num ="?????? 5";
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
                                $day= "????????????????";
                                $num ="?????? 6";
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
                                $day= "????????????????";
                                $num ="?????? 7";
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
                            <th scope="row">????????????????</th>
                            <?php
                                $day= "????????????????";
                                $num ="?????? 1";
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
                                $day= "????????????????";
                                $num ="?????? 2";
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
                                $day= "????????????????";
                                $num ="?????? 3";
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
                                $day= "????????????????";
                                $num ="?????? 4";
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
                                $day= "????????????????";
                                $num ="?????? 5";
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
                                $day= "????????????????";
                                $num ="?????? 6";
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
                                $day= "????????????????";
                                $num ="?????? 7";
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
                            <th scope="row">????????????</th>
                            <?php
                                $day= "????????????";
                                $num ="?????? 1";
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
                                $day= "????????????";
                                $num ="?????? 2";
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
                                $day= "????????????";
                                $num ="?????? 3";
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
                                $day= "????????????";
                                $num ="?????? 4";
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
                                $day= "????????????";
                                $num ="?????? 5";
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
                                $day= "????????????";
                                $num ="?????? 6";
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
                                $day= "????????????";
                                $num ="?????? 7";
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
				
				
				<?php  }elseif($do == "grades"){ 
				
				
				$studentid = isset($_GET['studentid']) && is_numeric($_GET['studentid']) ? intval($_GET['studentid']) : 0;
				
				
				?>
				
				
				<div class="tables" style="margin-top:40px;height:600px">
					<i style="display:inline;margin-left:20px;color:#DC624A" class="fa fa-book fa-2x"></i>
					<?php
	
					  include('../connect.php');  
						$sql = $con->prepare("SELECT
						   parents.* , student.Name
						   FROM
							  parents
						   INNER JOIN
							  student

						   ON
							  parents.parent_ID = student.parent_ID


						   WHERE parents.admin_ID=$adminid AND student.student_ID=$studentid");
						$sql->execute();
						$rows = $sql->fetchAll();

						foreach($rows as $pat)
						{

					   ?>
					<h3 style="display:inline;color:#3A5D71" class="title1">?????????? ????????????: <?php echo $pat["Name"] . ' ' . $pat["Fname"] . ' ' . $pat["Lname"]; ?></h3>
					<?php } ?>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>?????? ??????????????:</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th class="text-center">???????? ????????????</th>
									<th class="text-center">?????? ????????????</th>
									<th class="text-center">????????????</th>
									<th class="text-center">????????????????</th>
									<th class="text-center">????????</th>
									<th class="text-center">????????</th>
									<th class="text-center">??????????</th>
									<th class="text-center">????????????</th>
									<th class="text-center">????????</th>
									<th class="text-center">???????????? ???????? ????????</th>
									<th class="text-center">???????????? ???????? ??????????</th>
									<th class="text-center">???????????? ????????</th>
									<th class="text-center">??????????????</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	
								  include('../connect.php');  
									$sql = $con->prepare("SELECT
									   grades.* , course.Name
									   FROM
										  grades
										  
		                              INNER JOIN course ON grades.course_id = course.course_ID
									   
									   WHERE grades.student_id=$studentid");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{

								   ?>
								<tr>
									<th scope="row"><?php echo $pat["grade_ID"]; ?></th>
									<th><?php echo $pat["Name"]; ?></th>
									<td><?php echo $pat["attendance"]; ?></td>
									<td><?php echo $pat["works"]; ?></td>
									<td><?php echo $pat["classy1"]; ?></td>
									<td><?php echo $pat["classy2"]; ?></td>
									<td><?php echo $pat["final"]; ?></td>
									<td><?php echo $pat["projects"]; ?></td>
									<td><?php echo $pat["practical"]; ?></td>
									<td><?php echo $pat["short_practical"]; ?></td>
									<td><?php echo $pat["final_practical"]; ?></td>
									<td><?php echo $pat["short"]; ?></td>
									<td><?php echo $pat["sum"]; ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				
				<?php   }elseif($do == "chat"){  
				
				
				$classid = isset($_GET['classid']) && is_numeric($_GET['classid']) ? intval($_GET['classid']) : 0;
				
				
				?>
				
				
				<div class="tables" style="margin-top:40px;height:700px">
					<!--<a href="classes.php?do=Add" class="btn btn-primary pull-left" style="margin-bottom:30px;background-color:#FFF;width:170px;border:1px solid #D88C50;color:#000;color:#D88C50"><i class="fa fa-plus"></i> ?????????? ??????</a>-->
					<i style="display:inline;margin-left:20px;color:#DC624A" class="fa fa-comments-o fa-2x"></i>
					<h3 style="display:inline;color:#3A5D71" class="title1">??????????????????</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>?????????? ??????????????????:</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th>#</th>
									<th class="text-center">?????? ????????????</th>
									<th class="text-center">????????????</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	
								  include('../connect.php');  
									/*$sql = $con->prepare("SELECT
									   teachers.* , class.Name 
									   FROM
										  teachers
										  
										INNER JOIN
										
										class
										ON teachers.teacher_ID = class.teacher_id
									   
									   WHERE class.class_id=$classid");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{*/
	
	
	
	                           $sql = $con->prepare("SELECT DISTINCT course_id FROM sechdule

								   WHERE class_id=$classid");
								$sql->execute();
								$rows = $sql->fetchAll();
	                            
								

								foreach($rows as $pat)
								{
								$course_id = $pat["course_id"];
									
								if($course_id != FALSE){
									
								$sql = $con->prepare("SELECT teachers.teacher_ID , teachers.Fname , teachers.Lname  , course.course_ID  FROM teachers INNER JOIN course ON course.teacher_ID = teachers.teacher_ID

								   WHERE course.course_ID=$course_id");
								$sql->execute();
								$rows = $sql->fetchAll();
									
								foreach($rows as $pat)
								{
	                                 

								   ?>
								<tr>
									<th scope="row"><?php echo $pat["teacher_ID"]; ?></th>
									<td><?php echo $pat["Fname"] . ' ' . $pat["Lname"]; ?></td>
									<td>
										<a style="background: #FFF; color:#333;width:140px" href="information.php?do=chats&teacherid=<?php echo $pat["teacher_ID"]; ?>" class="btn btn-primary"><i class="fa fa-comments-o"></i> ????????????</a>
									</td>
								</tr>
								<?php }}} ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				
				<?php }elseif($do == "chats"){ 
				
				
				$teacherid = isset($_GET['teacherid']) && is_numeric($_GET['teacherid']) ? intval($_GET['teacherid']) : 0;
				
				
				
				?>
				
				
					
				<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="elements  row">
					<div class="col-md-8 profile widget-shadow chat-mdl-grid" style="width: 610px">
						<?php
										   
						include('../connect.php');  
						$sql = $con->prepare("SELECT Fname FROM teachers WHERE teacher_ID=$teacherid");
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
					
											
					    $sql = "INSERT INTO chat (message , parent_ID , opposer , date) VALUES ('$message', '$id' , '$teacherid' , '$dat')"; 		
						
                        $con->exec($sql);
							

                        $con=null;
					
						
						}
									
										
						?>
							<?php
										   
								include('../connect.php');  
								$sql = $con->prepare("SELECT * FROM chat WHERE parent_ID=$id AND opposer=$teacherid");
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
								$sql = $con->prepare("SELECT * FROM chat WHERE opposer=$id AND teacher_ID=$teacherid");
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
								<input name="message" type="text" style="width:510px" placeholder="???????? ??????????" required="">
								<button style="background-color:#FFF;border: none;color:#6164C1;display:inline=flex;font-size:20px;background-color:#E7E7E7;padding:4px;border-radius:50%;margin-left:7px;width:40px;height:40px;line-height:1.2;margin-bottom:5px" type="submit" name="submit" class="btn btn-outline-primary"><i class="fa fa-chevron-up"></i></button>
							</form>
						</div>
					</div>
					<div class="clearfix"> </div>	
				</div>
			</div>
		</div>
				
				
				<?php }elseif($do == "assessing"){ 
				
				
				$classid = isset($_GET['classid']) && is_numeric($_GET['classid']) ? intval($_GET['classid']) : 0;
	
	           $studentid = isset($_GET['studentid']) && is_numeric($_GET['studentid']) ? intval($_GET['studentid']) : 0;
				
				
				?>
				
				
				<div class="tables" style="margin-top:40px;height:700px">
					<!--<a href="classes.php?do=Add" class="btn btn-primary pull-left" style="margin-bottom:30px;background-color:#FFF;width:170px;border:1px solid #D88C50;color:#000;color:#D88C50"><i class="fa fa-plus"></i> ?????????? ??????</a>-->
					<i style="display:inline;margin-left:20px;color:#DC624A" class="fa fa-star fa-2x"></i>
					<h3 style="display:inline;color:#3A5D71" class="title1">??????????????????</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>?????????? ??????????????????:</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th>#</th>
									<th class="text-center">?????? ????????????</th>
									<th class="text-center">?????????? ??????????</th>
									<th class="text-center">????????????</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	
								  include('../connect.php');  
									$sql = $con->prepare("SELECT
									   lesson.* , course.Name AS course_name
									   FROM
										  lesson
										  INNER JOIN 
										 course
										 ON 
										 lesson.course_id = course.course_ID
										
										
									   WHERE class_id=$classid");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{

								   ?>
								<tr>
									<th scope="row"><?php echo $pat["lesson_id"] ?></th>
									<td><?php echo $pat["course_name"] ?></td>
									<td><?php echo $pat["name"] ?></td>
									<td>
										
										<a style="background: #FFF; color:#333;width:140px" href="information.php?do=add_assessing&lessonid=<?php echo $pat["lesson_id"] ?>&studentid=<?php echo $studentid; ?>" class="btn btn-primary"><i class="fa fa-plus"></i> ?????????? ??????????</a>
										
									</td>
								</tr>
								<?php }  ?>
							</tbody>
						</table> 
					</div>
				</div>
				
				
				<?php  }elseif($do == "add_assessing"){
				
				
				$lessonid = isset($_GET['lessonid']) && is_numeric($_GET['lessonid']) ? intval($_GET['lessonid']) : 0;
	
	            $studentid = isset($_GET['studentid']) && is_numeric($_GET['studentid']) ? intval($_GET['studentid']) : 0;
				
				
				?>
				
				<div class="login-page" style="margin-top:140px;height:400px">
				<h3 class="title1">?????????? ??????????</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=add_ass" method="post">
							
							<input type="hidden" name="lessonid" value="<?php echo $lessonid; ?>">
							
							<input type="hidden" name="studentid" value="<?php echo $studentid; ?>">
							
							<select class="form-control" name="assessing" style="margin-bottom:20px">
								<option value="">???? ?????????? ?????????? ???? ??????</option>
								<option value="5">??????????</option>
								<option value="1">????</option>
								<option value="3">?????? ???? ????</option>
							</select>
							
							
							<input type="submit" name="add" value="??????????">
						</form>
					</div>
				</div>
			</div>
				
				<?php  }elseif($do == "add_ass"){
	
	
	             if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			include('../connect.php');
			//Get Varaiables from Post Method
			
			$lessonid = $_POST["lessonid"];
			$studentid = $_POST["studentid"];		 
			$assessing = $_POST["assessing"];	 
			
				$sql = $con->prepare("SELECT * FROM assessing
					   
					  WHERE student_id=$studentid");
					$sql->execute();
					$row = $sql->fetch();
					$count =  $sql->rowCount();
					 
					if($count <= 0){ 
				

					$stmt = $con->prepare("INSERT INTO  assessing(lesson_id	, 	student_id , assessing , read_activity
                         ) VALUES(:lesson_id,  :student_id , :assessing , :read)");

					$stmt->execute(array(

						'lesson_id' => $lessonid,
						'student_id' => $studentid,
						'assessing' => $assessing,
						'read' => '1'
						
					));
					
					


					// echo success message

					echo '<div style="margin-top:40px" dir="rtl" class="alert alert-info">???? ?????????? ?????????? ??????????
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<div class="login-page" style="margin-top:140px;height:400px">
				<h3 class="title1">?????????? ??????????</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=add_ass" method="post">
							
							<input type="hidden" name="lessonid" value="' . $lessonid . '">
							
							<input type="hidden" name="studentid" value="' . $studentid . '">
							
							<select class="form-control" name="assessing" style="margin-bottom:20px">
								<option value="">???? ?????????? ?????????? ???? ??????</option>
								<option value="5">??????????</option>
								<option value="1">????</option>
								<option value="3">?????? ???? ????</option>
							</select>
							
							
							<input type="submit" name="add" value="??????????">
						</form>
					</div>
				</div>
			</div>';
					
				
					}else{
						
						
						echo '<div style="margin-top:40px" dir="rtl" class="alert alert-info">????  ???????????? ???????? ?????????? ???? ?????? 
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<div class="login-page" style="margin-top:140px;height:400px">
				<h3 class="title1">?????????? ??????????</h3>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="?do=add_ass" method="post">
							
							<input type="hidden" name="lessonid" value="' . $lessonid . '">
							
							<input type="hidden" name="studentid" value="' . $studentid . '">
							
							<select class="form-control" name="assessing" style="margin-bottom:20px">
								<option value="">???? ?????????? ?????????? ???? ??????</option>
								<option value="5">??????????</option>
								<option value="1">????</option>
								<option value="3">?????? ???? ????</option>
							</select>
							
							
							<input type="submit" name="add" value="??????????">
						</form>
					</div>
				</div>
			</div>';
						
					}
			
		}else{
			
			echo "<div class='alert alert-danger'>???? ?????????? ???????????? ???????? ????????????</div>";
			
		}   
	         
				
				
				 }elseif($do == "messages"){ 
				
				$classid = isset($_GET['classid']) && is_numeric($_GET['classid']) ? intval($_GET['classid']) : 0;
				
				?>
				
				<div class="tables" style="margin-top:40px;height:700px">
					<!--<a href="messages.php?do=Add" class="btn btn-primary pull-left" style="margin-bottom:30px;background-color:#FFF;width:170px;border:1px solid #337AB7;color:#000"><i class="fa fa-plus"></i> ?????????? ?????????? ???? ??????????</a>-->
					<i style="display:inline;margin-left:20px" class="fa fa-bell-o fa-2x"></i>
					<h3 style="display:inline" class="title1">??????????????????</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>??????????????????:</h4>
						<table class="table" dir="rtl">
							<thead>
								<tr>
									<th>#</th>
									<th class="text-center">?????? ????????????</th>
									<th class="text-center">??????????????</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
	
								  include('../connect.php');  
									$sql = $con->prepare("SELECT
									   messagess.* , teachers.Fname 
									   FROM
										  messagess
										  
										  INNER JOIN
										  teachers
										ON messagess.teacher_id = teachers.teacher_ID
										
									   WHERE class_id=$classid");
									$sql->execute();
									$rows = $sql->fetchAll();

									foreach($rows as $pat)
									{

								   ?>
								<tr>
									<th scope="row"><?php echo $pat["message_id"]; ?></th>
									<td><?php echo $pat["Fname"]; ?></td>
									<td><?php echo $pat["message"]; ?></td>
								</tr>
								<?php  } ?>
							</tbody>
						</table> 
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