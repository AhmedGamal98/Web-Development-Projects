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
    <title>Company Dashboard</title>

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
          <li><a class="dropdown-item" href="company_profile.php">Profile</a></li>
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
            <a class="nav-link" aria-current="page" href="driver.php">
              <i class="fas fa-list"></i>
              Driver List
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="student.php">
              <i class="fas fa-list"></i>
              Student List
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="std_request.php">
              <i class="fas fa-list"></i>
              Request List
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <i class="fas fa-list"></i>
              Package List
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="student_schedule.php">
              <i class="far fa-calendar-alt"></i>
              Student Schedule
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="comment.php">
              <i class="far fa-comments"></i>
               Comments
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="suggestion.php">
              <i class="far fa-comment-dots"></i>
               Complaints and Suggestions
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="pay_schedule.php">
              <i class="far fa-calendar-alt"></i>
              Payment Schedule
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <?php if($do == "Manage"){ ?>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Package List</h1>
        <a href="add_package.php"><button type="button" style="background-color: #3a5d70 ;border:0px;" class="btn btn-primary"><i class="fas fa-plus-square"></i> Add</button></a>
      </div>
      <div class="table-responsive">
        <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Location</th>
            <th scope="col">Duration</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php
              $sql =$con->prepare("SELECT * FROM package WHERE tc_id =?");
              $sql->execute([$_SESSION['id']]);
              
              $rows =$sql->fetchAll($con::FETCH_ASSOC);
                foreach ($rows as $row){
                  
                  echo 
                  
                    "<tr>
                      <th scope='row'>" . $row['id'] . "</th>
                      <td>" . $row['name'] . "</td>
                      <td>" . $row['price'] . " SAR</td>
                      <td>" . $row['adress'] . "</td>
                      <td>" . $row['duration'] . "</td>
                      <td><a onclick='return confirm(\"Are you sure you want to delete this package?\")' href='../include/delete_package.php?id=".$row['id']."'><button type='button' class='btn btn-outline-danger'> Delete </button></a></td>
                      

                    </tr>";
                  
               }?>
          
        </tbody>
      </table>

      </div>
      <?php }elseif($do == "delete"){ ?>
        <div style="width:610px;color:#2F4F37;background-color:#C5E7CD;text-align: center;padding:15px;border-radius:8px; margin-top:20px;margin-left:220px;" >
            Package deleted successfully.
        </div><br>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Package List</h1>
        <a href="add_package.php"><button type="button" style="background-color: #3a5d70 ;border:0px;" class="btn btn-primary"><i class="fas fa-plus-square"></i> Add</button></a>
      </div>
      <div class="table-responsive">
        <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Location</th>
            <th scope="col">Duration</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php
              $sql =$con->prepare("SELECT * FROM package WHERE tc_id =?");
              $sql->execute([$_SESSION['id']]);
              
              $rows =$sql->fetchAll($con::FETCH_ASSOC);
                foreach ($rows as $row){
                  
                  echo 
                  
                    "<tr>
                      <th scope='row'>" . $row['id'] . "</th>
                      <td>" . $row['name'] . "</td>
                      <td>" . $row['price'] . " SAR</td>
                      <td>" . $row['adress'] . "</td>
                      <td>" . $row['duration'] . "</td>
                      <td><a onclick='return confirm(\"Are you sure you want to delete this package?\")' href='../include/delete_package.php?id=".$row['id']."'><button type='button' class='btn btn-outline-danger'> Delete </button></a></td>
                      

                    </tr>";
                  
               }?>
          
        </tbody>
      </table>

      </div>

      <?php }elseif($do == "success"){ ?>
        <div style="width:610px;color:#2F4F37;background-color:#C5E7CD;text-align: center;padding:15px;border-radius:8px; margin-top:20px;margin-left:220px;" >
            Package added successfully.
        </div><br>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Package List</h1>
        <a href="add_package.php"><button type="button" style="background-color: #3a5d70 ;border:0px;" class="btn btn-primary"><i class="fas fa-plus-square"></i> Add</button></a>
      </div>
      <div class="table-responsive">
        <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Location</th>
            <th scope="col">Duration</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php
              $sql =$con->prepare("SELECT * FROM package WHERE tc_id =?");
              $sql->execute([$_SESSION['id']]);
              
              $rows =$sql->fetchAll($con::FETCH_ASSOC);
                foreach ($rows as $row){
                  
                  echo 
                  
                    "<tr>
                      <th scope='row'>" . $row['id'] . "</th>
                      <td>" . $row['name'] . "</td>
                      <td>" . $row['price'] . " SAR</td>
                      <td>" . $row['adress'] . "</td>
                      <td>" . $row['duration'] . " Month(s)</td>
                      <td><a onclick='return confirm(\"Are you sure you want to delete this package?\")' href='../include/delete_package.php?id=".$row['id']."'><button type='button' class='btn btn-outline-danger'> Delete </button></a></td>
                      

                    </tr>";
                  
               }?>
          
        </tbody>
      </table>

      </div>
      <?php } ?>
    </main>
  </div>
</div>


    <script src="../js/feather.min.js"></script>
    <script src="../js/dashboard.js"></script>
  </body>
</html>
