<html>
	<head>
		<?php
    //Session Started
      session_start();
      if(!isset($_SESSION['user'])){
        header('Location:../index.php');
        exit();
      }
    ?>
		<title>Add drug</title>
		<!-- <link rel="stylesheet" type="text/css" href="../css/header.css"> -->
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script type="text/javascript" src="../Script/jquery-1.12.1.js"></script>
		<script type="text/javascript" src="../Script/inventoryAjax.js"></script>
	</head>
	<body class="formpage">
		<div id="wrapper">

			<div id='logo'>
				<a href='hm.php'><img src='../img/logo.png' height="95%" style="margin-left:1%;"/></a>
				<a id='logout' href="logout.php">logout</a>
			</div>
			<ul>
				<div id="links">
				<li><a href='hm.php'>Home</a></li>
				<li><a href='#'>About</a></li>
				<li><a href='#'>Team</a></li>
			</div>
				<?php
				 $firstname=$_SESSION["user"]["firstname"];
				 $lastname=$_SESSION["user"]["lastname"];
					echo "<li id='name' style='float:right'>";
					echo  "Welcome: ".$firstname." ".$lastname;
					echo "</li>";
				?>
			</ul>

		<div><h1 class="instruction">Add a new drug</h1></div>
		<div class="form_back">
			<?php
			$drugName ='';
			$Quantity='';
			$supplierId='';
			$drugType='';
			//checks the url to get values from it in order to let the values remain in the text fields
			/*if(isset($_REQUEST['drugName'])){
			$drugName=$_REQUEST['drugName'];
			}
			if(isset($_REQUEST['quantity'])){
			$Quantity=$_REQUEST['quantity'];}
			if(isset($_REQUEST['supplierId'])){
			$supplierId =$_REQUEST['supplierId'];}
			if(isset($_REQUEST['drugType'])){
			$drugType=$_REQUEST['drugType'];
		}*/
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

	<!--Footer -->
	<div class ="footer">
		<span style="float:left;margin-top:2%; margin-right:5%;"><img id="imageshape" src="../img/logo.png"/></span>
 <div>

	 <span style="padding-top:10%;">
		 Contact us <img style="margin-left:1%; margin-right: 1%; width: 2%; height: 15%; padding-left:60%;" src="../img/fb-art.jpg"/><br>
		 Phone number:(00233)34-456-00-99<img style="margin-left:1%; margin-right: 1%; width: 5%; height: 20%; padding-left:48%;" src="../img/NHIS.png" src= "../img/medx.jpg"/><br>
		 Email: info@ashesiclinic.com<img style="margin-left:1%; margin-right: 1%; width: 5%; height: 20%; padding-left:52%;" src="../img/medx.jpg"/> <br> </span>

		<span><br></span>
		<span><br></span>
 </div>

		<div> <span style="padding-left:2%; padding-left:25%;"> &copy; 2016 Copyright Clinic Tool</span>
			 <span style="color:#fffff;padding-left:20%;">All rights reserved</span>
			 </div>
	 </div>
	</div>

	</body>
