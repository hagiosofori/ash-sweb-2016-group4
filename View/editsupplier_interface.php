<html>
<head>
	<title>Edit Supplier</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="formpage">
	<div class="header"><p>Helo</p></div>
	<div><h1 class="instruction">Edit Supplier Info</h1></div>
	<div class="form_backV2">
<?php
	$supplierName ='';
	$supplierLocation = '';
	$supplierId = '';


	 include("../Model/suppliers.php");

	 //displays the interface when the edit page is launched

	if(isset($_REQUEST['id'])){
		$supplier = new suppliers();
		$id = $_REQUEST['id'];
		$supplier->searchSuppliers($id);
		$row =$supplier->fetch();
		$supplierName =$row['supplierName'];
	    $supplierId = $_REQUEST['id'];
	    $supplierLocation=$row['supplierLocation'];


	echo"<form class=\"information-supplier\"action=\"editsupplier_interface.php\" method=\"GET\">
	<input type=\"hidden\" name=\"supplierId\" value = $supplierId >
	<input style='width:50%' type=\"text\" name=\"supplierName\" placeholder=\"Supplier Name\" value = $supplierName >
	<input style='width:50%' type=\"text\" name=\"supplierLocation\" placeholder=\"Location\" value = $supplierLocation  >
	<button type=\"submit\" name=\"submit\" class=\"buttonAdd\">Edit Supplier</button>
	<a class='button' href='homepage.php'>Return to homepage</a>";

	}
//edits the value the drug with new content when the button is pressed
	if(isset($_REQUEST['submit'])){
		if(isset($_REQUEST['supplierLocation'])){$supplierLocation = $_REQUEST['supplierLocation'];}
		if(isset($_REQUEST['supplierId'])){$supplierId = $_REQUEST['supplierId'];}
		if(isset($_REQUEST['supplierName'])){$supplierName = $_REQUEST['supplierName'];	}


	$supplier  = new Suppliers();

	$supplier->editSuppliers($supplierId,$supplierName,$supplierLocation);

	echo"<form class=\"information-supplier\"action=\"editsupplier_interface.php\" method=\"GET\">
	<input type=\"hidden\" name=\"supplierId\" value = $supplierId >
	<input style='width:50%' type=\"text\" name=\"supplierName\" placeholder=\"Supplier Name\" value = $supplierName >
	<input style='width:50%' type=\"text\" name=\"supplierLocation\" placeholder=\"Location\" value = $supplierLocation  >
	<button type=\"submit\" name=\"submit\" class=\"buttonAdd\">Edit Supplier</button>
	<a class='button' href='homepage.php'>Return to homepage</a>";
	}

	?>
</div>
</body>
</html>
