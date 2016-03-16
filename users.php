<?php
include_once("adb.php");

	class users extends adb
	{
		/*
		* Creates a new constructor of the class
		*/
		function users(){

		}
		/*
		* adds new user to the database
		* @param [all attributes needed to create a user]
		* @returns boolean showing success or failure
		*/
		function addNewUser($username,$firstname,$lastname,$password){
			$strQuery="insert into userinfo set
							username='$username',
							firstname='$firstname',
							lastname='$lastname',
							password=MD5('$password')";
			return $this->query($strQuery);
		}

		/*
		* edits existing user in the database
		* @param [all attributes of a user]
		* @return boolean repersenting success or failure
		*/
		function editUser(/*same parameters as above */)
		{

		}

		/*
		* delete user from database
		* @param primary key of user's table
		* @return boolean representing success or failure
		*/
		function deleteUser($usercode){

			$strQuery ="Delete from userinfo where USERCODE = $usercode";
			return $this->query($strQuery);

		}
		/*
		* get user, with primary key
		* @param primary key of user's table
		* @return row of user's attributes
		*/
		function getUser(/*primary key of users table*/)
		{

		}


		/*
		* logs the user in, given accurate credentials
		* @param: user's login credentials
		* @return: boolean based on success or failure
		*/
		function login($userName,$password)
		{
			$check=true;
			$strQuery = "Select * from userinfo where username = '$userName' and password = MD5('$password')";
			$data = $this->query($strQuery);
			$result=$this->fetch();
			if($result=="")
			{
				$check=false;
			}
			return $check;
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
