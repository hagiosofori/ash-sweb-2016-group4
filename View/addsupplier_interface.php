<html>
	<head>
		<title>Add Supplier</title>
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body class="formpage">
		<div id="wrapper">
			<div id='logo'><a href='#logo'><img src='../img/logo.png'/></a></div>
			<ul>
				<li><a href='#'>Home</a></li>
				<li><a href='#'>Person</a></li>
				<li><a href='#'>People</a></li>
			</ul>
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
					<input id=\"suppliername\" style='width:50%' type=\"text\" name=\"supplierName\" placeholder=\"Supplier Name\" value = $supplierName >
					<input id=\"supplierlocation\" style='width:50%' type=\"text\" name=\"supplierLocation\" placeholder=\"Location\" value = $supplierLocation  >
					<input type=\"button\" name=\"submit\" id=\"buttonAdd\" onclick=\"addSupplier();\" value=\"Add Supplier\">

						<a class='button' href='hm.php'>Return to homepage</a>";
					//proceeds to  add new item in the database when the button is clicked
// <button type=\"submit\" name=\"submit\" class=\"buttonAdd\">Add Supplier</button>
					//
					// if(isset($_REQUEST['submit'])){
					// 	 $supplierName = $_REQUEST['supplierName'];
					// 	 $supplierLocation = $_REQUEST['supplierLocation'];
					//
					// 	 include "../Model/suppliers.php";
					// 	 $supplier= new Suppliers();
					// 	$supplier->addSuppliers($supplierName, $supplierLocation);
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
