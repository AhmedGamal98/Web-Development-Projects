<?php
require_once('include/connection.php');
session_start();
$do = isset($_GET['do'])? $_GET['do'] : "Manage";
$id = $_GET['id'];
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
        <style>
        .is_hidden {
            display: none;
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

                        <li><a class="active" href="farmers.php" style="font-size: 18px;">Farmers</a></li>

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

        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">

                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="farmers.php">Farmers List</a></li>
                        <li>Farmer Profile</li>
                    </ol>
                    <h2>Farmer Profile</h2>

                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container">
                <?php if($do == "Manage"){ ?>
                <?php }elseif($do == "success"){ ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-1"></i>
                    Visit has been added successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
                


                <?php } ?>


                    <br>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label"></label>
                        <label for="searchbox" class="col-sm-1 col-form-label">Search</label>
                        <div class="col-sm-7">
                            <input type="search" oninput="Search()" id="searchbox" class="form-control">
                        </div>
                        <label class="col-sm-1 col-form-label"></label>
                    </div>
                    <br><br>

                    <div class="row container-fluid">
                        <?php
                    $sql =$con->prepare("SELECT * FROM product where farmer_id=?");
                    $sql->execute(array($id));
                    $rows =$sql->fetchAll($con::FETCH_ASSOC);
                    foreach ($rows as $row){
                        if(isset($_SESSION['user_type'])){
                            echo'
                                <div class="col-6">
                                <div class="card mb-3 cards">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="data:image/jpeg;base64,'.base64_encode($row['img']).'" style="height: 100%; width: 100%"
                                                class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8 ">
                                            <div class="card-body">
                                                <h5 class="card-title">'.$row['product_name'].'</h5>

                                                <p class="card-text">Description: '.$row['description'].' </p>
                                                <p class="card-text">Price: '.$row['price'].'</p>
                                                <p class="card-text">Available Quantity: '.$row['quantity'].'</p>
                                                <form action="include/insert_cart.php" method="post">
                                                    <input type="hidden" name="product_id" value="'.$row['product_id'].'" >
                                                    
                                                    <input type="hidden" name="customer_id" value="'.$_SESSION['id'].'" >
                                                    <button style="margin-top: 15px;" type="submit"
                                                        class="btn btn-outline-primary mb-1"><i
                                                            style="margin-right: 5px;  font-size: 20px;"
                                                            class="fa-solid fa-cart-plus fa-fw"></i>Add To
                                                        Cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Card with an image on left -->
                            </div><!-- End Col-6 -->
                        ';
                        }else{
                            
                            echo'
                                <div class="col-6">
                                <div class="card mb-3 cards">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="data:image/jpeg;base64,'.base64_encode($row['img']).'" style="height: 100%; width: 100%"
                                                class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8 ">
                                            <div class="card-body">
                                                <h5 class="card-title">'.$row['product_name'].'</h5>

                                                <p class="card-text">Description: '.$row['description'].' </p>
                                                <p class="card-text">Price: '.$row['price'].'</p>
                                                <p class="card-text">Available Quantity: '.$row['quantity'].'</p>
                                                <form action="include/insert_temp_cart.php" method="post">
                                                    <input type="hidden" name="product_id" value="'.$row['product_id'].'" >
                                                    
                                                    <input type="hidden" name="customer_id" value="'.$_SESSION['temp_customer_id'].'" >
                                                    <button style="margin-top: 15px;" type="submit"
                                                        class="btn btn-outline-primary mb-1"><i
                                                            style="margin-right: 5px;  font-size: 20px;"
                                                            class="fa-solid fa-cart-plus fa-fw"></i>Add To
                                                        Cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Card with an image on left -->
                            </div><!-- End Col-6 -->
                        ';
                        }
                        
                    }
                    ?>
                        
                        

                    </div><!-- End Row -->

                </div>
            </section><!-- End Contact Section -->

        </main><!-- End #main -->
        <br><br><br><br><br><br><br><br><br>
        <!-- ======= Footer ======= -->
        <footer id="footer">



            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Values</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Excellence </a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Adaptable </a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Passionate </a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Honesty </a></li>

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
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>

                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>


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
        <script>
        function Search() {
            // Locate the card elements
            let cards = document.querySelectorAll('.cards')
            // Locate the search input
            let search_query = document.getElementById("searchbox").value;
            // Loop through the cards
            for (var i = 0; i < cards.length; i++) {
                // If the text is within the card...
                if (cards[i].innerText.toLowerCase()
                    // ...and the text matches the search query...
                    .includes(search_query.toLowerCase())) {
                    // ...remove the `.is-hidden` class.
                    cards[i].classList.remove("is_hidden");
                } else {
                    // Otherwise, add the class.
                    cards[i].classList.add("is_hidden");
                }
            }
        }
        let Timer;
        let Interval = 500; // Half a second
        let searchInput = document.getElementById('searchbox');
        searchInput.addEventListener('keyup', () => {
            clearTimeout(Timer);
            Timer = setTimeout(Search, Interval);
        });
        </script>

    </body>

</html>