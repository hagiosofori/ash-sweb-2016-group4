<html>
<body>



<form action="" method="GET" onsubmit='validate()'>
  <div>Username: <input type="text" name="username" value=""/></div>
  <div>Firstname: <input type="text" name="firstname" value=""/></div>
  <div>Lastname: <input type="text" name="lastname" value=""/></div>
  <div>Password: <input type="password" name="password" value=""/></div>
  <div> User Type: <input type="radio" name="userType" value="1"> Admin
  <input type="radio" name="userType" value="0"> User
  </div>
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
  $type=$_REQUEST['userType'];

//Stores the boolean result in a variable
  $verify = $user->addNewUser($username,$firstname,$lastname,$password,$type);

  if($verify==true){
    echo "user added";
    /*header("Location:index.php?userType=$type");
    exit();*/
  }
  else{
    echo "User was not created";
  }
?>
</form>
</body>
</html>
