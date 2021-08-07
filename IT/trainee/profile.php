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
  <title>Trainee - Dashboard</title>
  <link href="../dash-assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../dash-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../dash-assets/css/ruang-admin.min.css" rel="stylesheet">
  <script
    src="../dash-assets/js/font-awesome.js"
    
></script>
<script src="../dash-assets/js/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <style>
    #i{
        display: inline;
        }
    #i{
        margin-right: 3px;
        font-size: 22px;
        color: #ffee00ef;
        }
  </style>
  <style>
        .rating{
      border: none;
      float: left;
  }
  
  .rating > input{
      display: none;
  }
  
  .rating > label:before{
      content: '\f005';
      font-family: FontAwesome;
      margin: 5px;
      font-size: 1.5rem;
      display: inline-block;
      cursor: pointer;
  }
  
  .rating > .half:before{
      content: '\f089';
      position: absolute;
      cursor: pointer;
  }
  
  
  .rating > label{
      color: #ddd;
      float: right;
      cursor: pointer;
  }
  
  .rating > input:checked ~ label,
  .rating:not(:checked) > label:hover, 
  .rating:not(:checked) > label:hover ~ label{
      color: #ffee00ef;
  }
  
  .rating > input:checked + label:hover,
  .rating > input:checked ~ label:hover,
  .rating > label:hover ~ input:checked ~ label,
  .rating > input:checked ~ label:hover ~ label{
      color: #ffee00ef;
  }
      </style>
  
  <script>
    let star = document.querySelectorAll('input');
  
  
    for (let i = 0; i < star.length; i++) {
      star[i].addEventListener('click', function() {
        i = this.value;
  
  
      });
  }
    </script>
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
        <li class="nav-item">
          <a class="nav-link" href="tickets.php">
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
                <?php  if (isset($_SESSION['tr_name'])) : ?>
                  Hi <?php echo $_SESSION['tr_name']; ?>
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
        
        <div class="container mr-0" id="container-wrapper">
        <?php if($do == "success"){ ?>
          <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Profile Edited Successfully
            </div>
        
          <?php } ?>
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="tickets.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
          </div>
          
          <div class="col-lg-9 ml-3" style="text-align: center">
            <!-- Form Basic -->
            <div class="card mb-6">
              <div class="card-header py-4">
                <br>
                <h6 class="m-0 font-weight-bold text-primary">My Profile</h6>
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                            <strong>ID:</strong>
                    </div>
                    <div class="col-lg-6">
                            <p>  <?php echo $_SESSION['tr_id'];?></p>
                    </div>
                    <div class="col-lg-6">
                            <strong>Name:</strong>
                    </div>
                    <div class="col-lg-6">
                            <p> <?php echo $_SESSION['tr_name'];?></p>
                    </div>
                    <div class="col-lg-6">
                            <strong>Email:</strong>
                    </div>
                    <div class="col-lg-6">
                            <p>  <?php echo $_SESSION['email'];?></p>
                    </div>
                    <div class="col-lg-6">
                            <strong>Phone Number:</strong>
                    </div>
                    <div class="col-lg-6">
                            <p>  0<?php echo $_SESSION['phone'];?></p>
                    </div>
                    <div class="col-lg-6">
                        <strong>Number of Tickets:</strong>
                </div>
                <div class="col-lg-6">
                        <p> <?php $sql = "SELECT count(*) FROM ticket WHERE tr_id=?"; 
                                  $result = $con->prepare($sql); 
                                  $result->execute([$_SESSION['tr_id']]); 
                                  $num = $result->fetchColumn(); 
                                  echo $num;
                                  ?> 
                        </p>
                </div>
                    <div class="col-lg-6">
                        <strong>My Rate:</strong>
                </div>
                <div class="col-lg-6">
                <?php
                    $sql = "SELECT rate FROM rate WHERE tr_id=?"; 
                    $result = $con->prepare($sql); 
                    $result->execute([$_SESSION['tr_id']]);
                    $row = $result->fetch();
                    if($row != FALSE){
                    for($x = 1 ; $x <= $row['rate'] ; $x++){
                          echo "
                          <i class='fas fa-star'id='i'></i>
                          ";
                        } ?>
                        <?php 
                    
                    for($x = 1 ; $x<=(5 - $row['rate']) ; $x++){
                          echo "
                          <i class='far fa-star'id='i'></i>
                          ";
                        }
                       }else{
                        echo"<i class='far fa-star'id='i'></i><i class='far fa-star'id='i'></i><i class='far fa-star'id='i'></i><i class='far fa-star'id='i'></i><i class='far fa-star'id='i'></i>";
                      }
                       ?>
                        
                </div>
                <br><br><br>
                    <div class="col-lg-12">
                <a class="btn  btn-outline-primary" style="padding: 10px;display:inline;" href="edit.php">
                        Edit Profile
                </a>
              </div><br><br>
                </div>
                
              </div>
              
            </div>
            <br><br><br><br><br>
          </div>
          <br><br><br>


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
                  <a href="../includes/logout_tr.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>
          

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer --><br><br><br>
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

</body>

</html>