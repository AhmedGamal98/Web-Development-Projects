<?php

$stockid = isset($_GET['stockid']) && is_numeric($_GET['stockid']) ? intval($_GET['stockid']) : 0;

session_start();

if(!(isset($_SESSION['password']))){
	header('Location:../login.php');
}


?>
<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8"/>
		<title>Additional Purchases</title>
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
					<a href="purchases.php?page=Add&stockid=<?php echo $stockid;  ?>" class="btn btn-success btn-lg add">اضافة شراء جديد <i class="fa fa-plus"></i></a>
				</div>
				<?php
	
	             include('../connect.php');  						  
				 $stmt = $con->prepare("SELECT * FROM stock WHERE StockID= ?");
				 $stmt->execute(array($stockid));
				 $row = $stmt->fetch();
	
	            ?>
				<div class="col-md-9 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">ادارة المشتريات مخزن <?php  echo $row["Stockname"];  ?></h1>
						<i class="fa fa-shopping-cart fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
	    <div class="container categories" dir="rtl">
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
					  <td>رقم المخزن</td>
					  <td>رقم الشراء</td>	
					  <td>تاريخ الشراء</td>
					  <td>التكلفة الاجمالية للشراء</td>	
					  <td>التحكم</td>	
					</tr>
					<?php
	  
					include('../connect.php');  
					$sql = $con->prepare("SELECT * FROM purchases WHERE StockID=$stockid");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				   ?>
					<tr>
					  <td><?php echo $pat["StockID"]; ?></td>
					  <td><?php echo $pat["PurchaseID"]; ?></td>	
					  <td><?php echo $pat["PurchaseDate"]; ?></td>
					  <td><?php echo $pat["Total_price_of_purchase"]; ?></td>	
					  <td class="edit">
						  <a href="purchases.php?page=Detail&purchasesid=<?php echo $pat["PurchaseID"]; ?>" class="btn btn-primary"><i class="fa fa-eye"></i> عرض</a>
						  
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
					   <a href="purchases.php?page=Bill&stockid=<?php echo $stockid; ?>" class="btn btn-success btn-lg add">انهاء العمليه</a> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">اضافة شراء جديد</h1>
						<i class="fa fa-plus fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Insert" method="post">
			   <!-- Start Item Number field --> 
			   <input type="hidden" name="stockid" value="<?php echo $stockid; ?>"/>		 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="number" class="form-control" autocomplete="off" required="required" placeholder="رقم المنتج"/> 
				   </div>
				   <label class="col-sm-2 control-label">رقم المنتج</label>
			   </div>
			   <!-- End Item Number field -->
			   <!-- Start Purchase Quantity field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="quantity" class="form-control" autocomplete="off" required="required" placeholder="الكميه الاضافيه"/> 
				   </div>
				   <label class="col-sm-2 control-label">الكميه الاضافيه</label>
			   </div>
			   <!-- End Purchase Quantity field -->	
			   <!-- Start Price field --> 
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="price" class="form-control" autocomplete="off" required="required" placeholder="سعر وحدة الشراء"/> 
				   </div>
				   <label class="col-sm-2 control-label">سعر وحدة الشراء</label>
			   </div>
			   <!-- End Price field -->	 
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
			   <!-- Start submit field --> 
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-offset-2 col-sm-10">
					   <input type="submit" value="اضافة شراء جديد" class="btn btn-success btn-lg"/> 
				   </div>
			   </div>-->
			   <!-- End submit field --> 
			   <div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" name="submit" value="اضافة شراء جديد" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="purchases.php?stockid=<?php echo $stockid; ?>"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	 
			 </form>
			 <!-- Start Finish field
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:655px;left:490px" href="purchases.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
			 
		 </div>
         
	
