<?php

//$stockid = isset($_GET['stockid']) && is_numeric($_GET['stockid']) ? intval($_GET['stockid']) : 0;

session_start();

if(!(isset($_SESSION['password']))){
	header('Location:../login.php');
}


if(!isset($_SESSION['count'])){
	
    $_SESSION['count'] = 0;
	
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

					
$stockid = $_SESSION['stockid'];
$productid = $_SESSION['productid'];
$quantity = $_SESSION['quantity'];
$price = $_SESSION['price'];
$date = $_SESSION['date'];
$total = $_SESSION['total'];
$product = $_SESSION['productname'];
$purchaseid = $_SESSION['Purchaseid'];

include('../connect.php');  



$stmtt = $con->prepare("INSERT INTO  purchase_details(Productname  , Quantity , purchaseUnitprice , Totalprice , PurchaseID , ProductID , stockid

 ) VALUES(:name, :quantity, :unit,  :total , :purchaseid, :productid , :stockid)");

$stmtt->execute(array(

'name' => $product,
'quantity' => $quantity,
'unit' => $price,
'total' => $total,
'purchaseid' => $purchaseid,
'productid' => $productid,
'stockid' => $stockid	

));
			
$_SESSION['count']++;		
		
	
include('../connect.php');  
$sql = $con->prepare("SELECT * FROM product WHERE ProductID=$productid");
$sql->execute();
$rows = $sql->fetchAll();

foreach($rows as $pat)
{
	$total_quantity = $pat["Totalquantity"] + $quantity;
	$avail_quantity = $pat["Availablequantity"] + $quantity;
	
	$stmt = $con->prepare("UPDATE product SET Totalquantity = ?, Availablequantity = ? WHERE ProductID = ?");
	$stmt->execute(array($total_quantity , $avail_quantity , $productid));
	
	
}
		
		
		
		/*$count_purchase = $count_purchase + 1;
		$_SESSION['$count_purchase'] = $count_purchase;*/
		
//header('location:purchases.php');

echo '<div class="container"><div dir="rtl" class="alert alert-success">تم اضافة عملية شراء جديدة بنجاح
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div></div>';
					echo ' <div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-6" style="margin-top:-25px">
					 <!-- Start Finish field --> 
					   <a href="purchases.php?page=Bill&stockid=' . $stockid . '" class="btn btn-success btn-lg add">انهاء العمليه</a>
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
			 <form class="form-horizontal" action="purchases.php?page=Insert" method="post">
			   <!-- Start Item Number field --> 
			   <input type="hidden" name="stockid" value="' . $stockid . '"/>		 
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
					   <a href="purchases.php?stockid=' . $stockid . '"><img src="layouts/images/x.png" style="width:32px;height:32px"></a>
					   <div class="clearfix"></div>
				   </div>
			   </div>	 
			 </form>
			 <!-- Start Finish field
				<a style="background-color:#F00;width:32px;height:32px;border-radius:50%;color:#000;padding:0;position:absolute;top:655px;left:490px" href="purchases.php" class="btn btn-success btn-lg add"><i style="position:absolute;top:-4px;font-size:39px;left:1px" class="fa fa-close"></i></a> 
			 <!-- End Finish field -->
			 
		 </div>';
					
					
		echo "</div>";
		
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
