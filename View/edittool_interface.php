<html>
<head>
	<title>Edit Tool</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="formpage">
	<div class="header"><p>Helo</p></div>
	<div><h1 class="instruction">Edit Tool Info</h1></div>
	<div class="form_back">
	<?php

	include ("../Model/tools.php");

	$toolId = '';
	$toolname = '';
	$quantity ='' ;
	$suppliers ='' ;
	$toolType ='';
//interface printed after submission
	if(isset($_REQUEST['submit'])){
	$toolId = $_REQUEST['toolId'];
	$toolName = $_REQUEST['toolName'];
	$Quantity = $_REQUEST['quantity'];
	$suppliers = $_REQUEST['supplierId'];



	$tool  = new tools();
	$tool->editTool($toolId,$toolName,$Quantity,$suppliers,"Tools");
	echo"<form class=\"information-tools\"action=\"edittool_interface.php\" method=\"GET\">
	  <input style='width:50%' type=\"text\" name=\"toolName\" placeholder=\"Tool Name\" value = $toolName >
	  <input style='width:30%' type=\"text\" name=\"quantity\" placeholder=\"Qty\" value = $Quantity  >
	  <input style='width:55%'type=\"text\" name=\"supplierId\" placeholder=\"Supplier Id\" value = $supplierId>
	  <button type=\"submit\" name=\"submit\" class=\"buttonAdd\">Edit Tool</button>
	  <a class='button' href='homepage.php'>Return to homepage</a>";
	}
//interface printed whenever the user wants to edit
	if(isset($_REQUEST['id'])){
		$tool = new Tools();
		$id = $_REQUEST['id'];
		$tool->searchTools($id);
		$row =$tool->fetch();
		$toolName =$row['toolName'];

	$Quantity=$row['quantity'];
	$supplierId=$row['supplierId'];
    $toolId=$_REQUEST['id'];
		echo"<form class=\"information-tools\"action=\"edittool_interface.php\" method=\"GET\">
			<input style='width:50%' type=\"text\" name=\"toolName\" placeholder=\"Tool Name\" value = $toolName >
			<input style='width:30%' type=\"text\" name=\"quantity\" placeholder=\"Qty\" value = $Quantity  >
			<input style='width:55%'type=\"text\" name=\"supplierId\" placeholder=\"Supplier Id\" value = $supplierId>
			<button type=\"submit\" name=\"submit\" class=\"buttonAdd\">Edit Tool</button>
			<a class='button' href='homepage.php'>Return to homepage</a>";
		}

	?>
</div>
</body>
</html>
