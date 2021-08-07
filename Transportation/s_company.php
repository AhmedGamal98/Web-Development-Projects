<?php
  
  require_once('include/connection.php');
  session_start(); 
   
 
   
  $do = isset($_GET['do'])? $_GET['do'] : "Manage";

  $search = strtoupper($_POST['search']);
  

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
    
<header>
  <nav class="navbar navbar-expand-md  fixed-top " >
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

<main>
    <div class="container"><br><br><br><br>
        <div style="text-align: center;">
            <h1 id="company">Our Transportation Companies</h1>
            <small >You can book with any company that suits you best.</small>
        </div><br> <br>
        <form action="s_company.php" method="post">
            <div class="input-group d-flex justify-content-center">
              <div class="form-outline">
                <input type="search" id="form1" name="search" class="form-control" style="width: 700px;;" placeholder="Search" />
              </div>
              <button type="submit" style="  background-color: #dc624a ;border:0px;" class="btn btn-primary">
                <i class="fas fa-search"></i>
              </button>
            </div>
      </form><br>
      <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php
      $sql =$con->prepare("SELECT *  FROM tc WHERE flag=1 AND  com_name LIKE '%$search%'");
        $sql->execute();
        $rows =$sql->fetchAll($con::FETCH_ASSOC);
        
        
                foreach ($rows as $row){
                  
                  echo"
                  <div class='col'>
                  <div class='card'>";
                  echo"<img src='data:image/jpg;charset=utf8;base64,".base64_encode($row['img'])."' style='height:250px;' class='card-img-top' alt='company img'>";
                     echo "
                    <div class='card-body'>
                      <h5 class='card-title'>".$row['com_name']."</h5>
                      <p class='card-text'>Location: ".$row['adress']."</p>";
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
                      $sql1->execute([$row['id']]);
                      
                      $rows1 =$sql1->fetchAll($con::FETCH_ASSOC);
                      $rowCount = $sql1->rowCount();
                      $sum = 0;
                      foreach ($rows1 as $row1){
                        $sum = $sum + $row1['rate'];
                      }
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
                        
                  echo"</p>
                  <a href='details.php?id=".$row['id']."'class='btn more'>More details <i class='fas fa-long-arrow-alt-right'></i></a>
                    </div>
                 </div>
                 </div>";
                  
                } 
                  
                    


        ?>
        
        <!--
           <p class="card-text">Rate: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p><br>
                <a href="details.php" class="btn more">More details <i class="fas fa-long-arrow-alt-right"></i></a></p>-->
      
      </div><br><br><br>
        
            <hr class="featurette-divider">
    </div>
    <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2021 Transportation, Inc. </p>
  </footer>

</main>

<script src="js/bootstrap.bundle.min.js"></script>

      
</body>
</html>
