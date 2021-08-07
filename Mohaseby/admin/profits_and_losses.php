<?php

session_start();

if(!(isset($_SESSION['password']))){
	header('Location:../login.php');
}

$id = $_SESSION['adminid'];


include('../connect.php');  
	$sql = $con->prepare("SELECT purchases.* , stock.ownerid

		   FROM 
			 purchases
		INNER JOIN
			stock
		ON 
			stock.StockID = purchases.StockID	

		   WHERE stock.ownerid = $id");
	$sql->execute();
	$row3 = $sql->fetch();
	$count1 = $sql->rowCount();


$sqll = $con->prepare("SELECT * FROM  sale_return WHERE ownerid=$id");
	$sqll->execute();
	$row2 = $sqll->fetch();
	$count2 = $sqll->rowCount();


$sqle = $con->prepare("SELECT * FROM  sales WHERE ownerid=$id");
	$sqle->execute();
	$row1 = $sqle->fetch();
	$count3 = $sqle->rowCount();

$profit = $count3 - $count2;

$_SESSION['prof'] = $profit;


$total = $count3 + $count2 + $count1;

if($total > 0){

	$sale = ($count3/$total)*100;
	$purchase = ($count1/$total)*100;
	$return = ($count2/$total)*100;
	


$dataPoints = array( 
	array("label"=>"المبيعات", "y"=>$sale),
	array("label"=>"المشتريات", "y"=>$purchase),
	array("label"=>"المرتجعات", "y"=>$return)
);
	
}else{
	
	
	
	$dataPoints = array( 
	array("label"=>"المبيعات", "y"=>0),
	array("label"=>"المشتريات", "y"=>0),
	array("label"=>"المرتجعات", "y"=>0)
);
	
}

$count1 = 0;
$count2 = 0;
$count3 = 0;
$count4 = 0;
$count5 = 0;
$count6 = 0;
$count7 = 0;
$count8 = 0;
$count9 = 0;
$count10 = 0;
$count11 = 0;
$count12 = 0;
$sqlq = $con->prepare("SELECT * FROM  sales WHERE ownerid=$id");
$sqlq->execute();
$rows = $sqlq->fetchAll();
foreach($rows as $pat)
{
	
	
	if(date('y' , strtotime($pat["SaleDate"])) == "12"){
		
	 	
	   $count1 = $count1 + 1;
	
	}
	if(date('y' , strtotime($pat["SaleDate"])) == "13"){
		
	 	
	   $count2 = $count2 + 1;
	
	}
	if(date('y' , strtotime($pat["SaleDate"])) == "14"){
		
	 	
	   $count3 = $count3 + 1;
	
	}
	if(date('y' , strtotime($pat["SaleDate"])) == "15"){
		
	 	
	   $count4 = $count4 + 1;
	
	}
	if(date('y' , strtotime($pat["SaleDate"])) == "16"){
		
	 	
	   $count5 = $count5 + 1;
	
	}
	if(date('y' , strtotime($pat["SaleDate"])) == "17"){
		
	 	
	   $count6 = $count6 + 1;
	
	}
	if(date('y' , strtotime($pat["SaleDate"])) == "18"){
		
	 	
	   $count7 = $count7 + 1;
	
	}
	if(date('y' , strtotime($pat["SaleDate"])) == "19"){
		
	 	
	   $count8 = $count8 + 1;
	
	}
	if(date('y' , strtotime($pat["SaleDate"])) == "20"){
		
	 	
	   $count9 = $count9 + 1;
	
	}
	if(date('y' , strtotime($pat["SaleDate"])) == "21"){
		
	 	
	   $count10 = $count10 + 1;
	
	}
	if(date('y' , strtotime($pat["SaleDate"])) == "22"){
		
	 	
	   $count11 = $count11 + 1;
	
	}
	if(date('y' , strtotime($pat["SaleDate"])) == "23"){
		
	 	
	   $count12 = $count12 + 1;
	
	}
	
	
}
//echo date('yy' , strtotime($pat["SaleDate"]));

$dataPointss = array( 
	array("y" => $count6, "label" => "2017" ),
	array("y" => $count7, "label" => "2018" ),
	array("y" => $count8, "label" => "2019" ),
	array("y" => $count9, "label" => "2020" ),
	array("y" => $count10, "label" => "2021" ),
	array("y" => $count11, "label" => "2022" ),
	array("y" => $count12, "label" => "2023" )
    );	



$count13 = 0;
$count14 = 0;
$count15 = 0;
$count16 = 0;
$count17 = 0;
$count18 = 0;
$count19 = 0;
$count20 = 0;
$count21 = 0;
$count22 = 0;
$count23 = 0;
$count24 = 0;
$sqlq = $con->prepare("SELECT purchases.* , stock.ownerid

		   FROM 
			 purchases
		INNER JOIN
			stock
		ON 
			stock.StockID = purchases.StockID	

		   WHERE stock.ownerid = $id");
$sqlq->execute();
$rows = $sqlq->fetchAll();
foreach($rows as $pat)
{
	
	
	if(date('y' , strtotime($pat["PurchaseDate"])) == "12"){
		
	 	
	   $count13 = $count13 + 1;
	
	}
	if(date('y' , strtotime($pat["PurchaseDate"])) == "13"){
		
	 	
	   $count14 = $count14 + 1;
	
	}
	if(date('y' , strtotime($pat["PurchaseDate"])) == "14"){
		
	 	
	   $count15 = $count15 + 1;
	
	}
	if(date('y' , strtotime($pat["PurchaseDate"])) == "15"){
		
	 	
	   $count16 = $count16 + 1;
	
	}
	if(date('y' , strtotime($pat["PurchaseDate"])) == "16"){
		
	 	
	   $count17 = $count17 + 1;
	
	}
	if(date('y' , strtotime($pat["PurchaseDate"])) == "17"){
		
	 	
	   $count18 = $count18 + 1;
	
	}
	if(date('y' , strtotime($pat["PurchaseDate"])) == "18"){
		
	 	
	   $count19 = $count19 + 1;
	
	}
	if(date('y' , strtotime($pat["PurchaseDate"])) == "19"){
		
	 	
	   $count20 = $count20 + 1;
	
	}
	if(date('y' , strtotime($pat["PurchaseDate"])) == "20"){
		
	 	
	   $count21 = $count21 + 1;
	
	}
	if(date('y' , strtotime($pat["PurchaseDate"])) == "21"){
		
	 	
	   $count22 = $count22 + 1;
	
	}
	if(date('y' , strtotime($pat["PurchaseDate"])) == "22"){
		
	 	
	   $count23 = $count23 + 1;
	
	}
	if(date('y' , strtotime($pat["PurchaseDate"])) == "23"){
		
	 	
	   $count24 = $count24 + 1;
	
	}
	
	
}


$dataPoint = array(
	array("y" => $count17, "label" => "2017" ),
	array("y" => $count18, "label" => "2018" ),
	array("y" => $count19, "label" => "2019" ),
	array("y" => $count20, "label" => "2020" ),
	array("y" => $count21, "label" => "2021" ),
	array("y" => $count22, "label" => "2022" ),
	array("y" => $count23, "label" => "2023" )

);	

?>
<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8"/>
		<title>Profits_And_Losses</title>
		<link rel="stylesheet" href="layouts/css/bootstrap.min.css">
		<link rel="stylesheet" href="layouts/css/font-awesome.css">
		<link rel="stylesheet" href="layouts/css/jquery-ui.css">
		<link rel="stylesheet" href="layouts/css/jquery.selectBoxIt.css">
		<link rel="stylesheet" href="layouts/css/backend.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Almarai&diplay=swap">
	    <script type="text/javascript">
				window.onload = function () {
					
					// Start Pie Charts
					<?php 
					
					
					$profitt = $_SESSION['prof'];
					
					if($profitt > 0){
					
					
					
					?>
					
					
					var chart = new CanvasJS.Chart("pie", {
						animationEnabled: true,
						title: {
							text: "معدل الأرباح"
						},
						subtitles: [{
							text: "November 2017"
						}],
						data: [{
							type: "pie",
							yValueFormatString: "#,##0.00\"%\"",
							indexLabel: "{label} ({y})",
							dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
						}]
					});
					chart.render();
							   
					<?php
						
					}else{ ?>
						
						
						var chart = new CanvasJS.Chart("pie", {
						animationEnabled: true,
						title: {
							text: "معدل الخسائر"
						},
						subtitles: [{
							text: "November 2017"
						}],
						data: [{
							type: "pie",
							yValueFormatString: "#,##0.00\"%\"",
							indexLabel: "{label} ({y})",
							dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
						}]
					});
					chart.render();
						
						
						
				<?php	}
						
						
						
				    ?>		
					
					// Start bar Chart
					
					var chart = new CanvasJS.Chart("barChart", {
							title: {
								text: "معدل المشريات"
							},
							axisY: {
								title: "عدد المشتريات"
							},
							data: [{
								type: "line",
								dataPoints: <?php echo json_encode($dataPoint, JSON_NUMERIC_CHECK); ?>
							}]
						});
						chart.render();
					
				  // Start Column Chart
					
				  var chart = new CanvasJS.Chart("columnChart", {
						animationEnabled: true,
						theme: "light2",
						title:{
							text: "معدل المبيعات"
						},
						axisY: {
							title: "عدد المبيعات"
						},
						data: [{
							type: "column",
							yValueFormatString: "#,##0.## tonnes",
							dataPoints: <?php echo json_encode($dataPointss, JSON_NUMERIC_CHECK); ?>
						}]
					});
					chart.render();
					
			  }
		</script>
		
		<script type="text/javascript" src="layouts/js/canvasjs.min.js"></script>
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
					 <li class="active"><a href="profits_and_losses.php">الاحصائيات</a></li>
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
	<div class="container">
			<div class="row">
				<div class="col-md-5 pull-right" style="margin-bottom:50px">
					<div class="icon text-center">
						<h1 class="text-center">الاحصائيات</h1>
						<i class="fa fa-money fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>	
	 <div class="profits-and-losses main-color">
			 <div class="container">
				 <div class="row">
					 <div class="col-md-8">
						 <div class="profits">
					       <div id="pie" style="height: 300px; width: 100%;"></div>
						 </div>
					 </div>
					 <div class="col-md-4">
						 <div class="year">
							 <ul class="list-unstyled">
								 <li class="type">تصنيف حسب</li>
								 <a href="profits_and_losses.php"><li class="ye">السنه</li></a>
								 <a href="profits_and_losses1.php"><li>الشهر</li></a>
								 <a href="profits_and_losses2.php"><li>الأسبوع</li></a>
							 </ul>
						 </div>
					 </div>
					 <!-- Start Stats -->
					 <div class="home-stats col-md-12" style="margin-top:25px;margin-bottom:25px">
						 <div class="container text-center">
							 <!--<h1 class="new">الرئيسيه</h1>-->
							 <div class="row">
								 <?php
	  
									include('../connect.php');  
									$sql = $con->prepare("SELECT purchases.* , stock.ownerid
					   
										   FROM 
											 purchases
										INNER JOIN
											stock
										ON 
											stock.StockID = purchases.StockID	

										   WHERE stock.ownerid = $id");
									$sql->execute();
									$row = $sql->fetch();
								    $count = $sql->rowCount();

								   ?>
								 <div class="col-md-3">
									 <div class="stat st-members">
										 <i class="fa fa-shopping-cart"></i>
										 <div class="info">
											 <span class="address">المشتريات</span>
											 <span><a href="purchases.php?page=All"><?php echo $count; ?></a></span>
										 </div>
									 </div>
								 </div>
								 <?php
	  
									include('../connect.php');  
									$sql = $con->prepare("SELECT * FROM sales WHERE ownerid=$id");
									$sql->execute();
									$row = $sql->fetch();
								    $count = $sql->rowCount();

								   ?>
								 <div class="col-md-3">
									 <div class="stat st-pending">
										 <i class="fa fa-shopping-bag"></i>
										 <div class="info">
											 <span class="address">المبيعات</span>
											 <span><a href="sales.php"><?php echo $count; ?></a></span>
										 </div>
									 </div>
								 </div>
								 <?php
	  
									include('../connect.php');  
									$sql = $con->prepare("SELECT product.* , stock.ownerid
					   
									   FROM 
										 product
									INNER JOIN
										stock
									ON 
										stock.StockID = product.StockID	

									   WHERE stock.ownerid = $id");
									$sql->execute();
									$row = $sql->fetch();
								    $count = $sql->rowCount();

								   ?>
								 <div class="col-md-3">
									 <div class="stat st-items">
										 <i class="fa fa-tag"></i>
										 <div class="info">
											 <span class="address">المنتجات</span>
											 <span><a href="items.php?page=All"><?php echo $count; ?></a></span>
										 </div>
									 </div>
								 </div>
								 <?php
	  
									include('../connect.php');  
									$sql = $con->prepare("SELECT * FROM  sale_return WHERE ownerid=$id");
									$sql->execute();
									$row = $sql->fetch();
								    $count = $sql->rowCount();

								   ?>
								 <div class="col-md-3">
									 <div class="stat st-comments">
										 <i class="fa fa-share-square"></i>
										 <div class="info">
											 <span class="address">المرتجعات</span>
											 <span><a href="return_items.php"><?php echo $count; ?></a></span>
										 </div>
									 </div>
								 </div>
							 </div>
						 </div>
					 </div>	
					 <!-- End Stats -->
					 <div class="col-md-6">
						 <div class="sales">
							  <div id="columnChart" style="height: 300px; width: 100%;"></div>
						 </div>
					 </div>
					 <div class="col-md-6">
						 <div class="purchases">
							 <div id="barChart" style="height: 300px; width: 100%;"></div>
						 </div>
					 </div>
				 </div>
			 </div>
     </div>	
 
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