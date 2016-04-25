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
		<title>Add Tool</title>
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
				  <input id=\"toolname\" style='width:50%' type=\"text\" name=\"toolName\" placeholder=\"Tool Name\" value = $toolName >
				  <input id=\"toolquantity\" style='width:30%' type=\"text\" name=\"quantity\" placeholder=\"Qty\" value = $Quantity  >
				  <input id=\"toolsupplier\" style='width:55%'type=\"text\" name=\"supplierId\" placeholder=\"Supplier Id\" value = $supplierId>
					<input type=\"button\" name=\"submit\" id=\"buttonAdd\" onclick=\"addTool();\" value=\"Add Tool\">
				  	<a class='button' href='hm.php'>Return to homepage</a>";
						// <button type=\"submit\" name=\"submit\" class=\"buttonAdd\">Add Tool</button>
				//proceeds to  add new item in the database when the button is clicked
				//  if(isset($_REQUEST['submit'])){
				 //
				// 	 $toolname = $_REQUEST['toolName'];
				// 	 $toolQuantity = $_REQUEST['quantity'];
				// 	 $toolSupplier=$_REQUEST['supplierId'];
				 //
				// 	 include "../Model/tools.php";
				// 	 $tool = new tools();
				// 	$tool->addTool($toolname,$toolQuantity,$toolSupplier," ","Tools");
				 //
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
</html>
