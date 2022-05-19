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

  <title>My Doctor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">My Doctor</a></h1>
  

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <?php
            if (isset($_SESSION['admin_email']) && isset($_SESSION['admin_password'])) { 
              echo'
              <li class="dropdown"><i class="bx bx-user" style="margin-left:30px;margin-top:8px; font-size:26px; color:#fff;" aria-hidden="true"></i>
              <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="admin/index.php">My dashboard</a></li>
                  <li class="dropdown-item"><a href="include/logout.php">Logout</a></li>
              </ul>
          </li>
              ';
               
            }
            elseif (isset($_SESSION['hos_email']) && isset($_SESSION['hos_password'])) { 
              echo'
              <li class="dropdown"><i class="bx bx-user" style="margin-left:30px;margin-top:8px; font-size:26px; color:#fff;" aria-hidden="true"></i>
              <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="hospital/index.php">My dashboard</a></li>
                  <li class="dropdown-item"><a href="include/logout.php">Logout</a></li>
              </ul>
          </li>
              ';
            }
            elseif (isset($_SESSION['doc_email']) && isset($_SESSION['doc_password'])) { 
              echo'
              <li class="dropdown"><i class="bx bx-user" style="margin-left:30px;margin-top:8px; font-size:26px; color:#fff;" aria-hidden="true"></i>
              <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="doctor/index.php">My dashboard</a></li>
                  <li class="dropdown-item"><a href="include/logout.php">Logout</a></li>
              </ul>
          </li>
              ';
            }
            elseif (isset($_SESSION['pat_email']) && isset($_SESSION['pat_password'])) { 
              echo'
              <li class="dropdown"><i class="bx bx-user" style="margin-left:30px;margin-top:8px; font-size:26px; color:#fff;" aria-hidden="true"></i>
              <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="patient/index.php">My dashboard</a></li>
                  <li class="dropdown-item"><a href="include/logout.php">Logout</a></li>
              </ul>
          </li>
              ';
            }

            else{
                 echo'
                 <li><a class="nav-link scrollto" href="sign_in.php">Sign In</a></li>
                 <li><a class="nav-link scrollto" href="sign_up.php">Sign Up</a></li> 
                ';
            }  
          ?>
          
          
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>My Doctor</h1>
          <h2>We are team of talented doctors</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets1/img/pngwing.com.png" style="width:55%;" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              My Doctor is a complete website for digital healthcare for patients in Saudi Arabia and a trusted partner by healthcare providers and hospitals.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Find a doctor according to a review by users of my doctor's website</li>
              <li><i class="ri-check-double-line"></i> Choose the search method you prefer according to specialization, location, waiting period, available appointments and examination price</li>
              <li><i class="ri-check-double-line"></i> Confirm your reservation</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              You can get various high quality medical services at reasonable prices in various hospitals.  With My Doctor, you can book appointments with doctors, conduct consultations with the best doctors and consultants with a range of hospitals with modern technologies, all with a single click of a button.
            </p>
            
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    



    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Services</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-calendar"></i></div>
              <h4><a href="">Appointment Booking</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-star"></i></div>
              <h4><a href="">View Doctors Rating</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Knowing Working Hours of Hospitals</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-dollar"></i></div>
              <h4><a href="">Find Out About Prices and Offers</a></h4>
              <p></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="include/contact_inc.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
      <br><br><br>
    </section><!-- End Contact Section -->

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
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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