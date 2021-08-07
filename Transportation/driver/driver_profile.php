<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) { 
    header('location: ../login.php?do=should'); 
       
  } 
  
  

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Driver Profile</title>

    <link rel="icon" type="image/ico" href="../img/logo2.png" />
    <script defer src="../js/all.js"></script>
    
    <script src="../js/bootstrap.bundle.min.js"></script>
    

    <!-- Bootstrap core CSS -->
    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top  flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#" style="font-size:16.5px;"><img src="../img/logo3.png" style="width:23px;"></i> University Transportation</a>
      <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        <?php  if (isset($_SESSION['name'])) : ?>
            <?php echo $_SESSION['name'];  ?>&nbsp;
        <?php endif ?>
        </button>&nbsp;&nbsp;&nbsp;
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><a class="dropdown-item" href="../include/logout.php">Sign out</a></li>
        </ul>
      </div>
   
</header>

<div class="container-fluid">
  <div class="row">
   <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="student_schedule.php">
              <i class="far fa-calendar-alt"></i>
              Student Schedule
            </a>
          </li> 
        </ul>   
      </div>
    </nav>
  </div>
</div>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Profile</h1>
      </div>
      <div class="row gutters-sm">
            <div class="col-md-12 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="col-md-12">
                        <div class="card mb-12">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Driver Name</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?php echo $_SESSION['name'];  ?>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?php echo "0".$_SESSION['phone'];  ?>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Location</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?php echo $_SESSION['adress'];  ?>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?php echo $_SESSION['email'];  ?>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Password</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                *********
                              </div>
                            </div>
                            <hr>
                            
                          </div>
                        </div>
                </div>
                <div class="d-flex flex-column align-items-center text-center">
                  <div class="mt-3">
                    <a href="edit.php"><button type="button" style="width: 200px;" class="btn btn-primary">Edit</button></a>
                  </div><br>
                </div>
                
              </div>
    </main>
  </div>
</div>

    <script src="../js/feather.min.js"></script>
    <script src="../js/dashboard.js"></script>
  </body>
</html>
