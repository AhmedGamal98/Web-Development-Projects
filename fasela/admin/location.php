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
    <link rel="stylesheet" href="../css/location.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script defer src="../js/all.js"></script>
	<script defer src="../js/bootstrap.js"></script>
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

      <header>
		 
		  <?php if($do == "Manage"){  ?>
		  
        <div class="content">
            <h1>إضافة موقع</h1><br>
            <form action="?do=Insert" method="post" enctype="multipart/form-data">
              <div class="row mb-3">
                <div class="col-sm-5">
                  <select class="form-select form-select-lg mb-3 chosen" name="city"  id="option" aria-label=".form-select-lg example">
                            
                            <option>حي المصيف</option>
                            <option>حي العزيزية</option>
                            <option> حي أحد</option>
                            
                          </select>
                </div>
                <div class="col-sm-5">
                    <input class="form-control form-control-lg" name="city1" type="text" value="الرياض" aria-label=".form-control-lg example" required disabled>
                </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-9">
                <input class="form-control form-control-lg" name="image" style="width: 620px;" type="file" placeholder="" aria-label=".form-control-lg example" accept="image/*" required>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-10">
                  <input class="form-control form-control-lg" name="axis" type="text" placeholder="إحداثيات الموقع" aria-label=".form-control-lg example" required>
              </div>
            </div>
          <div class="row mb-3">
            <div class="col-sm-10">
                <textarea name="desc" id="" cols="83" rows="3" placeholder="الوصف " required></textarea>
            </div>
          </div>
              
              <button type="submit" name="save" style="float: left;" class="btn btn-primary">أضف الموقع</button>
              
            </form>
        </div>
        
		  <?php }elseif($do == "Insert"){ 
	
	
	
	     if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			include('connection.php');  	
			
			$city = $_POST["city"];
			$axis = $_POST["axis"];
			$desc    = $_POST["desc"];
			//$city1    = $_POST["city1"]; 
			
			
			
			if(isset($_POST['save'])){
							 
							 
				 if(getimagesize($_FILES['image']['tmp_name']) == FALSE){


					 echo "Please select an image";

				 }else{


					 $image = addslashes($_FILES['image']['tmp_name']);
					 //$name = addslashes($_FILES['image']['name']);
					 $image = file_get_contents($image);
					 $image = base64_encode($image);
					 //saveimage($name , $image);


				 }
			 }
			
			
			//Validate Form By Server site
			
			
			$formErrors = array();
			
			if(empty($city)){
				
				$formErrors[] = "City Must Be Written";
				
			}
			if(empty($axis)){
				
				$formErrors[] = "Axis Must Be Written";
				
			}
			if(empty($desc)){
				
				$formErrors[] = "Description Must Be Written";
				
			}
			
			if(empty($image)){
				
				$formErrors[] = "Photo Must Be Selected";
				
			}
			
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				
						$stmt = $con->prepare("INSERT INTO location(city , street , coordinates , description , 	image) VALUES(:city, :street, :axis, :desc , :image)");

					$stmt->execute(array(

						'city' => 'الرياض',
						'street' => $city,
						'axis'    => $axis,
						'desc' => $desc,
						'image' => $image
					

					));
			

					

					
					echo '
					
					<div class="container" style="margin-top:30px;margin-bottom:70px"><div dir="rtl" class="alert alert-info">تم اضافة موقع بنجاح
					
					</div></div>
           <div class="content">
            <h1>إضافة موقع</h1><br>
            <form action="?do=Insert" method="post" enctype="multipart/form-data">
              <div class="row mb-3">
                <div class="col-sm-5">
                  <input class="form-control form-control-lg" name="city" type="text" placeholder=" الحي" aria-label=".form-control-lg example" required >
                </div>
                <div class="col-sm-5">
                    <input class="form-control form-control-lg" name="city1" type="text" value="الرياض" aria-label=".form-control-lg example" required disabled>
                </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-9">
                <input class="form-control form-control-lg" name="image" style="width: 620px;" type="file" placeholder="" aria-label=".form-control-lg example" accept="image/*" required>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-10">
                  <input class="form-control form-control-lg" name="axis" type="text" placeholder="إحداثيات الموقع" aria-label=".form-control-lg example" required>
              </div>
            </div>
          <div class="row mb-3">
            <div class="col-sm-10">
                <textarea name="desc" id="" cols="83" rows="3" placeholder="الوصف " required></textarea>
            </div>
          </div>
              
              <button type="submit" name="save" style="float: left;" class="btn btn-primary">أضف الموقع</button>
              
            </form>
        </div>';
					
					
				
			}
			
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