	<?php

	$drugName ='';
	$Quantity='';
	$supplierId='';
	$drugType='';
	
	//checks the url to get values from it in order to let the values remain in the text fields
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
	
	//proceeds to  add new item in the database when the button is clicked
	
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