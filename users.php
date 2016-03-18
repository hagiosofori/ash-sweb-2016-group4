<?php
include_once("adb.php");

	class users extends adb
	{
		/*
		* adds new user to the database
		* @param [all attributes needed to create a user]
		* @returns boolean showing success or failure
		*/
		function addNewUser( $username,$password, $firstname, $lastname, $verification)
		{
			$query="insert into userinfo set username = '$username' ,
			password=MD5('$password'), firstname='$firstname', lastname = '$lastname', verification =$verification";
		$this->query($query);
		}
		
		/*
		* edits existing user in the database                                                             
		* @param [all attributes of a user]
		* @return boolean repersenting success or failure
		*/
		function editUser($userID,$username,$password, $firstname, $lastname, $verification)
		{
			$query="update userinfo set username = '$username' ,
			password=MD5('$password'), firstname='$firstname', lastname = '$lastname', verification =$verification where userID = $userID";
		$this->query($query);
		}
		
		
	}

?>