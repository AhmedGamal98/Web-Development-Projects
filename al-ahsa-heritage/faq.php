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

        <title>Al-Ahsa Heritage - Contact</title>
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

                    <!-- Uncomment below if you prefer to use an image logo -->
                    <a href="index.php"><img src="assets/img/logo.jpg" style="width: 100px;" alt="logo" class=""></a>

                </div>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="index.php" style="font-size: 18px;">Home</a></li>

                        <li><a href="farmers.php" style="font-size: 18px;">Farmers</a></li>

                        <li><a class="active" href="#" style="font-size: 18px;">F.A.Q</a></li>

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

        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">

                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>F.A.Q</li>
                    </ol>
                    <h2>Frequently Asked Questions</h2>

                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= F.A.Q Section ======= -->
            <section id="faq" class="faq">
                <div class="container">

                    <div class="section-title" data-aos="zoom-out">
                        <h2>F.A.Q</h2>
                        <p>Frequently Asked Questions</p>
                    </div>

                    <ul class="faq-list">

                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">1- What are the
                                services provided by the site? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    The site has farmers, every farmer has a shop where he sells products online, and he
                                    also has a reservation to visit his farm to see the activities it offers.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">2- What products are
                                available? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    There are different kinds of Hasawiy products that you can visit the farmer's shop
                                    and see its products.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">3- Can we visit a
                                particular farm? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Yes, you can, by entering the dates field available to each farmer and booking a
                                    day.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">4- How to contact
                                customer services? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    There are different ways to contact with Al-Ahsa heritage website. You can directly
                                    email us about your inquiries or you visit our twitter and instagram. We will be
                                    happy to help you.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">5- Can I still add
                                items if I placed and paid the order? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    We cannot add more items in the order due to payment was completed
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">6- Where is my order
                                ? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    After the order is shipped, you will get message by SMS or email from the shipping
                                    company through which you can track your shipment and see the estimated time to
                                    arrive.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq7" class="collapsed question">7- Can I have my
                                parcel redirected to a different address?<i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq7" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Address only can be changed before shipping out. Once order was shipped, address
                                    cannot be changed.
                                </p>
                            </div>
                        </li>

                    </ul>

                </div>
            </section><!-- End F.A.Q Section -->

        </main><!-- End #main -->

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
                            <p> To be the best in providing hasawi products while ensuring the quality of these
                                products, facilitating
                                access to farms, and obtaining an unique experience.</p>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-contact">
                            <h4>Mission</h4>
                            <p>
                                To provide natural products from Al-Ahsa farms to consumers all over the Kingdom and
                                allowing tourists
                                to have an experience within farms.
                            </p>

                        </div>

                        <div class="col-lg-3 col-md-6 footer-info">
                            <h3>Social Media</h3>
                            <p></p>
                            <div class="social-links mt-3">
                                <a href="https://twitter.com/AhsaHeritage" target="_blank" class="twitter"><i
                                        class="bx bxl-twitter"></i></a>

                                <a href="https://www.instagram.com/ahsaheritage/" target="_blank" class="instagram"><i
                                        class="bx bxl-instagram"></i></a>
                                <a href="mailto:hasaheritage.22@hotmail.com" class="instagram"><i
                                        class="bi bi-envelope"></i></a>


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


        <!-- Template Main JS File -->
        <script src="assets/assets/js/main.js"></script>

    </body>

</html>