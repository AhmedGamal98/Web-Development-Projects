<?php
require_once('include/connection.php');
session_start();
$do = isset($_GET['do'])? $_GET['do'] : "Manage";
$sql1 =$con->prepare("SELECT MAX(customer_id) FROM temp_cart");
$sql1->execute();
$row1 =$sql1->fetch();
$_SESSION['temp_customer_id'] = $row1['MAX(customer_id)']+1;
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Al-Ahsa Heritage - Home Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.jpg" rel="icon">
    <link href="assets/img/logo.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/assets/css/style.css" rel="stylesheet">
    
    <style>
      /* Chrome, Safari, Edge, Opera */
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }

      /* Firefox */
      input[type=number] {
        -moz-appearance: textfield;
      }
    </style>

  </head>

  <body>

    <!-- ======= Top Bar ======= -->
    

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
          <!--<h1><!--<h1><a href="index.php">Al-Ahsa Heritage</a></h1>
           <!-- Uncomment below if you prefer to use an image logo -->
          <a href="index.php"><img src="assets/img/logo.jpg" style="width: 100px;" alt="logo" class=""></a>
          
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="active" href="#" style="font-size: 18px;">Home</a></li>
            
            <li><a href="farmers.php" style="font-size: 18px;">Farmers</a></li>

            <li><a href="faq.php" style="font-size: 18px;">F.A.Q</a></li>
            
            <?php
                if (!isset($_SESSION['email'])  && !isset($_SESSION['password'])) { 
                  echo'
                  <li><a href="login.php" style="font-size: 18px;">Sign In</a></li>
                  <li><a href="sign_up_customer.php" style="font-size: 18px;">Sign Up</a></li>
                  ';    
                }elseif(isset($_SESSION['email'])  && isset($_SESSION['password']) && $_SESSION['user_type']=='admin'){
                 echo' <li class="dropdown"><a href="#" style="font-size: 18px;"><span >'.$_SESSION['username'].'</span> <i class="bi bi-chevron-down"></i></a>
                 <ul>
                   <li><a href="admin/index.php">Dashboard</a></li>
                   
                   <li><a href="include/logout.php">Sgin Out</a></li>
                   
                 </ul>
               </li>';
                }elseif(isset($_SESSION['email'])  && isset($_SESSION['password']) && $_SESSION['user_type']=='farmer'){
                  echo' <li class="dropdown"><a href="#" style="font-size: 18px;"><span>'.$_SESSION['fname'].' '.$_SESSION['lname'].'</span> <i class="bi bi-chevron-down"></i></a>
                 <ul>
                   <li><a href="farmer/index.php">Dashboard</a></li>
                   
                   <li><a href="include/logout.php">Sgin Out</a></li>
                   
                 </ul>
               </li>';
                }
                elseif(isset($_SESSION['email'])  && isset($_SESSION['password']) && $_SESSION['user_type']=='customer'){
                  echo' <li class="dropdown"><a href="#" style="font-size: 18px;"><span>'.$_SESSION['fname'].' '.$_SESSION['lname'].'</span> <i class="bi bi-chevron-down"></i></a>
                 <ul>
                   <li><a href="customer/index.php">Dashboard</a></li>
                   
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
    <section id="hero">
      <div class="hero-container">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

          <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

          <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/assets/img/slide/s1.jpg);background-size: 100% 100%;">
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Al-Ahsa-Heritage</span></h2>
                  <p class="animate__animated animate__fadeInUp">Al-Ahsa heritage is a website that aimed to encourage and enhance the hasawiy farmers.</p>
                  <a href="#services" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                </div>
              </div>
            </div>

            

          </div>

          

        </div>
      </div>
    </section><!-- End Hero -->

    <main id="main">

      <!-- ======= Featured Section ======= 
      <section id="featured" class="featured">
        <div class="container">

          <div class="row">
            <div class="col-lg-6">
              <div class="icon-box">
                <i class="bi bi-card-checklist"></i>
                <h3><a href="">Mission</a></h3>
                <p>To provide natural products from Al-Ahsa farms to consumers all over the Kingdom and allowing
                  tourists to have an experience within farms.</p>
              </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="icon-box">
                <i class="bi bi-binoculars"></i>
                <h3><a href="">Vision</a></h3>
                <p>To be the best in providing hasawi products while ensuring the quality of these products,
                  facilitating access to farms, and obtaining an unique experience.</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Featured Section -->

