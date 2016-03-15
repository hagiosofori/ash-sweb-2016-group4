<html>
<body>



<form action="" method="GET" onsubmit='validate()'>
  <div>Username: <input type="text" name="username" value=""/></div>
  <div>Firstname: <input type="text" name="firstname" value=""/></div>
  <div>Lastname: <input type="text" name="lastname" value=""/></div>
  <div>Password: <input type="password" name="password" value=""/></div>
<input type="submit" name="signUp" value="Sign Up">

<?php
include_once("users.php");
$user = new users();

	if(!isset($_REQUEST['username'])){
		exit();
	}

	$username=$_REQUEST['username'];
	$firstname=$_REQUEST['firstname'];
	$lastname=$_REQUEST['lastname'];
	$password=$_REQUEST['password'];

  $verify = $user->addNewUser($username,$firstname,$lastname,$password);

  if($verify==true){
    echo "user added";
  
  }
  else{
    echo "User was not created";
  }
?>
</form>
</body>
</html>
