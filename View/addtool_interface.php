<html>
	<head>
		<title>Add Tool</title>
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body class="formpage">
		<div id="wrapper">
			<div id='logo'><a href='#logo'><img src='../logo.png'/></a></div>
			<ul>
				<li><a href='#'>Home</a></li>
				<li><a href='#'>Person</a></li>
				<li><a href='#'>People</a></li>
			</ul>
			<div><h1 class="instruction">Add a new tool</h1></div>
			<div class="form_back">
				<?php

				$toolName ='';
				$Quantity='';
				$supplierId='';
				$toolType='';

				//checks the url to get values from it in order to let the values remain in the text fields
				if(isset($_REQUEST['toolName'])){

				$toolName=$_REQUEST['toolName'];
				}
				if(isset($_REQUEST['quantity'])){
				$Quantity=$_REQUEST['quantity'];}
				if(isset($_REQUEST['supplierId'])){
				$supplierId =$_REQUEST['supplierId'];}


				echo"<form class=\"information-tools\"action=\"addtool_interface.php\" method=\"GET\">
				  <input style='width:50%' type=\"text\" name=\"toolName\" placeholder=\"Tool Name\" value = $toolName >
				  <input style='width:30%' type=\"text\" name=\"quantity\" placeholder=\"Qty\" value = $Quantity  >
				  <input style='width:55%'type=\"text\" name=\"supplierId\" placeholder=\"Supplier Id\" value = $supplierId>
				  <button type=\"submit\" name=\"submit\" class=\"buttonAdd\">Add Tool</button>
				  	<a class='button' href='hm.php'>Return to homepage</a>";
				//proceeds to  add new item in the database when the button is clicked

				 if(isset($_REQUEST['submit'])){

					 $toolname = $_REQUEST['toolName'];
					 $toolQuantity = $_REQUEST['quantity'];
					 $toolSupplier=$_REQUEST['supplierId'];

					 include "../Model/tools.php";
					 $tool = new tools();
					$tool->addTool($toolname,$toolQuantity,$toolSupplier," ","Tools");

				 }

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
