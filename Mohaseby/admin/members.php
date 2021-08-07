<?php

session_start();
if(!(isset($_SESSION['password']))){
	header('Location:../login.php');
}

$id = $_SESSION['adminid'];

?>
<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8"/>
		<title>Members</title>
		<link rel="stylesheet" href="layouts/css/bootstrap.min.css">
		<link rel="stylesheet" href="layouts/css/font-awesome.css">
		<link rel="stylesheet" href="layouts/css/jquery-ui.css">
		<link rel="stylesheet" href="layouts/css/jquery.selectBoxIt.css">
		<link rel="stylesheet" href="layouts/css/backend.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Almarai&diplay=swap">
	</head>   
	<body class="main-color">
	 	<div class="header text-center">
		 <div class="container">
			 <div class="logo center-block">
				 <h1>نقرة واحدة</h1>
				 <img src="layouts/images/log2.jpg" alt="Logo">
			 </div>
			 <div class="logout pull-left">
				 
				     <h3><a class="btn btn-danger" href="../logout.php">خروج</a></h3>
					 <div class="icon-profile"><a href="profile.php"><i class="fa fa-user-o fa-fw"></i></a></div>
			 </div>
			 <!--<div class="links pull-left">
				<ul class="list-unstyled">
				  <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
				  <li><a href="www.google.com"><i class="fa fa-google-plus"></i></a></li>	
				  <li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
				  <li><a href="www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>		
				</ul>
			 </div>-->
			 <div class="navbar container" dir="rtl">
				 <hr>
				 <ul class="list-unstyled">
					 <li class="active"><a href="members.php">الكاشير</a></li>
					 <li><a href="categories.php">المخازن</a></li>
					 <li><a href="sale_and_return.php">المبيعات والمرتجعات</a></li>
					 <li><a href="profits_and_losses.php">الاحصائيات</a></li>
					 <li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ادارة التقارير <span class="caret"></span></a>
					  <ul class="dropdown-menu pull-right">
						<li><a href="reports.php?page=Sales">المبيعات</a></li>
						<li><a href="reports.php?page=Purchases">المشتريات</a></li>
						<li><a href="reports.php?page=Return_Items">المرتجعات</a></li>
					  </ul>
					</li>
				 </ul>
				 <hr>
			 </div>
		 </div>
     </div>
<?php 

$do = isset($_GET['page']) ? $_GET['page'] : "Manage";

