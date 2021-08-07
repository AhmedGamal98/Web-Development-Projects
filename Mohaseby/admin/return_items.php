<?php

	     $ownerid = isset($_GET['ownerid']) && is_numeric($_GET['ownerid']) ? intval($_GET['ownerid']) : 0;
		   

session_start();

if(!(isset($_SESSION['password']))){
	header('Location:../login.php');
}
						   
         ?>	
<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8"/>
		<title>Return_Items</title>
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
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">ادارة المرتجعات</h1>
						<i class="fa fa-share-square fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
	    <div class="container categories" dir="rtl">
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
					  <td>رقم الارجاع</td>
					  <td>رقم البيع</td>
					  <td>تارخ الارجاع</td>
					  <td>الضريبة</td>	
					  <td>المبلغ الكلي</td>
					  <td>المبلغ الكلي مع الضريبة</td>	
					  <td>التحكم</td>	
					</tr>
					<?php
	
					include('../connect.php');  						  


					$sql = $con->prepare("SELECT * FROM  sale_return WHERE ownerid=$ownerid");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				     ?>
					<tr>
					  <td><?php  echo $pat["SaleReturnID"]; ?></td>
					  <td><?php  echo $pat["SaleID"]; ?></td>
					  <td><?php  echo $pat["SaleReturndate"]; ?></td>
					  <td><?php  echo $pat["VAT"]; ?></td>	
					  <td><?php  echo $pat["Total_Net_price_of_Sale_Return"]; ?></td>
					  <td><?php  echo $pat["Total_price_with_VAT"]; ?></td>	
					  <td class="edit">
						  
						  <a href="return_items.php?page=Details&returnid=<?php  echo $pat["SaleReturnID"]; ?>" class="btn btn-primary"><i class="fa fa-eye"></i> عرض</a>
						  
					  </td>		
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
        
		 
    <?php
		
	
}elseif($do == "Details"){ 
		
		
		  $returnid = isset($_GET['returnid']) && is_numeric($_GET['returnid']) ? intval($_GET['returnid']) : 0;
		
		
		?>
		
		
		
		<div class="container">
			<div class="row">
				<div class="col-md-7 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تفاصيل عملية الارجاع</h1>
						<i class="fa fa-share-square fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
		<!-- Bill In Details -->

  <div class="container adding" style="margin-top:40px">
	 <div class="bill">
	   <div class="logo">
		 <img src="layouts/images/log2.jpg" alt="Logo">  
		 <h1>نقرة واحدة</h1>
	   </div>
	   <hr>	 
	   <ul class="list-unstyled row">
		   <?php
	
			include('../connect.php');  						  


			$sql = $con->prepare("SELECT * FROM sale_return WHERE SaleReturnID=$returnid");
			$sql->execute();
			$rows = $sql->fetchAll();

			foreach($rows as $pat)
			{
                
			 ?>
		   <div class="col-md-8 right">
			   <li>التاريخ<span style="margin-right:40px"><?php echo $pat["SaleReturndate"]; ?></span></li>
		   </div>
		   <div class="col-md-4 right">
			   <li>رقم ارجاع البيع<span style="margin-right:40px"><?php echo $pat["SaleReturnID"]; ?></span></li>
			   <li>الضريبة<span style="margin-right:40px"><?php echo $pat["VAT"]; ?></span></li>
		   </div>
		   <?php  } ?>
		   <div class="col-md-12 categories" dir="rtl" style="margin-left:20px">
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
	
					include('../connect.php');  						  


					$sql = $con->prepare("SELECT * FROM sale_returns_details WHERE SaleReturnID=$returnid");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

					 ?>
					<tr>
					  <td><?php echo $pat["Productname"]; ?></td>
					  <td><?php echo $pat["ProductID"]; ?></td>
					  <td><?php echo $pat["Quantity"]; ?></td>		
					  <td><?php echo $pat["Sale_Return_unit_price"]; ?></td>
					  <td><?php echo $pat["Total_price"]; ?></td>		
					</tr>
					<?php  } ?>
				</table>
			</div>
		</div>
		<?php
	
			include('../connect.php');  						  


			$sql = $con->prepare("SELECT * FROM sale_return WHERE SaleReturnID=$returnid");
			$sql->execute();
			$rows = $sql->fetchAll();

			foreach($rows as $pat)
			{
                
			 ?>   
		<div class="col-md-12 pull-right">
		   <li class="col-md-6">التكلفة الاجمالية مع الضريبة<span style="margin-right:40px"><?php echo $pat["Total_price_with_VAT"]; ?></span></li>
		   <li class="col-md-6">التكلفة الاجمالية للارجاع<span style="margin-right:40px"><?php echo $pat["Total_Net_price_of_Sale_Return"]; ?></span></li>	
		</div> 
		<?php  } ?>   
		   <!--<li>اسم المنتج<span class="pull-left">ايفون</span></li>
		   <li>الكميه المتاحه<span class="pull-left">100</span></li>
		    <li><a href="purchases.php?page=Addition_Edit" class="quantity">الكميه الاضافيه<span class="pull-left">100</span></a></li>
		   <li><a href="purchases.php?page=Edit" class="quantity">الكميه الاجماليه<span class="pull-left">200</span></a></li>
		   <li>الوقت<span class="pull-left">3:00</span></li>
		   <li>التاريخ<span class="pull-left">21/1/2020</span></li>-->
	   </ul>
	   <hr>	 
	   <div class="fo">
		   موقع نقرة واحدة
	   </div>	 
	 </div>		 
  </div>
  <!-- Bill In Details -->	
		
	
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