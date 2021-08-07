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
    <link rel="stylesheet" href="../css/profile.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script defer src="../js/all.js"></script>
    <title>فسيلة</title>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" style="padding-top: 10px;">
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
              <!--<form class="form-inline" style="margin-right: 350px;">
                <input class="form-control mr-sm-2" type="search" placeholder="بحث" aria-label="Search">
              </form>-->
              <div class="row" style="margin-right: 30px;">
                <div class="col-1" style="margin-top: 10px;">
                  <a href="../include/logout.php"><i style="font-size: 25px; color:rgba(31, 134, 59, .75);" class="fas fa-sign-out-alt"></i></a> 
                </div>
                <div class="col-7" style="margin-top: 7px;">
                    
                  </div>
                  <div class="col-3" style="margin-top: 0;">
                    
                  </div>
                  
                  
                  
              </div>
            </div>
          </div>
        </div>
      </nav>
	
	<?php if($do == "Manage"){
		  
		  
		  include('connection.php');  
			$sql = $con->prepare("SELECT * FROM users WHERE user_id=$id");
			$sql->execute();
			$rows = $sql->fetchAll();

			foreach($rows as $pat)
			{


			?>


      <header>
        <div class="content">
          <div class="container"><br>
              <div class="row" style="margin-right: 60px;">
                  <div class="col-5">
                      <img class="user" alt="user_pic" src="data:image;base64,<?php echo $pat["image"]; ?>" alt="...">
                  </div>
                  <div class="col-7"><br>
                      <h6>الملف الشخصي</h6>
                      <p><?php echo $pat["username"]; ?></p>
                  </div>
              </div><br>
            <form action="?do=Update" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="name" value="<?php echo $pat["username"]; ?>" placeholder="اسم المستخدم" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="city" value="<?php echo $pat["city"]; ?>" placeholder="المدينة"  required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="street" value="<?php echo $pat["street"]; ?>" placeholder="الحي"  required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="phone" value="<?php echo "0" . $pat["phone"]; ?>" placeholder="رقم الجوال"  required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-9">
                      <input class="form-control form-control-lg" name="image" type="file" placeholder="" aria-label=".form-control-lg example" accept="image/*">
                    </div>
                  </div>
                <div class="row mb-3">
                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" value="<?php echo $pat["email"]; ?>" placeholder=" البريد الإلكتروني"  required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-9">
					<input type="hidden" name="old-password" placeholder="كلمه السر" value="<?php echo $pat["password"]; ?>">  
                    <input type="password" class="form-control" name="password" placeholder="كلمه السر">
                  </div>
                </div>
                
                
                <button type="submit" style="float: left;" class="btn btn-primary">تحديث بياناتك</button>
              </form>
          </div>
        </div>
        
      </header>
	
	
	<?php } ?>
	
	<?php }elseif($do == "Update"){
	
				
			include('connection.php');  
     	//echo "<div class='container'>";
		
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			//Get Varaiables from Post Method
			
			$name    = $_POST["name"];
			$city     = $_POST["city"];
			$street    = $_POST["street"];
			$phone  = $_POST["phone"];
			$email    = $_POST["email"];
			
			if(empty($_POST['password'])){
				
				$password = $_POST['old-password'];
				
			}else{
				
				$password = sha1($_POST['password']);
			}
			
			
			
				$stmt2 = $con->prepare("SELECT * FROM users WHERE email = ? AND user_id != ?");
				
				$stmt2->execute(array($email , $id));
				
				$count = $stmt2->rowCount();
				
				if($count > 0){
					
					
				 //include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM users WHERE user_id= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
				 
				
					
		  
		   			
			echo '<header style="height:1000px"><div class="content" style="height:1003px">
			<div class="container" style="margin-top:30px;margin-bottom:70px"><div dir="rtl" class="alert alert-info">هذه البيانات موجودة من قبل
					
		   </div></div><div class="clearfix"></div>
          <div class="container"><br>
              <div class="row" style="margin-right: 60px;">
                  <div class="col-5">
					  <img class="user" alt="user_pic" src="data:image;base64,' . $row["image"] . '" alt="...">
                  </div>
                  <div class="col-7"><br>
                      <h6>الملف الشخصي</h6>
                      <p>' . $row["username"] . '</p>
                  </div>
              </div><br>
            <form action="?do=Update" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="name" value="' . $row["username"] . '" placeholder="اسم المستخدم" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="city" value="' . $row["city"] . '" placeholder="المدينة"  required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="street" value="' . $row["street"] . '" placeholder="الحي"  required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="phone" value="' . '0' . $row["phone"] . '" placeholder="رقم الجوال"  required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-9">
                      <input class="form-control form-control-lg" name="image" type="file" placeholder="" aria-label=".form-control-lg example" accept="image/*">
                    </div>
                  </div>
                <div class="row mb-3">
                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" value="' . $row["email"] . '" placeholder=" البريد الإلكتروني"  required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-9">
					<input type="hidden" name="old-password" placeholder="كلمه السر" value="' .  $row["password"] . '">  
                    <input type="password" class="form-control" name="password" placeholder="كلمه السر">
                  </div>
                </div>
                
                
                <button type="submit" style="float: left;" class="btn btn-primary">تحديث بياناتك</button>
              </form>
          </div>
        </div></header>';
					
					
				}else{
					
					
					      if($_FILES['image']['tmp_name'] == FALSE){


							  $stmt = $con->prepare("UPDATE users SET username = ?, email = ? , password = ? , city = ?, street = ?, phone = ?  WHERE user_id = ?");
							  $stmt->execute(array($name , $email , $password , $city , $street , $phone , $id));	 
							  

							 }else{


								 $image = addslashes($_FILES['image']['tmp_name']);
								 //$name = addslashes($_FILES['image']['name']);
								 $image = file_get_contents($image);
								 $image = base64_encode($image);
								 //saveimage($name , $image);
							  
							  
							  
							  $stmt = $con->prepare("UPDATE users SET username = ?, email = ? , password = ? , city = ?, street = ?, phone = ? , image = ?  WHERE user_id = ?");
							  $stmt->execute(array($name , $email , $password , $city , $street , $phone , $image , $id)); 
							  


							 }
					

					// echo success message
					
					
				 include('connection.php');  						  
				 $stmt = $con->prepare("SELECT * FROM users WHERE user_id= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				$_SESSION['user_id'] = $row['user_id'];
                $_SESSION['name'] = $row['username'];
                $_SESSION['email'] =$row['email'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['type'] = $row['type'];
                $_SESSION['city'] = $row['city'];
                $_SESSION['street'] = $row['street'];
                $_SESSION['phone'] = $row['phone'];
                $_SESSION['image'] =$row['image'];
	
					

					 
			echo '<header style="height:1000px"><div class="content" style="height:1003px">
			<div class="container" style="margin-top:30px;margin-bottom:70px"><div dir="rtl" class="alert alert-info">تم تحديث بياناتك بنجاح
					
		   </div></div><div class="clearfix"></div>
          <div class="container"><br>
              <div class="row" style="margin-right: 60px;">
                  <div class="col-5">
					  <img class="user" alt="user_pic" src="data:image;base64,' . $row["image"] . '" alt="...">
                  </div>
                  <div class="col-7"><br>
                      <h6>الملف الشخصي</h6>
                      <p>' . $row["username"] . '</p>
                  </div>
              </div><br>
            <form action="?do=Update" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="name" value="' . $row["username"] . '" placeholder="اسم المستخدم" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="city" value="' . $row["city"] . '" placeholder="المدينة"  required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="street" value="' . $row["street"] . '" placeholder="الحي"  required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="phone" value="' . '0' . $row["phone"] . '" placeholder="رقم الجوال"  required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-9">
                      <input class="form-control form-control-lg" name="image" type="file" placeholder="" aria-label=".form-control-lg example" accept="image/*">
                    </div>
                  </div>
                <div class="row mb-3">
                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" value="' . $row["email"] . '" placeholder=" البريد الإلكتروني"  required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-9">
					<input type="hidden" name="old-password" placeholder="كلمه السر" value="' .  $row["password"] . '">  
                    <input type="password" class="form-control" name="password" placeholder="كلمه السر">
                  </div>
                </div>
                
                
                <button type="submit" style="float: left;" class="btn btn-primary">تحديث بياناتك</button>
              </form>
          </div>
        </div></header>';
					
				}
				
			
		}else{
			
			echo "<div class='alert alert-danger'>لا تستطيع الدخول لهذه الصفحة</div>";
			
		}	
				
	
	} ?>
	
	
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