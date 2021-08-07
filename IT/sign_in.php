<?php
require_once('includes/connection.php');

$do = isset($_GET['do'])? $_GET['do'] : "Manage";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Taibah IT Ticket System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.svg" rel="icon">
  <link href="assets/img/logo.svg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  

  
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:helpdesk@taibahu.edu.sa">helpdesk@taibahu.edu.sa</a>
        <i class="icofont-phone"></i> 014-8618880
      </div>
      <div class="social-links">
        
      </div>
    </div>
  </div>

 <!-- ======= Header ======= -->
<header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
    
             <h1 class="logo mr-auto"><a href="index.php">Taibah IT Ticket System<span>.</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
            <!--<a href="index.php" class="logo mr-auto"><img src="assets/img/logo.svg" width="100" alt=""></a>-->
    
          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li ><a href="index.php">Home</a></li>
              <li><a href="index.php#about">About</a></li>
              <li><a href="index.php#services">Services</a></li>
              <li><a href="index.php#contact">Contact</a></li>
              <li class="active"><a href="#">Sign in</a></li>

            </ul>
          </nav><!-- .nav-menu -->
    
        </div>
</header><!-- End Header -->

<?php if($do == "Manage"){ ?>
  <br> <br><br><br>
<div class="limit">
        <div class="login-container">
            <div class="bb-login" style="width: 600px;">
                <form class="bb-form validate-form" method="POST" action="includes/login.php">
                    <span class="bb-form-title p-b-26"><img src="assets/img/logo.svg" width="70" alt="" style=" margin-bottom: 30px"> <br> Sign in </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                        <input class="input100" type="email" name="email" id="email" required>
                        <span class="bbb-input" data-placeholder="Email"></span>
                     </div>
                     <div class="wrap-input100 validate-input" data-validate="Enter password"> 
                       <span class="btn-show-pass"> <i class="mdi mdi-eye show_password"></i> </span> 
                       <input class="input100" type="password" name="password" id="password" required>
                        <span class="bbb-input" data-placeholder="Password"></span> </div>
                    <div class="login-container-form-btn">
                        <div class="bb-login-form-btn">
                            <div class="bb-form-bgbtn"></div> <button class="bb-form-btn"> Login </button>
                            
                        </div>
                        <br>
                <a href="forget_pass.php" style="margin-top:25px;font-size: 16.5pxpx;font-weight: bold">Forget Password?</a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <?php }elseif($do == "error"){ ?>
      <br> <br><br><br>
      <div class="limit">
      
        <div class="login-container">
        
            <div class="bb-login" style="width: 600px;">
            <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Email or Password is Wrong
            </div>
                <form class="bb-form validate-form" method="POST" action="includes/login.php">
                    <span class="bb-form-title p-b-26"><img src="assets/img/logo.svg" width="70" alt="" style=" margin-bottom: 30px"> <br> Sign in </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                        <input class="input100" type="email" name="email" id="email" required>
                        <span class="bbb-input" data-placeholder="Email"></span>
                     </div>
                     <div class="wrap-input100 validate-input" data-validate="Enter password"> 
                       <span class="btn-show-pass"> <i class="mdi mdi-eye show_password"></i> </span> 
                       <input class="input100" type="password" name="password" id="password" required>
                        <span class="bbb-input" data-placeholder="Password"></span> </div>
                    <div class="login-container-form-btn">
                        <div class="bb-login-form-btn">
                            <div class="bb-form-bgbtn"></div> <button class="bb-form-btn"> Login </button>
                            
                        </div>
                        <br>
                <a href="forget_pass.php" style="margin-top:25px;font-size: 16.5pxpx;font-weight: bold">Forget Password?</a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <?php }elseif($do == "should"){ ?>
      <br> <br><br><br>
      <div class="limit">
      
        <div class="login-container">
        
            <div class="bb-login" style="width: 600px;">
            <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    You should log in first to reach this page
            </div>
                <form class="bb-form validate-form" method="POST" action="includes/login.php">
                    <span class="bb-form-title p-b-26"><img src="assets/img/logo.svg" width="70" alt="" style=" margin-bottom: 30px"> <br> Sign in </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                        <input class="input100" type="email" name="email" id="email" required>
                        <span class="bbb-input" data-placeholder="Email"></span>
                     </div>
                     <div class="wrap-input100 validate-input" data-validate="Enter password"> 
                       <span class="btn-show-pass"> <i class="mdi mdi-eye show_password"></i> </span> 
                       <input class="input100" type="password" name="password" id="password" required>
                        <span class="bbb-input" data-placeholder="Password"></span> </div>
                    <div class="login-container-form-btn">
                        <div class="bb-login-form-btn">
                            <div class="bb-form-bgbtn"></div> <button class="bb-form-btn"> Login </button>
                            
                        </div>
                        <br>
                <a href="forget_pass.php" style="margin-top:25px;font-size: 16.5pxpx;font-weight: bold">Forget Password?</a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <?php }elseif($do == "change"){ ?>
      <br> <br><br><br>
      <div class="limit">
      
        <div class="login-container">
        
            <div class="bb-login" style="width: 600px;">
            <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Password Reset Successfully
            </div>
                <form class="bb-form validate-form" method="POST" action="includes/login.php">
                    <span class="bb-form-title p-b-26"><img src="assets/img/logo.svg" width="70" alt="" style=" margin-bottom: 30px"> <br> Sign in </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                        <input class="input100" type="email" name="email" id="email" required>
                        <span class="bbb-input" data-placeholder="Email"></span>
                     </div>
                     <div class="wrap-input100 validate-input" data-validate="Enter password"> 
                       <span class="btn-show-pass"> <i class="mdi mdi-eye show_password"></i> </span> 
                       <input class="input100" type="password" name="password" id="password" required>
                        <span class="bbb-input" data-placeholder="Password"></span> </div>
                    <div class="login-container-form-btn">
                        <div class="bb-login-form-btn">
                            <div class="bb-form-bgbtn"></div> <button class="bb-form-btn"> Login </button>
                            
                        </div>
                        <br>
                <a href="forget_pass.php" style="margin-top:25px;font-size: 16.5pxpx;font-weight: bold">Forget Password?</a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <?php } ?>



   <!-- ======= Footer ======= -->
   <footer id="footer">
        <div class="container py-4">
          <div class="copyright">
            &copy; Copyright <strong><span>Taibah</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            
          </div>
        </div>
      </footer><!-- End Footer -->
    
      <div id="preloader"></div>
      <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    
      <!-- Vendor JS Files -->
      <script src="assets/vendor/jquery/jquery.min.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
      <script src="assets/vendor/counterup/counterup.min.js"></script>
      <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/venobox/venobox.min.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
    
      <!-- Template Main JS File -->
      <script src="assets/js/main.js"></script>
      <script src="assets/js/log.js"></script>
    
    </body>
    
    </html>