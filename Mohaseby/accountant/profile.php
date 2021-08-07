<?php

session_start();
if(!(isset($_SESSION['password']))){
	header('Location:../login.php');
}

$id = $_SESSION['casherid'];

?>
<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8"/>
		<title>Profile_Accountant</title>
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
			 <div class="navbar container" dir="rtl" style="width:550px">
				 <hr>
				 <ul class="list-unstyled">
					 <li><a href="add_Sale.php">اضافة عملية بيع</a></li>
					 <li><a href="add_return.php">اضافة عملية ارجاع</a></li>
				 </ul>
				 <hr>
			 </div>
		 </div>
     </div>
<?php 
	

   $do = isset($_GET['page'])? $_GET['page'] : "Info";


  if($do == "Info"){
	
	?>
 
	 <div class="container">
			<div class="row">
				<!--<div class="col-md-5">
					<a href="profile.php?page=Edit" class="btn btn-success btn-lg add">تعديل <i class="fa fa-pencil"></i></a>
				</div>-->
				<div class="col-md-7 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">المعلومات الشخصيه</h1>
						<i class="fa fa-user fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>	
     <div class="latests" dir="rtl">
		 <div class="container">
			 <div class="row">
				<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-heading">
						   <i class="fa fa-user"></i> المعلومات الشخصيه 
						   <span class="toggle-info pull-left">
							   <i class="fa fa-plus fa-lg"></i>
						   </span>	
						</div>
						<div class="panel-body">
								<!--<div class="table-responsive">
									<table class="main-table text-center table table-bordered">
										<tr>
										  <td>رقم صاحب المتجر</td>
										  <td>اسم صاحب المتجر</td>
										  <td>الاسم بالكامل</td>
										  <td>البريد الالكتروني</td>
										  <td>رقم التليفون</td>	
										  <td>العنوان</td>
										  <td>نوع المستخدم</td>		
										  <td>التحكم</td>	
										</tr>
										<tr>
										  <td>1</td>
										  <td>أحمد</td>
										  <td>أحمد صلاح</td>
										  <td>ahmed@gmail.com</td>
										  <td>01095231743</td>
										  <td>بني مزار - المنيا - مصر</td>	
										  <td>صاحب متجر</td>	
										  <td>
											  <a href="members.php?page=Edit" class="btn btn-success"><i class="fa fa-edit"></i> تعديل</a>
											  <a href="members.php?page=Delete" class="btn btn-danger"><i class="fa fa-close"></i> حذف</a>
										  </td>	
										</tr>
									</table>
								</div>	-->
							  
							<!-- Start Profile Page -->
							<?php
	  
	                            include('../connect.php');  
	                            $sql = $con->prepare("SELECT * FROM casher WHERE UserID = $id");
								$sql->execute();
								$rows = $sql->fetchAll();

								foreach($rows as $pat)
								{

							   ?>
							
							
							<h1 class="text-center new" style="margin-bottom:0">مرحبا بك في ملفك الشخصي يا <?php echo $pat["Firstname"] ?></h1>
						    <div class="row">
								<div class="col-md-12 image">
									<img style="border-radius:50%" class='img-responsive img-thumbnail center-block' src='layouts/images/avatar.jpeg' alt='item'>
								</div>
							<div class="col-md-12 item-info">
								<h2 class="text-center" style="margin-top:10px"><?php echo $pat["Firstname"] . ' ' . $pat["Lastname"]; ?></h2>
								<p class="text-center">كاشير</p>
								<ul class="list-unstyled">
									<li>
										<i class="fa fa-pencil fa-fw"></i>
										<span>رقم الكاشير: </span><?php echo $pat["UserID"]; ?>
									</li>
									<li>
										<i class="fa fa-user fa-fw"></i>
										<span>اسم المستخدم: </span><?php echo $pat["Username"]; ?>
									</li>
									<li>
										<i class="fa fa-home fa-fw"></i>
										<span>العنوان </span><?php echo $pat["StoreAddress"]; ?>
									</li>
									<li>
										<i class="fa fa-phone fa-fw"></i>
										<span>رقم الهاتف: </span><?php echo "0" . $pat["Phone"]; ?>
									</li>
									<li>
										<i class="fa fa-envelope-o fa-fw"></i>
										<span>البريد الالكتروني: </span><?php echo $pat["Email"]; ?>
									</li>
									<!--<li>
										<i class="fa fa-calendar fa-fw"></i>
										<span>تاريخ التسجيل: </span>1/2/2021
									</li>-->
									<li>
										<i class="fa fa-edit fa-fw"></i>
										<span>تحديث البيانات: </span><a href="profile.php?page=Edit&casherid=<?php echo $pat["UserID"]; ?>" class="btn btn-primary"><i class="fa fa-edit fa-fw"></i> تعديل</a>
									</li>
								</ul>	
							</div>
						</div>
							
							<?php } ?>
							
							<!-- End Profile Page -->
							
						</div>
					</div>
				</div>
		 </div>
     </div>
</div>	

<?php  }elseif($do == "Edit"){ ?>
		
		
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
					   <!--<a href="profile.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تحديث بياناتك</h1>
						<i class="fa fa-pencil fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Update" method="post">
				 <input type="hidden" name="casherid" value="<?php echo $casherid; ?>"/>	
			   <!-- Start First Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="first" class="form-control username" value="<?php echo $row["Firstname"]; ?>" autocomplete="off" required="required" placeholder="الاسم الأول"/> 
				   </div>
				   <label class="col-sm-2 control-label">الاسم الأول</label>
			   </div>
			   <!-- End First Name field -->
			    <!-- Start Last Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="last" class="form-control username" value="<?php echo $row["Lastname"]; ?>" autocomplete="off" required="required" placeholder="اسم العائله"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم العائله</label>
			   </div>
			   <!-- End Last Name field -->
			    <!-- Start UserName field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="username" class="form-control username" autocomplete="off" required="required" placeholder="اسم المستخدم" value="<?php echo $row["Username"]; ?>"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المستخدم</label>
			   </div>
			   <!-- End UserName field -->	 	 
			   <!-- Start Password field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="hidden" name="old-password" value="<?php echo $row["Password"]; ?>"/> 
					   <input type="password" name="password" class="form-control" autocomplete="off" placeholder="كلمة المرور"/> 
				   </div>
				   <label class="col-sm-2 control-label">كلمة المرور</label>
			   </div>
			   <!-- End Password field -->	
			   <!-- Start Email field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="email" name="email" class="form-control" value="<?php echo $row["Email"]; ?>" autocomplete="off" required="required" placeholder="البريد الالكتروني"/> 
				   </div>
				   <label class="col-sm-2 control-label">البريد الالكتروني</label>
			   </div>
			   <!-- End Email field -->	
			   <!-- Start Phone field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="tel" name="phone" class="form-control" value="<?php echo $row["Phone"]; ?>" autocomplete="off" required="required" placeholder="رقم الهاتف"/> 
				   </div>
				   <label class="col-sm-2 control-label">رقم الهاتف</label>
			   </div>
			   <!-- End Phone field -->	 
			   <!-- Start Address field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="address" class="form-control" value="<?php echo $row["StoreAddress"]; ?>" autocomplete="off" required="required" placeholder="العنوان"/> 
				   </div>
				   <label class="col-sm-2 control-label">العنوان</label>
			   </div>
			   <!-- End Address field -->	 
			   <!-- Start submit field --> 
			   <div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="تحديث" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="profile.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>
			   <!-- End submit field --> 
			 </form>
		 </div>
		
		<?php } ?>


