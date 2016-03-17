
	<?php

	include ("tools.php");

	$toolId = '';
	$toolname = '';	
	$quantity ='' ;
	$suppliers ='' ;
	$toolType ='';
//interface printed after submission
	if(isset($_REQUEST['submit'])){
	$toolId = $_REQUEST['toolId'];
	$toolname = $_REQUEST['toolName'];	
	$quantity = $_REQUEST['quantity'];
	$suppliers = $_REQUEST['suppliersId'];
	$toolType = $_REQUEST['toolType'];


	$tool  = new tools();
	$tool->editTool($toolId,$toolName,$quantity,$suppliers,$toolType,"Tools");

	echo"<div><form action=\"editdrug_interface.php\" method=\"GET\"></div>";
	echo"<div><input type=\"hidden\" name=\"toolId\Id\" value=  ></div>";
	echo"<div><input type=\"hidden\" name=\"toolName\" value=  ></div>";
	echo"<div><input type=\"text\" name=\"quantity\" value=  ></div>";
	echo"<div><input type=\"text\" name=\"supplierId\" value=  ></div>";
	echo"<div><input type=\"text\" name=\"toolType\" value=  ></div>";
	echo"<div><input type=\"submit\" name=\"submit\" value=\"ClicktoEdit\">";	
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
	$toolType=$row['toolType'];

	echo"<div><form action=\"editdrug_interface.php\" method=\"GET\"></div>";
	echo"<div><input type=\"hidden\" name=\"toolId\Id\" value=  ></div>";
	echo"<div><input type=\"hidden\" name=\"toolName\" value=  ></div>";
	echo"<div><input type=\"text\" name=\"quantity\" value=  ></div>";
	echo"<div><input type=\"text\" name=\"supplierId\" value=  ></div>";
	echo"<div><input type=\"text\" name=\"toolType\" value=  ></div>";
	echo"<div><input type=\"submit\" name=\"submit\" value=\"ClicktoEdit\">";
		
	}
	?>