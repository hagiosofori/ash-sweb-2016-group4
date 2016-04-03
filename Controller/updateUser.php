<?php

//Includes the user's class
include_once("../Model/users.php");

//Creates a user object
$user = new users();

if(!isset($_REQUEST['username'])){
  exit();		//if no data, exit
}

//Stores the updated user information
if(isset($_REQUEST['username'])){

$userID =$_REQUEST['userID'];
$username=$_REQUEST['username'];
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$pword=$_REQUEST['password'];
$userType=$_REQUEST['userType'];
$email=$_REQUEST['email'];

//Calls the edit user method and passes the user information
$result=$user->editUser($userID,$username,$firstname,$lastname,$pword,$email,$userType);
}

//redirects to the displayUser page
header("Location:../View/displayUser.php?userType=1");
exit();
?>
