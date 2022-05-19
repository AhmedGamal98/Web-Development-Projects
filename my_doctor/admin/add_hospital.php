<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['admin_email']) && !isset($_SESSION['admin_password'])) { 
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
                        <span class="d-none d-md-block dropdown-toggle ps-2">Admin Name</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Admin Name</h6>
                            <span>Admin</span>
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
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-list"></i><span>Hospitals Panel</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapsed" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="index.php">
                            <i class="bi bi-circle"></i><span>Hospitals List</span>
                        </a>
                    </li>
                    <li>
                        <a href="add_hospital.php" class="active">
                            <i class="bi bi-circle active"></i><span>Add New</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->



        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.php">Hospitals List</a></li>
                    <li class="breadcrumb-item active">Add New Hospital</li>
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
                                        Email or hospital name already exist, try new one.
                                    </div><br>
                                    
                                </div> 
                                
                            <?php } ?>
                            <br>
                            <h5 class="card-title">Add New Hospital</h5>
                            <p>Fill All Needed Data</p>
                            <br>
                            <!-- Custom Styled Validation -->
                            <form action="../include/add_hos.php" method="post" class="row g-3 needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="validationCustom01" class="form-label">Hospital Name</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="hospital_name" class="form-control" id="validationCustom01"
                                            placeholder="Enter Hospital Name" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter hospital name.
                                        </div>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label"> Location</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="location" class="form-control" id="validationCustom02"
                                            placeholder="Enter Hospital Location" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter hospital location.
                                        </div>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="validationCustom03" class="form-label"> Email</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="email" name="email" class="form-control" id="validationCustom03"
                                            placeholder="Enter Hospital Email" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter hospital email.
                                        </div>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label"> Password</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="password" class="form-control" id="validationCustom02"
                                            placeholder="Enter Hospital Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required minlength="6">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter hospital password & it Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters
                                        </div>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <button class="btn btn-outline-primary" type="submit">Add Now</button>
                                </div>

                                <br><br><br>
                            </form><!-- End Custom Styled Validation -->

                        </div>
                    </div>
                </div>
                <br><br><br>
        </section>
        <br><br><br><br><br><br><br><br>
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