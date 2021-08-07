<?php
  
  require_once('../includes/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) { 
    header('location: ../sign_in.php?do=should'); 
       
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
  <link href="../dash-assets/img/logo.svg" rel="icon">
  <title>Employee - Dashboard</title>
  <link href="../dash-assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../dash-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../dash-assets/css/ruang-admin.min.css" rel="stylesheet">
  <link href="../dash-assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
        <div class="sidebar-brand-icon">
          <img src="../dash-assets/img/logo.svg">
        </div>
        <div class="sidebar-brand-text mx-3">IT Ticket System</div>
      </a>
      <hr class="sidebar-divider my-0"><br>
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i style="font-size: 18px;" class="fas fa-ticket-alt"></i>
          <span style="font-size: 18px;">Tickets</span></a>
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
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="../dash-assets/img/profile.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white">
                <?php  if (isset($_SESSION['emp_name'])) : ?>
                  Hi <?php echo $_SESSION['emp_name']; ?>
                <?php endif ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="profile.php">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Profile
                    </a>
                <a class="dropdown-item" href="../index.php"> 
                  <i class="fas fa-home fa-sm fa-fw mr-2 text-gray-400"></i>
                    Home
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
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
        <?php if($do == "add"){ ?>
          <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Ticket Created Successfully
            </div>
        
          <?php } ?>
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ticktes</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ticktes</li>
            </ol>
          </div>

          
          <div class="col-lg-12">
            <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tickets</h6>
                <a href="add.php" class="btn  btn-outline-primary" ><i class="fas fa-plus"></i> New Ticket</a>
              </div>
              <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                  <thead class="thead-light">
                    <tr>
                      <th>Ticket ID</th>
                      <th>Ticket Type</th>
                      <th>Request Rate</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Ticket ID</th>
                      <th>Ticket Type</th>
                      <th>Request Rate</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>

                  <?php
                    $sql =$con->prepare("SELECT * FROM ticket WHERE emp_id=?");
                    $sql->execute([$_SESSION['emp_id']]);
                    
                    $rows =$sql->fetchAll($con::FETCH_ASSOC);
                      foreach ($rows as $row){
                        
                        echo 
                        
                          "<tr>
                            <td><a href='show_tk.php?tk_id=".$row['tkt_id']."'>" . $row['tkt_id'] . "</a></td>
                            <td>".$row['tkt_type']."</td>";
                            if($row['tkt_rate']=="High"){
                              echo"<td><a class='btn  btn-danger btn-sm'style='color:#fff'>High</a></td>";
                            }
                            else{
                              echo"<td><a class='btn  btn-success btn-sm'style='color:#fff'>Low</a></td>";
                            }
                            echo"<td>".$row['tkt_status']."</td>";
                            echo"
                           
                            
                          </tr>";
                        
                     }?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Log Out</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="../includes/logout_emp.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>&copy; Copyright <strong><span>Taibah</span></strong>. All Rights Reserved
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

  <script src="../dash-assets/vendor/jquery/jquery.min.js"></script>
  <script src="../dash-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../dash-assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../dash-assets/js/ruang-admin.min.js"></script>
  <script src="../dash-assets/vendor/chart.js/Chart.min.js"></script>
  <script src="../dash-assets/js/demo/chart-area-demo.js"></script>  

  <script src="../dash-assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../dash-assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
</body>

</html>