if($do == "Manage"){ // manage members page
		
		?>
        <div class="container">
			<div class="row">
				<div class="col-md-6">
					<a href="members.php?&page=Add" class="btn btn-success btn-lg add">اضافة كاشير جديد <i class="fa fa-plus"></i></a>
				</div>
				<div class="col-md-5 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">ادارة الكاشير</h1>
						<i class="fa fa-users fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
	    <div class="container categories" dir="rtl">
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
					  <td>رقم الكاشير</td>
					  <td>الاسم بالكامل</td>
					  <td>البريد الالكتروني</td>
					  <td>رقم الهاتف</td>	
					  <td>العنوان</td>
					  <td>نوع المستخدم</td>		
					  <td>التحكم</td>	
					</tr>
					<?php
	  
					include('../connect.php');  
					$sql = $con->prepare("SELECT * FROM casher WHERE ownerid=$id");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				   ?>
					
					<tr>
					  <td><?php echo $pat["UserID"]; ?></td>
					  <td><?php echo $pat["Firstname"] ." " . $pat["Lastname"]; ?></td>
					  <td><?php echo $pat["Email"]; ?></td>
					  <td><?php echo "0" . $pat["Phone"]; ?></td>
					  <td><?php echo $pat["StoreAddress"]; ?></td>	
					  <td>كاشير</td>	
					  <td>
						  <a href="members.php?page=Edit&casherid=<?php echo $pat["UserID"]; ?>" class="btn btn-success"><i class="fa fa-edit"></i> تعديل</a>
						  <a href="members.php?page=Delete&casherid=<?php echo $pat["UserID"]; ?>" class="btn btn-danger confirm"><i class="fa fa-close"></i> حذف</a>
						  
						  <?php if($pat["AccountActivity"] == 0){  ?>
						  
						  <a style="margin-right:3px" href="members.php?page=Activate&casherid=<?php echo $pat["UserID"]; ?>" class="btn btn-primary"><i class="fa fa-check"></i> تفعيل</a>
						  
						  
						  <?php  }else{ ?>
						  
						  <a style="margin-right:3px" href="members.php?page=Not_activate&casherid=<?php echo $pat["UserID"]; ?>" class="btn btn-danger"><i class="fa fa-close"></i> الغاء تفعيل</a>
						  
						  <?php } ?>
						  
					  </td>	
					</tr>
					
					<?php  } ?>
					
				</table>
			</div>
		</div>
        
		 
    <?php
		
}elseif($do == "Add"){ ?>
	
	
		 <div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="members.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">اضافة كاشير جديد</h1>
						<i class="fa fa-plus fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Insert" method="post">
			   <!-- Start First Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="first" class="form-control first" autocomplete="off" required="required" placeholder="الاسم الأول"/> 
					   <div class="alert alert-danger empty-alert">الاسم الأول مطلوب أو <strong>اجباري</strong></div>
					  <div class="alert alert-danger long-alert">  الاسم الأول يجب أن يحتوي علي<strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">الاسم الأول</label>
			   </div>
			   <!-- End First Name field -->
			    <!-- Start Last Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="last" class="form-control last" autocomplete="off" required="required" placeholder="اسم العائله"/> 
					    <div class="alert alert-danger empty-alert">اسم العائلة مطلوب أو <strong>اجباري</strong></div>
					  <div class="alert alert-danger long-alert">  اسم العائلة يجب أن يحتوي علي<strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">اسم العائله</label>
			   </div>
			   <!-- End Last Name field -->	
			    <!-- Start UserName field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="username" class="form-control username" autocomplete="off" required="required" placeholder="اسم المستخدم"/>
					   <div class="alert alert-danger empty-alert">اسم المستخدم مطلوب أو <strong>اجباري</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">اسم المستخدم</label>
			   </div>
			   <!-- End UserName field -->		 
			   <!-- Start Password field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="password" name="password" class="form-control password" autocomplete="off" required="required" placeholder="كلمة المرور"/>
					   <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
					  <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>6 حروف</strong></div>
					  <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة وحروف صغيرة ورقم.</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">كلمة المرور</label>
			   </div>
			   <!-- End Password field -->
			   <!-- Start Email field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="email" name="email" class="form-control email" autocomplete="off" required="required" placeholder="البريد الالكتروني"/>
					   <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	                   <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">البريد الالكتروني</label>
			   </div>
			   <!-- End Email field -->	
			   <!-- Start Phone field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="tel" name="phone" class="form-control phone" autocomplete="off" required="required" placeholder="رقم الهاتف"/> 
					   <div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
					  <div class="alert alert-danger long-alert">رقم الهاتف يجب أن يكون  <strong>10 أرقام</strong></div>
					  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
					  <div class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">رقم الهاتف</label>
			   </div>
			   <!-- End Phone field -->	 
			   <!-- Start Address field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="address" class="form-control address" autocomplete="off" required="required" placeholder="العنوان"/>
					   <div class="alert alert-danger empty-alert"> العنوان مطلوب أو<strong>اجباري</strong></div>
	                   <div class="alert alert-danger custom-alert"> العنوان يجب أن يحتوي علي <strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">العنوان</label>
			   </div>	
				<div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="اضافة كاشير" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="members.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	 
			 </form>
		 </div>

	
<?php
	
}elseif($do == "Insert"){
	
	
	
	echo "<div class='container'>";
		
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			$username = $_POST["username"];
			$password = $_POST["password"];
			$email    = $_POST["email"];
			$first = $_POST["first"];
			$last = $_POST["last"];
			$address = $_POST["address"];
			$phone = $_POST["phone"];
			$hashpass = sha1($password);
			
			//Validate Form By Server site
			
			
			$formErrors = array();
			
			if(strlen($username) < 6){
				
				$formErrors[] = "اسم المستخدم لا يقل عن 6 حروف";
				
			}
			if(empty($username)){
				
				$formErrors[] = "اسم المستخدم لا يجب أن يترك فارغ";;
				
			}
			/*if(strlen($first) < 4){
				
				$formErrors[] = "الاسم الأول لا يقل عن 4 حروف";
				
			}*/
			if(empty($first)){
				
				$formErrors[] = "الاسم الأول لا يجب أن يترك فارغ";;
				
			}
			/*if(strlen($last) < 4){
				
				$formErrors[] = "اسم العائلة لا يقل عن 4 حروف";
				
			}*/
			if(empty($last)){
				
				$formErrors[] = "اسم العائلة لا يجب أن يترك فارغ";;
				
			}
			if(empty($email)){
				
				$formErrors[] = "البريد الالكتروني لا يجب أن يترك فارغ";
				
			}
			if(empty($address)){
				
				$formErrors[] = "العنوان لا يجب أن يترك فارغ";
				
			}
			if(empty($phone)){
				
				$formErrors[] = "رقم الهاتف لا يجب أن يترك فارغ";
				
			}
			if(empty($password)){
				
				$formErrors[] = "كلمة المرور لا يجب أن تترك فارغة";
				
			}
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				//Check if the item exist in database or not
				
				//$check = checkItem("Username" , "users" , $username);
				
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM casher WHERE Username= ? OR Email= ?");
				 $stmt->execute(array($username , $email));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				
				if($count > 0){
					
					echo "<div dir='rtl' class='alert alert-info'>هذا الكاشير موجود من قبل
					<button type='button' class='close pull-left' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
					</div>";
					
					echo '<div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="members.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">اضافة كاشير جديد</h1>
						<i class="fa fa-plus fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Insert" method="post">
			   <!-- Start First Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="first" class="form-control first" autocomplete="off" required="required" placeholder="الاسم الأول"/> 
					   <div class="alert alert-danger empty-alert">الاسم الأول مطلوب أو <strong>اجباري</strong></div>
					  <div class="alert alert-danger long-alert">  الاسم الأول يجب أن يحتوي علي<strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">الاسم الأول</label>
			   </div>
			   <!-- End First Name field -->
			    <!-- Start Last Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="last" class="form-control last" autocomplete="off" required="required" placeholder="اسم العائله"/> 
					    <div class="alert alert-danger empty-alert">اسم العائلة مطلوب أو <strong>اجباري</strong></div>
					  <div class="alert alert-danger long-alert">  اسم العائلة يجب أن يحتوي علي<strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">اسم العائله</label>
			   </div>
			   <!-- End Last Name field -->	
			    <!-- Start UserName field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="username" class="form-control username" autocomplete="off" required="required" placeholder="اسم المستخدم"/>
					   <div class="alert alert-danger empty-alert">اسم المستخدم مطلوب أو <strong>اجباري</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">اسم المستخدم</label>
			   </div>
			   <!-- End UserName field -->		 
			   <!-- Start Password field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="password" name="password" class="form-control password" autocomplete="off" required="required" placeholder="كلمة المرور"/>
					   <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
					  <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>6 حروف</strong></div>
					  <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة وحروف صغيرة ورقم.</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">كلمة المرور</label>
			   </div>
			   <!-- End Password field -->
			   <!-- Start Email field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="email" name="email" class="form-control email" autocomplete="off" required="required" placeholder="البريد الالكتروني"/>
					   <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	                   <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">البريد الالكتروني</label>
			   </div>
			   <!-- End Email field -->	
			   <!-- Start Phone field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="tel" name="phone" class="form-control phone" autocomplete="off" required="required" placeholder="رقم الهاتف"/> 
					   <div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
					  <div class="alert alert-danger long-alert"> رقم الهاتف يجب أن يكون  <strong>10 أرقام</strong></div>
					  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
					  <div class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">رقم الهاتف</label>
			   </div>
			   <!-- End Phone field -->	 
			   <!-- Start Address field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="address" class="form-control address" autocomplete="off" required="required" placeholder="العنوان"/>
					   <div class="alert alert-danger empty-alert"> العنوان مطلوب أو<strong>اجباري</strong></div>
	                   <div class="alert alert-danger custom-alert"> العنوان يجب أن يحتوي علي <strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">العنوان</label>
			   </div>	
				<div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="اضافة كاشير" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="members.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	 
			 </form>
		 </div>';
					
				}else{
				

					$stmt = $con->prepare("INSERT INTO casher(Username , Password , Email , Firstname , Lastname , StoreAddress , Phone , AccountActivity , ownerid) VALUES(:username, :password, :email, :firstname , :lastname , :address , :phone ,  0 , :ownerid)");

					$stmt->execute(array(

						'username' => $username,
						'password' => $hashpass,
						'email'    => $email,
						'firstname' => $first,
						'lastname' => $last,
						'address' => $address,
						'phone' => $phone,
						'ownerid' => $id,

					));


					// echo success message

					echo '<div dir="rtl" class="alert alert-success">تم اضافة كاشير بنجاح
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="members.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">اضافة كاشير جديد</h1>
						<i class="fa fa-plus fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Insert" method="post">
			   <!-- Start First Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="first" class="form-control first" autocomplete="off" required="required" placeholder="الاسم الأول"/> 
					   <div class="alert alert-danger empty-alert">الاسم الأول مطلوب أو <strong>اجباري</strong></div>
					  <div class="alert alert-danger long-alert">  الاسم الأول يجب أن يحتوي علي<strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">الاسم الأول</label>
			   </div>
			   <!-- End First Name field -->
			    <!-- Start Last Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="last" class="form-control last" autocomplete="off" required="required" placeholder="اسم العائله"/> 
					    <div class="alert alert-danger empty-alert">اسم العائلة مطلوب أو <strong>اجباري</strong></div>
					  <div class="alert alert-danger long-alert">  اسم العائلة يجب أن يحتوي علي<strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">اسم العائله</label>
			   </div>
			   <!-- End Last Name field -->	
			    <!-- Start UserName field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="username" class="form-control username" autocomplete="off" required="required" placeholder="اسم المستخدم"/>
					   <div class="alert alert-danger empty-alert">اسم المستخدم مطلوب أو <strong>اجباري</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">اسم المستخدم</label>
			   </div>
			   <!-- End UserName field -->		 
			   <!-- Start Password field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="password" name="password" class="form-control password" autocomplete="off" required="required" placeholder="كلمة المرور"/>
					   <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
					  <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>6 حروف</strong></div>
					  <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة وحروف صغيرة ورقم.</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">كلمة المرور</label>
			   </div>
			   <!-- End Password field -->
			   <!-- Start Email field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="email" name="email" class="form-control email" autocomplete="off" required="required" placeholder="البريد الالكتروني"/>
					   <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	                   <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">البريد الالكتروني</label>
			   </div>
			   <!-- End Email field -->	
			   <!-- Start Phone field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="tel" name="phone" class="form-control phone" autocomplete="off" required="required" placeholder="رقم الهاتف"/> 
					   <div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
					  <div class="alert alert-danger long-alert">رقم الهاتف يجب أن يكون  <strong>10 أرقام</strong></div>
					  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
					  <div class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">رقم الهاتف</label>
			   </div>
			   <!-- End Phone field -->	 
			   <!-- Start Address field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="address" class="form-control address" autocomplete="off" required="required" placeholder="العنوان"/>
					   <div class="alert alert-danger empty-alert"> العنوان مطلوب أو<strong>اجباري</strong></div>
	                   <div class="alert alert-danger custom-alert"> العنوان يجب أن يحتوي علي <strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">العنوان</label>
			   </div>	
				<div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="اضافة كاشير" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="members.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	 
			 </form>
		 </div>';
					
					
				}
			}
			
		}else{
			
			echo "<div class='alert alert-danger'>لا يمكنك الدخول لهذه الصفحة</div>";
			
		}
		
		echo "</div>";
	
	
	
	
	
}elseif($do == "Edit"){ ?>
		
		
	<?php
							  
	 include('../connect.php');  						  
	 $casherid = isset($_GET['casherid']) && is_numeric($_GET['casherid']) ? intval($_GET['casherid']) : 0;
	 $stmt = $con->prepare("SELECT * FROM casher WHERE UserID= ? LIMIT 1");
	 $stmt->execute(array($casherid));
	 $row = $stmt->fetch();
	 $count = $stmt->rowCount();				  
							  
	if($count > 0){
							  
   ?>	
	

		 <div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="members.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-7 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تحديث بيانات كاشير</h1>
						<i class="fa fa-pencil fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Update" method="post">
			  <!-- Start First Name field --> 
			   <input type="hidden" name="casherid" value="<?php echo $casherid; ?>"/>	 	 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="first" class="form-control first" autocomplete="off" required="required" placeholder="الاسم الأول" value="<?php echo $row["Firstname"]; ?>"/> 
					   <div class="alert alert-danger empty-alert">الاسم الأول مطلوب أو <strong>اجباري</strong></div>
					  <div class="alert alert-danger long-alert">  الاسم الأول يجب أن يحتوي علي<strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">الاسم الأول</label>
			   </div>
			   <!-- End First Name field -->
			    <!-- Start Last Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="last" class="form-control last" autocomplete="off" required="required" placeholder="اسم العائله" value="<?php echo $row["Lastname"]; ?>"/>
					   <div class="alert alert-danger empty-alert">اسم العائلة مطلوب أو <strong>اجباري</strong></div>
					  <div class="alert alert-danger long-alert">  اسم العائلة يجب أن يحتوي علي<strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">اسم العائله</label>
			   </div>
			   <!-- End Last Name field -->
			    <!-- Start UserName field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="username" class="form-control username" autocomplete="off" required="required" placeholder="اسم المستخدم" value="<?php echo $row["Username"]; ?>"/>
					    <div class="alert alert-danger empty-alert">اسم المستخدم مطلوب أو <strong>اجباري</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">اسم المستخدم</label>
			   </div>
			   <!-- End UserName field -->	 
			   <!-- Start Password field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="hidden" name="old-password" value="<?php echo $row["Password"]; ?>"/> 
					   <input type="password" name="password" class="form-control password" autocomplete="off" placeholder="كلمة المرور"/> 
					   <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
					  <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>6 حروف</strong></div>
					  <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة وحروف صغيرة ورقم.</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">كلمة المرور</label>
			   </div>
			   <!-- End Password field -->	 
			   <!-- Start Email field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="email" name="email" class="form-control email" autocomplete="off" required="required" placeholder="البريد الالكتروني" value="<?php echo $row["Email"]; ?>"/>
					   <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	                   <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">البريد الالكتروني</label>
			   </div>
			   <!-- End Email field -->	
			   <!-- Start Phone field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="tel" name="phone" class="form-control phone" autocomplete="off" required="required" placeholder="رقم التليفون" value="<?php echo $row["Phone"]; ?>"/>
					   <div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
					  <div class="alert alert-danger long-alert">رقم الهاتف يجب أن يكون  <strong>10 أرقام</strong></div>
					  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
					  <div class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">رقم الهاتف</label>
			   </div>
			   <!-- End Phone field -->	 
			   <!-- Start Address field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="address" class="form-control address" autocomplete="off" required="required" placeholder="العنوان" value="<?php echo $row["StoreAddress"]; ?>"/>
					   <div class="alert alert-danger empty-alert"> العنوان مطلوب أو<strong>اجباري</strong></div>
	                   <div class="alert alert-danger custom-alert"> العنوان يجب أن يحتوي علي <strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">العنوان</label>
			   </div>
			   <!-- End Address field -->
			   <!-- End Address field -->	 
			   <!-- Start submit field
			   <div class="form-group form-group-lg">
				   <div class="col-sm-offset-2 col-sm-10">
					   <input type="submit" value="تحديث كاشير" class="btn btn-success btn-lg"/> 
				   </div>
			   </div>
			   <!-- End submit field --> 
				<div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="تحديث كاشير" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="members.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	 
			 </form>
			 <!-- Start Finish field 
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:778px;left:490px" href="members.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
		 </div>
		
		<?php } ?>
	
	
<?php
	
}elseif($do == "Update"){
	
	
	include('../connect.php');  
     	echo "<div class='container'>";
		
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			//Get Varaiables from Post Method
			
			$id       = $_POST["casherid"];
			$first    = $_POST["first"];
			$last     = $_POST["last"];
			$email    = $_POST["email"];
			$address  = $_POST["address"];
			$phone    = $_POST["phone"];
			$username = $_POST["username"];
			
			//Password Trick
			
		   //$pass = empty($_POST['new-password']) ? $_POST['old-password'] : sha1($_POST['new-password']);
			
			if(empty($_POST['password'])){
				
				$password = $_POST['old-password'];
				
			}else{
				
				$password = sha1($_POST['password']);
			}
			
			
			//Validate Form By Server site
			
			$formErrors = array();
			
			if(strlen($username) < 6){
				
				$formErrors[] = "اسم المستخدم لا يقل عن 6 حروف";
				
			}
			if(empty($username)){
				
				$formErrors[] = "اسم المستخدم لا يجب أن يترك فارغ";;
				
			}
			if(strlen($first) < 4){
				
				$formErrors[] = "الاسم الأول لا يقل عن 4 حروف";
				
			}
			if(empty($first)){
				
				$formErrors[] = "الاسم الأول لا يجب أن يترك فارغ";;
				
			}
			if(strlen($last) < 4){
				
				$formErrors[] = "اسم العائلة لا يقل عن 4 حروف";
				
			}
			if(empty($last)){
				
				$formErrors[] = "اسم العائلة لا يجب أن يترك فارغ";;
				
			}
			if(empty($email)){
				
				$formErrors[] = "البريد الالكتروني لا يجب أن يترك فارغ";
				
			}
			if(empty($address)){
				
				$formErrors[] = "العنوان لا يجب أن يترك فارغ";
				
			}
			if(empty($phone)){
				
				$formErrors[] = "رقم الهاتف لا يجب أن يترك فارغ";
				
			}
			
			//Loop into errors array and echo it
			
			foreach($formErrors as $error){
				
				
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM casher WHERE UserID= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				
				
				
				echo "<div dir='rtl' class='alert alert-danger'>" . $error . "
				<button type='button' class='close pull-left' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
				</div>";
				
				echo '<div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="members.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-7 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تحديث بيانات كاشير</h1>
						<i class="fa fa-pencil fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Update" method="post">
			   <!-- Start First Name field --> 
			   <input type="hidden" name="casherid" value="'. $id . '"/>	 	 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="first" class="form-control first" autocomplete="off" required="required" placeholder="الاسم الأول" value="' . $row["Firstname"] . '"/>
					   <div class="alert alert-danger empty-alert">الاسم الأول مطلوب أو <strong>اجباري</strong></div>
					  <div class="alert alert-danger long-alert">  الاسم الأول يجب أن يحتوي علي<strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">الاسم الأول</label>
			   </div>
			   <!-- End First Name field -->
			    <!-- Start Last Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="last" class="form-control last" autocomplete="off" required="required" placeholder="اسم العائله" value="' . $row["Lastname"] . '"/>
					   <div class="alert alert-danger empty-alert">اسم العائلة مطلوب أو <strong>اجباري</strong></div>
					  <div class="alert alert-danger long-alert">  اسم العائلة يجب أن يحتوي علي<strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">اسم العائله</label>
			   </div>
			   <!-- End Last Name field -->
			    <!-- Start UserName field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="username" class="form-control username" autocomplete="off" required="required" placeholder="اسم المستخدم" value="' . $row["Username"] . '"/>
					   <div class="alert alert-danger empty-alert">اسم المستخدم مطلوب أو <strong>اجباري</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">اسم المستخدم</label>
			   </div>
			   <!-- End UserName field -->	 
			   <!-- Start Password field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="hidden" name="old-password" value="' . $row["Password"] . '"/> 
					   <input type="password" name="password" class="form-control password" autocomplete="off" placeholder="كلمة المرور"/>
					   <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
					  <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>6 حروف</strong></div>
					  <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة وحروف صغيرة ورقم.</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">كلمة المرور</label>
			   </div>
			   <!-- End Password field -->	 
			   <!-- Start Email field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="email" name="email" class="form-control email" autocomplete="off" required="required" placeholder="البريد الالكتروني" value="' . $row["Email"] . '"/>
					   <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	                   <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">البريد الالكتروني</label>
			   </div>
			   <!-- End Email field -->	
			   <!-- Start Phone field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="tel" name="phone" class="form-control phone" autocomplete="off" required="required" placeholder="رقم التليفون" value="' . $row["Phone"] . '"/>
					   <div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
					  <div class="alert alert-danger long-alert">رقم الهاتف يجب أن يكون   <strong>10 أرقام</strong></div>
					  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
					  <div class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">رقم التليفون</label>
			   </div>
			   <!-- End Phone field -->	 
			   <!-- Start Address field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="address" class="form-control address" autocomplete="off" required="required" placeholder="العنوان" value="' . $row["StoreAddress"] . '"/>
					   <div class="alert alert-danger empty-alert"> العنوان مطلوب أو<strong>اجباري</strong></div>
	                   <div class="alert alert-danger custom-alert"> العنوان يجب أن يحتوي علي <strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">العنوان</label>
			   </div>
			   <!-- End Address field -->	 	 
				<div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="تحديث كاشير" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="members.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>		 
			 </form>
		 </div>';
				
			}
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				//Update the Database with this info
				
				$stmt2 = $con->prepare("SELECT * FROM casher WHERE Username = ? AND Email = ? AND UserID != ?");
				
				$stmt2->execute(array($username , $email , $id));
				
				$count = $stmt2->rowCount();
				
				if($count > 0){
					
					
				 //include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM casher WHERE UserID= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
					
					
		   echo "<div dir='rtl' class='alert alert-danger'>
		   
		   هذه القيم موجودة من قبل من فضلك أعد المحاولة
		   <button type='button' class='close pull-left' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
		   </div>";
					
			echo '<div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="members.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-7 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تحديث بيانات كاشير</h1>
						<i class="fa fa-pencil fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Update" method="post">
			   <!-- Start First Name field --> 
			   <input type="hidden" name="casherid" value="'. $id . '"/>	 	 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="first" class="form-control first" autocomplete="off" required="required" placeholder="الاسم الأول" value="' . $row["Firstname"] . '"/>
					   <div class="alert alert-danger empty-alert">الاسم الأول مطلوب أو <strong>اجباري</strong></div>
					  <div class="alert alert-danger long-alert">  الاسم الأول يجب أن يحتوي علي<strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">الاسم الأول</label>
			   </div>
			   <!-- End First Name field -->
			    <!-- Start Last Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="last" class="form-control last" autocomplete="off" required="required" placeholder="اسم العائله" value="' . $row["Lastname"] . '"/>
					   <div class="alert alert-danger empty-alert">اسم العائلة مطلوب أو <strong>اجباري</strong></div>
					  <div class="alert alert-danger long-alert">  اسم العائلة يجب أن يحتوي علي<strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">اسم العائله</label>
			   </div>
			   <!-- End Last Name field -->
			    <!-- Start UserName field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="username" class="form-control username" autocomplete="off" required="required" placeholder="اسم المستخدم" value="' . $row["Username"] . '"/>
					   <div class="alert alert-danger empty-alert">اسم المستخدم مطلوب أو <strong>اجباري</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">اسم المستخدم</label>
			   </div>
			   <!-- End UserName field -->	 
			   <!-- Start Password field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="hidden" name="old-password" value="' . $row["Password"] . '"/> 
					   <input type="password" name="password" class="form-control password" autocomplete="off" placeholder="كلمة المرور"/>
					   <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
					  <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>6 حروف</strong></div>
					  <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة وحروف صغيرة ورقم.</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">كلمة المرور</label>
			   </div>
			   <!-- End Password field -->	 
			   <!-- Start Email field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="email" name="email" class="form-control email" autocomplete="off" required="required" placeholder="البريد الالكتروني" value="' . $row["Email"] . '"/>
					   <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	                   <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">البريد الالكتروني</label>
			   </div>
			   <!-- End Email field -->	
			   <!-- Start Phone field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="tel" name="phone" class="form-control phone" autocomplete="off" required="required" placeholder="رقم التليفون" value="' . $row["Phone"] . '"/>
					   <div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
					  <div class="alert alert-danger long-alert">رقم الهاتف يجب أن يكون   <strong>10 أرقام</strong></div>
					  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
					  <div class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">رقم التليفون</label>
			   </div>
			   <!-- End Phone field -->	 
			   <!-- Start Address field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="address" class="form-control address" autocomplete="off" required="required" placeholder="العنوان" value="' . $row["StoreAddress"] . '"/>
					   <div class="alert alert-danger empty-alert"> العنوان مطلوب أو<strong>اجباري</strong></div>
	                   <div class="alert alert-danger custom-alert"> العنوان يجب أن يحتوي علي <strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">العنوان</label>
			   </div>
			   <!-- End Address field -->	 	 
				<div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="تحديث كاشير" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="members.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>		 
			 </form>
		 </div>';
					
					
				}else{
					
					
					$stmt = $con->prepare("UPDATE casher SET Username = ?, Email = ?, Firstname = ?, Lastname = ?, StoreAddress = ?, Phone = ?, Password = ? WHERE UserID = ?");
					$stmt->execute(array($username , $email , $first , $last , $address , $phone , $password ,  $id));

					// echo success message
					
					
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM casher WHERE UserID= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();

					echo '<div dir="rtl" class="alert alert-success">
					تم تحديث بيانات الكاشير بنجاح
						<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="members.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-7 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تحديث بيانات كاشير</h1>
						<i class="fa fa-pencil fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Update" method="post">
			   <!-- Start First Name field --> 
			   <input type="hidden" name="casherid" value="'. $id . '"/>	 	 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="first" class="form-control first" autocomplete="off" required="required" placeholder="الاسم الأول" value="' . $row["Firstname"] . '"/>
					   <div class="alert alert-danger empty-alert">الاسم الأول مطلوب أو <strong>اجباري</strong></div>
					  <div class="alert alert-danger long-alert">  الاسم الأول يجب أن يحتوي علي<strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">الاسم الأول</label>
			   </div>
			   <!-- End First Name field -->
			    <!-- Start Last Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="last" class="form-control last" autocomplete="off" required="required" placeholder="اسم العائله" value="' . $row["Lastname"] . '"/>
					   <div class="alert alert-danger empty-alert">اسم العائلة مطلوب أو <strong>اجباري</strong></div>
					  <div class="alert alert-danger long-alert">  اسم العائلة يجب أن يحتوي علي<strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">اسم العائله</label>
			   </div>
			   <!-- End Last Name field -->
			    <!-- Start UserName field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="username" class="form-control username" autocomplete="off" required="required" placeholder="اسم المستخدم" value="' . $row["Username"] . '"/>
					   <div class="alert alert-danger empty-alert">اسم المستخدم مطلوب أو <strong>اجباري</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">اسم المستخدم</label>
			   </div>
			   <!-- End UserName field -->	 
			   <!-- Start Password field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="hidden" name="old-password" value="' . $row["Password"] . '"/> 
					   <input type="password" name="password" class="form-control password" autocomplete="off" placeholder="كلمة المرور"/>
					   <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
					  <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>6 حروف</strong></div>
					  <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة وحروف صغيرة ورقم.</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">كلمة المرور</label>
			   </div>
			   <!-- End Password field -->	 
			   <!-- Start Email field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="email" name="email" class="form-control email" autocomplete="off" required="required" placeholder="البريد الالكتروني" value="' . $row["Email"] . '"/>
					   <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	                   <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">البريد الالكتروني</label>
			   </div>
			   <!-- End Email field -->	
			   <!-- Start Phone field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="tel" name="phone" class="form-control phone" autocomplete="off" required="required" placeholder="رقم التليفون" value="' . $row["Phone"] . '"/>
					   <div class="alert alert-danger empty-alert">رقم الهاتف لا يمكن أن تترك  <strong></strong>فارغة</div>
					  <div class="alert alert-danger long-alert">رقم الهاتف يجب أن يكون   <strong>10 أرقام</strong></div>
					  <div class="alert alert-danger custom-alert">رقم الهاتف يجب أن يحتوي علي <strong>أرقام فقط.</strong></div>
					  <div class="alert alert-danger zero-alert">رقم الهاتف يجب أن يبدأ  <strong>05.</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">رقم التليفون</label>
			   </div>
			   <!-- End Phone field -->	 
			   <!-- Start Address field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6 ast">
					   <input type="text" name="address" class="form-control address" autocomplete="off" required="required" placeholder="العنوان" value="' . $row["StoreAddress"] . '"/>
					   <div class="alert alert-danger empty-alert"> العنوان مطلوب أو<strong>اجباري</strong></div>
	                   <div class="alert alert-danger custom-alert"> العنوان يجب أن يحتوي علي <strong>حروف فقط</strong></div>
				   </div>
				   <label class="col-sm-2 control-label">العنوان</label>
			   </div>
			   <!-- End Address field -->	 	 
				<div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="تحديث كاشير" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="members.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>		 
			 </form>
		 </div>';
					
				}
				
			}
			
		}else{
			
			echo "<div class='alert alert-danger'>لا يمكنك الدخول لهذه الصفحة</div>";
			
		}
		
		echo "</div>";
	
	
	
	
	
}elseif($do == "Delete"){
	
	
	   echo "<div class='container'>";
		
		 $casherid = isset($_GET['casherid']) && is_numeric($_GET['casherid']) ? intval($_GET['casherid']) : 0;
		
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM casher WHERE UserID= ?");
		 $stmt->execute(array($casherid));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("DELETE FROM casher WHERE UseriD = :casherid");

				$stmt->bindParam(":casherid" , $casherid);

				$stmt->execute();

				echo '<div dir="rtl" class="alert alert-success">تم حذف هذا الكاشير
				<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
				</div>';
				
				echo '<div class="container">
			<div class="row">
				<div class="col-md-6">
					<a href="members.php?&page=Add" class="btn btn-success btn-lg add">اضافة كاشير جديد <i class="fa fa-plus"></i></a>
				</div>
				<div class="col-md-5 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">ادارة الكاشير</h1>
						<i class="fa fa-users fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
	    <div class="container categories" dir="rtl">
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
					  <td>رقم الكاشير</td>
					  <td>الاسم بالكامل</td>
					  <td>البريد الالكتروني</td>
					  <td>رقم الهاتف</td>	
					  <td>العنوان</td>
					  <td>نوع المستخدم</td>		
					  <td>التحكم</td>	
					</tr>';
					
	  
					include('../connect.php');  
					$sql = $con->prepare("SELECT * FROM casher WHERE ownerid=$id");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

					
					echo'<tr>
					  <td>' . $pat["UserID"] . '</td>
					  <td>' . $pat["Username"] . '</td>
					  <td>' . $pat["Email"] . '</td>
					  <td>0' . $pat["Phone"] . '</td>
					  <td>' . $pat["StoreAddress"] . '</td>	
					  <td>كاشير</td>	
					  <td>
						  <a href="members.php?page=Edit&casherid=' . $pat["UserID"]. '" class="btn btn-success"><i class="fa fa-edit"></i> تعديل</a>
						  <a href="members.php?page=Delete&casherid=' . $pat["UserID"]. '" class="btn btn-danger confirm"><i class="fa fa-close"></i> حذف</a>';
						  
						   if($pat["AccountActivity"] == 0){
						  
						  echo'<a style="margin-right:3px" href="members.php?page=Activate&casherid=' . $pat["UserID"]. '" class="btn btn-primary"><i class="fa fa-check"></i> تفعيل</a>';
						  
						  
					      }else{ 
						  
						  echo'<a style="margin-right:3px" href="members.php?page=Not_activate&casherid=' . $pat["UserID"]. '" class="btn btn-danger"><i class="fa fa-close"></i> الغاء تفعيل</a>';
						  
						  } 
						  
					  echo'</td>	
					</tr>';
					}
					
				echo'</table>
			</div>
		</div>';
				
				
			}else{
				
				echo "<div class='alert alert-danger'>هذا الكاشير غير مسجل عندك</div>";
				
				
			}
		
		echo "</div>";
		
	
}elseif($do == "Activate"){
	
	
	
 echo "<div class='container'>";
		
		 $casherid = isset($_GET['casherid']) && is_numeric($_GET['casherid']) ? intval($_GET['casherid']) : 0;
		
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM casher WHERE UserID= ?");
		 $stmt->execute(array($casherid));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("UPDATE casher SET AccountActivity = 1 WHERE UseriD = ?");

				$stmt->execute(array($casherid));

				echo '<div dir="rtl" class="alert alert-success">تم تفعيل هذا الكاشير بنجاح
				<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
				</div>';
				echo '<div class="container">
			<div class="row">
				<div class="col-md-6">
					<a href="members.php?&page=Add" class="btn btn-success btn-lg add">اضافة كاشير جديد <i class="fa fa-plus"></i></a>
				</div>
				<div class="col-md-5 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">ادارة الكاشير</h1>
						<i class="fa fa-users fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
	    <div class="container categories" dir="rtl">
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
					  <td>رقم الكاشير</td>
					  <td>الاسم بالكامل</td>
					  <td>البريد الالكتروني</td>
					  <td>رقم الهاتف</td>	
					  <td>العنوان</td>
					  <td>نوع المستخدم</td>		
					  <td>التحكم</td>	
					</tr>';
					
	  
					include('../connect.php');  
					$sql = $con->prepare("SELECT * FROM casher");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

					
					echo'<tr>
					  <td>' . $pat["UserID"] . '</td>
					  <td>' . $pat["Username"] . '</td>
					  <td>' . $pat["Email"] . '</td>
					  <td>0' . $pat["Phone"] . '</td>
					  <td>' . $pat["StoreAddress"] . '</td>	
					  <td>كاشير</td>	
					  <td>
						  <a href="members.php?page=Edit&casherid=' . $pat["UserID"]. '" class="btn btn-success"><i class="fa fa-edit"></i> تعديل</a>
						  <a href="members.php?page=Delete&casherid=' . $pat["UserID"]. '" class="btn btn-danger confirm"><i class="fa fa-close"></i> حذف</a>';
						  
						   if($pat["AccountActivity"] == 0){
						  
						  echo'<a style="margin-right:3px" href="members.php?page=Activate&casherid=' . $pat["UserID"]. '" class="btn btn-primary"><i class="fa fa-check"></i> تفعيل</a>';
						  
						  
					      }else{ 
						  
						  echo'<a style="margin-right:3px" href="members.php?page=Not_activate&casherid=' . $pat["UserID"]. '" class="btn btn-danger"><i class="fa fa-close"></i> الغاء تفعيل</a>';
						  
						  } 
						  
					  echo'</td>	
					</tr>';
					}
					
				echo'</table>
			</div>
		</div>';
				
				
			}else{
				
				echo "<div class='alert alert-danger'>هذا الكاشير غير مسجل عندك</div>";
				
			}
		
		echo "</div>";	
	
	
	
	
}elseif($do == "Not_activate"){
	
	
		
 echo "<div class='container'>";
		
		 $casherid = isset($_GET['casherid']) && is_numeric($_GET['casherid']) ? intval($_GET['casherid']) : 0;
		
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM casher WHERE UserID= ?");
		 $stmt->execute(array($casherid));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("UPDATE casher SET AccountActivity = 0 WHERE UseriD = ?");

				$stmt->execute(array($casherid));

				echo '<div dir="rtl" class="alert alert-success">تم الغاء تفعيل هذا الكاشير بنجاح
				<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
				</div>';
				echo '<div class="container">
			<div class="row">
				<div class="col-md-6">
					<a href="members.php?&page=Add" class="btn btn-success btn-lg add">اضافة كاشير جديد <i class="fa fa-plus"></i></a>
				</div>
				<div class="col-md-5 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">ادارة الكاشير</h1>
						<i class="fa fa-users fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
	    <div class="container categories" dir="rtl">
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
					  <td>رقم الكاشير</td>
					  <td>الاسم بالكامل</td>
					  <td>البريد الالكتروني</td>
					  <td>رقم الهاتف</td>	
					  <td>العنوان</td>
					  <td>نوع المستخدم</td>		
					  <td>التحكم</td>	
					</tr>';
					
	  
					include('../connect.php');  
					$sql = $con->prepare("SELECT * FROM casher");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

					
					echo'<tr>
					  <td>' . $pat["UserID"] . '</td>
					  <td>' . $pat["Username"] . '</td>
					  <td>' . $pat["Email"] . '</td>
					  <td>0' . $pat["Phone"] . '</td>
					  <td>' . $pat["StoreAddress"] . '</td>	
					  <td>كاشير</td>	
					  <td>
						  <a href="members.php?page=Edit&casherid=' . $pat["UserID"] . '" class="btn btn-success"><i class="fa fa-edit"></i> تعديل</a>
						  <a href="members.php?page=Delete&casherid=' . $pat["UserID"]. '" class="btn btn-danger confirm"><i class="fa fa-close"></i> حذف</a>';
						  
						   if($pat["AccountActivity"] == 0){
						  
						  echo'<a style="margin-right:3px" href="members.php?page=Activate&casherid=' . $pat["UserID"]. '" class="btn btn-primary"><i class="fa fa-check"></i> تفعيل</a>';
						  
						  
					      }else{ 
						  
						  echo'<a style="margin-right:3px" href="members.php?page=Not_activate&casherid=' . $pat["UserID"]. '" class="btn btn-danger"><i class="fa fa-close"></i> الغاء تفعيل</a>';
						  
						  } 
						  
					  echo'</td>	
					</tr>';
					}
					
				echo'</table>
			</div>
		</div>';
				
				
			}else{
				
				echo "<div class='alert alert-danger'>هذا الكاشير غير مسجل عندك</div>";
				
			}
		
		echo "</div>";	
	
	
}

?> 
		
<div class="footer text-center">
		<p>كل الحقوق محفوظه لدي موقع نقرة واحدة @ 2021</p>
		<div class="links center-block">
			<ul class="list-unstyled">
			  <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
			  <li><a href="www.google.com"><i class="fa fa-google-plus"></i></a></li>	
			  <li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
			  <li><a href="www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>		
			</ul>
		</div> 
     </div>
     <script src="layouts/js/jquery-3.4.1.min.js"></script>
     <script src="layouts/js/jquery-ui.min.js"></script>
     <script src="layouts/js/bootstrap.min.js"></script>
     <script src="layouts/js/jquery.selectBoxIt.min.js"></script>
     <script src="layouts/js/backend.js"></script>
 </body>
</html>			