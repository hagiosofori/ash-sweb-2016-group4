



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
		echo"<form action=\"editdrug_interface.php\" method=\"GET\"></div>";
	echo"<div><input type=\"hidden\" name=\"drugId\" value = $drugId ></div>";
	echo"<div>drugName<input type=\"text\" name=\"drugName\" value= '$drugName' ></div>";
	echo"<div>Quantity<input type=\"text\" name=\"quantity\" value= $Quantity ></div>";
	echo"<div>supplierId<input type=\"text\" name=\"supplierId\" value= $supplierId ></div>";
	echo"<div>drugType<input type=\"text\" name=\"drugType\" value= $drugType ></div>";
	echo"<input type=\"submit\" name=\"submit\" value=\"Edit\">";
	echo"<div><a href=\"homepage.php\">Return to homepage</a></div>";

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

	echo"<form action=\"editdrug_interface.php\" method=\"GET\"></div>";
	echo"<div><input type=\"hidden\" name=\"drugId\"  ></div>";
	echo"<div>drugName<input type=\"text\" name=\"drugName\" value= '$drugName' ></div>";
	echo"<div>Quantity<input type=\"text\" name=\"quantity\" value= $Quantity ></div>";
	echo"<div>supplierId<input type=\"text\" name=\"supplierId\" value= $supplierId ></div>";
	echo"<div>drugType<input type=\"text\" name=\"drugType\" value= $drugType ></div>";
	echo"<input type=\"submit\" name=\"submit\" value=\"Edit\"></div>";
	echo"<div><a href=\"homepage.php\">Return to homepage</a></div>";
	}

	?>
