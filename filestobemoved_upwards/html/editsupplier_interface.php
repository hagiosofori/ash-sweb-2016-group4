<html>
<head>
	<title>Edit Supplier</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/header.css">
</head>
<body class="formpage">
	<div style="background-color">
		<div id='logo'><a href='#logo'><img src='../img/logo.png'/></a></div>
		<ul>
			<li><a href='#'>Home</a></li>
			<li><a href='#'>Person</a></li>
			<li><a href='#'>People</a></li>
		</ul>
	</div>


	<div><h1 class="instruction">Edit Supplier Info</h1></div>
	<div class="form_backV2">


	<form class= "information-supplier "action= "editsupplier_interface.php " method= "GET ">
	<input type= "hidden" name= "supplierId " value = "" >
	<input style='width:50%' type= "text" name= "supplierName" placeholder= "Supplier Name" value ="" >
	<input style='width:50%' type= "text" name= "supplierLocation" placeholder= "Location" value = ""  >
	<button type= "submit" name= "submit" class= "buttonAdd ">Edit Supplier</button>
	<a class='button' href='homepage.php'>Return to homepage</a>


</div>
<footer>
	 <span style="float:left;margin-top:2%"><img id="imageshape" src="../img/logo.png"/></span>
	 <span style=" "><p style="padding-top:2%;">Contact us</p>
	 <p>Phone number:(00233)34-456-00-99</p> <p>Email: info@ashesiclinic.com </p>
	 </span>
		 <div id="footertext" style="padding-left:2% float:right;">
						&copy; 2016 Copyright Clinic Tool</span>
						<span style="color:#515151;padding-left:2%;">All rights reserved<span>

						</div>

		</footer>
</body>
</html>
