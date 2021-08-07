<?php  


$do = isset($_GET['do'])? $_GET['do'] : "Add";


session_start();
if(!(isset($_SESSION['password']))){
	header('Location:../login.php');
}

$id = $_SESSION['casherid'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];


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
					 <li class="active"><a href="add_Sale.php">اضافة عملية بيع</a></li>
					 <li><a href="add_return.php">اضافة عملية ارجاع</a></li>
				 </ul>
				 <hr>
			 </div>
		 </div>
		</div>
		
	<?php if($do == "Add"){ ?>	

		<div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-5" style="margin-top:-25px">
					<!-- Button finish The Operation --> 
					<a href="?do=Bill" class="btn btn-success btn-lg add">انهاء العمليه</a>
				</div>
				<div class="col-md-7 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">اضافة عملية بيع</h1>
						<i class="fa fa-plus fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?do=Insert" method="post">
			   <!-- Start Product Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="name" class="form-control username" autocomplete="off" required="required" placeholder="اسم المنتج"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المنتج</label>
			   </div>
			   <!-- End Product Name field -->
			    <!-- Start Quantity field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="number" name="quantity" class="form-control quantity" autocomplete="off" required="required" placeholder="الكميه"/> 
				   </div>
				   <label class="col-sm-2 control-label">الكميه</label>
			   </div>
			   <!-- End Quantity field -->
			   <!-- Start Price field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="number" name="price" class="form-control price" autocomplete="off" required="required" placeholder="سعر وحدة البيع"/> 
				   </div>
				   <label class="col-sm-2 control-label">سعر وحدة البيع</label>
			   </div>
			   <!-- End Price field -->	
			   <!-- Start Sum field -->
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="sum" class="form-control profit" autocomplete="off" required="required" placeholder="مجموع التكلفه" readonly/> 
				   </div>
				   <label class="col-sm-2 control-label">مجموع التكلفه</label>
			   </div>-->
			   <!-- End Sum field -->
			   <!-- Start Tax field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="tax" class="form-control tax" autocomplete="off" required="required" placeholder="الضريبه"/> 
				   </div>
				   <label class="col-sm-2 control-label">الضريبه</label>
			   </div>
			   <!-- End Tax field -->
			   <!-- Start Sum With Tax field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="sum_tax" class="form-control sum" autocomplete="off" required="required" placeholder="مجموع التكلفه" readonly/> 
				   </div>
				   <label class="col-sm-2 control-label">مجموع التكلفه مع الضريبه</label>
			   </div>
			   <!-- End Sum With Tax field -->	 
			   <!-- Start Category field 	 
			   <div class="form-group form-group-lg">
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
			   </div>
			   <!-- End Category field -->	 
			   <!-- Start submit field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-offset-2 col-sm-10">
					   <input type="submit" value="اضافه" class="btn btn-success btn-lg"/> 
				   </div>
			   </div>
			   <!-- End submit field --> 	
				 <div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="اضافه" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="profile.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>
			 </form>
			 <!-- Start Finish field  
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:868px;left:490px" href="profile.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
		 </div>
		
		<?php }elseif($do == "Insert"){
	
	
	   include('../connect.php');  
   echo "<div class='container'>";
	
		
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			
			
			//Get Varaiables from Post Method
			//$id = $_POST["stockid"];
			$name = $_POST["name"];
			$quantity = $_POST["quantity"];
			$price = $_POST["price"];
			$date = date('y-m-d');
			$total = $quantity * $price;
			$vat = 30;
			$total_vat = $total + $vat;
			
			 /*$stmt = $con->prepare("SELECT * FROM product WHERE Productname= ?");
			 $stmt->execute(array($name));
			 $row = $stmt->fetch();*/
			 //$price = $row["purchaseUnitprice"];
			
			
			
		
			
			//Validate Form By Server site
			
			$formErrors = array();
			
			if(empty($name)){
				
				$formErrors[] = "اسم المنتج يجب أن يكتب";
				
			}
			if(empty($quantity)){
				
				$formErrors[] = "الكمية المباعة يجب أن تكتب";
				
			}
			if(empty($price)){
				
				$formErrors[] = "سعر وحدة البيع يجب أن يكتب";
				
			}
			
			
			
			 include('../connect.php');  						  
			 $stmt = $con->prepare("SELECT * FROM product WHERE Productname= ?");
			 $stmt->execute(array($name));
			 $row = $stmt->fetch();
			 $count = $stmt->rowCount();
			 if($count>0){
			 $availquantity = $row["Availablequantity"];	
			 }
			 
				
			if($count > 0){
				
			if($availquantity > $quantity){
				
				
				
		    $productid = $row["ProductID"];
			$availquantity = $row["Availablequantity"];	
		    $allquantity = $row["Totalquantity"];			
			$stockid = $row["StockID"];
				
				
				
			 $stmt = $con->prepare("SELECT * FROM stock WHERE StockID= ?");
			 $stmt->execute(array($stockid));
			 $rows = $stmt->fetch();	
				
			$ownerid = $rows["ownerid"];	
			$stock_name = $rows["Stockname"];	
				
		  if($availquantity > $quantity){
			  
			  
			  $remain = $availquantity - $quantity;
			  
			  
		  }		
			
			//Check if there's no errors proceed the update opteration
			
			
			if(empty($formErrors)){
				
				
					$stmt = $con->prepare("INSERT INTO sales(SaleDate  , Total_Net_price_of_sale , VAT , Total_price_with_VAT , ownerid
                         ) VALUES(:date, :Total_Net_price_of_sale , :vat , :Total_price_with_VAT , :ownerid)");

					$stmt->execute(array(

						'date' => $date,
						'Total_Net_price_of_sale' => $total,
						'vat' => $vat,
						'Total_price_with_VAT' => $total_vat,
						'ownerid' => $ownerid

					));
					
				  //$count_p = $count_p + 1;
					
				    $_SESSION['stockid'] = $stockid;
				    $_SESSION['ownerid'] = $ownerid;
					$_SESSION['productid'] = $productid;
				    $_SESSION['product_name'] = $name;
				    $_SESSION['stock_name'] = $stock_name;
					$_SESSION['quantity'] = $quantity;
				    $_SESSION['avail_quantity'] = $availquantity;
				    $_SESSION['all_quantity'] = $allquantity;
					$_SESSION['price'] = $price;
					$_SESSION['date'] = $date;
				    $_SESSION['total'] = $total;
					//$_SESSION['total'] = $total;
				
				
				   $sql = $con->prepare("SELECT SalesID FROM sales ORDER BY SalesID DESC LIMIT 1");
				   $sql->execute();
				   $rowss = $sql->fetch();
				   $_SESSION['saleid'] = $rowss["SalesID"];
				
				
				
				
				   /*$sql = $con->prepare("SELECT * FROM product WHERE ProductID=$number");
				   $sql->execute();
				   $rows = $sql->fetchAll();
				   foreach($rows as $pat)
				   {
					   
					   $_SESSION['productname'] = $pat["Productname"];
					   
				   }*/
				   
				
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

					echo '<div dir="rtl" class="alert alert-success">تم اضافة عملية بيع جديدة بنجاح
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					
					echo ' <div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-5" style="margin-top:-25px">
					<!-- Button finish The Operation --> 
					<a href="add_Sale.php?do=Bill&saleid='. $_SESSION['saleid'] . '" class="btn btn-success btn-lg add">انهاء العمليه</a>
				</div>
				<div class="col-md-7 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">اضافة عملية بيع</h1>
						<i class="fa fa-plus fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?do=Insert" method="post">
			   <!-- Start Product Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="name" class="form-control username" autocomplete="off" required="required" placeholder="اسم المنتج"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المنتج</label>
			   </div>
			   <!-- End Product Name field -->
			    <!-- Start Quantity field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="number" name="quantity" class="form-control quantity" autocomplete="off" required="required" placeholder="الكميه"/> 
				   </div>
				   <label class="col-sm-2 control-label">الكميه</label>
			   </div>
			   <!-- End Quantity field -->
			   <!-- Start Price field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="number" name="price" class="form-control price" autocomplete="off" required="required" placeholder="سعر وحدة البيع"/> 
				   </div>
				   <label class="col-sm-2 control-label">سعر وحدة البيع</label>
			   </div>
			   <!-- End Price field -->	
			   <!-- Start Sum field -->
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="sum" class="form-control profit" autocomplete="off" required="required" placeholder="مجموع التكلفه" readonly/> 
				   </div>
				   <label class="col-sm-2 control-label">مجموع التكلفه</label>
			   </div>-->
			   <!-- End Sum field -->
			   <!-- Start Tax field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="tax" class="form-control tax" autocomplete="off" required="required" placeholder="الضريبه"/> 
				   </div>
				   <label class="col-sm-2 control-label">الضريبه</label>
			   </div>
			   <!-- End Tax field -->
			   <!-- Start Sum With Tax field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="sum_tax" class="form-control sum" autocomplete="off" required="required" placeholder="مجموع التكلفه" readonly/> 
				   </div>
				   <label class="col-sm-2 control-label">مجموع التكلفه مع الضريبه</label>
			   </div>
			   <!-- End Sum With Tax field -->	 
			   <!-- Start Category field 	 
			   <div class="form-group form-group-lg">
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
			   </div>
			   <!-- End Category field -->	 
			   <!-- Start submit field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-offset-2 col-sm-10">
					   <input type="submit" value="اضافه" class="btn btn-success btn-lg"/> 
				   </div>
			   </div>
			   <!-- End submit field --> 	
				 <div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="اضافه" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="profile.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>
			 </form>
			 <!-- Start Finish field  
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:868px;left:490px" href="profile.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
		 </div>
		 ';
					
					
			}
		}else{
				
				
					 
				 echo '<div dir="rtl" class="alert alert-danger">المنتجات في هذا المخزن غير كافية
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					
					echo ' <div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-5" style="margin-top:-25px">
					<!-- Button finish The Operation --> 
					<a href="add_Sale.php?do=Bill" class="btn btn-success btn-lg add">انهاء العمليه</a>
				</div>
				<div class="col-md-7 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">اضافة عملية بيع</h1>
						<i class="fa fa-plus fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?do=Insert" method="post">
			   <!-- Start Product Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="name" class="form-control username" autocomplete="off" required="required" placeholder="اسم المنتج"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المنتج</label>
			   </div>
			   <!-- End Product Name field -->
			    <!-- Start Quantity field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="number" name="quantity" class="form-control quantity" autocomplete="off" required="required" placeholder="الكميه"/> 
				   </div>
				   <label class="col-sm-2 control-label">الكميه</label>
			   </div>
			   <!-- End Quantity field -->
			   <!-- Start Price field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="number" name="price" class="form-control price" autocomplete="off" required="required" placeholder="سعر وحدة البيع"/> 
				   </div>
				   <label class="col-sm-2 control-label">سعر وحدة البيع</label>
			   </div>
			   <!-- End Price field -->	
			   <!-- Start Sum field -->
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="sum" class="form-control profit" autocomplete="off" required="required" placeholder="مجموع التكلفه" readonly/> 
				   </div>
				   <label class="col-sm-2 control-label">مجموع التكلفه</label>
			   </div>-->
			   <!-- End Sum field -->
			   <!-- Start Tax field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="tax" class="form-control tax" autocomplete="off" required="required" placeholder="الضريبه"/> 
				   </div>
				   <label class="col-sm-2 control-label">الضريبه</label>
			   </div>
			   <!-- End Tax field -->
			   <!-- Start Sum With Tax field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="sum_tax" class="form-control sum" autocomplete="off" required="required" placeholder="مجموع التكلفه" readonly/> 
				   </div>
				   <label class="col-sm-2 control-label">مجموع التكلفه مع الضريبه</label>
			   </div>
			   <!-- End Sum With Tax field -->	 
			   <!-- Start Category field 	 
			   <div class="form-group form-group-lg">
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
			   </div>
			   <!-- End Category field -->	 
			   <!-- Start submit field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-offset-2 col-sm-10">
					   <input type="submit" value="اضافه" class="btn btn-success btn-lg"/> 
				   </div>
			   </div>
			   <!-- End submit field --> 	
				 <div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="اضافه" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="profile.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>
			 </form>
			 <!-- Start Finish field  
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:868px;left:490px" href="profile.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
		 </div>';
				
				
				
				
				
			}}else{
				
				
				
				echo '<div dir="rtl" class="alert alert-danger">هذا المنتج غير موجود 
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					
					echo ' <div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-5" style="margin-top:-25px">
					<!-- Button finish The Operation --> 
					<a href="add_Sale.php?do=Bill" class="btn btn-success btn-lg add">انهاء العمليه</a>
				</div>
				<div class="col-md-7 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">اضافة عملية بيع</h1>
						<i class="fa fa-plus fa-4x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		 <div class="container adding">
			 <form class="form-horizontal" action="?do=Insert" method="post">
			   <!-- Start Product Name field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="name" class="form-control username" autocomplete="off" required="required" placeholder="اسم المنتج"/> 
				   </div>
				   <label class="col-sm-2 control-label">اسم المنتج</label>
			   </div>
			   <!-- End Product Name field -->
			    <!-- Start Quantity field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="number" name="quantity" class="form-control quantity" autocomplete="off" required="required" placeholder="الكميه"/> 
				   </div>
				   <label class="col-sm-2 control-label">الكميه</label>
			   </div>
			   <!-- End Quantity field -->
			   <!-- Start Price field --> 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="number" name="price" class="form-control price" autocomplete="off" required="required" placeholder="سعر وحدة البيع"/> 
				   </div>
				   <label class="col-sm-2 control-label">سعر وحدة البيع</label>
			   </div>
			   <!-- End Price field -->	
			   <!-- Start Sum field -->
			   <!--<div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="sum" class="form-control profit" autocomplete="off" required="required" placeholder="مجموع التكلفه" readonly/> 
				   </div>
				   <label class="col-sm-2 control-label">مجموع التكلفه</label>
			   </div>-->
			   <!-- End Sum field -->
			   <!-- Start Tax field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="tax" class="form-control tax" autocomplete="off" required="required" placeholder="الضريبه"/> 
				   </div>
				   <label class="col-sm-2 control-label">الضريبه</label>
			   </div>
			   <!-- End Tax field -->
			   <!-- Start Sum With Tax field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-10 col-md-6">
					   <input type="text" name="sum_tax" class="form-control sum" autocomplete="off" required="required" placeholder="مجموع التكلفه" readonly/> 
				   </div>
				   <label class="col-sm-2 control-label">مجموع التكلفه مع الضريبه</label>
			   </div>
			   <!-- End Sum With Tax field -->	 
			   <!-- Start Category field 	 
			   <div class="form-group form-group-lg">
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
			   </div>
			   <!-- End Category field -->	 
			   <!-- Start submit field 
			   <div class="form-group form-group-lg">
				   <div class="col-sm-offset-2 col-sm-10">
					   <input type="submit" value="اضافه" class="btn btn-success btn-lg"/> 
				   </div>
			   </div>
			   <!-- End submit field --> 	
				 <div style="width:90%">
				   <div style="width:55%;float:left">
					   <div class="form-group form-group-lg">
							<input type="submit" value="اضافه" class="btn btn-success btn-lg"/>
					   </div>
					   <div class="clearfix"></div>
				   </div>
				   <div class="" style="width:7%;float:left;margin-top:35px">
					   <a href="profile.php"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>
			 </form>
			 <!-- Start Finish field  
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:868px;left:490px" href="profile.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
		 </div>';
				
				
				 
			 }
			
		}else{
			
			echo "<div class='alert alert-danger'>لا يمكنك الدخول لهذه الصفحة</div>";
			
		}
		
		echo "</div>";
	    
		
		
		}elseif($do == "Bill"){ 
		
		$saleid = isset($_GET['saleid']) && is_numeric($_GET['saleid']) ? intval($_GET['saleid']) : 0;
		$count_p = $_SESSION['count'];
		
		//echo $count_p;
		?>
		
		
		
		<!-- Create Bill -->

  <div class="container">
			<div class="row">
				<div class="col-md-5">
					<a href="?do=Add" class="btn btn-success btn-lg add">رجوع</a>
				</div>
				<div class="col-md-7 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">فاتورة عملية البيع</h1>
						<i class="fa fa-file-text-o fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
  <div class="container adding">
	 <div class="bill">
	   <div class="logo">
		 <img src="layouts/images/logo.PNG" alt="Logo">  
		 <h1>نقرة واحدة</h1>
	   </div>
	   <hr>	 
	   <ul class="list-unstyled row">
		   <?php

	        //$count_p = $_SESSION['$count_purchase'];
			include('../connect.php'); 

            //$purchaseid = $pat['PurchaseID'];
			$sql = $con->prepare("SELECT
                          * 
					   FROM
					      sales
					  
					   WHERE SalesID=$saleid");
	
			$sql->execute();
			$rows = $sql->fetchAll();

			foreach($rows as $pat)
			{
				
                
			 ?>
		   <div class="col-md-8 right">
			   <li>التاريخ<span style="margin-right:40px"><?php echo $pat["SaleDate"]; ?></span></li>
			   <li>اسم الكاشير<span style="margin-right:40px"><?php echo $fname . ' ' . $lname; ?></span></li>
		   </div>
		   <div class="col-md-4 right">
			   <li>رقم عملية البيع<span style="margin-right:40px"><?php echo $pat["SalesID"]; ?></span></li>
			   <li>الضريبة<span style="margin-right:40px"></span><?php echo ' ' . $pat["VAT"]; ?></li>
		   </div>
		   <?php } ?>
		   <div class="col-md-12 categories" dir="rtl" style="margin-left:20px;margin-top:40px">
			<div class="table-responsive">
				<table class="text-center table">
					<tr>
					  <td>اسم المنتج</td>
					  <td>رقم المنتج</td>
					  <td>الكمية</td>	
					  <td>سعر وحدة البيع</td>	
					  <td>اجمالي التكلفة</td>	
					</tr>
					<?php
	
$stockid = $_SESSION['stockid'];
$ownerid = $_SESSION['ownerid'];
$productid = $_SESSION['productid'];
$product_name = $_SESSION['product_name'];
$stock_name = $_SESSION['stock_name'];
$quantity = $_SESSION['quantity'];
$avail = $_SESSION['avail_quantity'];
$all = $_SESSION['all_quantity'];		
$price = $_SESSION['price'];
$date = $_SESSION['date'];	
$remain = 	$avail - $quantity;
$total = $quantity * $price;
$sale_id = $_SESSION['saleid'];
$total = $_SESSION['total'];
	
	

					$sql = $con->prepare("SELECT * FROM  sales_details ORDER BY SaleID DESC LIMIT $count_p");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				     ?>
					<tr>
					  <td><?php echo $pat["Productname"]; ?></td>
					  <td><?php echo $pat["ProductID"]; ?></td>
					  <td><?php echo $pat["Quantity"]; ?></td>		
					  <td><?php echo $pat["sale_Unit_price"]; ?></td>
					  <td><?php echo $pat["Total_price"]; ?></td>		
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		   <?php
	
	    $total_q = 0;
	
		include('../connect.php');  


		$sql = $con->prepare("SELECT * FROM  sales_details ORDER BY SaleID DESC LIMIT $count_p");
		$sql->execute();
		$rows = $sql->fetchAll();
	    $count = $sql->rowCount();

		foreach($rows as $pat)
		{

			$total_q = $total_q + $total;
			$total_vat = $total_q + 30;
			$count = $count - 1;
			if($count == 0){
			
		 ?>   
		<div class="col-md-12 pull-right">
		   <li class="col-md-6">التكلفة الاجمالية مع الضريبة<span style="margin-right:40px"><?php echo $total_vat; ?></span></li>	
		   <li class="col-md-6">التكلفة الاجمالية للبيع<span style="margin-right:40px"><?php echo $total_q; ?></span></li>
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
		
		
		
		
		
		
		
	   <!-- Bill In Details -->

  <!--<div class="container adding">
	 <div class="bill">
	   <div class="logo">
		 <img src="layouts/images/logo.PNG" alt="Logo">  
		 <h1>نقرة واحدة</h1>
	   </div>
	   <hr>	 
	   <ul class="list-unstyled">
		   <li>رقم المخزن<span class="pull-left">1</span></li>
		   <li>اسم المنتج<span class="pull-left">ايفون</span></li>
		   <li>اسم المخزن<span class="pull-left">خلايا الموبايل</span></li>
		   <li>الكميه المتاحه<span class="pull-left">150</span></li>
		   <li>الكميه المباعه<span class="pull-left">50</span></li>
		   <li><a href="add_Sale.php?do=Subtraction_Edit" class="quantity">الكميه بعد عملية البيع<span class="pull-left">100</span></a></li>
		   <li>سعر وحدة البيع<span class="pull-left">$40</span></li>
		   <li>اجمالي التكلفه<span class="pull-left">$2000</span></li>
	   </ul>
	   <hr>	 
	   <div class="fo">
		   موقع نقرة واحدة
	   </div>	 
	 </div>		 
  </div>-->
  <!-- Bill In Details -->
		
		
		
		<?php  }elseif($do == "Update"){  ?>
		
		
		
		
		<?php } ?>
		
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