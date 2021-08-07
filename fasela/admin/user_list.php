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
    <link rel="stylesheet" href="../css/user_list.css">
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
              <a href="#"><button class="btn btn-outline-primary" style="width:190px;" id="s_btn" type="button">عرض قائمة المستخدمين</button></a>
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

      <header>
		  
		 <?php if($do == "Manage"){ ?> 
		  
        <div class="content">
            <div class="container">
              <h1 style="text-align: center; color:#fff; font-size:60px;">قائمة المستخدمين</h1><br>
              <table class="table">
                <thead style="background-color: rgba(31, 134, 59, .7); color:#fff;">
                  <tr>
                    <th scope="col">كود المستخدم</th>
                    <th scope="col">اسم المستخدم</th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                  </tr>
                </thead>
                <tbody style="background-color: #fff;">
				 <?php
										
	                //$user = "user";
					include('connection.php');  
					$sql = $con->prepare("SELECT * FROM users WHERE type='user'");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				  ?>	
					  <tr>
						<td><?php echo $pat["user_id"]; ?></td>
						<td><?php echo $pat["username"]; ?></td>
						<td><a href="user_profile.php?userid=<?php echo $pat["user_id"]; ?>"><button class="btn btn-outline-primary active" id="s1_btn" type="button">عرض الصفحة الشخصية</button></a> </td>
						<td><a href="?do=Delete&userid=<?php echo $pat["user_id"]; ?>"><button class="btn btn-outline-primary active" id="s1_btn" type="button">حذف</button></a> </td>
					  </tr>
					<?php } ?>
                </tbody>
              </table>
            </div>
          </div>
		  
		  <?php }elseif($do == "Delete"){
	
	
	      $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;
		
		 include('connection.php');  						  
		 $stmt = $con->prepare("SELECT * FROM users WHERE user_id= ?");
		 $stmt->execute(array($userid));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				$stmtT = $con->prepare("DELETE FROM users WHERE user_id = ?");

				$stmtT->execute(array($userid));
				
			

				echo '<div class="container" style="margin-top:30px;margin-bottom:70px"><div dir="rtl" class="alert alert-info">تم حذف هذا المستخدم بنجاح
					
					</div></div>';
				echo '<div class="content">
            <div class="container">
              <h1 style="text-align: center; color:#fff; font-size:60px;">قائمة المستخدمين</h1><br>
              <table class="table">
                <thead style="background-color: rgba(31, 134, 59, .7); color:#fff;">
                  <tr>
                    <th scope="col">كود المستخدم</th>
                    <th scope="col">اسم المستخدم</th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                  </tr>
                </thead>
                <tbody style="background-color: #fff;">';
				
										
	                //$user = "user";
					include('connection.php');  
					$sql = $con->prepare("SELECT * FROM users WHERE type='user'");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

					  echo '<tr>
						<td>' . $pat["user_id"] . '</td>
						<td>' . $pat["username"] . '</td>
						<td><a href="user_profile.php?userid=' . $pat["user_id"] . '"><button class="btn btn-outline-primary active" id="s1_btn" type="button">عرض الصفحة الشخصية</button></a> </td>
						<td><a href="?do=Delete&userid=' . $pat["user_id"] . '"><button class="btn btn-outline-primary active" id="s1_btn" type="button">حذف</button></a> </td>
					  </tr>';
					}
                echo '</tbody>
              </table>
            </div>
          </div>';
				
				
			}else{
				
				echo "<div class='alert alert-danger'>لا تستطيع الدخول لهذه الصفحة</div>";
				
			}
	
	       
		  
		   } ?>
        
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