<?php
	
}elseif($do == "Insert"){
	
	include('../connect.php');  
   echo "<div class='container'>";
	
		
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			$id = $_POST["stockid"];
			$number = $_POST["number"];
			$quantity = $_POST["quantity"];
			//$price = $_POST["price"];
			$date = date('yy-m-d');
			
			
			 $stmt = $con->prepare("SELECT * FROM product WHERE ProductID= ? AND StockID= ?");
			 $stmt->execute(array($number , $id));
			 $row = $stmt->fetch();
			 $price = $row["purchaseUnitprice"];
			
			
			 $total = $quantity * $price;
			
		    //$_SESSION['count'] = $_SESSION['count']  + 1; 
		
			
			//Validate Form By Server site
			
			$formErrors = array();
			
			if(empty($number)){
				
				$formErrors[] = "رقم المنتج يجب أن يكتب";
				
			}
			if(empty($quantity)){
				
				$formErrors[] = "الكمية الاضافية يجب أن تكتب";
				
			}
			if(empty($price)){
				
				$formErrors[] = "سعر وحدة الشراء يجب أن يكتب";
				
			}
			
			
			
			 include('../connect.php');  						  
			 $stmt = $con->prepare("SELECT * FROM product WHERE ProductID= ? AND StockID= ?");
			 $stmt->execute(array($number , $id));
			 $row = $stmt->fetch();
			 $count = $stmt->rowCount();
				
			if($count > 0){
				
				
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				
					$stmt = $con->prepare("INSERT INTO  purchases(PurchaseDate  , Total_price_of_purchase  , StockID
                         ) VALUES(:date, :price , :stockid)");

					$stmt->execute(array(

						'date' => $date,
						'price' => $total,
						'stockid' => $id

					));
					
				  //$count_p = $count_p + 1;
					
				    $_SESSION['stockid'] = $id;
					$_SESSION['productid'] = $number;
					$_SESSION['quantity'] = $quantity;
					$_SESSION['price'] = $price;
					$_SESSION['date'] = $date;
					$_SESSION['total'] = $total;
				
				
				   $sql = $con->prepare("SELECT * FROM purchases WHERE StockID=$id");
				   $sql->execute();
				   $rows = $sql->fetchAll();
				   foreach($rows as $pat)
				   {
					   
					   $_SESSION['Purchaseid'] = $pat["PurchaseID"];
					   
				   }
				    
				
				
				   $sql = $con->prepare("SELECT * FROM product WHERE ProductID=$number");
				   $sql->execute();
				   $rows = $sql->fetchAll();
				   foreach($rows as $pat)
				   {
					   
					   $_SESSION['productname'] = $pat["Productname"];
					   
				   }
				   
				
				    header('location:add_details.php');
					
					
					/*$stmtt = $con->prepare("INSERT INTO  purchase_details(Productname  , Quantity , purchaseUnitprice , Totalprice , PurchaseID , ProductID

                         ) VALUES(:name, :quantity, :unit,  :total , :purchaseid, :productid)");

					$stmtt->execute(array(

						'name' => now(),
						'quantity' => $quantity,
						'unit' => $price,
						'total' => $total,
						'purchaseid' => $id,
						'productid' => $id

					));*/
					
					
				 /*$stmtt = $con->prepare("SELECT * FROM  purchase_details WHERE PurchaseID= ?");
				 $stmtt->execute(array($name));
				 $row = $stmtt->fetch();
				 $count = $stmtt->rowCount();*/


					// echo success message

					echo '<div dir="rtl" class="alert alert-success">تم اضافة عملية شراء جديدة بنجاح
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					
					echo ' <div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <a href="purchases.php?page=Bill&stockid='.  $id  . '" class="btn btn-success btn-lg add">انهاء العمليه</a> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">اضافة شراء جديد</h1>
						<i class="fa fa-plus fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Insert" method="post">
			   <!-- Start Item Number field --> 
			   <input type="hidden" name="stockid" value="' . $id . '"/>		 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="number" class="form-control" autocomplete="off" required="required" placeholder="رقم المنتج"/> 
				   </div>
				   <label class="col-sm-2 control-label">رقم المنتج</label>
			   </div>
			   <!-- End Item Number field -->
			   <!-- Start Purchase Quantity field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="quantity" class="form-control" autocomplete="off" required="required" placeholder="الكميه الاضافيه"/> 
				   </div>
				   <label class="col-sm-2 control-label">الكميه الاضافيه</label>
			   </div>
			   <!-- End Purchase Quantity field -->	
			   <!-- Start Price field --> 
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="price" class="form-control" autocomplete="off" required="required" placeholder="سعر وحدة الشراء"/> 
				   </div>
				   <label class="col-sm-2 control-label">سعر وحدة الشراء</label>
			   </div>-->
			   <!-- End Price field -->	 
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
			   <!-- Start submit field --> 
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-offset-2 col-sm-10">
					   <input type="submit" value="اضافة شراء جديد" class="btn btn-success btn-lg"/> 
				   </div>
			   </div>-->
			   <!-- End submit field --> 
			   <div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" name="submit" value="اضافة شراء جديد" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="purchases.php?stockid=' . $id . '"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	 
			 </form>
			 <!-- Start Finish field
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:655px;left:490px" href="purchases.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
			 
		 </div>';
					
					
			}
		}else{
				
				
				echo '<div dir="rtl" class="alert alert-danger">هذا المنتج غير موجود في هذا المخزن
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					
					echo ' <div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <a href="purchases.php?page=Billl&stockid=' . $id . '" class="btn btn-success btn-lg add">انهاء العمليه</a> 
					 <!-- End Finish field -->	
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">اضافة شراء جديد</h1>
						<i class="fa fa-plus fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?page=Insert" method="post">
			   <!-- Start Item Number field --> 
			   <input type="hidden" name="stockid" value="' . $id . '"/>		 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="number" class="form-control" autocomplete="off" required="required" placeholder="رقم المنتج"/> 
				   </div>
				   <label class="col-sm-2 control-label">رقم المنتج</label>
			   </div>
			   <!-- End Item Number field -->
			   <!-- Start Purchase Quantity field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="quantity" class="form-control" autocomplete="off" required="required" placeholder="الكميه الاضافيه"/> 
				   </div>
				   <label class="col-sm-2 control-label">الكميه الاضافيه</label>
			   </div>
			   <!-- End Purchase Quantity field -->	
			   <!-- Start Price field --> 
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="price" class="form-control" autocomplete="off" required="required" placeholder="سعر وحدة الشراء"/> 
				   </div>
				   <label class="col-sm-2 control-label">سعر وحدة الشراء</label>
			   </div>-->
			   <!-- End Price field -->	 
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
			   <!-- Start submit field --> 
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-offset-2 col-sm-10">
					   <input type="submit" value="اضافة شراء جديد" class="btn btn-success btn-lg"/> 
				   </div>
			   </div>-->
			   <!-- End submit field --> 
			   <div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" name="submit" value="اضافة شراء جديد" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="purchases.php?stockid=' . $id . '"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	 
			 </form>
			 <!-- Start Finish field
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:655px;left:490px" href="purchases.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
			 
		 </div>';
				
				
				
			}
			
		}else{
			
			echo "<div class='alert alert-danger'>لا يمكنك الدخول لهذه الصفحة</div>";
			
		}
		
		echo "</div>";


	 
}elseif($do == "Bill"){
		
		
		$stockid = isset($_GET['stockid']) && is_numeric($_GET['stockid']) ? intval($_GET['stockid']) : 0;
		
	    $count_p = $_SESSION['count'];
	
	    //echo $count_p;
	
		?>
	
	
		
<!-- Create Bill -->

  <div class="container">
			<div class="row">
				<div class="col-md-8 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">فاتورة الاضافة</h1>
						<i class="fa fa-file-text-o fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
  <div class="container adding">
	 <div class="bill">
	   <div class="logo">
		 <img src="layouts/images/log2.jpg" alt="Logo">  
		 <h1>نقرة واحدة</h1>
	   </div>
	   <hr>	 
	   <ul class="list-unstyled row">
		   <?php

	        //$count_p = $_SESSION['$count_purchase'];
			include('../connect.php'); 

            //$purchaseid = $pat['PurchaseID'];
			$sql = $con->prepare("SELECT
                          purchases.* , stock.Stockname
					   FROM
					      purchases
					   INNER JOIN
					      stock
					   ON
					      purchases.StockID = stock.StockID
						  
					   WHERE purchases.StockID=$stockid ORDER BY PurchaseID DESC LIMIT 1");
	
			$sql->execute();
			$rows = $sql->fetchAll();

			foreach($rows as $pat)
			{
				
                
			 ?>
		   <div class="col-md-8 right">
			   <li>التاريخ<span style="margin-right:40px"><?php echo $pat["PurchaseDate"]; ?></span></li>
			   <li>اسم المخزن<span style="margin-right:40px"><?php echo $pat["Stockname"]; ?></span></li>
		   </div>
		   <div class="col-md-4 right">
			   <li>رقم الشراء<span style="margin-right:40px"><?php echo $pat["PurchaseID"]; ?></span></li>
			   <li>رقم المخزن<span style="margin-right:40px"><?php echo $pat["StockID"]; ?></span></li>
		   </div>
		   <?php } ?>
		   <div class="col-md-12 categories" dir="rtl" style="margin-left:20px">
			<div class="table-responsive">
				<table class="text-center table">
					<tr>
					  <td>اسم المنتج</td>
					  <td>رقم المنتج</td>		
					  <td>الكمية الاضافية</td>
					  <td>سعر شراء الوحدة</td>	
					  <td>اجمالي التكلفة</td>	
					</tr>
					<?php
	

					$sql = $con->prepare("SELECT * FROM  purchase_details WHERE stockid=$stockid ORDER BY PurchaseID DESC LIMIT $count_p");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				     ?>
					<tr>
					  <td><?php echo $pat["Productname"]; ?></td>
					  <td><?php echo $pat["ProductID"]; ?></td>	
					  <td><?php echo $pat["Quantity"]; ?></td>
					  <!--<td>
						  <a style="color:#333333;text-decoration:none" href="purchases.php?page=Edit" class="quantity">9</a>
					  </td>-->	
					  <td><?php echo $pat["purchaseUnitprice"]; ?></td>	
					  <td><?php echo $pat["Totalprice"]; ?></td>		
					</tr>
					<?php  } ?>
					
				</table>
			</div>
		</div>
		<?php
	
	    $total_q = 0;
	
		include('../connect.php');  


		$sql = $con->prepare("SELECT * FROM  purchase_details WHERE stockid=$stockid ORDER BY PurchaseID DESC LIMIT $count_p");
		$sql->execute();
		$rows = $sql->fetchAll();
	    $count = $sql->rowCount();

		foreach($rows as $pat)
		{

			$total_q = $total_q + $pat["Totalprice"];
			$count = $count - 1;
			if($count == 0){
			
		 ?>   
		<div class="col-md-6 pull-right">
		   <li>التكلفة الاجمالية للشراء<span style="margin-right:40px"><?php echo $total_q; ?></span></li>
		</div>	    
		<?php }}
		   
		   $_SESSION['count'] = 0;
		   
		   ?> 
		   
	   </ul>
	   <hr>	 
	   <div class="fo">
		   موقع نقرة واحدة
	   </div>	 
	 </div>		 
  </div>
  <!-- Create Bill -->
	
	
	
<?php
	
}elseif($do == "Detail"){ 
		
		
		$purchasesid = isset($_GET['purchasesid']) && is_numeric($_GET['purchasesid']) ? intval($_GET['purchasesid']) : 0;
		
		?>
	
		<div class="container">
			<div class="row">
				<div class="col-md-8 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تفاصيل عملية الشراء</h1>
						<i class="fa fa-shopping-cart fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
	   <!-- Bill In Details -->

  <div class="container adding">
	 <div class="bill">
	   <div class="logo">
		 <img src="layouts/images/log2.jpg" alt="Logo">  
		 <h1>نقرة واحدة</h1>
	   </div>
	   <hr>	 
	   <ul class="list-unstyled row">
		   <?php
	
			include('../connect.php');  						  


			$sql = $con->prepare("SELECT
                          purchases.* , stock.Stockname
					   FROM
					      purchases
					   INNER JOIN
					      stock
					   ON
					      purchases.StockID = stock.StockID
						  
					   WHERE PurchaseID=$purchasesid");
			$sql->execute();
			$rows = $sql->fetchAll();

			foreach($rows as $pat)
			{

			 ?>
		   <div class="col-md-8 right">
			   <li>التاريخ<span style="margin-right:40px"><?php echo $pat["PurchaseDate"]; ?></span></li>
			   <li>اسم المخزن<span style="margin-right:40px"><?php echo $pat["Stockname"]; ?></span></li>
		   </div>
		   <div class="col-md-4 right">
			   <li>رقم الشراء<span style="margin-right:40px"><?php echo $pat["PurchaseID"]; ?></span></li>
			   <li>رقم المخزن<span style="margin-right:40px"><?php echo $pat["StockID"]; ?></span></li>
		   </div>
		   <?php } ?>
		   <div class="col-md-12 categories" dir="rtl" style="margin-left:20px">
			<div class="table-responsive">
				<table class="text-center table">
					<tr>
					  <td>اسم المنتج</td>
					  <td>رقم المنتج</td>	
					  <td>الكمية الاضافية</td>
					  <td>سعر شراء الوحدة</td>	
					  <td>اجمالي التكلفة</td>	
					</tr>
					<?php
	
					include('../connect.php');  						  


					$sql = $con->prepare("SELECT * FROM  purchase_details WHERE PurchaseID=$purchasesid");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				     ?>
					<tr>
					  <td><?php echo $pat["Productname"]; ?></td>
					  <td><?php echo $pat["ProductID"]; ?></td>	
					  <td><?php echo $pat["Quantity"]; ?></td>
					  <!--<td>
						  <a style="color:#333333;text-decoration:none" href="purchases.php?page=Edit" class="quantity">9</a>
					  </td>-->	
					  <td><?php echo $pat["purchaseUnitprice"]; ?></td>	
					  <td><?php echo $pat["Totalprice"]; ?></td>		
					</tr>
					<?php  } ?>
				</table>
			</div>
		</div>
		<?php
	
	     $total_q = 0;
	
		include('../connect.php');  						  


		$sql = $con->prepare("SELECT * FROM  purchase_details WHERE PurchaseID=$purchasesid");
		$sql->execute();
		$rows = $sql->fetchAll();
	    $count = $sql->rowCount();

		foreach($rows as $pat)
		{
            $total_q = $total_q + $pat["Totalprice"];
			$count = $count - 1;
			if($count == 0){
			
		 ?>   
		<div class="col-md-6 pull-right">
		   <li>التكلفة الاجمالية للشراء<span style="margin-right:40px"><?php echo $total_q; ?></span></li>
		</div>
		<?php }} ?> 
	   </ul>
	   <hr>	 
	   <div class="fo">
		   موقع نقرة واحدة
	   </div>	 
	 </div>		 
  </div>
  <!-- Bill In Details -->	

	
<?php	

	
}elseif($do == "All"){ ?>
	
		<div class="container">
			<div class="row">
				<div class="col-md-8 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">المشتريات الكلية</h1>
						<i class="fa fa-shopping-cart fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
	    <div class="container categories" dir="rtl">
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
					  <td>رقم المخزن</td>
					  <td>رقم الشراء</td>	
					  <td>تاريخ الشراء</td>
					  <td>الكميه الاجماليه</td>	
					  <td>التحكم</td>	
					</tr>
					<tr>
					  <td>1</td>
					  <td>1</td>	
					  <td>29/1/2020</td>
					  <td>120</td>	
					  <td class="edit">
						  <a href="purchases.php?page=Detail&purchaseid=1" class="btn btn-primary"><i class="fa fa-eye"></i> عرض</a>
					  </td>	
					</tr>
					<tr>
					  <td>1</td>
					  <td>1</td>	
					  <td>29/1/2020</td>
					  <td>120</td>	
					  <td class="edit">
						  <a href="purchases.php?page=Detail&purchaseid=1" class="btn btn-primary"><i class="fa fa-eye"></i> عرض</a>
					  </td>	
					</tr>
					<tr>
					  <td>2</td>
					  <td>1</td>	
					  <td>29/1/2020</td>
					  <td>120</td>	
					  <td class="edit">
						  <a href="purchases.php?page=Detail&purchaseid=1" class="btn btn-primary"><i class="fa fa-eye"></i> عرض</a>
					  </td>	
					</tr>
				</table>
			</div>
		</div>
<?php		
	
}elseif($do == "Delete"){	?>
		
		
		
		<div class="container alert">
			<div class="alert alert-danger">Deleted Successfully</div>
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