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
    if($count2>0){
       
        header('location: ../login.php?do=admin-s#sign');
    }
  }
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  $id = $_GET['id'];
  

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Custody Management - Item Details</title>
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
                                <span>Admin</span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="..\index.php">
                                <i class="bi bi-house-door"></i>
                                    <span>Home Page</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="..\insert_user.php#sign">
                                <i class="bi bi-person-plus"></i>
                                    <span>Insert User</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="..\insert_item.php#sign">
                                <i class="bi bi-cart-plus"></i>
                                    <span>Insert Item</span>
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
                    <a class="nav-link collapsed" href="index.php">
                        <i class="ri-user-2-fill"></i>
                        <span>Users</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="items.php">
                        <i class="bi bi-gem"></i>
                        <span>Items</span>
                    </a>
                </li><!-- End Dashboard Nav -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="posts.php">
                        <i class="bi bi-journal-text"></i>
                        <span>Posts</span>
                    </a>
                </li><!-- End Dashboard Nav -->



            </ul>

        </aside><!-- End Sidebar-->

        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Item Details</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="items.php">Items</a></li>
                        <li class="breadcrumb-item active">Item Details</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section dashboard">
                <!-- Card with an image on top -->
                <?php
                $sql =$con->prepare("SELECT * FROM items where item_id = ?");
                $sql->execute(array($id));
                      
                $row =$sql->fetch();
          ?>
                <div class="card">
                    <img src="<?php echo'data:image/jpeg;base64,'.base64_encode($row['img']).'';?>"
                        style="height: 40%; width: 30%; margin: 0 auto" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['item_name'];?></h5>
                        <p class="card-text">All Item Details Will Be Here</p>
                        <p class="card-text">Description: <?php echo $row['description'];?> </p>
                        <p class="card-text">Quantity: <?php echo $row['quantity'];?></p>
                        
                        <p class="card-text">Created Date: <?php echo $row['creation_date'];?></p>
                        <div class="col-lg-4">


                        </div>
                    </div>
                </div><!-- End Card with an image on top -->




                <div class="col-lg-12">
                    <!-- Recent Activity -->
                    <div class="card">
                        

                        <div class="card-body">
                            <h5 class="card-title">Activity</h5>

                            <div class="activity">
                            <?php
                              $sql10 =$con->prepare("SELECT * FROM requests where status =? AND item_id=?");
                              $sql10->execute(array(1,$id));                    
                              $rows10 =$sql10->fetchAll($con::FETCH_ASSOC);
                              foreach ($rows10 as $row){
                              $sql11 =$con->prepare("SELECT username FROM users where user_id = ?");
                              $sql11->execute(array($row['from_user_id']));                    
                              $row11 =$sql11->fetch();

                              $sql12 =$con->prepare("SELECT username FROM users where user_id = ?");
                              $sql12->execute(array($row['to_user_id']));                    
                              $row12 =$sql12->fetch();

                              echo'
                                    <div class="activity-item d-flex">
                                    <div class="activite-label">'.$row['date'].'</div>
                                    <i class="bi bi-circle-fill activity-badge text-info align-self-start"></i>
                                    <div class="activity-content">
                                        @'.$row12['username'].' Sent '.$row['quantity'].' items to @'.$row11['username'].'
                                    </div>
                                </div>
                              ';
                              }
                            ?>

                                

                                

                            </div>

                        </div>
                    </div><!-- End Recent Activity -->

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