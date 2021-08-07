<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) { 
    header('location: ../index.php?do=should'); 
       
  } 
    $do = isset($_GET['do'])? $_GET['do'] : "Manage";
    $sql3 =$con->prepare("SELECT subject_name,id  FROM subject WHERE teacher_id=?");
    $sql3->execute(array($_SESSION['id']));
    $row3 =$sql3->fetch();
    $sub_name= $row3['subject_name'];
    $sub_id= $row3['id'];
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

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
                                        <a href="add_lesson.php" class="nav-link ">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>إضافة درس جديد</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
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
                                        <a href="#" class="nav-link active">
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
                            <h1 class="main-title">قائمة الاختبارات</h1>
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
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3 class="main-title"> اختبار مادة : <?php echo $sub_name?></h3><br>
                        </div>
                        <!-- /.col -->
                    </div>
                    <form class="add_sub" method="post" action="../include/add_test.php?id=<?php echo $sub_id;?>">
                        <div class="row mb-3">
                            <label  class="col-sm-2 col-form-label">الفصل</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="class" aria-label="Default select example">
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
                        <div class="row mb-3">
                            <label for="test" class="col-sm-2 col-form-label">اسم الاختبار</label>
                            <div class="col-sm-10">
                            <select class="form-select" name="test_name" required aria-label="Default select example">
                                <option value="الاختبار الاول">الاختبار الاول</option>
                                <option value="الاختبار الثاني">الاختبار الثاني</option>
                                <option value="الاختبار الثالث">الاختبار الثالث</option>
                                <option value="اختبار منتصف السنة الاول">اختبار منتصف السنة الاول</option>
                                <option value="اختبار منتصف السنة الثاني">اختبار منتصف السنة الثاني</option>
                                <option value="اختبار نهاية السنة">اختبار نهاية السنة</option>
                                
                                
                            </select>
                                
                            </div>
                          </div>
                        <div class="row mb-3">
                          <label for="frist" class="col-sm-2 col-form-label">السؤال الاول</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" name="first" id="frist" required>
                          </div>
                          <label for="degree" class="col-sm-2 col-form-label">الدرجة</label>
                          <div class="col-sm-2">
                            <input type="number" name="d_first" class="form-control amount" onblur="findTotal()" id="degree" required>
                          </div>
                          <div class="col-sm-1" style="margin-top: 8px;">
                            
                        </div>
                        </div>
                        <div class="row mb-3">
                            <label for="q2_1" class="col-sm-2 col-form-label">السؤال الثاني</label>
                            <div class="col-sm-5">
                              <input type="text" name="second" class="form-control " id="q2_1" disabled>
                            </div>
                            <label for="q2_2" class="col-sm-2 col-form-label">الدرجة</label>
                            <div class="col-sm-2">
                              <input type="number" name="d_second" id="q2_2" class="form-control amount" onblur="findTotal()"  disabled>
                            </div>
                            <div class="col-sm-1" style="margin-top: 8px;">
                                <input type="checkbox" id="ch2" onclick="Enabel2(this)"> تفعيل 
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="q3_1" class="col-sm-2 col-form-label">السؤال الثالث</label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control " name="third" id="q3_1" disabled>
                            </div>
                            <label for="q3_2" class="col-sm-2 col-form-label">الدرجة</label>
                            <div class="col-sm-2">
                              <input type="number" id="q3_2" name="d_third" class="form-control amount" onblur="findTotal()"  disabled>
                            </div>
                            <div class="col-sm-1" style="margin-top: 8px;">
                                <input type="checkbox" id="ch3" onclick="Enabel3(this)"> تفعيل 
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="q4_1" class="col-sm-2 col-form-label">السؤال الرابع</label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" name="fourth" id="q4_1" disabled>
                            </div>
                            <label for="q4_2" class="col-sm-2 col-form-label">الدرجة</label>
                            <div class="col-sm-2">
                              <input type="number" id="q4_2" name="d_fourth" class="form-control amount" onblur="findTotal()"  disabled>
                            </div>
                            <div class="col-sm-1" style="margin-top: 8px;">
                                <input type="checkbox" id="ch4" onclick="Enabel4(this)"> تفعيل 
                            </div>
                        </div>
                        <div class="row mb-3">
                                <label for="q5_1" class="col-sm-2 col-form-label">السؤال الخامس</label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" name="fifth" id="q5_1" disabled>
                                </div>
                                <label for="q5_2" class="col-sm-2 col-form-label">الدرجة</label>
                                <div class="col-sm-2">
                                  <input type="number" id="q5_2" name="d_fifth" class="form-control amount" onblur="findTotal()"  disabled>
                                </div>
                                <div class="col-sm-1" style="margin-top: 8px;">
                                    <input type="checkbox" id="ch5" onclick="Enabel5(this)"> تفعيل 
                                </div>
                        </div>
                        <div class="row mb-3">
                            <label for="time" class="col-sm-2 col-form-label">مدة الاختبار بالدقيقة</label>
                            <div class="col-sm-9">
                              <input type="number" name="time" class="form-control" id="time" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="result" class="col-sm-2 col-form-label">الدرجة النهائية</label>
                            <div class="col-sm-9">
                              <input type="number" name="total" class="form-control" id="result" required readonly>
                            </div>
                          </div>
                                                
                        <button type="submit" class="btn btn-primary">إضافة</button>
                      </form><br><br>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <script>
            function Enabel2(ch2){
                var q1 = document.getElementById('q2_1');
                var q2 = document.getElementById('q2_2');
                q1.disabled = ch2.checked ? false : true;
                q2.disabled = ch2.checked ? false : true;
                if(q1.disabled){
                    q1.focus();
                }
                if(q2.disabled){
                    q2.focus();
                }
            };
            function Enabel3(ch3){
                var q3 = document.getElementById('q3_1');
                var q4 = document.getElementById('q3_2');
                q3.disabled = ch3.checked ? false : true;
                q4.disabled = ch3.checked ? false : true;
                if(q3.disabled){
                    q3.focus();
                }
                if(q4.disabled){
                    q4.focus();
                }
            };
            function Enabel4(ch4){
                var q5 = document.getElementById('q4_1');
                var q6 = document.getElementById('q4_2');
                q5.disabled = ch4.checked ? false : true;
                q6.disabled = ch4.checked ? false : true;
                if(q5.disabled){
                    q5.focus();
                }
                if(q6.disabled){
                    q6.focus();
                }
            };
            function Enabel5(ch5){
                var q7 = document.getElementById('q5_1');
                var q8 = document.getElementById('q5_2');
                q7.disabled = ch5.checked ? false : true;
                q8.disabled = ch5.checked ? false : true;
                if(q7.disabled){
                    q7.focus();
                }
                if(q8.disabled){
                    q8.focus();
                }
            };
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		        <script type="text/javascript">
            function findTotal(){
                var arr = document.getElementsByClassName('amount');
                var tot=0;
                for(var i=0;i<arr.length;i++){
                    if(parseFloat(arr[i].value))
                        tot += parseFloat(arr[i].value);
                }
                document.getElementById('result').value = tot;
            }
          </script>
          <script src="https://code.jquery.com/jquery-1.8.3.min.js" integrity="sha256-YcbK69I5IXQftf/mYD8WY0/KmEDCv1asggHpJk1trM8=" crossorigin="anonymous"></script>

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