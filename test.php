<?php
include_once("users.php");

$sup= new users();
$sup->connect();
//($userID,$username,$password, $firstname, $lastname, $verification
//“Phrams2”,password of value, firstname of”Ford”,lastname of “ephram” and verification of 2.
$result=$sup->addNewUser("Phramou","newpass","Ephraim","Ayite",2);

echo $result;

if($result){
	echo "success";
}else{
	echo "failure";
}

?>