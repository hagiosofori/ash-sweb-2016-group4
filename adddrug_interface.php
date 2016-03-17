<?php

$drugName ='';
$Quantity='';
$supplierId='';
$drugType='';
//checks for inputs transmitted to browser from the result page
if(isset($_REQUEST['drugName'])){ 

$drugName=$_REQUEST['drugName'];
}
if(isset($_REQUEST['quantity'])){
$Quantity=$_REQUEST['quantity'];}
if(isset($_REQUEST['supplierId'])){
$supplierId =$_REQUEST['supplierId'];}

if(isset($_REQUEST['drugType'])){
$toolType=$_REQUEST['drugType'];
}
echo"<form action=\"adddrug_interface.php\" method=\"GET\"></div>";

echo"<div>drugName<input type=\"text\" name=\"drugName\" value = $drugName ></div>";
echo"<div>Quantity<input type=\"text\" name=\"quantity\"  value = $Quantity  ></div>";
echo"<div>supplierId<input type=\"text\" name=\"supplierId\" value = $supplierId></div>";
echo"<div>drugType<input type=\"text\" name=\"drugType\" value = $drugType ></div>";
echo"<input type=\"submit\" name=\"submit\" value=\"ClicktoAdd\"></div>";
//after submitting the form, new item is added to the database
 if(isset($_REQUEST['submit'])){
	 $drugname = $_REQUEST['drugName'];
	 $drugQuantity = $_REQUEST['quantity'];
	 $drugSupplier=$_REQUEST['supplierId'];
	 $drugType = $_REQUEST['drugType'];
	 include "drug.php";
	 $drug= new drug();
	$drug->addDrug($drugname,$drugQuantity,$drugSupplier,$drugType,"Drugs");
 }

?>