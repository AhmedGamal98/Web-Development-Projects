<?php  

$do = isset($_GET['do'])?  $_GET['do'] : "Manage";

include('connection.php');

session_start();
if(!isset($_SESSION['password'])){
	
	
	header('Location:../login.php');


}


$id = $_SESSION['user_id'];
$name =  $_SESSION['name'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$type = $_SESSION['type'];
$city = $_SESSION['city'];
$street = $_SESSION['street'];
$phone = $_SESSION['phone'];
$image = $_SESSION['image'];



?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/ico" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/tree.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script defer src="../js/all.js"></script>
    <title>فسيلة</title>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" style="padding-top: 20px;">
        <div class="container">
          <a class="navbar-brand" href="../index.php"><img src="../img/logo.png" width="150"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <div class="d-flex">
              <a href="index.php"><button class="btn btn-outline-primary"style="width:180px;" id="s_btn" type="button">الصفحة الرئيسية</button></a>
              <a href="request_list.php"><button class="btn btn-outline-primary" id="s1_btn" type="button">طلباتي</button></a>
              <a href="rate.php"><button class="btn btn-outline-primary active" id="s1_btn" type="button" style="margin-left: 30px;">تقييم تجربتي</button></a>
              <!--<form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="بحث" aria-label="Search">
              </form>-->
              <div class="row" style="margin-right: 20px;">
                <div class="col-1" style="margin-top: 15px;">
                  <a href="../include/logout.php"><i style="font-size: 18px; color:rgba(31, 134, 59, .75);" class="fas fa-sign-out-alt"></i></a> 
                </div>
                <div class="col-7" style="margin-top: 7px;">
                    <a dir="ltr" class="profile_link"  href="profile.php"><h6> <?php echo $name; ?>  <br> user   </h6></a>
                  </div>
                  <div class="col-3" style="margin-top: 0;">
                   <img class="user" alt="user_pic" src="data:image;base64,<?php echo $image; ?>" alt="...">
                  </div>
                  
                  
                  
              </div>
            </div>
          </div>
        </div>
      </nav>

      <header>
        <div class="content">
          <div class="container">
            <h1 style="text-align: center; color:#fff; font-size:45px;">أنواع النباتات الملائمة لمنطقة الرياض</h1><br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
				<?php
										   
				include('connection.php');  
				$sql = $con->prepare("SELECT * FROM tree");
				$sql->execute();
				$rows = $sql->fetchAll();

				foreach($rows as $pat)
				{

			  ?>
                <div class="col">
                  <div class="card">
                    <img style="height:250px" class="img-responsive" src="data:image;base64,<?php echo $pat["image"]; ?>" alt="...">	
                    <div class="card-body">
                      <h5 class="card-title"><a style="text-decoration: none;" href="tree_info.php?treeid=<?php echo $pat["tree_id"]; ?>"><?php echo $pat["tree_name"]; ?></a> </h5>
                      <small><?php echo $pat["tree_length"] . " cm"; ?></small>
                      <p class="card-text"><?php echo $pat["description"]; ?></p>
                    </div>
                  </div>
                </div>
                
                <?php } ?>
                  
              </div>
          </div>
        </div>
        
      </header>
      <footer style="color: white;">
        <div class="container-fluid">
          <div class="row">
            
            <div class="col-6">
              <a>Contact us: <i class="far fa-envelope"></i> Fasilah@gmail.com  </a><br>
              <a>  Fasilah@ <i class="fab fa-twitter"></i> </a>
            </div>
            <div class="col-6" >
              <a style="margin-right: 330px;" >FASILAH.COM</a>
            </div>
          </div>
        </div>
        
      </footer>
</body>
</html>