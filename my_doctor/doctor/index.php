<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['doc_email']) && !isset($_SESSION['doc_password'])) { 
    header('location: ../sign_in.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  

?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - My Doctor</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <img src="" alt="">
                <span class="d-none d-lg-block">My Doctor</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->



        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">


                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="../assets/img/profile.png" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['doc_name'];?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo $_SESSION['doc_name'];?></h6>
                            <span>Doctor</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="../index.php">
                        <i class="bi bi-house"></i>
                        <span>Home Page</span>
                    </a>
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="user-profile.php">
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="../include/logout.php">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Sign Out</span>
                    </a>
                </li>

            </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">



            <li class="nav-item ">
                <a class="nav-link collapsed" data-bs-target="#doctor-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-list"></i><span>Appointments Panel</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="doctor-nav" class="nav-content collapsed" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="index.php" class="active">
                            <i class="bi bi-circle"></i><span>Appointments List</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End doctor Nav -->



        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Appointments List</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                        <?php if($do == "Manage"){ ?>
                            <?php }elseif($do == "open"){ ?>
                            <br>
                            <div class="section-title">
                                <div class="alert alert-success" role="alert">
                                Appointment has been opened successfully
                                </div><br>
                                
                            </div> 
                            <?php }elseif($do == "close"){ ?>
                            <br>
                            <div class="section-title">
                                <div class="alert alert-success" role="alert">
                                Appointment has been closed successfully
                                </div><br>
                                
                            </div> 
                            <?php }elseif($do == "edit"){ ?>
                            <br>
                            <div class="section-title">
                                <div class="alert alert-success" role="alert">
                                Appointment has been edited successfully
                                </div><br>
                                
                            </div> 
                        <?php } ?>
                            <h5 class="card-title">Appointments</h5>


                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Patient Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $sql =$con->prepare("SELECT * FROM appointment where doctor_id=?");
                                    $sql->execute([$_SESSION['id']]);
                                    
                                    $rows =$sql->fetchAll($con::FETCH_ASSOC);
                                        foreach ($rows as $row){
                                        $sql2 =$con->prepare("SELECT * FROM patient where id=?");
                                        $sql2->execute([$row['patient_id']]);
                                    
                                        $row2 =$sql2->fetch();
                                        $time = new DateTime($row['time']);
                                        $t= $time->format('h:i A') ;
                                        $date = new DateTime($row['date']);
                                        $d= $date->format('m/d/Y') ;
                                        if($row['status'] == 1){
                                            
                                            echo '
                                                <tr>
                                                <th scope="row">'.$row['id'].'</th>
                                                <td>'.$row2['name'].'</td>
                                                <td>'.$d.'</td>
                                                <td>'.$t.'</td>
                                                <td>Opened</td>
                                                <td><a href="edit_app.php?app_id='.$row['id'].'"> <button type="button"
                                                            class="btn btn-outline-info">Edit</button></a>
                                                    <a href="../include/close_app.php?app_id='.$row['id'].'"> <button type="button" class="btn btn-outline-danger"
                                                            onclick="confirm(\'Are you sure you want to close this appointment?\')">Close</button></a>
                                                </td>
                                            </tr>
                                            ';
                                        }
                                        elseif($row['status'] == 0){
                                            echo '
                                                <tr>
                                                <th scope="row">'.$row['id'].'</th>
                                                <td>'.$row2['name'].'</td>
                                                <td>'.$d.'</td>
                                                <td>'.$t.'</td>
                                                <td>Closed</td>
                                                <td>
                                                    <a href="../include/open_app.php?app_id='.$row['id'].'"> <button type="button" class="btn btn-outline-success"
                                                            onclick="confirm(\'Are you sure you want to open this appointment?\')">Open</button></a>
                                                </td>
                                            </tr>
                                            ';
                                        }
                                        
                                        }
                                ?>
                                    
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
                <br><br>
            </div>
            <br><br><br>
        </section>
        <br><br>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" sty class="footer">

        <div class="copyright">
            &copy; Copyright <strong><span>My Doctor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">

            Designed by <a href="../index.php">My Doctor</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.min.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.min.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>