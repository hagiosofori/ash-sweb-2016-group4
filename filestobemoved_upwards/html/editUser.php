<html>
	<head>
		<title>Edit User</title>
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
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
	<div><h1 class="instruction">Edit User Info</h1></div>
				<div class="form_back">
						<!--Form displays user information of a specific user-->
						<form action="../Controller/updateUser.php"class="information" method="GET" onsubmit='validate()'>
							<input type="hidden" name="userID" value="">
							<input style="width:56%" type="text" name="username" placeholder="Username" value=""/>
	            <input style="width:45%" type="text" name="firstname" placeholder="Firstname" value=""/>
	            <input style="width:40%" type="text" name="lastname" placeholder="Lastname" value=""/>
	            <input style="width:48%" type="password" name="password" placeholder="Password" value=""/>
	            <input style="width:48%" type="text" name="email" placeholder="Email" value=""/>


							<div class="input_options">
								User Type: <input type="radio" name="userType" value="1" >
								<label >Admin</label>
								<input type="radio" name="userType" value="0" >
								<label >User</label>
							</div>
							<!--<?php
								$adminID=$_REQUEST['adminID'];
								echo"<input type='hidden' name='adminID' value='$adminID'>";
							?>-->

	  				  <button class="buttonAdd" type="submit" name="signUp">Edit User</button>
							<a class='button' href='displayUser.php?permission=1&adminID=$adminID'>Return to Users</a>


						</form>
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
