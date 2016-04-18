<html>
<head>
	<title>Edit drug</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="formpage">
	<div class="header"><p>Helo</p></div>
	<div><h1 class="instruction">Edit Drug Info</h1></div>
	<div class="form_back">

	<?php
	$drugName ='';
	$Quantity='';
	$supplierId='';
	$drugType='';
    $drugId= 0;
	 include("../Model/drugs.php");
	 //interface printed whenever the user wants to edit
	if(isset($_REQUEST['id'])){
		$drug = new drugs();
		$id = $_REQUEST['id'];
		$drug->searchDrugs($id);
		$row =$drug->fetch();
		$drugName =$row['drugName'];
	$Quantity=$row['quantity'];
	$drugId=$_REQUEST['id'];
	$drugType=$row['drugType'];
	$supplierId =$row['supplierID'];
	echo"<form class=\"information-drug\" action=\"editdrug_interface.php\" method=\"GET\">
	<input style='width:60%' type=\"text\" name=\"drugName\" placeholder=\"Drug Name\" value = $drugName >
	<input style='width:30%' type=\"text\" name=\"quantity\" placeholder=\"Qty\" value = $Quantity  >
	<input style='width:60%'type=\"text\" name=\"supplierId\" placeholder=\"Supplier Id\" value = $supplierId>
	<input style='width:20%'type=\"text\" name=\"drugType\" placeholder=\"Drug Type\" value = $drugType >
	<button type=\"submit\" name=\"submit\" class=\"buttonAdd\">Edit Drug</button>
		<a class='button' href='homepage.php'>Return to homepage</a>";
	}
   //interface printed after submission
	if(isset($_REQUEST['submit'])){

		if(isset($_REQUEST['drugId'])){$drugId = $_REQUEST['drugId'];}
		if(isset($_REQUEST['drugName'])){$drugName = $_REQUEST['drugName'];	}
		if(isset($_REQUEST['quantity'])){$Quantity = $_REQUEST['quantity'];}
		if(isset($_REQUEST['supplierId'])){$supplierId = $_REQUEST['supplierId'];}
		if(isset($_REQUEST['drugType'])){$drugType = $_REQUEST['drugType'];}

	$drug  = new drugs();

	$drug->editDrug($drugId,$drugName,$Quantity,$supplierId,$drugType,"Drugs");

	echo"<form class=\"information-drug\" action=\"editdrug_interface.php\" method=\"GET\">
	<input style='width:60%' type=\"text\" name=\"drugName\" placeholder=\"Drug Name\" value = $drugName >
	<input style='width:30%' type=\"text\" name=\"quantity\" placeholder=\"Qty\" value = $Quantity  >
	<input style='width:60%'type=\"text\" name=\"supplierId\" placeholder=\"Supplier Id\" value = $supplierId>
	<input style='width:20%'type=\"text\" name=\"drugType\" placeholder=\"Drug Type\" value = $drugType >
	<button type=\"submit\" name=\"submit\" class=\"buttonAdd\">Edit Drug</button>
		<a class='button' href='homepage.php'>Return to homepage</a>";
	}

	?>
</div>
</body>
</html>
