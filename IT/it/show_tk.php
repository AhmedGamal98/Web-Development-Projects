<?php
  
  require_once('../includes/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) { 
    header('location: ../sign_in.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  $t_id = $_GET['tk_id'];
  $sql =$con->prepare("SELECT * FROM ticket WHERE tkt_id=?");
  $sql->execute([$t_id]);
  $row =$sql->fetch();


  $sql1 =$con->prepare("SELECT * FROM employee WHERE emp_id=?");
  $sql1->execute([$row['emp_id']]);
  $row1 =$sql1->fetch();

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
  <title>IT - Dashboard</title>
  <link href="../dash-assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../dash-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../dash-assets/css/ruang-admin.min.css" rel="stylesheet">


  
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
      <li class="nav-item ">
        <a class="nav-link" href="trainees.php">
          <i style="font-size: 18px;" class="fas fa-users"></i>
          <span  style="font-size: 18px;">Trainees</span></a>
      </li>
      <br>
      <li class="nav-item active">
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
                <?php  if (isset($_SESSION['it_name'])) : ?>
                  Hi <?php echo $_SESSION['it_name']; ?>
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
        <div class="container" id="container-wrapper">
        <?php if($do == "assign"){ ?>
          <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Assigned Successfully
          </div>
        <?php }if($do == "res"){ ?>
          <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Respond Sent Successfully
          </div>
        
          <?php } ?>
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="trainees.php">Home</a></li>
              <li class="breadcrumb-item">Ticktes</li>
              <li class="breadcrumb-item active" aria-current="page">Ticket Information</li>
            </ol>
          </div>

          <div class="col-lg-11" style="text-align: center">
            <!-- Form Basic -->
            <div class="card mb-6">
              <div class="card-header py-4">
                <h6 class="m-0 font-weight-bold text-primary">Ticket Information</h6>
              </div>
              <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                                <strong>Ticket ID:</strong>
                        </div>
                        <div class="col-lg-4">
                                <p>  <?php echo $row['tkt_id']?></p>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                                <strong>Ticket Type:</strong>
                        </div>
                        <div class="col-lg-4">
                                <p>  <?php echo $row['tkt_type']?></p>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                                <strong>Request Rate:</strong>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-2">
                        <?php
                      if($row['tkt_rate']=="High"){
                              echo"<p style='background-color: rgba(255, 0, 0, 0.842); color: #fff; text-align: center'>  High</p>";
                            }
                            else{
                              echo"<p style='background-color: #41BB3E; color: #fff; text-align: center'>  Low</p>";
                            }
                        ?>
                        </div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                                <strong>Ticket Status:</strong>
                        </div>
                        <div class="col-lg-4">
                        <p>  <?php echo $row['tkt_status']?></p>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                                <strong>Assigned To:</strong>
                        </div>
                        <div class="col-lg-4">
                                <p>  
                                <?php
                                if($row['tr_id']== NULL){
                                  echo"Not Assgined";
                                 }
                                else{
                                  $sql2 =$con->prepare("SELECT tr_name FROM trainee WHERE tr_id=?");
                                  $sql2->execute([$row['tr_id']]);
                                  $row2 =$sql2->fetch();
                                  echo $row2['tr_name'];
                                }
                        ?>
                                </p>
                        </div>
                        <div class="col-lg-2"></div>
                        <hr class="embed-responsive" style="height: 2px;">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                                <strong>Employee Name:</strong>
                        </div>
                        <div class="col-lg-4">
                                <p>  <?php echo $row1['emp_name']?></p>
                        </div>  
                        <div class="col-lg-2"></div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <strong>Employee Phone:</strong>
                        </div>
                        <div class="col-lg-4">
                            <p>  0<?php echo $row1['emp_phone']?></p>
                         </div>
                         <div class="col-lg-2"></div>
                         <hr class="embed-responsive" style="height: 2px;">
                         <div class="col-lg-1"></div>
                         <div class="col-lg-10">
                            <p style="color:#106eea;font-size: 18px"><?php echo $row['description']?></p>
                    </div> <div class="col-lg-1"></div>
                  <hr class="embed-responsive" style="height: 2px;">
                  <div class="col-lg-1"></div>
                    <div class="col-lg-10" style="color:rgb(31, 145, 31);font-size: 18px">
                            <p><?php
                            if($row['respond']!= NULL){
                              echo $row['respond'];
                            }else{
                              echo "No Respond Yet";
                            }
                              ?></p>
                    </div><div class="col-lg-1"></div> <br><br> <br><br> <br><br>
                    <div class="col-lg-2"></div>
                          <div class="col-lg-4">
                              <a class="btn  btn-outline-primary" style="padding: 10px;display:inline;" href="javascript:void(0);" data-toggle="modal" data-target="#respond">
                                  <i class="fas fa-marker mr-1"></i> Respond
                                </a>
                          </div>
                          <br><br>
                          <div class="col-lg-4">
                              <a class="btn  btn-outline-primary" style="padding: 10px;display:inline;" href="javascript:void(0);" data-toggle="modal" data-target="#assign">
                                  <i class="fas fa-sign mr-1"></i> Assign To
                                </a>
                          </div>
                          <div class="col-lg-2"></div>
                          
                      
                      
                    <br><br>
                    </div>
                    
                    
                    
                    
                    
                    
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
                  <a href="../includes/logout_it.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>


          
          <div class="modal fade" id="respond" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Respond</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                        
                <form action="../includes/respond_it.php?id=<?php echo $t_id;?>" style="padding:15px;" method='POST'>
                            
                            <div class="form-group row">
                                <p>Enter Your Respond:</p>
                                <?php
                                  if($row['respond'] != NULL){
                                    echo "<textarea class='form-control' name='respond' id='exampleFormControlTextarea1' rows='3'>".$row['respond']."</textarea>";
                                  }else{
                                    echo "<textarea class='form-control' name='respond' id='exampleFormControlTextarea1' rows='3'></textarea>";
                                  }
                              ?>
                              
                            </div><br>
                              
                            <div class="form-group row">
                                <p>Change Status:</p>
                                    <select class="form-control" name="status" id="exampleFormControlSelect1">
                                            <option value="In Process">In Process</option>
                                            <option value="Accepted">Accepted</option>
                                            <option value="Canceled">Canceled</option>
                                            
                                    </select>
                            
                          </div><br>
                            <button type="submit" class="btn btn-primary">Done</button>
                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                
                             
                          </form>
                        
                    </div>
              </div>
            </div>
          </div>


          <div class="modal fade" id="assign" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Assign To</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                        
                        <form action="../includes/assign.php?t_id=<?php echo $t_id;?>" method="POST" style="padding:15px;">

                            
                          <div class="form-group row">
                              <p>Choose Employee:</p>
                                  <select class="form-control" name="assign" id="exampleFormControlSelect1">
                                  <?php 
                                  $sql =$con->prepare("SELECT * FROM trainee");
                                  $sql->execute();
                                 
                                  $rows =$sql->fetchAll($con::FETCH_ASSOC);
                                    foreach ($rows as $row5){
                                      
                                      echo"<option value='".$row5['tr_id']."'>".$row5['tr_name']."                  </option>";
                                    }
                                  ?>
                                  </select>
                          
                        </div><br>
                          <button type="submit" class="btn btn-primary">Done</button>
                          <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                              
                           
                        </form>
                        
                    </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <br><br>
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