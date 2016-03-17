<html>
<head>
<title>Edit User</title>

</head>
<body>

	<form action="" method="GET" onsubmit='validate()'>
  <div>Username: <input type="text" name="username" value=""/></div>
  <div>Firstname: <input type="text" name="firstname" value=""/></div>
  <div>Lastname: <input type="text" name="lastname" value=""/></div>
  <div>Password: <input type="password" name="password" value=""/></div>
  <div> User Type: <input type="radio" name="userType" value="1"> Admin
  <input type="radio" name="userType" value="0"> User
	</div>
  <input type="submit" name="editUser" value="Edit">




	<?php
		$check1="";
		$check2="";
		if($info['STATUS']==1){
			$check1="checked";
		}
		else{
			$check2="checked";
		}
	?>
	<div>
		Status <input type="radio" name="status" value="1"<?php echo "$check1"?> > Enabled
		<input type="radio" name="status" value="0" <?php echo "$check2"?>> Disabled
	</div>
	<input type="submit" name="save" value="Update">

</form>

</body>
</html>
