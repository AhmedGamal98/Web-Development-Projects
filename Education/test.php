<?php
  
  require_once('include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['class_id'])) { 
    header('location: index.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  
  $test_id = $_GET['test_id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>دروسي - لوحة الطالب</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assest/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="assest/adminlte/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="assest/adminlte/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="assest/adminlte/css/custom-style.css">
    <link rel="icon" href="assest/images/logo.png" type="image/x-icon">

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
                            <li><a class="dropdown-item" href="index.php">الرئيسية<a></li>
                                <li><a class="dropdown-item" href="profile.php">الصفحة الشخصية<a></li>      
                          <li><a class="dropdown-item" href="include/logout.php">تسجيل الخروج<a></li>
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
                <img src="assest/images/logo.png" alt=" Logo" width="170" height="200" style="opacity: .8">
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
                                <a href="schedule.php" class="nav-link ">
                                    <i class="fa fa-calendar nav-icon"></i>
                                    <p>
                                        عرض الجدول الدراسي
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="lesson_list.php" class="nav-link ">
                                    <i class="fa fa-book nav-icon"></i>
                                    <p>
                                        دروسي
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="fa fa-align-justify nav-icon"></i>
                                    <p>
                                        الاختبارات
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="test_list.php" class="nav-link active">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>قائمة الاختبارات</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="result.php" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>عرض نتائج الاختبارات</p>
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
            <?php
                $sql = $con->prepare("SELECT * FROM exam WHERE id=?");
                $sql->execute([$test_id]);
                                                                    
                $row =$sql->fetch();
            ?>
            <!-- Main content -->
            <div class="content" style="margin-left:20px; margin-right:30px;">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3 class="main-title"> اختبار:  <?php echo $row['exam_name']?></h3><br>
                        </div>
                        <div class="col-sm-6">
                            <div style="color:#5c5c77;font-size:25px;float:left;margin-left:50px;"> <span id="time"><?php echo $row['duration']?>:00</span> </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <form class="add_sub" method="post" action="test_list.php?do=success">
                        <div class="row mb-3">
                          <label for="frist" class="col-sm-2 col-form-label">السؤال الاول</label>
                          
                          <div class="col-sm-9">
                            <label for="frist" class="col-sm-2 col-form-label"><?php echo $row['first_question']?></label><label for="frist" class="col-sm-2 col-form-label" style="float:left"> الدرجة : <?php echo $row['first_degree']?></label><br><br>
                            <textarea  class="form-control" id="frist" required></textarea>
                          </div>
                        </div>
                        <?php if($row['second_question'] != ""){
                            echo'
                                <div class="row mb-3">
                                <label for="frist" class="col-sm-2 col-form-label">السؤال الثاني</label>
                                
                                <div class="col-sm-9">
                                <label for="frist" class="col-sm-2 col-form-label">'.$row['second_question'].'</label><label for="frist" class="col-sm-2 col-form-label" style="float:left"> الدرجة : '.$row['second_degree'].'</label><br><br>
                                <textarea  class="form-control" id="frist" required></textarea>
                                </div>
                            </div>
                            ';
                        }?>
                        <?php if($row['third_question'] != ""){
                            echo'
                                <div class="row mb-3">
                                <label for="frist" class="col-sm-2 col-form-label">السؤال الثالث</label>
                                
                                <div class="col-sm-9">
                                <label for="frist" class="col-sm-2 col-form-label">'.$row['third_question'].'</label><label for="frist" class="col-sm-2 col-form-label" style="float:left"> الدرجة : '.$row['third_degree'].'</label><br><br>
                                <textarea  class="form-control" id="frist" required></textarea>
                                </div>
                            </div>
                            ';
                        }?>
                        <?php if($row['fourth_question'] != ""){
                            echo'
                                <div class="row mb-3">
                                <label for="frist" class="col-sm-2 col-form-label">السؤال الرابع</label>
                                
                                <div class="col-sm-9">
                                <label for="frist" class="col-sm-2 col-form-label">'.$row['fourth_question'].'</label><label for="frist" class="col-sm-2 col-form-label" style="float:left"> الدرجة : '.$row['fourth_degree'].'</label><br><br>
                                <textarea  class="form-control" id="frist" required></textarea>
                                </div>
                            </div>
                            ';
                        }?>
                        <?php if($row['fifth_question'] != ""){
                            echo'
                                <div class="row mb-3">
                                <label for="frist" class="col-sm-2 col-form-label">السؤال الخامس</label>
                                
                                <div class="col-sm-9">
                                <label for="frist" class="col-sm-2 col-form-label">'.$row['fifth_question'].'</label><label for="frist" class="col-sm-2 col-form-label" style="float:left"> الدرجة : '.$row['fifth_degree'].'</label><br><br>
                                <textarea  class="form-control" id="frist" required></textarea>
                                </div>
                            </div>
                            ';
                        }?>
                        
                          
                                                
                        <button type="submit" class="btn btn-primary">إنهاء الاختبار</button>
                      </form><br><br>

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
            <strong> <a href="#"> &nbsp; دروسي &nbsp;</a> &copy; 2021 .</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <script>
        function startTimer(duration, display) {
            var timer = duration, minutes, seconds;
            setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);
        
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;
        
                display.textContent = minutes + ":" + seconds;
        
                if (--timer < 0) {
                    timer = duration;
                }
				if(timer == 0){
					location.href= "test_list.php?do=success";
				}
                
            }, 1000);
        }
        
        window.onload = function () {
            var fiveMinutes = 60 * <?php echo $row['duration']?>,
                display = document.querySelector('#time');
            startTimer(fiveMinutes, display);
        };
    </script>
    <!-- jQuery -->
    <script src="assest/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assest/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assest/adminlte/js/adminlte.min.js"></script>
</body>