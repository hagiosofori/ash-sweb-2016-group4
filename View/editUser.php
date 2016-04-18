<html>
	<head>
		<title>Edit User</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>

	<body class="formpage">
		<?php
			//Include users class
			include_once("../Model/users.php");

			//Obtains the user's ID
			if(isset($_REQUEST['userID']))
			{
				$user = new users();
				$code=$_REQUEST['userID'];
				$info = $user->getUser($code);
				$info = $user->fetch();
			}
		?>
<div style="background-color:#4C4C4C; height:25%; width:100%"><p>Helo</p></div>
	<div><h1 class="instruction">Edit User Info</h1></div>
				<div class="form_back">
						<!--Form displays user information of a specific user-->
						<form action="../Controller/updateUser.php"class="information" method="GET" onsubmit='validate()'>
							<input type="hidden" name="userID" value="<?php echo $info['userID']?>">
							<input style="width:56%" type="text" name="username" placeholder="Username" value="<?php echo $info['username']?>"/>
	            <input style="width:45%" type="text" name="firstname" placeholder="Firstname" value="<?php echo $info['firstname']?>"/>
	            <input style="width:40%" type="text" name="lastname" placeholder="Lastname" value="<?php echo $info['lastname']?>"/>
	            <input style="width:48%" type="password" name="password" placeholder="Password" value="<?php echo $info['password']?>"/>
	            <input style="width:48%" type="text" name="email" placeholder="Email" value="<?php echo $info['email']?>"/>

							<?php
								$check1="";
								$check2="";

								//Ticks the option selected
								if($info['userType']==1){
									$check1="checked";
								}
								else{
									$check2="checked";
								}
							?>

							<div class="input_options">
								User Type: <input type="radio" name="userType" value="1" <?php echo "$check1"?>>
								<label >Admin</label>
								<input type="radio" name="userType" value="0" <?php echo "$check2"?>>
								<label >User</label>
							</div>
							<?php
								$adminID=$_REQUEST['adminID'];
								echo"<input type='hidden' name='adminID' value='$adminID'>";
							?>

	  				  <button class="buttonAdd" type="submit" name="signUp">Edit User</button>
							<?php
	              echo"<a class='button' href='displayUser.php?permission=1&adminID=$adminID'>Return to Users</a>";
	            ?>

						</form>
					</div>
	</body>
</html>
