<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) { 
    header('location: ../login.php?do=should#sign'); 
       
  } 
  elseif (isset($_SESSION['email']) && isset($_SESSION['password'])){
    $email = $_SESSION['email'];
    $pass = $_SESSION['password'];

    $sql1 =$con->prepare("SELECT *  FROM admin WHERE email=? AND password=?");
    $sql1->execute(array($email,$pass));
    $row1 =$sql1->fetch();
    $count1 = $sql1->rowCount();

    $sql2 =$con->prepare("SELECT *  FROM farmer WHERE email=?  AND password=?");
    $sql2->execute(array($email,$pass));
    $row2 =$sql2->fetch();
    $count2 = $sql2->rowCount();

    $sql3 =$con->prepare("SELECT *  FROM customer WHERE email=?  AND password=?");
    $sql3->execute(array($email,$pass));
    $row3 =$sql3->fetch();
    $count3 = $sql3->rowCount();

    if($count1>0 or $count2>0){
       
        header('location: ../login.php?do=customer-s');
    }
  }
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="../assets/img/logo.jpg" rel="icon">
        <title>Al-Ahsa Heritage - Customer Dashboard</title>
        <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/ruang-admin.min.css" rel="stylesheet"> 
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
        <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="../assets/css/all.min.csss" rel="stylesheet">
        <style>
        .is_hidden {
            display: none;
        }
        </style>
    </head>

    <body id="page-top">
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <div class="sidebar-brand-icon">
                        <img src="../assets/img/logo.jpg">
                    </div>
                    <div class="sidebar-brand-text mx-1">Al-Ahsa Heritage</div>
                </a>
                <hr class="sidebar-divider my-0">
                <br>
                <div class="sidebar-heading">
                    Dashboard
                </div>



                <li class="nav-item">
                    <a class="nav-link" href="index.php">

                        <i class="fas fa-fw fa-calendar"></i>

                        <span>Visits List</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="requests-bills.php">
                        <i class="fa fa-fw fa-code-pull-request"></i>
                        <span>Bills & Orders<span></a>
                </li>

                <hr class="sidebar-divider">
                <div class="sidebar-heading">
                    Opertaion
                </div>

                <li class="nav-item">
                    <a class="nav-link" href="../assets/javascript:void(0);" data-toggle="modal"
                        data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt "></i>
                        <span>Log out</span>
                    </a>
                </li>

            </ul>
            <!-- Sidebar -->
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <!-- TopBar -->
                    <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                        <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link " href="cart.php">
                                    <i style="margin-right: 5px; margin-top: 10px; font-size: 20px;"
                                        class="fa-solid fa-cart-shopping fa-fw"></i>

                                    <?php
                                        $sql =$con->prepare("SELECT * FROM cart where customer_id=?");
                                        $sql->execute(array($_SESSION['id']));
                                        $rows =$sql->fetchAll($con::FETCH_ASSOC);
                                        $count = $sql->rowCount();
                                    ?>
                                    <span class="badge badge-danger badge-counter"><?php echo $count;?></span>
                                </a>

                            </li>
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <span class="ml-2 d-none d-lg-inline text-white small">
                                        <?php  if (isset($_SESSION['fname'])) : ?>
                                        <?php echo $_SESSION['fname'] ." ". $_SESSION['lname']; ?>
                                        <?php endif ?>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="customer_profile.php">
                                        <i class="fa-solid fa-id-card fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="../index.php">
                                        <i class="fas fa-home fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Home Page
                                    </a>


                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../assets/javascript:void(0);" data-toggle="modal"
                                        data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- Topbar -->

                    <!-- Container Fluid-->
                    <div class="container-fluid" id="container-wrapper">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="index.php">Farmers List</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Farmer Profile</li>
                            </ol>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class=" mb-4">
                                    <div class="  py-3 d-flex flex-row align-items-center justify-content-between">
                                        <div class="col-10 ">
                                            <h6 class="m-0 font-weight-bold " style="color: #456b41">Farmer Profile</h6>
                                        </div>
                                        <div class="col-2 ">
                                            <a href="add_visit.php"><button style="margin-top: 15px; width: 150px;"
                                                    type="button" class="btn btn-outline-primary mb-1">Farm
                                                    Tour</button></a>
                                        </div>
                                    </div>
                                    <br>

                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- Default Card -->
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Farmer Name</h5>
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <p class="card-text">Phone Number:</p>
                                                        </div>
                                                        <div class="col-lg-10">
                                                            <p class="card-text"><a
                                                                    href="tel:123-456-7890">+9660000000</a></p>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <p class="card-text">Email:</p>
                                                        </div>
                                                        <div class="col-lg-10">
                                                            <p class="card-text"><a
                                                                    href="mailto:someone@example.com">ex@example.com</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <p class="card-text">Street Name:</p>
                                                        </div>
                                                        <div class="col-lg-10">
                                                            <p class="card-text">Saudi Arabia</p>
                                                        </div>
                                                    </div>
                                                    <br>

                                                </div>
                                            </div>
                                            <!-- End Default Card -->
                                            <br>


                                        </div>
                                    </div>
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
                                        <div class="col-6">
                                            <div class="card mb-3 cards">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="../assets/img/logo.jpg"
                                                            style="height: 100%; width: 100%"
                                                            class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8 ">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Product Name</h5>

                                                            <p class="card-text">Description:Lorem ipsum dolor sit, amet
                                                                consectetur adipisicing elit.
                                                                Et iure eaque nesciunt provident maiores error officia,
                                                                maxime eum nihil ex. </p>
                                                            <p class="card-text">Price: 50</p>
                                                            <p class="card-text">Available Quantity: 5</p>
                                                            <form action="cart.php">

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
                                        <div class="col-6">
                                            <div class="card mb-3 cards">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="../assets/img/logo.jpg"
                                                            style="height: 100%; width: 100%"
                                                            class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8 ">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Product Name</h5>

                                                            <p class="card-text">Description:Lorem ipsum dolor sit, amet
                                                                consectetur adipisicing elit.
                                                                Et iure eaque nesciunt provident maiores error officia,
                                                                maxime eum nihil ex. </p>
                                                            <p class="card-text">Price: 50</p>
                                                            <p class="card-text">Available Quantity: 5</p>
                                                            <form action="cart.php">

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
                                        <div class="col-6">
                                            <div class="card mb-3 cards">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="../assets/img/logo.jpg"
                                                            style="height: 100%; width: 100%"
                                                            class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8 ">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Product Name</h5>

                                                            <p class="card-text">Description:Lorem ipsum dolor sit, amet
                                                                consectetur adipisicing elit.
                                                                Et iure eaque nesciunt provident maiores error officia,
                                                                maxime eum nihil ex. </p>
                                                            <p class="card-text">Price: 50</p>
                                                            <p class="card-text">Available Quantity: 5</p>
                                                            <form action="cart.php">

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
                                        <div class="col-6">
                                            <div class="card mb-3 cards">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="../assets/img/logo.jpg"
                                                            style="height: 100%; width: 100%"
                                                            class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8 ">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Product Name</h5>

                                                            <p class="card-text">Description:Lorem ipsum dolor sit, amet
                                                                consectetur adipisicing elit.
                                                                Et iure eaque nesciunt provident maiores error officia,
                                                                maxime eum nihil ex. </p>
                                                            <p class="card-text">Price: 50</p>
                                                            <p class="card-text">Available Quantity: 5</p>
                                                            <form action="cart.php">

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
                                        <div class="col-6">
                                            <div class="card mb-3 cards">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="../assets/img/logo.jpg"
                                                            style="height: 100%; width: 100%"
                                                            class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8 ">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Product Name</h5>

                                                            <p class="card-text">Description:Lorem ipsum dolor sit, amet
                                                                consectetur adipisicing elit.
                                                                Et iure eaque nesciunt provident maiores error officia,
                                                                maxime eum nihil ex. </p>
                                                            <p class="card-text">Price: 50</p>
                                                            <p class="card-text">Available Quantity: 5</p>
                                                            <form action="cart.php">

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
                                        <div class="col-6">
                                            <div class="card mb-3 cards">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="../assets/img/logo.jpg"
                                                            style="height: 100%; width: 100%"
                                                            class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8 ">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Product Name</h5>

                                                            <p class="card-text">Description:Lorem ipsum dolor sit, amet
                                                                consectetur adipisicing elit.
                                                                Et iure eaque nesciunt provident maiores error officia,
                                                                maxime eum nihil ex. </p>
                                                            <p class="card-text">Price: 50</p>
                                                            <p class="card-text">Available Quantity: 5</p>
                                                            <form action="cart.php">

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
                                        <div class="col-6">
                                            <div class="card mb-3 cards">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="../assets/img/logo.jpg"
                                                            style="height: 100%; width: 100%"
                                                            class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8 ">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Product Name</h5>

                                                            <p class="card-text">Description:Lorem ipsum dolor sit, amet
                                                                consectetur adipisicing elit.
                                                                Et iure eaque nesciunt provident maiores error officia,
                                                                maxime eum nihil ex. </p>
                                                            <p class="card-text">Price: 50</p>
                                                            <p class="card-text">Available Quantity: 5</p>
                                                            <form action="cart.php">

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
                                        <div class="col-6">
                                            <div class="card mb-3 cards">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="../assets/img/logo.jpg"
                                                            style="height: 100%; width: 100%"
                                                            class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8 ">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Product Name</h5>

                                                            <p class="card-text">Description:Lorem ipsum dolor sit, amet
                                                                consectetur adipisicing elit.
                                                                Et iure eaque nesciunt provident ahme maiores error
                                                                officia, maxime eum nihil ex. </p>
                                                            <p class="card-text">Price: 50</p>
                                                            <p class="card-text">Available Quantity: 5</p>
                                                            <form action="cart.php">

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

                                    </div><!-- End Row -->

                                </div>
                            </div>
                        </div>
                        <!--Row-->



                        <!-- Modal Logout -->
                        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to logout?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-primary"
                                            data-dismiss="modal">Cancel</button>
                                        <a href="../include/logout.php" class="btn btn-primary">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!---Container Fluid-->
                </div>
                <!-- Footer -->
                <footer style="color: #d2a01e ; font-size:28px;" class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>copyright &copy; <script>
                                document.write(new Date().getFullYear());
                                </script> - developed by
                                <b><a style="color: #ffb700;" href="">Al-Ahsa Heritage</a></b>
                            </span>
                        </div>
                    </div>
                </footer>
                <!-- Footer -->
            </div>
        </div>

        <!-- Scroll to top -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <script src="../assets/vendor/jquery/jquery.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="../assets/js/ruang-admin.min.js"></script>
        <script src="../assets/vendor/chart.js/Chart.min.js"></script>
        <script src="../assets/js/demo/chart-area-demo.js"></script>
        <script src="../assets/js/all.min.js"></script>
        <!-- Page level plugins -->
        <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
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
    </body>

</html>