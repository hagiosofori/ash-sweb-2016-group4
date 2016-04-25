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
		<title>Add Supplier</title>

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
			<div><h1 class="instruction">Add a new supplier</h1></div>
			<div class="form_backV2">
				<?php
				$supplierName ='';
					$supplierLocation='';
					//checks the url to get values from it in order to let the values remain in the text fields

					echo"<form class=\"information-supplier\"action=\"addsupplier_interface.php\" method=\"GET\">
					<input id=\"suppliername\" style='width:50%' type=\"text\" name=\"supplierName\" placeholder=\"Supplier Name\" value = $supplierName >
					<input id=\"supplierlocation\" style='width:50%' type=\"text\" name=\"supplierLocation\" placeholder=\"Location\" value = $supplierLocation  >
					<input type=\"button\" name=\"submit\" id=\"buttonAdd\" onclick=\"addSupplier();\" value=\"Add Supplier\">
						<a class='button' href='hm.php'>Return to homepage</a>";
				
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
