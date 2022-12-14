<?php
  
  require_once('include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) { 
    header('location: login.php?do=should#sign'); 
       
  } 
  elseif (isset($_SESSION['email']) && isset($_SESSION['password'])){
    $email = $_SESSION['email'];
    $pass = $_SESSION['password'];

    $sql1 =$con->prepare("SELECT *  FROM admins WHERE email=? AND password=?");
    $sql1->execute(array($email,$pass));
    $row1 =$sql1->fetch();
    $count1 = $sql1->rowCount();
    
    $sql2 =$con->prepare("SELECT *  FROM users WHERE email=?  AND password=?");
    $sql2->execute(array($email,$pass));
    $row2 =$sql2->fetch();
    $count2 = $sql2->rowCount();
    if($count2>0){
       
        header('location: login.php?do=admin-s#sign');
    }
  }
       
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Custody Management - Insert Item</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets\img\logo.png" rel="icon">
        <link href="assets\img\logo.png" rel="apple-touch-icon">

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
                    <h1><a href="#">Custody Management</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.php"><img src="assets/assets/img/logo.png" alt="" class="img-fluid"></a>-->
                </div>

                <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="index.php#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
            <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
            <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
            <?php
                if (!isset($_SESSION['email'])  && !isset($_SESSION['password'])) { 
                  echo"
                  <li><a class='nav-link scrollto' href='login.php'>Sign in</a></li>
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
            <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade"
                data-bs-ride="carousel">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Custody Management</span>
                        </h2>
                        <p class="animate__animated fanimate__adeInUp">This is a web-based application system for
                            custody management
                            at the Islamic University.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Custody Management</span>
                        </h2>
                        <p class="animate__animated animate__fadeInUp">It is a graduation project proposal to automate
                            the Islamic
                            university custody services,</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Custody Management</span>
                        </h2>
                        <p class="animate__animated animate__fadeInUp">Which helps university departments keep track of
                            the items in
                            their custody and how they can request items that they need.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
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
        <br><br><br><br>
        <main id="main">

            <br>

            <!-- ======= Contact Section ======= -->
            <section id="sign" class="contact">
                <div class="container">

                    <div class="section-title" data-aos="zoom-out">
                        <h2>Insert In Database</h2>
                        <p>Insert Item</p>
                    </div>

                    <div class="row mt-5">

                        <div class="col-lg-3" data-aos="fade-right">

                        </div>

                        <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left">
                        <?php if($do == "Manage"){ ?>
                            
                            <?php }elseif($do == "success"){ ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle me-1"></i>
                                Item has been added and assigned to user successfully.
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <?php } ?>
                            <form action="include/insert_new_item.php" method="post" role="form" enctype="multipart/form-data"  class=" php-email-form">


                                <div class="row">
                                    <div class="col-md-3 form-group mt-3 mt-md-0">
                                        <label style="margin-top: 4px;font-size: 21px;">Item Name</label>
                                    </div>
                                    <div class="col-md-9 form-group mt-3 mt-md-0">
                                        <input type="text" class="form-control" name="item_name" id="item_name"
                                            placeholder="Item Name" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3 form-group mt-3 mt-md-0">
                                        <label style="margin-top: 4px;font-size: 21px;">Type</label>
                                    </div>

                                    <div class="col-md-9 form-group mt-3 mt-md-0">
                                        <input type="text" class="form-control" name="type" id="type"
                                            placeholder="Item Type" required>
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3 form-group mt-3 mt-md-0">
                                        <label style="margin-top: 4px;font-size: 21px;">Description</label>
                                    </div>
                                    <div class="col-md-9 form-group mt-3 mt-md-0">
                                        <textarea class="form-control" name="description" style="height: 100px"
                                            required></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3 form-group mt-3 mt-md-0">
                                        <label style="margin-top: 4px;font-size: 21px;">Quantity</label>
                                    </div>
                                    <div class="col-md-9 form-group mt-3 mt-md-0">
                                        <input type="number" class="form-control" name="quantity" id="quantity"
                                            placeholder="Quantity" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3 form-group mt-3 mt-md-0">
                                        <label style="margin-top: 3px;font-size: 21px;">Image</label>
                                    </div>
                                    <div class="col-sm-9 form-group">
                                        <input class="form-control" name="image" type="file" id="img" multiple
                                            accept="image/*" required>
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3 form-group mt-3 mt-md-0">
                                        <label style="margin-top: 4px;font-size: 21px;">Assign User</label>
                                    </div>
                                    <div class="col-md-9 form-group mt-3 mt-md-0">
                                        <select class="form-select" name="user_id" aria-label="Default select example">
                                            <option selected hidden disabled>Select user to assign</option>
                                            <?php
                                        require_once('include/connection.php');
                                          $sql22 =$con->prepare("SELECT * FROM users");
                                          $sql22->execute();
                                          
                                          $rows22 =$sql22->fetchAll($con::FETCH_ASSOC);
                                            foreach ($rows22 as $row){
                                              if($row['status'] == 1){
                                                echo"<option value=".$row['user_id'].">".$row['user_id']." - ".$row['name']."</option>";

                                              }}?>



                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="text-center"><button style="margin-left: 150px;" type="submit">Add</button>
                                </div>
                            </form>

                        </div>
                        <div class="col-lg-3" data-aos="fade-right">

                        </div>

                    </div>

                </div>
            </section><!-- End Contact Section -->

        </main><!-- End #main -->
        <br><br><br><br><br><br>
        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <h3>Custody Management</h3>
                <p>This is a web-based application system for custody management at the Islamic University.
                    It is a graduation project proposal to automate the Islamic university custody services,
                    which helps university departments keep track of the items in their custody and how they can request
                    items that they need.
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