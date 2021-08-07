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
		<title>Reports</title>
		<link rel="stylesheet" href="layouts/css/bootstrap.min.css">
		<link rel="stylesheet" href="layouts/css/font-awesome.css">
		<link rel="stylesheet" href="layouts/css/jquery-ui.css">
		<link rel="stylesheet" href="layouts/css/jquery.selectBoxIt.css">
		<link rel="stylesheet" href="layouts/css/backend.css">
		<link rel="stylesheet" href="layouts/css/all.min.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Almarai&diplay=swap">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="layouts/js/html2pdf.bundle.min.js"></script>
        <script>
		  function generatePDF() {
			// Choose the element that our invoice is rendered in.
			const element = document.getElementById("sales");
			// Choose the element and save the PDF for our user.
			html2pdf()
			  .from(element)
			  .save();
		  }
     </script>
	<script>
		  function generatePDF1() {
			// Choose the element that our invoice is rendered in.
			const element = document.getElementById("purchases");
			// Choose the element and save the PDF for our user.
			html2pdf()
			  .from(element)
			  .save();
		  }
     </script>	
	<script>
		  function generatePDF2() {
			// Choose the element that our invoice is rendered in.
			const element = document.getElementById("returns");
			// Choose the element and save the PDF for our user.
			html2pdf()
			  .from(element)
			  .save();
		  }
     </script>	
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

$do = $_GET['page'];

