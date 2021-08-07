<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) { 
    header('location: ../index.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>دروسي - لوحة تحكم الأدمن</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../assest/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="../assest/adminlte/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="../assest/adminlte/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="../assest/adminlte/css/custom-style.css">
    <link rel="icon" href="../assest/images/logo.png" type="image/x-icon">

    
        
       

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand   border-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item"></li>
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
                </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          <?php echo $_SESSION['name'];?>   
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="profile.php">الصفحة الشخصية<a></li>
                          <li><a class="dropdown-item" href="../include/logout.php">تسجيل الخروج<a></li>
                        </ul>
                      </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <center>
                <img src="../assest/images/logo.png" alt=" Logo" width="170" height="200" style="opacity: .8">
                </center>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <div>
                    <!-- Sidebar user panel (optional) -->
                    

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview ">
                                <a href="#" class="nav-link ">
                                    <i class="fa fa-user nav-icon"></i>
                                    <p>
                                        إدارة معلم
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="teacher_list.php" class="nav-link ">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>قائمة المعلمين</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="teacher_request_list.php" class="nav-link ">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>قائمة طلبات انضمام المعلمين</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="students.php" class="nav-link ">
                                    <i class="fa fa-user nav-icon"></i>
                                    <p>
                                        إدارة الطلاب
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview ">
                                <a href="#" class="nav-link ">
                                    <i class="nav-icon fa fa-dashboard"></i>
                                    <p>
                                        إدارة المواد الدراسية
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="subject_list.php" class="nav-link ">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>عرض  قائمة المواد الدراسية </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add_subject.php" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>إضافة مادة جديدة</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview ">
                                <a href="#" class="nav-link ">
                                    <i class="nav-icon fa fa-th"></i>
                                    <p>
                                        إدارة السنة الدراسية
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="class_list.php" class="nav-link ">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p> عرض قائمة الفصول</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add_class.php" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>إضافة فصل جديد</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fa fa-dashboard"></i>
                                    <p>
                                        إدارة جدول اوقات المعلمين
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="schedule_list.php" class="nav-link ">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p> عرض الجدول الدراسي</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link active">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>إضافة جدول دراسي</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color: #fff;">
            <!-- Content Header (Page header) -->
            <div class="content-header" style="margin-right:30px;">
                <div class="container-fluid">
                    <div class="row mb-2">
					<?php if($do == "Manage"){ ?>
                        <div class="col-sm-6">
                            <h1 class="main-title">الجدول الدراسي</h1>
                        </div>
                        <!-- /.col -->
                    <?php }elseif($do == "error"){ ?>
                        <div style="width:550px;color:#2B060A;background-color:#F2A3AA;text-align: center;padding:12px;border-radius:8px;font-size:16px;margin-right:200px; margin-bottom:40px;" >
                         هذا الفصل لديه جدول دراسي بالفعل
                         </div>
                         <div class="col-sm-6">
                            <h1 class="main-title">الجدول الدراسي</h1>
                        </div>
                    <?php } ?>
                        
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div><br>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content" style="margin-left:20px; margin-right:30px;">
                <div class="container">
                    <form action="../include/add_schedule.php" method='post'>
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <h3 class="main-title"> الجدول الدراسي لفصل : </h3><br>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <select class="form-select" name="class_id" aria-label="Default select example" required>
                                    <?php 
                                    $sql =$con->prepare("SELECT * FROM class");
                                    $sql->execute();
                                    
                                    $rows =$sql->fetchAll($con::FETCH_ASSOC);
                                    foreach ($rows as $row){
                                        

                                        echo"
                                            <option value=".$row['id'].">".$row['name']."</option>
                                            ";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" width="110">اليوم / الحصة</th>
                                <th scope="col">الحصة الأولي</th>
                                <th scope="col">الحصة الثانية</th>
                                <th scope="col">الحصة الثالثة</th>
                                <th scope="col">الحصة الرابعة</th>
                                <th scope="col">الحصة الخامسة</th>
                                <th scope="col">الحصة السادسة</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">الأحد</th>
                                <td>
                                <select class="form-select" name="1_1" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="1_2" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="1_3" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="1_4" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="1_5" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="1_6" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">الاثنين</th>
                                <td>
                                <select class="form-select" name="2_1" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="2_2" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="2_3" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="2_4" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="2_5" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="2_6" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">الثلاثاء</th>
                                <td>
                                <select class="form-select" name="3_1" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="3_2" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="3_3" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="3_4" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="3_5" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="3_6" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">الاربعاء</th>
                                <td>
                                <select class="form-select" name="4_1" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="4_2" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="4_3" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="4_4" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="4_5" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="4_6" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">الخميس</th>
                                <td>
                                <select class="form-select" name="5_1" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="5_2" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="5_3" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="5_4" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="5_5" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                                <td>
                                <select class="form-select" name="5_6" aria-label="Default select example">
                                    <option value="">المادة - المعلم</option>
                                    <?php
	  
											  
											$sql = $con->prepare("SELECT
												  teacher.name,teacher.teacher_id , subject.subject_name , subject.id
											   FROM
												  teacher
											   INNER JOIN
												  subject
											   ON
												  subject.teacher_id = teacher.teacher_id

											   ");
											$sql->execute();
											$rows = $sql->fetchAll();

											foreach($rows as $pat)
											{

										   ?>
												
												<option value="<?php echo $pat["id"]; ?>"><?php echo $pat["subject_name"]; ?> - <?php echo $pat["name"]; ?></option>
										<?php } ?>	
                                </select>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <button type="submit"  class="btn btn-primary sch">إضافة</button>
                    </form>
                    <br><br>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        

        <!-- Main Footer --><br><br>
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                  جميع الحقوق محفوظة لدي
            </div>
            <!-- Default to the left -->
            <strong> <a href="#">&nbsp; دروسي &nbsp;</a> &copy; 2021 .</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../assest/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../assest/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assest/adminlte/js/adminlte.min.js"></script>
</body>