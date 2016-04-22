<html>
<head>
	<title>Edit drug</title>
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


	<div><h1 class="instruction">Edit Drug Info</h1></div>
	<div class="form_back">

	<form class= "information-drug " action= "editdrug_interface.php " method= "GET ">
	<input style='width:60%' type= "text" name= "drugName" placeholder= "Drug Name " value ="" >
	<input style='width:30%' type= "text" name= "quantity" placeholder= "Qty" value = ""  >
	<input style='width:60%'type= "text" name= "supplierId" placeholder= "Supplier Id" value = "">
	<input style='width:20%'type= "text" name= "drugType" placeholder= "Drug Type" value = "" >
	<button type= "submit" name= "submit" class= "buttonAdd ">Edit Drug</button>
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
