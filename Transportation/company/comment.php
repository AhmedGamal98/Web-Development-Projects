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
            <a class="nav-link " aria-current="page" href="student.php">
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
            <a class="nav-link" aria-current="page" href="package.php">
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
            <a class="nav-link active" aria-current="page" href="#">
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
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <?php 
	   $rowCount =0;
      $sql = $con->prepare("SELECT
      comment.* , student.username
     FROM
      comment
     INNER JOIN
      student
     ON
      student.id = comment.std_id

     WHERE comment.tc_id=?");
      $sql->execute([$_SESSION['id']]);
      
      $rows =$sql->fetchAll($con::FETCH_ASSOC);
      $rowCount = $sql->rowCount();
      $sum = 0;
      foreach ($rows as $row){
        $sum = $sum + $row['rate'];
      }

      ?>
        <h1 class="h2">Total Rate For Our company</h1>
      </div>
      <div class="rate">
        <h5>Total Rate in Stars: </h5>
        <?php
		if($rowCount != 0){
		for($x = 1 ; $x <= intval($sum/$rowCount) ; $x++){
          echo "
          <i class='fas fa-star'id='i'></i>
          ";
        }} ?>
        <?php 
		if($rowCount != 0){
		for($x = 1 ; $x<=(5 - intval($sum/$rowCount)) ; $x++){
          echo "
          <i class='far fa-star'id='i'></i>
          ";
        }} ?>
        
        <br>
        <h5>Total Number of People: <span><?php echo $rowCount?></span></h5>
      </div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Comment List</h1>
      </div>
      <div class="table-responsive">
        <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Rate</th>
            <th scope="col">Comment</th>
          </tr>
        </thead>
        <tbody>
        <?php
              
                foreach ($rows as $row){
                  
                  echo 
                  
                    "<tr>
                      <td><h5>" . $row['id'] . "</h5></td>
                      <td>" . $row['username'] . "</td>
                      <td>" . $row['rate'] . "</td>
                      <td>" . $row['comment'] . "</td>
                      
                      

                    </tr>";
                  
               }?>
          
        </tbody>
      </table>

      </div>
    </main>
  </div>
</div>


  <script src="../js/feather.min.js"></script>
    <script src="../js/dashboard.js"></script>
  </body>
</html>