<!-- ======= Services Section ======= -->
<br> <br><br><br><br>
<section id="services" class="services">
  <div class="container">
    <div class="section-title">
      <h2>Our Services</h2>
      <p></p>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
        <div class="icon-box">
         
          <div class="icon"><i class='bx bx-cart-add'></i></i></div>
          <h4><a href="">Selling Products</a></h4>
          <p>We have many farmers, and each farmer has many distinctive Hasawi products such as date porridge mixture, lemon Hasawi.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
        <div class="icon-box">
          <div class="icon"><i class='bx bx-trip'></i></div>
          <h4><a href="">Farm Tour</a></h4>
          <p>We also have the advantage of enabling customers to visit farms and learn about the products and how they are produced, and you can buy products directly</p>
        </div>
      </div>

      <br><br>
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
        <div class="icon-box">
        
          <div class="icon"><i class='bx bxs-calendar-event'></i></div>
          <h4><a href="">Upcoming Events </a></h4>
          <p>Our site helps farmers by knowing all the new events in Al-Ahsa to exploit it in selling their products faster which leads to increasing their profits and customers.</p>
        </div>
      </div>

      



    </div>

  </div>
</section><!-- End Services Section -->

      <!-- ======= Services Section ======= 
      <section id="values" class="services">
        <div class="container">
          <div class="section-title">
            <h2>Our Values</h2>
            <p></p>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box">
                <div class="icon"><i class='bx bx-star'></i></i></div>
                <h4><a href="">Excellence </a></h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci recusandae cumque quidem fugiat
                  ipsa explicabo! Rem ullam saepe eum accusantium!</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box">
                <div class="icon"><i class='bx bx-shuffle'></i></div>
                <h4><a href="">Adaptable </a></h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci recusandae cumque quidem fugiat
                  ipsa explicabo! Rem ullam saepe eum accusantium!</p>
              </div>
            </div>

            <br><br>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box">
                <div class="icon"><i class='bx bx-run'></i></div>
                <h4><a href="">Passionate </a></h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci recusandae cumque quidem fugiat
                  ipsa explicabo! Rem ullam saepe eum accusantium!</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4><a href="">Honesty </a></h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci recusandae cumque quidem fugiat
                  ipsa explicabo! Rem ullam saepe eum accusantium!</p>
              </div>
            </div>



          </div>

        </div>
      </section><!-- End Services Section -->

      


    </main><!-- End #main -->
    <br><br><br>
    <!-- ======= Footer ======= -->
    <footer id="footer">



      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Values</h4>
              <ul>
                <li> 1. Excellence </li>
                <li> 2. Adaptable </li>
                <li> 3. Passionate </li>
                <li> 4. Honesty </li>

              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Vision</h4>
              <p> To be the best in providing hasawi products while ensuring the quality of these products, facilitating
                access to farms, and obtaining an unique experience.</p>
            </div>

            <div class="col-lg-3 col-md-6 footer-contact">
              <h4>Mission</h4>
              <p>
                To provide natural products from Al-Ahsa farms to consumers all over the Kingdom and allowing tourists
                to have an experience within farms.
              </p>

            </div>

            <div class="col-lg-3 col-md-6 footer-info">
              <h3>Social Media</h3>
              <p></p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/AhsaHeritage" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>

                <a href="https://www.instagram.com/ahsaheritage/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="mailto:hasaheritage.22@hotmail.com" class="instagram"><i class="bi bi-envelope"></i></a>


              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Al-Ahsa Heritage </span></strong>. All Rights Reserved
        </div>
        <div class="credits">

          Designed by <a href="#" style="color: #d2a01e;">Al-Ahsa Heritage </a>
        </div>
      </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/assets/js/main.js"></script>

  </body>

</html>