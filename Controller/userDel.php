<?php
//Included the users class
include_once("../Model/users.php");

//Stores the user's ID
 if(isset($_REQUEST['userID'])){
	$delUser = new users();
	$result=$delUser->deleteUser($_REQUEST['userID']);
}

//Relocates to the display user page
header("Location:../View/displayUser.php?userType=1");
exit();

?>
