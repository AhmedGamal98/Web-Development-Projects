<?php
  
  require_once('include/connection.php');
  session_start(); 
   
 
   
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";
  $id =$_GET['id'];

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transportation</title>

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" type="image/ico" href="img/logo2.png" />
<script defer src="js/all.js"></script>
<link rel="stylesheet" href="css/font-awesome.css" /> 
<script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="js/jquery-1.12.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>  
<script src="js/login.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .more{
        width: 180px; 
        border-radius:15px;
        padding:10px; 
        color: #dc624a; 
        border:1px solid #dc624a;
        margin-left: 65px;
      }
      .more:hover{
        background-color: #db8b50; 
        color: #fff;
        border:1px solid #db8b50;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/main1.css" rel="stylesheet">
  </head>
  <body>
<body>
  <header>
    <nav class="navbar navbar-expand-md  fixed-top ">
      <div class="container">
        <a class="navbar-brand" style="margin-right: 370px;" href="index.php">
          <div class="row">
            <div class="col-3">
              <img src="img/logo3.png" style="width:40px; margin-top:6px"></i>
            </div>
            <div class="col-8">
              <strong style='display:block;margin-bottom:0px; margin-top:16px;'>University Transportation</strong><small style='margin-left:27px;font-size:15px;'></small>
            </div>
          </div>
        </a>
  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0" style="padding-bottom:12px;">
                  <li class="nav-item ">
                    <a class="nav-link"   aria-current="page" href="index.php"><i class="fas fa-home"></i> Home</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" aria-current="page" href="index.php#about"><i class="fas fa-address-card"></i> About </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" style="color:#dc624a;" aria-current="page" href="company.php"><i class="fas fa-building"></i> Companies</a>
                  </li>
                  <?php
                if (!isset($_SESSION['username'])  && !isset($_SESSION['flag'])) { 
                  echo"
                  <li class='nav-item'>
                  <a class='nav-link' href='login.php'><i class='fas fa-sign-in-alt'></i> Sgin in</a>
                </li>
                
                  ";    
                }elseif(isset($_SESSION['username'])  && isset($_SESSION['flag'])){
                 echo" <li class='nav-item'>
                  <div class='dropdown'>
                    <button class='btn dropdown-toggle' type='button' id='dropdownMenuButton' data-bs-toggle='dropdown' aria-expanded='false' style='color: #fff; margin-top:2px; font-size:18px'>
                    <i class='fas fa-user'></i>  ".$_SESSION['username']."
                    </button>
                    <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                      <li><a class='dropdown-item' href='profile.php'><i class='fas fa-user'></i> Profile</a></li>
                      <li><a class='dropdown-item' href='include/logout_std.php'><i class='fas fa-sign-out-alt'></i> Sign out</a></li>
                    </ul>
                  </div>
              </li>";
                }
                ?>
                  <li>
                  </li>
                </ul>
          </div>
      </div>
      </div>
    </nav>
      </header>
      <br><br><br><br>
      <main>
          
        <div class="container">
        <?php if($do == "Manage"){ ?>
            <h1 style="color: #dc624a ;">Profile Settings</h1>
        <?php }elseif($do == "success"){ ?>
        <div style="width:610px;color:#2F4F37;background-color:#C5E7CD;text-align: center;padding:15px;border-radius:8px; margin-top:20px;margin-left:220px;" >
            Profile Updated successfully.
        </div><br>
        <h1 style="color: #dc624a ;">Profile Settings</h1>
        <?php }elseif($do == "permission"){ ?>
        <div style="width:750px;color:#2B060A;background-color:#F2A3AA;text-align: center;padding:15px;border-radius:8px; margin-top:20px;margin-left:220px;" >
            You can not book with another company. You are already book with Transporation Company
        </div><br>
        <h1 style="color: #dc624a ;">Profile Settings</h1>
        <?php } ?>
          <div class="card mb-3" >
            <?php
              $sql =$con->prepare("SELECT *  FROM tc WHERE id=?");
              $sql->execute(array($id));
              $row =$sql->fetch();
              

              $rowCount =0;
                      $sql1 = $con->prepare("SELECT
                      comment.* , student.username
                     FROM
                      comment
                     INNER JOIN
                      student
                     ON
                      student.id = comment.std_id
                
                     WHERE comment.tc_id=?");
                      $sql1->execute([$id]);
                      
                      $rows1 =$sql1->fetchAll($con::FETCH_ASSOC);
                      $rowCount = $sql1->rowCount();
                      $sum = 0;
                      foreach ($rows1 as $row1){
                        $sum = $sum + $row1['rate'];
                      }
            ?>    
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img'])?>"style="height: 450px;" class="card-img-top" alt="company img">
            <div class="card-body">
              <h3 class="card-title"><?php echo $row['com_name']?></h3>
              <p class="card-text">Location: <?php echo $row['adress']?></p>
              <?php
               echo"<p class='card-text'>Rate:";
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
                     }}
              ?><br><br>
              <h5>Package List</h5>
              <div class="table-responsive">
                <table class="table table-striped">
                <thead>
                  <tr>
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
                  $sql->execute([$id]);
                  
                  $rows =$sql->fetchAll($con::FETCH_ASSOC);
                    foreach ($rows as $row){
                      
                      echo 
                      
                        "<tr>
                          
                          <td>" . $row['name'] . "</td>
                          <td>" . $row['price'] . " SAR</td>
                          <td>" . $row['adress'] . "</td>
                          <td>" . $row['duration'] . " Month(s)</td>
                          <td><a href='book.php?p_id=".$row['id']."&tc_id=".$id."' class='btn more' style='width: 140px; border-radius:15px; padding:10px;'>Book Now <i class='fas fa-long-arrow-alt-right'></i></a></td>
                          

                        </tr>";
                      
                  }?>
                  
                </tbody>
              </table>
              <div class="card-body">
                <h5 class="card-title">Comments</h5>
              </div>
              <?php
                  $sql =$con->prepare("SELECT 
                  comment.* , student.username
                  
                  FROM comment
                  INNER JOIN
                  student
                  ON student.id = comment.std_id
                  WHERE tc_id =?");
                  $sql->execute([$id]);
                  
                  $rows =$sql->fetchAll($con::FETCH_ASSOC);
                    foreach ($rows as $row){
                      
                      echo 
                      
                        "<div class='card w-100'>
                        <div class='card-body'>
                          <h5 class='card-title'>User Name: ".$row['username']."</h5>
                          <p class='card-text'>Commnet: ".$row['comment']." </p>
                          <p class='card-text'>Date: ".$row['date']."</p>
                        </div>
                      </div><br>";
                      
                  }?>
              
        
              </div>
            </div>
          
        
</div>
        </div>
        <hr class="featurette-divider">

          <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2021 Transportation, Inc. </p>
          </footer>
      </main>
</body>
</html>