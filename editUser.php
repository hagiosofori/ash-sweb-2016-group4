<html>
	<head>
		<title>Edit User</title>
	</head>

	<body>
		<?php
			//Include users class
			include_once("users.php");

			//Obtains the user's ID
			if(isset($_REQUEST['userID']))
			{
				$user = new users();
				$code=$_REQUEST['userID'];
				$info = $user->getUser($code);
				$info = $user->fetch();
			}
		?>

	<!--Form displays user information of a specific user-->
	<form action="updateUser.php" method="GET" onsubmit='validate()'>
	<input type="hidden" name="userID" value="<?php echo $info['userID']?>">
  <div>Username: <input type="text" name="username" value="<?php echo $info['username']?>"/></div>
  <div>Firstname: <input type="text" name="firstname" value="<?php echo $info['firstname']?>"/></div>
  <div>Lastname: <input type="text" name="lastname" value="<?php echo $info['lastname']?>"/></div>
  <div>Password: <input type="password" name="password" value="<?php echo $info['password']?>"/></div>
	</div>

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
	<div>
		User Type <input type="radio" name="userType" value="1"<?php echo "$check1"?> > Admin
		<input type="radio" name="userType" value="0" <?php echo "$check2"?>> User
	</div>
	<input type="submit" name="save" value="Edit">

</form>

</body>
</html>
