<?php
//include connection file 
include_once("connection.php");
include_once('../fpdf.php');

session_start();
if(!(isset($_SESSION['password']))){
	header('Location:../login.php');
}

$id = $_SESSION['adminid'];

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    //$this->Image('logo.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(60,10,'Report On Purchases',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading = array('PurchaseID'=>'Purchase ID', 'PurchaseDate'=> 'Purchase Date', 'Total_price_of_purchase'=> 'Total', 'StockID'=> 'Stock ID',);

$result = mysqli_query($connString, "SELECT purchases.PurchaseID, purchases.PurchaseDate, purchases.Total_price_of_purchase	, purchases.StockID FROM purchases INNER JOIN stock ON purchases.StockID = stock.StockID WHERE stock.ownerid=$id") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM purchases");

$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
foreach($header as $heading) {
$pdf->Cell(45,12,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(45,12,$column,1);
}
$pdf->Output();
?>