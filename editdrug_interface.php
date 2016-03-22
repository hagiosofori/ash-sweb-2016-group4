



	<?php
	$drugName ='';
	$Quantity='';
	$supplierId='';
	$drugType='';

	 include("drug.php");
	 //interface printed whenever the user wants to edit
	if(isset($_REQUEST['id'])){
		$drug = new drug();
		$id = $_REQUEST['id'];
		$drug->searchDrugs($id);
		$row =$drug->fetch();
		$drugName =$row['drugName'];
	$Quantity=$row['quantity'];
	$supplierId=$row['supplierId'];
	$drugType=$row['drugType'];
		
		echo"<form action=\"editdrug_interface.php\" method=\"GET\"></div>";
	echo"<div><input type=\"hidden\" name=\"drugId\"  ></div>";
	echo"<div>drugName<input type=\"text\" name=\"drugName\" value= $drugName ></div>";
	echo"<div>Quantity<input type=\"text\" name=\"quantity\" value= $Quantity ></div>";
	echo"<div>supplierId<input type=\"text\" name=\"supplierId\" value= $supplierId ></div>";
	echo"<div>drugType<input type=\"text\" name=\"drugType\" value= $drugType ></div>";
	echo"<input type=\"submit\" name=\"submit\" value=\"ClicktoEdit\"></div>";
		
		
	}
   //interface printed after submission
	if(isset($_REQUEST['submit'])){
		
		if(isset($_REQUEST['drugId'])){$drugId = $_REQUEST['drugId'];}
		if(isset($_REQUEST['drugName'])){$drugname = $_REQUEST['drugName'];	}
		if(isset($_REQUEST['quantity'])){$quantity = $_REQUEST['quantity'];}
		if(isset($_REQUEST['suppliersId'])){$suppliers = $_REQUEST['suppliersId'];}
		if(isset($_REQUEST['drugType'])){$drugType = $_REQUEST['drugType'];}

	$drug  = new drug();

	$drug->editDrug($drugId,$drugName,$quantity,$suppliers,$drugType,"Drugs");
		
	echo"<form action=\"editdrug_interface.php\" method=\"GET\"></div>";
	echo"<div><input type=\"hidden\" name=\"drugId\"  ></div>";
	echo"<div>drugName<input type=\"text\" name=\"drugName\" value= $drugName ></div>";
	echo"<div>Quantity<input type=\"text\" name=\"quantity\" value= $Quantity ></div>";
	echo"<div>supplierId<input type=\"text\" name=\"supplierId\" value= $supplierId ></div>";
	echo"<div>drugType<input type=\"text\" name=\"drugType\" value= $drugType ></div>";
	echo"<input type=\"submit\" name=\"submit\" value=\"ClicktoEdit\"></div>";
	}

	?>