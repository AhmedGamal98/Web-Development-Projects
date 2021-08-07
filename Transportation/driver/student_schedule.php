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
    <link href="../css/bootstrap.min.css" rel="stylesheet" >

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
            <a class="nav-link active" aria-current="page" href="#">
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
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Location</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Details</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          $sql = $con->prepare("SELECT
          book.book_id,book.book_flag,book.std_id, student.*
        FROM
        book
        INNER JOIN
          student
        ON
          student.id = book.std_id
        WHERE book.tc_id=? AND student.adress=?");
          $sql->execute([$_SESSION['tc_id'],$_SESSION['adress']]);
          
          $rows =$sql->fetchAll($con::FETCH_ASSOC);
          foreach ($rows as $row){
            if($row['book_flag'] == 1) {     
            echo 
            
              "<tr>
                <th scope='row'>" . $row['id'] . "</th>
                <td>" . $row['username'] . "</td>
                <td>" . $row['email'] . "</td>  
                <td>" . $row['adress'] . "</td>
                <td>0" . $row['phone'] . "</td>     
                <td><a href='../include/driver_details.php?id=".$row['id']."'><button type='button' class='btn btn-outline-primary'> details </button></a></td>       

              </tr>";
            }
         }?>
          
        </tbody>
      </table>

      </table>
      </div>
    </main>


    <script src="../js/feather.min.js"></script>
    <script src="../js/dashboard.js"></script>
  </body>
</html>