if($do == "Sales"){
		
		?>

		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<!--<a id="exportButton" href="#" class="btn btn-primary btn-lg add">تنزيل <i class="fa fa-download"></i></a>-->
					
					<!--<form class="form-inline" method="post" action="generate.php">
						<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary btn-lg add"><i class="fa fa-download"></i>
						تنزيل</button>
				   </form>-->
					
					
					<button class="btn btn-primary btn-lg add" onclick="generatePDF()">تنزيل <i class="fa fa-download"></i></button>
					
					
				</div>
				<div class="col-md-6 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تقرير عن المبيعات</h1>
						<i class="fa fa-file-o fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
	    <div class="container categories" dir="rtl">
			<div class="table-responsive">
				<table id="sales" class="main-table text-center table table-bordered">
					<tr>
					  <td>رقم البيع</td>
					  <td>تارخ البيع</td>
					  <td>الضريبه</td>		
					  <td>المبلغ الكلي</td>
					  <td>المبلغ الكلي مع الضريبه</td>
					</tr>
					<tr>
					<?php
	
					include('../connect.php');  						  


					$sql = $con->prepare("SELECT * FROM sales WHERE ownerid=$id");
					$sql->execute();
					$rows = $sql->fetchAll();

					foreach($rows as $pat)
					{

				     ?>
					  <td><?php echo $pat["SalesID"]; ?></td>
					  <td><?php echo $pat["SaleDate"]; ?></td>
					  <td><?php echo $pat["VAT"]; ?></td>	
					  <td><?php echo $pat["Total_Net_price_of_sale"]; ?></td>
					  <td><?php echo $pat["Total_price_with_VAT"]; ?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>

<?php  }elseif($do == "Purchases"){ ?>

		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<!--<a id="exportButto" href="#" class="btn btn-primary btn-lg add">تنزيل <i class="fa fa-download"></i></a>-->
					
					<!--<form class="form-inline" method="post" action="generate1.php">
						<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary btn-lg add"><i class="fa fa-download"></i>
						تنزيل</button>
				   </form>-->
					
					
					<button class="btn btn-primary btn-lg add" onclick="generatePDF1()">تنزيل <i class="fa fa-download"></i></button>
					
				</div>
				<div class="col-md-7 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تقرير عن المشتريات</h1>
						<i class="fa fa-file-o fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
	    <div class="container categories" dir="rtl">
			<div class="table-responsive">
				<table id="purchases" class="main-table text-center table table-bordered">
					<tr>
					  <td>رقم المخزن</td>
					  <td>رقم الشراء</td>	
					  <td>تاريخ الشراء</td>
					  <td>التكلفة الاجمالية للشراء</td>		
					</tr>
					
					 <?php
	  
					include('../connect.php');  
					$sql = $con->prepare("SELECT
					   
					   purchases.* , stock.ownerid
					   
					   FROM 
					     purchases
					INNER JOIN
					    stock
				    ON 
				        stock.StockID = purchases.StockID	
					   
					   WHERE stock.ownerid = $id");
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
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>

<?php }elseif($do == "Return_Items"){ ?>
        
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<!--<a id="exportButt" href="#" class="btn btn-primary btn-lg add">تنزيل <i class="fa fa-download"></i></a>-->
					
					
					<!--<form class="form-inline" method="post" action="generate2.php">
						<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary btn-lg add"><i class="fa fa-download"></i>
						تنزيل</button>
				   </form>-->
					
					<button class="btn btn-primary btn-lg add" onclick="generatePDF2()">تنزيل <i class="fa fa-download"></i></button>
					
				</div>
				<div class="col-md-7 pull-right">
					<div class="icon text-center">
						<h1 class="text-center">تقرير عن المرتجعات</h1>
						<i class="fa fa-file-o fa-5x"></i>
						<hr>
					</div>
				</div>
			</div>	
		</div>
	    <div class="container categories" dir="rtl">
			<div class="table-responsive">
				<table id="returns" class="main-table text-center table table-bordered">
					<tr>
					  <td>رقم الارجاع</td>
					  <td>رقم البيع</td>
					  <td>تارخ الارجاع</td>
					  <td>الضريبة</td>	
					  <td>المبلغ الكلي</td>	
					  <td>المبلغ الكلي مع الضريبة</td>		
					</tr>
					<?php
	
					include('../connect.php');  						  


					$sql = $con->prepare("SELECT * FROM  sale_return WHERE ownerid=$id");
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
						</tr>
					<?php  } ?>
				</table>
			</div>
		</div>

<?php }
		 
  
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
	 <script src="layouts/js/shieldui-all.min.js"></script>	
	 <script src="layouts/js/jszip.min.js"></script>	
	 <script type="text/javascript">
    jQuery(function ($) {
        $("#exportButton").click(function () {
            // parse the HTML table element having an id=exportTable
            var dataSource = shield.DataSource.create({
                data: "#exportTable",
                schema: {
                    type: "table",
                    fields: {
                        sale_id: { type: Number },
                        sale_date: { type: Date },
                        VAT: { type: Number },
						Total: { type: Number },
						Total_With_VAT: { type: Number }
                    }
                }
            });

            // when parsing is done, export the data to PDF
            dataSource.read().then(function (data) {
                var pdf = new shield.exp.PDFDocument({
                    author: "PrepBootstrap",
                    created: new Date()
                });

                pdf.addPage("a4", "portrait");

                pdf.table(
                    50,
                    50,
                    data,
                    [
                        { field: "sale_id", title: "رقم البيع", width: 100 },
                        { field: "sale_date", title: "Sale Date", width: 130 },
                        { field: "VAT", title: "VAT", width: 100 },
						{ field: "Total", title: "Total Amount", width: 100 },
						{ field: "Total_With_VAT", title: "Total Amount With VAT", width: 100 }
                    ],
                    {
                        margins: {
                            top: 50,
                            left: 50
                        }
                    }
                );

                pdf.saveAs({
                    fileName: "تقرير عن المبيعات"
                });
            });
        });
    });
</script>
<script type="text/javascript">
    jQuery(function ($) {
        $("#exportButto").click(function () {
            // parse the HTML table element having an id=exportTable
            var dataSource = shield.DataSource.create({
                data: "#exportTabl",
                schema: {
                    type: "table",
                    fields: {
                        Stock_id: { type: Number },
                        Purchase_id: { type: Number },
                        Purchase_date: { type: Date },
						Total_Amount_of_purchases: { type: Number }
                    }
                }
            });

            // when parsing is done, export the data to PDF
            dataSource.read().then(function (data) {
                var pdf = new shield.exp.PDFDocument({
                    author: "PrepBootstrap",
                    created: new Date()
                });

                pdf.addPage("a4", "portrait");

                pdf.table(
                    50,
                    50,
                    data,
                    [
                        { field: "Stock_id", title: "Stock ID", width: 100 },
                        { field: "Purchase_id", title: "Purchase ID", width: 130 },
                        { field: "Purchase_date", title: "Purchase Date", width: 100 },
						{ field: "Total_Amount_of_purchases", title: "Total Amount of Purchases", width: 100 }
                    ],
                    {
                        margins: {
                            top: 50,
                            left: 50
                        }
                    }
                );

                pdf.saveAs({
                    fileName: "تقرير عن المشتريات"
                });
            });
        });
    });
</script>				
<script type="text/javascript">
    jQuery(function ($) {
        $("#exportButt").click(function () {
            // parse the HTML table element having an id=exportTable
            var dataSource = shield.DataSource.create({
                data: "#exportTab",
                schema: {
                    type: "table",
                    fields: {
                        Return_id: { type: Number },
                        Sale_id: { type: Number },
                        return_date: { type: Date },
						VAT: { type: Number },
						Total: { type: Number },
						Total_With_VAT: { type: Number }
                    }
                }
            });

            // when parsing is done, export the data to PDF
            dataSource.read().then(function (data) {
                var pdf = new shield.exp.PDFDocument({
                    author: "PrepBootstrap",
                    created: new Date()
                });

                pdf.addPage("a4", "portrait");

                pdf.table(
                    50,
                    50,
                    data,
                    [
                        { field: "Return_id", title: "Return ID", width: 50 },
                        { field: "Sale_id", title: "Sale ID", width: 50 },
                        { field: "Return_date", title: "Return Date", width: 100 },
						{ field: "VAT", title: "VAT", width: 100 },
						{ field: "Total", title: "Total Amount", width: 50 },
						{ field: "Total_With_VAT", title: "Total Amount With VAT", width: 50 }
                    ],
                    {
                        margins: {
                            top: 50,
                            left: 50
                        }
                    }
                );

                pdf.saveAs({
                    fileName: "تقرير عن المرتجعات"
                });
            });
        });
    });
</script>
<style>
    #exportButton {
        border-radius: 0;
    }
	#exportButto {
        border-radius: 0;
    }
	#exportButt {
        border-radius: 0;
    }
</style>	
 </body>
</html>			