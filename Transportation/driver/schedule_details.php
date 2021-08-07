<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) { 
    header('location: ../login.php?do=should'); 
       
  } 
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  

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
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="driver_profile.php">Profile</a></li>
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
            <a class="nav-link active" aria-current="page" href="student_schedule.php">
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
        <h1 class="h2">Student List </h1>
      </div>

      <div class="table-responsive">
        <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Day</th>
            <th scope="col">Time of Entry</th>
            <th scope="col">Time of Exit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Sunday</td>
            <td><?php echo $_SESSION['1_in']; ?></td>
            <td><?php echo $_SESSION['1_out']; ?></td>           
          </tr>
          <tr>
            <td>Monday</td>
            <td><?php echo $_SESSION['2_in']; ?></td>
            <td><?php echo $_SESSION['2_out']; ?></td>  
          </tr>
          <tr>
            <td>Tuesday</td>
            <td><?php echo $_SESSION['3_in']; ?></td>
            <td><?php echo $_SESSION['3_out']; ?></td>
          </tr>
          <tr>
            <td>Wednesday</td>
            <td><?php echo $_SESSION['4_in']; ?></td>
            <td><?php echo $_SESSION['4_out']; ?></td>
          </tr>
          <tr>
            <td>Thursday</td>
            <td><?php echo $_SESSION['5_in']; ?></td>
            <td><?php echo $_SESSION['5_out']; ?></td>
          </tr>
        </tbody>
      </table>

      </div>
    </main>


    <script src="../js/feather.min.js"></script>
    <script src="../js/dashboard.js"></script>
  </body>
</html>
