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
        <script type="text/javascript" src="..\assets\js\jquery.min.js"></script>

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
                        <li><a href="farmer_profile.php">Farmer Profile</a></li>
                        <li>Cart</li>
                    </ol>
                    <h2>Cart</h2>

                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container">



                    <br>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label"></label>
                        <label for="searchbox" class="col-sm-1 col-form-label">Search</label>
                        <div class="col-sm-7">
                            <input type="search" oninput="Search()" id="searchbox" class="form-control">
                        </div>
                        <div class="col-sm-3 "></div>
                    </div>
                    
                    <br><br>

                    <form action="include/kill_temp_cart.php" method='post'>
                        <div class="row container-fluid">
                        <?php
                            $sql =$con->prepare("SELECT * FROM temp_cart where customer_id=?");
                            $sql->execute(array($_SESSION['temp_customer_id']));
                            $rows =$sql->fetchAll($con::FETCH_ASSOC);
                            foreach ($rows as $row){
                                $sql1 =$con->prepare("SELECT * FROM product where product_id=?");
                                $sql1->execute(array($row['product_id']));
                                $row1 =$sql1->fetch();
                                echo'
                                    <div class="col-12">
                                    <div class="card mb-4  cards">

                                        <div class="row g-0">

                                            <div class="col-md-4">
                                                <img src="data:image/jpeg;base64,'.base64_encode($row1['img']).'" style="height: 100%; width: 80%"
                                                    class="img-fluid rounded-start" alt="...">
                                            </div>

                                            <div class="col-md-8 ">
                                                <div class="card-body">
                                                    <div class="row form-group">
                                                        <div class=" col-8">
                                                            <h5 class="card-title" style="margin-top: 1%;">
                                                                '.$row1['product_name'].'</h5>
                                                        </div>
                                                        <div class=" col-3">
                                                            <a href="include/delete_product_from_temp_cart.php?id='.$row['cart_id'].'"><button
                                                                    onclick="return confirm(\'Are you sure you want to delete this product from your cart?\');"
                                                                    style="margin-top: 3px;" type="button"
                                                                    class="btn btn-outline-danger mb-1"><i
                                                                        style="margin-right: 5px;  font-size: 20px;"
                                                                        class="fa-solid fa-trash fa-fw"></i>
                                                                    Delete
                                                                </button></a>
                                                        </div>
                                                    </div>

                                                    <p class="card-text">Description:'.$row1['description'].'</p>
                                                    <p class="card-text">Price: <span style="color: red;">'.$row1['price'].'</span>
                                                        &nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp; Available
                                                        Quantity: <span style="color: red;"> '.$row1['quantity'].'</span></p> <input
                                                        type="hidden" id="x'.$row['cart_id'].'" name="" data-in="" value="'.$row1['price'].'" id="">
                                                    <p class="card-text"></p>



                                                    <div class="row form-group">
                                                        <div class=" col-3">
                                                            <label for="y" style="margin-top: 6%;">Requested
                                                                Quantity</label>
                                                        </div>
                                                        <div class=" col-5">
                                                            <input id="y'.$row['cart_id'].'" type="text" data-in="" min="1" max="5"
                                                                class="form-control" name="r_quantity" required value="2">
                                                            <small>Number shoould be less than available
                                                                quantity</small>
                                                        </div>
                                                        <div class=" col-4"></div>

                                                        <div class=" col-12">
                                                            <br>
                                                            <p>Total Price: <span style="color: red;" id="d'.$row['cart_id'].'"></span> </p>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div><!-- End Card with an image on left -->
                                </div><!-- End Col-12 -->
                                ';
                                echo'
                                <script>
                                    var x'.$row['cart_id'].' = document.getElementById("x'.$row['cart_id'].'");
                                    var y'.$row['cart_id'].' = document.getElementById("y'.$row['cart_id'].'");
                                    var d'.$row['cart_id'].' = document.getElementById("d'.$row['cart_id'].'");
                                    var xstored'.$row['cart_id'].' = x'.$row['cart_id'].'.getAttribute("data-in");
                                    var ystored'.$row['cart_id'].' = y'.$row['cart_id'].'.getAttribute("data-in");
                                    setInterval(function() {
                                        if (x'.$row['cart_id'].' == document.activeElement) {
                                            var temp'.$row['cart_id'].' = x'.$row['cart_id'].'.value;
                                            if (xstored'.$row['cart_id'].' != temp'.$row['cart_id'].') {
                                                xstored'.$row['cart_id'].' = temp'.$row['cart_id'].';
                                                x'.$row['cart_id'].'.setAttribute("data-in", temp);
                                                calculate'.$row['cart_id'].'();
                                            }
                                        }
                                        if (y'.$row['cart_id'].' == document.activeElement) {
                                            var temp'.$row['cart_id'].' = y'.$row['cart_id'].'.value;
                                            if (ystored'.$row['cart_id'].' != temp'.$row['cart_id'].') {
                                                ystored'.$row['cart_id'].' = temp'.$row['cart_id'].';
                                                y'.$row['cart_id'].'.setAttribute("data-in", temp'.$row['cart_id'].');
                                                calculate'.$row['cart_id'].'();
                                            }
                                        }
                                    }, 50);

                                    function calculate'.$row['cart_id'].'() {
                                        d'.$row['cart_id'].'.innerHTML = x'.$row['cart_id'].'.value * y'.$row['cart_id'].'.value;
                                    }
                                    x'.$row['cart_id'].'.onblur = calculate'.$row['cart_id'].';
                                    calculate'.$row['cart_id'].'();
                                </script>';
                            }?>
                            

                            <button
                                style="margin-top: 30px; width:65%; height: 60px; margin-left: 20%;margin-right: 20%;"
                                type="submit" class="btn btn-outline-primary mb-1"><i
                                    style="margin-right: 5px; margin-top: 0px; font-size: 20px;"
                                    class="fa-solid fa-dollar fa-fw "></i>Checkout </button>


                        </div><!-- End Row -->
                    </form>

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
        <!-- Bootstrap Touchspin -->
        <script src="../assets/vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
        <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <!-- Bootstrap Touchspin -->
        
        <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable 
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
        </script>
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
        <script>
        $(document).ready(function() {


            $('.select2-single').select2();

            // Select2 Single  with Placeholder
            $('.select2-single-placeholder').select2({
                placeholder: "Select a Province",
                allowClear: true
            });

            // Select2 Multiple
            $('.select2-multiple').select2();

            // Bootstrap Date Picker
            $('#simple-date1 .input-group.date').datepicker({
                format: 'dd/mm/yyyy',
                todayBtn: 'linked',
                todayHighlight: true,
                autoclose: true,
            });

            $('#simple-date2 .input-group.date').datepicker({
                startView: 1,
                format: 'dd/mm/yyyy',
                autoclose: true,
                todayHighlight: true,
                todayBtn: 'linked',
            });

            $('#simple-date3 .input-group.date').datepicker({
                startView: 2,
                format: 'dd/mm/yyyy',
                autoclose: true,
                todayHighlight: true,
                todayBtn: 'linked',
            });

            $('#simple-date4 .input-daterange').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true,
                todayHighlight: true,
                todayBtn: 'linked',
            });

            // TouchSpin

            $('#touchSpin1').TouchSpin({
                min: 0,
                max: 100,
                boostat: 5,
                maxboostedstep: 10,
                initval: 0
            });

            $('#touchSpin2').TouchSpin({
                min: 0,
                max: 100,
                decimals: 2,
                step: 0.1,
                postfix: '%',
                initval: 0,
                boostat: 5,
                maxboostedstep: 10
            });

            $('#touchSpin3').TouchSpin({
                min: 0,
                max: 100,
                initval: 0,
                boostat: 5,
                maxboostedstep: 10,
                verticalbuttons: true,
            });

            $('#clockPicker1').clockpicker({
                donetext: 'Done'
            });

            $('#clockPicker2').clockpicker({
                autoclose: true
            });

            let input = $('#clockPicker3').clockpicker({
                autoclose: true,
                'default': 'now',
                placement: 'top',
                align: 'left',
            });

            $('#check-minutes').click(function(e) {
                e.stopPropagation();
                input.clockpicker('show').clockpicker('toggleView', 'minutes');
            });

        });
        </script>

    </body>

</html>