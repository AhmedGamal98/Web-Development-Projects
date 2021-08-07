<?php  


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
    <link rel="stylesheet" href="../css/info.css">
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
              <a href="user_list.php"><button class="btn btn-outline-primary" style="width:190px;" id="s1_btn" type="button">عرض قائمة المستخدمين</button></a>
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
	
	$treeid = isset($_GET['treeid']) && is_numeric($_GET['treeid']) ? intval($_GET['treeid']) : 0;
	
	include('connection.php');  
	$sql = $con->prepare("SELECT * FROM tree WHERE tree_id=$treeid");
	$sql->execute();
	$rows = $sql->fetchAll();

	foreach($rows as $pat)
	{
	
	
	?>

      <header>
        <div class="content">
            <div class="container">
                <h1>معلومات عن شجرة <?php echo $pat["tree_name"]; ?></h1><br>
                <div class="row">
                    <div class="col-4">
                      <img src="../img/1.png">
                      <p>الجفاف</p>
                      <p><?php echo $pat["drought"]; ?></p>
                    </div>
                    <div class="col-4">
                      <img src="../img/2.png" alt="">
                      <p>الرعاية</p>
                      <p><?php echo $pat["care"]; ?></p>
                  </div>
                  <div class="col-4">
                      <img src="../img/3.png" alt=""> 
                      <p>الرطوبة</p>
                      <p><?php echo $pat["humidity"]; ?></p>
                  </div>
                  <div class="col-4">
                      <img src="../img/4.png" alt="">
                      <p>الري</p>
                      <p><?php echo $pat["irrigation"]; ?></p>
                    </div>
                    <div class="col-4">
                     <img src="../img/5.png" alt="">
                     <p>طبيعة الأوراق</p>
                      <p><?php echo $pat["papers"]; ?></p>
                  </div>
                  <div class="col-4">
                      <img src="../img/6.png" alt="">
                      <p>البيئة الحضرية</p>
                      <p><?php echo $pat["environment"]; ?></p>
                  </div>
                </div>
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