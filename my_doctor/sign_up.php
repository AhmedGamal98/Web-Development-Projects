<?php
require_once('include/connection.php');

$do = isset($_GET['do'])? $_GET['do'] : "Manage";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>My Doctor</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets1/img/favicon.png" rel="icon">
    <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets1/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets1/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.php">My Doctor</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php" class="logo me-auto"><img src="assets1/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
                    <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
                    <li><a class="nav-link scrollto " href="sign_in.php">Sign In</a></li>
                    <li><a class="nav-link scrollto active" href="#">Sign Up</a></li>


                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Sign Up</li>
                </ol>


            </div>
        </section><!-- End Breadcrumbs -->



        <!-- ======= Contact Section ======= -->
        <section id="" class="contact">
            <br><br>
            <div class="container" data-aos="fade-up">
            <?php if($do == "Manage"){ ?>
                <div class="section-title">
                    <h2>Sign Up</h2>
                    <p>Create your own account as a patient.</p>
                </div> 
            <?php }elseif($do == "should"){ ?>
                <div class="section-title">
                    <div class="alert alert-danger" role="alert">
                    Same data has been registarted before please change email or name or patient ID to create new patient account
                    </div><br>
                    <h2>Sign Up</h2>
                    <p>Create your own account as a patient.</p>
                </div> 
            <?php } ?>
                

                <div class="row">

                    <div class="col-md-1"></div>
                    <div class="col-lg-10 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="include/signup.php" method="POST" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name">Name</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="name" id="email"
                                                placeholder="Enter Your Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name">Age</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control" name="age" id="email"
                                                placeholder="Enter Your Age"   required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name">ID</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control" name="id" id="email"
                                                placeholder="Enter Your ID" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name">Phone Number</label>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control" name="phone1" id="email"
                                                 value="+966" readonly required>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="number" class="form-control" name="phone" id="phone"
                                                placeholder="Enter Your Phone Number" pattern=".{9,}"  title="Phone number must be 9 digits" maxlength="9" minlength="9"   required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name">Gender</label>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control" aria-label="Default select example" name="gender" id="email" >
                                                
                                                <option value="male">Male</option>
                                                <option selected value="Female">Female</option>
                                                
                                            </select>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name">Email</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Enter Your Email" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="name">Password</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" id="subject"
                                            placeholder="Enter Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required minlength="6">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="text-center"><button type="submit">Sign up</button></div>
                        </form>
                    </div>
                    <div class="col-md-1"></div>
                </div>

            </div>
        </section><!-- End Contact Section -->
        <br><br><br><br><br><br><br><br><br>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">



        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>My Doctor</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by <a href="#">My Doctor</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets1/vendor/aos/aos.js"></script>
    <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets1/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets1/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets1/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets1/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets1/js/main.js"></script>

</body>

</html>