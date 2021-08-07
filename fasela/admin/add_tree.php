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
    <link rel="stylesheet" href="../css/add_tree.css">
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

      <header>
		 
		  <?php if($do == "Manage"){ ?>
		  
        <div class="content">
            <h1>ادخل بيانات الشجرة</h1><br>
            <form action="?do=Insert" method="post" enctype="multipart/form-data">
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" name="name" type="text" placeholder="اسم الشجرة" aria-label=".form-control-lg example" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" name="tall" type="number" placeholder="طول الشجرة بال cm" aria-label=".form-control-lg example" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    
                    <input class="form-control form-control-lg" name="image" type="file" placeholder="" aria-label=".form-control-lg example" accept="image/*" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <textarea name="desc" id="" cols="83" rows="3" placeholder="وصف" required></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" name="gafaf" type="text" placeholder="الجفاف" aria-label=".form-control-lg example" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" name="care" type="text" placeholder="الرعاية" aria-label=".form-control-lg example" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" name="rotoba" type="text" placeholder="الرطوبة" aria-label=".form-control-lg example" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" name="ray" type="text" placeholder="الري" aria-label=".form-control-lg example" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" name="paper" type="text" placeholder="طبيعة الأأوراق" aria-label=".form-control-lg example" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" name="green" type="text" placeholder="البيئة الحضارية" aria-label=".form-control-lg example" required>
                </div>
              </div>
              <button type="submit" name="save" style="float: left;" class="btn btn-primary">إضافة</button>
              
            </form>
        </div>
        <?php }elseif($do == "Insert"){
	
	
	     if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			include('connection.php');  	
			
			$name = $_POST["name"];
			$tall = $_POST["tall"];
			$desc    = $_POST["desc"];
			$gafaf    = $_POST["gafaf"]; 
			$care    = $_POST["care"]; 
			$rotoba    = $_POST["rotoba"]; 
			$ray    = $_POST["ray"]; 
			$paper    = $_POST["paper"]; 
			$green    = $_POST["green"];  
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
			
			
				
						$stmt = $con->prepare("INSERT INTO tree(tree_name , tree_length , image , description , 	drought , care , humidity , irrigation , papers , environment) VALUES(:name, :tall,   :image, :desc , :gafaf , :care , :rotoba , :ray , :paper , :green)");

					$stmt->execute(array(

						'name' => $name,
						'tall' => $tall,
						'image'    => $image,
						'desc' => $desc,
						'gafaf' => $gafaf,
						'care' => $care,
						'rotoba' => $rotoba,
						'ray' => $ray,
						'paper' => $paper,
						'green' => $green
					

					));
			

					

					
					echo '
					
					<div class="container" style="margin-top:30px;margin-bottom:70px"><div dir="rtl" class="alert alert-info">تم اضافة شجرة بنجاح
					
					</div></div>
           <div class="content">
            <h1>ادخل بيانات الشجرة</h1><br>
            <form action="?do=Insert" method="post" enctype="multipart/form-data">
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" name="name" type="text" placeholder="اسم الشجرة" aria-label=".form-control-lg example" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" name="tall" type="number" placeholder="طول الشجرة بال cm" aria-label=".form-control-lg example" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    
                    <input class="form-control form-control-lg" name="image" type="file" placeholder="" aria-label=".form-control-lg example" accept="image/*" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <textarea name="desc" id="" cols="83" rows="3" placeholder="وصف" required></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" name="gafaf" type="text" placeholder="الجفاف" aria-label=".form-control-lg example" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" name="care" type="text" placeholder="الرعاية" aria-label=".form-control-lg example" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" name="rotoba" type="text" placeholder="الرطوبة" aria-label=".form-control-lg example" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" name="ray" type="text" placeholder="الري" aria-label=".form-control-lg example" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" name="paper" type="text" placeholder="طبيعة الأأوراق" aria-label=".form-control-lg example" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" name="green" type="text" placeholder="البيئة الحضارية" aria-label=".form-control-lg example" required>
                </div>
              </div>
              <button type="submit" name="save" style="float: left;" class="btn btn-primary">إضافة</button>
              
            </form>
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