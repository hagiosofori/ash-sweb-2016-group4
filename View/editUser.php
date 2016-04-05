<html>
	<head>
		<title>Edit User</title>
		<link rel="stylesheet" type="text/css" href="../css/materialize/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>

	<body>
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

		<div class="row">
			<div class="col s4 offset-s4 ">
				<div class="card  z-depth-3">
					<div class="card-content">

						<!--Form displays user information of a specific user-->
						<form action="../Controller/updateUser.php" method="GET" onsubmit='validate()'>
							<input type="hidden" name="userID" value="<?php echo $info['userID']?>">
  						<div>Username: <input type="text" name="username" value="<?php echo $info['username']?>"/></div>
  						<div>Firstname: <input type="text" name="firstname" value="<?php echo $info['firstname']?>"/></div>
  						<div>Lastname: <input type="text" name="lastname" value="<?php echo $info['lastname']?>"/></div>
  						<div>Password: <input type="password" name="password" value="<?php echo $info['password']?>"/></div>
							<div>Email:<input type="text" name="email" value="<?php echo $info['email']?>"/></div>

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
								User Type: <input class="with-gap" type="radio" name="userType" value="1" id="test1" <?php echo "$check1"?>>
								<label for="test1">Admin</label>
								<input class="with-gap" type="radio" name="userType" value="0" id="test2"<?php echo "$check2"?>>
								<label for="test2">User</label>
							</div>
							<?php
								$adminID=$_REQUEST['adminID'];
								echo"<input type='hidden' name='adminID' value='$adminID'>";
							?>
	  				  <button class="btn waves-effect waves-light" type="submit" name="signUp">Edit User</button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
