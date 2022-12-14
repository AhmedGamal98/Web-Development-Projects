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

    if($count2>0 or $count3>0){
       
        header('location: ../login.php?do=admin-s#sign');
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
        <title>Al-Ahsa Heritage - Admin Dashboard</title>
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

                <li class="nav-item ">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Farmers Accounts</span></a>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="announcements.php">
                        <i class="fas fa-fw fa-bullhorn"></i>
                        <span>Announcements</span></a>
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


                            <div class="topbar-divider d-none d-sm-block"></div>
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    
                                    <span class="ml-2 d-none d-lg-inline text-white small">Admin Name</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">

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
                                <li class="breadcrumb-item"><a href="announcements.php">Announcements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Announcement</li>

                            </ol>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <!-- Form Basic -->
                                <div class="card mb-4">
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Edit Announcement</h6>
                                    </div>
                                    <?php
                                        $id = $_GET['id'];
                                        $sql =$con->prepare("SELECT * FROM announcment where ann_id=?");
                                        $sql->execute(array($id)); 
                                        
                                        $row =$sql->fetch();
                                    ?>
                                    <div class="card-body">
                                        <form action="../include/edit_ann.php?id=<?php echo $id?>" method="post">
                                            <div class="form-group">
                                                <label for="exampleInputTitle1">Announcement Title</label>
                                                <input type="text" class="form-control" id="exampleInputTitle1"
                                                    aria-describedby="emailHelp" name="title" placeholder="Enter Title" value="<?php echo $row['ann_title'];?>" required>
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Announcement Message</label>
                                                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" placeholder="Enter Announcement Message"  rows="4" required><?php echo $row['ann_message']?></textarea>
                                            </div>
                                            
                                            
                                            <button style="margin-left: 42%; width:15%" type="submit" class="btn btn-primary ">Edit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>



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
                <br><br><br> <br><br>
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

        <!-- Page level plugins -->
        <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTable').DataTable(); // ID From dataTable 
                $('#dataTableHover').DataTable(); // ID From dataTable with Hover
            });
        </script>
    </body>

</html>