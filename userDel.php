<?php
include_once("users.php");

 if(isset($_REQUEST['userID'])){
	$delUser = new users();
	$result=$delUser->deleteUser($_REQUEST['userID']);
}

header("Location:displayUser.php");
exit();

?>
