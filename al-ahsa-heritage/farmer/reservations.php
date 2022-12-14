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

    if($count1>0 or $count3>0){
       
        header('location: ../login.php?do=farmer-s');
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
        <title>Al-Ahsa Heritage - Farmer Dashboard</title>
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
                        <i class="fa-brands fa-fw fa-product-hunt"></i>
                        <span>Products</span></a>

                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="requests.php">
                        <i class="fa fa-fw fa-code-pull-request"></i>
                        <span>Bills</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">

                        <i class="fas fa-fw fa-calendar"></i>

                        <span>Reservations</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="announcements.php">
                        <i class="fas fa-fw fa-bullhorn"></i>
                        <span>Announcements<span></a>
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
                                    <img class="img-profile rounded-circle" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($_SESSION['img']);?>"
                                        style="max-width: 60px">
                                    <span class="ml-2 d-none d-lg-inline text-white small">
                                        <?php  if (isset($_SESSION['fname'])) : ?>
                                        <?php echo $_SESSION['fname'] ." ". $_SESSION['lname']; ?>
                                        <?php endif ?>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="farmer_profile.php">
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
                                <li class="breadcrumb-item active" aria-current="page">Reservations List</li>
                            </ol>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-12">
                            <?php if($do == "Manage"){ ?>
                                <?php }elseif($do == "reject"){ ?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    Reservation has been rejected successfully.
                                </div>

                                <?php }elseif($do == "accept"){ ?>
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    Reservation has been accepted successfully.
                                </div>
                                

                                <?php } ?>
                                <div class="card mb-4">
                                    <div
                                        class=" card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <div class="col-10 ">
                                            <h6 class="m-0 font-weight-bold " style="color: #456b41">Reservations List
                                            </h6>
                                        </div>
                                        <div class="col-2 ">

                                        </div>
                                    </div>
                                    <br>

                                    <div class="table-responsive p-3">
                                        <table class="table align-items-center table-flush table-hover"
                                            id="dataTableHover">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Customer ID</th>
                                                    <th>Date & Time</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                            <?php
                                                    $sql =$con->prepare("SELECT * FROM reservation where farmer_id=?");
                                                    $sql->execute(array($_SESSION['id']));
                                                    
                                                    $rows =$sql->fetchAll($con::FETCH_ASSOC);
                                                        foreach ($rows as $row){
                                                        if($row['status'] == 0){
                                                        echo 
                                                        
                                                        '<tr>
                                                        <td>'.$row['res_id'].'</td>
                                                        <td>'.$row['customer_id'].'</td>
                                                        
                                                        <td>'.$row['date'].'</td>
                                                        <td><span class="badge badge-warning">In Progress</span></td>
    
                                                        <td>
                                                            <a href="../include/accept_res.php?id='.$row['res_id'].'"
                                                                onclick="return confirm(\'Are you sure you want to accept this reservation?\');"><button
                                                                    type="button"
                                                                    class="btn btn-outline-success mb-1">Accept</button></a>
                                                            <a href="../include/reject_res.php?id='.$row['res_id'].'"
                                                                onclick="return confirm(\'Are you sure you want to reject this reservation?\');"><button
                                                                    type="button"
                                                                    class="btn btn-outline-danger mb-1">Reject</button></a>
                                                        </td>
                                                    </tr>';
                                                        
                                                    }elseif($row['status'] == 1){
                                                        echo 
                                                        
                                                            '<tr><td>'.$row['res_id'].'</td>
                                                            <td>'.$row['customer_id'].'</td>
                                                            
                                                            <td>'.$row['date'].'</td>
                                                            <td><span class="badge badge-success">Accepted</span></td>
        
                                                            <td>
        
                                                            </td>
                                                            </tr>';
                                                    }
                                                    elseif($row['status'] == -1){
                                                    echo 
                                                        
                                                        '<tr>
                                                        <td>'.$row['res_id'].'</td>
                                                        <td>'.$row['customer_id'].'</td>
                                                        
                                                        <td>'.$row['date'].'</td>
                                                        <td><span class="badge badge-danger">Rejected</span></td>

                                                        <td>

                                                        </td>
                                                    </tr>';
                                                    } }?>
                                                

                                            </tbody>
                                        </table>
                                    </div>
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
    </body>

</html>