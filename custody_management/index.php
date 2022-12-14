<?php
  
  require_once('include/connection.php');
  session_start(); 
   
 
   
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Custody Management - Home Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->


    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/assets/css/style.css" rel="stylesheet">


  </head>

  <body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
      <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
          <h1><a href="index.php">Custody Management</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.php"><img src="assets/assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#services">Services</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <?php
                if (!isset($_SESSION['email'])  && !isset($_SESSION['password'])) { 
                  echo"
                  <li><a class='nav-link scrollto' href='login.php#sign'>Sign in</a></li>
                  ";    
                }elseif(isset($_SESSION['email'])  && isset($_SESSION['password']) && $_SESSION['user_type']=='admin'){
                 echo' <li class="dropdown"><a href="#"><span>'.$_SESSION['name'].'</span> <i class="bi bi-chevron-down"></i></a>
                 <ul>
                   <li><a href="admin/index.php">Dashboard</a></li>
                   
                   <li><a href="include/logout.php">Sgin Out</a></li>
                   
                 </ul>
               </li>';
                }elseif(isset($_SESSION['email'])  && isset($_SESSION['password']) && $_SESSION['user_type']=='user'){
                  echo' <li class="dropdown"><a href="#"><span>'.$_SESSION['name'].'</span> <i class="bi bi-chevron-down"></i></a>
                 <ul>
                   <li><a href="user/index.php">Dashboard</a></li>
                   
                   <li><a href="include/logout.php">Sgin Out</a></li>
                   
                 </ul>
               </li>';
                }
                ?>
            


          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
      <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Custody Management</span></h2>
            <p class="animate__animated fanimate__adeInUp">This is a web-based application system for custody management
              at the Islamic University. </p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Custody Management</span></h2>
            <p class="animate__animated animate__fadeInUp">It is a graduation project proposal to automate the Islamic
              university custody services, </p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Custody Management</span></h2>
            <p class="animate__animated animate__fadeInUp">Which helps university departments keep track of the items in
              their custody and how they can request items that they need.
            </p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
          </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
      </svg>

    </section><!-- End Hero -->

    <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">

          <div class="section-title" data-aos="zoom-out">
            <h2>About</h2>
            <p>Who we are</p>
          </div>

          <div class="row content" data-aos="fade-up">
            <div class="col-lg-6">
              <p>
                This is a web-based application system for custody management at the Islamic University. 


              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> We are students from the Islamic University in Madinah in the
                  information technology and computer science faculty. </li>
                <li><i class="ri-check-double-line"></i> We have done this project as our graduation project to help
                  de-genetize the custody systems in the Kingdom of Saudi Arabia, starting from the university.</li>

              </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <p>
                This is a web-based application system for custody management at the Islamic University. 
                It is a graduation project proposal to automate the Islamic university custody services, 
                which helps university departments keep track of the items in their custody and how they can request
                items that they need.
              </p>

            </div>
          </div>

        </div>
      </section><!-- End About Section -->



      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
        <div class="container">

          <div class="row" data-aos="zoom-out">
            <div class="col-lg-9 text-center text-lg-start">
              <h3>Call To Action</h3>
              <p> We are students from the Islamic University in Madinah in the information technology and computer
                science faculty. 
                We have done this project as our graduation project to help de-genetize the custody systems in the
                Kingdom of Saudi Arabia, starting from the university.

              </p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Call To Action</a>
            </div>
          </div>

        </div>
      </section><!-- End Cta Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container">

          <div class="section-title" data-aos="zoom-out">
            <h2>Services</h2>
            <p>What we do offer</p>
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="icon-box" data-aos="zoom-in-left">
                <div class="icon"><i class="bi bi-binoculars" style="color: #ff689b;margin-left: 18px;"></i></div>
                <h4 class="title"><a href="">Efficacy</a></h4>
                <p class="description">Save effort, time, reduce costs, and prevent the wastage of resources. </p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-5 mt-md-0">
              <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
                <div class="icon"><i class="bx bxs-report" style="color: #e9bf06;margin-left: 18px;"></i></div>
                <h4 class="title"><a href="">Report Generation</a></h4>
                <p class="description">Reduce spending by providing detailed reports. </p>
              </div>
            </div>


            <div class="col-lg-6 col-md-6 mt-5">
              <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
                <div class="icon"><i class="bx  bxs-wrench" style="color:#41cf2e;margin-left: 18px;"></i></div>
                <h4 class="title"><a href="">Use</a></h4>
                <p class="description">Make the most of these items. </p>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 mt-5">
              <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
                <div class="icon"><i class="ri-settings-5-fill" style="color: #d6ff22;margin-left: 18px;"></i></div>
                <h4 class="title"><a href="">Automation</a></h4>
                <p class="description">Increase the automation of exchanging extra items.</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Services Section -->






      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">

          <div class="section-title" data-aos="zoom-out">
            <h2>Contact</h2>
            <p>Contact Us</p>
          </div>

          <div class="row mt-5">

            <div class="col-lg-4" data-aos="fade-right">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Suadi Arabia</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+966 5589 55488</p>
                </div>

              </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

              <form action="#" method="post" role="form" class=" php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                
                <div class="text-center"><button type="submit" onclick="return alert('Messaqge has been sent successfully');">Send Message</button></div>
              </form>

            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <h3>Custody Management</h3>
        <p>This is a web-based application system for custody management at the Islamic University. 
          It is a graduation project proposal to automate the Islamic university custody services, 
          which helps university departments keep track of the items in their custody and how they can request items
          that they need.

        </p>
        <div class="social-links">

        </div>
        <div class="copyright">
          &copy; Copyright <strong><span>Custody Management</span></strong>. All Rights Reserved
        </div>
        <div class="credits">

          Designed by <a href="#">Khalid & Zyad</a>
        </div>
      </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/assets/vendor/aos/aos.js"></script>
    <script src="assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/assets/vendor/ php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/assets/js/main.js"></script>

  </body>

</html>