<?php  }elseif($do == "Update"){



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
					   <!--<a href="profile.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-5 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تحديث بياناتك</h1>
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
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="first" class="form-control username" autocomplete="off" required="required" placeholder="الاسم الأول" value="' . $row["Firstname"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">الاسم الأول</label>
			   </div>
			   <!-- End First Name field -->
			    <!-- Start Last Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="last" class="form-control username" autocomplete="off" required="required" placeholder="اسم العائله" value="' . $row["Lastname"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم العائله</label>
			   </div>
			   <!-- End Last Name field -->
			    <!-- Start UserName field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="username" class="form-control username" autocomplete="off" required="required" placeholder="اسم المستخدم" value="' . $row["Username"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المستخدم</label>
			   </div>
			   <!-- End UserName field -->	 
			   <!-- Start Password field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="hidden" name="old-password" value="' . $row["Password"] . '"/> 
					   <input type="password" name="password" class="form-control" autocomplete="off" placeholder="كلمة المرور"/> 
				   </div>
				   <label class="col-sm-2 control-label">كلمة المرور</label>
			   </div>
			   <!-- End Password field -->	 
			   <!-- Start Email field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="email" name="email" class="form-control" autocomplete="off" required="required" placeholder="البريد الالكتروني" value="' . $row["Email"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">البريد الالكتروني</label>
			   </div>
			   <!-- End Email field -->	
			   <!-- Start Phone field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="tel" name="phone" class="form-control" autocomplete="off" required="required" placeholder="رقم التليفون" value="' . $row["Phone"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">رقم التليفون</label>
			   </div>
			   <!-- End Phone field -->	 
			   <!-- Start Address field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="address" class="form-control" autocomplete="off" required="required" placeholder="العنوان" value="' . $row["StoreAddress"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">العنوان</label>
			   </div>
			   <!-- End Address field -->	 	 
				<div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="تحديث" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="profile.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
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
					   <!--<a href="profile.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-5 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تحديث بياناتك</h1>
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
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="first" class="form-control username" autocomplete="off" required="required" placeholder="الاسم الأول" value="' . $row["Firstname"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">الاسم الأول</label>
			   </div>
			   <!-- End First Name field -->
			    <!-- Start Last Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="last" class="form-control username" autocomplete="off" required="required" placeholder="اسم العائله" value="' . $row["Lastname"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم العائله</label>
			   </div>
			   <!-- End Last Name field -->
			    <!-- Start UserName field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="username" class="form-control username" autocomplete="off" required="required" placeholder="اسم المستخدم" value="' . $row["Username"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المستخدم</label>
			   </div>
			   <!-- End UserName field -->	 
			   <!-- Start Password field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="hidden" name="old-password" value="' . $row["Password"] . '"/> 
					   <input type="password" name="password" class="form-control" autocomplete="off" placeholder="كلمة المرور"/> 
				   </div>
				   <label class="col-sm-2 control-label">كلمة المرور</label>
			   </div>
			   <!-- End Password field -->	 
			   <!-- Start Email field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="email" name="email" class="form-control" autocomplete="off" required="required" placeholder="البريد الالكتروني" value="' . $row["Email"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">البريد الالكتروني</label>
			   </div>
			   <!-- End Email field -->	
			   <!-- Start Phone field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="tel" name="phone" class="form-control" autocomplete="off" required="required" placeholder="رقم التليفون" value="' . $row["Phone"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">رقم التليفون</label>
			   </div>
			   <!-- End Phone field -->	 
			   <!-- Start Address field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="address" class="form-control" autocomplete="off" required="required" placeholder="العنوان" value="' . $row["StoreAddress"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">العنوان</label>
			   </div>
			   <!-- End Address field -->	 	 
				<div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="تحديث" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="profile.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
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
					تم تحديث بياناتك بنجاح
						<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="profile.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-5 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تحديث بياناتك</h1>
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
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="first" class="form-control username" autocomplete="off" required="required" placeholder="الاسم الأول" value="' . $row["Firstname"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">الاسم الأول</label>
			   </div>
			   <!-- End First Name field -->
			    <!-- Start Last Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="last" class="form-control username" autocomplete="off" required="required" placeholder="اسم العائله" value="' . $row["Lastname"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم العائله</label>
			   </div>
			   <!-- End Last Name field -->
			    <!-- Start UserName field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="username" class="form-control username" autocomplete="off" required="required" placeholder="اسم المستخدم" value="' . $row["Username"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المستخدم</label>
			   </div>
			   <!-- End UserName field -->	 
			   <!-- Start Password field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="hidden" name="old-password" value="' . $row["Password"] . '"/> 
					   <input type="password" name="password" class="form-control" autocomplete="off" placeholder="كلمة المرور"/> 
				   </div>
				   <label class="col-sm-2 control-label">كلمة المرور</label>
			   </div>
			   <!-- End Password field -->	 
			   <!-- Start Email field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="email" name="email" class="form-control" autocomplete="off" required="required" placeholder="البريد الالكتروني" value="' . $row["Email"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">البريد الالكتروني</label>
			   </div>
			   <!-- End Email field -->	
			   <!-- Start Phone field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="tel" name="phone" class="form-control" autocomplete="off" required="required" placeholder="رقم التليفون" value="' . $row["Phone"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">رقم التليفون</label>
			   </div>
			   <!-- End Phone field -->	 
			   <!-- Start Address field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="address" class="form-control" autocomplete="off" required="required" placeholder="العنوان" value="' . $row["StoreAddress"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">العنوان</label>
			   </div>
			   <!-- End Address field -->	 	 
				<div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="تحديث" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="profile.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
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