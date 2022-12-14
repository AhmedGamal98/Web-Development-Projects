<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) { 
    header('location: ../login.php?do=should#sign'); 
       
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
    if($count1>0){
       
        header('location: ../login.php?do=user-s#sign');
    }
  }
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Custody Management - Posts</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->


        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="../assets/css/style.css" rel="stylesheet">

    </head>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
                <a href="index.php" class="logo d-flex align-items-center">

                    <span class="d-none d-lg-block">Custody Management</span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->



            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">


                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">

                            <span class="d-none d-md-block dropdown-toggle ps-2">
                                <?php  if (isset($_SESSION['username'])) : ?>
                                <?php echo $_SESSION['username']; ?>
                                <?php endif ?>
                            </span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6><?php  if (isset($_SESSION['username'])) : ?>
                                    <?php echo $_SESSION['username']; ?>
                                    <?php endif ?></h6>
                                <span>User</span>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="..\index.php">
                                    <i class="bi bi-house-door"></i>
                                    <span>Home Page</span>
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="..\include\logout.php">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                            </li>

                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->

                </ul>
            </nav><!-- End Icons Navigation -->

        </header><!-- End Header -->

        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#posts-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-journal-text"></i><span>Posts</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="posts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="index.php">
                                <i class="bi bi-circle"></i><span>All Posts</span>
                            </a>
                        </li>
                        <li>
                            <a href="my_posts.php">
                                <i class="bi bi-circle"></i><span>My Posts</span>
                            </a>
                        </li>

                    </ul>
                </li><!-- End Forms Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#requests-nav" data-bs-toggle="collapse" href="#">
                        <i class=" ri-git-pull-request-line"></i><span>Requests</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="requests-nav" class="nav-content  collapse" data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="requests_list.php">
                                <i class="bi bi-circle"></i><span>Requests List</span>
                            </a>
                        </li>
                        <li>
                            <a href="my_requests.php">
                                <i class="bi bi-circle"></i><span>My Requests</span>
                            </a>
                        </li>

                    </ul>
                </li><!-- End Forms Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="my_items.php">
                        <i class="bi bi-gem"></i>
                        <span>My Items</span>
                    </a>
                </li><!-- End Dashboard Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed" href="users.php">
                        <i class="ri-user-2-fill"></i>
                        <span>Users</span>
                    </a>
                </li><!-- End Dashboard Nav -->




            </ul>

        </aside><!-- End Sidebar-->
        <!-- End Sidebar-->

        <main id="main" class="main">
            <div class="pagetitle">
                <h1>User Profile</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </nav>
            </div>
            <!-- End Page Title -->

            <section class="section">

                <div class="row container m-5">
                    <div class="col-lg-12">
                    <?php if($do == "Manage"){ ?>
                    <?php }elseif($do == "less"){ ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-octagon me-1"></i>
                            Quantity should be more than 1.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php }elseif($do == "more"){ ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-octagon me-1"></i>
                            Quantity should be less than or equal your stock.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php }elseif($do == "should"){ ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-octagon me-1"></i>
                            Please select item to proceed
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                        <!-- Default Card -->
                        <form action="../include/add_new_post.php" method="post">
                            <div class="card container">
                                <div class="card-body container">
                                    <h5 class="card-title text-center">Create New Post</h5>
                                    <div class="row container">
                                        <div class="col-lg-2">

                                            <p style="margin-top:7px ;" class="card-text">Select Item:</p>
                                        </div>
                                        <div class="col-lg-10">

                                            <select class="form-select" name="item_id"
                                                aria-label="Default select example" required>
                                                <option selected hidden disabled value="0">Open this select menu</option>
                                                <?php
                                                    $sql =$con->prepare("SELECT * FROM user_item where user_id = ?AND quantity > 0");
                                                    $sql->execute(array($_SESSION['id']));
                                                    
                                                    
                                                    $rows =$sql->fetchAll($con::FETCH_ASSOC);
                                                        foreach ($rows as $row){
                                                        $sql1 =$con->prepare("SELECT * FROM items where item_id = ?");
                                                        $sql1->execute(array($row['item_id']));
                                                        $row1 =$sql1->fetch();
                                                        echo'
                                                        <option value="'.$row1['item_id'].'">'.$row1['item_id'].' - '.$row1['item_name'].'</option>
                                                        ';
                                                        }
                                                ?>
                                                
                                            </select>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="row container">
                                        <div class="col-lg-2">
                                            <p style="margin-top:7px ;" class="card-text">Quantity:</p>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="number" name="quantity" class="form-control" required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row container">
                                        <div class="col-lg-2">
                                            <p class="card-text">Additional Info:</p>
                                        </div>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" name="info" style="height: 100px"></textarea>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row container text-center">
                                        <div class="col-lg-12">
                                            <button style="margin-left: 60px;" type="submit"
                                                class="btn btn-outline-primary"><i
                                                    style="font-size:18px;margin-top:5px;margin-right:5px;"
                                                    class=" ri-ball-pen-line "></i> Create</button>
                                        </div>

                                    </div>
                                    <br>
                                </div>
                            </div>
                        </form>
                        <!-- End Default Card -->
                        <br>

                    </div>
                </div>
            </section>
        </main>
        <!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="copyright">
                &copy; Copyright <strong><span>Custody Management</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by <a href="#">Khalid & Zyad</a>
            </div>
        </footer>
        <!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/chart.js/chart.min.js"></script>
        <script src="../assets/vendor/echarts/echarts.min.js"></script>
        <script src="../assets/vendor/quill/quill.min.js"></script>
        <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="../assets/vendor/tinymce/tinymce.min.js"></script>


        <!-- Template Main JS File -->
        <script src="../assets/js/main.js"></script>
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