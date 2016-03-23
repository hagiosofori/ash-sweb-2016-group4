<?php
include_once("adb.php");

	class users extends adb
	{

		/**
		* Creates a new constructor of the class
		*/
		function users(){

		}

		/**
		* adds new user to the database
		* @param [all attributes needed to create a user]
		* @return boolean showing success or failure
		*/

		function addNewUser($username,$firstname,$lastname,$password,$type){
			$strQuery="insert into userinfo set
							username='$username',
							firstname='$firstname',
							lastname='$lastname',
							password=MD5('$password'),
							userType = '$type' ";
			return $this->query($strQuery);
		}


		/**
		* edits existing user in the database
		* @param [all attributes of a user]
		* @return boolean repersenting success or failure
		*/

		function editUser($userID,$username,$firstname,$lastname,$password,$userType){
			$strQuery= "update userinfo set
								username='$username',
								firstname='$firstname',
								lastname='$lastname',
								password=MD5('$password'),
								userType='$userType'
							where userID='$userID' ";
			return $this->query($strQuery);
		}

		/**
		* delete user from database
		* @param primary key of user's table
		* @return boolean representing success or failure
		*/
		function deleteUser($usercode){

			$strQuery ="Delete from userinfo where userID = $usercode";
			return $this->query($strQuery);

		}

		/**
		* get user, with primary key
		* @param primary key of user's table
		* @return row of user's attributes
		*/
		function getUser($usercode=false)
		{
			if($usercode==false){
				$strQuery ="Select * from userinfo";
			}
			else{
				$strQuery ="Select * from userinfo where userID = $usercode ";
			}

			return $this->query($strQuery);
		}

		/**
		* logs the user in, given accurate credentials
		* @param: user's login credentials
		* @return: boolean based on success or failure
		*/
		function login($userName,$password)
		{
			$strQuery = "Select * from userinfo where username = '$userName' and password = MD5('$password')";
			$data = $this->query($strQuery);
			$result=$this->fetch();
			if($result=="")
			{
				$result=false;
			}
			else{$this->toggleAvailability($result['userID']);}
			return $result;
		}

		/**
		* toggles the availability of the user whose id is passed as parameter
		* @param: user's id, or other unique identifier
		* @return: the new availability of the user
		*/
		function toggleAvailability($userID){
			$result = $this->getUser($userID);
			$result = $this->fetch();
			if($result['availability']==0){
				$available = 1;
			}
			else{$available = 0;}

			$strQuery="update userinfo set availability ='$available' where userID='$userID' ";
			return $this->query($strQuery);
		}


	}
?>
