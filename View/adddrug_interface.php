<html>
<head>
	<title>Add drug</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="formpage">
	<div style="background-color:#4C4C4C; height:25%; width:100%"><p>Helo</p></div>
	<div><h1 class="instruction">Add a new drug</h1></div>
	<div class="form_back">
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
	$drugType=$_REQUEST['drugType'];
	}
	echo"<form class=\"information-drug\" action=\"adddrug_interface.php\" method=\"GET\">
	<input style='width:60%' type=\"text\" name=\"drugName\" placeholder=\"Drug Name\" value = $drugName >
	<input style='width:30%' type=\"text\" name=\"quantity\" placeholder=\"Qty\" value = $Quantity  >
	<input style='width:60%'type=\"text\" name=\"supplierId\" placeholder=\"Supplier Id\" value = $supplierId>
	<input style='width:20%'type=\"text\" name=\"drugType\" placeholder=\"Drug Type\" value = $drugType >
	<button type=\"submit\" name=\"submit\" class=\"buttonAdd\">Add Drug</button>
		<a class='button' href='homepage.php'>Return to homepage</a>";
	//proceeds to  add new item in the database when the button is clicked

	if(isset($_REQUEST['submit'])){
		 $drugname = $_REQUEST['drugName'];
		 $drugQuantity = $_REQUEST['quantity'];
		 $drugSupplier=$_REQUEST['supplierId'];
		 $drugType = $_REQUEST['drugType'];
		 include "../Model/drugs.php";
		 $drug= new drugs();
		$drug->addDrug($drugname,$drugQuantity,$drugSupplier,$drugType,"Drugs");
	 }

	?>
</div>
</body>
</html>
