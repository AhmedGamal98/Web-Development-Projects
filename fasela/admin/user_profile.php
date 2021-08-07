<?php  

$do = isset($_GET['do'])?  $_GET['do'] : "Manage";

include('connection.php');

session_start();
if(!isset($_SESSION['password'])){
	
	
	header('Location:../login.php');


}


?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/ico" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/show_profile.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script defer src="../js/all.js"></script>
    <title>فسيلة</title>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" padding-top="20px">
        <div class="container">
          <a class="navbar-brand" href="../index.php"><img src="../img/logo.png" width="150"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <div class="d-flex">
              <a href="index.php"><button class="btn btn-outline-primary"style="width:180px;" id="s1_btn" type="button">الصفحة الرئيسية</button></a>
              <a href="user_list.php"><button class="btn btn-outline-primary" style="width:190px;" id="s_btn" type="button">عرض قائمة المستخدمين</button></a>
              <a href="advisor_list.php"><button class="btn btn-outline-primary " style="width:190px;" id="s1_btn" type="button" style="margin-left: 30px;">عرض قائمة الاستشاريين</button></a>
              <!--<form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="بحث" aria-label="Search">
              </form>-->
              <div class="row" style="margin-right: 20px;">
                <div class="col-1" style="margin-top: 15px;">
                  <a href="../include/logout.php"><i style="font-size: 18px; color:rgba(31, 134, 59, .75);" class="fas fa-sign-out-alt"></i></a> 
                </div>
                <div class="col-7" style="margin-top: 7px;">
                    <a dir="ltr" class="profile_link"  href="#"><h6> User Name  <br> admin   </h6></a>
                  </div>
                  <div class="col-3" style="margin-top: 0;">
                    <img src="../img/avatar.jpeg" class="user" alt="user_pic">
                  </div>
                  
                  
                  
              </div>
            </div>
          </div>
        </div>
      </nav>
	
	<?php
	
	$userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;
	
	include('connection.php');  
	$sql = $con->prepare("SELECT * FROM users WHERE user_id=$userid");
	$sql->execute();
	$rows = $sql->fetchAll();

	foreach($rows as $pat)
	{
	
	
	?>

      <header>
        <div class="content">
            <div class="container"><br>
                <div class="row" style="margin-right: 180px;">
                    <div class="col-12">
                        <!--<img class="user_profile"  src="../img/avatar.jpeg" alt="">-->
						<img class="user_profile" class="img-responsive" src="data:image;base64,<?php echo $pat["image"]; ?>" alt="...">	
                    </div>
                        
                </div><br>
                <br>
                <div class="row" style="margin-right: 80px;">
                    <div class="col-6">
                        <h5>اسم المستخدم :</h5>
                    </div>
                    <div class="col-6">
                        <h6><?php echo $pat["username"]; ?></h6>
                    </div>
                </div><br><br>
                <div class="row" style="margin-right: 80px;">
                    <div class="col-6">
                        <h5>المدينة :</h5>
                    </div>
                    <div class="col-6">
                        <h6><?php echo $pat["city"]; ?></h6>
                    </div>
                </div><br><br>
                <div class="row" style="margin-right: 80px;">
                    <div class="col-6">
                        <h5>الحي :</h5>
                    </div>
                    <div class="col-6">
                        <h6><?php echo $pat["street"]; ?></h6>
                    </div>
                </div><br><br>
                <div class="row" style="margin-right: 80px;">
                    <div class="col-6">
                        <h5>رقم الهاتف :</h5>
                    </div>
                    <div class="col-6">
                        <h6><?php echo "0" . $pat["phone"]; ?></h6>
                    </div>
                </div><br><br>
                <div class="row" style="margin-right: 80px;">
                    <div class="col-6">
                        <h5>البريد الإلكتروني:</h5>
                    </div>
                    <div class="col-6">
                        <h6><?php echo $pat["email"]; ?></h6>
                    </div>
                </div><br><br>

            </div>
          </div>
      </header>
	<?php } ?>
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