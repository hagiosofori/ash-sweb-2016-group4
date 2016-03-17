<?php
include_once("users.php");
$user = new users();
if(!isset($_REQUEST['username'])){
  exit();		//if no data, exit
}
if(isset($_REQUEST['username'])){

$userID =$_REQUEST['userID'];
$username=$_REQUEST['username'];
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$pword=$_REQUEST['password'];
$userType=$_REQUEST['userType'];



$result=$user->editUser($userID,$username,$firstname,$lastname,$pword,$userType);
}
header("Location:displayUser.php?userType=1");
exit();
?>
