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
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/ico" href="../img/logo2.png" />
    <script defer src=".//js/all.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

    

    <!-- Bootstrap core CSS -->
    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

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
           Hi <?php echo $_SESSION['name']; ?>
        <?php endif ?>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
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
            <a class="nav-link " aria-current="page" href="company_list.php">
              <span data-feather="home"></span>
              Company List
            </a>
          </li>   
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="list"></span>
              Requst List
            </a>
          </li>     
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <?php if($do == "Manage"){ ?>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Requst List</h1>
      </div>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Company Name</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
              $sql =$con->prepare("SELECT * FROM tc");
              $sql->execute();
              
              $rows =$sql->fetchAll($con::FETCH_ASSOC);
                foreach ($rows as $row){
                  if($row['flag'] == 0){
                  echo 
                  
                  "<tr>
                  <td><h5>" . $row['id'] . "</h5></td>
                  <td><h5><a href='../include/com_show.php?id=".$row['id']."'>" . $row['com_name'] . "</a></h5></td>
                  <td><a onclick='return confirm(\"Are you sure you want to accept this company?\")' href='../include/com_accept.php?id=".$row['id']."'><button type='button' class='btn btn-outline-success'> Accept </button></a></td>
                  <td><a onclick='return confirm(\"Are you sure you want to reject this company?\")' href='../include/com_reject.php?id=".$row['id']."'><button type='button' class='btn btn-outline-danger'> Reject </button></a></td>
                  

                </tr>";
                  
              } }?>
          </tbody>
        </table>
      </div>
      <?php }elseif($do == "reject"){ ?>
        <div style="width:610px;color:#2F4F37;background-color:#C5E7CD;text-align: center;padding:15px;border-radius:8px; margin-top:20px;margin-left:220px;" >
            Company rejected and deleted successfully.
        </div><br>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Requst List</h1>
      </div>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Company Name</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
              $sql =$con->prepare("SELECT * FROM tc");
              $sql->execute();
              
              $rows =$sql->fetchAll($con::FETCH_ASSOC);
                foreach ($rows as $row){
                  if($row['flag'] == 0){
                  echo 
                  
                  "<tr>
                    <td><h5>" . $row['id'] . "</h5></td>
                    <td><h5><a href='../include/com_show.php?id=".$row['id']."'>" . $row['com_name'] . "</a></h5></td>
                    <td><a onclick='return confirm(\"Are you sure you want to accept this company?\")' href='../include/com_accept.php?id=".$row['id']."'><button type='button' class='btn btn-outline-success'> Accept </button></a></td>
                    <td><a onclick='return confirm(\"Are you sure you want to reject this company?\")' href='../include/com_reject.php?id=".$row['id']."'><button type='button' class='btn btn-outline-danger'> Reject </button></a></td>
                    

                  </tr>";
                  
              } }?>
          </tbody>
        </table>
      </div>
      <?php }elseif($do == "accept"){ ?>
        <div style="width:610px;color:#2F4F37;background-color:#C5E7CD;text-align: center;padding:15px;border-radius:8px; margin-top:20px;margin-left:220px;" >
            Company accepted and added to company list successfully.
        </div><br>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Requst List</h1>
      </div>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Company Name</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
              $sql =$con->prepare("SELECT * FROM tc");
              $sql->execute();
              
              $rows =$sql->fetchAll($con::FETCH_ASSOC);
                foreach ($rows as $row){
                  if($row['flag'] == 0){
                  echo 
                  
                    "<tr>
                    <td><h5>" . $row['id'] . "</h5></td>
                    <td><h5><a href='../include/com_show.php?id=".$row['id']."'>" . $row['com_name'] . "</a></h5></td>
                    <td><a onclick='return confirm(\"Are you sure you want to accept this company?\")' href='../include/com_accept.php?id=".$row['id']."'><button type='button' class='btn btn-outline-success'> Accept </button></a></td>
                    <td><a onclick='return confirm(\"Are you sure you want to reject this company?\")' href='../include/com_reject.php?id=".$row['id']."'><button type='button' class='btn btn-outline-danger'> Reject </button></a></td>
                    

                  </tr>";
                  
              } }?>
          </tbody>
        </table>
      </div>
      <?php }elseif($do == "reject"){ ?>
        <div style="width:610px;color:#2F4F37;background-color:#C5E7CD;text-align: center;padding:15px;border-radius:8px; margin-top:20px;margin-left:220px;" >
            Company rejected and deleted from company request list successfully.
        </div><br>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Requst List</h1>
      </div>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Company Name</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
              $sql =$con->prepare("SELECT * FROM tc");
              $sql->execute();
              
              $rows =$sql->fetchAll($con::FETCH_ASSOC);
                foreach ($rows as $row){
                  if($row['flag'] == 0){
                  echo 
                  "<tr>
                    <td><h5>" . $row['id'] . "</h5></td>
                    <td><h5><a href='../include/com_show.php?id=".$row['id']."'>" . $row['com_name'] . "</a></h5></td>
                    <td><a onclick='return confirm(\"Are you sure you want to accept this company?\")' href='../include/com_accept.php?id=".$row['id']."'><button type='button' class='btn btn-outline-success'> Accept </button></a></td>
                    <td><a onclick='return confirm(\"Are you sure you want to reject this company?\")' href='../include/com_reject.php?id=".$row['id']."'><button type='button' class='btn btn-outline-danger'> Reject </button></a></td>
                    

                  </tr>";
                  
              } }?>
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
