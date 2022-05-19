<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['hos_email']) && !isset($_SESSION['hos_password'])) { 
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
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['hos_name'];?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo $_SESSION['hos_name'];?></h6>
                            <span>Hospital</span>
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
                    <i class="bi bi-list"></i><span>Doctors Panel</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="doctor-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="index.php">
                            <i class="bi bi-circle"></i><span>Doctors List</span>
                        </a>
                    </li>
                    <li>
                        <a href="add_doctor.php">
                            <i class="bi bi-circle"></i><span>Add New Doctor</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End doctor Nav -->
            <li class="nav-item ">
                <a class="nav-link collapsed" data-bs-target="#service-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-list"></i><span>Services Panel</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="service-nav" class="nav-content collapseي" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="service_list.php">
                            <i class="bi bi-circle"></i><span>Services List</span>
                        </a>
                    </li>
                    <li>
                        <a href="add_service.php" class="active">
                            <i class="bi bi-circle"></i><span>Add New Service</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End service Nav -->


        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="service_list.php">Services List</a></li>
                    <li class="breadcrumb-item active">Add New Service</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <br>
                            <?php if($do == "Manage"){ ?>
                                <?php }elseif($do == "should"){ ?>
                                <br>
                                <div class="section-title">
                                    <div class="alert alert-danger" role="alert">
                                        Something went wrong, please try again
                                    </div><br>
                                    
                                </div> 
                                
                            <?php } ?>
                            <h5 class="card-title">Add New Service</h5>
                            <br>
                            <!-- Custom Styled Validation -->
                            <form action="../include/add_serv.php" method='post' class="row g-3 needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="validationCustom01" class="form-label">Service Name</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="name" class="form-control" id="validationCustom01"
                                            placeholder="Enter Service Name" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter service name.
                                        </div>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label"> Address</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="address" class="form-control" id="validationCustom02"
                                            placeholder="Enter Service Address" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter service address.
                                        </div>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="validationCustom03" class="form-label"> Price</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="number" name="price" class="form-control" id="validationCustom03"
                                            placeholder="Enter Price" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter price.
                                        </div>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <button class="btn btn-outline-primary" type="submit">Add New</button>
                                </div>

                                <br><br><br><br>
                            </form><!-- End Custom Styled Validation -->

                        </div>
                    </div>
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