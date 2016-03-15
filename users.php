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
		
		/*
		* delete user from database
		* @param primary key of user's table
		* @return boolean representing success or failure
		*/
		function deleteUser($usercode)
		{
			$strQuery = "DELETE FROM users where usercode = $usercode";
			return $this->query($strQuery);
		}
		
		/*
		* get user, with primary key 
		* @param primary key of user's table
		* @return row of user's attributes
		*/
		function getUser($filter="")
		{
			$strQuery = "SELECT * from users".$filter;
			return $this->query($strQuery);
		}
		
		/*
		* logs the user in, given accurate credentials
		* @param: user's login credentials
		* @return: boolean based on success or failure
		*/
		function login(/*user's login credentials */)
		{
			
		}
		
		/*
		* toggles the availability of the user whose id is passed as parameter
		* @param: user's id, or other unique identifier
		* @return: the new availability of the user
		*/
		function toggleAvailability(/*primary identifier of user */){
			
		}
	}

?>