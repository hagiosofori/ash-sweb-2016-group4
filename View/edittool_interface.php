
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
	echo"<div><form action=\"edittool_interface.php\" method=\"GET\"></div>";
	echo"<div><input type=\"hidden\" name=\"toolId\" value= $toolId ></div>";
	echo"<div>toolName<input type=\"text\" name=\"toolName\" value= '$toolName' ></div>";
	echo"<div>Quantity<input type=\"text\" name=\"quantity\" value=  $Quantity ></div>";
	echo"<div>Suppliers<input type=\"text\" name=\"supplierId\" value= $suppliers ></div>";
	echo"<div><input type=\"submit\" name=\"submit\" value=\"Edit\">";
	echo"<div><a href=\"homepage.php\">Return to homepage</a></div>";
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
	echo"<div><form action=\"edittool_interface.php\" method=\"GET\"></div>";
	echo"<div><input type=\"hidden\" name=\"toolId\" value= $toolId ></div>";
	echo"<div>toolName<input type=\"text\" name=\"toolName\" value= '$toolName' ></div>";
	echo"<div>Quantity<input type=\"text\" name=\"quantity\" value=  $Quantity></div>";
	echo"<div>Suppliers<input type=\"text\" name=\"supplierId\" value= $supplierId ></div>";
	echo"<div><input type=\"submit\" name=\"submit\" value=\"Edit\">";
		echo"<div><a href=\"homepage.php\">Return to homepage</a></div>";
	}
	?>
