<html>
<head>
	<title>Add Supplier</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="formpage">
	<div class="header"><p>Helo</p></div>
	<div><h1 class="instruction">Add a new supplier</h1></div>
	<div class="form_backV2">
<?php

$supplierName ='';
	$supplierLocation='';


	//checks the url to get values from it in order to let the values remain in the text fields
	if(isset($_REQUEST['supplierName'])){

	$supplierName=$_REQUEST['supplierName'];
	}
	if(isset($_REQUEST['supplierLocation'])){
	$supplierLocation=$_REQUEST['supplierLocation'];}



	echo"<form class=\"information-supplier\"action=\"addsupplier_interface.php\" method=\"GET\">
	<input style='width:50%' type=\"text\" name=\"supplierName\" placeholder=\"Supplier Name\" value = $supplierName >
	<input style='width:50%' type=\"text\" name=\"supplierLocation\" placeholder=\"Location\" value = $supplierLocation  >
	<button type=\"submit\" name=\"submit\" class=\"buttonAdd\">Add Supplier</button>
		<a class='button' href='homepage.php'>Return to homepage</a>";
	//proceeds to  add new item in the database when the button is clicked

	if(isset($_REQUEST['submit'])){
		 $supplierName = $_REQUEST['supplierName'];
		 $supplierLocation = $_REQUEST['supplierLocation'];

		 include "../Model/suppliers.php";
		 $supplier= new Suppliers();
		$supplier->addSuppliers($supplierName, $supplierLocation);
	 }

?>
</div>
</body>
</html>
