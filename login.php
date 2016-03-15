<html>
<body>



<form action="" method="GET" onsubmit='validate()'>
  <div>Username: <input type="text" name="username" value=""/></div>
  <div>Password: <input type="password" name="password" value=""/></div>
<input type="submit" name="Login">

<?php
include_once("users.php");
$user = new users();

if(!isset($_REQUEST['username'])){
  exit();		//if no data, exit
}

$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

$verify=$user->login($username,$password);

if($verify==true){
  echo "verified";

}
else{
  echo "User does not exist";
}
?>
</form>
</body>
</html>
