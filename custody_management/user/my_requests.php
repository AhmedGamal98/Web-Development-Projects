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

        <title>Custody Management - My Requests</title>
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
                    <a class="nav-link " data-bs-target="#requests-nav" data-bs-toggle="collapse" href="#">
                        <i class=" ri-git-pull-request-line"></i><span>Requests</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="requests-nav" class="nav-content  collapse show" data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="requests_list.php">
                                <i class="bi bi-circle"></i><span>Requests List</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="active">
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

        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Requests</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">My Requests</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                    <?php if($do == "Manage"){ ?>
               
                <?php }elseif($do == "add"){ ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-1"></i>
                    Request has been added successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                
                <?php } ?>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Users List</h5>


                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Request ID</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Item</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                          $sql =$con->prepare("SELECT * FROM requests where from_user_id=?");
                                          $sql->execute(array($_SESSION['id']));
                                          
                                          $rows =$sql->fetchAll($con::FETCH_ASSOC);
                                            foreach ($rows as $row){
                                            $sql1 =$con->prepare("SELECT * FROM users where user_id=?");
                                            $sql1->execute(array($row['to_user_id']));                                           
                                            $row1 =$sql1->fetch();

                                            $sql2 =$con->prepare("SELECT * FROM items where item_id=?");
                                            $sql2->execute(array($row['item_id']));                                           
                                            $row2 =$sql2->fetch();
                                              if($row['status'] == 0){
                                                    echo'
                                                    <tr>
                                                    <th scope="row">'.$row['request_id'].'</th>
                                                    <td>@'.$row1['username'].'</td>
                                                    <td>'.$row2['item_name'].'</td>
                                                    <td>'.$row['quantity'].'</td>
                                                    <td><span
                                                            style="background-color: rgb(235, 235, 3); color: white;padding:7px;border-radius:25px;">In
                                                            Progress</span> </td>
                                                </tr>
                                                    ';
                                              }
                                              elseif($row['status'] == 1){
                                                echo'
                                                    <tr>
                                                    <th scope="row">'.$row['request_id'].'</th>
                                                    <td>@'.$row1['username'].'</td>
                                                    <td>'.$row2['item_name'].'</td>
                                                    <td>'.$row['quantity'].'</td>
                                                    <td><span
                                                    style="background-color: rgb(2, 148, 2); color: white;padding:7px;border-radius:25px;">Accepted</span>
                                            </td>
                                                </tr>
                                                    ';
                                              }
                                              elseif($row['status'] == -1){
                                                echo'
                                                    <tr>
                                                    <th scope="row">'.$row['request_id'].'</th>
                                                    <td>@'.$row1['username'].'</td>
                                                    <td>'.$row2['item_name'].'</td>
                                                    <td>'.$row['quantity'].'</td>
                                                    <td><span
                                                    style="background-color: rgb(231, 0, 0); color: white;padding:7px;border-radius:25px;">Rejected</span>
                                            </td>
                                                </tr>
                                                    ';
                                              }
                                            }
                                    ?>
                                       
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->

                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="copyright">
                &copy; Copyright <strong><span>Custody Management</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by <a href="#">Khalid & Zyad</a>
            </div>
        </footer><!-- End Footer -->

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

    </body>

</html>