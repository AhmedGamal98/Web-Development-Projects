<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) { 
    header('location: ../login.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="../assest/images/logo.png" type="image/x-icon">

    <title>دروسي - لوحة تحكم المعلم</title>

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
                        <?php echo $_SESSION['name'];  ?>    
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
                            <li class="nav-item">
                                <a href="schedule.php" class="nav-link">
                                    <i class="nav-icon fa fa-dashboard"></i>
                                    <p>
                                        جدول أوقات المعلم
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview ">
                                <a href="#" class="nav-link ">
                                    <i class='fa fa-book'></i>
                                    <p>
                                        إدارة الدروس
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="lesson_list.php" class="nav-link ">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>قائمة الدروس</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link  ">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>إضافة درس جديد</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview ">
                                <a href="#" class="nav-link ">
                                    <i class="fa fa-university" aria-hidden="true"></i>
                                    <p>
                                        إدارة الاختبارات
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="test_list.php" class="nav-link ">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>عرض  قائمة الاختبارات </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add_test.php" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>إضافة اختبار جديدة</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview ">
                                <a href="#" class="nav-link ">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                                    <p>
                                        إدارة نتائج الطلاب
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="result_list.php" class="nav-link ">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p> عرض قائمة النتائج</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add_result.php" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>إضافة  نتيجة</p>
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
                        <div class="col-sm-10">
                            <h1 class="main-title">تعديل الصفحة الشخصية</h1>
                        </div>
                       
                    
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
                    <form class="add_sub" method="post" action="../include/edit_teacher_profile.php">
                        <div class="row mb-3">
                          <label for="name_subject" class="col-sm-2 col-form-label">اسم المعلم</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name_subject" 
                             value="<?php echo $_SESSION['name']; ?>" required>
                          </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name_subject" class="col-sm-2 col-form-label">رقم الهاتف</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" name="phone" id="name_subject"  
                              value="<?php echo"0". $_SESSION['phone'];?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name_subject" class="col-sm-2 col-form-label">البريد الاإلكتروني</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" name="email" id="name_subject"  
                              value="<?php echo $_SESSION['email'];?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name_subject" class="col-sm-2 col-form-label">الرقم السري</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="password" id="name_subject" value="" minlength= "10"><br>
                              <div style="color:#00779C;background-color:#C0F0FF;text-align: center;padding:12px;border-radius:8px;font-size:15px;" >
                              ملحوظة: اذا تم التعديل وكلمة المرور فارغة سيتم الاحتفاظ بنفس كلمة السر الحالية بدون تعديل <br>
                ملحوظة: كلمة المرور يجب ان تحتوي علي حروف كبيرة ,حروف صغيرة, ارقام وطوله 10
            </div>
                            </div>
                        </div>
                                                
                        <button type="submit" class="btn btn-primary">تعديل</button>
                      </form>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        

        <!-- Main Footer -->
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