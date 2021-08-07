<?php  


$do = isset($_GET['do'])? $_GET['do'] : "Add";


session_start();
if(!(isset($_SESSION['password']))){
	header('Location:../login.php');
}

$id = $_SESSION['casherid'];


if(!isset($_SESSION['count'])){
	
    $_SESSION['count'] = 0;
	
}


?>


<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8"/>
		<title>Sales Details</title>
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
$sale_id = $_SESSION['saleid'];
$total = $_SESSION['total'];		

include('../connect.php');  



$stmtt = $con->prepare("INSERT INTO  sales_details(Productname  , Quantity , sale_Unit_price , Total_price , SaleID , ProductID

 ) VALUES(:name, :quantity, :unit,  :total , :saleid, :productid)");

$stmtt->execute(array(

'name' => $product_name,
'quantity' => $quantity,
'unit' => $price,
'total' => $total,
'saleid' => $sale_id,
'productid' => $productid

));
			
$_SESSION['count']++;
				
		
	
include('../connect.php');  
$sql = $con->prepare("SELECT * FROM product WHERE ProductID=$productid");
$sql->execute();
$rows = $sql->fetchAll();

foreach($rows as $pat)
{
	$total_quantity = $pat["Totalquantity"] - $quantity;
	$avail_quantity = $pat["Availablequantity"] - $quantity;
	
	$stmt = $con->prepare("UPDATE product SET Totalquantity = ?, Availablequantity = ? WHERE ProductID = ?");
	$stmt->execute(array($total_quantity , $avail_quantity , $productid));
	
	
}
		
		
		
		/*$count_purchase = $count_purchase + 1;
		$_SESSION['$count_purchase'] = $count_purchase;*/
		
//header('location:purchases.php');

echo '<div class="container"><div dir="rtl" class="alert alert-success">تم اضافة عملية بيع جديدة بنجاح
					<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div></div>';
					
					echo ' <div class="container" style="margin-bottom:30px">
			<div class="row">
				<div class="col-md-5" style="margin-top:-25px">
					<!-- Button finish The Operation --> 
					<a href="add_Sale.php?do=Bill&saleid=' . $sale_id . '" class="btn btn-success btn-lg add">انهاء العمليه</a>
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
			 <form class="form-horizontal" action="add_Sale.php?do=Insert" method="post">
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
