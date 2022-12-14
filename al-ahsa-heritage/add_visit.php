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

            <li><a class="active" href="#" style="font-size: 18px;">Farmers</a></li>

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
            <li>Farm Tour</li>
          </ol>
          <h2>Farm Tour</h2>

        </div>
      </section><!-- End Breadcrumbs -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">

            <br><br><br>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <!-- Form Basic -->
                    <div class="card mb-4">
                        <div 
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold "style="color: #d2a01e;font-size:18px;font-weight:bold;" >Add New Visit</h6>
                        </div>
                        <?php
                        $sql =$con->prepare("SELECT * FROM farm_activities where farmer_id=?");
                        $sql->execute(array($id));
                        $row =$sql->fetch();
                        $count = $sql->rowCount();
                        if($count > 0){
                          if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] =='customer'){
                              echo'
                                    <div class="card-body">
                                    <form action="include/new_visit.php" method="post">
                                        <div class="form-group">
                                            <h5 >Farm Activities</h5>
                                            <p >'.$row['description'].'</p>
    
                                        </div>
    
                                        <br>
    
                                        <div class="form-group">
                                            <label for="exampleFormControlDate1">Visit Date & Time</label><br>
                                            <input class="form-control" type="datetime-local"
                                                id="exampleFormControlDate1" name="date" required>
                                            <input hidden name="farmer_id" value="'.$row['farmer_id'].'">   
                                        </div>
    
    
                                        <br><br>
                                        <button style="margin-left: 42%; width:15%" type="submit"
                                            class="btn btn-primary ">Add</button>
                                    </form>
                                </div>
                              ';
                            }}
                            else{
                              echo'
                                  <div class="card-body">
                                  <form action="login.php?do=first" method="post">
                                      <div class="form-group">
                                          <h5 >Farm Activities</h5>
                                          <p >'.$row['description'].'</p>
    
                                      </div>
    
                                      <br>
    
                                      <div class="form-group">
                                          <label for="exampleFormControlDate1">Visit Date & Time</label><br>
                                          <input class="form-control" type="datetime-local"
                                              id="exampleFormControlDate1" name="" required>
                                      </div>
    
    
                                      <br><br>
                                      <button style="margin-left: 42%; width:15%" type="submit"
                                          class="btn btn-primary ">Add</button>
                                  </form>
                              </div>
                            ';
                            }
                        }
                        else{
                          if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] =='customer'){
                              echo'
                                    <div class="card-body">
                                    <form action="include/new_visit.php" method="post">
                                        <div class="form-group">
                                            <h5 >Farm Activities</h5>
                                            <p ></p>
    
                                        </div>
    
                                        <br>
    
                                        <div class="form-group">
                                            <label for="exampleFormControlDate1">Visit Date & Time</label><br>
                                            <input class="form-control" type="datetime-local"
                                                id="exampleFormControlDate1" name="date" required>
                                            <input hidden name="farmer_id" value="'.$id.'">   
                                        </div>
    
    
                                        <br><br>
                                        <button style="margin-left: 42%; width:15%" type="submit"
                                            class="btn btn-primary ">Add</button>
                                    </form>
                                </div>
                              ';
                            }}
                            else{
                              echo'
                                  <div class="card-body">
                                  <form action="login.php?do=first" method="post">
                                      <div class="form-group">
                                          <h5 >Farm Activities</h5>
                                          <p ></p>
    
                                      </div>
    
                                      <br>
    
                                      <div class="form-group">
                                          <label for="exampleFormControlDate1">Visit Date & Time</label><br>
                                          <input class="form-control" type="datetime-local"
                                              id="exampleFormControlDate1" name="" required>
                                      </div>
    
    
                                      <br><br>
                                      <button style="margin-left: 42%; width:15%" type="submit"
                                          class="btn btn-primary ">Add</button>
                                  </form>
                              </div>
                            ';
                            }
                        }
                        
                          
                        ?>
                        
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>

        </div>
      </section><!-- End Contact Section -->

    </main><!-- End #main -->
    <br><br><br><br><br><br><br><br><br><br>
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