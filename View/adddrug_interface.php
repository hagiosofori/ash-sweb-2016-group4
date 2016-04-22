<html>
	<head>
		<title>Add drug</title>
		<!-- <link rel="stylesheet" type="text/css" href="../css/header.css"> -->
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script type="text/javascript" src="../Script/jquery-1.12.1.js"></script>
		<script type="text/javascript" src="../Script/Userajax.js"></script>
	</head>
	<body class="formpage">
		<div id="wrapper">
			<div id='logo'><a href='#logo'><img src='../img/logo.png'/></a></div>
			<ul>
				<li><a href='#'>Home</a></li>
				<li><a href='#'>Person</a></li>
				<li><a href='#'>People</a></li>
			</ul>

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
			<input id=\"drugname\" style='width:60%' type=\"text\" name=\"drugName\" placeholder=\"Drug Name\" value = $drugName >
			<input id=\"drugquantity\" style='width:30%' type=\"text\" name=\"quantity\" placeholder=\"Qty\" value = $Quantity  >
			<input id=\"drugsupplier\" style='width:60%'type=\"text\" name=\"supplierId\" placeholder=\"Supplier Id\" value = $supplierId>
			<input id=\"drugtype\" style='width:20%'type=\"text\" name=\"drugType\" placeholder=\"Drug Type\" value = $drugType >
			<input type=\"button\" name=\"submit\" id=\"buttonAdd\" onclick=\"addDrug();\" value=\"Add Drug\">
			<a class='button' href='hm.php'>Return to homepage</a>";
			//proceeds to  add new item in the database when the button is clicked

			// if(isset($_REQUEST['submit'])){
			// 	 $drugname = $_REQUEST['drugName'];
			// 	 $drugQuantity = $_REQUEST['quantity'];
			// 	 $drugSupplier=$_REQUEST['supplierId'];
			// 	 $drugType = $_REQUEST['drugType'];
			// 	 include "../Model/drugs.php";
			// 	 $drug= new drugs();
			// 	$drug->addDrug($drugname,$drugQuantity,$drugSupplier,$drugType,"Drugs");
			//  }

			?>
	</div>
	    <div class="push"></div>
	</div>

	<div class ="footer">
	 <span style="float:left;margin-top:2%"><img id="imageshape" src="../img/logo.png"/></span>
	 <span style=" "><p style="padding-top:2%;">Contact us</p>
		 <p>Phone number:(00233)34-456-00-99</p> <p>Email: info@ashesiclinic.com </p>
	 </span>
	 <div id="footertext" style="padding-left:2% float:right;">
				&copy; 2016 Copyright Clinic Tool</span>
			<span style="color:#515151;padding-left:2%;">All rights reserved<span>
	 </div>
	</div>

	</body>
</html>
