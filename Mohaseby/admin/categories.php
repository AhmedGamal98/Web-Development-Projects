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
		<title>Categories</title>
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
					 <li><a href="members.php">الكاشير</a></li>
					 <li class="active"><a href="categories.php">المخازن</a></li>
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
					<a href="categories.php?pagename=categories&page=Add" class="btn btn-success btn-lg add">اضافة مخزن جديد <i class="fa fa-plus"></i></a>
				</div>
				<div class="col-md-5 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">ادارة المخازن</h1>
						<i class="fa fa-archive fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
	    <div class="container categories" dir="rtl">
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
					  <td class="number">رقم المخزن</td>
					  <td>اسم المخزن</td>
					  <td>التحكم</td>	
					</tr>
					<?php
	  
					include('../connect.php');  
					$sql = $con->prepare("SELECT * FROM stock WHERE ownerid=$id");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				   ?>
					<tr>
					  <td><?php  echo $pat["StockID"];  ?></td>
					  <td><?php  echo $pat["Stockname"];  ?></td>
					  <td class="edit">
						  <a href="categories.php?page=Category&stockid=<?php  echo $pat["StockID"];  ?>" class="btn btn-primary"><i class="fa fa-eye"></i> عرض</a>
						  <a href="categories.php?page=Edit&stockid=<?php  echo $pat["StockID"];  ?>" class="btn btn-success"><i class="fa fa-edit"></i> تعديل</a>
						  <a href="categories.php?page=Delete&stockid=<?php  echo $pat["StockID"];  ?>" class="btn btn-danger confirm"><i class="fa fa-close"></i> حذف</a>
						  
					  </td>	
					</tr>
					
					<?php }  ?>
					
				</table>
			</div>
		</div>
        
		 
    <?php
		
}elseif($do == "Add"){ ?>
	
	
         <!--<h1 class="text-center new">اضافة مخزن جديد</h1>-->
		<div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="categories.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">اضافة مخزن جديد</h1>
						<i class="fa fa-plus fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Insert" method="post">
			   <!-- Start Category Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="name" class="form-control" autocomplete="off" required="required" placeholder="اسم المخزن"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المخزن</label>
			   </div>
			   <!-- End Category Name field -->
			   <!-- Start submit field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-offset-2 col-sm-10">
					   <input type="submit" value="اضافة مخزن" class="btn btn-success btn-lg"/> 
				   </div>
			   </div>
			   <!-- End submit field -->
				 <div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="اضافة مخزن" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="categories.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	
			 </form>
			 <!--<i style="font-size:39px;text-align:center;margin-left:5px;line-height:.5;position:absolute;right:40.2%" class="fa fa-close"></i>
			  <!-- Start Finish field  
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:465px;left:490px" href="categories.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
		 </div>

	
	
<?php
	
}elseif($do == "Insert"){
	
	
echo "<div class='container'>";
		
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			
			$name = $_POST["name"];
			
			//Validate Form By Server site
			
			$formErrors = array();
			
			if(empty($name)){
				
				$formErrors[] = "اسم المخزن يجب أن يكتب";
				
			}
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				//Check if the item exist in database or not
				
				//$check = checkItem("Username" , "users" , $username);
				
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM stock WHERE Stockname= ?");
				 $stmt->execute(array($name));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				
				if($count > 0){
					
					echo "<div dir='rtl' class='alert alert-danger'>هذا المخزن موجود من قبل
					<button type='button' class='close pull-left' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
					</div>";
					
					echo ' <!--<h1 class="text-center new">اضافة مخزن جديد</h1>-->
		<div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="categories.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">اضافة مخزن جديد</h1>
						<i class="fa fa-plus fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Insert" method="post">
			   <!-- Start Category Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="name" class="form-control" autocomplete="off" required="required" placeholder="اسم المخزن"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المخزن</label>
			   </div>
			   <!-- End Category Name field -->
			   <!-- Start submit field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-offset-2 col-sm-10">
					   <input type="submit" value="اضافة مخزن" class="btn btn-success btn-lg"/> 
				   </div>
			   </div>
			   <!-- End submit field -->
				 <div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="اضافة مخزن" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="categories.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	
			 </form>
			 <!--<i style="font-size:39px;text-align:center;margin-left:5px;line-height:.5;position:absolute;right:40.2%" class="fa fa-close"></i>
			  <!-- Start Finish field  
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:465px;left:490px" href="categories.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
		 </div>';
					
				}else{
				

					$stmt = $con->prepare("INSERT INTO stock(Stockname , ownerid) VALUES(:name, :ownerid)");

					$stmt->execute(array(

						'name' => $name,
						'ownerid' => $id

					));


					// echo success message

					echo '<div dir="rtl" class="alert alert-success">تم اضافة مخزن جديد بنجاح
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo ' <!--<h1 class="text-center new">اضافة مخزن جديد</h1>-->
		<div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="categories.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">اضافة مخزن جديد</h1>
						<i class="fa fa-plus fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Insert" method="post">
			   <!-- Start Category Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="name" class="form-control" autocomplete="off" required="required" placeholder="اسم المخزن"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المخزن</label>
			   </div>
			   <!-- End Category Name field -->
			   <!-- Start submit field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-offset-2 col-sm-10">
					   <input type="submit" value="اضافة مخزن" class="btn btn-success btn-lg"/> 
				   </div>
			   </div>
			   <!-- End submit field -->
				 <div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="اضافة مخزن" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="categories.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	
			 </form>
			 <!--<i style="font-size:39px;text-align:center;margin-left:5px;line-height:.5;position:absolute;right:40.2%" class="fa fa-close"></i>
			  <!-- Start Finish field  
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:465px;left:490px" href="categories.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
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
	 $stockid = isset($_GET['stockid']) && is_numeric($_GET['stockid']) ? intval($_GET['stockid']) : 0;
	 $stmt = $con->prepare("SELECT * FROM stock WHERE StockID= ? LIMIT 1");
	 $stmt->execute(array($stockid));
	 $row = $stmt->fetch();
	 $count = $stmt->rowCount();				  
							  
	if($count > 0){
							  
   ?>	
		
		
		 <div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="categories.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تحديث بيانات مخزن</h1>
						<i class="fa fa-pencil fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Update" method="post">
			   <!-- Start Category Name field --> 
			   <input type="hidden" name="stockid" value="<?php echo $stockid; ?>"/>		 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="name" class="form-control" autocomplete="off" placeholder="اسم المخزن" value="<?php echo $row["Stockname"]; ?>"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المخزن</label>
			   </div>
			   <!-- End Category Name field -->
			   <!-- Start submit field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-offset-2 col-sm-10">
					   <input type="submit" value="تحديث" class="btn btn-success btn-lg"/> 
				   </div>
			   </div>
			   <!-- End submit field -->
				 <div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="تحديث" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="categories.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	
			 </form>
			 <!-- Start Finish field 
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:465px;left:490px" href="categories.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
		 </div>
	
		<?php  } ?>
	
<?php
	
}elseif($do == "Update"){
	
	
        include('../connect.php');  
     	echo "<div class='container'>";
		
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			//Get Varaiables from Post Method
			
			$id       = $_POST["stockid"];
			$name     = $_POST["name"];
			
			
			
			//Validate Form By Server site
			
			$formErrors = array();
			
			if(empty($name)){
				
				$formErrors[] = "اسم المخزن يجب أن يكتب";
				
			}
			
			
			//Loop into errors array and echo it
			
			foreach($formErrors as $error){
				
				
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM stock WHERE StockID= ? LIMIT 1");
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
					   <!--<a href="categories.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تحديث بيانات مخزن</h1>
						<i class="fa fa-pencil fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Update" method="post">
			   <!-- Start Category Name field --> 
			   <input type="hidden" name="stockid" value="' . $id . '"/>		 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="name" class="form-control" autocomplete="off"  placeholder="اسم المخزن" value="' .  $row["Stockname"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المخزن</label>
			   </div>
			   <!-- End Category Name field -->
			   <!-- Start submit field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-offset-2 col-sm-10">
					   <input type="submit" value="تحديث" class="btn btn-success btn-lg"/> 
				   </div>
			   </div>
			   <!-- End submit field -->
				 <div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="تحديث" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="categories.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	
			 </form>
			 <!-- Start Finish field 
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:465px;left:490px" href="categories.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
		 </div>';
				
			}
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				//Update the Database with this info
				
				$stmt2 = $con->prepare("SELECT * FROM stock WHERE Stockname = ? AND StockID != ?");
				
				$stmt2->execute(array($name , $id));
				
				$count = $stmt2->rowCount();
				
				if($count > 0){
					
					
				 //include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM stock WHERE StockID= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
					
					
		   echo "<div dir='rtl' class='alert alert-danger'>
		   
		   هذه المخزن موجود من قبل من فضلك أعد المحاولة
		   <button type='button' class='close pull-left' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
		   </div>";
					
			echo '<div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="categories.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تحديث بيانات مخزن</h1>
						<i class="fa fa-pencil fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Update" method="post">
			   <!-- Start Category Name field --> 
			   <input type="hidden" name="stockid" value="' . $id . '"/>		 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="name" class="form-control" autocomplete="off"  placeholder="اسم المخزن" value="' .  $row["Stockname"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المخزن</label>
			   </div>
			   <!-- End Category Name field -->
			   <!-- Start submit field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-offset-2 col-sm-10">
					   <input type="submit" value="تحديث" class="btn btn-success btn-lg"/> 
				   </div>
			   </div>
			   <!-- End submit field -->
				 <div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="تحديث" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="categories.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	
			 </form>
			 <!-- Start Finish field 
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:465px;left:490px" href="categories.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
		 </div>';
					
					
				}else{
					
					
					$stmt = $con->prepare("UPDATE stock SET Stockname = ? WHERE StockID = ?");
					$stmt->execute(array($name , $id));

					// echo success message
					
					
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM stock WHERE StockID= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();

					echo '<div dir="rtl" class="alert alert-success">
					تم تحديث اسم المخزن بنجاح
						<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="categories.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تحديث بيانات مخزن</h1>
						<i class="fa fa-pencil fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Update" method="post">
			   <!-- Start Category Name field --> 
			   <input type="hidden" name="stockid" value="' . $id . '"/>		 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="name" class="form-control" autocomplete="off"  placeholder="اسم المخزن" value="' .  $row["Stockname"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المخزن</label>
			   </div>
			   <!-- End Category Name field -->
			   <!-- Start submit field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-offset-2 col-sm-10">
					   <input type="submit" value="تحديث" class="btn btn-success btn-lg"/> 
				   </div>
			   </div>
			   <!-- End submit field -->
				 <div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="تحديث" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="categories.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	
			 </form>
			 <!-- Start Finish field 
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:465px;left:490px" href="categories.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
		 </div>';
					
				}
				
			}
			
		}else{
			
			echo "<div class='alert alert-danger'>لا يمكنك الدخول لهذه الصفحة</div>";
			
		}
		
		echo "</div>";	
	
	
	
	
	
}elseif($do == "Delete"){
	
	
echo "<div class='container'>";
		
		 $stockid = isset($_GET['stockid']) && is_numeric($_GET['stockid']) ? intval($_GET['stockid']) : 0;
		
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM stock WHERE StockID= ?");
		 $stmt->execute(array($stockid));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();

			if($count > 0){

				$stmt = $con->prepare("DELETE FROM stock WHERE StockID = :stockid");

				$stmt->bindParam(":stockid" , $stockid);

				$stmt->execute();

				echo '<div dir="rtl" class="alert alert-success">تم حذف هذا المخزن
				<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
				</div>';
				
				echo '<div class="container">
			<div class="row">
				<div class="col-md-6">
					<a href="categories.php?pagename=categories&page=Add" class="btn btn-success btn-lg add">اضافة مخزن جديد <i class="fa fa-plus"></i></a>
				</div>
				<div class="col-md-5 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">ادارة المخازن</h1>
						<i class="fa fa-archive fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
	    <div class="container categories" dir="rtl">
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
					  <td class="number">رقم المخزن</td>
					  <td>اسم المخزن</td>
					  <td>التحكم</td>
					</tr>  
					</tr>';
					
	  
					include('../connect.php');  
					$sql = $con->prepare("SELECT * FROM stock WHERE ownerid=$id");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

					
					echo'<tr>
					  <td>' . $pat["StockID"] . '</td>
					  <td>' . $pat["Stockname"] . '</td>	
					  <td class="edit">
						  <a href="categories.php?page=Category&stockid="' . $pat["StockID"] . '" class="btn btn-primary"><i class="fa fa-eye"></i> عرض</a>
						  <a href="categories.php?page=Edit&stockid="' . $pat["StockID"] . '" class="btn btn-success"><i class="fa fa-edit"></i> تعديل</a>
						  <a href="categories.php?page=Delete&stockid="' . $pat["StockID"] . '" class="btn btn-danger confirm"><i class="fa fa-close"></i> حذف</a>
						  
					  </td>	
					</tr>';
					}
					
				echo'</table>
			</div>
		</div>';
				
				
			}else{
				
				echo "<div class='alert alert-danger'>هذا المخزن غير مسجل عندك</div>";
				
				
			}
		
		echo "</div>";		
	

	
}elseif($do == "Category"){ ?>
		
		<?php

	    $stockid = isset($_GET['stockid']) && is_numeric($_GET['stockid']) ? intval($_GET['stockid']) : 0;
	
		 include('../connect.php');  						  
		 $stmt = $con->prepare("SELECT * FROM stock WHERE StockID= ?");
		 $stmt->execute(array($stockid));
		 $row = $stmt->fetch();
	
	
	     $count = 0;
	     $stmt = $con->prepare("SELECT * FROM product WHERE StockID= ?");
		 $stmt->execute(array($stockid));
		 $rows = $stmt->fetchAll();
	     foreach($rows as $pat)
		 {
	 
	     $avail = $pat["Availablequantity"];
	     if($avail <= 100){
			 
			 
			$count++;
			 
			 
		 }}
			 
		 if($count > 0){
			 
			 
			  echo '<div class="container"><div dir="rtl" class="alert alert-success">لاحظ المنتجات الموجودة داخل هذا المخزن قليلة
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div></div>';
			 
			 
			 
		 }	 
		 
		   
						   
         ?>						   
	
	
		<div class="container">
			<div class="row">
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">مخزن <?php echo $row["Stockname"]; ?></h1>
						<i class="fa fa-archive fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
	    <div class="container" dir="rtl">
			<div class="table-responsive">
				<div class="main text-center" style="height:250px">
					<div class="items-category product">
						<i class="fa fa-tag user"></i>
						<a href="items.php?stockid=<?php echo $stockid; ?>"><h3>ادارة المنتجات</h3></a>
						<i class="fa fa-eye eye"></i>
					</div>
					<div class="buying-category purchase">
						<i class="fa fa-shopping-cart user"></i>
						<a href="purchases.php?stockid=<?php echo $stockid; ?>"><h3>ادارة المشتريات الاضافية</h3></a>
						<i class="fa fa-eye eye"></i>
					</div>
				</div>
			</div>
		</div>

<?php
	
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