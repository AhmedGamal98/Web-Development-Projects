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
    <link rel="stylesheet" href="../css/location.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script defer src="../js/all.js"></script>
    <script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
></script>
    <script>
        let star = document.querySelectorAll('input');
      
      
        for (let i = 0; i < star.length; i++) {
          star[i].addEventListener('click', function() {
            i = this.value;
      
      
          });
      }
        </script>
        <style>
            .rating{
                border: none;
                float: left;
            }
            
            .rating > input{
                display: none;
            }
            
            .rating > label:before{
                content: '\f005';
                font-family: FontAwesome;
                margin: 5px;
                font-size: 1.5rem;
                display: inline-block;
                cursor: pointer;
            }
            
            .rating > .half:before{
                content: '\f089';
                position: absolute;
                cursor: pointer;
            }
            
            
            .rating > label{
                color: rgba(31, 134, 59, .75);
                float: right;
                cursor: pointer;
            }
            
            .rating > input:checked ~ label,
            .rating:not(:checked) > label:hover, 
            .rating:not(:checked) > label:hover ~ label{
                color: rgb(255, 251, 32);
            }
            
            .rating > input:checked + label:hover,
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label,
            .rating > input:checked ~ label:hover ~ label{
                color: rgb(233, 255, 32);
            }
            
        </style>
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
              <a href="index.php"><button class="btn btn-outline-primary"style="width:180px;" id="s1_btn" type="button">الصفحة الرئيسية</button></a>
              <a href="request_list.php"><button class="btn btn-outline-primary" id="s1_btn" type="button">طلباتي</button></a>
              <a href="rate.php"><button class="btn btn-outline-primary active" id="s_btn" type="button" style="margin-left: 30px;">تقييم تجربتي</button></a>
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

	<?php if($do == "Manage"){  ?>
	
      <header>
        <div class="content">
          
            <h1>قيم تجربتك</h1><br>
            <form action="?do=Insert" method="post">
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" name="date" type="date" placeholder="اسم الطلب" aria-label=".form-control-lg example" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <textarea name="desc" id="" cols="83" rows="4" placeholder="اضافة ملاحظه" required></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <div class="form-group row">
                          
                        <label for="comment" style="font-size: 17px;" class="col-sm-4 col-form-label">ما هو تقييمك لموقعنا :</label>
                        <div class="rating col-sm-8">
                          <fieldset class="rating" >
                            <input type="radio" id="star5" name="rating" value="5" required/><label for="star5" class="full" title="Awesome"></label>
                            <input type="radio" id="star4" name="rating" value="4" required/><label for="star4" class="full"></label>
                            
                            <input type="radio" id="star3" name="rating" value="3" required/><label for="star3" class="full"></label>
                            
                            <input type="radio" id="star2" name="rating" value="2" required/><label for="star2" class="full"></label>
                            
                            <input type="radio" id="star1" name="rating" value="1" required/><label for="star1" class="full"></label>
                            
                  
                          </fieldset>
                        </div>
                    </div>
                </div>
              </div>
              
              <button type="submit" style="float: left;" class="btn btn-primary">إرسال </button>
              
            </form>

        </div>
        
      </header>
	<?php }elseif($do == "Insert"){
	
	
	 if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			include('connection.php');  	
			
			$date = $_POST["date"];
			$desc = $_POST["desc"];
			$rating  = $_POST["rating"];
			//$city1    = $_POST["city1"]; 
			
		
				
				
						$stmt = $con->prepare("INSERT INTO rate(date , notes , rate , user_id) VALUES(:date, :notes, :rate , :user_id)");

					$stmt->execute(array(

						'date' => $date,
						'notes' => $desc,
						'rate'    => $rating,
						'user_id' => $id
					

					));
			

					

					
					echo '
					
					
           <header>
		   <div class="container" style="margin-top:30px;margin-bottom:70px"><div dir="rtl" class="alert alert-info">تم اضافة تقييم بنجاح
					
					</div></div>
        <div class="content">
          
            <h1>قيم تجربتك</h1><br>
            <form action="?do=Insert" method="post">
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" name="date" type="date" placeholder="اسم الطلب" aria-label=".form-control-lg example" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <textarea name="desc" id="" cols="83" rows="4" placeholder="اضافة ملاحظه" required></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                    <div class="form-group row">
                          
                        <label for="comment" style="font-size: 17px;" class="col-sm-4 col-form-label">ما هو تقييمك لموقعنا :</label>
                        <div class="rating col-sm-8">
                          <fieldset class="rating" >
                            <input type="radio" id="star5" name="rating" value="5" required/><label for="star5" class="full" title="Awesome"></label>
                            <input type="radio" id="star4" name="rating" value="4" required/><label for="star4" class="full"></label>
                            
                            <input type="radio" id="star3" name="rating" value="3" required/><label for="star3" class="full"></label>
                            
                            <input type="radio" id="star2" name="rating" value="2" required/><label for="star2" class="full"></label>
                            
                            <input type="radio" id="star1" name="rating" value="1" required/><label for="star1" class="full"></label>
                            
                  
                          </fieldset>
                        </div>
                    </div>
                </div>
              </div>
              
              <button type="submit" style="float: left;" class="btn btn-primary">إرسال </button>
              
            </form>

        </div>
        
      </header>';
					
					
				
		
			
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