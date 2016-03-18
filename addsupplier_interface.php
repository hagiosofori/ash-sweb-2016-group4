<?php

$supplierName ='';
	$supplierLocation='';
	
	
	//checks the url to get values from it in order to let the values remain in the text fields
	if(isset($_REQUEST['supplierName'])){ 

	$supplierName=$_REQUEST['supplierName'];
	}
	if(isset($_REQUEST['supplierLocation'])){
	$supplierLocation=$_REQUEST['supplierLocation'];}
	

	
	echo"<form action=\"addsupplier_interface.php\" method=\"GET\"></div>";
	echo"<div>suplierName<input type=\"text\" name=\"supplierName\" value = $supplierName ></div>";
	echo"<div>supplierLocation<input type=\"text\" name=\"supplierLocation\"  value = $supplierLocation  ></div>";
	
	echo"<input type=\"submit\" name=\"submit\" value=\"Add\"></div>";
	
	//proceeds to  add new item in the database when the button is clicked
	
	if(isset($_REQUEST['submit'])){
		 $supplierName = $_REQUEST['supplierName'];
		 $supplierLocation = $_REQUEST['supplierLocation'];
		
		 include "suppliers.php";
		 $supplier= new Suppliers();
		$supplier->addSuppliers($supplierName, $supplierLocation);
	 }

?>