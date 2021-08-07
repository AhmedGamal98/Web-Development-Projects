<?php

session_start();

if(!(isset($_SESSION['password']))){
	header('Location:../login.php');
}


$stockid = isset($_GET['stockid']) && is_numeric($_GET['stockid']) ? intval($_GET['stockid']) : 0;

?>
<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8"/>
		<title>Items</title>
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
				<div class="col-md-3">
					<a href="items.php?page=Add&stockid=<?php echo $stockid;  ?>" class="btn btn-success btn-lg add">اضافة منتج جديد <i class="fa fa-plus"></i></a>
				</div>
				<?php
	
	             include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM stock WHERE StockID= ?");
				 $stmt->execute(array($stockid));
				 $row = $stmt->fetch();
	
	            ?>
				<div class="col-md-9 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">ادارة المنتجات في مخزن <?php  echo $row["Stockname"];  ?></h1>
						<i class="fa fa-tag fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
	    <div class="container categories" dir="rtl">
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
					  <td>رقم المنتج</td>
					  <td>رقم المخزن</td>	
					  <td>اسم المنتج</td>
					  <td>الكميه الاجمالبه</td>
					  <td>الكميه المتاحه</td>
					  <td>سعر وحدة الشراء</td>		
					  <td>سعر وحدة البيع</td>
					  <td>التحكم</td>	
					</tr>
					<?php
	  
					include('../connect.php');  
					$sql = $con->prepare("SELECT * FROM product WHERE StockID=$stockid");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				   ?>
					<tr>
					  <td><?php echo $pat["ProductID"]; ?></td>
					  <td><?php echo $pat["StockID"]; ?></td>		
					  <td><?php echo $pat["Productname"]; ?></td>
					  <td><?php echo $pat["Totalquantity"]; ?></td>
					  <td><?php echo $pat["Availablequantity"]; ?></td>
					  <td><?php echo $pat["purchaseUnitprice"]; ?></td>
					  <td><?php echo $pat["saleUnitprice"]; ?></td>		
					  <td>
						  <a href="items.php?page=Edit&itemid=<?php echo $pat["ProductID"]; ?>" class="btn btn-success"><i class="fa fa-edit"></i> تعديل</a>
						  <!--<a href="items.php?page=Delete&itemid=1" class="btn btn-danger"><i class="fa fa-close"></i> حذف</a>-->
						  
					  </td>	
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		
		
		 
    <?php
		
}elseif($do == "Add"){
		
  			  
	 						  
	 $stockid = isset($_GET['stockid']) && is_numeric($_GET['stockid']) ? intval($_GET['stockid']) : 0;
	 
	?>						  
	
		<div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="items.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">اضافة منتج جديد</h1>
						<i class="fa fa-plus fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Insert" method="post">
			   <!-- Start Item Name field --> 
			   <input type="hidden" name="stockid" value="<?php echo $stockid; ?>"/>		 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="name" class="form-control" autocomplete="off" required="required" placeholder="اسم المنتج"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المنتج</label>
			   </div>
			   <!-- End Item Name field -->
			   <!-- Start Total Quantity field --> 
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="total_quantity" class="form-control" autocomplete="off" required="required" placeholder="الكميه الكليه"/> 
				   </div>
				   <label class="col-sm-2 control-label">الكميه الكليه</label>
			   </div>
			   <!-- End Total Quantity field -->	
			   <!-- Start Available Quantity field --> 
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="available_quantity" class="form-control" autocomplete="off" required="required" placeholder="الكميه المتاحه"/> 
				   </div>
				   <label class="col-sm-2 control-label">الكميه المتاحه</label>
			   </div>
			   <!-- End Available Quantity field -->	
			   <!-- Start  Purchase Price field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="purchase_price" class="form-control" autocomplete="off" required="required" placeholder="سعر وحدة الشراء"/> 
				   </div>
				   <label class="col-sm-2 control-label">سعر وحدة الشراء</label>
			   </div>
			   <!-- End Purchase Price field -->	
			   <!-- Start  Sale Price field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="sale_price" class="form-control" autocomplete="off" required="required" placeholder="سعر وحدة البيع"/> 
				   </div>
				   <label class="col-sm-2 control-label">سعر وحدة البيع</label>
			   </div>
			   <!-- End Sale Price field -->		 
			   <!-- Start Category field -->		 
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <select name="stock" required="required">
					     <option value="0">...</option>
						 <option value="1">مخزن 1</option>
						 <option value="2">مخزن 2</option>
						 <option value="3">مخزن 3</option>
						 <option value="4">مخزن 4</option>  
					   </select>
				   </div>
				   <label class="col-sm-2 control-label">رقم المخزن</label>
			   </div>-->
			   <!-- End Category field -->		 
			   <!-- Start submit field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-offset-2 col-sm-10">
					   <input type="submit" value="اضافة منتج" class="btn btn-success btn-lg"/> 
				   </div>
			   </div>
			   <!-- End submit field -->
				 <div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="اضافة منتج" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="items.php?stockid=<?php echo $stockid; ?>"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	
			 </form>
			 <!-- Start Finish field  
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:779px;left:490px" href="items.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
		 </div>

	
<?php
	
}elseif($do == "Insert"){
	
	
	//$stockid = isset($_GET['stockid']) && is_numeric($_GET['stockid']) ? intval($_GET['stockid']) : 0;
	
	
	echo "<div class='container'>";
		
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			$id = $_POST["stockid"];
			$name = $_POST["name"];
			//$total = $_POST["total_quantity"];
			//$available = $_POST["available_quantity"];
			$p_price = $_POST["purchase_price"];
			$s_price = $_POST["sale_price"];
			
			//Validate Form By Server site
			
			$formErrors = array();
			
			if(empty($name)){
				
				$formErrors[] = "اسم المنتج يجب أن يكتب";
				
			}
			/*if(empty($total)){
				
				$formErrors[] = "الكمية الاجمالية يجب أن تكتب";
				
			}
			if(empty($available)){
				
				$formErrors[] = "الكمية المتاحة يجب أن تكتب";
				
			}*/
			if(empty($p_price)){
				
				$formErrors[] = "سعر وحدة الشراء يجب أن يكتب";
				
			}
			if(empty($s_price)){
				
				$formErrors[] = "سعر وحدة البيع يجب أن يكتب";
				
			}
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				//Check if the item exist in database or not
				
				//$check = checkItem("Username" , "users" , $username);
				
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM product WHERE Productname= ?");
				 $stmt->execute(array($name));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();
				
				if($count > 0){
					
					echo "<div dir='rtl' class='alert alert-danger'>هذا المنتج موجود من قبل
					<button type='button' class='close pull-left' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
					</div>";
					
					echo '<div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="items.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">اضافة منتج جديد</h1>
						<i class="fa fa-plus fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Insert" method="post">
			   <!-- Start Item Name field --> 
			   <input type="hidden" name="stockid" value="' . $id . '"/>		
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="name" class="form-control" autocomplete="off" required="required" placeholder="اسم المنتج"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المنتج</label>
			   </div>
			   <!-- End Item Name field -->
			   <!-- Start Total Quantity field --> 
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="total_quantity" class="form-control" autocomplete="off" required="required" placeholder="الكميه الكليه"/> 
				   </div>
				   <label class="col-sm-2 control-label">الكميه الكليه</label>
			   </div>
			   <!-- End Total Quantity field -->	
			   <!-- Start Available Quantity field --> 
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="available_quantity" class="form-control" autocomplete="off" required="required" placeholder="الكميه المتاحه"/> 
				   </div>
				   <label class="col-sm-2 control-label">الكميه المتاحه</label>
			   </div>
			   <!-- End Available Quantity field -->	
			   <!-- Start  Purchase Price field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="purchase_price" class="form-control" autocomplete="off" required="required" placeholder="سعر وحدة الشراء"/> 
				   </div>
				   <label class="col-sm-2 control-label">سعر وحدة الشراء</label>
			   </div>
			   <!-- End Purchase Price field -->	
			   <!-- Start  Sale Price field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="sale_price" class="form-control" autocomplete="off" required="required" placeholder="سعر وحدة البيع"/> 
				   </div>
				   <label class="col-sm-2 control-label">سعر وحدة البيع</label>
			   </div>
			   <!-- End Sale Price field -->		 
			   <!-- Start Category field -->		 
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <select name="stock" required="required">
					     <option value="0">...</option>
						 <option value="1">مخزن 1</option>
						 <option value="2">مخزن 2</option>
						 <option value="3">مخزن 3</option>
						 <option value="4">مخزن 4</option>  
					   </select>
				   </div>
				   <label class="col-sm-2 control-label">رقم المخزن</label>
			   </div>-->
			   <!-- End Category field -->		 
			   <!-- Start submit field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-offset-2 col-sm-10">
					   <input type="submit" value="اضافة منتج" class="btn btn-success btn-lg"/> 
				   </div>
			   </div>
			   <!-- End submit field -->
				 <div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="اضافة منتج" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="items.php?stockid=' . $id . '"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	
			 </form>
			 <!-- Start Finish field  
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:779px;left:490px" href="items.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
		 </div>';
					
				}else{
				

					$stmt = $con->prepare("INSERT INTO  product(Productname , purchaseUnitprice , saleUnitprice , StockID
                         ) VALUES(:name, :purchase , :sale , :stockid)");

					$stmt->execute(array(

						'name' => $name,
						'purchase' => $p_price,
						'sale' => $s_price,
						'stockid' => $id

					));


					// echo success message

					echo '<div dir="rtl" class="alert alert-success">تم اضافة منتج جديد بنجاح
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					
					echo ' <div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="items.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">اضافة منتج جديد</h1>
						<i class="fa fa-plus fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Insert" method="post">
			   <!-- Start Item Name field --> 
			   <input type="hidden" name="stockid" value="' . $id . '"/>
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="name" class="form-control" autocomplete="off" required="required" placeholder="اسم المنتج"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المنتج</label>
			   </div>
			   <!-- End Item Name field -->
			   <!-- Start Total Quantity field --> 
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="total_quantity" class="form-control" autocomplete="off" required="required" placeholder="الكميه الكليه"/> 
				   </div>
				   <label class="col-sm-2 control-label">الكميه الكليه</label>
			   </div>
			   <!-- End Total Quantity field -->	
			   <!-- Start Available Quantity field --> 
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="available_quantity" class="form-control" autocomplete="off" required="required" placeholder="الكميه المتاحه"/> 
				   </div>
				   <label class="col-sm-2 control-label">الكميه المتاحه</label>
			   </div>
			   <!-- End Available Quantity field -->	
			   <!-- Start  Purchase Price field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="purchase_price" class="form-control" autocomplete="off" required="required" placeholder="سعر وحدة الشراء"/> 
				   </div>
				   <label class="col-sm-2 control-label">سعر وحدة الشراء</label>
			   </div>
			   <!-- End Purchase Price field -->	
			   <!-- Start  Sale Price field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="sale_price" class="form-control" autocomplete="off" required="required" placeholder="سعر وحدة البيع"/> 
				   </div>
				   <label class="col-sm-2 control-label">سعر وحدة البيع</label>
			   </div>
			   <!-- End Sale Price field -->		 
			   <!-- Start Category field -->		 
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <select name="stock" required="required">
					     <option value="0">...</option>
						 <option value="1">مخزن 1</option>
						 <option value="2">مخزن 2</option>
						 <option value="3">مخزن 3</option>
						 <option value="4">مخزن 4</option>  
					   </select>
				   </div>
				   <label class="col-sm-2 control-label">رقم المخزن</label>
			   </div>-->
			   <!-- End Category field -->		 
			   <!-- Start submit field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-offset-2 col-sm-10">
					   <input type="submit" value="اضافة منتج" class="btn btn-success btn-lg"/> 
				   </div>
			   </div>
			   <!-- End submit field -->
				 <div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="اضافة منتج" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="items.php?stockid=' . $id . '"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	
			 </form>
			 <!-- Start Finish field  
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:779px;left:490px" href="items.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
		 </div>';
					
					
				}
			}
			
		}else{
			
			echo "<div class='alert alert-danger'>لا يمكنك الدخول لهذه الصفحة</div>";
			
		}
		
		echo "</div>";
	
	
}elseif($do == "Edit"){
		
		
		 include('../connect.php');  
		 $itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ? intval($_GET['itemid']) : 0;
		 $stmt = $con->prepare("SELECT * FROM product WHERE ProductID= ? LIMIT 1");
		 $stmt->execute(array($itemid));
		 $row = $stmt->fetch();
		 $count = $stmt->rowCount();				  
							  
	if($count > 0){
		
		
		?>
	
	
		 <div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="items.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تحديث منتج جديد</h1>
						<i class="fa fa-pencil fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Update" method="post">
			   <!-- Start Item Name field --> 
			   <input type="hidden" name="itemid" value="<?php echo $itemid; ?>"/>		 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="name" class="form-control" autocomplete="off" required="required" placeholder="اسم المنتج" value="<?php echo $row["Productname"]; ?>"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المنتج</label>
			   </div>
			   <!-- End Item Name field -->
			   <!-- Start Price field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="price" class="form-control" autocomplete="off" required="required" placeholder="سعر وحدة الشراء" value="<?php echo $row["purchaseUnitprice"]; ?>"/>
				   </div>
				   <label class="col-sm-2 control-label">سعر وحدة الشراء</label>
			   </div>
			   <!-- End Price field -->		 
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
					   <a href="items.php?stockid=<?php echo $row["StockID"]; ?>"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	
			 </form>
			 <!-- Start Finish field 
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:528px;left:490px" href="items.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
		 </div>
		
		<?php  }  ?>
	
	
<?php
	
}elseif($do == "Update"){
	
	
	    include('../connect.php');  
     	echo "<div class='container'>";
		
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			//Get Varaiables from Post Method
			
			$id       = $_POST["itemid"];
			$name     = $_POST["name"];
			$price     = $_POST["price"];
			
			
			
			//Validate Form By Server site
			
			$formErrors = array();
			
			if(empty($name)){
				
				$formErrors[] = "اسم المنتج يجب أن يكتب";
				
			}
			if(empty($price)){
				
				$formErrors[] = "سعر وحدة الشراء يجب أن يكتب";
				
			}
			
			
			//Loop into errors array and echo it
			
			foreach($formErrors as $error){
				
										  
				 $stmt = $con->prepare("SELECT * FROM product WHERE ProductID= ? LIMIT 1");
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
					   <!--<a href="items.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تحديث منتج جديد</h1>
						<i class="fa fa-pencil fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Update" method="post">
			   <!-- Start Item Name field --> 
			   <input type="hidden" name="itemid" value="' . $id . '"/>		 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="name" class="form-control" autocomplete="off" required="required" placeholder="اسم المنتج" value="' .$row["Productname"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المنتج</label>
			   </div>
			   <!-- End Item Name field -->
			   <!-- Start Price field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="price" class="form-control" autocomplete="off" required="required" placeholder="سعر وحدة الشراء" value="' .$row["purchaseUnitprice"] . '"/>
				   </div>
				   <label class="col-sm-2 control-label">سعر وحدة الشراء</label>
			   </div>
			   <!-- End Price field -->		 
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
					   <a href="items.php?stockid=' . $row["StockID"] . '"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	
			 </form>
			 <!-- Start Finish field 
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:528px;left:490px" href="items.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
		 </div>';
				
			}
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				//Update the Database with this info
				
				$stmt2 = $con->prepare("SELECT * FROM product WHERE Productname = ? AND ProductID != ?");
				
				$stmt2->execute(array($name , $id));
				
				$count = $stmt2->rowCount();
				
				if($count > 0){
					
					
				 //include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM product WHERE ProductID= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
					
					
		   echo "<div dir='rtl' class='alert alert-danger'>
		   
		   هذا المنتج موجود من قبل من فضلك أعد المحاولة
		   <button type='button' class='close pull-left' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
		   </div>";
					
			echo '<div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="items.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تحديث منتج جديد</h1>
						<i class="fa fa-pencil fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Update" method="post">
			   <!-- Start Item Name field --> 
			   <input type="hidden" name="itemid" value="' . $id . '"/>		 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="name" class="form-control" autocomplete="off" required="required" placeholder="اسم المنتج" value="' .$row["Productname"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المنتج</label>
			   </div>
			   <!-- End Item Name field -->
			   <!-- Start Price field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="price" class="form-control" autocomplete="off" required="required" placeholder="سعر وحدة الشراء" value="' .$row["purchaseUnitprice"] . '"/>
				   </div>
				   <label class="col-sm-2 control-label">سعر وحدة الشراء</label>
			   </div>
			   <!-- End Price field -->		 
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
					   <a href="items.php?stockid=' . $row["StockID"] . '"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	
			 </form>
			 <!-- Start Finish field 
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:528px;left:490px" href="items.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
		 </div>';
					
					
				}else{
					
					
					$stmt = $con->prepare("UPDATE product SET Productname = ? , purchaseUnitprice = ? WHERE ProductID = ?");
					$stmt->execute(array($name , $price , $id));

					// echo success message
					
					
				 include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM product WHERE ProductID= ? LIMIT 1");
				 $stmt->execute(array($id));
				 $row = $stmt->fetch();
				 $count = $stmt->rowCount();

					echo '<div dir="rtl" class="alert alert-success">
					تم تحديث اسم المنتج وسعر وحدة شرائه بنجاح
						<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					echo '<div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <!--<a href="items.php" class="btn btn-success btn-lg add">انهاء العمليه</a>--> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تحديث منتج جديد</h1>
						<i class="fa fa-pencil fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Update" method="post">
			   <!-- Start Item Name field --> 
			   <input type="hidden" name="itemid" value="' . $id . '"/>		 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="name" class="form-control" autocomplete="off" required="required" placeholder="اسم المنتج" value="' .$row["Productname"] . '"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المنتج</label>
			   </div>
			   <!-- End Item Name field -->
			   <!-- Start Price field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="price" class="form-control" autocomplete="off" required="required" placeholder="سعر وحدة الشراء" value="' .$row["purchaseUnitprice"] . '"/>
				   </div>
				   <label class="col-sm-2 control-label">سعر وحدة الشراء</label>
			   </div>
			   <!-- End Price field -->		 
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
					   <a href="items.php?stockid=' . $row["StockID"] . '"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	
			 </form>
			 <!-- Start Finish field 
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:528px;left:490px" href="items.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
		 </div>';
					
				}
				
			}
			
		}else{
			
			echo "<div class='alert alert-danger'>لا يمكنك الدخول لهذه الصفحة</div>";
			
		}
		
		echo "</div>";	
	
	
	
}elseif($do =="All"){ ?>
	

		<div class="container">
			<div class="row">
				<div class="col-md-7 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">المنتجات الكلية</h1>
						<i class="fa fa-tag fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
	    <div class="container categories" dir="rtl">
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
					  <td>رقم المنتج</td>
					  <td>رقم المخزن</td>	
					  <td>اسم المنتج</td>
					  <td>الكميه الاجمالبه</td>
					  <td>الكميه المتاحه</td>
					  <td>سعر وحدة البيع</td>
					</tr>
					<tr>
					  <td>1</td>
					  <td>1</td>		
					  <td>ايفون 7</td>
					  <td>100</td>
					  <td>70</td>
					  <td>$100</td>	
					</tr>
					<tr>
					  <td>1</td>
					  <td>1</td>	
					  <td>ايفون 7</td>
					  <td>100</td>
					  <td>70</td>
					  <td>$100</td>	
					</tr>
					<tr>
					  <td>1</td>
				      <td>2</td>
					  <td>ايفون 7</td>
					  <td>100</td>
					  <td>70</td>
					  <td>$100</td>	
					</tr>
				</table>
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